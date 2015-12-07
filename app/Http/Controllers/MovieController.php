<?php namespace App\Http\Controllers;

use App\Movies;
use App\Cast;
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
		$movies = Movies::ofMovie($id)->get();
		$movie  = $movies[0];
		$movie->released = date("jS F Y",strtotime($movie->release_date));
		$movie->cast = Cast::ofMovie($id)->get();
		return view('lists.movies.show', $movie);
	}

}
