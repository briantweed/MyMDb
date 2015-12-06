<?php namespace App\Http\Controllers;

use App\Movies;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class MovieController extends Controller {

	public function index()
	{
		$movies = Movies::all();
		return view( 'lists.movies.index', compact( 'movies' ) );
	}

	public function show( $id )
	{
		return Movies::ofMovie( $id )->get();
	}

}
