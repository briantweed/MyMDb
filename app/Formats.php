<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Formats extends Model {

   protected $primaryKey = 'format_id';

   public function movies()
   {
      return $this->hasMany('App\Movies', 'movie_id', 'format_id');
   }

}
