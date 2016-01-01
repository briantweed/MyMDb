<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Cast extends Model {

   protected $primaryKey = 'cast_id';
   protected $fillable = array(
      'movie_id'
   );

}
