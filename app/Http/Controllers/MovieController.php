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
		$movies = Movies::paginate(48);
		foreach($movies as $movie)
		{
			$movie->cover = $this->checkImageExists($movie->image, $movie->sort_name, 'covers');
			$movie->cover_count = strlen($movie->image);
		}
		$user = $this->isAdmin;
		return view('movies.index', compact('movies', 'user'));
	}

	public function show($id)
	{
		$movie = Movies::find($id);
		$movie->genres;
		$movie->studio;
		$movie->format;
		$movie->cast;
		$movie->crew;
		$movie->tags = [];
		if(!$movie) return view('errors.404');
		$movie->cover = $this->checkImageExists($movie->image, $movie->sort_name, 'covers', false);
		$movie->cover_count = strlen($movie->image);
		// $last_viewed = DB::table('movie_viewings_most_recent')->where('movie_id', $id)->pluck('date');
		// $movie->viewed = $last_viewed != '' ? date('jS F Y @ H:i', strtotime($last_viewed)) : NULL;
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
		$data['sort_name'] = $data['sort_name'] == '' ? $data['name'] : $data['sort_name'];
		if($request->hasFile('image'))
		{
			if ($request->file('image')->isValid()) {
				$image_name = $this->createImageName($data['sort_name']);
				$image = $request->file('image')->move('images/covers', $image_name);
				$data['image'] = $image_name;
			}
		}
		$data['studio_id'] = is_numeric($data['studio_id']) ? $data['studio_id'] : $this->createNewStudio($data['studio_id']);
		$data['duplicate'] = $this->checkForDuplicateTitle($request->name);
		$data['purchased'] = date("Y-m-d", strtotime($data['purchased'] ));
		foreach($data as &$value) $value = htmlentities($value , ENT_QUOTES);
		unset($value);
		$update = Movies::create($data);
		$inserted_id = $update->movie_id;
		return redirect()->action('MovieController@edit', [$inserted_id])->with('status', 'Movie Added Successfully');
	}

	public function edit($id)
	{

		if(!$this->isAdmin) return view('auth.login');
		$movie = Movies::find($id);
		if(!$movie) return view('errors.404');
		$movie->cover = $this->checkImageExists($movie->image, $movie->sort_name, 'covers', false);
		$movie->cover_count = strlen($movie->cover);
		$movie->genres;
		$movie->studio;
		$movie->format;
		$movie->cast;
		$movie->crew;
		$movie->tags = [];
		$fields = DB::table('forms')->where('name','create_movie')->orderBy('order', 'asc')->get();

		$certificates = DB::table('certificates')->lists('title', 'certificate_id');
		$studios = DB::table('studios')->orderBy('name', 'asc')->lists('name', 'studio_id');
		$formats = DB::table('formats')->lists('type', 'format_id');
		$user = $this->isAdmin;
		return view('movies.edit', compact('movie', 'fields', 'certificates', 'studios', 'formats', 'user'));
	}

	public function update($id, ValidateCreateMovie $request)
	{
		if(!$this->isAdmin) return view('auth.login');
		$movie = Movies::findorfail($id);
		$data = $request->all();
		$data['sort_name'] = $data['sort_name'] =='' ? $data['name'] : $data['sort_name'];
		if($request->hasFile('image'))
		{
			if($request->file('image')->isValid())
			{
				$image_name = $this->createImageName($data['sort_name']);
				$image = $request->file('image')->move('images/covers', $image_name);
				$data['image'] = $image_name;
				$this->unlinkExistingImage('covers', $movie->image);
			}
		}
		$data['studio_id'] = is_numeric($data['studio_id']) ? $data['studio_id'] : $this->createNewStudio($data['studio_id']);
		$data['purchased'] = date("Y-m-d", strtotime($data['purchased'] ));
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
		return DB::table('movies')->where('name', $name)->count() > 0 ? true : false;
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
