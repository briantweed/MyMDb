<?php

use Illuminate\Database\Seeder;

class CrewTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('crew')->delete();
        
		\DB::table('crew')->insert(array (
			0 => 
			array (
				'crew_id' => 1,
				'movie_id' => 1,
				'person_id' => 2,
				'position' => 'Director',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			1 => 
			array (
				'crew_id' => 2,
				'movie_id' => 1,
				'person_id' => 3,
				'position' => 'Writer',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			2 => 
			array (
				'crew_id' => 3,
				'movie_id' => 1,
				'person_id' => 4,
				'position' => 'Writer',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			3 => 
			array (
				'crew_id' => 4,
				'movie_id' => 3,
				'person_id' => 30,
				'position' => 'Director',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			4 => 
			array (
				'crew_id' => 5,
				'movie_id' => 4,
				'person_id' => 39,
				'position' => 'Director',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			5 => 
			array (
				'crew_id' => 6,
				'movie_id' => 4,
				'person_id' => 39,
				'position' => 'Writer',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			6 => 
			array (
				'crew_id' => 8,
				'movie_id' => 4,
				'person_id' => 40,
				'position' => 'Composer',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			7 => 
			array (
				'crew_id' => 9,
				'movie_id' => 5,
				'person_id' => 44,
				'position' => 'Director',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			8 => 
			array (
				'crew_id' => 10,
				'movie_id' => 6,
				'person_id' => 52,
				'position' => 'Director',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			9 => 
			array (
				'crew_id' => 11,
				'movie_id' => 6,
				'person_id' => 53,
				'position' => 'Writer',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			10 => 
			array (
				'crew_id' => 12,
				'movie_id' => 12,
				'person_id' => 60,
				'position' => 'Director',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			11 => 
			array (
				'crew_id' => 13,
				'movie_id' => 12,
				'person_id' => 40,
				'position' => 'Composer',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			12 => 
			array (
				'crew_id' => 14,
				'movie_id' => 2,
				'person_id' => 65,
				'position' => 'Director',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			13 => 
			array (
				'crew_id' => 15,
				'movie_id' => 2,
				'person_id' => 66,
				'position' => 'Composer',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			14 => 
			array (
				'crew_id' => 16,
				'movie_id' => 7,
				'person_id' => 44,
				'position' => 'Director',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			15 => 
			array (
				'crew_id' => 17,
				'movie_id' => 8,
				'person_id' => 70,
				'position' => 'Director',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			16 => 
			array (
				'crew_id' => 19,
				'movie_id' => 9,
				'person_id' => 76,
				'position' => 'Director',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			17 => 
			array (
				'crew_id' => 20,
				'movie_id' => 9,
				'person_id' => 76,
				'position' => 'Writer',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			18 => 
			array (
				'crew_id' => 22,
				'movie_id' => 9,
				'person_id' => 75,
				'position' => 'Director',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			19 => 
			array (
				'crew_id' => 23,
				'movie_id' => 9,
				'person_id' => 75,
				'position' => 'Writer',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			20 => 
			array (
				'crew_id' => 24,
				'movie_id' => 9,
				'person_id' => 77,
				'position' => 'Producer',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			21 => 
			array (
				'crew_id' => 25,
				'movie_id' => 10,
				'person_id' => 88,
				'position' => 'Director',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			22 => 
			array (
				'crew_id' => 26,
				'movie_id' => 10,
				'person_id' => 88,
				'position' => 'Writer',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			23 => 
			array (
				'crew_id' => 27,
				'movie_id' => 10,
				'person_id' => 89,
				'position' => 'Composer',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			24 => 
			array (
				'crew_id' => 28,
				'movie_id' => 22,
				'person_id' => 92,
				'position' => 'Director',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
		));
	}

}
