<?php namespace App\Http\Controllers;

use DB;
use Request;
use DateTime;
use App\Cast;
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
		foreach($people as $person)
		{
			$person->birthday = date("jS F Y",strtotime($person->birthday));
			$person->cover = $this->checkImageExists($person->image, $person->forename, 'people', false);
			$person->cover_count = strlen($person->cover);
		}
		$user = $this->isAdmin;
		return view('people.index', compact('people','user'));
	}

	public function show($id)
	{
		$person = Persons::find($id);
		if(!$person) return view('errors.404');
		$person->movies;
		$person->image = $this->checkImageExists($person->image, $person->forename, 'people', false);
		$person->cover_count = strlen($person->image);
		if($person->birthday !== NULL)
		{
			$person->birthday = date('jS F Y', strtotime($person->birthday));
			$person->age = $this->calculateAge($person->birthday);
		}
		else
		{
			$person->birthday = "-";
			$person->age = "-";
		}
		$user = $this->isAdmin;
		return view('people.show', compact('person','user','roles'));
	}

	public function create()
	{
		if(!$this->isAdmin) return view('auth.login');
		$fields = DB::table('forms')->where('name','create_person')->orderBy('order', 'asc')->get();
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
			$data['birthday'] = $data['birthday'] ? date("Y-m-d", strtotime($data['birthday'])) : null;
			$update = Persons::create($data);
			$inserted_id = $update->person_id;
			return redirect()->action('PersonController@edit', [$inserted_id])->with('status', 'Person Added Successfully');
		}
		return redirect()->action('PersonController@create')->with('status', 'Person Already Exists');
	}

	public function edit($person_id)
	{
		if(!$this->isAdmin) return view('auth.login');
		$person = Persons::find($person_id);
		$person->movies;
		if(!$person) return view('errors.404');
		$person->image = $this->checkImageExists($person->image, $person->forename, 'people');
		$person->cover_count = strlen($person->image);
		$person->birthday = $person->birthday ? date('d-m-Y', strtotime($person->birthday)): "";
		$fields = DB::table('forms')->where('name','create_person')->orderBy('order', 'asc')->get();
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
		$data['birthday'] = $data['birthday'] ? date("Y/m/d", strtotime($data['birthday'])) : null;
		$person->update($data);
		return redirect()->action('PersonController@edit', [$id])->with('status', 'Details Updated Successfully');
	}


	public function addNewPerson()
	{
		$data = Request::all();

		$names = array_values(array_filter(explode(' ', $data['value'])));
		$forename = count($names) ? ucwords(strtolower(array_shift($names))) : "";
		$surname = count($names) ? ucwords(strtolower(implode(" ", $names))) : "";

		$app = app();
		$values = $app->make('stdClass');
		$values->forename = $forename;
		$values->surname = $surname;

		$fields = DB::table('forms')
					->where('name','create_person')
					->where('type', '!=', 'file')
					->orderBy('order', 'asc')
					->get();

		return (String) view('modal.create_person', compact('fields', 'values'));
	}

	public function createNewPerson()
	{
		if(!$this->isAdmin) return view('auth.login');
		$data = Request::all();
		$person_exist = $this->checkExistingPeople($data['forename'], $data['surname']);
		if(!$person_exist)
		{
			foreach($data as &$value) $value = htmlentities($value , ENT_QUOTES);
			unset($value);
			if($data['forename']!="" && $data['surname']!="")
			{
				$data['birthday'] = $data['birthday'] ? date("Y-m-d", strtotime($data['birthday'])) : null;
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
				$person->movies()->attach($movie_id, array('character' => $character_name));
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

	private function calculateAge($dob)
	{
		$date = new DateTime($dob);
		$now = new DateTime();
		$interval = $now->diff($date);
		return $interval->y;
	}

	private function checkExistingPeople($forename, $surname)
	{
		$existing = DB::table('persons')
						->where('forename', $forename)
						->where('surname', $surname)
						->first();
		if(count($existing)==0) return false;
		else return $existing->person_id;
	}
}
