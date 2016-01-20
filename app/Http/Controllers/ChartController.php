<?php namespace App\Http\Controllers;

use DB;
use App\Movies;
use App\Persons;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateCreateMovie;

class ChartController extends Controller {

	use ImageFunctions, AdminChecks;

	private $isAdmin;

	public function __construct()
   {
  	  $this->isAdmin = $this->checkUserDetails();
   }

	public function index()
	{
		$app = app();
		$details = $app->make('stdClass');

		$details->decades = $this->makeDecades();

		$user = $this->isAdmin;

		return view('charts', compact('details', 'user'));
	}


	/*
	| --------------------------------------------------
	|		Private Functions
	| --------------------------------------------------
	*/


	private function makeDecades()
	{
		$decades = [];
		$start = 1930;
		$end = floor(date("Y")/10)*10;
		for($decade=$start; $decade<=$end; $decade+=10)
		{
			$decades[$decade] = $decade;
		}
		return $decades;
	}



} // end of class
