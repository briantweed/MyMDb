<?php namespace App\Http\Controllers;

use App\Movies;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class MovieController extends Controller {

	public function index()
	{
		return Movies::all();
	}

	public function show($id)
	{
		return Movies::ofMovie($id)->get();
	}

}
