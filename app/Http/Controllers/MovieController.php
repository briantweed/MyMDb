<?php namespace App\Http\Controllers;

use DB;
use App\Movies;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;

class MovieController extends Controller {

	public function index()
	{
		$movies = DB::table('movie_details')->paginate(48);
		foreach($movies as $movie)
		{
			$movie->cover = $movie->cover != "" ? $movie->cover :  substr($movie->sort_name,0,1);
			$movie->cover_count = strlen($movie->cover);
		}
		return view( 'lists.movies.index', compact('movies'));
		// return $movies;
	}

	public function show($id)
	{
		$movie = DB::table('movie_details')->where('movie_id', $id)->first();
		$movie->released = date("jS F Y",strtotime($movie->release_date));
		$movie->cast = DB::table('movie_cast')->where('movie_id', $id)->get();
		$movie->crew = DB::table('movie_crew')->where('movie_id', $id)->get();
		$movie->genres = DB::table('movie_categories')->where('movie_id', $id)->get();
		$movie->tags = DB::table('movie_tags')->where('movie_id', $id)->get();
		$movie->viewed = date("jS F Y @ H:i",strtotime(DB::table('movie_viewings_most_recent')->where('movie_id', $id)->pluck('date')));
		$movie->rating_display = $this->makeRatingStars($movie->rating);
		return view('lists.movies.show', compact('movie'));
	}

	public function create()
	{
		$certificates = DB::table('certificates')->lists('certificate_title','certificate_id');
		$studios = DB::table('studios')->lists('studio_name','studio_id');
		$formats = DB::table('formats')->lists('format_type','format_id');
		return view('lists.movies.create', compact('certificates','studios','formats'));
	}

	public function store()
	{
		$post_data = Request::all();
		$update = Movies::create($post_data);
		$inserted_id = $update->id;
		return redirect()->action('MovieController@show', [$inserted_id])
							  ->with('status', 'Movie Added SUccessfully');
	}

	private function makeRatingStars($rating) {
		$stars = floor($rating/2);
		$html = "";
		for($x=0; $x<$stars; $x++) $html .= "<i class='ft icon-star'></i>";
		if($rating%2==1) $html .= "<i class='ft icon-star-half'></i>";
		return $html;
	}

}
