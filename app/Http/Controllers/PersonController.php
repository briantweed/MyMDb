<?php namespace App\Http\Controllers;

use DB;
use App\Persons;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PersonController extends Controller {

	public $isAdmin;

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
		$person->img = $person->person_image_path == '' ? ucwords(substr($person->person_forename,0,1)) : $person->person_image_path;
		$person->img_count = strlen($person->img);
		$roles  = DB::table('movie_cast')->where('person_id', $id)->get();
		if(!$person) return view('errors.404');
		$person->birthday = $person->person_birthday != '' ? date('jS F Y', strtotime($person->person_birthday)) : NULL;
		$user = $this->isAdmin;
		return view('people.show', compact('person','user','roles'));
	}

}
