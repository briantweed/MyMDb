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
		$most_recent = DB::table('movie_details')->orderBy('purchased', 'desc')->orderBy('name', 'asc')->take(10)->get();
		foreach($most_recent as $movie)
		{
			$movie->cover = $this->checkImageExists($movie->cover, $movie->sort_name);
			$movie->cover_count = strlen($movie->cover);
		}

		$top_rated = DB::table('movie_details')->orderBy('rating', 'desc')->orderBy('name', 'asc')->take(10)->get();
		foreach($top_rated as $movie)
		{
			$movie->rating_display = $this->makeRatingStars($movie->rating);
		}
		$user = $this->isAdmin;

		$worst_rated = DB::table('movie_details')->orderBy('rating', 'asc')->orderBy('name', 'asc')->take(10)->get();
		foreach($worst_rated as $movie)
		{
			$movie->rating_display = $this->makeRatingStars($movie->rating);
		}
		$user = $this->isAdmin;

		$highlight = $this->selectRandomFilm();
		$highlight->cover = $this->checkImageExists($highlight->cover, $highlight->sort_name);
		$highlight->cover_count = strlen($highlight->cover);

		return view('welcome', compact('most_recent', 'top_rated', 'worst_rated', 'highlight', 'user'));
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

	private function checkForDuplicateTitle($name)
	{
		return DB::table('movies')->where('movie_name', $name)->count() > 0 ? true : false;
	}

	private function createNewStudio($name)
	{
		$existing = DB::table('studios')->where('studio_name', $name)->first();
		if(count($existing)==0) {
			$values = ['studio_name'=>$name];
			$update = Studios::create($values);
			return $update->studio_id;
		}
		else return $existing->studio_id;
	}

	private function selectRandomFilm()
	{
		$movie_ids = DB::table('movies')->lists('movie_id');
		$selected_movie = array_rand($movie_ids, 1);
		$movie = DB::table('movie_details')->where('movie_id', $selected_movie)->first();
		return $movie;
	}


} // end fo class
