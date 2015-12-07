<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Cast extends Model {

	protected $table = 'movie_cast';

	public function scopeOfMovie($query,$id)
	{
		return $query->where('movie_id', $id);
	}

} // end of model
