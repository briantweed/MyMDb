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
				'movie_id' => 1,
				'person_id' => 1,
				'character' => 'Kai',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			1 => 
			array (
				'cast_id' => 2,
				'movie_id' => 1,
				'person_id' => 5,
				'character' => 'Oisin',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			2 => 
			array (
				'cast_id' => 3,
				'movie_id' => 7,
				'person_id' => 6,
				'character' => 'Tyler Durden',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			3 => 
			array (
				'cast_id' => 4,
				'movie_id' => 73,
				'person_id' => 6,
				'character' => 'Lt. Aldo Reins',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			4 => 
			array (
				'cast_id' => 5,
				'movie_id' => 119,
				'person_id' => 6,
				'character' => 'Jack Cross',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
		));
	}

}
