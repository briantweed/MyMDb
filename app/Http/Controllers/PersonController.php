<?php namespace App\Http\Controllers;

use DB;
use DateTime;
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
		$people = Persons::all();
		foreach($people as $person)
		{
			$person->birthday = date("jS F Y",strtotime($person->person_birthday));
		}
		$user = $this->isAdmin;
		return view('people.index', compact('people','user'));
	}

	public function show($id)
	{
		$person = DB::table('persons')->where('person_id', $id)->first();
		if(!$person) return view('errors.404');
		$person->image = $this->checkImageExists($person->person_image_path, $person->person_forename, 'people', false);
		$person->cover_count = strlen($person->image);
		$roles = DB::table('movie_cast')->where('person_id', $id)->get();
		if(!$person) return view('errors.404');
		if($person->person_birthday !== NULL)
		{
			$person->birthday = date('jS F Y', strtotime($person->person_birthday));
			$person->age = $this->calculateAge($person->person_birthday);
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
		$fields = DB::table('forms')->where('form_name','create_person')->orderBy('form_order', 'asc')->get();
		$user = $this->isAdmin;
		return view('people.create', compact('fields', 'user'));
	}

	public function store(ValidateCreatePerson $request)
	{
		if(!$this->isAdmin) return view('auth.login');
		$data = $request->all();
		$person_exist = $this->checkExistingPeople($data['person_forename'], $data['person_surname']);
		if(!$person_exist)
		{
			if($request->hasFile('person_image_path'))
			{
				if ($request->file('person_image_path')->isValid()) {
					$person_concat = strtolower($data['person_forename']." ".$data['person_surname']);
					$image_name = $this->createImageName($person_concat);
					$image = $request->file('person_image_path')->move('images/people', $image_name);
					$data['person_image_path'] = $image_name;
				}
			}
			foreach($data as &$value) $value = htmlentities($value , ENT_QUOTES);
			unset($value);
			$data['person_birthday'] = date("Y-m-d", strtotime($data['person_birthday']));
			$update = Persons::create($data);
			$inserted_id = $update->person_id;
			return redirect()->action('PersonController@edit', [$inserted_id])->with('status', 'Person Added Successfully');
		}
		return redirect()->action('PersonController@create')->with('status', 'Person Already Exists');
	}

	public function edit($id)
	{
		if(!$this->isAdmin) return view('auth.login');
		$person = DB::table('persons')->where('person_id', $id)->first();
		if(!$person) return view('errors.404');
		$person->image = $this->checkImageExists($person->person_image_path, $person->person_forename, 'people');
		$person->cover_count = strlen($person->image);
		$fields = DB::table('forms')->where('form_name','create_person')->orderBy('form_order', 'asc')->get();
		$user = $this->isAdmin;
		return view('people.edit', compact('person', 'fields', 'user'));
	}

	public function update($id, ValidateCreatePerson $request)
	{
		if(!$this->isAdmin) return view('auth.login');
		$person = Persons::findorfail($id);
		$data = $request->all();
		if($request->hasFile('person_image_path'))
		{
			if ($request->file('person_image_path')->isValid()) {
				$person_concat = strtolower($data['person_forename'])."_".strtolower($data['person_surname']);
				$image_name = $this->createImageName($person_concat);
				$image = $request->file('person_image_path')->move('images/people', $image_name);
				$data['person_image_path'] = $image_name;
				$this->unlinkExistingImage('people', $person->person_image_path);
			}
		}
		$data['person_birthday'] = date("Y/m/d", strtotime($data['person_birthday']));
		$person->update($data);
		return redirect()->action('PersonController@edit', [$id])->with('status', 'Details Updated Successfully');
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
						->where('person_forename', $forename)
						->where('person_surname', $surname)
						->first();
		if(count($existing)==0) return false;
		else return $existing->person_id;
	}
}
