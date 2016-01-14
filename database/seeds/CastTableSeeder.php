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
			20 => 
			array (
				'cast_id' => 22,
				'movie_id' => 16,
				'person_id' => 14,
				'character' => 'Dr. Keats',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			21 => 
			array (
				'cast_id' => 23,
				'movie_id' => 16,
				'person_id' => 13,
				'character' => 'Doug Whitmore',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			22 => 
			array (
				'cast_id' => 24,
				'movie_id' => 16,
				'person_id' => 15,
				'character' => 'Ula',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			23 => 
			array (
				'cast_id' => 25,
				'movie_id' => 2,
				'person_id' => 16,
				'character' => 'Alice',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			24 => 
			array (
				'cast_id' => 26,
				'movie_id' => 2,
				'person_id' => 17,
				'character' => 'The Red Queen',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			25 => 
			array (
				'cast_id' => 27,
				'movie_id' => 2,
				'person_id' => 18,
				'character' => 'The White Queen',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			26 => 
			array (
				'cast_id' => 29,
				'movie_id' => 2,
				'person_id' => 19,
				'character' => 'The Knave of Hearts',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			27 => 
			array (
				'cast_id' => 30,
				'movie_id' => 2,
				'person_id' => 20,
				'character' => 'Tweedledum / Tweedledee',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			28 => 
			array (
				'cast_id' => 31,
				'movie_id' => 2,
				'person_id' => 21,
				'character' => 'The White Rabbit',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			29 => 
			array (
				'cast_id' => 32,
				'movie_id' => 2,
				'person_id' => 22,
				'character' => 'Cheshire Cat',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			30 => 
			array (
				'cast_id' => 33,
				'movie_id' => 2,
				'person_id' => 23,
				'character' => 'Blue Caterpillar',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			31 => 
			array (
				'cast_id' => 34,
				'movie_id' => 3,
				'person_id' => 24,
				'character' => 'Dallas',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			32 => 
			array (
				'cast_id' => 35,
				'movie_id' => 3,
				'person_id' => 25,
				'character' => 'Lambert',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			33 => 
			array (
				'cast_id' => 36,
				'movie_id' => 3,
				'person_id' => 26,
				'character' => 'Brett',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			34 => 
			array (
				'cast_id' => 37,
				'movie_id' => 3,
				'person_id' => 27,
				'character' => 'Kane',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			35 => 
			array (
				'cast_id' => 38,
				'movie_id' => 3,
				'person_id' => 28,
				'character' => 'Ash',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			36 => 
			array (
				'cast_id' => 39,
				'movie_id' => 3,
				'person_id' => 29,
				'character' => 'Parker',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			37 => 
			array (
				'cast_id' => 40,
				'movie_id' => 4,
				'person_id' => 31,
				'character' => 'Newt',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			38 => 
			array (
				'cast_id' => 41,
				'movie_id' => 4,
				'person_id' => 32,
				'character' => 'Hicks',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			39 => 
			array (
				'cast_id' => 42,
				'movie_id' => 4,
				'person_id' => 33,
				'character' => 'Burke',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			40 => 
			array (
				'cast_id' => 43,
				'movie_id' => 4,
				'person_id' => 34,
				'character' => 'Bishop',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			41 => 
			array (
				'cast_id' => 44,
				'movie_id' => 4,
				'person_id' => 35,
				'character' => 'Hudson',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			42 => 
			array (
				'cast_id' => 45,
				'movie_id' => 4,
				'person_id' => 36,
				'character' => 'Gorman',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			43 => 
			array (
				'cast_id' => 46,
				'movie_id' => 4,
				'person_id' => 37,
				'character' => 'Vasquez',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			44 => 
			array (
				'cast_id' => 47,
				'movie_id' => 4,
				'person_id' => 38,
				'character' => 'Drake',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			45 => 
			array (
				'cast_id' => 48,
				'movie_id' => 5,
				'person_id' => 41,
				'character' => 'DIllon',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			46 => 
			array (
				'cast_id' => 49,
				'movie_id' => 5,
				'person_id' => 42,
				'character' => 'Clemens',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			47 => 
			array (
				'cast_id' => 50,
				'movie_id' => 5,
				'person_id' => 43,
				'character' => 'David',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			48 => 
			array (
				'cast_id' => 51,
				'movie_id' => 5,
				'person_id' => 34,
				'character' => 'Bishop',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			49 => 
			array (
				'cast_id' => 52,
				'movie_id' => 6,
				'person_id' => 45,
				'character' => 'Call',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			50 => 
			array (
				'cast_id' => 53,
				'movie_id' => 6,
				'person_id' => 46,
				'character' => 'Johner',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			51 => 
			array (
				'cast_id' => 54,
				'movie_id' => 6,
				'person_id' => 47,
				'character' => 'Christie',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			52 => 
			array (
				'cast_id' => 55,
				'movie_id' => 6,
				'person_id' => 48,
				'character' => 'Elgyn',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			53 => 
			array (
				'cast_id' => 56,
				'movie_id' => 6,
				'person_id' => 49,
				'character' => 'General Perez',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			54 => 
			array (
				'cast_id' => 57,
				'movie_id' => 6,
				'person_id' => 50,
				'character' => 'Gediman',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			55 => 
			array (
				'cast_id' => 58,
				'movie_id' => 6,
				'person_id' => 51,
				'character' => 'Vriess',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			56 => 
			array (
				'cast_id' => 59,
				'movie_id' => 12,
				'person_id' => 54,
				'character' => 'Peter Parker / Spiderman',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			57 => 
			array (
				'cast_id' => 60,
				'movie_id' => 12,
				'person_id' => 55,
				'character' => 'Gwen Stacy',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			58 => 
			array (
				'cast_id' => 61,
				'movie_id' => 12,
				'person_id' => 56,
				'character' => 'Dr. Connors / Lizardman',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			59 => 
			array (
				'cast_id' => 62,
				'movie_id' => 12,
				'person_id' => 57,
				'character' => 'Captain Stacy',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			60 => 
			array (
				'cast_id' => 63,
				'movie_id' => 12,
				'person_id' => 58,
				'character' => 'Uncle Ben',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			61 => 
			array (
				'cast_id' => 64,
				'movie_id' => 12,
				'person_id' => 59,
				'character' => 'Aunt May',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			62 => 
			array (
				'cast_id' => 65,
				'movie_id' => 14,
				'person_id' => 61,
				'character' => 'Jerry Connolly',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			63 => 
			array (
				'cast_id' => 66,
				'movie_id' => 14,
				'person_id' => 62,
				'character' => 'James Frazier',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			64 => 
			array (
				'cast_id' => 67,
				'movie_id' => 14,
				'person_id' => 63,
				'character' => 'Laury Martin',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			65 => 
			array (
				'cast_id' => 68,
				'movie_id' => 14,
				'person_id' => 64,
				'character' => 'Mac Keefer',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			66 => 
			array (
				'cast_id' => 69,
				'movie_id' => 8,
				'person_id' => 67,
				'character' => 'John McClane',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			67 => 
			array (
				'cast_id' => 70,
				'movie_id' => 8,
				'person_id' => 23,
				'character' => 'Hans Gruber',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			68 => 
			array (
				'cast_id' => 71,
				'movie_id' => 8,
				'person_id' => 68,
				'character' => 'Richard Thornburg',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			69 => 
			array (
				'cast_id' => 72,
				'movie_id' => 8,
				'person_id' => 69,
				'character' => 'Agent Johnson',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			70 => 
			array (
				'cast_id' => 73,
				'movie_id' => 9,
				'person_id' => 1,
				'character' => 'Neo',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			71 => 
			array (
				'cast_id' => 74,
				'movie_id' => 9,
				'person_id' => 71,
				'character' => 'Morpheus',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			72 => 
			array (
				'cast_id' => 75,
				'movie_id' => 9,
				'person_id' => 72,
				'character' => 'Trinity',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			73 => 
			array (
				'cast_id' => 76,
				'movie_id' => 9,
				'person_id' => 73,
				'character' => 'Cypher',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			74 => 
			array (
				'cast_id' => 77,
				'movie_id' => 9,
				'person_id' => 74,
				'character' => 'Agent Smith',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			75 => 
			array (
				'cast_id' => 79,
				'movie_id' => 10,
				'person_id' => 78,
				'character' => 'Luke Skywalker',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			76 => 
			array (
				'cast_id' => 80,
				'movie_id' => 10,
				'person_id' => 79,
				'character' => 'Han Solo',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			77 => 
			array (
				'cast_id' => 81,
				'movie_id' => 10,
				'person_id' => 80,
				'character' => 'Obi-Wan Kenobi',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			78 => 
			array (
				'cast_id' => 82,
				'movie_id' => 10,
				'person_id' => 81,
				'character' => 'Princess Leia',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			79 => 
			array (
				'cast_id' => 83,
				'movie_id' => 10,
				'person_id' => 82,
				'character' => 'Grand Moff Tarkin',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			80 => 
			array (
				'cast_id' => 84,
				'movie_id' => 10,
				'person_id' => 83,
				'character' => 'C-3Po',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			81 => 
			array (
				'cast_id' => 85,
				'movie_id' => 10,
				'person_id' => 84,
				'character' => 'R2-D2',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			82 => 
			array (
				'cast_id' => 86,
				'movie_id' => 10,
				'person_id' => 85,
				'character' => 'Darth Vader',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			83 => 
			array (
				'cast_id' => 87,
				'movie_id' => 10,
				'person_id' => 86,
			'character' => 'Darth Vader (voice)',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			84 => 
			array (
				'cast_id' => 88,
				'movie_id' => 10,
				'person_id' => 87,
				'character' => 'Chewbacca',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			85 => 
			array (
				'cast_id' => 89,
				'movie_id' => 22,
				'person_id' => 90,
				'character' => 'Kaneda',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			86 => 
			array (
				'cast_id' => 90,
				'movie_id' => 22,
				'person_id' => 91,
				'character' => 'Tetsuo',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			87 => 
			array (
				'cast_id' => 91,
				'movie_id' => 57,
				'person_id' => 23,
				'character' => 'Professor Snape',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			88 => 
			array (
				'cast_id' => 92,
				'movie_id' => 58,
				'person_id' => 23,
				'character' => 'Professor Snape',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			89 => 
			array (
				'cast_id' => 93,
				'movie_id' => 59,
				'person_id' => 23,
				'character' => 'Professor Snape',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			90 => 
			array (
				'cast_id' => 94,
				'movie_id' => 60,
				'person_id' => 23,
				'character' => 'Professor Snape',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			91 => 
			array (
				'cast_id' => 95,
				'movie_id' => 61,
				'person_id' => 23,
				'character' => 'Professor Snape',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			92 => 
			array (
				'cast_id' => 96,
				'movie_id' => 62,
				'person_id' => 23,
				'character' => 'Professor Snape',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			93 => 
			array (
				'cast_id' => 97,
				'movie_id' => 63,
				'person_id' => 23,
				'character' => 'Professor Snape',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			94 => 
			array (
				'cast_id' => 98,
				'movie_id' => 64,
				'person_id' => 23,
				'character' => 'Professor Snaper',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			95 => 
			array (
				'cast_id' => 99,
				'movie_id' => 18,
				'person_id' => 93,
				'character' => 'Dr. Alan Grant',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			96 => 
			array (
				'cast_id' => 100,
				'movie_id' => 18,
				'person_id' => 94,
				'character' => 'Dr. Ellie Sattler',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			97 => 
			array (
				'cast_id' => 101,
				'movie_id' => 18,
				'person_id' => 95,
				'character' => 'Dr. Ian Malcolm',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			98 => 
			array (
				'cast_id' => 102,
				'movie_id' => 18,
				'person_id' => 96,
				'character' => 'John Hammond',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			99 => 
			array (
				'cast_id' => 103,
				'movie_id' => 18,
				'person_id' => 97,
				'character' => 'Ray Arnold',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			100 => 
			array (
				'cast_id' => 104,
				'movie_id' => 18,
				'person_id' => 98,
				'character' => 'Henry Wu',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			101 => 
			array (
				'cast_id' => 105,
				'movie_id' => 18,
				'person_id' => 99,
				'character' => 'Robert Muldoon',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			102 => 
			array (
				'cast_id' => 106,
				'movie_id' => 18,
				'person_id' => 100,
				'character' => 'Dennis Nedry',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			103 => 
			array (
				'cast_id' => 107,
				'movie_id' => 19,
				'person_id' => 95,
				'character' => 'Dr. Ian Malcom',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			104 => 
			array (
				'cast_id' => 108,
				'movie_id' => 19,
				'person_id' => 101,
				'character' => 'sarah harding',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			105 => 
			array (
				'cast_id' => 109,
				'movie_id' => 19,
				'person_id' => 102,
				'character' => 'Nick Van Owen',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			106 => 
			array (
				'cast_id' => 110,
				'movie_id' => 19,
				'person_id' => 43,
				'character' => 'Roland Tembo',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			107 => 
			array (
				'cast_id' => 111,
				'movie_id' => 19,
				'person_id' => 103,
				'character' => 'Dieter Stark',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			108 => 
			array (
				'cast_id' => 112,
				'movie_id' => 19,
				'person_id' => 104,
				'character' => 'Eddie Carr',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			109 => 
			array (
				'cast_id' => 113,
				'movie_id' => 20,
				'person_id' => 93,
				'character' => 'Dr. Alan Grant',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			110 => 
			array (
				'cast_id' => 114,
				'movie_id' => 20,
				'person_id' => 107,
				'character' => 'Paul Kirby',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			111 => 
			array (
				'cast_id' => 115,
				'movie_id' => 20,
				'person_id' => 108,
				'character' => 'Amanda Kirby',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			112 => 
			array (
				'cast_id' => 116,
				'movie_id' => 20,
				'person_id' => 109,
				'character' => 'Billy Brennan',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			113 => 
			array (
				'cast_id' => 117,
				'movie_id' => 20,
				'person_id' => 110,
				'character' => 'Eric Kirby',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			114 => 
			array (
				'cast_id' => 118,
				'movie_id' => 20,
				'person_id' => 111,
				'character' => 'Mr. Udesky',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			115 => 
			array (
				'cast_id' => 119,
				'movie_id' => 20,
				'person_id' => 94,
				'character' => 'Dr. Ellie Sattler',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			116 => 
			array (
				'cast_id' => 120,
				'movie_id' => 21,
				'person_id' => 98,
				'character' => 'Heny Wu',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			117 => 
			array (
				'cast_id' => 121,
				'movie_id' => 21,
				'person_id' => 113,
				'character' => 'Owen',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			118 => 
			array (
				'cast_id' => 122,
				'movie_id' => 21,
				'person_id' => 114,
				'character' => 'Claire',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			119 => 
			array (
				'cast_id' => 123,
				'movie_id' => 21,
				'person_id' => 115,
				'character' => 'Hoskins',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			120 => 
			array (
				'cast_id' => 124,
				'movie_id' => 21,
				'person_id' => 116,
				'character' => 'Gray',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			121 => 
			array (
				'cast_id' => 125,
				'movie_id' => 21,
				'person_id' => 117,
				'character' => 'Zach',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			122 => 
			array (
				'cast_id' => 126,
				'movie_id' => 21,
				'person_id' => 118,
				'character' => 'Lowery',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			123 => 
			array (
				'cast_id' => 127,
				'movie_id' => 21,
				'person_id' => 119,
				'character' => 'Karen',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			124 => 
			array (
				'cast_id' => 128,
				'movie_id' => 21,
				'person_id' => 120,
				'character' => 'Barry',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			125 => 
			array (
				'cast_id' => 129,
				'movie_id' => 11,
				'person_id' => 121,
				'character' => 'Tony Stark / Iron Man',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			126 => 
			array (
				'cast_id' => 130,
				'movie_id' => 11,
				'person_id' => 122,
				'character' => 'Steve Rogers / Captain America',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			127 => 
			array (
				'cast_id' => 131,
				'movie_id' => 11,
				'person_id' => 123,
				'character' => 'Bruce Banner /  The Hulk',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			128 => 
			array (
				'cast_id' => 132,
				'movie_id' => 11,
				'person_id' => 124,
				'character' => 'Thor',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			129 => 
			array (
				'cast_id' => 133,
				'movie_id' => 11,
				'person_id' => 125,
				'character' => ' Natasha Romanoff / Black Widow ',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			130 => 
			array (
				'cast_id' => 134,
				'movie_id' => 11,
				'person_id' => 126,
				'character' => 'Clint Barton / Hawkeye ',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			131 => 
			array (
				'cast_id' => 135,
				'movie_id' => 11,
				'person_id' => 127,
				'character' => 'Loki',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			132 => 
			array (
				'cast_id' => 136,
				'movie_id' => 11,
				'person_id' => 128,
				'character' => 'Agent Phil Coulson',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			133 => 
			array (
				'cast_id' => 137,
				'movie_id' => 11,
				'person_id' => 129,
				'character' => 'Agent Maria Hill',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			134 => 
			array (
				'cast_id' => 138,
				'movie_id' => 11,
				'person_id' => 130,
				'character' => 'Selvig',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			135 => 
			array (
				'cast_id' => 139,
				'movie_id' => 11,
				'person_id' => 97,
				'character' => 'Nick Fury',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			136 => 
			array (
				'cast_id' => 140,
				'movie_id' => 11,
				'person_id' => 131,
				'character' => 'Pepper Potts',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			137 => 
			array (
				'cast_id' => 141,
				'movie_id' => 11,
				'person_id' => 132,
				'character' => 'Jarvis',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			138 => 
			array (
				'cast_id' => 142,
				'movie_id' => 13,
				'person_id' => 134,
				'character' => 'Jack Dawson',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			139 => 
			array (
				'cast_id' => 143,
				'movie_id' => 13,
				'person_id' => 135,
				'character' => 'Rose DeWitt Bukater',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			140 => 
			array (
				'cast_id' => 144,
				'movie_id' => 13,
				'person_id' => 136,
				'character' => 'Caledon Hockley',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			141 => 
			array (
				'cast_id' => 145,
				'movie_id' => 13,
				'person_id' => 137,
				'character' => 'Molly Brown',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			142 => 
			array (
				'cast_id' => 146,
				'movie_id' => 13,
				'person_id' => 138,
				'character' => 'Ruth Dewitt Bukater',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			143 => 
			array (
				'cast_id' => 147,
				'movie_id' => 13,
				'person_id' => 35,
				'character' => 'Brock Lovett',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			144 => 
			array (
				'cast_id' => 148,
				'movie_id' => 13,
				'person_id' => 139,
				'character' => 'Captain Edward James Smith',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			145 => 
			array (
				'cast_id' => 149,
				'movie_id' => 13,
				'person_id' => 140,
				'character' => 'Spicer Lovejoy',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			146 => 
			array (
				'cast_id' => 150,
				'movie_id' => 13,
				'person_id' => 141,
				'character' => 'Thomas Andrews',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			147 => 
			array (
				'cast_id' => 151,
				'movie_id' => 13,
				'person_id' => 142,
				'character' => 'Bruce Ismay',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			148 => 
			array (
				'cast_id' => 152,
				'movie_id' => 13,
				'person_id' => 143,
				'character' => 'Fabrizio',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			149 => 
			array (
				'cast_id' => 153,
				'movie_id' => 13,
				'person_id' => 144,
				'character' => 'Fifth Officer Lowe',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			150 => 
			array (
				'cast_id' => 154,
				'movie_id' => 13,
				'person_id' => 37,
				'character' => 'Irish Mother',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			151 => 
			array (
				'cast_id' => 155,
				'movie_id' => 23,
				'person_id' => 145,
				'character' => 'Tony Mendez',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			152 => 
			array (
				'cast_id' => 156,
				'movie_id' => 23,
				'person_id' => 146,
				'character' => 'Jack O\'Donnell',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			153 => 
			array (
				'cast_id' => 157,
				'movie_id' => 23,
				'person_id' => 147,
				'character' => 'Lester Siegel',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			154 => 
			array (
				'cast_id' => 158,
				'movie_id' => 23,
				'person_id' => 148,
				'character' => 'John Chambers',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			155 => 
			array (
				'cast_id' => 159,
				'movie_id' => 23,
				'person_id' => 141,
				'character' => 'Ken Tayler',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			156 => 
			array (
				'cast_id' => 160,
				'movie_id' => 23,
				'person_id' => 149,
				'character' => 'Lee Schatz',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			157 => 
			array (
				'cast_id' => 161,
				'movie_id' => 24,
				'person_id' => 151,
				'character' => 'Jake Sully',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			158 => 
			array (
				'cast_id' => 162,
				'movie_id' => 24,
				'person_id' => 152,
				'character' => 'Neytiri',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			159 => 
			array (
				'cast_id' => 164,
				'movie_id' => 24,
				'person_id' => 153,
				'character' => 'Colonel Miles Quaritch',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			160 => 
			array (
				'cast_id' => 165,
				'movie_id' => 24,
				'person_id' => 154,
				'character' => 'Trudy Chacon',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			161 => 
			array (
				'cast_id' => 166,
				'movie_id' => 24,
				'person_id' => 155,
				'character' => 'Parker Selfridge',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			162 => 
			array (
				'cast_id' => 167,
				'movie_id' => 24,
				'person_id' => 156,
				'character' => 'Norm Spellman',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			163 => 
			array (
				'cast_id' => 168,
				'movie_id' => 24,
				'person_id' => 157,
				'character' => 'Moat',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			164 => 
			array (
				'cast_id' => 169,
				'movie_id' => 25,
				'person_id' => 158,
				'character' => 'Marty McFly',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			165 => 
			array (
				'cast_id' => 170,
				'movie_id' => 25,
				'person_id' => 159,
				'character' => 'Dr. Emmett Brown',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			166 => 
			array (
				'cast_id' => 171,
				'movie_id' => 25,
				'person_id' => 160,
				'character' => 'Lorraine Baines',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			167 => 
			array (
				'cast_id' => 172,
				'movie_id' => 25,
				'person_id' => 19,
				'character' => 'Goerge McFly',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			168 => 
			array (
				'cast_id' => 173,
				'movie_id' => 25,
				'person_id' => 161,
				'character' => 'Biff Tannen',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			169 => 
			array (
				'cast_id' => 174,
				'movie_id' => 25,
				'person_id' => 162,
				'character' => 'Jennifer Parker',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			170 => 
			array (
				'cast_id' => 175,
				'movie_id' => 25,
				'person_id' => 163,
				'character' => 'Mr. Strickland',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			171 => 
			array (
				'cast_id' => 176,
				'movie_id' => 25,
				'person_id' => 164,
				'character' => '3D',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			172 => 
			array (
				'cast_id' => 177,
				'movie_id' => 25,
				'person_id' => 136,
				'character' => 'Match',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			173 => 
			array (
				'cast_id' => 178,
				'movie_id' => 25,
				'person_id' => 136,
				'character' => 'Match',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			174 => 
			array (
				'cast_id' => 179,
				'movie_id' => 26,
				'person_id' => 158,
				'character' => 'Marty McFly',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			175 => 
			array (
				'cast_id' => 180,
				'movie_id' => 26,
				'person_id' => 159,
				'character' => 'Dr. Emmett Brown',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			176 => 
			array (
				'cast_id' => 181,
				'movie_id' => 26,
				'person_id' => 160,
				'character' => 'Lorraine McFly',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			177 => 
			array (
				'cast_id' => 182,
				'movie_id' => 26,
				'person_id' => 161,
				'character' => 'Biff Tannen / Griff',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			178 => 
			array (
				'cast_id' => 183,
				'movie_id' => 26,
				'person_id' => 167,
				'character' => 'Jennifer',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			179 => 
			array (
				'cast_id' => 184,
				'movie_id' => 26,
				'person_id' => 163,
				'character' => 'Strickland',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			180 => 
			array (
				'cast_id' => 185,
				'movie_id' => 26,
				'person_id' => 168,
				'character' => 'George McFly',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			181 => 
			array (
				'cast_id' => 186,
				'movie_id' => 26,
				'person_id' => 164,
				'character' => '3D',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			182 => 
			array (
				'cast_id' => 187,
				'movie_id' => 26,
				'person_id' => 136,
				'character' => 'Match',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			183 => 
			array (
				'cast_id' => 188,
				'movie_id' => 26,
				'person_id' => 169,
				'character' => 'Young Kid',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			184 => 
			array (
				'cast_id' => 190,
				'movie_id' => 26,
				'person_id' => 170,
				'character' => 'Needles',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			185 => 
			array (
				'cast_id' => 191,
				'movie_id' => 27,
				'person_id' => 158,
				'character' => 'Marty McFly',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			186 => 
			array (
				'cast_id' => 192,
				'movie_id' => 27,
				'person_id' => 171,
				'character' => 'Clara Clayton',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			187 => 
			array (
				'cast_id' => 193,
				'movie_id' => 27,
				'person_id' => 161,
				'character' => 'Buford Mad Dog Tannen',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			188 => 
			array (
				'cast_id' => 194,
				'movie_id' => 27,
				'person_id' => 160,
				'character' => 'Maggie McFly',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			189 => 
			array (
				'cast_id' => 195,
				'movie_id' => 27,
				'person_id' => 167,
				'character' => 'Jennifer',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			190 => 
			array (
				'cast_id' => 196,
				'movie_id' => 27,
				'person_id' => 172,
				'character' => 'Chester',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			191 => 
			array (
				'cast_id' => 197,
				'movie_id' => 27,
				'person_id' => 163,
				'character' => 'Marshal Strickland',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			192 => 
			array (
				'cast_id' => 198,
				'movie_id' => 27,
				'person_id' => 173,
				'character' => 'Saloon Old Timer',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			193 => 
			array (
				'cast_id' => 199,
				'movie_id' => 28,
				'person_id' => 174,
				'character' => 'Himself',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			194 => 
			array (
				'cast_id' => 200,
				'movie_id' => 29,
				'person_id' => 177,
				'character' => 'Jason Bourne',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			195 => 
			array (
				'cast_id' => 201,
				'movie_id' => 29,
				'person_id' => 178,
				'character' => 'Marie',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			196 => 
			array (
				'cast_id' => 202,
				'movie_id' => 29,
				'person_id' => 179,
				'character' => 'Conklin',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			197 => 
			array (
				'cast_id' => 203,
				'movie_id' => 29,
				'person_id' => 180,
				'character' => 'The Professor',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			198 => 
			array (
				'cast_id' => 204,
				'movie_id' => 29,
				'person_id' => 181,
				'character' => 'Ward Abbott',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			199 => 
			array (
				'cast_id' => 205,
				'movie_id' => 29,
				'person_id' => 182,
				'character' => 'Wombosi',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			200 => 
			array (
				'cast_id' => 206,
				'movie_id' => 29,
				'person_id' => 183,
				'character' => 'Nicky',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			201 => 
			array (
				'cast_id' => 207,
				'movie_id' => 30,
				'person_id' => 177,
				'character' => 'Jason Bourne',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			202 => 
			array (
				'cast_id' => 208,
				'movie_id' => 30,
				'person_id' => 178,
				'character' => 'Marie',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			203 => 
			array (
				'cast_id' => 209,
				'movie_id' => 30,
				'person_id' => 181,
				'character' => 'Ward Abbott',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			204 => 
			array (
				'cast_id' => 210,
				'movie_id' => 30,
				'person_id' => 183,
				'character' => 'Nicky',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			205 => 
			array (
				'cast_id' => 211,
				'movie_id' => 30,
				'person_id' => 188,
				'character' => 'Kirill',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			206 => 
			array (
				'cast_id' => 212,
				'movie_id' => 30,
				'person_id' => 189,
				'character' => 'Danny Zorn',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			207 => 
			array (
				'cast_id' => 213,
				'movie_id' => 30,
				'person_id' => 190,
				'character' => 'Pamela Landy',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			208 => 
			array (
				'cast_id' => 214,
				'movie_id' => 31,
				'person_id' => 177,
				'character' => 'Jason Bourne',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			209 => 
			array (
				'cast_id' => 215,
				'movie_id' => 31,
				'person_id' => 190,
				'character' => 'Pamela Landy',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			210 => 
			array (
				'cast_id' => 216,
				'movie_id' => 31,
				'person_id' => 183,
				'character' => 'Nicky',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			211 => 
			array (
				'cast_id' => 217,
				'movie_id' => 31,
				'person_id' => 191,
				'character' => 'Noah Vosen',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			212 => 
			array (
				'cast_id' => 218,
				'movie_id' => 31,
				'person_id' => 192,
				'character' => 'Ezra Kramer',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			213 => 
			array (
				'cast_id' => 219,
				'movie_id' => 31,
				'person_id' => 193,
				'character' => 'Simon Ross',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			214 => 
			array (
				'cast_id' => 220,
				'movie_id' => 31,
				'person_id' => 194,
				'character' => 'Dr. Albert Hirsch',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			215 => 
			array (
				'cast_id' => 221,
				'movie_id' => 31,
				'person_id' => 195,
				'character' => 'Martin Kreutz',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
		));
	}

}
