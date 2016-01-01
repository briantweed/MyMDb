<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model {

	protected $primaryKey = 'movie_id';
	protected $fillable = array(
		'name',
		'sort_name',
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
		return $this->belongsTo('App\Studios','studio_id');
	}

	public function format()
	{
		return $this->belongsTo('App\Formats','format_id');
	}

	public function certificate()
	{
		return $this->belongsTo('App\Certificates','certificate_id');
	}

	public function cast()
	{
		return $this->belongsToMany('App\Persons', 'cast', 'movie_id', 'person_id')->withPivot('character');
	}

	public function crew()
	{
		return $this->belongsToMany('App\Persons', 'crew', 'movie_id', 'person_id')->withPivot('position');
	}

	public function genres()
	{
		return $this->belongsToMany('App\Genres', 'categories', 'movie_id', 'genre_id');
	}

	public static function getMovieRecords($sort_by, $direction, $limit)
	{
 		return Movies::orderBy($sort_by, $direction)->orderBy('name', 'ASC')->take($limit)->get();
	}

	public static function selectRandomFilm()
	{
		$movie_ids = Movies::select('movie_id')->get()->toArray();
		$selected_movie = array_rand($movie_ids, 1);
		$movie = Movies::find($selected_movie);
		return $movie;
	}

} // end of model
