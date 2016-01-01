<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Keywords extends Model {

   protected $table = 'keywords';
   protected $primaryKey = 'keyword_id';

   public function movies()
	{
		return $this->belongsToMany('App\Movies', 'keyword_id', 'movie_id');
	}

}
