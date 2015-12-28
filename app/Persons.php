<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Persons extends Model {

	protected $table = 'persons';
	protected $primaryKey = 'person_id';
	protected $fillable = array(
		'person_forename',
		'person_surname',
		'person_birthday',
		'person_bio',
		'person_image_path'
	);
}
