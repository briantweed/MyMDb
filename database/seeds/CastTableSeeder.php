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
			5 => 
			array (
				'cast_id' => 6,
				'movie_id' => 7,
				'person_id' => 7,
				'character' => 'The Narrator',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			6 => 
			array (
				'cast_id' => 7,
				'movie_id' => 16,
				'person_id' => 8,
				'character' => 'Lucy Whitmore',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			7 => 
			array (
				'cast_id' => 8,
				'movie_id' => 16,
				'person_id' => 9,
				'character' => 'Henry Roth',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			8 => 
			array (
				'cast_id' => 9,
				'movie_id' => 3,
				'person_id' => 10,
				'character' => 'Ellen Ripley',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			9 => 
			array (
				'cast_id' => 10,
				'movie_id' => 4,
				'person_id' => 10,
				'character' => 'Ellen Ripley',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			10 => 
			array (
				'cast_id' => 11,
				'movie_id' => 5,
				'person_id' => 10,
				'character' => 'Ellen Ripley',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			11 => 
			array (
				'cast_id' => 12,
				'movie_id' => 6,
				'person_id' => 10,
				'character' => 'Ellen Ripley',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			12 => 
			array (
				'cast_id' => 13,
				'movie_id' => 38,
				'person_id' => 10,
				'character' => 'The Director',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			13 => 
			array (
				'cast_id' => 14,
				'movie_id' => 24,
				'person_id' => 10,
				'character' => 'Dr. Grace Augustine',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			14 => 
			array (
				'cast_id' => 15,
				'movie_id' => 90,
				'person_id' => 10,
				'character' => 'The Big Guy',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			15 => 
			array (
				'cast_id' => 16,
				'movie_id' => 55,
				'person_id' => 10,
				'character' => 'Dana Barrett',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			16 => 
			array (
				'cast_id' => 17,
				'movie_id' => 154,
				'person_id' => 10,
				'character' => 'Ship\'s Computer',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			17 => 
			array (
				'cast_id' => 18,
				'movie_id' => 2,
				'person_id' => 11,
				'character' => 'The Mad Hatter',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			18 => 
			array (
				'cast_id' => 19,
				'movie_id' => 14,
				'person_id' => 12,
				'character' => 'Rocky Sullivan',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			19 => 
			array (
				'cast_id' => 21,
				'movie_id' => 15,
				'person_id' => 12,
				'character' => 'Cody Jarrett',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
		));
	}

}
