<?php namespace App\Http\Controllers;

use DB;
use Auth;
use App\Movies;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateCreateMovie;

class MovieController extends Controller {

	public function index()
	{
		$movies = DB::table('movie_details')->paginate(48);
		foreach($movies as $movie)
		{
			$movie->cover = $movie->cover == "" ? ucwords(substr($movie->sort_name,0,1)) : $movie->cover;
			$movie->cover_count = strlen($movie->cover);
		}
		$user = $this->checkUserDetails();
		return view( 'lists.movies.index', compact('movies','user'));
	}

	public function show($id)
	{
		$movie = DB::table('movie_details')->where('movie_id', $id)->first();
		$movie->cover = $movie->cover == "" ? ucwords(substr($movie->sort_name,0,1)) : $movie->cover;
		$movie->cover_count = strlen($movie->cover);
		$movie->cast = DB::table('movie_cast')->where('movie_id', $id)->get();
		$movie->crew = DB::table('movie_crew')->where('movie_id', $id)->get();
		$movie->genres = DB::table('movie_categories')->where('movie_id', $id)->get();
		$movie->tags = DB::table('movie_tags')->where('movie_id', $id)->get();
		$movie->viewed = date("jS F Y @ H:i",strtotime(DB::table('movie_viewings_most_recent')->where('movie_id', $id)->pluck('date')));
		$movie->rating_display = $this->makeRatingStars($movie->rating);
		$user = $this->checkUserDetails();
		return view('lists.movies.show', compact('movie','user'));
	}

	public function create()
	{
		$fields = DB::table('forms')->where('form_name','create_movie')->orderBy('form_order', 'asc')->get();
		$certificates = DB::table('certificates')->lists('certificate_title', 'certificate_id');
		$studios = DB::table('studios')->orderBy('studio_name', 'asc')->lists('studio_name', 'studio_id');
		$formats = DB::table('formats')->lists('format_type', 'format_id');
		$user = $this->checkUserDetails();
		return view('lists.movies.create', compact('fields', 'certificates', 'studios', 'formats','user'));
	}

	public function store(ValidateCreateMovie $request)
	{
		$data = $request->all();
		if ($request->file('movie_image_path')->isValid()) {
			$image_name = $this->createImageName($request->movie_sort_name);
			$image = $request->file('movie_image_path')->move('images/covers', $image_name);
			$data['movie_image_path'] = $image_name;
		}
		$data['movie_duplicate'] = $this->checkForDuplicateTitle($request->movie_name);
		$update = Movies::create($data);
		$inserted_id = $update->movie_id;
		return redirect()->action('MovieController@show', [$inserted_id])
							  ->with('status', 'Movie Added Successfully');
	}

	public function edit($id)
	{
		$movie = DB::table('movies')->where('movie_id', $id)->first();
		$movie->cover = $movie->movie_image_path == "" ? ucwords(substr($movie->movie_sort_name,0,1)) : $movie->movie_image_path;
		$movie->cover_count = strlen($movie->cover);
		$fields = DB::table('forms')->where('form_name','create_movie')->orderBy('form_order', 'asc')->get();
		$certificates = DB::table('certificates')->lists('certificate_title', 'certificate_id');
		$studios = DB::table('studios')->orderBy('studio_name', 'asc')->lists('studio_name', 'studio_id');
		$formats = DB::table('formats')->lists('format_type', 'format_id');
		$user = $this->checkUserDetails();
		return view('lists.movies.edit', compact('movie', 'fields', 'certificates', 'studios', 'formats','user'));
	}

	public function update($id, ValidateCreateMovie $request)
	{
		$movie = Movies::findorfail($id);
		$movie->update($request->all());
		return redirect()->action('MovieController@show', [$id])
							  ->with('status', 'Movie Updated Successfully');
	}


	/*
	| --------------------------------------------------
	|		Private Functions
	| --------------------------------------------------
	*/

	private function checkUserDetails()
	{
		return Auth::check() ? ( Auth::user() ? Auth::user() : false ) : false;
	}

	private function makeRatingStars($rating)
	{
		$stars = floor($rating/2);
		$html = "";
		for($x=0; $x<$stars; $x++) $html .= "<i class='ft icon-star'></i>";
		if($rating%2==1) $html .= "<i class='ft icon-star-half'></i>";
		return $html;
	}

	private function checkForDuplicateTitle($name)
	{
		return DB::table('movies')->where('movie_name', $name)->count() > 0 ? true : false;
	}

	private function createImageName($name)
	{
		return str_replace(" ", "_", ucwords(strtolower($name)))."_".date("U").".jpg";
	}

}
