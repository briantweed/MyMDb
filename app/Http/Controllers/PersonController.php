<?php namespace App\Http\Controllers;

use App\Persons;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PersonController extends Controller {

	public function index()
	{
		return Persons::all();
	}

	public function show($id)
	{
		return Persons::ofPerson($id)->get();
	}

}
