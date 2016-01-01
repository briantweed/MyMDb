<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Viewings extends Model {

	protected $table = 'viewings';
	protected $primaryKey = 'viewing_id';

	public function movies()
   {
      return $this->belongsTo('App\Movies', 'viewing_id', 'movie_id');
   }

} // end of model
