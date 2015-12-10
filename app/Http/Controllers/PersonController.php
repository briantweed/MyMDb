<?php namespace App\Http\Controllers;

use App\Persons;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PersonController extends Controller {

	public function index()
	{
		$people = Persons::all();
		return view( 'lists.people.index', compact('people'));
	}

	public function show($id)
	{
		return $this->index();
	}

}
