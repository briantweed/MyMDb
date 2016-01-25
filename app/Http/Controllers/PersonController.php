<?php namespace App\Http\Controllers;

use DB;
use Request;
use DateTime;
use App\Cast;
use App\Forms;
use App\Movies;
use App\Persons;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateCreatePerson;

class PersonController extends Controller {

	use ImageFunctions, AdminChecks;

	protected $isAdmin;

	public function __construct()
   {
  	  $this->isAdmin = $this->checkUserDetails();
   }

	public function index()
	{
		$people = Persons::orderBy('forename')->paginate(48);
		$user = $this->isAdmin;
		return view('people.index', compact('people','user'));
	}

	public function show($id)
	{
		$person = Persons::findorfail($id);
		$person->image = $this->checkImageExists($person->image, $person->forename, 'people');
		$person->cover_count = strlen($person->image);
		if($person->birthday !== NULL)
		{
			$person->birthday =$this->formatDate($person->birthday, 'display');
			$person->age = $this->calculateAge($person->birthday, $person->deceased);
		}
		else
		{
			$person->birthday = "-";
			$person->age = "-";
		}
		$person->deceased = $this->formatDate($person->deceased, 'display');
		$person->bio = $this->checkForMovies($person->bio);

		$talents = [];
		if(count($person->roles)) $talents[] = "Actor";
		if(count($person->directed)) $talents[] = "Director";
		if(count($person->produced)) $talents[] = "Producer";
		if(count($person->scripted)) $talents[] = "Writer";
		if(count($person->composer)) $talents[] = "Composer";
		$person->synops = implode(", ", $talents);

		$user = $this->isAdmin;
		return view('people.show', compact('person', 'user'));
	}

	public function create()
	{
		if(!$this->isAdmin) return view('auth.login');
		$fields = Forms::getFormFields('create_person', true);
		$user = $this->isAdmin;
		return view('people.create', compact('fields', 'user'));
	}

	public function store(ValidateCreatePerson $request)
	{
		if(!$this->isAdmin) return view('auth.login');
		$data = $request->all();
		$person_exist = $this->checkExistingPeople($data['forename'], $data['surname']);
		if(!$person_exist)
		{
			if($request->hasFile('image'))
			{
				if ($request->file('image')->isValid()) {
					$person_concat = strtolower($data['forename']." ".$data['surname']);
					$image_name = $this->createImageName($person_concat);
					$image = $request->file('image')->move('images/people', $image_name);
					$data['image'] = $image_name;
				}
			}
			foreach($data as &$value) $value = htmlentities($value , ENT_QUOTES);
			unset($value);
			$data['birthday'] = $this->formatDate($data['birthday'], 'input');
			$data['deceased'] = $this->formatDate($data['deceased'], 'input');
			$update = Persons::create($data);
			$inserted_id = $update->person_id;
			return redirect()->action('PersonController@edit', [$inserted_id])->with('status', 'Person Added Successfully');
		}
		return redirect()->action('PersonController@create')->with('status', 'Person Already Exists');
	}

	public function edit($person_id)
	{
		if(!$this->isAdmin) return view('auth.login');
		$person = Persons::findorfail($person_id);
		$person->image = $this->checkImageExists($person->image, $person->forename, 'people');
		$person->cover_count = strlen($person->image);
		$person->birthday =$this->formatDate($person->birthday, 'output');
		$person->deceased = $this->formatDate($person->deceased, 'output');
		$fields = Forms::getFormFields('create_person', true);
		$values = json_decode($person);
		$user = $this->isAdmin;

		$app = app();
		$options = $app->make('stdClass');
		$options->movies = Movies::select('name', 'movie_id')
								->whereNotIn('movie_id', function($query) use ($person_id) {
									$query->select('movie_id')
											->from('cast')
											->where('person_id', $person_id);
								})
								->orderBy('name')
								->lists('name', 'movie_id')->all();
		return view('people.edit', compact('person', 'fields', 'values', 'options', 'user'));
	}

	public function update($id, ValidateCreatePerson $request)
	{
		if(!$this->isAdmin) return view('auth.login');
		$person = Persons::findorfail($id);
		$data = $request->all();
		if($request->hasFile('image'))
		{
			if ($request->file('image')->isValid()) {
				$person_concat = strtolower($data['forename'])."_".strtolower($data['surname']);
				$image_name = $this->createImageName($person_concat);
				$image = $request->file('image')->move('images/people', $image_name);
				$data['image'] = $image_name;
				$this->unlinkExistingImage('people', $person->image);
			}
		}
		$data['birthday'] = $this->formatDate($data['birthday'], 'input');
		$data['deceased'] = $this->formatDate($data['deceased'], 'input');
		$person->update($data);
		return redirect()->action('PersonController@edit', [$id])->with('status', 'Details Updated Successfully');
	}

