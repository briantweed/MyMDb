<?php namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class Persons extends Model {

	/**
	*
	* Person table primary key
	*
	*/
	protected $primaryKey = 'person_id';

	/**
	*
	* Table columns that can be updated
	*
	*/
	protected $fillable = array(
		'forename',
		'surname',
		'birthday',
		'deceased',
		'bio',
		'image',
		'imdb_id'
	);


	/**
	*
	* Pivot table relationship between Persons
	* and their acting roles
	*
	*/
	public function roles()
	{
		return $this->belongsToMany('App\Movies', 'cast', 'person_id', 'movie_id')
						->withPivot('cast_id', 'character', 'star')
						->orderBy('released', 'desc');
	}

	/**
	*
	* Pivot table relationship between Persons
	* and their directing/producing/writing/scoring roles
	*
	*/
	public function positions()
	{
		return $this->belongsToMany('App\Movies', 'crew', 'person_id', 'movie_id')
						->withPivot('crew_id', 'position')
						->orderBy('released', 'desc')
						->orderByRaw(DB::raw("FIELD(position, 'Director','Producer','Writer','Composer' )"))
						->orderBy('name', 'asc');
	}

	/**
	*
	* Pivot table relationship between Persons
	* and the films they have directed
	*
	*/
	public function directed()
	{
		return $this->belongsToMany('App\Movies', 'crew', 'person_id', 'movie_id')
						->withPivot('crew_id', 'position')
						->where('position', 'Director')
						->orderBy('released', 'desc')
						->orderBy('name', 'asc');
	}

	/**
	*
	* Pivot table relationship between Persons
	* and the films they have produced
	*
	*/
	public function produced()
	{
		return $this->belongsToMany('App\Movies', 'crew', 'person_id', 'movie_id')
						->withPivot('crew_id', 'position')
						->where('position', 'Producer')
						->orderBy('released', 'desc')
						->orderBy('name', 'asc');
	}

	/**
	*
	* Pivot table relationship between Persons
	* and the films they have writted
	*
	*/
	public function scripted()
	{
		return $this->belongsToMany('App\Movies', 'crew', 'person_id', 'movie_id')
						->withPivot('crew_id', 'position')
						->where('position', 'Writer')
						->orderBy('released', 'desc')
						->orderBy('name', 'asc');
	}

	/**
	*
	* Pivot table relationship between Persons
	* and the films they have composed for
	*
	*/
	public function scored()
	{
		return $this->belongsToMany('App\Movies', 'crew', 'person_id', 'movie_id')
						->withPivot('crew_id', 'position')
						->where('position', 'Composer')
						->orderBy('released', 'desc')
						->orderBy('name', 'asc');
	}

	/**
	*
	* Show the most popular actors that have not appeared in
	* entries tagged as TV shows.
	* @param integer $limit
	* @return Response
	*
	*/
	public static function getActorCount($limit)
	{
		return Persons::select('persons.person_id', DB::raw('count(*) as count'), DB::raw('CONCAT(forename, " ", surname) as name'), 'image')
			->join('cast', 'cast.person_id', '=', 'persons.person_id')
			->leftJoin('tags', 'tags.movie_id', '=', 'cast.movie_id')
			->leftJoin('keywords', 'keywords.keyword_id', '=', 'tags.keyword_id')
			->whereNull('keywords.word')
			->orWhere('keywords.word', '!=', 'TV')
			->groupBy('cast.person_id')
			->orderBy('count', 'desc')->orderBy('forename', 'asc')
			->take($limit)
			->get();
	}

	/**
	*
	* Show the most popular directors
	* @param integer $limit
	* @return Response
	*
	*/
	public static function getDirectorCount($limit)
	{
		return Persons::select('persons.person_id', DB::raw('count(*) as count'), DB::raw('CONCAT(forename, " ", surname) as name'), 'image')
			->join('crew', 'crew.person_id', '=', 'persons.person_id')
			->where('crew.position','director')
			->groupBy('crew.person_id')
			->orderBy('count', 'desc')
			->orderBy('forename', 'asc')
			->take($limit)
			->get();
	}

	/**
	*
	* Show all persons whose birthday is today
	* @return Response
	*
	*/
	public static function getTodaysBirthdays()
	{
		return Persons::select('persons.person_id', 'birthday', 'deceased', DB::raw('CONCAT(forename, " ", surname) as name'), 'image')
			->where(DB::raw('DATE_FORMAT(birthday,"%m-%d")'),DB::raw('DATE_FORMAT(NOW(),"%m-%d")'))
			->orderBy('forename', 'asc')
			->get();
	}

} // end of class
