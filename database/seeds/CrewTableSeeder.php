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
			25 => 
			array (
				'crew_id' => 29,
				'movie_id' => 18,
				'person_id' => 105,
				'position' => 'Director',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			26 => 
			array (
				'crew_id' => 30,
				'movie_id' => 18,
				'person_id' => 89,
				'position' => 'Composer',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			27 => 
			array (
				'crew_id' => 31,
				'movie_id' => 19,
				'person_id' => 105,
				'position' => 'Director',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			28 => 
			array (
				'crew_id' => 32,
				'movie_id' => 19,
				'person_id' => 89,
				'position' => 'Composer',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			29 => 
			array (
				'crew_id' => 33,
				'movie_id' => 20,
				'person_id' => 106,
				'position' => 'Director',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			30 => 
			array (
				'crew_id' => 34,
				'movie_id' => 21,
				'person_id' => 112,
				'position' => 'Director',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			31 => 
			array (
				'crew_id' => 35,
				'movie_id' => 11,
				'person_id' => 53,
				'position' => 'Director',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			32 => 
			array (
				'crew_id' => 36,
				'movie_id' => 11,
				'person_id' => 53,
				'position' => 'Writer',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			33 => 
			array (
				'crew_id' => 37,
				'movie_id' => 11,
				'person_id' => 133,
				'position' => 'Composer',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			34 => 
			array (
				'crew_id' => 38,
				'movie_id' => 13,
				'person_id' => 39,
				'position' => 'Director',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			35 => 
			array (
				'crew_id' => 39,
				'movie_id' => 13,
				'person_id' => 39,
				'position' => 'Writer',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			36 => 
			array (
				'crew_id' => 40,
				'movie_id' => 13,
				'person_id' => 40,
				'position' => 'Composer',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			37 => 
			array (
				'crew_id' => 41,
				'movie_id' => 23,
				'person_id' => 145,
				'position' => 'Director',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			38 => 
			array (
				'crew_id' => 42,
				'movie_id' => 23,
				'person_id' => 150,
				'position' => 'Composer',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			39 => 
			array (
				'crew_id' => 43,
				'movie_id' => 24,
				'person_id' => 39,
				'position' => 'Director',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			40 => 
			array (
				'crew_id' => 44,
				'movie_id' => 24,
				'person_id' => 39,
				'position' => 'Writer',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			41 => 
			array (
				'crew_id' => 45,
				'movie_id' => 25,
				'person_id' => 165,
				'position' => 'Director',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			42 => 
			array (
				'crew_id' => 46,
				'movie_id' => 25,
				'person_id' => 165,
				'position' => 'Writer',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			43 => 
			array (
				'crew_id' => 47,
				'movie_id' => 25,
				'person_id' => 166,
				'position' => 'Writer',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			44 => 
			array (
				'crew_id' => 48,
				'movie_id' => 25,
				'person_id' => 133,
				'position' => 'Composer',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			45 => 
			array (
				'crew_id' => 49,
				'movie_id' => 26,
				'person_id' => 165,
				'position' => 'Director',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			46 => 
			array (
				'crew_id' => 50,
				'movie_id' => 26,
				'person_id' => 165,
				'position' => 'Writer',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			47 => 
			array (
				'crew_id' => 51,
				'movie_id' => 26,
				'person_id' => 133,
				'position' => 'Composer',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			48 => 
			array (
				'crew_id' => 52,
				'movie_id' => 26,
				'person_id' => 166,
				'position' => 'Writer',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			49 => 
			array (
				'crew_id' => 53,
				'movie_id' => 27,
				'person_id' => 165,
				'position' => 'Director',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			50 => 
			array (
				'crew_id' => 54,
				'movie_id' => 27,
				'person_id' => 165,
				'position' => 'Writer',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			51 => 
			array (
				'crew_id' => 55,
				'movie_id' => 27,
				'person_id' => 166,
				'position' => 'Writer',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			52 => 
			array (
				'crew_id' => 56,
				'movie_id' => 27,
				'person_id' => 133,
				'position' => 'Composer',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			53 => 
			array (
				'crew_id' => 57,
				'movie_id' => 28,
				'person_id' => 175,
				'position' => 'Director',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			54 => 
			array (
				'crew_id' => 58,
				'movie_id' => 28,
				'person_id' => 176,
				'position' => 'Director',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			55 => 
			array (
				'crew_id' => 59,
				'movie_id' => 29,
				'person_id' => 184,
				'position' => 'Writer',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			56 => 
			array (
				'crew_id' => 60,
				'movie_id' => 29,
				'person_id' => 185,
				'position' => 'Director',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			57 => 
			array (
				'crew_id' => 61,
				'movie_id' => 29,
				'person_id' => 186,
				'position' => 'Composer',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			58 => 
			array (
				'crew_id' => 62,
				'movie_id' => 30,
				'person_id' => 187,
				'position' => 'Director',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			59 => 
			array (
				'crew_id' => 63,
				'movie_id' => 30,
				'person_id' => 184,
				'position' => 'Writer',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			60 => 
			array (
				'crew_id' => 64,
				'movie_id' => 31,
				'person_id' => 187,
				'position' => 'Director',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			61 => 
			array (
				'crew_id' => 65,
				'movie_id' => 31,
				'person_id' => 184,
				'position' => 'Writer',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			62 => 
			array (
				'crew_id' => 66,
				'movie_id' => 30,
				'person_id' => 186,
				'position' => 'Composer',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			63 => 
			array (
				'crew_id' => 67,
				'movie_id' => 31,
				'person_id' => 186,
				'position' => 'Composer',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			64 => 
			array (
				'crew_id' => 68,
				'movie_id' => 32,
				'person_id' => 204,
				'position' => 'Director',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			65 => 
			array (
				'crew_id' => 70,
				'movie_id' => 32,
				'person_id' => 204,
				'position' => 'Writer',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			66 => 
			array (
				'crew_id' => 71,
				'movie_id' => 33,
				'person_id' => 204,
				'position' => 'Director',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			67 => 
			array (
				'crew_id' => 72,
				'movie_id' => 33,
				'person_id' => 212,
				'position' => 'Writer',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			68 => 
			array (
				'crew_id' => 73,
				'movie_id' => 33,
				'person_id' => 213,
				'position' => 'Composer',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			69 => 
			array (
				'crew_id' => 74,
				'movie_id' => 33,
				'person_id' => 204,
				'position' => 'Writer',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			70 => 
			array (
				'crew_id' => 75,
				'movie_id' => 32,
				'person_id' => 216,
				'position' => 'Composer',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			71 => 
			array (
				'crew_id' => 76,
				'movie_id' => 32,
				'person_id' => 213,
				'position' => 'Composer',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			72 => 
			array (
				'crew_id' => 77,
				'movie_id' => 33,
				'person_id' => 216,
				'position' => 'Composer',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			73 => 
			array (
				'crew_id' => 78,
				'movie_id' => 34,
				'person_id' => 204,
				'position' => 'Director',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			74 => 
			array (
				'crew_id' => 79,
				'movie_id' => 34,
				'person_id' => 212,
				'position' => 'Writer',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			75 => 
			array (
				'crew_id' => 80,
				'movie_id' => 34,
				'person_id' => 213,
				'position' => 'Composer',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			76 => 
			array (
				'crew_id' => 81,
				'movie_id' => 34,
				'person_id' => 204,
				'position' => 'Writer',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			77 => 
			array (
				'crew_id' => 82,
				'movie_id' => 35,
				'person_id' => 225,
				'position' => 'Director',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			78 => 
			array (
				'crew_id' => 83,
				'movie_id' => 36,
				'person_id' => 232,
				'position' => 'Director',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
		));
	}

}
