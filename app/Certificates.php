<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificates extends Model {

   protected $primaryKey = 'certificate_id';

   public function movies()
   {
      return $this->hasMany('App\Movies', 'movie_id', 'certificate_id');
   }

}
