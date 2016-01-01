<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Genres extends Model {

   protected $table = 'genres';
   protected $primaryKey = 'genre_id';

   public function movies()
	{
		return $this->belongsToMany('App\Movies', 'genre_id', 'movie_id');
	}

}
