<?php

use Illuminate\Database\Seeder;

class FormsTableSeeder extends Seeder {

	public function run()
	{
		if( DB::table('forms')->count() ) DB::table('forms')->truncate();
		$existing = DB::table('forms')->count();
		if( !$existing )
		{

			$fields = [
				['create_movie','10','movie_name','Title','text','','','','','',''],
				['create_movie','20','movie_sort_name','Sort Name','text','','','','',''],
				['create_movie','30','movie_bio','Description','textarea','','','','',''],
				['create_movie','40','movie_my_rating','Rating','range','1','10','','',''],
				['create_movie','50','movie_release_date','Released','range','1930','9999','','',''],
				['create_movie','60','movie_running_time','Running Time','text','','','','',''],
				['create_movie','70','movie_certificate_id','Certificate','select','','','certificates','',''],
				['create_movie','80','movie_format_id','Format','select','','','formats','',''],
				['create_movie','90','movie_studio_id','Studio','select','','','studios','',''],
				['create_movie','100','movie_image_path','Image','file','','','','hello',''],
				['create_movie','110','','save','submit','','','','','btn btn-lg btn-block btn-success'],
				['create_movie','999','','end','','','','','',''],
			];

			array_map( function( $field ) {
				DB::table('forms')->insert([
					'form_name' => $field[0],
					'form_order' => $field[1],
					'form_field' => $field[2],
					'form_label' => $field[3],
					'form_type' => $field[4],
					'form_range_from' => $field[5],
					'form_range_to' => $field[6],
					'form_options' => $field[7],
					'form_default' => $field[8],
					'form_class' => $field[9]
				]);
			}, $fields);

		} // end of if

	} // end of method

} // end of class
