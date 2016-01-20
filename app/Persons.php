<?php namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class Persons extends Model {

	protected $primaryKey = 'person_id';
	protected $fillable = array(
		'forename',
		'surname',
		'birthday',
		'deceased',
		'bio',
		'image'
	);

	public function roles()
	{
		return $this->belongsToMany('App\Movies', 'cast', 'person_id', 'movie_id')
						->withPivot('cast_id', 'character')
						->orderBy('released', 'desc');
	}

	public function positions()
	{
		return $this->belongsToMany('App\Movies', 'crew', 'person_id', 'movie_id')
						->withPivot('crew_id', 'position')
						->orderBy('released', 'desc')
						->orderByRaw(DB::raw("FIELD(position, 'Director','Producer','Writer','Composer' )"))
						->orderBy('name', 'asc');
	}

	public function directed()
	{
		return $this->belongsToMany('App\Movies', 'crew', 'person_id', 'movie_id')
						->withPivot('crew_id', 'position')
						->where('position', 'Director')
						->orderBy('released', 'desc')
						->orderBy('name', 'asc');
	}

	public function produced()
	{
		return $this->belongsToMany('App\Movies', 'crew', 'person_id', 'movie_id')
						->withPivot('crew_id', 'position')
						->where('position', 'Producer')
						->orderBy('released', 'desc')
						->orderBy('name', 'asc');
	}

	public function scripted()
	{
		return $this->belongsToMany('App\Movies', 'crew', 'person_id', 'movie_id')
						->withPivot('crew_id', 'position')
						->where('position', 'Writer')
						->orderBy('released', 'desc')
						->orderBy('name', 'asc');
	}

	public function scored()
	{
		return $this->belongsToMany('App\Movies', 'crew', 'person_id', 'movie_id')
						->withPivot('crew_id', 'position')
						->where('position', 'Composer')
						->orderBy('released', 'desc')
						->orderBy('name', 'asc');
	}

	public static function getActorCount($limit)
	{
		return Persons::select('persons.person_id', DB::raw('count(*) as count'), DB::raw('CONCAT(forename, " ", surname) as name'), 'image')
			->join('cast', 'cast.person_id', '=', 'persons.person_id')
			->groupBy('cast.person_id')
			->orderBy('count', 'desc')->orderBy('forename', 'asc')
			->take($limit)
			->get();
	}

	public static function getDirectorCount($limit)
	{
		return Persons::select('persons.person_id', DB::raw('count(*) as count'), DB::raw('CONCAT(forename, " ", surname) as name'), 'image')
			->join('crew', 'crew.person_id', '=', 'persons.person_id')
			->where('crew.position','director')
			->groupBy('crew.person_id')
			->orderBy('count', 'desc')->orderBy('forename', 'asc')
			->take($limit)
			->get();
	}

}
