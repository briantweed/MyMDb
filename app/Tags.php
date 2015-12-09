<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
   protected $table = 'movie_tags';

   public function scopeOfMovie($query,$id)
   {
      return $query->where('movie_id', $id);
   }

} //end of model
