<?php namespace App\Http\Controllers;

use DB;
use DateTime;
use App\Persons;
use App\Http\Requests;
use App\Http\Controllers\Controller;

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
		return view('people.index', compact('people'));
	}

	public function show($id)
	{
		$person = DB::table('persons')->where('person_id', $id)->first();
		if(!$person) return view('errors.404');
		$person->img = $this->checkImageExists($person->person_image_path, $person->person_forename, false);
		$person->img_count = strlen($person->img);
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
}
