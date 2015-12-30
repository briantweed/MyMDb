<?php namespace App\Http\Controllers;

use DB;
use App\Movies;
use App\Studios;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateCreateMovie;

class MovieController extends Controller {

	use ImageFunctions, AdminChecks;

	private $isAdmin;

	public function __construct()
   {
  	  $this->isAdmin = $this->checkUserDetails();
   }

	public function index()
	{
		$movies = DB::table('movie_details')->paginate(48);
		foreach($movies as $movie)
		{
			$movie->cover = $this->checkImageExists($movie->cover, $movie->sort_name);
			$movie->cover_count = strlen($movie->cover);
		}
		$user = $this->isAdmin;
		return view('movies.index', compact('movies', 'user'));
	}

	public function show($id)
	{
		$movie = DB::table('movie_details')->where('movie_id', $id)->first();
		if(!$movie) return view('errors.404');
		$movie->cover = $this->checkImageExists($movie->cover, $movie->sort_name, false);
		$movie->cover_count = strlen($movie->cover);
		$movie->cast = DB::table('movie_cast')->where('movie_id', $id)->get();
		$movie->crew = DB::table('movie_crew')->where('movie_id', $id)->get();
		$movie->genres = DB::table('movie_categories')->where('movie_id', $id)->get();
		$movie->tags = DB::table('movie_tags')->where('movie_id', $id)->get();
		$last_viewed = DB::table('movie_viewings_most_recent')->where('movie_id', $id)->pluck('date');
		$movie->viewed = $last_viewed != '' ? date('jS F Y @ H:i', strtotime($last_viewed)) : NULL;
		$movie->rating_display = $this->makeRatingStars($movie->rating);
		$user = $this->isAdmin;
		return view('movies.show', compact('movie','user'));
	}

	public function create()
	{
		if(!$this->isAdmin) return view('auth.login');
		$fields = DB::table('forms')->where('form_name','create_movie')->orderBy('form_order', 'asc')->get();
		$certificates = DB::table('certificates')->lists('certificate_title', 'certificate_id');
		$studios = DB::table('studios')->orderBy('studio_name', 'asc')->lists('studio_name', 'studio_id');
		$formats = DB::table('formats')->lists('format_type', 'format_id');
		$user = $this->isAdmin;
		return view('movies.create', compact('fields', 'certificates', 'studios', 'formats', 'user'));
	}

	public function store(ValidateCreateMovie $request)
	{
		if(!$this->isAdmin) return view('auth.login');
		$data = $request->all();
		$data['movie_sort_name'] = $data['movie_sort_name'] == '' ? $data['movie_name'] : $data['movie_sort_name'];
		if($request->hasFile('movie_image_path'))
		{
			if ($request->file('movie_image_path')->isValid()) {
				$image_name = $this->createImageName($data['movie_sort_name']);
				$image = $request->file('movie_image_path')->move('images/covers', $image_name);
				$data['movie_image_path'] = $image_name;
			}
		}
		$data['movie_studio_id'] = is_numeric($data['movie_studio_id']) ? $data['movie_studio_id'] : $this->createNewStudio($data['movie_studio_id']);
		$data['movie_duplicate'] = $this->checkForDuplicateTitle($request->movie_name);
		$data['movie_purchased'] = date("Y-m-d", strtotime($data['movie_purchased'] ));
		foreach($data as &$value) $value = htmlentities($value , ENT_QUOTES);
		unset($value);
		$update = Movies::create($data);
		$inserted_id = $update->movie_id;
		return redirect()->action('MovieController@edit', [$inserted_id])->with('status', 'Movie Added Successfully');
	}

	public function edit($id)
	{
		if(!$this->isAdmin) return view('auth.login');
		$movie = DB::table('movies')->where('movie_id', $id)->first();
		if(!$movie) return view('errors.404');
		$movie->cover = $this->checkImageExists($movie->movie_image_path, $movie->movie_sort_name, false);
		$movie->cover_count = strlen($movie->cover);
		$fields = DB::table('forms')->where('form_name','create_movie')->orderBy('form_order', 'asc')->get();
		$certificates = DB::table('certificates')->lists('certificate_title', 'certificate_id');
		$studios = DB::table('studios')->orderBy('studio_name', 'asc')->lists('studio_name', 'studio_id');
		$formats = DB::table('formats')->lists('format_type', 'format_id');
		$user = $this->isAdmin;
		return view('movies.edit', compact('movie', 'fields', 'certificates', 'studios', 'formats', 'user'));
	}

	public function update($id, ValidateCreateMovie $request)
	{
		if(!$this->isAdmin) return view('auth.login');
		$movie = Movies::findorfail($id);
		$data = $request->all();
		$data['movie_sort_name'] = $data['movie_sort_name'] =='' ? $data['movie_name'] : $data['movie_sort_name'];
		if($request->hasFile('movie_image_path'))
		{
			if($request->file('movie_image_path')->isValid())
			{
				$image_name = $this->createImageName($data['movie_sort_name']);
				$image = $request->file('movie_image_path')->move('images/covers', $image_name);
				$data['movie_image_path'] = $image_name;
				$this->unlinkExistingImage('covers', $movie->movie_image_path);
			}
		}
		$data['movie_studio_id'] = is_numeric($data['movie_studio_id']) ? $data['movie_studio_id'] : $this->createNewStudio($data['movie_studio_id']);
		$data['movie_purchased'] = date("Y-m-d", strtotime($data['movie_purchased'] ));
		$movie->update($data);
		return redirect()->action('MovieController@edit', [$id])->with('status', 'Movie Updated Successfully');
	}

	public function destroy($id)
	{
		DB::table('movies')->where('movie_id', '=', $id)->delete();
		return redirect()->action('MovieController@edit', [$id-1])->with('status', 'Movie Deleted');
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


} // end fo class
