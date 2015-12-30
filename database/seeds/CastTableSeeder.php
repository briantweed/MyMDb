<?php

use Illuminate\Database\Seeder;

class CastTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('cast')->delete();
        
		\DB::table('cast')->insert(array (
			0 => 
			array (
				'cast_id' => 1,
				'cast_movie_id' => 1,
				'cast_person_id' => 1,
				'cast_character_id' => 1,
				'cast_order' => 1,
				'updated_at' => '0000-00-00 00:00:00',
				'created_at' => '0000-00-00 00:00:00',
			),
			1 => 
			array (
				'cast_id' => 2,
				'cast_movie_id' => 1,
				'cast_person_id' => 5,
				'cast_character_id' => 2,
				'cast_order' => 2,
				'updated_at' => '0000-00-00 00:00:00',
				'created_at' => '0000-00-00 00:00:00',
			),
			2 => 
			array (
				'cast_id' => 3,
				'cast_movie_id' => 7,
				'cast_person_id' => 6,
				'cast_character_id' => 3,
				'cast_order' => 1,
				'updated_at' => '0000-00-00 00:00:00',
				'created_at' => '0000-00-00 00:00:00',
			),
			3 => 
			array (
				'cast_id' => 4,
				'cast_movie_id' => 73,
				'cast_person_id' => 6,
				'cast_character_id' => 4,
				'cast_order' => 1,
				'updated_at' => '0000-00-00 00:00:00',
				'created_at' => '0000-00-00 00:00:00',
			),
			4 => 
			array (
				'cast_id' => 5,
				'cast_movie_id' => 119,
				'cast_person_id' => 6,
				'cast_character_id' => 5,
				'cast_order' => 1,
				'updated_at' => '0000-00-00 00:00:00',
				'created_at' => '0000-00-00 00:00:00',
			),
		));
	}

}
