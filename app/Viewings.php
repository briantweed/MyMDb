<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Viewings extends Model {

	protected $table = 'viewings';
	protected $primaryKey = 'viewing_id';
	protected $fillable = array(
		'movie_id'
	);

	public function movie()
   {
      return $this->belongsTo('App\Movies', 'movie_id');
   }

} // end of model
