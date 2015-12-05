<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Persons extends Model {

	public function scopeOfPerson($query,$id)
	{
		return $query->where('person_id', $id);
	}
}
