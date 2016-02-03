<?php

use Illuminate\Database\Seeder;

class CrewTableSeeder extends Seeder
{

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
            79 => 
            array (
                'crew_id' => 84,
                'movie_id' => 37,
                'person_id' => 244,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            80 => 
            array (
                'crew_id' => 85,
                'movie_id' => 37,
                'person_id' => 244,
                'position' => 'Writer',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            81 => 
            array (
                'crew_id' => 86,
                'movie_id' => 37,
                'person_id' => 245,
                'position' => 'Composer',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            82 => 
            array (
                'crew_id' => 87,
                'movie_id' => 38,
                'person_id' => 53,
                'position' => 'Writer',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            83 => 
            array (
                'crew_id' => 88,
                'movie_id' => 38,
                'person_id' => 252,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            84 => 
            array (
                'crew_id' => 89,
                'movie_id' => 38,
                'person_id' => 252,
                'position' => 'Writer',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            85 => 
            array (
                'crew_id' => 90,
                'movie_id' => 39,
                'person_id' => 259,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            86 => 
            array (
                'crew_id' => 91,
                'movie_id' => 39,
                'person_id' => 259,
                'position' => 'Writer',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            87 => 
            array (
                'crew_id' => 92,
                'movie_id' => 39,
                'person_id' => 260,
                'position' => 'Composer',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            88 => 
            array (
                'crew_id' => 93,
                'movie_id' => 40,
                'person_id' => 269,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            89 => 
            array (
                'crew_id' => 94,
                'movie_id' => 40,
                'person_id' => 270,
                'position' => 'Writer',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            90 => 
            array (
                'crew_id' => 95,
                'movie_id' => 42,
                'person_id' => 287,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            91 => 
            array (
                'crew_id' => 96,
                'movie_id' => 14,
                'person_id' => 1562,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            92 => 
            array (
                'crew_id' => 97,
                'movie_id' => 15,
                'person_id' => 1563,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            93 => 
            array (
                'crew_id' => 98,
                'movie_id' => 16,
                'person_id' => 1564,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            94 => 
            array (
                'crew_id' => 99,
                'movie_id' => 17,
                'person_id' => 1565,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            95 => 
            array (
                'crew_id' => 100,
                'movie_id' => 41,
                'person_id' => 1566,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            96 => 
            array (
                'crew_id' => 101,
                'movie_id' => 43,
                'person_id' => 311,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            97 => 
            array (
                'crew_id' => 102,
                'movie_id' => 44,
                'person_id' => 1567,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            98 => 
            array (
                'crew_id' => 103,
                'movie_id' => 45,
                'person_id' => 1568,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            99 => 
            array (
                'crew_id' => 104,
                'movie_id' => 46,
                'person_id' => 1569,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            100 => 
            array (
                'crew_id' => 105,
                'movie_id' => 47,
                'person_id' => 1570,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            101 => 
            array (
                'crew_id' => 106,
                'movie_id' => 48,
                'person_id' => 1571,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            102 => 
            array (
                'crew_id' => 107,
                'movie_id' => 49,
                'person_id' => 1572,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            103 => 
            array (
                'crew_id' => 108,
                'movie_id' => 50,
                'person_id' => 1573,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            104 => 
            array (
                'crew_id' => 109,
                'movie_id' => 51,
                'person_id' => 1574,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            105 => 
            array (
                'crew_id' => 110,
                'movie_id' => 52,
                'person_id' => 1168,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            106 => 
            array (
                'crew_id' => 111,
                'movie_id' => 53,
                'person_id' => 1575,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            107 => 
            array (
                'crew_id' => 112,
                'movie_id' => 54,
                'person_id' => 1564,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            108 => 
            array (
                'crew_id' => 113,
                'movie_id' => 55,
                'person_id' => 1576,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            109 => 
            array (
                'crew_id' => 114,
                'movie_id' => 56,
                'person_id' => 1577,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            110 => 
            array (
                'crew_id' => 115,
                'movie_id' => 57,
                'person_id' => 1578,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            111 => 
            array (
                'crew_id' => 116,
                'movie_id' => 58,
                'person_id' => 1578,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            112 => 
            array (
                'crew_id' => 117,
                'movie_id' => 59,
                'person_id' => 1579,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            113 => 
            array (
                'crew_id' => 118,
                'movie_id' => 60,
                'person_id' => 1580,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            114 => 
            array (
                'crew_id' => 119,
                'movie_id' => 61,
                'person_id' => 1581,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            115 => 
            array (
                'crew_id' => 120,
                'movie_id' => 62,
                'person_id' => 1581,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            116 => 
            array (
                'crew_id' => 121,
                'movie_id' => 63,
                'person_id' => 1581,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            117 => 
            array (
                'crew_id' => 122,
                'movie_id' => 64,
                'person_id' => 1581,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            118 => 
            array (
                'crew_id' => 123,
                'movie_id' => 65,
                'person_id' => 1582,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            119 => 
            array (
                'crew_id' => 124,
                'movie_id' => 66,
                'person_id' => 1583,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            120 => 
            array (
                'crew_id' => 125,
                'movie_id' => 67,
                'person_id' => 1584,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            121 => 
            array (
                'crew_id' => 126,
                'movie_id' => 68,
                'person_id' => 1585,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            122 => 
            array (
                'crew_id' => 127,
                'movie_id' => 69,
                'person_id' => 1586,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            123 => 
            array (
                'crew_id' => 128,
                'movie_id' => 70,
                'person_id' => 1586,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            124 => 
            array (
                'crew_id' => 129,
                'movie_id' => 71,
                'person_id' => 1567,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            125 => 
            array (
                'crew_id' => 130,
                'movie_id' => 72,
                'person_id' => 1587,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            126 => 
            array (
                'crew_id' => 131,
                'movie_id' => 73,
                'person_id' => 1168,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            127 => 
            array (
                'crew_id' => 132,
                'movie_id' => 74,
                'person_id' => 204,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            128 => 
            array (
                'crew_id' => 133,
                'movie_id' => 76,
                'person_id' => 445,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            129 => 
            array (
                'crew_id' => 134,
                'movie_id' => 77,
                'person_id' => 1376,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            130 => 
            array (
                'crew_id' => 135,
                'movie_id' => 78,
                'person_id' => 1588,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            131 => 
            array (
                'crew_id' => 136,
                'movie_id' => 79,
                'person_id' => 1589,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            132 => 
            array (
                'crew_id' => 137,
                'movie_id' => 80,
                'person_id' => 483,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            133 => 
            array (
                'crew_id' => 138,
                'movie_id' => 81,
                'person_id' => 483,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            134 => 
            array (
                'crew_id' => 139,
                'movie_id' => 82,
                'person_id' => 483,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            135 => 
            array (
                'crew_id' => 140,
                'movie_id' => 83,
                'person_id' => 1590,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            136 => 
            array (
                'crew_id' => 141,
                'movie_id' => 84,
                'person_id' => 1591,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            137 => 
            array (
                'crew_id' => 142,
                'movie_id' => 85,
                'person_id' => 1591,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            138 => 
            array (
                'crew_id' => 143,
                'movie_id' => 86,
                'person_id' => 1591,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            139 => 
            array (
                'crew_id' => 144,
                'movie_id' => 87,
                'person_id' => 1592,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            140 => 
            array (
                'crew_id' => 145,
                'movie_id' => 89,
                'person_id' => 1593,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            141 => 
            array (
                'crew_id' => 146,
                'movie_id' => 90,
                'person_id' => 1594,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            142 => 
            array (
                'crew_id' => 147,
                'movie_id' => 91,
                'person_id' => 1595,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            143 => 
            array (
                'crew_id' => 148,
                'movie_id' => 92,
                'person_id' => 1596,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            144 => 
            array (
                'crew_id' => 149,
                'movie_id' => 93,
                'person_id' => 1597,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            145 => 
            array (
                'crew_id' => 150,
                'movie_id' => 94,
                'person_id' => 528,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            146 => 
            array (
                'crew_id' => 151,
                'movie_id' => 95,
                'person_id' => 105,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            147 => 
            array (
                'crew_id' => 152,
                'movie_id' => 96,
                'person_id' => 53,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            148 => 
            array (
                'crew_id' => 153,
                'movie_id' => 97,
                'person_id' => 1598,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            149 => 
            array (
                'crew_id' => 154,
                'movie_id' => 98,
                'person_id' => 1599,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            150 => 
            array (
                'crew_id' => 155,
                'movie_id' => 99,
                'person_id' => 1600,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            151 => 
            array (
                'crew_id' => 156,
                'movie_id' => 100,
                'person_id' => 1601,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            152 => 
            array (
                'crew_id' => 157,
                'movie_id' => 101,
                'person_id' => 1601,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            153 => 
            array (
                'crew_id' => 158,
                'movie_id' => 102,
                'person_id' => 1602,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            154 => 
            array (
                'crew_id' => 159,
                'movie_id' => 103,
                'person_id' => 1603,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            155 => 
            array (
                'crew_id' => 160,
                'movie_id' => 104,
                'person_id' => 88,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            156 => 
            array (
                'crew_id' => 161,
                'movie_id' => 105,
                'person_id' => 88,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            157 => 
            array (
                'crew_id' => 162,
                'movie_id' => 106,
                'person_id' => 88,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            158 => 
            array (
                'crew_id' => 163,
                'movie_id' => 107,
                'person_id' => 105,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            159 => 
            array (
                'crew_id' => 164,
                'movie_id' => 108,
                'person_id' => 39,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            160 => 
            array (
                'crew_id' => 165,
                'movie_id' => 109,
                'person_id' => 39,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            161 => 
            array (
                'crew_id' => 166,
                'movie_id' => 110,
                'person_id' => 1604,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            162 => 
            array (
                'crew_id' => 168,
                'movie_id' => 112,
                'person_id' => 145,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            163 => 
            array (
                'crew_id' => 169,
                'movie_id' => 113,
                'person_id' => 1606,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            164 => 
            array (
                'crew_id' => 170,
                'movie_id' => 114,
                'person_id' => 1607,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            165 => 
            array (
                'crew_id' => 171,
                'movie_id' => 115,
                'person_id' => 1607,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            166 => 
            array (
                'crew_id' => 172,
                'movie_id' => 116,
                'person_id' => 1607,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            167 => 
            array (
                'crew_id' => 173,
                'movie_id' => 117,
                'person_id' => 1608,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            168 => 
            array (
                'crew_id' => 174,
                'movie_id' => 118,
                'person_id' => 1609,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            169 => 
            array (
                'crew_id' => 175,
                'movie_id' => 119,
                'person_id' => 1610,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            170 => 
            array (
                'crew_id' => 176,
                'movie_id' => 120,
                'person_id' => 1611,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            171 => 
            array (
                'crew_id' => 177,
                'movie_id' => 121,
                'person_id' => 1612,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            172 => 
            array (
                'crew_id' => 178,
                'movie_id' => 122,
                'person_id' => 1588,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            173 => 
            array (
                'crew_id' => 179,
                'movie_id' => 123,
                'person_id' => 1613,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            174 => 
            array (
                'crew_id' => 180,
                'movie_id' => 124,
                'person_id' => 1613,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            175 => 
            array (
                'crew_id' => 181,
                'movie_id' => 125,
                'person_id' => 1613,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            176 => 
            array (
                'crew_id' => 182,
                'movie_id' => 126,
                'person_id' => 1614,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            177 => 
            array (
                'crew_id' => 183,
                'movie_id' => 127,
                'person_id' => 1615,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            178 => 
            array (
                'crew_id' => 184,
                'movie_id' => 128,
                'person_id' => 1616,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            179 => 
            array (
                'crew_id' => 185,
                'movie_id' => 129,
                'person_id' => 1617,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            180 => 
            array (
                'crew_id' => 186,
                'movie_id' => 130,
                'person_id' => 1618,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            181 => 
            array (
                'crew_id' => 187,
                'movie_id' => 131,
                'person_id' => 1619,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            182 => 
            array (
                'crew_id' => 188,
                'movie_id' => 132,
                'person_id' => 1620,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            183 => 
            array (
                'crew_id' => 189,
                'movie_id' => 133,
                'person_id' => 1621,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            184 => 
            array (
                'crew_id' => 190,
                'movie_id' => 134,
                'person_id' => 1621,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            185 => 
            array (
                'crew_id' => 191,
                'movie_id' => 135,
                'person_id' => 1621,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            186 => 
            array (
                'crew_id' => 192,
                'movie_id' => 136,
                'person_id' => 1622,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            187 => 
            array (
                'crew_id' => 193,
                'movie_id' => 137,
                'person_id' => 1623,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            188 => 
            array (
                'crew_id' => 194,
                'movie_id' => 138,
                'person_id' => 1624,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            189 => 
            array (
                'crew_id' => 195,
                'movie_id' => 139,
                'person_id' => 1625,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            190 => 
            array (
                'crew_id' => 196,
                'movie_id' => 140,
                'person_id' => 776,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            191 => 
            array (
                'crew_id' => 197,
                'movie_id' => 141,
                'person_id' => 1626,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            192 => 
            array (
                'crew_id' => 198,
                'movie_id' => 142,
                'person_id' => 1627,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            193 => 
            array (
                'crew_id' => 199,
                'movie_id' => 143,
                'person_id' => 1628,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            194 => 
            array (
                'crew_id' => 200,
                'movie_id' => 144,
                'person_id' => 1629,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            195 => 
            array (
                'crew_id' => 201,
                'movie_id' => 145,
                'person_id' => 1630,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            196 => 
            array (
                'crew_id' => 202,
                'movie_id' => 146,
                'person_id' => 1631,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            197 => 
            array (
                'crew_id' => 203,
                'movie_id' => 147,
                'person_id' => 776,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            198 => 
            array (
                'crew_id' => 204,
                'movie_id' => 148,
                'person_id' => 1632,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            199 => 
            array (
                'crew_id' => 205,
                'movie_id' => 149,
                'person_id' => 1633,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            200 => 
            array (
                'crew_id' => 206,
                'movie_id' => 150,
                'person_id' => 1621,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            201 => 
            array (
                'crew_id' => 207,
                'movie_id' => 151,
                'person_id' => 1621,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            202 => 
            array (
                'crew_id' => 208,
                'movie_id' => 152,
                'person_id' => 1634,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            203 => 
            array (
                'crew_id' => 209,
                'movie_id' => 153,
                'person_id' => 1629,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            204 => 
            array (
                'crew_id' => 210,
                'movie_id' => 154,
                'person_id' => 1624,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            205 => 
            array (
                'crew_id' => 211,
                'movie_id' => 155,
                'person_id' => 1635,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            206 => 
            array (
                'crew_id' => 212,
                'movie_id' => 156,
                'person_id' => 1636,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            207 => 
            array (
                'crew_id' => 213,
                'movie_id' => 157,
                'person_id' => 1630,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            208 => 
            array (
                'crew_id' => 214,
                'movie_id' => 158,
                'person_id' => 1637,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            209 => 
            array (
                'crew_id' => 215,
                'movie_id' => 159,
                'person_id' => 1638,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            210 => 
            array (
                'crew_id' => 216,
                'movie_id' => 160,
                'person_id' => 1639,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            211 => 
            array (
                'crew_id' => 217,
                'movie_id' => 161,
                'person_id' => 1640,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            212 => 
            array (
                'crew_id' => 218,
                'movie_id' => 162,
                'person_id' => 1640,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            213 => 
            array (
                'crew_id' => 219,
                'movie_id' => 163,
                'person_id' => 1641,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            214 => 
            array (
                'crew_id' => 220,
                'movie_id' => 164,
                'person_id' => 1642,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            215 => 
            array (
                'crew_id' => 221,
                'movie_id' => 165,
                'person_id' => 1643,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            216 => 
            array (
                'crew_id' => 222,
                'movie_id' => 171,
                'person_id' => 1644,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            217 => 
            array (
                'crew_id' => 223,
                'movie_id' => 172,
                'person_id' => 1629,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            218 => 
            array (
                'crew_id' => 224,
                'movie_id' => 173,
                'person_id' => 1645,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            219 => 
            array (
                'crew_id' => 225,
                'movie_id' => 174,
                'person_id' => 1646,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            220 => 
            array (
                'crew_id' => 226,
                'movie_id' => 175,
                'person_id' => 1647,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            221 => 
            array (
                'crew_id' => 227,
                'movie_id' => 176,
                'person_id' => 1053,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            222 => 
            array (
                'crew_id' => 228,
                'movie_id' => 177,
                'person_id' => 1648,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            223 => 
            array (
                'crew_id' => 229,
                'movie_id' => 178,
                'person_id' => 1590,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            224 => 
            array (
                'crew_id' => 230,
                'movie_id' => 179,
                'person_id' => 1649,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            225 => 
            array (
                'crew_id' => 231,
                'movie_id' => 180,
                'person_id' => 1650,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            226 => 
            array (
                'crew_id' => 232,
                'movie_id' => 181,
                'person_id' => 1651,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            227 => 
            array (
                'crew_id' => 233,
                'movie_id' => 182,
                'person_id' => 1652,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            228 => 
            array (
                'crew_id' => 234,
                'movie_id' => 183,
                'person_id' => 1653,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            229 => 
            array (
                'crew_id' => 235,
                'movie_id' => 184,
                'person_id' => 1654,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            230 => 
            array (
                'crew_id' => 236,
                'movie_id' => 185,
                'person_id' => 813,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            231 => 
            array (
                'crew_id' => 237,
                'movie_id' => 186,
                'person_id' => 1655,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            232 => 
            array (
                'crew_id' => 238,
                'movie_id' => 187,
                'person_id' => 1656,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            233 => 
            array (
                'crew_id' => 239,
                'movie_id' => 188,
                'person_id' => 1657,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            234 => 
            array (
                'crew_id' => 240,
                'movie_id' => 189,
                'person_id' => 1657,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            235 => 
            array (
                'crew_id' => 241,
                'movie_id' => 190,
                'person_id' => 1658,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            236 => 
            array (
                'crew_id' => 242,
                'movie_id' => 191,
                'person_id' => 1607,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            237 => 
            array (
                'crew_id' => 243,
                'movie_id' => 192,
                'person_id' => 1607,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            238 => 
            array (
                'crew_id' => 244,
                'movie_id' => 193,
                'person_id' => 65,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            239 => 
            array (
                'crew_id' => 245,
                'movie_id' => 194,
                'person_id' => 65,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            240 => 
            array (
                'crew_id' => 246,
                'movie_id' => 195,
                'person_id' => 1659,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            241 => 
            array (
                'crew_id' => 247,
                'movie_id' => 196,
                'person_id' => 1659,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            242 => 
            array (
                'crew_id' => 248,
                'movie_id' => 197,
                'person_id' => 1660,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            243 => 
            array (
                'crew_id' => 249,
                'movie_id' => 198,
                'person_id' => 165,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            244 => 
            array (
                'crew_id' => 250,
                'movie_id' => 199,
                'person_id' => 1661,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            245 => 
            array (
                'crew_id' => 251,
                'movie_id' => 200,
                'person_id' => 1662,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            246 => 
            array (
                'crew_id' => 252,
                'movie_id' => 201,
                'person_id' => 1663,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            247 => 
            array (
                'crew_id' => 253,
                'movie_id' => 202,
                'person_id' => 1664,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            248 => 
            array (
                'crew_id' => 254,
                'movie_id' => 203,
                'person_id' => 1665,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            249 => 
            array (
                'crew_id' => 255,
                'movie_id' => 204,
                'person_id' => 1666,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            250 => 
            array (
                'crew_id' => 256,
                'movie_id' => 205,
                'person_id' => 1574,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            251 => 
            array (
                'crew_id' => 257,
                'movie_id' => 206,
                'person_id' => 1667,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            252 => 
            array (
                'crew_id' => 258,
                'movie_id' => 207,
                'person_id' => 1668,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            253 => 
            array (
                'crew_id' => 259,
                'movie_id' => 208,
                'person_id' => 1669,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            254 => 
            array (
                'crew_id' => 260,
                'movie_id' => 209,
                'person_id' => 1670,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            255 => 
            array (
                'crew_id' => 261,
                'movie_id' => 210,
                'person_id' => 1671,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            256 => 
            array (
                'crew_id' => 262,
                'movie_id' => 211,
                'person_id' => 1664,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            257 => 
            array (
                'crew_id' => 263,
                'movie_id' => 213,
                'person_id' => 1672,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            258 => 
            array (
                'crew_id' => 264,
                'movie_id' => 214,
                'person_id' => 1673,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            259 => 
            array (
                'crew_id' => 265,
                'movie_id' => 215,
                'person_id' => 813,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            260 => 
            array (
                'crew_id' => 266,
                'movie_id' => 216,
                'person_id' => 1674,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            261 => 
            array (
                'crew_id' => 267,
                'movie_id' => 217,
                'person_id' => 1675,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            262 => 
            array (
                'crew_id' => 268,
                'movie_id' => 218,
                'person_id' => 1676,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            263 => 
            array (
                'crew_id' => 269,
                'movie_id' => 219,
                'person_id' => 1677,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            264 => 
            array (
                'crew_id' => 270,
                'movie_id' => 220,
                'person_id' => 1562,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            265 => 
            array (
                'crew_id' => 271,
                'movie_id' => 221,
                'person_id' => 1584,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            266 => 
            array (
                'crew_id' => 272,
                'movie_id' => 222,
                'person_id' => 1678,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            267 => 
            array (
                'crew_id' => 273,
                'movie_id' => 223,
                'person_id' => 1679,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            268 => 
            array (
                'crew_id' => 274,
                'movie_id' => 224,
                'person_id' => 65,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            269 => 
            array (
                'crew_id' => 275,
                'movie_id' => 225,
                'person_id' => 1579,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            270 => 
            array (
                'crew_id' => 276,
                'movie_id' => 226,
                'person_id' => 1680,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            271 => 
            array (
                'crew_id' => 277,
                'movie_id' => 227,
                'person_id' => 1681,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            272 => 
            array (
                'crew_id' => 278,
                'movie_id' => 228,
                'person_id' => 1682,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            273 => 
            array (
                'crew_id' => 279,
                'movie_id' => 229,
                'person_id' => 1683,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            274 => 
            array (
                'crew_id' => 280,
                'movie_id' => 230,
                'person_id' => 1684,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            275 => 
            array (
                'crew_id' => 281,
                'movie_id' => 231,
                'person_id' => 1597,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            276 => 
            array (
                'crew_id' => 282,
                'movie_id' => 232,
                'person_id' => 1664,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            277 => 
            array (
                'crew_id' => 283,
                'movie_id' => 233,
                'person_id' => 1685,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            278 => 
            array (
                'crew_id' => 284,
                'movie_id' => 234,
                'person_id' => 165,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            279 => 
            array (
                'crew_id' => 285,
                'movie_id' => 235,
                'person_id' => 1586,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            280 => 
            array (
                'crew_id' => 286,
                'movie_id' => 236,
                'person_id' => 1686,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            281 => 
            array (
                'crew_id' => 287,
                'movie_id' => 237,
                'person_id' => 1612,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            282 => 
            array (
                'crew_id' => 288,
                'movie_id' => 238,
                'person_id' => 1687,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            283 => 
            array (
                'crew_id' => 289,
                'movie_id' => 239,
                'person_id' => 1663,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            284 => 
            array (
                'crew_id' => 290,
                'movie_id' => 240,
                'person_id' => 1688,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            285 => 
            array (
                'crew_id' => 291,
                'movie_id' => 241,
                'person_id' => 1688,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            286 => 
            array (
                'crew_id' => 292,
                'movie_id' => 242,
                'person_id' => 1689,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            287 => 
            array (
                'crew_id' => 293,
                'movie_id' => 243,
                'person_id' => 1690,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            288 => 
            array (
                'crew_id' => 294,
                'movie_id' => 244,
                'person_id' => 1567,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            289 => 
            array (
                'crew_id' => 295,
                'movie_id' => 245,
                'person_id' => 1691,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            290 => 
            array (
                'crew_id' => 296,
                'movie_id' => 246,
                'person_id' => 1692,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            291 => 
            array (
                'crew_id' => 297,
                'movie_id' => 247,
                'person_id' => 1584,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            292 => 
            array (
                'crew_id' => 298,
                'movie_id' => 248,
                'person_id' => 1693,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            293 => 
            array (
                'crew_id' => 299,
                'movie_id' => 249,
                'person_id' => 1694,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            294 => 
            array (
                'crew_id' => 300,
                'movie_id' => 250,
                'person_id' => 70,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            295 => 
            array (
                'crew_id' => 301,
                'movie_id' => 111,
                'person_id' => 1679,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            296 => 
            array (
                'crew_id' => 302,
                'movie_id' => 251,
                'person_id' => 1695,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            297 => 
            array (
                'crew_id' => 303,
                'movie_id' => 252,
                'person_id' => 1696,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            298 => 
            array (
                'crew_id' => 304,
                'movie_id' => 253,
                'person_id' => 1697,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            299 => 
            array (
                'crew_id' => 305,
                'movie_id' => 254,
                'person_id' => 1698,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            300 => 
            array (
                'crew_id' => 306,
                'movie_id' => 255,
                'person_id' => 1580,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            301 => 
            array (
                'crew_id' => 307,
                'movie_id' => 256,
                'person_id' => 1699,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            302 => 
            array (
                'crew_id' => 308,
                'movie_id' => 257,
                'person_id' => 1700,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            303 => 
            array (
                'crew_id' => 309,
                'movie_id' => 258,
                'person_id' => 65,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            304 => 
            array (
                'crew_id' => 310,
                'movie_id' => 260,
                'person_id' => 65,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            305 => 
            array (
                'crew_id' => 311,
                'movie_id' => 261,
                'person_id' => 1701,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            306 => 
            array (
                'crew_id' => 312,
                'movie_id' => 262,
                'person_id' => 1663,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            307 => 
            array (
                'crew_id' => 313,
                'movie_id' => 263,
                'person_id' => 1702,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            308 => 
            array (
                'crew_id' => 314,
                'movie_id' => 264,
                'person_id' => 1703,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            309 => 
            array (
                'crew_id' => 315,
                'movie_id' => 265,
                'person_id' => 1699,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            310 => 
            array (
                'crew_id' => 316,
                'movie_id' => 266,
                'person_id' => 1699,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            311 => 
            array (
                'crew_id' => 317,
                'movie_id' => 267,
                'person_id' => 1595,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            312 => 
            array (
                'crew_id' => 318,
                'movie_id' => 268,
                'person_id' => 1658,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            313 => 
            array (
                'crew_id' => 319,
                'movie_id' => 270,
                'person_id' => 1279,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            314 => 
            array (
                'crew_id' => 320,
                'movie_id' => 271,
                'person_id' => 1704,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            315 => 
            array (
                'crew_id' => 321,
                'movie_id' => 272,
                'person_id' => 1659,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            316 => 
            array (
                'crew_id' => 322,
                'movie_id' => 273,
                'person_id' => 1705,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            317 => 
            array (
                'crew_id' => 323,
                'movie_id' => 274,
                'person_id' => 1705,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            318 => 
            array (
                'crew_id' => 324,
                'movie_id' => 275,
                'person_id' => 1666,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            319 => 
            array (
                'crew_id' => 325,
                'movie_id' => 276,
                'person_id' => 1676,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            320 => 
            array (
                'crew_id' => 326,
                'movie_id' => 277,
                'person_id' => 1706,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            321 => 
            array (
                'crew_id' => 327,
                'movie_id' => 278,
                'person_id' => 1610,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            322 => 
            array (
                'crew_id' => 328,
                'movie_id' => 279,
                'person_id' => 1707,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            323 => 
            array (
                'crew_id' => 329,
                'movie_id' => 280,
                'person_id' => 1708,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            324 => 
            array (
                'crew_id' => 330,
                'movie_id' => 281,
                'person_id' => 165,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            325 => 
            array (
                'crew_id' => 331,
                'movie_id' => 282,
                'person_id' => 1167,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            326 => 
            array (
                'crew_id' => 332,
                'movie_id' => 283,
                'person_id' => 1709,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            327 => 
            array (
                'crew_id' => 333,
                'movie_id' => 284,
                'person_id' => 44,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            328 => 
            array (
                'crew_id' => 334,
                'movie_id' => 285,
                'person_id' => 1591,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            329 => 
            array (
                'crew_id' => 335,
                'movie_id' => 286,
                'person_id' => 1710,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            330 => 
            array (
                'crew_id' => 336,
                'movie_id' => 287,
                'person_id' => 1576,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            331 => 
            array (
                'crew_id' => 337,
                'movie_id' => 288,
                'person_id' => 1711,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            332 => 
            array (
                'crew_id' => 338,
                'movie_id' => 289,
                'person_id' => 30,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            333 => 
            array (
                'crew_id' => 339,
                'movie_id' => 290,
                'person_id' => 185,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            334 => 
            array (
                'crew_id' => 340,
                'movie_id' => 291,
                'person_id' => 1712,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            335 => 
            array (
                'crew_id' => 341,
                'movie_id' => 292,
                'person_id' => 1713,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            336 => 
            array (
                'crew_id' => 342,
                'movie_id' => 293,
                'person_id' => 145,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            337 => 
            array (
                'crew_id' => 343,
                'movie_id' => 294,
                'person_id' => 1714,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            338 => 
            array (
                'crew_id' => 344,
                'movie_id' => 295,
                'person_id' => 1715,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            339 => 
            array (
                'crew_id' => 345,
                'movie_id' => 296,
                'person_id' => 1716,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            340 => 
            array (
                'crew_id' => 346,
                'movie_id' => 297,
                'person_id' => 351,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            341 => 
            array (
                'crew_id' => 347,
                'movie_id' => 298,
                'person_id' => 1717,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            342 => 
            array (
                'crew_id' => 348,
                'movie_id' => 299,
                'person_id' => 287,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            343 => 
            array (
                'crew_id' => 349,
                'movie_id' => 300,
                'person_id' => 1654,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            344 => 
            array (
                'crew_id' => 350,
                'movie_id' => 301,
                'person_id' => 1654,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            345 => 
            array (
                'crew_id' => 351,
                'movie_id' => 302,
                'person_id' => 1654,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            346 => 
            array (
                'crew_id' => 352,
                'movie_id' => 303,
                'person_id' => 1718,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            347 => 
            array (
                'crew_id' => 353,
                'movie_id' => 304,
                'person_id' => 1719,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
        ));
        
        
    }
}
