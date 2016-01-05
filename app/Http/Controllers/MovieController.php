<?php namespace App\Http\Controllers;

use DB;
use App\Movies;
use App\Studios;
use App\Viewings;
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
		$movies = Movies::orderBy('sort_name')->paginate(48);
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
		$movie = Movies::findorfail($id);

		$viewings = $movie->viewings()->select('date')->orderBy('date', 'desc')->first();
		$movie->last_viewed = $viewings ? date("jS F Y", strtotime($viewings->date)) : null;
		$movie->cover = $this->checkImageExists($movie->image, $movie->sort_name, 'covers', false);
		$movie->cover_count = strlen($movie->cover);
		$movie->rating_display = $this->makeRatingStars($movie->rating);

		$movie->genres;
		$movie->studio;
		$movie->format;
		$movie->cast;
		$movie->crew;
		$movie->tags;

		$user = $this->isAdmin;

		return view('movies.show', compact('movie','user'));
	}

	public function create()
	{
		if(!$this->isAdmin) return view('auth.login');
		$fields = DB::table('forms')->where('name','create_movie')->orderBy('order', 'asc')->get();

		$app = app();
		$options = $app->make('stdClass');
		$options->certificates = DB::table('certificates')->lists('title', 'certificate_id');
		$options->studios = DB::table('studios')->orderBy('name', 'asc')->lists('name', 'studio_id');
		$options->formats = DB::table('formats')->lists('type', 'format_id');

		$user = $this->isAdmin;

		return view('movies.create', compact('fields', 'options', 'user'));
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

		foreach($data as &$value) $value = htmlentities(trim($value), ENT_QUOTES);
		unset($value);

		$created = Movies::create($data);

		return redirect()->action('MovieController@edit', [$created->movie_id])->with('status', 'Movie Added Successfully');
	}

	public function edit($id)
	{
		if(!$this->isAdmin) return view('auth.login');

		$movie = Movies::findorfail($id);
		$movie->purchased = date("d-m-Y", strtotime($movie->purchased));
		$movie->cover = $this->checkImageExists($movie->image, $movie->sort_name, 'covers', false);
		$movie->cover_count = strlen($movie->cover);
		$values = json_decode($movie);

		$movie->studio;
		$movie->format;
		$movie->cast;
		$movie->crew;
		$movie->genres = DB::table('categories')->where('movie_id', $id)->lists('genre_id');
		$movie->tags = DB::table('tags')->where('movie_id', $id)->lists('keyword_id');
		$fields = DB::table('forms')->where('name','create_movie')->orderBy('order', 'asc')->get();

		$app = app();
		$options = $app->make('stdClass');

		$options->certificates = DB::table('certificates')->lists('title', 'certificate_id');
		$options->studios = DB::table('studios')->orderBy('name', 'asc')->lists('name', 'studio_id');
		$options->formats = DB::table('formats')->lists('type', 'format_id');

		$options->keywords = DB::table('keywords')->orderBy('word')->get();
		foreach($options->keywords as $keyword)
		{
			$keyword->selected = in_array($keyword->keyword_id, $movie->tags) ? true : false;
		}

		$options->genres = DB::table('genres')->orderBy('type')->get();
		foreach($options->genres as $genre)
		{
			$genre->selected = in_array($genre->genre_id, $movie->genres) ? true : false;
		}

		$user = $this->isAdmin;

		return view('movies.edit', compact('movie', 'fields', 'values', 'options', 'user'));
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

		if(isset($data['genres']))
		{
			$movie->genres()->sync($data['genres']);
		}
		else
		{
			$movie->genres()->detach();
		}

		if(isset($data['tags']))
		{
			$movie->tags()->sync($data['tags']);
		}
		else
		{
			$movie->tags()->detach();
		}

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
