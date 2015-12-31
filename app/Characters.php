<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Characters extends Model {

   protected $table = 'characters';
   protected $primaryKey = 'character_id';

   public function cast()
	{
		return $this->belongsToMany('App\Persons');
	}

}
