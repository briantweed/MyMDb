<?php namespace App\Http\Controllers;

use App\Movies;
use App\Cast;
use App\Crew;
use App\Genres;
use App\Tags;
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
		$movie->crew = Crew::ofMovie($id)->get();
		$movie->genres = Genres::ofMovie($id)->get();
		$movie->tags = Tags::ofMovie($id)->get();
		$movie->rating_display = $this->makeRatingStars($movie->rating);
		return view('lists.movies.show', $movie);
	}

	private function makeRatingStars( $rating ) {
		$stars = floor($rating/2);
		$html  = "";
		for($x=0; $x<$stars; $x++) $html .= "<i class='ft icon-star'></i>";
		if($rating%2==1) $html .= "<i class='ft icon-star-half'></i>";
		return $html;
	}

}
