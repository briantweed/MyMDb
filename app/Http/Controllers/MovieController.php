<?php namespace App\Http\Controllers;

use DB;
use Request;
use App\Movies;
use App\Studios;
use App\Persons;
use App\Viewings;
use App\Keywords;
// use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateCreateMovie;

class MovieController extends Controller {

	use ImageFunctions, AdminChecks;

	private $isAdmin;

	public function __construct()
   {
  	  $this->isAdmin = $this->checkUserDetails();

   }


	/*
	| --------------------------------------------------
	|		Normal REST Functions
	| --------------------------------------------------
	*/

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

	public function edit($movie_id)
	{
		if(!$this->isAdmin) return view('auth.login');

		$movie = Movies::findorfail($movie_id);
		$movie->purchased = date("d-m-Y", strtotime($movie->purchased));
		$movie->cover = $this->checkImageExists($movie->image, $movie->sort_name, 'covers', false);
		$movie->cover_count = strlen($movie->cover);
		$values = json_decode($movie);

		$movie->studio;
		$movie->format;
		$movie->cast;
		$movie->crew;
		$movie->genres = DB::table('categories')->where('movie_id', $movie_id)->lists('genre_id');
		$movie->tags = DB::table('tags')->where('movie_id', $movie_id)->lists('keyword_id');
		$fields = DB::table('forms')->where('name','create_movie')->orderBy('order', 'asc')->get();

		$app = app();
		$options = $app->make('stdClass');

		$options->certificates = DB::table('certificates')->lists('title', 'certificate_id');
		$options->studios = DB::table('studios')->orderBy('name', 'asc')->lists('name', 'studio_id');
		$options->formats = DB::table('formats')->lists('type', 'format_id');
		$options->actors = Persons::select(DB::raw("CONCAT(forename, ' ', surname) AS full_name"), 'person_id')
								->whereNotIn('person_id', function($query) use ($movie_id)
								{
									$query->select('person_id')
											->from('cast')
											->where('movie_id', $movie_id);
								})
								->orderBy('forename')
								->lists('full_name', 'person_id')->all();

		$options->crew = Persons::select(DB::raw("CONCAT(forename, ' ', surname) AS full_name"), 'person_id')
								->orderBy('forename')
								->lists('full_name', 'person_id')->all();

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
	|		Ajax Calls
	| --------------------------------------------------
	*/


	public function addCastMember()
   {
		if($this->isAdmin)
		{
	      if(Request::ajax())
	      {
	         $data = Request::all();
	         $movie_id = $data['movie'];
	         $person_id = $data['person'];
	         $character_name = $data['character'];
	         $movie = Movies::findorfail($movie_id);
	         $movie->cast()->attach($person_id, array('character' => $character_name));
				return (String) view('movies.cast', compact('movie'));
	      }
      }
      return "error";
   }

	public function addCrewMember()
   {
		if($this->isAdmin)
		{
			if(Request::ajax())
	      {
	         $data = Request::all();
	         $movie_id = $data['movie'];
	         $person_id = $data['person'];
	         $crew_position = $data['position'];
	         $movie = Movies::findorfail($movie_id);
	         $movie->crew()->attach($person_id, array('position' => $crew_position));
				return (String) view('movies.crew', compact('movie'));
	      }
      }
      return "error";
   }

	public function removeCastMember()
   {
		if($this->isAdmin)
		{
	      if(Request::ajax())
	      {
	         $data = Request::all();
	         $movie_id = $data['movie'];
	         $person_id = $data['person'];
	         $movie = Movies::findorfail($movie_id);
	         $movie->cast()->detach($person_id);
				return (String) view('movies.cast', compact('movie'));
	      }
      }
      return "error";
   }

	public function removeCrewMember()
   {
		if($this->isAdmin)
		{
	      if(Request::ajax())
	      {
	         $data = Request::all();
	         $movie_id = $data['movie'];
	         $person_id = $data['person'];
	         $movie = Movies::findorfail($movie_id);
	         $movie->crew()->detach($person_id);
				return (String) view('movies.crew', compact('movie'));
	      }
      }
	   return "error";
   }

	public function addNewTag()
	{
		if($this->isAdmin)
		{
			if(Request::ajax())
			{
				$data = Request::all();
				$movie_id = $data['id'];
				$word = ucwords(strtolower(trim($data['word'])));
				if($word!=="")
				{
					if(!Keywords::where('word', $word)->exists())
					{
						$created = Keywords::create(['word'=>$word]);
						DB::table('tags')->insert(['movie_id'=>$movie_id, 'keyword_id'=>$created->keyword_id]);

						$app = app();
						$options = $app->make('stdClass');

						$tags = DB::table('tags')->where('movie_id', $movie_id)->lists('keyword_id');
						$options->keywords = DB::table('keywords')->orderBy('word')->get();
						foreach($options->keywords as $keyword)
						{
							$keyword->selected = in_array($keyword->keyword_id, $tags) ? true : false;
						}
						return (String) view('movies.tags', compact('options'));
					}
					return "exists";
				}
				return "blank";
			}
		}
		return "error";
	}


	/*
	| --------------------------------------------------
	|		Private Functions
	| --------------------------------------------------
	*/

	/**
	*
	* Takes the given rating and
	* converts it into stars
	*
	*/
	private function makeRatingStars($rating)
	{
		$html = '';
		$stars = floor($rating/2);
		for($x=0; $x<$stars; $x++) $html .= '<i class="ft icon-star"></i>';
		if($rating%2==1) $html .= '<i class="ft icon-star-half"></i>';
		return $html;
	}

	/**
	*
	* If the new name exists
	* show the year beside the title
	*
	*/
	private function checkForDuplicateTitle($name)
	{
		return DB::table('movies')->where('name', $name)->count() > 0 ? true : false;
	}

	/**
	*
	* Check if name exists, if not
	* add to the database
	*
	*/
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


} // end of class
