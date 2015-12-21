<?php namespace App\Http\Controllers;

use DB;
use DateTime;
use App\Persons;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PersonController extends Controller {

	private $isAdmin;

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
		$person->img = $person->person_image_path==NULL ? ucwords(substr($person->person_forename,0,1)) : $person->person_image_path;
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
