<?php namespace App\Http\Controllers;

use DB;
use App\Movies;
use App\Persons;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateCreateMovie;

class WelcomeController extends Controller {

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

		// most recent purchases
		$details->most_recent = Movies::getMovieRecords('purchased', 'DESC', 10);
		foreach($details->most_recent as $movie)
		{
			$movie->cover = $this->checkImageExists($movie->image, $movie->sort_name, 'covers');
			$movie->cover_count = strlen($movie->cover);
		}

		// top rated movies
		$details->top_rated = Movies::getMovieRecords('rating', 'DESC', 10);
		foreach($details->top_rated as $movie)
		{
			$movie->rating_display = $this->makeRatingStars($movie->rating);
		}

		// lowest rated movies
		$details->lowest_rated = Movies::getMovieRecords('rating', 'ASC', 10);
		foreach($details->lowest_rated as $movie)
		{
			$movie->rating_display = $this->makeRatingStars($movie->rating);
		}

		// get most popular actors
		$details->actors = Persons::getActorCount(10);
		foreach($details->actors as $actor)
		{
			$actor->cover = $this->checkImageExists($actor->image, $actor->name, 'people', false);
			$actor->cover_count = strlen($actor->cover);
		}

		// get most popular directors
		$details->directors = Persons::getDirectorCount(10);
		foreach($details->directors as $director)
		{
			$director->cover = $this->checkImageExists($director->image, $director->name, 'people', false);
			$director->cover_count = strlen($director->cover);
		}

		// highlight randomly selected movie
		$details->highlight = Movies::selectRandomFilm();
		$details->highlight->cover = $this->checkImageExists($details->highlight->image, $details->highlight->sort_name, 'covers');
		$details->highlight->cover_count = strlen($details->highlight->cover);
		$details->highlight->rating_display = $this->makeRatingStars($details->highlight->rating);

		$user = $this->isAdmin;

		return view('welcome', compact('details', 'user'));
	}



	/*
	| --------------------------------------------------
	|		Private Functions
	| --------------------------------------------------
	*/


	private function makeRatingStars($rating)
	{
		$html = '';
		$stars = floor($rating/2);
		for($x=0; $x<$stars; $x++) $html .= '<i class="ft icon-star"></i>';
		if($rating%2==1) $html .= '<i class="ft icon-star-half"></i>';
		return $html;
	}




} // end of class
