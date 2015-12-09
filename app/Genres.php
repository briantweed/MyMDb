<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Genres extends Model
{
   protected $table = 'movie_categories';

   public function scopeOfMovie($query,$id)
   {
      return $query->where('movie_id', $id);
   }

} //end of model
