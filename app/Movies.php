<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model {

	public function scopeOfMovie($query,$id)
	{
		return $query->where('movie_id', $id);
	}
}
