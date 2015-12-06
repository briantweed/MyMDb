<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model {

	protected $table = 'movie_details';

	public function scopeOfMovie($query,$id)
	{
		return $query->where('movie_id', $id);
	}

} // end of model
