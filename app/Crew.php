<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Crew extends Model {

   protected $table = 'crew';
   protected $primaryKey = 'crew_id';
   protected $fillable = array(
      'movie_id'
   );

}
