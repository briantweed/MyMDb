<?php namespace App\Http\Controllers;

use DB;
use App\Movies;
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

		$most_recent = DB::table('movie_details')->orderBy('purchased', 'desc')->orderBy('name', 'asc')->take(10)->get();
		foreach($most_recent as $movie)
		{
			$movie->cover = $this->checkImageExists($movie->cover, $movie->sort_name);
			$movie->cover_count = strlen($movie->cover);
		}
		$details->most_recent = $most_recent;

		$top_rated = DB::table('movie_details')->orderBy('rating', 'desc')->orderBy('name', 'asc')->take(10)->get();
		foreach($top_rated as $movie)
		{
			$movie->rating_display = $this->makeRatingStars($movie->rating);
		}
		$details->top_rated = $top_rated;

		$lowest_rated = DB::table('movie_details')->orderBy('rating', 'asc')->orderBy('name', 'asc')->take(10)->get();
		foreach($lowest_rated as $movie)
		{
			$movie->rating_display = $this->makeRatingStars($movie->rating);
		}
		$details->lowest_rated = $lowest_rated;

		$actors = DB::table('movie_cast')
					->select(DB::raw('count(*) as count'), DB::raw('CONCAT(forename, " ", surname) as name'),'image')
					->groupBy('person_id')
					->orderBy('count', 'desc')->orderBy('surname', 'asc')->take(10)->get();
		$details->actors = $actors;

		$highlight = $this->selectRandomFilm();
		$highlight->cover = $this->checkImageExists($highlight->cover, $highlight->sort_name);
		$highlight->cover_count = strlen($highlight->cover);

		$user = $this->isAdmin;

		return view('welcome', compact('details', 'highlight', 'user'));
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

	private function selectRandomFilm()
	{
		$movie_ids = DB::table('movies')->lists('movie_id');
		$selected_movie = array_rand($movie_ids, 1);
		$movie = DB::table('movie_details')->where('movie_id', $selected_movie)->first();
		return $movie;
	}


} // end of class
