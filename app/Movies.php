<?php namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model {

	protected $primaryKey = 'movie_id';
	protected $fillable = array(
		'name',
		'sort_name',
		'imdb_id',
		'released',
		'purchased',
		'image',
		'rating',
		'running_time',
		'certificate_id',
		'format_id',
		'studio_id',
		'bio',
		'duplicate',
	);

	public function studio()
	{
		return $this->belongsTo('App\Studios', 'studio_id');
	}

	public function format()
	{
		return $this->belongsTo('App\Formats', 'format_id');
	}

	public function certificate()
	{
		return $this->belongsTo('App\Certificates', 'certificate_id');
	}

	public function cast()
	{
		return $this->belongsToMany('App\Persons', 'cast', 'movie_id', 'person_id')
						->withPivot('cast_id', 'character')
						->orderBy('forename', 'asc');
	}

	public function crew()
	{
		return $this->belongsToMany('App\Persons', 'crew', 'movie_id', 'person_id')
						->withPivot('crew_id', 'position')
						->orderByRaw(DB::raw("FIELD(position, 'Director','Producer','Writer','Composer' )"))
						->orderBy('forename', 'asc');
	}

	public function genres()
	{
		return $this->belongsToMany('App\Genres', 'categories', 'movie_id', 'genre_id');
	}

	public function tags()
	{
		return $this->belongsToMany('App\Keywords', 'tags', 'movie_id', 'keyword_id');
	}

	public function viewings()
   {
      return $this->hasMany('App\Viewings', 'movie_id');
   }

	public static function getMovieRecords($sort_by, $direction, $limit)
	{
 		return Movies::orderBy($sort_by, $direction)
							->orderBy('name', 'ASC')
							->take($limit)
							->get();
	}

	public static function getTopRated()
	{
 		$top_movies = Movies::where('rating', '10')
							->orderBy('name', 'ASC')
							->get();
		if(count($top_movies)<10) return Movies::getMovieRecords('rating', 'desc', '10');
		else return $top_movies;
	}

	public static function selectRandomFilm()
	{
		$movie_ids = Movies::select('movie_id')
						->where('bio', '!=', '')
						->has('cast')
						->get()
						->toArray();

		$selected_movie = array_rand($movie_ids, 1);
		return $selected_movie;
	}

} // end of model
