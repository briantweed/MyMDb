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
				'character' => 'Professor Snape',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
		));
	}

}
