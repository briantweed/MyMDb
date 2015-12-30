<?php

use Illuminate\Database\Seeder;

class FormsTableSeeder extends Seeder {

	public function run()
	{
		// if( DB::table('forms')->count() ) DB::table('forms')->truncate();
		$existing = DB::table('forms')->count();
		if( !$existing )
		{

			$fields = [
				['create_movie','10','movie_name','Title','1','text','','','','','',''],
				['create_movie','20','movie_sort_name','Sort Name','0','text','','','','',''],
				['create_movie','30','movie_bio','Description','1','textarea','','','','',''],
				['create_movie','40','movie_purchased','Purchased','0','date','','','','',''],
				['create_movie','50','movie_my_rating','Rating','1','range','1','10','','',''],
				['create_movie','60','movie_release_date','Released','1','range','1930','9999','','',''],
				['create_movie','70','movie_running_time','Running Time','1','text','','','','',''],
				['create_movie','80','movie_certificate_id','Certificate','1','select','','','certificates','',''],
				['create_movie','90','movie_format_id','Format','1','select','','','formats','',''],
				['create_movie','100','movie_studio_id','Studio','1','select','','','studios','',''],
				['create_movie','110','movie_image_path','Image','0','file','','','','hello',''],
				['create_movie','120','','save','0','submit','','','','','btn btn-lg btn-block btn-success'],
				['create_person','10','person_forename','Name','1','text','','','','','',''],
				['create_person','20','person_surname','Surname','1','text','','','','','',''],
				['create_person','30','person_birthday','Born','0','date','','','','','',''],
				['create_person','40','person_bio','Bio','0','textarea','','','','','',''],
				['create_person','50','person_image_path','Photo','0','file','','','','','',''],
				['create_person','60','','save','0','submit','','','','','btn btn-lg btn-block btn-success'],
			];

			array_map( function( $field ) {
				DB::table('forms')->insert([
					'form_name' => $field[0],
					'form_order' => $field[1],
					'form_field' => $field[2],
					'form_label' => $field[3],
					'form_required' => $field[4],
					'form_type' => $field[5],
					'form_range_from' => $field[6],
					'form_range_to' => $field[7],
					'form_options' => $field[8],
					'form_default' => $field[9],
					'form_class' => $field[10]
				]);
			}, $fields);

		} // end of if

	} // end of method

} // end of class
