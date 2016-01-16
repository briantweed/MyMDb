<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Forms extends Model {

   protected $table = 'forms';
   protected $primaryKey = 'id';
   protected $fillable = array(
		'name',
		'field',
		'label',
		'required',
		'type',
		'order',
   );

   public static function getFormFields($name, $withFiles = true)
   {
      $query = Forms::where('name',$name);
      if(!$withFiles) $query->where('type', '!=', 'file');
      $query->orderBy('order', 'asc');
      return $query->get();
   }

}
