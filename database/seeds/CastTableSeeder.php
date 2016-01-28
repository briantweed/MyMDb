<?php

use Illuminate\Database\Seeder;

class CastTableSeeder extends Seeder
{

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
            216 => 
            array (
                'cast_id' => 222,
                'movie_id' => 32,
                'person_id' => 196,
                'character' => 'Bruce Wayne / Batman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            217 => 
            array (
                'cast_id' => 223,
                'movie_id' => 32,
                'person_id' => 197,
                'character' => 'Alfred',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            218 => 
            array (
                'cast_id' => 224,
                'movie_id' => 32,
                'person_id' => 198,
                'character' => 'Ducard',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            219 => 
            array (
                'cast_id' => 225,
                'movie_id' => 32,
                'person_id' => 199,
                'character' => 'Rachel Dawes',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            220 => 
            array (
                'cast_id' => 226,
                'movie_id' => 32,
                'person_id' => 200,
                'character' => 'Jim Gordon',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            221 => 
            array (
                'cast_id' => 227,
                'movie_id' => 32,
                'person_id' => 201,
                'character' => 'Scarecrow',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            222 => 
            array (
                'cast_id' => 228,
                'movie_id' => 32,
                'person_id' => 202,
                'character' => 'Carmine Falcone',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            223 => 
            array (
                'cast_id' => 229,
                'movie_id' => 32,
                'person_id' => 203,
                'character' => 'Lucius Fox',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            224 => 
            array (
                'cast_id' => 230,
                'movie_id' => 33,
                'person_id' => 196,
                'character' => 'Bruce Wayne / Batman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            225 => 
            array (
                'cast_id' => 231,
                'movie_id' => 33,
                'person_id' => 206,
                'character' => 'Joker',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            226 => 
            array (
                'cast_id' => 232,
                'movie_id' => 33,
                'person_id' => 207,
                'character' => 'Harvey Dent / Two Face',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            227 => 
            array (
                'cast_id' => 233,
                'movie_id' => 33,
                'person_id' => 197,
                'character' => 'Alfred',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            228 => 
            array (
                'cast_id' => 234,
                'movie_id' => 33,
                'person_id' => 208,
                'character' => 'Rachel Dawes',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            229 => 
            array (
                'cast_id' => 235,
                'movie_id' => 33,
                'person_id' => 203,
                'character' => 'Lucius Fox',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            230 => 
            array (
                'cast_id' => 236,
                'movie_id' => 33,
                'person_id' => 209,
                'character' => 'The Mayor',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            231 => 
            array (
                'cast_id' => 237,
                'movie_id' => 33,
                'person_id' => 201,
                'character' => 'Scarecrow',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            232 => 
            array (
                'cast_id' => 238,
                'movie_id' => 33,
                'person_id' => 210,
                'character' => 'Maroni',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            233 => 
            array (
                'cast_id' => 239,
                'movie_id' => 33,
                'person_id' => 211,
                'character' => 'Mike Engel',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            234 => 
            array (
                'cast_id' => 240,
                'movie_id' => 32,
                'person_id' => 214,
                'character' => 'Earle',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            235 => 
            array (
                'cast_id' => 241,
                'movie_id' => 32,
                'person_id' => 215,
                'character' => 'Ra&#039;s Al Ghul',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            236 => 
            array (
                'cast_id' => 242,
                'movie_id' => 34,
                'person_id' => 196,
                'character' => 'Bruce Wayne / Batman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            237 => 
            array (
                'cast_id' => 243,
                'movie_id' => 34,
                'person_id' => 200,
                'character' => 'Jim Gordon',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            238 => 
            array (
                'cast_id' => 244,
                'movie_id' => 34,
                'person_id' => 217,
                'character' => 'Bane',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            239 => 
            array (
                'cast_id' => 245,
                'movie_id' => 34,
                'person_id' => 218,
                'character' => 'Blake',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            240 => 
            array (
                'cast_id' => 246,
                'movie_id' => 34,
                'person_id' => 18,
                'character' => 'Selina Kyle',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            241 => 
            array (
                'cast_id' => 247,
                'movie_id' => 34,
                'person_id' => 219,
                'character' => 'Miranda',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            242 => 
            array (
                'cast_id' => 248,
                'movie_id' => 34,
                'person_id' => 203,
                'character' => 'Lucius Fox',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            243 => 
            array (
                'cast_id' => 249,
                'movie_id' => 34,
                'person_id' => 197,
                'character' => 'Alfred',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            244 => 
            array (
                'cast_id' => 250,
                'movie_id' => 34,
                'person_id' => 220,
                'character' => 'Foley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            245 => 
            array (
                'cast_id' => 251,
                'movie_id' => 35,
                'person_id' => 221,
                'character' => 'Nina Sayers',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            246 => 
            array (
                'cast_id' => 252,
                'movie_id' => 35,
                'person_id' => 222,
                'character' => 'Lily',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            247 => 
            array (
                'cast_id' => 253,
                'movie_id' => 35,
                'person_id' => 223,
                'character' => 'Thomas Leroy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            248 => 
            array (
                'cast_id' => 254,
                'movie_id' => 35,
                'person_id' => 224,
                'character' => 'Erica Sayers',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            249 => 
            array (
                'cast_id' => 255,
                'movie_id' => 35,
                'person_id' => 45,
                'character' => 'Beth Macintyre',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            250 => 
            array (
                'cast_id' => 256,
                'movie_id' => 36,
                'person_id' => 226,
                'character' => 'Terence Mcdonagh',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            251 => 
            array (
                'cast_id' => 258,
                'movie_id' => 36,
                'person_id' => 227,
                'character' => 'Frankie Donnenfield',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            252 => 
            array (
                'cast_id' => 259,
                'movie_id' => 36,
                'person_id' => 228,
                'character' => 'Stevie Pruit',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            253 => 
            array (
                'cast_id' => 260,
                'movie_id' => 36,
                'person_id' => 229,
                'character' => 'Big Fate',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            254 => 
            array (
                'cast_id' => 261,
                'movie_id' => 36,
                'person_id' => 230,
                'character' => 'Heidi',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            255 => 
            array (
                'cast_id' => 262,
                'movie_id' => 36,
                'person_id' => 50,
                'character' => 'Ned Schoenholtz',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            256 => 
            array (
                'cast_id' => 263,
                'movie_id' => 36,
                'person_id' => 231,
                'character' => 'Mundt',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            257 => 
            array (
                'cast_id' => 264,
                'movie_id' => 37,
                'person_id' => 67,
                'character' => 'Korben Dallas',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            258 => 
            array (
                'cast_id' => 265,
                'movie_id' => 37,
                'person_id' => 233,
                'character' => 'Leeloo',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            259 => 
            array (
                'cast_id' => 266,
                'movie_id' => 37,
                'person_id' => 200,
                'character' => 'Jean Baptiste Emanuel Zorg',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            260 => 
            array (
                'cast_id' => 267,
                'movie_id' => 37,
                'person_id' => 28,
                'character' => 'Father Viro Cornelius',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            261 => 
            array (
                'cast_id' => 268,
                'movie_id' => 37,
                'person_id' => 234,
                'character' => 'Ruby Rhod',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            262 => 
            array (
                'cast_id' => 269,
                'movie_id' => 37,
                'person_id' => 235,
                'character' => 'Billy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            263 => 
            array (
                'cast_id' => 270,
                'movie_id' => 37,
                'person_id' => 236,
                'character' => 'General Munro',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            264 => 
            array (
                'cast_id' => 271,
                'movie_id' => 37,
                'person_id' => 237,
                'character' => 'President Lindberg',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            265 => 
            array (
                'cast_id' => 272,
                'movie_id' => 37,
                'person_id' => 238,
                'character' => 'Fog',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            266 => 
            array (
                'cast_id' => 273,
                'movie_id' => 37,
                'person_id' => 239,
                'character' => 'David',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            267 => 
            array (
                'cast_id' => 274,
                'movie_id' => 37,
                'person_id' => 240,
                'character' => 'Right Arm',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            268 => 
            array (
                'cast_id' => 275,
                'movie_id' => 37,
                'person_id' => 241,
                'character' => 'Mugger',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            269 => 
            array (
                'cast_id' => 276,
                'movie_id' => 37,
                'person_id' => 242,
                'character' => 'Mr. Kim',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            270 => 
            array (
                'cast_id' => 277,
                'movie_id' => 37,
                'person_id' => 243,
                'character' => 'Mactilburgh',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            271 => 
            array (
                'cast_id' => 278,
                'movie_id' => 38,
                'person_id' => 246,
                'character' => 'Dana',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            272 => 
            array (
                'cast_id' => 279,
                'movie_id' => 38,
                'person_id' => 124,
                'character' => 'Curt',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            273 => 
            array (
                'cast_id' => 280,
                'movie_id' => 38,
                'person_id' => 247,
                'character' => 'Jules',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            274 => 
            array (
                'cast_id' => 281,
                'movie_id' => 38,
                'person_id' => 248,
                'character' => 'Marty',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            275 => 
            array (
                'cast_id' => 282,
                'movie_id' => 38,
                'person_id' => 249,
                'character' => 'Holden',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            276 => 
            array (
                'cast_id' => 283,
                'movie_id' => 38,
                'person_id' => 250,
                'character' => 'Sitterson',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            277 => 
            array (
                'cast_id' => 284,
                'movie_id' => 38,
                'person_id' => 251,
                'character' => 'Hadley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            278 => 
            array (
                'cast_id' => 285,
                'movie_id' => 39,
                'person_id' => 253,
                'character' => 'Helen Lyle',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            279 => 
            array (
                'cast_id' => 286,
                'movie_id' => 39,
                'person_id' => 254,
                'character' => 'Candyman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            280 => 
            array (
                'cast_id' => 287,
                'movie_id' => 39,
                'person_id' => 255,
                'character' => 'Trevor Lyle',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            281 => 
            array (
                'cast_id' => 288,
                'movie_id' => 39,
                'person_id' => 256,
                'character' => 'Bernie Walsh',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            282 => 
            array (
                'cast_id' => 289,
                'movie_id' => 39,
                'person_id' => 257,
                'character' => 'Anne-marie Mccoy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            283 => 
            array (
                'cast_id' => 290,
                'movie_id' => 39,
                'person_id' => 258,
                'character' => 'Billy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            284 => 
            array (
                'cast_id' => 291,
                'movie_id' => 40,
                'person_id' => 261,
                'character' => 'Carlito',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            285 => 
            array (
                'cast_id' => 292,
                'movie_id' => 40,
                'person_id' => 262,
                'character' => 'Kleinfeld',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            286 => 
            array (
                'cast_id' => 293,
                'movie_id' => 40,
                'person_id' => 263,
                'character' => 'Gail',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            287 => 
            array (
                'cast_id' => 294,
                'movie_id' => 40,
                'person_id' => 264,
                'character' => 'Benny Blanco',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            288 => 
            array (
                'cast_id' => 295,
                'movie_id' => 40,
                'person_id' => 265,
                'character' => 'Pachanga',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            289 => 
            array (
                'cast_id' => 296,
                'movie_id' => 40,
                'person_id' => 266,
                'character' => 'Norwalk',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            290 => 
            array (
                'cast_id' => 297,
                'movie_id' => 40,
                'person_id' => 267,
                'character' => 'Lalin',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            291 => 
            array (
                'cast_id' => 298,
                'movie_id' => 40,
                'person_id' => 268,
                'character' => 'Frankie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            292 => 
            array (
                'cast_id' => 299,
                'movie_id' => 12,
                'person_id' => 271,
                'character' => 'Rajit Ratha',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            293 => 
            array (
                'cast_id' => 300,
                'movie_id' => 8,
                'person_id' => 272,
                'character' => 'Holly Gennaro Mcclane',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            294 => 
            array (
                'cast_id' => 301,
                'movie_id' => 8,
                'person_id' => 273,
                'character' => 'Joseph Yoshinobu Takagi',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            295 => 
            array (
                'cast_id' => 302,
                'movie_id' => 8,
                'person_id' => 274,
                'character' => 'Sgt. Al Powell',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            296 => 
            array (
                'cast_id' => 303,
                'movie_id' => 41,
                'person_id' => 275,
                'character' => 'Andrew Detmer',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            297 => 
            array (
                'cast_id' => 304,
                'movie_id' => 41,
                'person_id' => 276,
                'character' => 'Matt',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            298 => 
            array (
                'cast_id' => 305,
                'movie_id' => 41,
                'person_id' => 277,
                'character' => 'Steve',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            299 => 
            array (
                'cast_id' => 306,
                'movie_id' => 41,
                'person_id' => 278,
                'character' => 'Richard Detmer',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            300 => 
            array (
                'cast_id' => 307,
                'movie_id' => 41,
                'person_id' => 279,
                'character' => 'Casey Letter',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            301 => 
            array (
                'cast_id' => 308,
                'movie_id' => 42,
                'person_id' => 280,
                'character' => 'Vincent',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            302 => 
            array (
                'cast_id' => 309,
                'movie_id' => 42,
                'person_id' => 281,
                'character' => 'Max',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            303 => 
            array (
                'cast_id' => 310,
                'movie_id' => 42,
                'person_id' => 282,
                'character' => 'Annie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            304 => 
            array (
                'cast_id' => 311,
                'movie_id' => 42,
                'person_id' => 123,
                'character' => 'Fanning',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            305 => 
            array (
                'cast_id' => 312,
                'movie_id' => 42,
                'person_id' => 283,
                'character' => 'Richard Weidner',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            306 => 
            array (
                'cast_id' => 313,
                'movie_id' => 42,
                'person_id' => 284,
                'character' => 'Pedrosa',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            307 => 
            array (
                'cast_id' => 314,
                'movie_id' => 42,
                'person_id' => 285,
                'character' => 'Young Professional Woman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            308 => 
            array (
                'cast_id' => 315,
                'movie_id' => 42,
                'person_id' => 286,
                'character' => 'Felix',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            309 => 
            array (
                'cast_id' => 317,
                'movie_id' => 47,
                'person_id' => 188,
                'character' => 'Judge Dredd',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            310 => 
            array (
                'cast_id' => 320,
                'movie_id' => 52,
                'person_id' => 281,
                'character' => 'Django',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            311 => 
            array (
                'cast_id' => 321,
                'movie_id' => 52,
                'person_id' => 134,
                'character' => 'Calvin Candie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            312 => 
            array (
                'cast_id' => 322,
                'movie_id' => 225,
                'person_id' => 180,
                'character' => 'Theo Faron',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            313 => 
            array (
                'cast_id' => 323,
                'movie_id' => 225,
                'person_id' => 197,
                'character' => 'Jasper',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            314 => 
            array (
                'cast_id' => 324,
                'movie_id' => 225,
                'person_id' => 101,
                'character' => 'Julian',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            315 => 
            array (
                'cast_id' => 325,
                'movie_id' => 1,
                'person_id' => 288,
                'character' => 'Mika',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            316 => 
            array (
                'cast_id' => 326,
                'movie_id' => 1,
                'person_id' => 289,
                'character' => 'Shogun Tsunayoshi',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            317 => 
            array (
                'cast_id' => 327,
                'movie_id' => 1,
                'person_id' => 290,
                'character' => 'Witch',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            318 => 
            array (
                'cast_id' => 328,
                'movie_id' => 2,
                'person_id' => 291,
                'character' => 'Bayard',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            319 => 
            array (
                'cast_id' => 329,
                'movie_id' => 5,
                'person_id' => 243,
                'character' => 'Murphy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            320 => 
            array (
                'cast_id' => 330,
                'movie_id' => 5,
                'person_id' => 292,
                'character' => 'Golic',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            321 => 
            array (
                'cast_id' => 331,
                'movie_id' => 5,
                'person_id' => 293,
                'character' => 'Andrews',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            322 => 
            array (
                'cast_id' => 332,
                'movie_id' => 7,
                'person_id' => 17,
                'character' => 'Marla Singer',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            323 => 
            array (
                'cast_id' => 333,
                'movie_id' => 7,
                'person_id' => 294,
                'character' => 'Chloe',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            324 => 
            array (
                'cast_id' => 334,
                'movie_id' => 9,
                'person_id' => 295,
                'character' => 'Oracle',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            325 => 
            array (
                'cast_id' => 335,
                'movie_id' => 44,
                'person_id' => 48,
                'character' => 'Top Dollar',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            326 => 
            array (
                'cast_id' => 336,
                'movie_id' => 44,
                'person_id' => 254,
                'character' => 'Grange',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            327 => 
            array (
                'cast_id' => 337,
                'movie_id' => 44,
                'person_id' => 296,
                'character' => 'Eric Draven',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            328 => 
            array (
                'cast_id' => 338,
                'movie_id' => 44,
                'person_id' => 297,
                'character' => 'Sergeant Albrecht',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            329 => 
            array (
                'cast_id' => 339,
                'movie_id' => 45,
                'person_id' => 298,
                'character' => 'Li Mu Bai',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            330 => 
            array (
                'cast_id' => 340,
                'movie_id' => 7,
                'person_id' => 299,
                'character' => 'Robert Bob Paulsen',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            331 => 
            array (
                'cast_id' => 341,
                'movie_id' => 199,
                'person_id' => 79,
                'character' => 'President James Marshall',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            332 => 
            array (
                'cast_id' => 342,
                'movie_id' => 199,
                'person_id' => 200,
                'character' => 'Ivan Korshunov',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            333 => 
            array (
                'cast_id' => 343,
                'movie_id' => 199,
                'person_id' => 255,
                'character' => 'Agent Gibbs',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            334 => 
            array (
                'cast_id' => 344,
                'movie_id' => 199,
                'person_id' => 107,
                'character' => 'Major Caldwell',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            335 => 
            array (
                'cast_id' => 345,
                'movie_id' => 199,
                'person_id' => 300,
                'character' => 'Vice President Kathryn Bennett',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            336 => 
            array (
                'cast_id' => 346,
                'movie_id' => 199,
                'person_id' => 301,
                'character' => 'Defense Secretary Walter Dean',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            337 => 
            array (
                'cast_id' => 347,
                'movie_id' => 199,
                'person_id' => 302,
                'character' => 'Chief Of Staff Lloyd Shepherd',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            338 => 
            array (
                'cast_id' => 348,
                'movie_id' => 199,
                'person_id' => 303,
                'character' => 'Grace Marshall',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            339 => 
            array (
                'cast_id' => 349,
                'movie_id' => 102,
                'person_id' => 78,
                'character' => 'Luke Skywalker',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            340 => 
            array (
                'cast_id' => 350,
                'movie_id' => 102,
                'person_id' => 79,
                'character' => 'Han Solo',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            341 => 
            array (
                'cast_id' => 351,
                'movie_id' => 102,
                'person_id' => 81,
                'character' => 'Princess Leia',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            342 => 
            array (
                'cast_id' => 352,
                'movie_id' => 102,
                'person_id' => 83,
                'character' => 'C3PO',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            343 => 
            array (
                'cast_id' => 353,
                'movie_id' => 102,
                'person_id' => 85,
                'character' => 'Darth Vader',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            344 => 
            array (
                'cast_id' => 354,
                'movie_id' => 102,
                'person_id' => 87,
                'character' => 'Chewbacca',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            345 => 
            array (
                'cast_id' => 355,
                'movie_id' => 102,
                'person_id' => 84,
                'character' => 'R2D2',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            346 => 
            array (
                'cast_id' => 356,
                'movie_id' => 102,
                'person_id' => 80,
                'character' => 'Ben',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            347 => 
            array (
                'cast_id' => 357,
                'movie_id' => 102,
                'person_id' => 304,
                'character' => 'Lando Calrissian',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            348 => 
            array (
                'cast_id' => 358,
                'movie_id' => 102,
                'person_id' => 305,
                'character' => 'Yoda',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            349 => 
            array (
                'cast_id' => 359,
                'movie_id' => 102,
                'person_id' => 306,
                'character' => 'Boba Fett',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            350 => 
            array (
                'cast_id' => 360,
                'movie_id' => 103,
                'person_id' => 78,
                'character' => 'Luke Skywalker',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            351 => 
            array (
                'cast_id' => 361,
                'movie_id' => 103,
                'person_id' => 79,
                'character' => 'Han Solo',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            352 => 
            array (
                'cast_id' => 362,
                'movie_id' => 103,
                'person_id' => 81,
                'character' => 'Princess Leia',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            353 => 
            array (
                'cast_id' => 363,
                'movie_id' => 103,
                'person_id' => 304,
                'character' => 'Lando Calrissian',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            354 => 
            array (
                'cast_id' => 364,
                'movie_id' => 103,
                'person_id' => 83,
                'character' => 'C3PO',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            355 => 
            array (
                'cast_id' => 365,
                'movie_id' => 103,
                'person_id' => 87,
                'character' => 'Chewbacca',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            356 => 
            array (
                'cast_id' => 366,
                'movie_id' => 103,
                'person_id' => 305,
                'character' => 'Yoda',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            357 => 
            array (
                'cast_id' => 367,
                'movie_id' => 103,
                'person_id' => 86,
                'character' => 'Darth Vader',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            358 => 
            array (
                'cast_id' => 368,
                'movie_id' => 103,
                'person_id' => 85,
                'character' => 'Darth Vader',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            359 => 
            array (
                'cast_id' => 369,
                'movie_id' => 103,
                'person_id' => 80,
                'character' => 'Ben ObiWan Kenobi',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            360 => 
            array (
                'cast_id' => 370,
                'movie_id' => 103,
                'person_id' => 84,
                'character' => 'R2 D2',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            361 => 
            array (
                'cast_id' => 371,
                'movie_id' => 103,
                'person_id' => 307,
                'character' => 'Anakin Skywalker',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            362 => 
            array (
                'cast_id' => 372,
                'movie_id' => 43,
                'person_id' => 308,
                'character' => 'Dante Hicks',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            363 => 
            array (
                'cast_id' => 373,
                'movie_id' => 43,
                'person_id' => 309,
                'character' => 'Randal Graves',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            364 => 
            array (
                'cast_id' => 374,
                'movie_id' => 43,
                'person_id' => 310,
                'character' => 'Jay',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            365 => 
            array (
                'cast_id' => 375,
                'movie_id' => 43,
                'person_id' => 311,
                'character' => 'Silent Bob',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            366 => 
            array (
                'cast_id' => 376,
                'movie_id' => 44,
                'person_id' => 312,
                'character' => 'Myca',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            367 => 
            array (
                'cast_id' => 377,
                'movie_id' => 45,
                'person_id' => 313,
                'character' => 'Yu Shu Lien',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            368 => 
            array (
                'cast_id' => 378,
                'movie_id' => 45,
                'person_id' => 314,
                'character' => 'Jen Yu',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            369 => 
            array (
                'cast_id' => 379,
                'movie_id' => 46,
                'person_id' => 228,
                'character' => 'Jim Morrison',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            370 => 
            array (
                'cast_id' => 380,
                'movie_id' => 46,
                'person_id' => 48,
                'character' => 'Paul Rothchild',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            371 => 
            array (
                'cast_id' => 381,
                'movie_id' => 46,
                'person_id' => 315,
                'character' => 'Pamela Courson',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            372 => 
            array (
                'cast_id' => 382,
                'movie_id' => 46,
                'person_id' => 316,
                'character' => 'Ray Manzarek',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            373 => 
            array (
                'cast_id' => 383,
                'movie_id' => 46,
                'person_id' => 317,
                'character' => 'Robby Krieger',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            374 => 
            array (
                'cast_id' => 384,
                'movie_id' => 46,
                'person_id' => 318,
                'character' => 'John Densmore',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            375 => 
            array (
                'cast_id' => 385,
                'movie_id' => 46,
                'person_id' => 319,
                'character' => 'Tom Baker',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            376 => 
            array (
                'cast_id' => 386,
                'movie_id' => 47,
                'person_id' => 320,
                'character' => 'Anderson',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            377 => 
            array (
                'cast_id' => 387,
                'movie_id' => 47,
                'person_id' => 321,
                'character' => 'Mama',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            378 => 
            array (
                'cast_id' => 388,
                'movie_id' => 48,
                'person_id' => 146,
                'character' => 'Shannon',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            379 => 
            array (
                'cast_id' => 389,
                'movie_id' => 48,
                'person_id' => 46,
                'character' => 'Nino',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            380 => 
            array (
                'cast_id' => 390,
                'movie_id' => 48,
                'person_id' => 322,
                'character' => 'Driver',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            381 => 
            array (
                'cast_id' => 391,
                'movie_id' => 48,
                'person_id' => 323,
                'character' => 'Irene',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            382 => 
            array (
                'cast_id' => 392,
                'movie_id' => 48,
                'person_id' => 324,
                'character' => 'Bernie Rose',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            383 => 
            array (
                'cast_id' => 393,
                'movie_id' => 48,
                'person_id' => 325,
                'character' => 'Standard',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            384 => 
            array (
                'cast_id' => 394,
                'movie_id' => 48,
                'person_id' => 326,
                'character' => 'Blanche',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            385 => 
            array (
                'cast_id' => 395,
                'movie_id' => 49,
                'person_id' => 327,
                'character' => 'Wong Feihung',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            386 => 
            array (
                'cast_id' => 396,
                'movie_id' => 49,
                'person_id' => 328,
                'character' => 'Counter Intelligence Officer',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            387 => 
            array (
                'cast_id' => 397,
                'movie_id' => 50,
                'person_id' => 291,
                'character' => 'Nathaniel',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            388 => 
            array (
                'cast_id' => 398,
                'movie_id' => 50,
                'person_id' => 329,
                'character' => 'Giselle',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            389 => 
            array (
                'cast_id' => 399,
                'movie_id' => 50,
                'person_id' => 330,
                'character' => 'Robert Philip',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            390 => 
            array (
                'cast_id' => 400,
                'movie_id' => 50,
                'person_id' => 331,
                'character' => 'Prince Edward',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            391 => 
            array (
                'cast_id' => 401,
                'movie_id' => 50,
                'person_id' => 332,
                'character' => 'Nancy Tremaine',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            392 => 
            array (
                'cast_id' => 402,
                'movie_id' => 50,
                'person_id' => 333,
                'character' => 'Queen Narissa',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            393 => 
            array (
                'cast_id' => 403,
                'movie_id' => 50,
                'person_id' => 334,
                'character' => 'The Narrator',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            394 => 
            array (
                'cast_id' => 404,
                'movie_id' => 51,
                'person_id' => 26,
                'character' => 'Brain',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            395 => 
            array (
                'cast_id' => 405,
                'movie_id' => 51,
                'person_id' => 335,
                'character' => 'Snake Plissken',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            396 => 
            array (
                'cast_id' => 406,
                'movie_id' => 51,
                'person_id' => 336,
                'character' => 'Hauk',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            397 => 
            array (
                'cast_id' => 407,
                'movie_id' => 51,
                'person_id' => 337,
                'character' => 'Cabbie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            398 => 
            array (
                'cast_id' => 408,
                'movie_id' => 51,
                'person_id' => 338,
                'character' => 'President',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            399 => 
            array (
                'cast_id' => 409,
                'movie_id' => 51,
                'person_id' => 339,
                'character' => 'The Duke',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            400 => 
            array (
                'cast_id' => 410,
                'movie_id' => 52,
                'person_id' => 97,
                'character' => 'Stephen',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            401 => 
            array (
                'cast_id' => 411,
                'movie_id' => 52,
                'person_id' => 340,
                'character' => 'Dr King Schultz',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            402 => 
            array (
                'cast_id' => 412,
                'movie_id' => 52,
                'person_id' => 341,
                'character' => 'Broomhilda Von Shaft',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            403 => 
            array (
                'cast_id' => 413,
                'movie_id' => 53,
                'person_id' => 342,
                'character' => 'Wikus Van De Merwe',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            404 => 
            array (
                'cast_id' => 414,
                'movie_id' => 54,
                'person_id' => 18,
                'character' => 'Agent 99',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            405 => 
            array (
                'cast_id' => 415,
                'movie_id' => 54,
                'person_id' => 147,
                'character' => 'The Chief',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            406 => 
            array (
                'cast_id' => 416,
                'movie_id' => 54,
                'person_id' => 343,
                'character' => 'Maxwell Smart',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            407 => 
            array (
                'cast_id' => 417,
                'movie_id' => 54,
                'person_id' => 344,
                'character' => 'Agent 23',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            408 => 
            array (
                'cast_id' => 418,
                'movie_id' => 54,
                'person_id' => 345,
                'character' => 'Siegfried',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            409 => 
            array (
                'cast_id' => 419,
                'movie_id' => 54,
                'person_id' => 346,
                'character' => 'Bruce',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            410 => 
            array (
                'cast_id' => 420,
                'movie_id' => 54,
                'person_id' => 347,
                'character' => 'Hymie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            411 => 
            array (
                'cast_id' => 421,
                'movie_id' => 54,
                'person_id' => 348,
                'character' => 'Agent 13',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            412 => 
            array (
                'cast_id' => 422,
                'movie_id' => 54,
                'person_id' => 349,
                'character' => 'The President',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            413 => 
            array (
                'cast_id' => 423,
                'movie_id' => 54,
                'person_id' => 350,
                'character' => 'Agent 91',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            414 => 
            array (
                'cast_id' => 424,
                'movie_id' => 55,
                'person_id' => 348,
                'character' => 'Dr Peter Venkman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            415 => 
            array (
                'cast_id' => 425,
                'movie_id' => 55,
                'person_id' => 14,
                'character' => 'Dr Raymond Stantz',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            416 => 
            array (
                'cast_id' => 426,
                'movie_id' => 55,
                'person_id' => 68,
                'character' => 'Walter Peck',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            417 => 
            array (
                'cast_id' => 427,
                'movie_id' => 55,
                'person_id' => 297,
                'character' => 'Winston Zeddmore',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            418 => 
            array (
                'cast_id' => 428,
                'movie_id' => 55,
                'person_id' => 351,
                'character' => 'Dr Egon Spengler',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            419 => 
            array (
                'cast_id' => 429,
                'movie_id' => 55,
                'person_id' => 352,
                'character' => 'Louis Tully',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            420 => 
            array (
                'cast_id' => 430,
                'movie_id' => 55,
                'person_id' => 353,
                'character' => 'Janine Melnitz',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            421 => 
            array (
                'cast_id' => 431,
                'movie_id' => 56,
                'person_id' => 113,
                'character' => 'Peter Quill',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            422 => 
            array (
                'cast_id' => 432,
                'movie_id' => 56,
                'person_id' => 152,
                'character' => 'Gamora',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            423 => 
            array (
                'cast_id' => 433,
                'movie_id' => 56,
                'person_id' => 300,
                'character' => 'Nova Prime',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            424 => 
            array (
                'cast_id' => 434,
                'movie_id' => 56,
                'person_id' => 354,
                'character' => 'Drax',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            425 => 
            array (
                'cast_id' => 435,
                'movie_id' => 56,
                'person_id' => 355,
                'character' => 'Groot',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            426 => 
            array (
                'cast_id' => 436,
                'movie_id' => 56,
                'person_id' => 356,
                'character' => 'Rocket',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            427 => 
            array (
                'cast_id' => 437,
                'movie_id' => 56,
                'person_id' => 357,
                'character' => 'Ronan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            428 => 
            array (
                'cast_id' => 438,
                'movie_id' => 56,
                'person_id' => 358,
                'character' => 'Yondu Udonta',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            429 => 
            array (
                'cast_id' => 439,
                'movie_id' => 56,
                'person_id' => 359,
                'character' => 'Nebula',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            430 => 
            array (
                'cast_id' => 440,
                'movie_id' => 56,
                'person_id' => 360,
                'character' => 'Korath',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            431 => 
            array (
                'cast_id' => 441,
                'movie_id' => 56,
                'person_id' => 361,
                'character' => 'Corpsman Dey',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            432 => 
            array (
                'cast_id' => 442,
                'movie_id' => 56,
                'person_id' => 362,
                'character' => 'The Collector',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            433 => 
            array (
                'cast_id' => 443,
                'movie_id' => 56,
                'person_id' => 363,
                'character' => 'Denarian Saal',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            434 => 
            array (
                'cast_id' => 444,
                'movie_id' => 57,
                'person_id' => 27,
                'character' => 'Mr Ollivander',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            435 => 
            array (
                'cast_id' => 445,
                'movie_id' => 57,
                'person_id' => 364,
                'character' => 'Professor Albus Dumbledore',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            436 => 
            array (
                'cast_id' => 446,
                'movie_id' => 57,
                'person_id' => 365,
                'character' => 'Professor Minerva Mcgonagall',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            437 => 
            array (
                'cast_id' => 447,
                'movie_id' => 57,
                'person_id' => 366,
                'character' => 'Rubeus Hagrid',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            438 => 
            array (
                'cast_id' => 448,
                'movie_id' => 57,
                'person_id' => 367,
                'character' => 'Harry Potter',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            439 => 
            array (
                'cast_id' => 449,
                'movie_id' => 57,
                'person_id' => 368,
                'character' => 'Aunt Petunia Dursley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            440 => 
            array (
                'cast_id' => 450,
                'movie_id' => 57,
                'person_id' => 369,
                'character' => 'Goblin Bank Teller  Professor Flitwick',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            441 => 
            array (
                'cast_id' => 451,
                'movie_id' => 57,
                'person_id' => 370,
                'character' => 'Griphook The Goblin',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            442 => 
            array (
                'cast_id' => 452,
                'movie_id' => 57,
                'person_id' => 371,
                'character' => 'Uncle Vernon Dursley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            443 => 
            array (
                'cast_id' => 453,
                'movie_id' => 57,
                'person_id' => 372,
                'character' => 'Dudley Dursley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            444 => 
            array (
                'cast_id' => 454,
                'movie_id' => 58,
                'person_id' => 367,
                'character' => 'Harry Potter',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            445 => 
            array (
                'cast_id' => 455,
                'movie_id' => 58,
                'person_id' => 371,
                'character' => 'Uncle Vernon Dursley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            446 => 
            array (
                'cast_id' => 456,
                'movie_id' => 58,
                'person_id' => 368,
                'character' => 'Aunt Petunia Dursley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            447 => 
            array (
                'cast_id' => 457,
                'movie_id' => 58,
                'person_id' => 372,
                'character' => 'Dudley Dursley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            448 => 
            array (
                'cast_id' => 458,
                'movie_id' => 58,
                'person_id' => 373,
                'character' => 'Ron Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            449 => 
            array (
                'cast_id' => 459,
                'movie_id' => 58,
                'person_id' => 374,
                'character' => 'Hermione Granger',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            450 => 
            array (
                'cast_id' => 460,
                'movie_id' => 58,
                'person_id' => 375,
                'character' => 'Dobby The House Elf',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            451 => 
            array (
                'cast_id' => 461,
                'movie_id' => 58,
                'person_id' => 376,
                'character' => 'Fred Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            452 => 
            array (
                'cast_id' => 462,
                'movie_id' => 58,
                'person_id' => 377,
                'character' => 'George Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            453 => 
            array (
                'cast_id' => 463,
                'movie_id' => 58,
                'person_id' => 378,
                'character' => 'Mrs Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            454 => 
            array (
                'cast_id' => 464,
                'movie_id' => 58,
                'person_id' => 379,
                'character' => 'Ginny Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            455 => 
            array (
                'cast_id' => 465,
                'movie_id' => 58,
                'person_id' => 380,
                'character' => 'Arthur Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            456 => 
            array (
                'cast_id' => 466,
                'movie_id' => 57,
                'person_id' => 373,
                'character' => 'Ron Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            457 => 
            array (
                'cast_id' => 467,
                'movie_id' => 57,
                'person_id' => 374,
                'character' => 'Hermione Granger',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            458 => 
            array (
                'cast_id' => 468,
                'movie_id' => 59,
                'person_id' => 367,
                'character' => 'Harry Potter',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            459 => 
            array (
                'cast_id' => 469,
                'movie_id' => 59,
                'person_id' => 371,
                'character' => 'Uncle Vernon',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            460 => 
            array (
                'cast_id' => 470,
                'movie_id' => 59,
                'person_id' => 368,
                'character' => 'Aunt Petunia',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            461 => 
            array (
                'cast_id' => 471,
                'movie_id' => 59,
                'person_id' => 372,
                'character' => 'Dudley Dursley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            462 => 
            array (
                'cast_id' => 472,
                'movie_id' => 59,
                'person_id' => 200,
                'character' => 'Sirius Black',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            463 => 
            array (
                'cast_id' => 473,
                'movie_id' => 59,
                'person_id' => 373,
                'character' => 'Ron Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            464 => 
            array (
                'cast_id' => 474,
                'movie_id' => 59,
                'person_id' => 374,
                'character' => 'Hermione Granger',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            465 => 
            array (
                'cast_id' => 475,
                'movie_id' => 59,
                'person_id' => 381,
                'character' => 'Aunt Marge',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            466 => 
            array (
                'cast_id' => 476,
                'movie_id' => 59,
                'person_id' => 382,
                'character' => 'Cornelius Fudge',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            467 => 
            array (
                'cast_id' => 477,
                'movie_id' => 59,
                'person_id' => 366,
                'character' => 'Hagrid',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            468 => 
            array (
                'cast_id' => 478,
                'movie_id' => 58,
                'person_id' => 366,
                'character' => 'Hagrid',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            469 => 
            array (
                'cast_id' => 479,
                'movie_id' => 60,
                'person_id' => 291,
                'character' => 'Wormtail',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            470 => 
            array (
                'cast_id' => 480,
                'movie_id' => 60,
                'person_id' => 367,
                'character' => 'Harry Potter',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            471 => 
            array (
                'cast_id' => 481,
                'movie_id' => 60,
                'person_id' => 374,
                'character' => 'Hermione Granger',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            472 => 
            array (
                'cast_id' => 482,
                'movie_id' => 60,
                'person_id' => 373,
                'character' => 'Ron Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            473 => 
            array (
                'cast_id' => 483,
                'movie_id' => 60,
                'person_id' => 380,
                'character' => 'Arthur Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            474 => 
            array (
                'cast_id' => 484,
                'movie_id' => 60,
                'person_id' => 376,
                'character' => 'Fred Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            475 => 
            array (
                'cast_id' => 485,
                'movie_id' => 60,
                'person_id' => 377,
                'character' => 'George Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            476 => 
            array (
                'cast_id' => 486,
                'movie_id' => 60,
                'person_id' => 379,
                'character' => 'Ginny Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            477 => 
            array (
                'cast_id' => 487,
                'movie_id' => 60,
                'person_id' => 383,
                'character' => 'Frank Bryce',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            478 => 
            array (
                'cast_id' => 488,
                'movie_id' => 60,
                'person_id' => 384,
                'character' => 'Barty Crouch Junior',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            479 => 
            array (
                'cast_id' => 489,
                'movie_id' => 60,
                'person_id' => 385,
                'character' => 'Cedric Diggory',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            480 => 
            array (
                'cast_id' => 490,
                'movie_id' => 60,
                'person_id' => 386,
                'character' => 'Lucius Malfoy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            481 => 
            array (
                'cast_id' => 491,
                'movie_id' => 60,
                'person_id' => 387,
                'character' => 'Draco Malfoy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            482 => 
            array (
                'cast_id' => 492,
                'movie_id' => 61,
                'person_id' => 367,
                'character' => 'Harry Potter',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            483 => 
            array (
                'cast_id' => 493,
                'movie_id' => 61,
                'person_id' => 372,
                'character' => 'Dudley Dursley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            484 => 
            array (
                'cast_id' => 494,
                'movie_id' => 61,
                'person_id' => 368,
                'character' => 'Aunt Petunia Dursley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            485 => 
            array (
                'cast_id' => 495,
                'movie_id' => 61,
                'person_id' => 371,
                'character' => 'Uncle Vernon Dursley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            486 => 
            array (
                'cast_id' => 496,
                'movie_id' => 61,
                'person_id' => 385,
                'character' => 'Cedric Diggory',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            487 => 
            array (
                'cast_id' => 497,
                'movie_id' => 61,
                'person_id' => 388,
                'character' => 'Lord Voldemort',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            488 => 
            array (
                'cast_id' => 498,
                'movie_id' => 61,
                'person_id' => 389,
                'character' => 'Nymphadora Tonks',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            489 => 
            array (
                'cast_id' => 499,
                'movie_id' => 61,
                'person_id' => 390,
                'character' => 'Alastor Madeye Moody',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            490 => 
            array (
                'cast_id' => 500,
                'movie_id' => 62,
                'person_id' => 367,
                'character' => 'Harry Potter',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            491 => 
            array (
                'cast_id' => 501,
                'movie_id' => 62,
                'person_id' => 379,
                'character' => 'Ginny Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            492 => 
            array (
                'cast_id' => 502,
                'movie_id' => 62,
                'person_id' => 378,
                'character' => 'Molly Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            493 => 
            array (
                'cast_id' => 503,
                'movie_id' => 62,
                'person_id' => 373,
                'character' => 'Ron Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            494 => 
            array (
                'cast_id' => 504,
                'movie_id' => 62,
                'person_id' => 374,
                'character' => 'Hermione Granger',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            495 => 
            array (
                'cast_id' => 505,
                'movie_id' => 62,
                'person_id' => 17,
                'character' => 'Bellatrix Lestrange',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            496 => 
            array (
                'cast_id' => 506,
                'movie_id' => 62,
                'person_id' => 291,
                'character' => 'Wormtail',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            497 => 
            array (
                'cast_id' => 507,
                'movie_id' => 62,
                'person_id' => 377,
                'character' => 'George Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            498 => 
            array (
                'cast_id' => 508,
                'movie_id' => 62,
                'person_id' => 391,
                'character' => 'Professor Albus Dumbledore',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            499 => 
            array (
                'cast_id' => 509,
                'movie_id' => 62,
                'person_id' => 392,
                'character' => 'Professor Horace Slughorn',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
        ));
        \DB::table('cast')->insert(array (
            0 => 
            array (
                'cast_id' => 510,
                'movie_id' => 63,
                'person_id' => 374,
                'character' => 'Hermione Granger',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            1 => 
            array (
                'cast_id' => 511,
                'movie_id' => 63,
                'person_id' => 371,
                'character' => 'Vernon Dursley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            2 => 
            array (
                'cast_id' => 512,
                'movie_id' => 63,
                'person_id' => 372,
                'character' => 'Dudley Dursley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            3 => 
            array (
                'cast_id' => 513,
                'movie_id' => 63,
                'person_id' => 367,
                'character' => 'Harry Potter',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            4 => 
            array (
                'cast_id' => 514,
                'movie_id' => 63,
                'person_id' => 378,
                'character' => 'Molly Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            5 => 
            array (
                'cast_id' => 515,
                'movie_id' => 63,
                'person_id' => 379,
                'character' => 'Ginny Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            6 => 
            array (
                'cast_id' => 516,
                'movie_id' => 63,
                'person_id' => 373,
                'character' => 'Ron Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            7 => 
            array (
                'cast_id' => 517,
                'movie_id' => 63,
                'person_id' => 368,
                'character' => 'Petunia Dursley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            8 => 
            array (
                'cast_id' => 518,
                'movie_id' => 63,
                'person_id' => 388,
                'character' => 'Lord Voldemort',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            9 => 
            array (
                'cast_id' => 519,
                'movie_id' => 63,
                'person_id' => 17,
                'character' => 'Bellatrix Lestrange',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            10 => 
            array (
                'cast_id' => 520,
                'movie_id' => 63,
                'person_id' => 393,
                'character' => 'Minister Rufus Scrimgeour',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            11 => 
            array (
                'cast_id' => 521,
                'movie_id' => 64,
                'person_id' => 388,
                'character' => 'Lord Voldemort',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            12 => 
            array (
                'cast_id' => 522,
                'movie_id' => 64,
                'person_id' => 391,
                'character' => 'Professor Albus Dumbledore',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            13 => 
            array (
                'cast_id' => 523,
                'movie_id' => 64,
                'person_id' => 367,
                'character' => 'Harry Potter',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            14 => 
            array (
                'cast_id' => 524,
                'movie_id' => 64,
                'person_id' => 373,
                'character' => 'Ron Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            15 => 
            array (
                'cast_id' => 525,
                'movie_id' => 64,
                'person_id' => 374,
                'character' => 'Hermione Granger',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            16 => 
            array (
                'cast_id' => 526,
                'movie_id' => 64,
                'person_id' => 369,
                'character' => 'Griphook  Professor Filius Flitwick',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            17 => 
            array (
                'cast_id' => 527,
                'movie_id' => 64,
                'person_id' => 27,
                'character' => 'Ollivander',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            18 => 
            array (
                'cast_id' => 528,
                'movie_id' => 64,
                'person_id' => 17,
                'character' => 'Bellatrix Lestrange',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            19 => 
            array (
                'cast_id' => 529,
                'movie_id' => 64,
                'person_id' => 394,
                'character' => 'Luna Lovegood',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            20 => 
            array (
                'cast_id' => 530,
                'movie_id' => 64,
                'person_id' => 395,
                'character' => 'Bill Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            21 => 
            array (
                'cast_id' => 531,
                'movie_id' => 65,
                'person_id' => 345,
                'character' => 'Ramsley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            22 => 
            array (
                'cast_id' => 532,
                'movie_id' => 65,
                'person_id' => 396,
                'character' => 'Jim Evers',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            23 => 
            array (
                'cast_id' => 533,
                'movie_id' => 65,
                'person_id' => 397,
                'character' => 'Master Gracey',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            24 => 
            array (
                'cast_id' => 534,
                'movie_id' => 65,
                'person_id' => 398,
                'character' => 'Madame Leota',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            25 => 
            array (
                'cast_id' => 535,
                'movie_id' => 65,
                'person_id' => 399,
                'character' => 'Ezra',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            26 => 
            array (
                'cast_id' => 536,
                'movie_id' => 66,
                'person_id' => 400,
                'character' => 'Eddie Felson',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            27 => 
            array (
                'cast_id' => 537,
                'movie_id' => 66,
                'person_id' => 401,
                'character' => 'Minnesota Fats',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            28 => 
            array (
                'cast_id' => 538,
                'movie_id' => 66,
                'person_id' => 402,
                'character' => 'Sarah Packard',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            29 => 
            array (
                'cast_id' => 539,
                'movie_id' => 66,
                'person_id' => 403,
                'character' => 'Bert Gordon',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            30 => 
            array (
                'cast_id' => 540,
                'movie_id' => 67,
                'person_id' => 371,
                'character' => 'Monsieur Frick',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            31 => 
            array (
                'cast_id' => 541,
                'movie_id' => 67,
                'person_id' => 404,
                'character' => 'Georges Mlis',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            32 => 
            array (
                'cast_id' => 542,
                'movie_id' => 67,
                'person_id' => 405,
                'character' => 'Station Inspector',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            33 => 
            array (
                'cast_id' => 543,
                'movie_id' => 67,
                'person_id' => 406,
                'character' => 'Hugo Cabret',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            34 => 
            array (
                'cast_id' => 544,
                'movie_id' => 67,
                'person_id' => 407,
                'character' => 'Isabelle',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            35 => 
            array (
                'cast_id' => 545,
                'movie_id' => 67,
                'person_id' => 408,
                'character' => 'Uncle Claude',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            36 => 
            array (
                'cast_id' => 546,
                'movie_id' => 67,
                'person_id' => 409,
                'character' => 'Monsieur Labisse',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            37 => 
            array (
                'cast_id' => 547,
                'movie_id' => 67,
                'person_id' => 410,
                'character' => 'Hugos Father',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            38 => 
            array (
                'cast_id' => 548,
                'movie_id' => 69,
                'person_id' => 411,
                'character' => 'Katniss Everdeen',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            39 => 
            array (
                'cast_id' => 549,
                'movie_id' => 69,
                'person_id' => 412,
                'character' => 'Gale Hawthorne',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            40 => 
            array (
                'cast_id' => 550,
                'movie_id' => 69,
                'person_id' => 413,
                'character' => 'Haymitch Abernathy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            41 => 
            array (
                'cast_id' => 551,
                'movie_id' => 69,
                'person_id' => 414,
                'character' => 'Peeta Mellark',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            42 => 
            array (
                'cast_id' => 552,
                'movie_id' => 69,
                'person_id' => 415,
                'character' => 'Katniss Mother',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            43 => 
            array (
                'cast_id' => 553,
                'movie_id' => 69,
                'person_id' => 416,
                'character' => 'Primrose Everdeen',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            44 => 
            array (
                'cast_id' => 554,
                'movie_id' => 69,
                'person_id' => 417,
                'character' => 'President Snow',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            45 => 
            array (
                'cast_id' => 555,
                'movie_id' => 69,
                'person_id' => 418,
                'character' => 'Effie Trinket',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            46 => 
            array (
                'cast_id' => 556,
                'movie_id' => 69,
                'person_id' => 419,
                'character' => 'Cinna',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            47 => 
            array (
                'cast_id' => 557,
                'movie_id' => 69,
                'person_id' => 420,
                'character' => 'Caesar Flickerman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            48 => 
            array (
                'cast_id' => 558,
                'movie_id' => 70,
                'person_id' => 411,
                'character' => 'Katniss Everdeen',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            49 => 
            array (
                'cast_id' => 559,
                'movie_id' => 70,
                'person_id' => 414,
                'character' => 'Peeta Mellark',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            50 => 
            array (
                'cast_id' => 560,
                'movie_id' => 70,
                'person_id' => 412,
                'character' => 'Gale Hawthorne',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            51 => 
            array (
                'cast_id' => 561,
                'movie_id' => 70,
                'person_id' => 413,
                'character' => 'Haymitch Abernathy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            52 => 
            array (
                'cast_id' => 562,
                'movie_id' => 70,
                'person_id' => 417,
                'character' => 'President Snow',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            53 => 
            array (
                'cast_id' => 563,
                'movie_id' => 70,
                'person_id' => 101,
                'character' => 'President Alma Coin',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            54 => 
            array (
                'cast_id' => 564,
                'movie_id' => 70,
                'person_id' => 416,
                'character' => 'Primrose Everdeen',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            55 => 
            array (
                'cast_id' => 565,
                'movie_id' => 70,
                'person_id' => 418,
                'character' => 'Effie Trinket',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            56 => 
            array (
                'cast_id' => 566,
                'movie_id' => 70,
                'person_id' => 415,
                'character' => 'Katniss Mother',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            57 => 
            array (
                'cast_id' => 567,
                'movie_id' => 70,
                'person_id' => 420,
                'character' => 'Caesar Flickerman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            58 => 
            array (
                'cast_id' => 568,
                'movie_id' => 70,
                'person_id' => 421,
                'character' => 'Plutarch Heavensbee',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            59 => 
            array (
                'cast_id' => 569,
                'movie_id' => 70,
                'person_id' => 422,
                'character' => 'Finnick Odair',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            60 => 
            array (
                'cast_id' => 570,
                'movie_id' => 70,
                'person_id' => 423,
                'character' => 'Johanna Mason',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            61 => 
            array (
                'cast_id' => 571,
                'movie_id' => 70,
                'person_id' => 424,
                'character' => 'Beetee',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            62 => 
            array (
                'cast_id' => 572,
                'movie_id' => 70,
                'person_id' => 425,
                'character' => 'Boggs',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            63 => 
            array (
                'cast_id' => 573,
                'movie_id' => 71,
                'person_id' => 426,
                'character' => 'Del Spooner',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            64 => 
            array (
                'cast_id' => 574,
                'movie_id' => 71,
                'person_id' => 427,
                'character' => 'Susan Calvin',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            65 => 
            array (
                'cast_id' => 575,
                'movie_id' => 71,
                'person_id' => 428,
                'character' => 'Sonny',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            66 => 
            array (
                'cast_id' => 576,
                'movie_id' => 71,
                'person_id' => 429,
                'character' => 'Dr Alfred Lanning',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            67 => 
            array (
                'cast_id' => 577,
                'movie_id' => 71,
                'person_id' => 430,
                'character' => 'Lawrence Robertson',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            68 => 
            array (
                'cast_id' => 578,
                'movie_id' => 72,
                'person_id' => 431,
                'character' => 'Steven Russell',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            69 => 
            array (
                'cast_id' => 579,
                'movie_id' => 72,
                'person_id' => 432,
                'character' => 'Phillip Morris',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            70 => 
            array (
                'cast_id' => 580,
                'movie_id' => 72,
                'person_id' => 433,
                'character' => 'Debbie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            71 => 
            array (
                'cast_id' => 581,
                'movie_id' => 73,
                'person_id' => 340,
                'character' => 'Col Hans Landa',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            72 => 
            array (
                'cast_id' => 582,
                'movie_id' => 73,
                'person_id' => 434,
                'character' => 'Shosanna',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            73 => 
            array (
                'cast_id' => 583,
                'movie_id' => 73,
                'person_id' => 435,
                'character' => 'Sgt Donny Donowitz',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            74 => 
            array (
                'cast_id' => 584,
                'movie_id' => 73,
                'person_id' => 195,
                'character' => 'Fredrick Zoller',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            75 => 
            array (
                'cast_id' => 585,
                'movie_id' => 73,
                'person_id' => 436,
                'character' => 'Lt Archie Hicox',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            76 => 
            array (
                'cast_id' => 586,
                'movie_id' => 73,
                'person_id' => 437,
                'character' => 'Bridget Von Hammersmark',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            77 => 
            array (
                'cast_id' => 587,
                'movie_id' => 74,
                'person_id' => 134,
                'character' => 'Cobb',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            78 => 
            array (
                'cast_id' => 588,
                'movie_id' => 74,
                'person_id' => 218,
                'character' => 'Arthur',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            79 => 
            array (
                'cast_id' => 589,
                'movie_id' => 74,
                'person_id' => 217,
                'character' => 'Eames',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            80 => 
            array (
                'cast_id' => 590,
                'movie_id' => 74,
                'person_id' => 215,
                'character' => 'Saito',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            81 => 
            array (
                'cast_id' => 591,
                'movie_id' => 74,
                'person_id' => 201,
                'character' => 'Robert Fischer',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            82 => 
            array (
                'cast_id' => 592,
                'movie_id' => 74,
                'person_id' => 219,
                'character' => 'Mal',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            83 => 
            array (
                'cast_id' => 593,
                'movie_id' => 74,
                'person_id' => 43,
                'character' => 'Maurice Fischer',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            84 => 
            array (
                'cast_id' => 594,
                'movie_id' => 74,
                'person_id' => 197,
                'character' => 'Miles',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            85 => 
            array (
                'cast_id' => 595,
                'movie_id' => 74,
                'person_id' => 438,
                'character' => 'Ariadne',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            86 => 
            array (
                'cast_id' => 596,
                'movie_id' => 74,
                'person_id' => 439,
                'character' => 'Yusuf',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            87 => 
            array (
                'cast_id' => 597,
                'movie_id' => 74,
                'person_id' => 440,
                'character' => 'Browning',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            88 => 
            array (
                'cast_id' => 598,
                'movie_id' => 74,
                'person_id' => 441,
                'character' => 'Nash',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            89 => 
            array (
                'cast_id' => 599,
                'movie_id' => 75,
                'person_id' => 121,
                'character' => 'Tony Stark  Iron Man',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            90 => 
            array (
                'cast_id' => 600,
                'movie_id' => 75,
                'person_id' => 131,
                'character' => 'Pepper Potts',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            91 => 
            array (
                'cast_id' => 601,
                'movie_id' => 75,
                'person_id' => 128,
                'character' => 'Agent Coulson',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            92 => 
            array (
                'cast_id' => 602,
                'movie_id' => 75,
                'person_id' => 132,
                'character' => 'Jarvis',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            93 => 
            array (
                'cast_id' => 603,
                'movie_id' => 75,
                'person_id' => 442,
                'character' => 'Rhodey',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            94 => 
            array (
                'cast_id' => 604,
                'movie_id' => 75,
                'person_id' => 443,
                'character' => 'Obadiah Stane',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            95 => 
            array (
                'cast_id' => 605,
                'movie_id' => 75,
                'person_id' => 444,
                'character' => 'Christine Everhart',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            96 => 
            array (
                'cast_id' => 606,
                'movie_id' => 75,
                'person_id' => 445,
                'character' => 'Hogan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            97 => 
            array (
                'cast_id' => 607,
                'movie_id' => 76,
                'person_id' => 121,
                'character' => 'Tony Stark',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            98 => 
            array (
                'cast_id' => 608,
                'movie_id' => 76,
                'person_id' => 131,
                'character' => 'Pepper Potts',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            99 => 
            array (
                'cast_id' => 609,
                'movie_id' => 76,
                'person_id' => 125,
                'character' => 'Natalie Rushman  Natasha Romanoff',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            100 => 
            array (
                'cast_id' => 610,
                'movie_id' => 76,
                'person_id' => 128,
                'character' => 'Agent Coulson',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            101 => 
            array (
                'cast_id' => 611,
                'movie_id' => 76,
                'person_id' => 132,
                'character' => 'Jarvis',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            102 => 
            array (
                'cast_id' => 612,
                'movie_id' => 76,
                'person_id' => 444,
                'character' => 'Christine Everhart',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            103 => 
            array (
                'cast_id' => 613,
                'movie_id' => 76,
                'person_id' => 445,
                'character' => 'Happy Hogan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            104 => 
            array (
                'cast_id' => 614,
                'movie_id' => 76,
                'person_id' => 446,
                'character' => 'James Rhodey Rhodes',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            105 => 
            array (
                'cast_id' => 615,
                'movie_id' => 76,
                'person_id' => 447,
                'character' => 'Justin Hammer',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            106 => 
            array (
                'cast_id' => 616,
                'movie_id' => 76,
                'person_id' => 448,
                'character' => 'Ivan Vanko',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            107 => 
            array (
                'cast_id' => 617,
                'movie_id' => 76,
                'person_id' => 97,
                'character' => 'Nick Fury',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            108 => 
            array (
                'cast_id' => 618,
                'movie_id' => 76,
                'person_id' => 449,
                'character' => 'Us Marshal',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            109 => 
            array (
                'cast_id' => 619,
                'movie_id' => 57,
                'person_id' => 378,
                'character' => 'Molly Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            110 => 
            array (
                'cast_id' => 620,
                'movie_id' => 57,
                'person_id' => 379,
                'character' => 'Ginny Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            111 => 
            array (
                'cast_id' => 621,
                'movie_id' => 57,
                'person_id' => 376,
                'character' => 'Fred Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            112 => 
            array (
                'cast_id' => 622,
                'movie_id' => 57,
                'person_id' => 377,
                'character' => 'George Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            113 => 
            array (
                'cast_id' => 623,
                'movie_id' => 57,
                'person_id' => 387,
                'character' => 'Draco Malfoy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            114 => 
            array (
                'cast_id' => 624,
                'movie_id' => 57,
                'person_id' => 450,
                'character' => 'Nearly Headless Nick',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            115 => 
            array (
                'cast_id' => 625,
                'movie_id' => 57,
                'person_id' => 451,
                'character' => 'Argus Filch',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            116 => 
            array (
                'cast_id' => 626,
                'movie_id' => 58,
                'person_id' => 387,
                'character' => 'Draco Malfoy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            117 => 
            array (
                'cast_id' => 627,
                'movie_id' => 58,
                'person_id' => 386,
                'character' => 'Lucius Malfoy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            118 => 
            array (
                'cast_id' => 628,
                'movie_id' => 58,
                'person_id' => 451,
                'character' => 'Argus Filch',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            119 => 
            array (
                'cast_id' => 629,
                'movie_id' => 58,
                'person_id' => 364,
                'character' => 'Professor Albus Dumbledore',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            120 => 
            array (
                'cast_id' => 630,
                'movie_id' => 58,
                'person_id' => 365,
                'character' => 'Professor Minerva McGonagall',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            121 => 
            array (
                'cast_id' => 631,
                'movie_id' => 58,
                'person_id' => 450,
                'character' => 'Nearly Headless Nick',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            122 => 
            array (
                'cast_id' => 632,
                'movie_id' => 58,
                'person_id' => 369,
                'character' => 'Professor Flitwick',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            123 => 
            array (
                'cast_id' => 633,
                'movie_id' => 58,
                'person_id' => 382,
                'character' => 'Cornelius Fudge',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            124 => 
            array (
                'cast_id' => 634,
                'movie_id' => 59,
                'person_id' => 377,
                'character' => 'George Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            125 => 
            array (
                'cast_id' => 635,
                'movie_id' => 59,
                'person_id' => 376,
                'character' => 'Fred Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            126 => 
            array (
                'cast_id' => 636,
                'movie_id' => 59,
                'person_id' => 378,
                'character' => 'Mrs Molly Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            127 => 
            array (
                'cast_id' => 637,
                'movie_id' => 59,
                'person_id' => 379,
                'character' => 'Ginny Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            128 => 
            array (
                'cast_id' => 638,
                'movie_id' => 59,
                'person_id' => 380,
                'character' => 'Mr Arthur Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            129 => 
            array (
                'cast_id' => 639,
                'movie_id' => 59,
                'person_id' => 369,
                'character' => 'Wizard',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            130 => 
            array (
                'cast_id' => 640,
                'movie_id' => 59,
                'person_id' => 451,
                'character' => 'Argus Filch',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            131 => 
            array (
                'cast_id' => 641,
                'movie_id' => 59,
                'person_id' => 391,
                'character' => 'Albus Dumbledore',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            132 => 
            array (
                'cast_id' => 642,
                'movie_id' => 59,
                'person_id' => 365,
                'character' => 'Professor Minerva McGonagall',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            133 => 
            array (
                'cast_id' => 643,
                'movie_id' => 59,
                'person_id' => 387,
                'character' => 'Draco Malfoy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            134 => 
            array (
                'cast_id' => 644,
                'movie_id' => 59,
                'person_id' => 291,
                'character' => 'Peter Pettigrew',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            135 => 
            array (
                'cast_id' => 645,
                'movie_id' => 59,
                'person_id' => 452,
                'character' => 'Professor Lupin',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            136 => 
            array (
                'cast_id' => 646,
                'movie_id' => 59,
                'person_id' => 453,
                'character' => 'Professor Sybil Trelawney',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            137 => 
            array (
                'cast_id' => 647,
                'movie_id' => 60,
                'person_id' => 382,
                'character' => 'Cornelius Fudge',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            138 => 
            array (
                'cast_id' => 648,
                'movie_id' => 60,
                'person_id' => 366,
                'character' => 'Rubeus Hagrid',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            139 => 
            array (
                'cast_id' => 649,
                'movie_id' => 60,
                'person_id' => 391,
                'character' => 'Albus Dumbledore',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            140 => 
            array (
                'cast_id' => 650,
                'movie_id' => 60,
                'person_id' => 451,
                'character' => 'Argus Filch',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            141 => 
            array (
                'cast_id' => 651,
                'movie_id' => 60,
                'person_id' => 369,
                'character' => 'Filius Flitwick',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            142 => 
            array (
                'cast_id' => 652,
                'movie_id' => 60,
                'person_id' => 365,
                'character' => 'Minerva McGonagall',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            143 => 
            array (
                'cast_id' => 653,
                'movie_id' => 60,
                'person_id' => 390,
                'character' => 'Professor Alastor MadEye Moody',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            144 => 
            array (
                'cast_id' => 654,
                'movie_id' => 60,
                'person_id' => 200,
                'character' => 'Sirius Black',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            145 => 
            array (
                'cast_id' => 655,
                'movie_id' => 60,
                'person_id' => 388,
                'character' => 'Lord Voldemort',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            146 => 
            array (
                'cast_id' => 656,
                'movie_id' => 61,
                'person_id' => 200,
                'character' => 'Sirius Black',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            147 => 
            array (
                'cast_id' => 657,
                'movie_id' => 61,
                'person_id' => 380,
                'character' => 'Arthur Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            148 => 
            array (
                'cast_id' => 658,
                'movie_id' => 61,
                'person_id' => 452,
                'character' => 'Remus Lupin',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            149 => 
            array (
                'cast_id' => 659,
                'movie_id' => 61,
                'person_id' => 365,
                'character' => 'Minerva McGonagall',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            150 => 
            array (
                'cast_id' => 660,
                'movie_id' => 61,
                'person_id' => 378,
                'character' => 'Molly Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            151 => 
            array (
                'cast_id' => 661,
                'movie_id' => 61,
                'person_id' => 374,
                'character' => 'Hermione Granger',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            152 => 
            array (
                'cast_id' => 662,
                'movie_id' => 61,
                'person_id' => 373,
                'character' => 'Ron Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            153 => 
            array (
                'cast_id' => 663,
                'movie_id' => 61,
                'person_id' => 376,
                'character' => 'Fred Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            154 => 
            array (
                'cast_id' => 664,
                'movie_id' => 61,
                'person_id' => 377,
                'character' => 'George Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            155 => 
            array (
                'cast_id' => 665,
                'movie_id' => 61,
                'person_id' => 379,
                'character' => 'Ginny Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            156 => 
            array (
                'cast_id' => 666,
                'movie_id' => 61,
                'person_id' => 382,
                'character' => 'Cornelius Fudge',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            157 => 
            array (
                'cast_id' => 667,
                'movie_id' => 61,
                'person_id' => 386,
                'character' => 'Lucius Malfoy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            158 => 
            array (
                'cast_id' => 668,
                'movie_id' => 61,
                'person_id' => 391,
                'character' => 'Albus Percival Wulfric Brian Dumbledore',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            159 => 
            array (
                'cast_id' => 669,
                'movie_id' => 61,
                'person_id' => 387,
                'character' => 'Draco Malfoy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            160 => 
            array (
                'cast_id' => 670,
                'movie_id' => 61,
                'person_id' => 394,
                'character' => 'Luna Lovegood',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            161 => 
            array (
                'cast_id' => 671,
                'movie_id' => 61,
                'person_id' => 451,
                'character' => 'Argus Filch',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            162 => 
            array (
                'cast_id' => 672,
                'movie_id' => 61,
                'person_id' => 453,
                'character' => 'Sybil Trelawney',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            163 => 
            array (
                'cast_id' => 673,
                'movie_id' => 61,
                'person_id' => 369,
                'character' => 'Filius Flitwick',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            164 => 
            array (
                'cast_id' => 674,
                'movie_id' => 61,
                'person_id' => 17,
                'character' => 'Bellatrix Lestrange',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            165 => 
            array (
                'cast_id' => 675,
                'movie_id' => 61,
                'person_id' => 366,
                'character' => 'Rubeus Hagrid',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            166 => 
            array (
                'cast_id' => 676,
                'movie_id' => 61,
                'person_id' => 291,
                'character' => 'Peter Pettigrew',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            167 => 
            array (
                'cast_id' => 677,
                'movie_id' => 62,
                'person_id' => 376,
                'character' => 'Fred Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            168 => 
            array (
                'cast_id' => 678,
                'movie_id' => 62,
                'person_id' => 387,
                'character' => 'Draco Malfoy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            169 => 
            array (
                'cast_id' => 679,
                'movie_id' => 62,
                'person_id' => 394,
                'character' => 'Luna Lovegood',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            170 => 
            array (
                'cast_id' => 680,
                'movie_id' => 62,
                'person_id' => 366,
                'character' => 'Rubeus Hagrid',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            171 => 
            array (
                'cast_id' => 681,
                'movie_id' => 62,
                'person_id' => 369,
                'character' => 'Professor Filius Flitwick',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            172 => 
            array (
                'cast_id' => 682,
                'movie_id' => 62,
                'person_id' => 451,
                'character' => 'Argus Filch',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            173 => 
            array (
                'cast_id' => 683,
                'movie_id' => 62,
                'person_id' => 365,
                'character' => 'Professor Minerva McGonagall',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            174 => 
            array (
                'cast_id' => 684,
                'movie_id' => 62,
                'person_id' => 452,
                'character' => 'Remus Lupin',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            175 => 
            array (
                'cast_id' => 685,
                'movie_id' => 62,
                'person_id' => 389,
                'character' => 'Nymphadora Tonks',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            176 => 
            array (
                'cast_id' => 686,
                'movie_id' => 62,
                'person_id' => 380,
                'character' => 'Arthur Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            177 => 
            array (
                'cast_id' => 687,
                'movie_id' => 62,
                'person_id' => 386,
                'character' => 'Lucius Malfoy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            178 => 
            array (
                'cast_id' => 688,
                'movie_id' => 63,
                'person_id' => 386,
                'character' => 'Lucius Malfoy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            179 => 
            array (
                'cast_id' => 689,
                'movie_id' => 63,
                'person_id' => 387,
                'character' => 'Draco Malfoy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            180 => 
            array (
                'cast_id' => 690,
                'movie_id' => 63,
                'person_id' => 291,
                'character' => 'Wormtail',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            181 => 
            array (
                'cast_id' => 691,
                'movie_id' => 63,
                'person_id' => 391,
                'character' => 'Professor Albus Dumbledore',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            182 => 
            array (
                'cast_id' => 692,
                'movie_id' => 63,
                'person_id' => 366,
                'character' => 'Rubeus Hagrid',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            183 => 
            array (
                'cast_id' => 693,
                'movie_id' => 63,
                'person_id' => 390,
                'character' => 'Alastor MadEye Moody',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            184 => 
            array (
                'cast_id' => 694,
                'movie_id' => 63,
                'person_id' => 376,
                'character' => 'Fred Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            185 => 
            array (
                'cast_id' => 695,
                'movie_id' => 63,
                'person_id' => 377,
                'character' => 'George Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            186 => 
            array (
                'cast_id' => 696,
                'movie_id' => 63,
                'person_id' => 380,
                'character' => 'Arthur Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            187 => 
            array (
                'cast_id' => 697,
                'movie_id' => 63,
                'person_id' => 395,
                'character' => 'Bill Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            188 => 
            array (
                'cast_id' => 698,
                'movie_id' => 63,
                'person_id' => 389,
                'character' => 'Nymphadora Tonks',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            189 => 
            array (
                'cast_id' => 699,
                'movie_id' => 63,
                'person_id' => 452,
                'character' => 'Remus Lupin',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            190 => 
            array (
                'cast_id' => 700,
                'movie_id' => 63,
                'person_id' => 27,
                'character' => 'Ollivander',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            191 => 
            array (
                'cast_id' => 701,
                'movie_id' => 63,
                'person_id' => 394,
                'character' => 'Luna Lovegood',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            192 => 
            array (
                'cast_id' => 702,
                'movie_id' => 63,
                'person_id' => 56,
                'character' => 'Xenophilius Lovegood',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            193 => 
            array (
                'cast_id' => 703,
                'movie_id' => 63,
                'person_id' => 375,
                'character' => 'Dobby',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            194 => 
            array (
                'cast_id' => 704,
                'movie_id' => 63,
                'person_id' => 369,
                'character' => 'Griphook',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            195 => 
            array (
                'cast_id' => 705,
                'movie_id' => 69,
                'person_id' => 421,
                'character' => 'Plutarch Heavensbee',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            196 => 
            array (
                'cast_id' => 706,
                'movie_id' => 69,
                'person_id' => 424,
                'character' => 'Beetee',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            197 => 
            array (
                'cast_id' => 707,
                'movie_id' => 69,
                'person_id' => 422,
                'character' => 'Finnick Odair',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            198 => 
            array (
                'cast_id' => 708,
                'movie_id' => 69,
                'person_id' => 375,
                'character' => 'Claudius Templesmith',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            199 => 
            array (
                'cast_id' => 709,
                'movie_id' => 69,
                'person_id' => 423,
                'character' => 'Johanna Mason',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            200 => 
            array (
                'cast_id' => 710,
                'movie_id' => 69,
                'person_id' => 454,
                'character' => 'Wiress',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            201 => 
            array (
                'cast_id' => 711,
                'movie_id' => 70,
                'person_id' => 455,
                'character' => 'Cressida',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            202 => 
            array (
                'cast_id' => 712,
                'movie_id' => 70,
                'person_id' => 456,
                'character' => 'Antonius',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            203 => 
            array (
                'cast_id' => 713,
                'movie_id' => 71,
                'person_id' => 457,
                'character' => 'Farber',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            204 => 
            array (
                'cast_id' => 714,
                'movie_id' => 73,
                'person_id' => 97,
                'character' => 'Narrator',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            205 => 
            array (
                'cast_id' => 715,
                'movie_id' => 73,
                'person_id' => 458,
                'character' => 'Gen Ed Fenech',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            206 => 
            array (
                'cast_id' => 716,
                'movie_id' => 75,
                'person_id' => 97,
                'character' => 'Nick Fury',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            207 => 
            array (
                'cast_id' => 717,
                'movie_id' => 76,
                'person_id' => 459,
                'character' => 'Stan Lee',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            208 => 
            array (
                'cast_id' => 718,
                'movie_id' => 76,
                'person_id' => 460,
                'character' => 'Chess Roberts',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            209 => 
            array (
                'cast_id' => 719,
                'movie_id' => 75,
                'person_id' => 459,
                'character' => 'Stan Lee',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            210 => 
            array (
                'cast_id' => 720,
                'movie_id' => 77,
                'person_id' => 121,
                'character' => 'Tony Stark',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            211 => 
            array (
                'cast_id' => 721,
                'movie_id' => 77,
                'person_id' => 131,
                'character' => 'Pepper Potts',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            212 => 
            array (
                'cast_id' => 722,
                'movie_id' => 77,
                'person_id' => 446,
                'character' => 'Colonel James Rhodes',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            213 => 
            array (
                'cast_id' => 723,
                'movie_id' => 77,
                'person_id' => 445,
                'character' => 'Happy Hogan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            214 => 
            array (
                'cast_id' => 724,
                'movie_id' => 77,
                'person_id' => 404,
                'character' => 'Trevor Slattery',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            215 => 
            array (
                'cast_id' => 725,
                'movie_id' => 77,
                'person_id' => 132,
                'character' => 'Jarvis',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            216 => 
            array (
                'cast_id' => 726,
                'movie_id' => 77,
                'person_id' => 116,
                'character' => 'Harley Keener',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            217 => 
            array (
                'cast_id' => 727,
                'movie_id' => 77,
                'person_id' => 459,
                'character' => 'Pageant Judge',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            218 => 
            array (
                'cast_id' => 728,
                'movie_id' => 77,
                'person_id' => 123,
                'character' => 'Bruce Banner',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            219 => 
            array (
                'cast_id' => 729,
                'movie_id' => 77,
                'person_id' => 461,
                'character' => 'Aldrich Killian',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            220 => 
            array (
                'cast_id' => 730,
                'movie_id' => 77,
                'person_id' => 462,
                'character' => 'Maya Hansen',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            221 => 
            array (
                'cast_id' => 731,
                'movie_id' => 77,
                'person_id' => 463,
                'character' => 'President Ellis',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            222 => 
            array (
                'cast_id' => 732,
                'movie_id' => 77,
                'person_id' => 464,
                'character' => 'Vice President Rodriguez',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            223 => 
            array (
                'cast_id' => 733,
                'movie_id' => 78,
                'person_id' => 407,
                'character' => 'Mindy Macready  HitGirl',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            224 => 
            array (
                'cast_id' => 734,
                'movie_id' => 78,
                'person_id' => 226,
                'character' => 'Damon Macready  Big Daddy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            225 => 
            array (
                'cast_id' => 735,
                'movie_id' => 78,
                'person_id' => 255,
                'character' => 'Detective Gigante',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            226 => 
            array (
                'cast_id' => 736,
                'movie_id' => 78,
                'person_id' => 465,
                'character' => 'Dave Lizewski',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            227 => 
            array (
                'cast_id' => 737,
                'movie_id' => 78,
                'person_id' => 466,
                'character' => 'Chris D&#039;Amico',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            228 => 
            array (
                'cast_id' => 738,
                'movie_id' => 78,
                'person_id' => 467,
                'character' => 'Frank D&#039;Amico',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            229 => 
            array (
                'cast_id' => 739,
                'movie_id' => 78,
                'person_id' => 468,
                'character' => 'Cody',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            230 => 
            array (
                'cast_id' => 740,
                'movie_id' => 78,
                'person_id' => 469,
                'character' => 'Lobby Goon',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            231 => 
            array (
                'cast_id' => 741,
                'movie_id' => 78,
                'person_id' => 470,
                'character' => 'Mrs Lizewski',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            232 => 
            array (
                'cast_id' => 742,
                'movie_id' => 79,
                'person_id' => 218,
                'character' => 'Joe',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            233 => 
            array (
                'cast_id' => 743,
                'movie_id' => 79,
                'person_id' => 67,
                'character' => 'Old Joe',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            234 => 
            array (
                'cast_id' => 744,
                'movie_id' => 79,
                'person_id' => 471,
                'character' => 'Sara',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            235 => 
            array (
                'cast_id' => 745,
                'movie_id' => 79,
                'person_id' => 472,
                'character' => 'Seth',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            236 => 
            array (
                'cast_id' => 746,
                'movie_id' => 79,
                'person_id' => 473,
                'character' => 'Abe',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            237 => 
            array (
                'cast_id' => 747,
                'movie_id' => 80,
                'person_id' => 13,
                'character' => 'Sam',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            238 => 
            array (
                'cast_id' => 748,
                'movie_id' => 80,
                'person_id' => 28,
                'character' => 'Bilbo',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            239 => 
            array (
                'cast_id' => 749,
                'movie_id' => 80,
                'person_id' => 409,
                'character' => 'Saruman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            240 => 
            array (
                'cast_id' => 750,
                'movie_id' => 80,
                'person_id' => 267,
                'character' => 'Aragorn',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            241 => 
            array (
                'cast_id' => 751,
                'movie_id' => 80,
                'person_id' => 74,
                'character' => 'Elrond',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            242 => 
            array (
                'cast_id' => 752,
                'movie_id' => 80,
                'person_id' => 169,
                'character' => 'Frodo',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            243 => 
            array (
                'cast_id' => 753,
                'movie_id' => 80,
                'person_id' => 474,
                'character' => 'Boromir',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            244 => 
            array (
                'cast_id' => 754,
                'movie_id' => 80,
                'person_id' => 475,
                'character' => 'Galadriel',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            245 => 
            array (
                'cast_id' => 755,
                'movie_id' => 80,
                'person_id' => 476,
                'character' => 'Legolas',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            246 => 
            array (
                'cast_id' => 756,
                'movie_id' => 80,
                'person_id' => 477,
                'character' => 'Pippin',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            247 => 
            array (
                'cast_id' => 757,
                'movie_id' => 80,
                'person_id' => 478,
                'character' => 'Gollum',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            248 => 
            array (
                'cast_id' => 758,
                'movie_id' => 80,
                'person_id' => 479,
                'character' => 'Gandalf',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            249 => 
            array (
                'cast_id' => 759,
                'movie_id' => 80,
                'person_id' => 480,
                'character' => 'Merry',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            250 => 
            array (
                'cast_id' => 760,
                'movie_id' => 80,
                'person_id' => 481,
                'character' => 'Gimli',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            251 => 
            array (
                'cast_id' => 761,
                'movie_id' => 80,
                'person_id' => 482,
                'character' => 'Arwen',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            252 => 
            array (
                'cast_id' => 762,
                'movie_id' => 80,
                'person_id' => 483,
                'character' => 'Albert Dreary',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            253 => 
            array (
                'cast_id' => 763,
                'movie_id' => 81,
                'person_id' => 13,
                'character' => 'Sam',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            254 => 
            array (
                'cast_id' => 764,
                'movie_id' => 81,
                'person_id' => 475,
                'character' => 'Galadriel',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            255 => 
            array (
                'cast_id' => 765,
                'movie_id' => 81,
                'person_id' => 476,
                'character' => 'Legolas',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            256 => 
            array (
                'cast_id' => 766,
                'movie_id' => 81,
                'person_id' => 477,
                'character' => 'Pippin',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            257 => 
            array (
                'cast_id' => 767,
                'movie_id' => 81,
                'person_id' => 50,
                'character' => 'Wormtongue',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            258 => 
            array (
                'cast_id' => 768,
                'movie_id' => 81,
                'person_id' => 139,
                'character' => 'Theoden',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            259 => 
            array (
                'cast_id' => 769,
                'movie_id' => 81,
                'person_id' => 409,
                'character' => 'Saruman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            260 => 
            array (
                'cast_id' => 770,
                'movie_id' => 81,
                'person_id' => 479,
                'character' => 'Gandalf',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            261 => 
            array (
                'cast_id' => 771,
                'movie_id' => 81,
                'person_id' => 480,
                'character' => 'Merry',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            262 => 
            array (
                'cast_id' => 772,
                'movie_id' => 81,
                'person_id' => 267,
                'character' => 'Aragorn',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            263 => 
            array (
                'cast_id' => 773,
                'movie_id' => 81,
                'person_id' => 481,
                'character' => 'Gimli  Voice of Treebeard',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            264 => 
            array (
                'cast_id' => 774,
                'movie_id' => 81,
                'person_id' => 478,
                'character' => 'Gollum',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            265 => 
            array (
                'cast_id' => 775,
                'movie_id' => 81,
                'person_id' => 482,
                'character' => 'Arwen',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            266 => 
            array (
                'cast_id' => 776,
                'movie_id' => 81,
                'person_id' => 188,
                'character' => 'Eomer',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            267 => 
            array (
                'cast_id' => 777,
                'movie_id' => 81,
                'person_id' => 74,
                'character' => 'Elrond',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            268 => 
            array (
                'cast_id' => 778,
                'movie_id' => 81,
                'person_id' => 169,
                'character' => 'Frodo',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            269 => 
            array (
                'cast_id' => 779,
                'movie_id' => 81,
                'person_id' => 474,
                'character' => 'Boromir',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            270 => 
            array (
                'cast_id' => 780,
                'movie_id' => 81,
                'person_id' => 483,
                'character' => 'Spearthrowing Rohan Soldier',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            271 => 
            array (
                'cast_id' => 781,
                'movie_id' => 81,
                'person_id' => 484,
                'character' => 'Eowyn',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            272 => 
            array (
                'cast_id' => 782,
                'movie_id' => 81,
                'person_id' => 485,
                'character' => 'Faramir',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            273 => 
            array (
                'cast_id' => 783,
                'movie_id' => 82,
                'person_id' => 13,
                'character' => 'Sam',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            274 => 
            array (
                'cast_id' => 784,
                'movie_id' => 82,
                'person_id' => 474,
                'character' => 'Boromir',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            275 => 
            array (
                'cast_id' => 785,
                'movie_id' => 82,
                'person_id' => 475,
                'character' => 'Galadriel',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            276 => 
            array (
                'cast_id' => 786,
                'movie_id' => 82,
                'person_id' => 476,
                'character' => 'Legolas',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            277 => 
            array (
                'cast_id' => 787,
                'movie_id' => 82,
                'person_id' => 477,
                'character' => 'Pippin',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            278 => 
            array (
                'cast_id' => 788,
                'movie_id' => 82,
                'person_id' => 139,
                'character' => 'Theoden',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            279 => 
            array (
                'cast_id' => 789,
                'movie_id' => 82,
                'person_id' => 28,
                'character' => 'Bilbo',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            280 => 
            array (
                'cast_id' => 790,
                'movie_id' => 82,
                'person_id' => 479,
                'character' => 'Gandalf',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            281 => 
            array (
                'cast_id' => 791,
                'movie_id' => 82,
                'person_id' => 480,
                'character' => 'Merry',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            282 => 
            array (
                'cast_id' => 792,
                'movie_id' => 82,
                'person_id' => 267,
                'character' => 'Aragorn',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            283 => 
            array (
                'cast_id' => 793,
                'movie_id' => 82,
                'person_id' => 484,
                'character' => 'Eowyn',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            284 => 
            array (
                'cast_id' => 794,
                'movie_id' => 82,
                'person_id' => 481,
                'character' => 'Gimli',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            285 => 
            array (
                'cast_id' => 795,
                'movie_id' => 82,
                'person_id' => 478,
                'character' => 'Gollum  Smeagol',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            286 => 
            array (
                'cast_id' => 796,
                'movie_id' => 82,
                'person_id' => 482,
                'character' => 'Arwen',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            287 => 
            array (
                'cast_id' => 797,
                'movie_id' => 82,
                'person_id' => 188,
                'character' => 'Eomer',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            288 => 
            array (
                'cast_id' => 798,
                'movie_id' => 82,
                'person_id' => 74,
                'character' => 'Elrond',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            289 => 
            array (
                'cast_id' => 799,
                'movie_id' => 82,
                'person_id' => 485,
                'character' => 'Faramir',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            290 => 
            array (
                'cast_id' => 800,
                'movie_id' => 82,
                'person_id' => 169,
                'character' => 'Frodo',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            291 => 
            array (
                'cast_id' => 801,
                'movie_id' => 82,
                'person_id' => 50,
                'character' => 'Wormtongue',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            292 => 
            array (
                'cast_id' => 802,
                'movie_id' => 82,
                'person_id' => 409,
                'character' => 'Saruman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            293 => 
            array (
                'cast_id' => 803,
                'movie_id' => 82,
                'person_id' => 483,
                'character' => 'Corsair Bosun',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            294 => 
            array (
                'cast_id' => 804,
                'movie_id' => 83,
                'person_id' => 329,
                'character' => 'Lois Lane',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            295 => 
            array (
                'cast_id' => 805,
                'movie_id' => 83,
                'person_id' => 231,
                'character' => 'General Zod',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            296 => 
            array (
                'cast_id' => 806,
                'movie_id' => 83,
                'person_id' => 104,
                'character' => 'Dr Emil Hamilton',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            297 => 
            array (
                'cast_id' => 807,
                'movie_id' => 83,
                'person_id' => 71,
                'character' => 'Perry White',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            298 => 
            array (
                'cast_id' => 808,
                'movie_id' => 83,
                'person_id' => 278,
                'character' => 'Steve Lombard',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            299 => 
            array (
                'cast_id' => 809,
                'movie_id' => 83,
                'person_id' => 486,
                'character' => 'Clark Kent',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            300 => 
            array (
                'cast_id' => 810,
                'movie_id' => 83,
                'person_id' => 487,
                'character' => 'Martha Kent',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            301 => 
            array (
                'cast_id' => 811,
                'movie_id' => 83,
                'person_id' => 488,
                'character' => 'Jor-El',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            302 => 
            array (
                'cast_id' => 812,
                'movie_id' => 83,
                'person_id' => 489,
                'character' => 'Colonel Nathan Hardy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            303 => 
            array (
                'cast_id' => 813,
                'movie_id' => 83,
                'person_id' => 490,
                'character' => 'Jonathan Kent',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            304 => 
            array (
                'cast_id' => 814,
                'movie_id' => 84,
                'person_id' => 426,
                'character' => 'Jay',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            305 => 
            array (
                'cast_id' => 815,
                'movie_id' => 84,
                'person_id' => 370,
                'character' => 'Alien Son',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            306 => 
            array (
                'cast_id' => 818,
                'movie_id' => 84,
                'person_id' => 491,
                'character' => 'Kay',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            307 => 
            array (
                'cast_id' => 819,
                'movie_id' => 84,
                'person_id' => 492,
                'character' => 'Laurel Weaver',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            308 => 
            array (
                'cast_id' => 820,
                'movie_id' => 84,
                'person_id' => 88,
                'character' => 'Alien on TV Monitor',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            309 => 
            array (
                'cast_id' => 821,
                'movie_id' => 84,
                'person_id' => 105,
                'character' => 'Alien on TV Monitor',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            310 => 
            array (
                'cast_id' => 822,
                'movie_id' => 84,
                'person_id' => 115,
                'character' => 'Edgar',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            311 => 
            array (
                'cast_id' => 823,
                'movie_id' => 84,
                'person_id' => 493,
                'character' => 'Zed',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            312 => 
            array (
                'cast_id' => 824,
                'movie_id' => 84,
                'person_id' => 494,
                'character' => 'Jeebs',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            313 => 
            array (
                'cast_id' => 825,
                'movie_id' => 84,
                'person_id' => 495,
                'character' => 'Beatrice',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            314 => 
            array (
                'cast_id' => 826,
                'movie_id' => 84,
                'person_id' => 496,
                'character' => 'Morgue Attendant',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            315 => 
            array (
                'cast_id' => 827,
                'movie_id' => 85,
                'person_id' => 491,
                'character' => 'Kay',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            316 => 
            array (
                'cast_id' => 828,
                'movie_id' => 85,
                'person_id' => 426,
                'character' => 'Jay',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            317 => 
            array (
                'cast_id' => 829,
                'movie_id' => 85,
                'person_id' => 493,
                'character' => 'Zed',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            318 => 
            array (
                'cast_id' => 830,
                'movie_id' => 85,
                'person_id' => 494,
                'character' => 'Jack Jeebs',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            319 => 
            array (
                'cast_id' => 831,
                'movie_id' => 85,
                'person_id' => 347,
                'character' => 'Agent Tee',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            320 => 
            array (
                'cast_id' => 832,
                'movie_id' => 85,
                'person_id' => 496,
                'character' => 'Newton',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            321 => 
            array (
                'cast_id' => 833,
                'movie_id' => 85,
                'person_id' => 497,
                'character' => 'Serleena',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            322 => 
            array (
                'cast_id' => 834,
                'movie_id' => 85,
                'person_id' => 498,
                'character' => 'Scrad  Charlie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            323 => 
            array (
                'cast_id' => 835,
                'movie_id' => 85,
                'person_id' => 499,
                'character' => 'Laura Vasquez',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            324 => 
            array (
                'cast_id' => 836,
                'movie_id' => 86,
                'person_id' => 426,
                'character' => 'Agent J',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            325 => 
            array (
                'cast_id' => 837,
                'movie_id' => 86,
                'person_id' => 491,
                'character' => 'Agent K',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            326 => 
            array (
                'cast_id' => 838,
                'movie_id' => 86,
                'person_id' => 453,
                'character' => 'Agent O',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            327 => 
            array (
                'cast_id' => 839,
                'movie_id' => 86,
                'person_id' => 65,
                'character' => 'Alien on TV Monitors',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            328 => 
            array (
                'cast_id' => 840,
                'movie_id' => 86,
                'person_id' => 282,
                'character' => 'Party Guest',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            329 => 
            array (
                'cast_id' => 841,
                'movie_id' => 86,
                'person_id' => 494,
                'character' => '1969 Newsstand Vendor',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            330 => 
            array (
                'cast_id' => 842,
                'movie_id' => 86,
                'person_id' => 493,
                'character' => 'LargeHeaded Alien at Funeral',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            331 => 
            array (
                'cast_id' => 843,
                'movie_id' => 86,
                'person_id' => 500,
                'character' => 'Young Agent K',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            332 => 
            array (
                'cast_id' => 844,
                'movie_id' => 86,
                'person_id' => 501,
                'character' => 'Boris The Animal',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            333 => 
            array (
                'cast_id' => 845,
                'movie_id' => 86,
                'person_id' => 502,
                'character' => 'Griffin',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            334 => 
            array (
                'cast_id' => 846,
                'movie_id' => 86,
                'person_id' => 503,
                'character' => 'Young Agent O',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            335 => 
            array (
                'cast_id' => 847,
                'movie_id' => 86,
                'person_id' => 504,
                'character' => 'Andy Warhol',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            336 => 
            array (
                'cast_id' => 848,
                'movie_id' => 87,
                'person_id' => 223,
                'character' => 'Jacques Mesrine',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            337 => 
            array (
                'cast_id' => 849,
                'movie_id' => 87,
                'person_id' => 505,
                'character' => 'Jeanne Schneider',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            338 => 
            array (
                'cast_id' => 850,
                'movie_id' => 87,
                'person_id' => 506,
                'character' => 'Guido',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            339 => 
            array (
                'cast_id' => 851,
                'movie_id' => 88,
                'person_id' => 418,
                'character' => 'Herself',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            340 => 
            array (
                'cast_id' => 852,
                'movie_id' => 88,
                'person_id' => 218,
                'character' => 'Himself',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            341 => 
            array (
                'cast_id' => 853,
                'movie_id' => 88,
                'person_id' => 412,
                'character' => 'Himself',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            342 => 
            array (
                'cast_id' => 854,
                'movie_id' => 88,
                'person_id' => 71,
                'character' => 'Himself',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            343 => 
            array (
                'cast_id' => 855,
                'movie_id' => 88,
                'person_id' => 160,
                'character' => 'Herself',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            344 => 
            array (
                'cast_id' => 856,
                'movie_id' => 88,
                'person_id' => 507,
                'character' => 'Floyd Pepper',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            345 => 
            array (
                'cast_id' => 857,
                'movie_id' => 88,
                'person_id' => 508,
                'character' => 'Fred',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            346 => 
            array (
                'cast_id' => 858,
                'movie_id' => 89,
                'person_id' => 509,
                'character' => 'Ofelia',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            347 => 
            array (
                'cast_id' => 859,
                'movie_id' => 89,
                'person_id' => 510,
                'character' => 'Vidal',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            348 => 
            array (
                'cast_id' => 860,
                'movie_id' => 89,
                'person_id' => 510,
                'character' => 'Vidal',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            349 => 
            array (
                'cast_id' => 861,
                'movie_id' => 89,
                'person_id' => 511,
                'character' => 'Fauno  Pale Man',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            350 => 
            array (
                'cast_id' => 862,
                'movie_id' => 90,
                'person_id' => 504,
                'character' => 'Haggard',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            351 => 
            array (
                'cast_id' => 864,
                'movie_id' => 90,
                'person_id' => 512,
                'character' => 'Graeme Willy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            352 => 
            array (
                'cast_id' => 865,
                'movie_id' => 90,
                'person_id' => 513,
                'character' => 'Clive Gollings',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            353 => 
            array (
                'cast_id' => 866,
                'movie_id' => 90,
                'person_id' => 514,
                'character' => 'Adam Shadowchild',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            354 => 
            array (
                'cast_id' => 867,
                'movie_id' => 90,
                'person_id' => 515,
                'character' => 'Pat Stevens',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            355 => 
            array (
                'cast_id' => 868,
                'movie_id' => 90,
                'person_id' => 516,
                'character' => 'Paul',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            356 => 
            array (
                'cast_id' => 869,
                'movie_id' => 90,
                'person_id' => 517,
                'character' => 'Agent Zoil',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            357 => 
            array (
                'cast_id' => 870,
                'movie_id' => 90,
                'person_id' => 518,
                'character' => 'Ruth Buggs',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            358 => 
            array (
                'cast_id' => 871,
                'movie_id' => 90,
                'person_id' => 519,
                'character' => 'Moses Buggs',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            359 => 
            array (
                'cast_id' => 872,
                'movie_id' => 92,
                'person_id' => 478,
                'character' => 'Caesar',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            360 => 
            array (
                'cast_id' => 873,
                'movie_id' => 92,
                'person_id' => 181,
                'character' => 'John Landon',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            361 => 
            array (
                'cast_id' => 874,
                'movie_id' => 92,
                'person_id' => 387,
                'character' => 'Dodge Landon',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            362 => 
            array (
                'cast_id' => 875,
                'movie_id' => 92,
                'person_id' => 520,
                'character' => 'Caroline Aranha',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            363 => 
            array (
                'cast_id' => 876,
                'movie_id' => 92,
                'person_id' => 521,
                'character' => 'Charles Rodman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            364 => 
            array (
                'cast_id' => 877,
                'movie_id' => 92,
                'person_id' => 522,
                'character' => 'Steven Jacobs',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            365 => 
            array (
                'cast_id' => 878,
                'movie_id' => 92,
                'person_id' => 523,
                'character' => 'Robert Franklin',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            366 => 
            array (
                'cast_id' => 879,
                'movie_id' => 92,
                'person_id' => 524,
                'character' => 'Will Rodman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            367 => 
            array (
                'cast_id' => 880,
                'movie_id' => 93,
                'person_id' => 478,
                'character' => 'Caesar',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            368 => 
            array (
                'cast_id' => 881,
                'movie_id' => 93,
                'person_id' => 200,
                'character' => 'Dreyfus',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            369 => 
            array (
                'cast_id' => 882,
                'movie_id' => 93,
                'person_id' => 119,
                'character' => 'Cornelia',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            370 => 
            array (
                'cast_id' => 883,
                'movie_id' => 93,
                'person_id' => 525,
                'character' => 'Malcolm',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            371 => 
            array (
                'cast_id' => 884,
                'movie_id' => 93,
                'person_id' => 526,
                'character' => 'Ellie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            372 => 
            array (
                'cast_id' => 885,
                'movie_id' => 93,
                'person_id' => 527,
                'character' => 'Koba',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            373 => 
            array (
                'cast_id' => 886,
                'movie_id' => 94,
                'person_id' => 528,
                'character' => 'Rocky Balboa',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            374 => 
            array (
                'cast_id' => 887,
                'movie_id' => 94,
                'person_id' => 529,
                'character' => 'Paulie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            375 => 
            array (
                'cast_id' => 888,
                'movie_id' => 94,
                'person_id' => 530,
                'character' => 'Mason The Line Dixon',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            376 => 
            array (
                'cast_id' => 889,
                'movie_id' => 94,
                'person_id' => 531,
                'character' => 'Marie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            377 => 
            array (
                'cast_id' => 890,
                'movie_id' => 94,
                'person_id' => 532,
                'character' => 'Robert Balboa Jr',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            378 => 
            array (
                'cast_id' => 891,
                'movie_id' => 95,
                'person_id' => 355,
                'character' => 'Private Caparzo',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            379 => 
            array (
                'cast_id' => 892,
                'movie_id' => 95,
                'person_id' => 155,
                'character' => 'T4 Medic Wade',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            380 => 
            array (
                'cast_id' => 893,
                'movie_id' => 95,
                'person_id' => 177,
                'character' => 'Private Ryan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            381 => 
            array (
                'cast_id' => 894,
                'movie_id' => 95,
                'person_id' => 146,
                'character' => 'War Department Colonel',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            382 => 
            array (
                'cast_id' => 895,
                'movie_id' => 95,
                'person_id' => 533,
                'character' => 'Captain Miller',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            383 => 
            array (
                'cast_id' => 896,
                'movie_id' => 95,
                'person_id' => 534,
                'character' => 'Sergeant Horvath',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            384 => 
            array (
                'cast_id' => 897,
                'movie_id' => 95,
                'person_id' => 535,
                'character' => 'Private Reiben',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            385 => 
            array (
                'cast_id' => 898,
                'movie_id' => 95,
                'person_id' => 536,
                'character' => 'Corporal Upham',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            386 => 
            array (
                'cast_id' => 899,
                'movie_id' => 95,
                'person_id' => 537,
                'character' => 'Private Jackson',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            387 => 
            array (
                'cast_id' => 900,
                'movie_id' => 95,
                'person_id' => 538,
                'character' => 'Private Mellish',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            388 => 
            array (
                'cast_id' => 901,
                'movie_id' => 95,
                'person_id' => 539,
                'character' => 'Captain Hamill',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            389 => 
            array (
                'cast_id' => 902,
                'movie_id' => 95,
                'person_id' => 540,
                'character' => 'Sergeant Hill',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            390 => 
            array (
                'cast_id' => 903,
                'movie_id' => 95,
                'person_id' => 541,
                'character' => 'Lieutenant Colonel Anderson',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            391 => 
            array (
                'cast_id' => 904,
                'movie_id' => 95,
                'person_id' => 542,
                'character' => 'Minnesota Ryan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            392 => 
            array (
                'cast_id' => 905,
                'movie_id' => 96,
                'person_id' => 542,
                'character' => 'Mal',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            393 => 
            array (
                'cast_id' => 906,
                'movie_id' => 96,
                'person_id' => 428,
                'character' => 'Wash',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            394 => 
            array (
                'cast_id' => 907,
                'movie_id' => 96,
                'person_id' => 53,
                'character' => 'Trade Agent',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            395 => 
            array (
                'cast_id' => 908,
                'movie_id' => 96,
                'person_id' => 543,
                'character' => 'Zo',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            396 => 
            array (
                'cast_id' => 909,
                'movie_id' => 96,
                'person_id' => 544,
                'character' => 'Inara',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            397 => 
            array (
                'cast_id' => 910,
                'movie_id' => 96,
                'person_id' => 545,
                'character' => 'Jayne',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            398 => 
            array (
                'cast_id' => 911,
                'movie_id' => 96,
                'person_id' => 546,
                'character' => 'Kaylee',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            399 => 
            array (
                'cast_id' => 912,
                'movie_id' => 96,
                'person_id' => 547,
                'character' => 'Simon',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            400 => 
            array (
                'cast_id' => 913,
                'movie_id' => 96,
                'person_id' => 548,
                'character' => 'River',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            401 => 
            array (
                'cast_id' => 914,
                'movie_id' => 96,
                'person_id' => 549,
                'character' => 'Shepherd Derrial Book',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            402 => 
            array (
                'cast_id' => 915,
                'movie_id' => 96,
                'person_id' => 550,
                'character' => 'The Operative',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            403 => 
            array (
                'cast_id' => 916,
                'movie_id' => 97,
                'person_id' => 424,
                'character' => 'Dr Rutledge',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            404 => 
            array (
                'cast_id' => 917,
                'movie_id' => 97,
                'person_id' => 551,
                'character' => 'Colter Stevens',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            405 => 
            array (
                'cast_id' => 918,
                'movie_id' => 97,
                'person_id' => 552,
                'character' => 'Christina Warren',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            406 => 
            array (
                'cast_id' => 919,
                'movie_id' => 97,
                'person_id' => 553,
                'character' => 'Colleen Goodwin',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            407 => 
            array (
                'cast_id' => 920,
                'movie_id' => 97,
                'person_id' => 554,
                'character' => 'Derek Frost',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            408 => 
            array (
                'cast_id' => 921,
                'movie_id' => 97,
                'person_id' => 555,
                'character' => 'Colters Father',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            409 => 
            array (
                'cast_id' => 922,
                'movie_id' => 98,
                'person_id' => 520,
                'character' => 'Older Latika',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            410 => 
            array (
                'cast_id' => 923,
                'movie_id' => 98,
                'person_id' => 271,
                'character' => 'Police Inspector',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            411 => 
            array (
                'cast_id' => 924,
                'movie_id' => 98,
                'person_id' => 556,
                'character' => 'Older Jamal',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            412 => 
            array (
                'cast_id' => 925,
                'movie_id' => 98,
                'person_id' => 557,
                'character' => 'Prem',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            413 => 
            array (
                'cast_id' => 926,
                'movie_id' => 99,
                'person_id' => 558,
                'character' => 'Gargamel',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            414 => 
            array (
                'cast_id' => 927,
                'movie_id' => 99,
                'person_id' => 559,
                'character' => 'Patrick Winslow',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            415 => 
            array (
                'cast_id' => 928,
                'movie_id' => 99,
                'person_id' => 560,
                'character' => 'Odile',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            416 => 
            array (
                'cast_id' => 929,
                'movie_id' => 99,
                'person_id' => 561,
                'character' => 'Papa',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            417 => 
            array (
                'cast_id' => 930,
                'movie_id' => 99,
                'person_id' => 562,
                'character' => 'Gutsy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            418 => 
            array (
                'cast_id' => 931,
                'movie_id' => 99,
                'person_id' => 563,
                'character' => 'Smurfette',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            419 => 
            array (
                'cast_id' => 932,
                'movie_id' => 99,
                'person_id' => 564,
                'character' => 'Clumsy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            420 => 
            array (
                'cast_id' => 933,
                'movie_id' => 99,
                'person_id' => 565,
                'character' => 'Vanity',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            421 => 
            array (
                'cast_id' => 934,
                'movie_id' => 99,
                'person_id' => 566,
                'character' => 'Jokey',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            422 => 
            array (
                'cast_id' => 935,
                'movie_id' => 99,
                'person_id' => 567,
                'character' => 'Azrael',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            423 => 
            array (
                'cast_id' => 936,
                'movie_id' => 100,
                'person_id' => 430,
                'character' => 'Pike',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            424 => 
            array (
                'cast_id' => 937,
                'movie_id' => 100,
                'person_id' => 188,
                'character' => 'Bones',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            425 => 
            array (
                'cast_id' => 938,
                'movie_id' => 100,
                'person_id' => 152,
                'character' => 'Uhura',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            426 => 
            array (
                'cast_id' => 939,
                'movie_id' => 100,
                'person_id' => 512,
                'character' => 'Scotty',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            427 => 
            array (
                'cast_id' => 940,
                'movie_id' => 100,
                'person_id' => 564,
                'character' => 'Chekov',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            428 => 
            array (
                'cast_id' => 941,
                'movie_id' => 100,
                'person_id' => 45,
                'character' => 'Amanda Grayson',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            429 => 
            array (
                'cast_id' => 942,
                'movie_id' => 100,
                'person_id' => 124,
                'character' => 'George Kirk',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            430 => 
            array (
                'cast_id' => 943,
                'movie_id' => 100,
                'person_id' => 568,
                'character' => 'Kirk',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            431 => 
            array (
                'cast_id' => 944,
                'movie_id' => 100,
                'person_id' => 569,
                'character' => 'Spock',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            432 => 
            array (
                'cast_id' => 945,
                'movie_id' => 100,
                'person_id' => 570,
                'character' => 'Spock',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            433 => 
            array (
                'cast_id' => 946,
                'movie_id' => 100,
                'person_id' => 571,
                'character' => 'Nero',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            434 => 
            array (
                'cast_id' => 947,
                'movie_id' => 100,
                'person_id' => 572,
                'character' => 'Sulu',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            435 => 
            array (
                'cast_id' => 948,
                'movie_id' => 100,
                'person_id' => 573,
                'character' => 'Sarek',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            436 => 
            array (
                'cast_id' => 949,
                'movie_id' => 100,
                'person_id' => 574,
                'character' => 'Stepdad',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            437 => 
            array (
                'cast_id' => 950,
                'movie_id' => 101,
                'person_id' => 568,
                'character' => 'Kirk',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            438 => 
            array (
                'cast_id' => 951,
                'movie_id' => 101,
                'person_id' => 569,
                'character' => 'Spock',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            439 => 
            array (
                'cast_id' => 952,
                'movie_id' => 101,
                'person_id' => 152,
                'character' => 'Uhura',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            440 => 
            array (
                'cast_id' => 953,
                'movie_id' => 101,
                'person_id' => 188,
                'character' => 'Bones',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            441 => 
            array (
                'cast_id' => 954,
                'movie_id' => 101,
                'person_id' => 512,
                'character' => 'Scotty',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            442 => 
            array (
                'cast_id' => 955,
                'movie_id' => 101,
                'person_id' => 572,
                'character' => 'Sulu',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            443 => 
            array (
                'cast_id' => 956,
                'movie_id' => 101,
                'person_id' => 564,
                'character' => 'Chekov',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            444 => 
            array (
                'cast_id' => 957,
                'movie_id' => 101,
                'person_id' => 430,
                'character' => 'Pike',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            445 => 
            array (
                'cast_id' => 958,
                'movie_id' => 101,
                'person_id' => 503,
                'character' => 'Carol',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            446 => 
            array (
                'cast_id' => 959,
                'movie_id' => 101,
                'person_id' => 124,
                'character' => 'George Kirk',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            447 => 
            array (
                'cast_id' => 961,
                'movie_id' => 101,
                'person_id' => 570,
                'character' => 'Spock',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            448 => 
            array (
                'cast_id' => 962,
                'movie_id' => 101,
                'person_id' => 575,
                'character' => 'Khan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            449 => 
            array (
                'cast_id' => 963,
                'movie_id' => 101,
                'person_id' => 576,
                'character' => 'Admiral Marcus',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            450 => 
            array (
                'cast_id' => 964,
                'movie_id' => 101,
                'person_id' => 577,
                'character' => 'Rima Harewood',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            451 => 
            array (
                'cast_id' => 965,
                'movie_id' => 102,
                'person_id' => 86,
                'character' => 'Darth Vader',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            452 => 
            array (
                'cast_id' => 966,
                'movie_id' => 103,
                'person_id' => 369,
                'character' => 'Wicket',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            453 => 
            array (
                'cast_id' => 967,
                'movie_id' => 103,
                'person_id' => 306,
                'character' => 'Boba Fett',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            454 => 
            array (
                'cast_id' => 968,
                'movie_id' => 103,
                'person_id' => 578,
                'character' => 'The Emperor',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            455 => 
            array (
                'cast_id' => 969,
                'movie_id' => 104,
                'person_id' => 198,
                'character' => 'QuiGon Jinn',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            456 => 
            array (
                'cast_id' => 970,
                'movie_id' => 104,
                'person_id' => 432,
                'character' => 'ObiWan Kenobi',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            457 => 
            array (
                'cast_id' => 971,
                'movie_id' => 104,
                'person_id' => 221,
                'character' => 'Queen Amidala  Padm',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            458 => 
            array (
                'cast_id' => 972,
                'movie_id' => 104,
                'person_id' => 578,
                'character' => 'Senator Palpatine',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            459 => 
            array (
                'cast_id' => 973,
                'movie_id' => 104,
                'person_id' => 83,
                'character' => 'C3PO',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            460 => 
            array (
                'cast_id' => 974,
                'movie_id' => 104,
                'person_id' => 84,
                'character' => 'R2D2',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            461 => 
            array (
                'cast_id' => 975,
                'movie_id' => 104,
                'person_id' => 305,
                'character' => 'Yoda',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            462 => 
            array (
                'cast_id' => 976,
                'movie_id' => 104,
                'person_id' => 345,
                'character' => 'Chancellor Valorum',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            463 => 
            array (
                'cast_id' => 977,
                'movie_id' => 104,
                'person_id' => 369,
                'character' => 'Pod Race Spectator',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            464 => 
            array (
                'cast_id' => 978,
                'movie_id' => 104,
                'person_id' => 97,
                'character' => 'Mace Windu',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            465 => 
            array (
                'cast_id' => 979,
                'movie_id' => 104,
                'person_id' => 363,
            'character' => 'Darth Maul (voive)',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            466 => 
            array (
                'cast_id' => 980,
                'movie_id' => 104,
                'person_id' => 579,
                'character' => 'Anakin Skywalker',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            467 => 
            array (
                'cast_id' => 981,
                'movie_id' => 104,
                'person_id' => 580,
                'character' => 'Shmi Skywalker',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            468 => 
            array (
                'cast_id' => 982,
                'movie_id' => 104,
                'person_id' => 581,
                'character' => 'Captain Panaka',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            469 => 
            array (
                'cast_id' => 983,
                'movie_id' => 104,
                'person_id' => 582,
                'character' => 'Jar Jar Binks',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            470 => 
            array (
                'cast_id' => 984,
                'movie_id' => 104,
                'person_id' => 583,
                'character' => 'Boss Nass',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            471 => 
            array (
                'cast_id' => 985,
                'movie_id' => 104,
                'person_id' => 584,
                'character' => 'Darth Maul',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            472 => 
            array (
                'cast_id' => 986,
                'movie_id' => 104,
                'person_id' => 585,
                'character' => 'Sab',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            473 => 
            array (
                'cast_id' => 987,
                'movie_id' => 105,
                'person_id' => 432,
                'character' => 'Obi-Wan Kenobi',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            474 => 
            array (
                'cast_id' => 988,
                'movie_id' => 105,
                'person_id' => 221,
                'character' => 'Padme',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            475 => 
            array (
                'cast_id' => 989,
                'movie_id' => 105,
                'person_id' => 409,
                'character' => 'Count Dooku',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            476 => 
            array (
                'cast_id' => 990,
                'movie_id' => 105,
                'person_id' => 97,
                'character' => 'Mace Windu',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            477 => 
            array (
                'cast_id' => 991,
                'movie_id' => 105,
                'person_id' => 305,
                'character' => 'Yoda',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            478 => 
            array (
                'cast_id' => 992,
                'movie_id' => 105,
                'person_id' => 578,
                'character' => 'Supreme Chancellor Palpatine',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            479 => 
            array (
                'cast_id' => 993,
                'movie_id' => 105,
                'person_id' => 580,
                'character' => 'Shmi Skywalker',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            480 => 
            array (
                'cast_id' => 994,
                'movie_id' => 105,
                'person_id' => 582,
                'character' => 'Jar Jar Binks',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            481 => 
            array (
                'cast_id' => 995,
                'movie_id' => 105,
                'person_id' => 83,
                'character' => 'C3po',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            482 => 
            array (
                'cast_id' => 996,
                'movie_id' => 105,
                'person_id' => 84,
                'character' => 'R2D2',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            483 => 
            array (
                'cast_id' => 997,
                'movie_id' => 105,
                'person_id' => 198,
                'character' => 'QuiGon Jinn',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            484 => 
            array (
                'cast_id' => 998,
                'movie_id' => 105,
                'person_id' => 586,
                'character' => 'Anakin Skywalker',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            485 => 
            array (
                'cast_id' => 999,
                'movie_id' => 105,
                'person_id' => 587,
                'character' => 'Jango Fett',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            486 => 
            array (
                'cast_id' => 1000,
                'movie_id' => 105,
                'person_id' => 588,
                'character' => 'Senator Bail Organa',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            487 => 
            array (
                'cast_id' => 1001,
                'movie_id' => 106,
                'person_id' => 432,
                'character' => 'Obi-Wan Kenobi',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            488 => 
            array (
                'cast_id' => 1002,
                'movie_id' => 106,
                'person_id' => 221,
                'character' => 'Padme',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            489 => 
            array (
                'cast_id' => 1003,
                'movie_id' => 106,
                'person_id' => 586,
                'character' => 'Anakin Skywalker',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            490 => 
            array (
                'cast_id' => 1004,
                'movie_id' => 106,
                'person_id' => 578,
                'character' => 'Supreme Chancellor Palpatine',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            491 => 
            array (
                'cast_id' => 1005,
                'movie_id' => 106,
                'person_id' => 97,
                'character' => 'Mace Windu',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            492 => 
            array (
                'cast_id' => 1006,
                'movie_id' => 106,
                'person_id' => 588,
                'character' => 'Senator Bail Organa',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            493 => 
            array (
                'cast_id' => 1007,
                'movie_id' => 106,
                'person_id' => 305,
                'character' => 'Yoda',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            494 => 
            array (
                'cast_id' => 1008,
                'movie_id' => 106,
                'person_id' => 83,
                'character' => 'C3PO',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            495 => 
            array (
                'cast_id' => 1009,
                'movie_id' => 106,
                'person_id' => 409,
                'character' => 'Count Dooku',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            496 => 
            array (
                'cast_id' => 1010,
                'movie_id' => 106,
                'person_id' => 587,
                'character' => 'Commander Cody',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            497 => 
            array (
                'cast_id' => 1011,
                'movie_id' => 106,
                'person_id' => 582,
                'character' => 'Jar Jar Binks',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            498 => 
            array (
                'cast_id' => 1012,
                'movie_id' => 106,
                'person_id' => 306,
                'character' => 'Captain Colton',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            499 => 
            array (
                'cast_id' => 1013,
                'movie_id' => 106,
                'person_id' => 84,
                'character' => 'R2D2',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
        ));
        \DB::table('cast')->insert(array (
            0 => 
            array (
                'cast_id' => 1014,
                'movie_id' => 106,
                'person_id' => 87,
                'character' => 'Chewbacca',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            1 => 
            array (
                'cast_id' => 1015,
                'movie_id' => 106,
                'person_id' => 86,
                'character' => 'Darth Vader',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            2 => 
            array (
                'cast_id' => 1016,
                'movie_id' => 106,
                'person_id' => 312,
                'character' => 'Senator Bana Breemu',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            3 => 
            array (
                'cast_id' => 1017,
                'movie_id' => 106,
                'person_id' => 88,
                'character' => 'Baron Papanoida',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            4 => 
            array (
                'cast_id' => 1018,
                'movie_id' => 107,
                'person_id' => 478,
                'character' => 'Captain Haddock',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            5 => 
            array (
                'cast_id' => 1019,
                'movie_id' => 107,
                'person_id' => 513,
                'character' => 'Thomson',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            6 => 
            array (
                'cast_id' => 1020,
                'movie_id' => 107,
                'person_id' => 512,
                'character' => 'Thompson',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            7 => 
            array (
                'cast_id' => 1021,
                'movie_id' => 107,
                'person_id' => 375,
                'character' => 'Silk',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            8 => 
            array (
                'cast_id' => 1022,
                'movie_id' => 107,
                'person_id' => 589,
                'character' => 'Tintin',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            9 => 
            array (
                'cast_id' => 1023,
                'movie_id' => 107,
                'person_id' => 590,
                'character' => 'Sakharine  Red Rackham',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            10 => 
            array (
                'cast_id' => 1024,
                'movie_id' => 107,
                'person_id' => 591,
                'character' => 'Tom Pirate Flunky',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            11 => 
            array (
                'cast_id' => 1025,
                'movie_id' => 107,
                'person_id' => 592,
                'character' => 'Pilot',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            12 => 
            array (
                'cast_id' => 1026,
                'movie_id' => 108,
                'person_id' => 32,
                'character' => 'Kyle Reese',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            13 => 
            array (
                'cast_id' => 1027,
                'movie_id' => 108,
                'person_id' => 34,
                'character' => 'Detective Hal Vukovich',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            14 => 
            array (
                'cast_id' => 1028,
                'movie_id' => 108,
                'person_id' => 35,
                'character' => 'Punk Leader',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            15 => 
            array (
                'cast_id' => 1029,
                'movie_id' => 108,
                'person_id' => 593,
                'character' => 'Terminator',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            16 => 
            array (
                'cast_id' => 1030,
                'movie_id' => 108,
                'person_id' => 594,
                'character' => 'Sarah Connor',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            17 => 
            array (
                'cast_id' => 1031,
                'movie_id' => 109,
                'person_id' => 593,
                'character' => 'The Terminator',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            18 => 
            array (
                'cast_id' => 1032,
                'movie_id' => 109,
                'person_id' => 594,
                'character' => 'Sarah Connor',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            19 => 
            array (
                'cast_id' => 1033,
                'movie_id' => 109,
                'person_id' => 37,
                'character' => 'Janelle Voight',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            20 => 
            array (
                'cast_id' => 1034,
                'movie_id' => 109,
                'person_id' => 255,
                'character' => 'Todd Voight',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            21 => 
            array (
                'cast_id' => 1035,
                'movie_id' => 109,
                'person_id' => 595,
                'character' => 'John Connor',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            22 => 
            array (
                'cast_id' => 1036,
                'movie_id' => 109,
                'person_id' => 596,
                'character' => 'T1000',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            23 => 
            array (
                'cast_id' => 1037,
                'movie_id' => 109,
                'person_id' => 597,
                'character' => 'Dr Silberman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            24 => 
            array (
                'cast_id' => 1038,
                'movie_id' => 109,
                'person_id' => 598,
                'character' => 'Miles Dyson',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            25 => 
            array (
                'cast_id' => 1039,
                'movie_id' => 109,
                'person_id' => 599,
                'character' => 'Swat Team Leader',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            26 => 
            array (
                'cast_id' => 1040,
                'movie_id' => 110,
                'person_id' => 593,
                'character' => 'Terminator',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            27 => 
            array (
                'cast_id' => 1041,
                'movie_id' => 110,
                'person_id' => 597,
                'character' => 'Dr Peter Silberman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            28 => 
            array (
                'cast_id' => 1042,
                'movie_id' => 110,
                'person_id' => 600,
                'character' => 'John Connor',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            29 => 
            array (
                'cast_id' => 1043,
                'movie_id' => 110,
                'person_id' => 601,
                'character' => 'Kate Brewster',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            30 => 
            array (
                'cast_id' => 1044,
                'movie_id' => 110,
                'person_id' => 602,
                'character' => 'Tx',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            31 => 
            array (
                'cast_id' => 1045,
                'movie_id' => 111,
                'person_id' => 196,
                'character' => 'John Connor',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            32 => 
            array (
                'cast_id' => 1046,
                'movie_id' => 111,
                'person_id' => 151,
                'character' => 'Marcus Wright',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            33 => 
            array (
                'cast_id' => 1047,
                'movie_id' => 111,
                'person_id' => 17,
                'character' => 'Dr Serena Kogan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            34 => 
            array (
                'cast_id' => 1048,
                'movie_id' => 111,
                'person_id' => 564,
                'character' => 'Kyle Reese',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            35 => 
            array (
                'cast_id' => 1049,
                'movie_id' => 111,
                'person_id' => 350,
                'character' => 'Captain Jericho',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            36 => 
            array (
                'cast_id' => 1050,
                'movie_id' => 111,
                'person_id' => 594,
                'character' => 'Sarah Connor',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            37 => 
            array (
                'cast_id' => 1051,
                'movie_id' => 111,
                'person_id' => 603,
                'character' => 'Blair Williams',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            38 => 
            array (
                'cast_id' => 1052,
                'movie_id' => 111,
                'person_id' => 604,
                'character' => 'Kate Connor',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            39 => 
            array (
                'cast_id' => 1053,
                'movie_id' => 111,
                'person_id' => 605,
                'character' => 'General Ashdown',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            40 => 
            array (
                'cast_id' => 1054,
                'movie_id' => 112,
                'person_id' => 145,
                'character' => 'Doug MacRay',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            41 => 
            array (
                'cast_id' => 1055,
                'movie_id' => 112,
                'person_id' => 462,
                'character' => 'Claire Keesey',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            42 => 
            array (
                'cast_id' => 1056,
                'movie_id' => 112,
                'person_id' => 126,
                'character' => 'James Coughlin',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            43 => 
            array (
                'cast_id' => 1057,
                'movie_id' => 112,
                'person_id' => 43,
                'character' => 'Fergus Fergie Colm',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            44 => 
            array (
                'cast_id' => 1058,
                'movie_id' => 112,
                'person_id' => 179,
                'character' => 'Stephen MacRay',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            45 => 
            array (
                'cast_id' => 1059,
                'movie_id' => 112,
                'person_id' => 141,
                'character' => 'Assistant Bank Manager',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            46 => 
            array (
                'cast_id' => 1060,
                'movie_id' => 112,
                'person_id' => 606,
                'character' => 'Fbi Sa Adam Frawley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            47 => 
            array (
                'cast_id' => 1061,
                'movie_id' => 112,
                'person_id' => 607,
                'character' => 'Krista Coughlin',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            48 => 
            array (
                'cast_id' => 1062,
                'movie_id' => 113,
                'person_id' => 443,
                'character' => 'Rooster Cogburn',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            49 => 
            array (
                'cast_id' => 1063,
                'movie_id' => 113,
                'person_id' => 177,
                'character' => 'LaBoeuf',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            50 => 
            array (
                'cast_id' => 1064,
                'movie_id' => 113,
                'person_id' => 500,
                'character' => 'Tom Chaney',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            51 => 
            array (
                'cast_id' => 1065,
                'movie_id' => 113,
                'person_id' => 537,
                'character' => 'Lucky Ned Pepper',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            52 => 
            array (
                'cast_id' => 1066,
                'movie_id' => 113,
                'person_id' => 395,
                'character' => 'Moon',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            53 => 
            array (
                'cast_id' => 1067,
                'movie_id' => 113,
                'person_id' => 608,
                'character' => 'Mattie Ross',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            54 => 
            array (
                'cast_id' => 1068,
                'movie_id' => 113,
                'person_id' => 609,
                'character' => 'J Noble Daggett',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            55 => 
            array (
                'cast_id' => 1069,
                'movie_id' => 114,
                'person_id' => 457,
                'character' => 'Sam Witwicky',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            56 => 
            array (
                'cast_id' => 1070,
                'movie_id' => 114,
                'person_id' => 74,
                'character' => 'Megatron',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            57 => 
            array (
                'cast_id' => 1071,
                'movie_id' => 114,
                'person_id' => 610,
                'character' => 'Mikaela Banes',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            58 => 
            array (
                'cast_id' => 1072,
                'movie_id' => 114,
                'person_id' => 611,
                'character' => 'Captain William Lennox',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            59 => 
            array (
                'cast_id' => 1073,
                'movie_id' => 114,
                'person_id' => 612,
                'character' => 'Usaf Tech Sergeant Epps',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            60 => 
            array (
                'cast_id' => 1074,
                'movie_id' => 114,
                'person_id' => 613,
                'character' => 'Glen Whitmann',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            61 => 
            array (
                'cast_id' => 1075,
                'movie_id' => 114,
                'person_id' => 614,
                'character' => 'Defense Secretary John Keller',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            62 => 
            array (
                'cast_id' => 1076,
                'movie_id' => 114,
                'person_id' => 615,
                'character' => 'Agent Simmons',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            63 => 
            array (
                'cast_id' => 1077,
                'movie_id' => 114,
                'person_id' => 616,
                'character' => 'Ron Witwicky',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            64 => 
            array (
                'cast_id' => 1078,
                'movie_id' => 114,
                'person_id' => 617,
                'character' => 'Judy Witwicky',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            65 => 
            array (
                'cast_id' => 1079,
                'movie_id' => 114,
                'person_id' => 618,
                'character' => 'Bobby Bolivia',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            66 => 
            array (
                'cast_id' => 1080,
                'movie_id' => 114,
                'person_id' => 619,
                'character' => 'Colonel Sharp',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            67 => 
            array (
                'cast_id' => 1081,
                'movie_id' => 114,
                'person_id' => 620,
                'character' => 'Optimus Prime',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            68 => 
            array (
                'cast_id' => 1082,
                'movie_id' => 115,
                'person_id' => 457,
                'character' => 'Sam Witwicky',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            69 => 
            array (
                'cast_id' => 1083,
                'movie_id' => 115,
                'person_id' => 610,
                'character' => 'Mikaela Banes',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            70 => 
            array (
                'cast_id' => 1084,
                'movie_id' => 115,
                'person_id' => 611,
                'character' => 'Major Lennox',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            71 => 
            array (
                'cast_id' => 1085,
                'movie_id' => 115,
                'person_id' => 612,
                'character' => 'USAF Master Sergeant Epps',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            72 => 
            array (
                'cast_id' => 1086,
                'movie_id' => 115,
                'person_id' => 615,
                'character' => 'Simmons',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            73 => 
            array (
                'cast_id' => 1087,
                'movie_id' => 115,
                'person_id' => 616,
                'character' => 'Ron Witwicky',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            74 => 
            array (
                'cast_id' => 1088,
                'movie_id' => 115,
                'person_id' => 617,
                'character' => 'Judy Witwicky',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            75 => 
            array (
                'cast_id' => 1089,
                'movie_id' => 115,
                'person_id' => 619,
                'character' => 'General Morshower',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            76 => 
            array (
                'cast_id' => 1090,
                'movie_id' => 115,
                'person_id' => 620,
                'character' => 'Optimus Prime',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            77 => 
            array (
                'cast_id' => 1091,
                'movie_id' => 115,
                'person_id' => 74,
                'character' => 'Megatron',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            78 => 
            array (
                'cast_id' => 1092,
                'movie_id' => 115,
                'person_id' => 254,
                'character' => 'Fallen',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            79 => 
            array (
                'cast_id' => 1093,
                'movie_id' => 115,
                'person_id' => 567,
                'character' => 'Soundwave',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            80 => 
            array (
                'cast_id' => 1094,
                'movie_id' => 115,
                'person_id' => 621,
                'character' => 'Professor Colan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            81 => 
            array (
                'cast_id' => 1095,
                'movie_id' => 116,
                'person_id' => 457,
                'character' => 'Sam Witwicky',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            82 => 
            array (
                'cast_id' => 1096,
                'movie_id' => 116,
                'person_id' => 611,
                'character' => 'Lennox',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            83 => 
            array (
                'cast_id' => 1097,
                'movie_id' => 116,
                'person_id' => 615,
                'character' => 'Simmons',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            84 => 
            array (
                'cast_id' => 1098,
                'movie_id' => 116,
                'person_id' => 612,
                'character' => 'Epps',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            85 => 
            array (
                'cast_id' => 1099,
                'movie_id' => 116,
                'person_id' => 330,
                'character' => 'Dylan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            86 => 
            array (
                'cast_id' => 1100,
                'movie_id' => 116,
                'person_id' => 616,
                'character' => 'Ron Witwicky',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            87 => 
            array (
                'cast_id' => 1101,
                'movie_id' => 116,
                'person_id' => 617,
                'character' => 'Judy Witwicky',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            88 => 
            array (
                'cast_id' => 1102,
                'movie_id' => 116,
                'person_id' => 428,
                'character' => 'Dutch',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            89 => 
            array (
                'cast_id' => 1103,
                'movie_id' => 116,
                'person_id' => 619,
                'character' => 'General Morshower',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            90 => 
            array (
                'cast_id' => 1104,
                'movie_id' => 116,
                'person_id' => 620,
                'character' => 'Optimus Prime',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            91 => 
            array (
                'cast_id' => 1105,
                'movie_id' => 116,
                'person_id' => 74,
                'character' => 'Megatron',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            92 => 
            array (
                'cast_id' => 1106,
                'movie_id' => 116,
                'person_id' => 570,
                'character' => 'Sentinel Prime',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            93 => 
            array (
                'cast_id' => 1107,
                'movie_id' => 116,
                'person_id' => 567,
                'character' => 'Shockwave  Soundwave',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            94 => 
            array (
                'cast_id' => 1108,
                'movie_id' => 116,
                'person_id' => 622,
                'character' => 'Carly',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            95 => 
            array (
                'cast_id' => 1109,
                'movie_id' => 116,
                'person_id' => 623,
                'character' => 'Mearing',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            96 => 
            array (
                'cast_id' => 1110,
                'movie_id' => 116,
                'person_id' => 624,
                'character' => 'Bruce Brazos',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            97 => 
            array (
                'cast_id' => 1111,
                'movie_id' => 116,
                'person_id' => 625,
                'character' => 'Jerry Wang',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            98 => 
            array (
                'cast_id' => 1112,
                'movie_id' => 117,
                'person_id' => 443,
                'character' => 'Kevin Flynn / Clu',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            99 => 
            array (
                'cast_id' => 1113,
                'movie_id' => 117,
                'person_id' => 140,
                'character' => 'Ed Dillinger / Sark',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            100 => 
            array (
                'cast_id' => 1114,
                'movie_id' => 117,
                'person_id' => 626,
                'character' => 'Alan Bradley / Tron',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            101 => 
            array (
                'cast_id' => 1115,
                'movie_id' => 117,
                'person_id' => 627,
                'character' => 'Lora  Yori',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            102 => 
            array (
                'cast_id' => 1116,
                'movie_id' => 117,
                'person_id' => 628,
                'character' => 'Dr Walter Gibbs / Dumont',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            103 => 
            array (
                'cast_id' => 1117,
                'movie_id' => 117,
                'person_id' => 629,
                'character' => 'Ram / Popcorn Co-Worker',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            104 => 
            array (
                'cast_id' => 1118,
                'movie_id' => 118,
                'person_id' => 443,
                'character' => 'Kevin Flynn / Clu',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            105 => 
            array (
                'cast_id' => 1119,
                'movie_id' => 118,
                'person_id' => 626,
                'character' => 'Alan Bradley / Tron',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            106 => 
            array (
                'cast_id' => 1120,
                'movie_id' => 118,
                'person_id' => 21,
                'character' => 'Castor  Zuse',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            107 => 
            array (
                'cast_id' => 1121,
                'movie_id' => 118,
                'person_id' => 201,
                'character' => 'Edward Dillinger',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            108 => 
            array (
                'cast_id' => 1122,
                'movie_id' => 118,
                'person_id' => 630,
                'character' => 'Sam Flynn',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            109 => 
            array (
                'cast_id' => 1123,
                'movie_id' => 118,
                'person_id' => 631,
                'character' => 'Quorra',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            110 => 
            array (
                'cast_id' => 1124,
                'movie_id' => 118,
                'person_id' => 632,
                'character' => 'Jarvis',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            111 => 
            array (
                'cast_id' => 1125,
                'movie_id' => 118,
                'person_id' => 633,
                'character' => 'Gem',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            112 => 
            array (
                'cast_id' => 1126,
                'movie_id' => 119,
                'person_id' => 634,
                'character' => 'Parajumper',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            113 => 
            array (
                'cast_id' => 1127,
                'movie_id' => 119,
                'person_id' => 635,
                'character' => 'Excia Agent',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            114 => 
            array (
                'cast_id' => 1128,
                'movie_id' => 119,
                'person_id' => 636,
                'character' => 'Who Doctor',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            115 => 
            array (
                'cast_id' => 1129,
                'movie_id' => 120,
                'person_id' => 480,
                'character' => 'Chris Bradley  Bolt',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            116 => 
            array (
                'cast_id' => 1130,
                'movie_id' => 120,
                'person_id' => 637,
                'character' => 'Logan  Wolverine',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            117 => 
            array (
                'cast_id' => 1131,
                'movie_id' => 120,
                'person_id' => 638,
                'character' => 'Victor Creed',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            118 => 
            array (
                'cast_id' => 1132,
                'movie_id' => 120,
                'person_id' => 639,
                'character' => 'Stryker',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            119 => 
            array (
                'cast_id' => 1133,
                'movie_id' => 120,
                'person_id' => 640,
                'character' => 'Fred Dukes',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            120 => 
            array (
                'cast_id' => 1134,
                'movie_id' => 120,
                'person_id' => 641,
                'character' => 'Kayla Silverfox',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            121 => 
            array (
                'cast_id' => 1135,
                'movie_id' => 120,
                'person_id' => 642,
                'character' => 'Wade Wilson',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            122 => 
            array (
                'cast_id' => 1136,
                'movie_id' => 120,
                'person_id' => 643,
                'character' => 'Remy Lebeau',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            123 => 
            array (
                'cast_id' => 1137,
                'movie_id' => 121,
                'person_id' => 637,
                'character' => 'Logan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            124 => 
            array (
                'cast_id' => 1138,
                'movie_id' => 121,
                'person_id' => 5,
                'character' => 'Shingen',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            125 => 
            array (
                'cast_id' => 1139,
                'movie_id' => 121,
                'person_id' => 479,
                'character' => 'Magneto',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            126 => 
            array (
                'cast_id' => 1140,
                'movie_id' => 121,
                'person_id' => 644,
                'character' => 'Mariko',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            127 => 
            array (
                'cast_id' => 1141,
                'movie_id' => 121,
                'person_id' => 645,
                'character' => 'Viper',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            128 => 
            array (
                'cast_id' => 1142,
                'movie_id' => 121,
                'person_id' => 646,
                'character' => 'Jean Grey',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            129 => 
            array (
                'cast_id' => 1143,
                'movie_id' => 121,
                'person_id' => 647,
                'character' => 'Charles Xavier',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            130 => 
            array (
                'cast_id' => 1144,
                'movie_id' => 122,
                'person_id' => 436,
                'character' => 'Erik Lensherr',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            131 => 
            array (
                'cast_id' => 1145,
                'movie_id' => 122,
                'person_id' => 411,
                'character' => 'Raven  Mystique',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            132 => 
            array (
                'cast_id' => 1146,
                'movie_id' => 122,
                'person_id' => 469,
                'character' => 'Azazel',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            133 => 
            array (
                'cast_id' => 1147,
                'movie_id' => 122,
                'person_id' => 619,
                'character' => 'Colonel Hendry',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            134 => 
            array (
                'cast_id' => 1148,
                'movie_id' => 122,
                'person_id' => 605,
                'character' => 'Captain',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            135 => 
            array (
                'cast_id' => 1149,
                'movie_id' => 122,
                'person_id' => 637,
                'character' => 'Logan  Wolverine',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            136 => 
            array (
                'cast_id' => 1150,
                'movie_id' => 122,
                'person_id' => 648,
                'character' => 'Charles Xavier',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            137 => 
            array (
                'cast_id' => 1151,
                'movie_id' => 122,
                'person_id' => 649,
                'character' => 'Sebastian Shaw',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            138 => 
            array (
                'cast_id' => 1152,
                'movie_id' => 122,
                'person_id' => 650,
                'character' => 'Moira Mactaggert',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            139 => 
            array (
                'cast_id' => 1153,
                'movie_id' => 122,
                'person_id' => 651,
                'character' => 'Man In Black Suit',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            140 => 
            array (
                'cast_id' => 1154,
                'movie_id' => 122,
                'person_id' => 652,
                'character' => 'Riptide',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            141 => 
            array (
                'cast_id' => 1155,
                'movie_id' => 122,
                'person_id' => 653,
                'character' => 'Angel',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            142 => 
            array (
                'cast_id' => 1156,
                'movie_id' => 122,
                'person_id' => 654,
                'character' => 'Emma Frost',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            143 => 
            array (
                'cast_id' => 1157,
                'movie_id' => 122,
                'person_id' => 655,
                'character' => 'Hank Mccoy / Beast',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            144 => 
            array (
                'cast_id' => 1158,
                'movie_id' => 122,
                'person_id' => 656,
                'character' => 'Secretary Of State',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            145 => 
            array (
                'cast_id' => 1159,
                'movie_id' => 123,
                'person_id' => 637,
                'character' => 'Logan  Wolverine',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            146 => 
            array (
                'cast_id' => 1160,
                'movie_id' => 123,
                'person_id' => 648,
                'character' => 'Charles Xavier',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            147 => 
            array (
                'cast_id' => 1161,
                'movie_id' => 123,
                'person_id' => 436,
                'character' => 'Erik Lehnsherr',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            148 => 
            array (
                'cast_id' => 1162,
                'movie_id' => 123,
                'person_id' => 411,
                'character' => 'Raven  Mystique',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            149 => 
            array (
                'cast_id' => 1163,
                'movie_id' => 123,
                'person_id' => 655,
                'character' => 'Hank  Beast',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            150 => 
            array (
                'cast_id' => 1164,
                'movie_id' => 123,
                'person_id' => 438,
                'character' => 'Kitty Pryde',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            151 => 
            array (
                'cast_id' => 1165,
                'movie_id' => 123,
                'person_id' => 120,
                'character' => 'Bishop',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            152 => 
            array (
                'cast_id' => 1166,
                'movie_id' => 123,
                'person_id' => 479,
                'character' => 'Magneto',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            153 => 
            array (
                'cast_id' => 1167,
                'movie_id' => 123,
                'person_id' => 647,
                'character' => 'Professor X',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            154 => 
            array (
                'cast_id' => 1168,
                'movie_id' => 123,
                'person_id' => 646,
                'character' => 'Jean Grey',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            155 => 
            array (
                'cast_id' => 1169,
                'movie_id' => 123,
                'person_id' => 331,
                'character' => 'Scott Summers',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            156 => 
            array (
                'cast_id' => 1170,
                'movie_id' => 123,
                'person_id' => 181,
                'character' => 'William Stryker',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            157 => 
            array (
                'cast_id' => 1171,
                'movie_id' => 123,
                'person_id' => 657,
                'character' => 'Storm',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            158 => 
            array (
                'cast_id' => 1172,
                'movie_id' => 123,
                'person_id' => 658,
                'character' => 'Rogue',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            159 => 
            array (
                'cast_id' => 1173,
                'movie_id' => 123,
                'person_id' => 659,
                'character' => 'Dr Bolivar Trask',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            160 => 
            array (
                'cast_id' => 1174,
                'movie_id' => 123,
                'person_id' => 660,
                'character' => 'Bobby / Iceman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            161 => 
            array (
                'cast_id' => 1175,
                'movie_id' => 123,
                'person_id' => 661,
                'character' => 'Peter / Quicksilver',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            162 => 
            array (
                'cast_id' => 1176,
                'movie_id' => 123,
                'person_id' => 662,
                'character' => 'Maj Bill Stryker',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            163 => 
            array (
                'cast_id' => 1177,
                'movie_id' => 123,
                'person_id' => 663,
                'character' => 'Colossus',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            164 => 
            array (
                'cast_id' => 1178,
                'movie_id' => 123,
                'person_id' => 664,
                'character' => 'Havok',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            165 => 
            array (
                'cast_id' => 1179,
                'movie_id' => 123,
                'person_id' => 665,
                'character' => 'Beast',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            166 => 
            array (
                'cast_id' => 1180,
                'movie_id' => 124,
                'person_id' => 637,
                'character' => 'Logan / Wolverine',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            167 => 
            array (
                'cast_id' => 1181,
                'movie_id' => 124,
                'person_id' => 647,
                'character' => 'Charles Xavier',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            168 => 
            array (
                'cast_id' => 1182,
                'movie_id' => 124,
                'person_id' => 479,
                'character' => 'Eric Lensherr / Magneto',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            169 => 
            array (
                'cast_id' => 1183,
                'movie_id' => 124,
                'person_id' => 646,
                'character' => 'Jean Grey',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            170 => 
            array (
                'cast_id' => 1184,
                'movie_id' => 124,
                'person_id' => 331,
                'character' => 'Scott Summers / Cyclops',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            171 => 
            array (
                'cast_id' => 1185,
                'movie_id' => 124,
                'person_id' => 657,
                'character' => 'Ororo Munroe / Storm',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            172 => 
            array (
                'cast_id' => 1186,
                'movie_id' => 124,
                'person_id' => 658,
                'character' => 'Rogue',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            173 => 
            array (
                'cast_id' => 1187,
                'movie_id' => 124,
                'person_id' => 584,
                'character' => 'Toad',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            174 => 
            array (
                'cast_id' => 1188,
                'movie_id' => 124,
                'person_id' => 660,
                'character' => 'Bobby Drake / Iceman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            175 => 
            array (
                'cast_id' => 1189,
                'movie_id' => 124,
                'person_id' => 459,
                'character' => 'Hot Dog Vendor',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            176 => 
            array (
                'cast_id' => 1190,
                'movie_id' => 124,
                'person_id' => 666,
                'character' => 'Sabretooth',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            177 => 
            array (
                'cast_id' => 1191,
                'movie_id' => 124,
                'person_id' => 667,
                'character' => 'Mystique',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            178 => 
            array (
                'cast_id' => 1192,
                'movie_id' => 124,
                'person_id' => 668,
                'character' => 'Senator Kelly',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            179 => 
            array (
                'cast_id' => 1193,
                'movie_id' => 125,
                'person_id' => 647,
                'character' => 'Professor Charles Xavier',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            180 => 
            array (
                'cast_id' => 1194,
                'movie_id' => 125,
                'person_id' => 637,
                'character' => 'Logan  Wolverine',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            181 => 
            array (
                'cast_id' => 1195,
                'movie_id' => 125,
                'person_id' => 479,
                'character' => 'Eric Lensherr  Magneto',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            182 => 
            array (
                'cast_id' => 1196,
                'movie_id' => 125,
                'person_id' => 657,
                'character' => 'Ororo Munroe  Storm',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            183 => 
            array (
                'cast_id' => 1197,
                'movie_id' => 125,
                'person_id' => 646,
                'character' => 'Jean Grey',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            184 => 
            array (
                'cast_id' => 1198,
                'movie_id' => 125,
                'person_id' => 331,
                'character' => 'Scott Summers  Cyclops',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            185 => 
            array (
                'cast_id' => 1199,
                'movie_id' => 125,
                'person_id' => 658,
                'character' => 'Marie  Rogue',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            186 => 
            array (
                'cast_id' => 1200,
                'movie_id' => 125,
                'person_id' => 667,
                'character' => 'Raven Darkholme  Mystique',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            187 => 
            array (
                'cast_id' => 1201,
                'movie_id' => 125,
                'person_id' => 181,
                'character' => 'William Stryker',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            188 => 
            array (
                'cast_id' => 1202,
                'movie_id' => 125,
                'person_id' => 562,
                'character' => 'Kurt Wagner  Nightcrawler',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            189 => 
            array (
                'cast_id' => 1203,
                'movie_id' => 125,
                'person_id' => 668,
                'character' => 'Senator Kelly',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            190 => 
            array (
                'cast_id' => 1204,
                'movie_id' => 125,
                'person_id' => 660,
                'character' => 'Bobby Drake  Iceman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            191 => 
            array (
                'cast_id' => 1205,
                'movie_id' => 125,
                'person_id' => 663,
                'character' => 'Piotr Rasputin  Colossus',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            192 => 
            array (
                'cast_id' => 1206,
                'movie_id' => 125,
                'person_id' => 669,
                'character' => 'John Allerdyce  Pyro',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            193 => 
            array (
                'cast_id' => 1207,
                'movie_id' => 125,
                'person_id' => 670,
                'character' => 'Yuriko Oyama  Lady Deathstrike',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            194 => 
            array (
                'cast_id' => 1208,
                'movie_id' => 126,
                'person_id' => 637,
                'character' => 'Logan  Wolverine',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            195 => 
            array (
                'cast_id' => 1209,
                'movie_id' => 126,
                'person_id' => 657,
                'character' => 'Ororo Munroe  Storm',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            196 => 
            array (
                'cast_id' => 1210,
                'movie_id' => 126,
                'person_id' => 479,
                'character' => 'Eric Lehnsherr  Magneto',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            197 => 
            array (
                'cast_id' => 1211,
                'movie_id' => 126,
                'person_id' => 647,
                'character' => 'Charles Xavier  Professor X',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            198 => 
            array (
                'cast_id' => 1212,
                'movie_id' => 126,
                'person_id' => 646,
                'character' => 'Jean Grey  Phoenix',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            199 => 
            array (
                'cast_id' => 1213,
                'movie_id' => 126,
                'person_id' => 658,
                'character' => 'Marie  Rogue',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            200 => 
            array (
                'cast_id' => 1214,
                'movie_id' => 126,
                'person_id' => 665,
                'character' => 'Dr Henry Hank McCoy  Beast',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            201 => 
            array (
                'cast_id' => 1215,
                'movie_id' => 126,
                'person_id' => 331,
                'character' => 'Scott Summers  Cyclops',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            202 => 
            array (
                'cast_id' => 1216,
                'movie_id' => 126,
                'person_id' => 667,
                'character' => 'Raven Darkholme  Mystique',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            203 => 
            array (
                'cast_id' => 1217,
                'movie_id' => 126,
                'person_id' => 660,
                'character' => 'Bobby Drake  Iceman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            204 => 
            array (
                'cast_id' => 1218,
                'movie_id' => 126,
                'person_id' => 669,
                'character' => 'John Allerdyce  Pyro',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            205 => 
            array (
                'cast_id' => 1219,
                'movie_id' => 126,
                'person_id' => 438,
                'character' => 'Kitty Pryde  Shadowcat',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            206 => 
            array (
                'cast_id' => 1220,
                'movie_id' => 126,
                'person_id' => 663,
                'character' => 'Peter Rasputin  Colossus',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            207 => 
            array (
                'cast_id' => 1221,
                'movie_id' => 126,
                'person_id' => 459,
                'character' => 'Waterhose Man',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            208 => 
            array (
                'cast_id' => 1222,
                'movie_id' => 126,
                'person_id' => 671,
                'character' => 'Cain Marko  Juggernaut',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            209 => 
            array (
                'cast_id' => 1223,
                'movie_id' => 126,
                'person_id' => 672,
                'character' => 'Warren Worthington Iii  Angel',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            210 => 
            array (
                'cast_id' => 1224,
                'movie_id' => 126,
                'person_id' => 673,
                'character' => 'Trask',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            211 => 
            array (
                'cast_id' => 1225,
                'movie_id' => 126,
                'person_id' => 674,
                'character' => 'Sergeant',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            212 => 
            array (
                'cast_id' => 1226,
                'movie_id' => 126,
                'person_id' => 675,
                'character' => 'Dr Moira Mactaggart',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            213 => 
            array (
                'cast_id' => 1227,
                'movie_id' => 127,
                'person_id' => 164,
                'character' => 'Charles Charley Bowdre',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            214 => 
            array (
                'cast_id' => 1228,
                'movie_id' => 127,
                'person_id' => 345,
                'character' => 'John Tunstall',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            215 => 
            array (
                'cast_id' => 1229,
                'movie_id' => 127,
                'person_id' => 676,
                'character' => 'William H Billy The Kid Bonney',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            216 => 
            array (
                'cast_id' => 1230,
                'movie_id' => 127,
                'person_id' => 677,
                'character' => 'Josiah Gordon Doc Scurlock',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            217 => 
            array (
                'cast_id' => 1231,
                'movie_id' => 127,
                'person_id' => 678,
                'character' => 'Jose Chavez Y Chavez',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            218 => 
            array (
                'cast_id' => 1232,
                'movie_id' => 127,
                'person_id' => 679,
                'character' => 'Richard Dick Brewer',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            219 => 
            array (
                'cast_id' => 1233,
                'movie_id' => 127,
                'person_id' => 680,
                'character' => 'Dirty Steve Stephens',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            220 => 
            array (
                'cast_id' => 1234,
                'movie_id' => 127,
                'person_id' => 681,
                'character' => 'Lawrence G Murphy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            221 => 
            array (
                'cast_id' => 1235,
                'movie_id' => 127,
                'person_id' => 682,
                'character' => 'Alex Mcsween',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            222 => 
            array (
                'cast_id' => 1236,
                'movie_id' => 128,
                'person_id' => 413,
                'character' => 'Tallahassee',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            223 => 
            array (
                'cast_id' => 1237,
                'movie_id' => 128,
                'person_id' => 55,
                'character' => 'Wichita',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            224 => 
            array (
                'cast_id' => 1238,
                'movie_id' => 128,
                'person_id' => 348,
                'character' => 'Bill Murray',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            225 => 
            array (
                'cast_id' => 1239,
                'movie_id' => 128,
                'person_id' => 683,
                'character' => 'Columbus',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            226 => 
            array (
                'cast_id' => 1240,
                'movie_id' => 128,
                'person_id' => 684,
                'character' => 'Little Rock',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            227 => 
            array (
                'cast_id' => 1241,
                'movie_id' => 128,
                'person_id' => 685,
                'character' => '406',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            228 => 
            array (
                'cast_id' => 1242,
                'movie_id' => 15,
                'person_id' => 302,
                'character' => 'Roy Parker',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            229 => 
            array (
                'cast_id' => 1243,
                'movie_id' => 15,
                'person_id' => 686,
                'character' => 'Verna Jarrett',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            230 => 
            array (
                'cast_id' => 1244,
                'movie_id' => 15,
                'person_id' => 687,
                'character' => 'Hank Fallon',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            231 => 
            array (
                'cast_id' => 1245,
                'movie_id' => 15,
                'person_id' => 688,
                'character' => 'Big Ed Somers',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            232 => 
            array (
                'cast_id' => 1246,
                'movie_id' => 15,
                'person_id' => 689,
                'character' => 'Trader Winston',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
        ));
        
        
    }
}
