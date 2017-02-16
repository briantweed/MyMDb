<?php namespace App\Http\Controllers;

use DB;
use Image;
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

	use SharedFunctions, AdminChecks;

	protected $isAdmin;

	public function __construct()
   {
  	  $this->isAdmin = $this->checkUserDetails();
   }

	/**
	*
	* Show all persons
	* @return Response
	*
	*/
	public function index()
	{
		$people = Persons::orderBy('forename')
					->orderBy('surname')
					->paginate(96);
		$user = $this->isAdmin;
		return view('people.index', compact('people','user'));
	}

	/**
	*
	* Show selected person record
	* @param integer $person_id
	* @return Response
	*
	*/
	public function show($person_id)
	{
		$person = Persons::findorfail($person_id);
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

		$user = $this->isAdmin;
		return view('people.show', compact('person', 'user'));
	}

	/**
	*
	* Create form to add a new person record to the database
	* @return Response
	*
	*/
	public function create()
	{
		if(!$this->isAdmin) return view('auth.login');
		$fields = Forms::getFormFields('create_person', true);
		$user = $this->isAdmin;
		return view('people.create', compact('fields', 'user'));
	}

	/**
	*
	* Store a new person record to the database
	* @param array $request
	* @return Response
	*
	*/
	public function store(ValidateCreatePerson $request)
	{
		if(!$this->isAdmin) return view('auth.login');
		$data = $request->all();
		$person_exist = $this->checkExistingPeople($data['forename'], $data['surname']);
		if(!$person_exist)
		{
			if($request->image)
			{
				$content = file_get_contents($request->image);
				$image_name = $this->createImageName(trim($data['sort_name']));
				$fp = fopen('images/people/'.$image_name, "w");
				fwrite($fp, $content);
				fclose($fp);

				$img = Image::make('images/people/'.$image_name);
				$img->resize(300, 450);
				$img->save('images/people/'.$image_name);
				$data['image'] = $image_name;

			}
			else if($request->hasFile('image_upload'))
			{
				if ($request->file('image_upload')->isValid()) {
					$person_concat = strtolower($data['forename']." ".$data['surname']);
					$image_name = $this->createImageName($person_concat);
					$image = $request->file('image_upload')->move('images/people', $image_name);
					$data['image'] = $image_name;
				}
			}
			$data['forename'] = $this->formatName($data['forename']);
			$data['surname'] = $this->formatName($data['surname']);
			$data['bio'] = htmlentities($data['bio'], ENT_QUOTES);
			$data['birthday'] = $this->formatDate($data['birthday'], 'input');
			$data['deceased'] = $this->formatDate($data['deceased'], 'input');
			$update = Persons::create($data);
			$inserted_id = $update->person_id;
			return redirect()->action('PersonController@edit', [$inserted_id])->with('status', 'Person Added Successfully');
		}
		return redirect()->action('PersonController@create')->with('status', 'Person Already Exists');
	}

	/**
	*
	* Show form to edit an existing person record
	* @param integer $person_id
	* @return Response
	*
	*/
	public function edit($person_id)
	{
		if(!$this->isAdmin) return view('auth.login');
		$person = Persons::findorfail($person_id);
		$person->cover = $this->checkImageExists($person->image, $person->forename, 'people');
		$person->cover_count = strlen($person->cover);
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

	/**
	*
	* Update an exising person record
	* @param array $request
	* @return Response
	*
	*/
	public function update($id, ValidateCreatePerson $request)
	{
		if(!$this->isAdmin) return view('auth.login');
		$person = Persons::findorfail($id);
		$data = $request->all();
		if($request->hasFile('image_upload'))
		{
			if ($request->file('image_upload')->isValid()) {
				$person_concat = strtolower($data['forename'])."_".strtolower($data['surname']);
				$image_name = $this->createImageName($person_concat);
				$image = $request->file('image_upload')->move('images/people', $image_name);
				$data['image'] = $image_name;
				$this->unlinkExistingImage('people', $person->image);
			}
		}
		$data['forename'] = $this->formatName($data['forename']);
		$data['surname'] = $this->formatName($data['surname']);
		$data['bio'] = htmlentities($data['bio'], ENT_QUOTES);
		$data['birthday'] = $this->formatDate($data['birthday'], 'input');
		$data['deceased'] = $this->formatDate($data['deceased'], 'input');
		$person->update($data);
		return redirect()->action('PersonController@edit', [$id])->with('status', 'Details Updated Successfully');
	}

	/**
	*
	* Delete a person record from the database
	* @param integer $id
	* @return Response
	*
	*/
	public function destroy($id)
	{
		Persons::where('person_id', '=', $id)->delete();
		return redirect()->action('PersonController@edit', [$id-1])->with('status', 'Person Deleted');
	}

	/**
	*
	* Modal window, show form to create a new person record
	* @param array $request
	* @return Response
	*
	*/
	public function addNewPerson()
	{
		$data = Request::all();
		$names = array_values(array_filter(explode(' ', $data['value'])));
		$surname = count($names) ? $this->formatName(array_pop($names)) : "";
		$forename = count($names) ? $this->formatName(implode(" ", $names)) : "";

		$app = app();
		$values = $app->make('stdClass');
		$values->forename = $forename;
		$values->surname = $surname;

		$fields = Forms::getFormFields('create_person', false);

		return (String) view('modal.create_person', compact('fields', 'values'));
	}

	/**
	*
	* Modal window, create a new person record
	* only if that person doesn't already exist in the database
	* @param array $request
	* @return Response
	*
	*/
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
				if($data['image'])
				{
					$content = file_get_contents($data['image']);
					$image_name = $this->createImageName($data['forename']." ".$data['surname']);
					$fp = fopen('images/people/'.$image_name, "w");
					fwrite($fp, $content);
					fclose($fp);

					$img = Image::make('images/people/'.$image_name);
					$img->resize(300, 450);
					$img->save('images/people/'.$image_name);
					$data['image'] = $image_name;
				}

				$data['birthday'] = $this->formatDate($data['birthday'], 'input');
				$data['deceased'] = $this->formatDate($data['deceased'], 'input');

				$update = Persons::create($data);
				$inserted_id = $update->person_id;
				$new_person['value'] = $inserted_id;
				$new_person['text'] = $data['forename']." ".$data['surname'];
				return $new_person;
			}
			return "exists";
		}
		return "error";
	}

	/**
	*
	* Modal window, add new acting role
	* @param array $request
	* @return Response
	*
	*/
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
				$star = $data['star'];
				$person = Persons::findorfail($person_id);
				$person->roles()->attach($movie_id, array('character' => $character_name, 'star' => $star));
				return (String) view('people.roles', compact('person'));
			}
		}
		return "error";
	}

	/**
	*
	* Modal window, edit existing role
	* @param array $request
	* @return Response
	*
	*/
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
	         $star = $data['star'];
	         $person = Persons::findorfail($person_id);
				$person->roles()->updateExistingPivot($movie_id, array('character' => $character_name, 'star' => $star));
				return (String) view('people.roles', compact('person'));
	      }
      }
      return "error";
   }

	/**
	*
	* Modal window, delete role
	* @param array $request
	* @return Response
	*
	*/
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

	/**
	*
	* Check the person does not already exist in the database
	* @param string $forename
	* @param string $surname
	* @return Response
	*
	*/
	private function checkExistingPeople($forename, $surname)
	{
		$query = Persons::where('forename', $forename);
		If($surname!="") $query->where('surname', $surname);
		$existing = $query->first();
		if(count($existing)==0) return false;
		else return $existing->person_id;
	}

	/**
	*
	* Check for existing movies with the same title
	* Usually to detech if a movie is a remake
	* If true, release year displayed
	* @param string $text
	* @return Response
	*
	*/
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
			if($movie) return "<a href='/movies/".$movie->movie_id."'><b>".$movie->name." (".$movie->released.")</b></a>";
			else return $m[1];
		}, $text);
		return nl2br($output);
	}

} // end of class
