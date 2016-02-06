<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Cast extends Model {

   protected $table = 'cast';
   protected $primaryKey = 'cast_id';
   protected $fillable = array(
      'movie_id',
      'character',
      'star'
   );

}
