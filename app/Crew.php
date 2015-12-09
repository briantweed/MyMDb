<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Crew extends Model
{
	protected $table = 'movie_crew';

	public function scopeOfMovie($query,$id)
	{
		return $query->where('movie_id', $id);
	}

} // end of model