	public function destroy($id)
	{
		Persons::where('person_id', '=', $id)->delete();
		return redirect()->action('PersonController@edit', [$id-1])->with('status', 'Person Deleted');
	}

	public function addNewPerson()
	{
		$data = Request::all();
		$names = array_values(array_filter(explode(' ', $data['value'])));
		$surname = count($names) ? ucwords(strtolower(array_pop($names))) : "";
		$forename = count($names) ? ucwords(strtolower(implode(" ", $names))) : "";

		$app = app();
		$values = $app->make('stdClass');
		$values->forename = $forename;
		$values->surname = $surname;

		$fields = Forms::getFormFields('create_person', false);

		return (String) view('modal.create_person', compact('fields', 'values'));
	}

	public function createNewPerson()
	{
		if(!$this->isAdmin) return view('auth.login');
		$data = Request::all();
		$person_exist = $this->checkExistingPeople($data['forename'], $data['surname']);
		if(!$person_exist)
		{
			foreach($data as &$value) $value = htmlentities(trim($value) , ENT_QUOTES);
			unset($value);
			if($data['forename']!="" && $data['surname']!="")
			{
				$data['birthday'] = $this->formatDate($data['birthday'], 'input');
				$data['deceased'] = $this->formatDate($data['deceased'], 'input');
				$update = Persons::create($data);
				$inserted_id = $update->person_id;
				$new_person['value']  = $inserted_id;
				$new_person['text']  = $data['forename']." ".$data['surname'];
				return $new_person;
			}
			return "exists";
		}
		return "error";
	}

	public function addNewRole()
	{
		if($this->isAdmin)
		{
			if(Request::ajax())
			{
				$data = Request::all();
				$movie_id = $data['movie'];
				$person_id = $data['person'];
				$character_name = $data['character'];
				$person = Persons::findorfail($person_id);
				$person->roles()->attach($movie_id, array('character' => $character_name));
				return (String) view('people.roles', compact('person'));
			}
		}
		return "error";
	}

	public function editRole()
   {
		if($this->isAdmin)
		{
	      if(Request::ajax())
	      {
	         $data = Request::all();
	         $movie_id = $data['movie'];
	         $person_id = $data['person'];
	         $character_name = $data['character'];
	         $person = Persons::findorfail($person_id);
				$person->roles()->updateExistingPivot($movie_id, array('character' => $character_name));
				return (String) view('people.roles', compact('person'));
	      }
      }
      return "error";
   }

	public function removeMovieRole()
   {
		if($this->isAdmin)
		{
	      if(Request::ajax())
	      {
	         $data = Request::all();
	         $cast_id = $data['movie'];
				$person_id = $data['person'];
				$person = Persons::findorfail($person_id);
	         Cast::find($cast_id)->delete();
				return (String) view('people.roles', compact('person'));
	      }
      }
      return "error";
   }

	/*
	| --------------------------------------------------
	|		Private Functions
	| --------------------------------------------------
	*/

	private function calculateAge($dob, $dop)
	{
		$date = new DateTime($dob);
		$now = $dop ? new DateTime($dop) : new DateTime();
		$interval = $now->diff($date);
		return $interval->y;
	}

	private function checkExistingPeople($forename, $surname)
	{
		$existing = Persons::where('forename', $forename)
						->where('surname', $surname)
						->first();
		if(count($existing)==0) return false;
		else return $existing->person_id;
	}

	private function checkForMovies($text)
	{
		$output = preg_replace_callback('/\{{(.*?)}}/', function($m) {
			$crumbs = explode("(", $m[1]);
			$query_name = trim($crumbs[0]);
			$query = Movies::where('name', $query_name);
			if(isset($crumbs[1]))
			{
				$query_year = rtrim($crumbs[1], ")");
				if(is_integer($query_year)) $query->where('released', $query_year);
			}
			$movie = $query->first();
			if($movie) return "<a href='/MyMDb/public/movies/".$movie->movie_id."'><b>".$movie->name." (".$movie->released.")</b></a>";
			else return $m[1];
		}, $text);
		return $output;
	}

	private function formatDate($date, $type)
	{
		if($date)
		{
			$output = new DateTime($date);
			switch($type)
			{
				case 'input': $format = 'Y-m-d'; break;
				case 'output': $format = 'd-m-Y'; break;
				case 'display': $format = 'jS F Y'; break;
			}
			return $output->format($format);
		}
		return null;
	}
}
