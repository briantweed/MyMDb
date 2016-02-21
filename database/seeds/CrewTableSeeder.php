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
            348 => 
            array (
                'crew_id' => 354,
                'movie_id' => 305,
                'person_id' => 1720,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            349 => 
            array (
                'crew_id' => 355,
                'movie_id' => 306,
                'person_id' => 1227,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            350 => 
            array (
                'crew_id' => 356,
                'movie_id' => 307,
                'person_id' => 1721,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            351 => 
            array (
                'crew_id' => 357,
                'movie_id' => 308,
                'person_id' => 1649,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            352 => 
            array (
                'crew_id' => 358,
                'movie_id' => 309,
                'person_id' => 1722,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            353 => 
            array (
                'crew_id' => 359,
                'movie_id' => 310,
                'person_id' => 1722,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            354 => 
            array (
                'crew_id' => 360,
                'movie_id' => 311,
                'person_id' => 1722,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            355 => 
            array (
                'crew_id' => 361,
                'movie_id' => 312,
                'person_id' => 1723,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            356 => 
            array (
                'crew_id' => 362,
                'movie_id' => 313,
                'person_id' => 1578,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            357 => 
            array (
                'crew_id' => 363,
                'movie_id' => 314,
                'person_id' => 1724,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            358 => 
            array (
                'crew_id' => 364,
                'movie_id' => 315,
                'person_id' => 1725,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            359 => 
            array (
                'crew_id' => 365,
                'movie_id' => 316,
                'person_id' => 1726,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            360 => 
            array (
                'crew_id' => 366,
                'movie_id' => 317,
                'person_id' => 1727,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            361 => 
            array (
                'crew_id' => 367,
                'movie_id' => 318,
                'person_id' => 1728,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            362 => 
            array (
                'crew_id' => 368,
                'movie_id' => 319,
                'person_id' => 1586,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            363 => 
            array (
                'crew_id' => 369,
                'movie_id' => 320,
                'person_id' => 1691,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            364 => 
            array (
                'crew_id' => 370,
                'movie_id' => 321,
                'person_id' => 105,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            365 => 
            array (
                'crew_id' => 371,
                'movie_id' => 322,
                'person_id' => 105,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            366 => 
            array (
                'crew_id' => 372,
                'movie_id' => 323,
                'person_id' => 105,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            367 => 
            array (
                'crew_id' => 373,
                'movie_id' => 324,
                'person_id' => 1729,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            368 => 
            array (
                'crew_id' => 374,
                'movie_id' => 325,
                'person_id' => 1666,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            369 => 
            array (
                'crew_id' => 375,
                'movie_id' => 326,
                'person_id' => 1730,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            370 => 
            array (
                'crew_id' => 376,
                'movie_id' => 327,
                'person_id' => 1731,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            371 => 
            array (
                'crew_id' => 377,
                'movie_id' => 328,
                'person_id' => 1732,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            372 => 
            array (
                'crew_id' => 378,
                'movie_id' => 329,
                'person_id' => 445,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            373 => 
            array (
                'crew_id' => 379,
                'movie_id' => 330,
                'person_id' => 105,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            374 => 
            array (
                'crew_id' => 380,
                'movie_id' => 331,
                'person_id' => 1733,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            375 => 
            array (
                'crew_id' => 381,
                'movie_id' => 332,
                'person_id' => 1734,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            376 => 
            array (
                'crew_id' => 382,
                'movie_id' => 333,
                'person_id' => 1735,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            377 => 
            array (
                'crew_id' => 383,
                'movie_id' => 334,
                'person_id' => 1595,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            378 => 
            array (
                'crew_id' => 384,
                'movie_id' => 335,
                'person_id' => 1736,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            379 => 
            array (
                'crew_id' => 385,
                'movie_id' => 336,
                'person_id' => 241,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            380 => 
            array (
                'crew_id' => 386,
                'movie_id' => 337,
                'person_id' => 1737,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            381 => 
            array (
                'crew_id' => 387,
                'movie_id' => 338,
                'person_id' => 244,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            382 => 
            array (
                'crew_id' => 388,
                'movie_id' => 339,
                'person_id' => 1714,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            383 => 
            array (
                'crew_id' => 389,
                'movie_id' => 340,
                'person_id' => 1714,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            384 => 
            array (
                'crew_id' => 390,
                'movie_id' => 341,
                'person_id' => 1714,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            385 => 
            array (
                'crew_id' => 391,
                'movie_id' => 342,
                'person_id' => 1714,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            386 => 
            array (
                'crew_id' => 392,
                'movie_id' => 343,
                'person_id' => 1281,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            387 => 
            array (
                'crew_id' => 393,
                'movie_id' => 344,
                'person_id' => 1738,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            388 => 
            array (
                'crew_id' => 394,
                'movie_id' => 345,
                'person_id' => 1659,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            389 => 
            array (
                'crew_id' => 395,
                'movie_id' => 346,
                'person_id' => 1739,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            390 => 
            array (
                'crew_id' => 396,
                'movie_id' => 347,
                'person_id' => 1740,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            391 => 
            array (
                'crew_id' => 397,
                'movie_id' => 348,
                'person_id' => 1741,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            392 => 
            array (
                'crew_id' => 398,
                'movie_id' => 349,
                'person_id' => 1716,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            393 => 
            array (
                'crew_id' => 399,
                'movie_id' => 350,
                'person_id' => 1716,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            394 => 
            array (
                'crew_id' => 400,
                'movie_id' => 351,
                'person_id' => 65,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            395 => 
            array (
                'crew_id' => 401,
                'movie_id' => 352,
                'person_id' => 1714,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            396 => 
            array (
                'crew_id' => 402,
                'movie_id' => 353,
                'person_id' => 1657,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            397 => 
            array (
                'crew_id' => 403,
                'movie_id' => 354,
                'person_id' => 1657,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            398 => 
            array (
                'crew_id' => 404,
                'movie_id' => 355,
                'person_id' => 1742,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            399 => 
            array (
                'crew_id' => 405,
                'movie_id' => 356,
                'person_id' => 76,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            400 => 
            array (
                'crew_id' => 406,
                'movie_id' => 357,
                'person_id' => 76,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            401 => 
            array (
                'crew_id' => 407,
                'movie_id' => 358,
                'person_id' => 204,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            402 => 
            array (
                'crew_id' => 408,
                'movie_id' => 359,
                'person_id' => 1743,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            403 => 
            array (
                'crew_id' => 409,
                'movie_id' => 360,
                'person_id' => 1666,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            404 => 
            array (
                'crew_id' => 410,
                'movie_id' => 361,
                'person_id' => 1227,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            405 => 
            array (
                'crew_id' => 411,
                'movie_id' => 362,
                'person_id' => 1744,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            406 => 
            array (
                'crew_id' => 412,
                'movie_id' => 363,
                'person_id' => 1744,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            407 => 
            array (
                'crew_id' => 413,
                'movie_id' => 364,
                'person_id' => 1692,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            408 => 
            array (
                'crew_id' => 414,
                'movie_id' => 365,
                'person_id' => 1745,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            409 => 
            array (
                'crew_id' => 415,
                'movie_id' => 366,
                'person_id' => 1745,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            410 => 
            array (
                'crew_id' => 416,
                'movie_id' => 367,
                'person_id' => 1746,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            411 => 
            array (
                'crew_id' => 417,
                'movie_id' => 368,
                'person_id' => 1658,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            412 => 
            array (
                'crew_id' => 418,
                'movie_id' => 369,
                'person_id' => 1686,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            413 => 
            array (
                'crew_id' => 419,
                'movie_id' => 370,
                'person_id' => 1747,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            414 => 
            array (
                'crew_id' => 420,
                'movie_id' => 371,
                'person_id' => 1335,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            415 => 
            array (
                'crew_id' => 421,
                'movie_id' => 372,
                'person_id' => 1748,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            416 => 
            array (
                'crew_id' => 422,
                'movie_id' => 373,
                'person_id' => 1749,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            417 => 
            array (
                'crew_id' => 423,
                'movie_id' => 374,
                'person_id' => 1750,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            418 => 
            array (
                'crew_id' => 424,
                'movie_id' => 375,
                'person_id' => 1694,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            419 => 
            array (
                'crew_id' => 425,
                'movie_id' => 376,
                'person_id' => 1751,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            420 => 
            array (
                'crew_id' => 426,
                'movie_id' => 377,
                'person_id' => 1752,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            421 => 
            array (
                'crew_id' => 427,
                'movie_id' => 378,
                'person_id' => 1748,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            422 => 
            array (
                'crew_id' => 428,
                'movie_id' => 379,
                'person_id' => 1714,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            423 => 
            array (
                'crew_id' => 429,
                'movie_id' => 380,
                'person_id' => 1753,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            424 => 
            array (
                'crew_id' => 430,
                'movie_id' => 381,
                'person_id' => 1754,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            425 => 
            array (
                'crew_id' => 431,
                'movie_id' => 382,
                'person_id' => 1666,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            426 => 
            array (
                'crew_id' => 432,
                'movie_id' => 383,
                'person_id' => 1702,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            427 => 
            array (
                'crew_id' => 433,
                'movie_id' => 384,
                'person_id' => 1755,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            428 => 
            array (
                'crew_id' => 434,
                'movie_id' => 385,
                'person_id' => 1709,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            429 => 
            array (
                'crew_id' => 435,
                'movie_id' => 386,
                'person_id' => 1702,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            430 => 
            array (
                'crew_id' => 436,
                'movie_id' => 387,
                'person_id' => 1756,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            431 => 
            array (
                'crew_id' => 437,
                'movie_id' => 388,
                'person_id' => 1757,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            432 => 
            array (
                'crew_id' => 438,
                'movie_id' => 389,
                'person_id' => 1758,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            433 => 
            array (
                'crew_id' => 439,
                'movie_id' => 390,
                'person_id' => 44,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            434 => 
            array (
                'crew_id' => 440,
                'movie_id' => 391,
                'person_id' => 1759,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            435 => 
            array (
                'crew_id' => 441,
                'movie_id' => 392,
                'person_id' => 1578,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            436 => 
            array (
                'crew_id' => 442,
                'movie_id' => 393,
                'person_id' => 1760,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            437 => 
            array (
                'crew_id' => 443,
                'movie_id' => 394,
                'person_id' => 1760,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            438 => 
            array (
                'crew_id' => 444,
                'movie_id' => 395,
                'person_id' => 1760,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            439 => 
            array (
                'crew_id' => 445,
                'movie_id' => 396,
                'person_id' => 1761,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            440 => 
            array (
                'crew_id' => 446,
                'movie_id' => 397,
                'person_id' => 1762,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            441 => 
            array (
                'crew_id' => 447,
                'movie_id' => 398,
                'person_id' => 1569,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            442 => 
            array (
                'crew_id' => 448,
                'movie_id' => 399,
                'person_id' => 1585,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            443 => 
            array (
                'crew_id' => 449,
                'movie_id' => 400,
                'person_id' => 1763,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            444 => 
            array (
                'crew_id' => 450,
                'movie_id' => 401,
                'person_id' => 1764,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            445 => 
            array (
                'crew_id' => 451,
                'movie_id' => 402,
                'person_id' => 70,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            446 => 
            array (
                'crew_id' => 452,
                'movie_id' => 403,
                'person_id' => 1765,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            447 => 
            array (
                'crew_id' => 453,
                'movie_id' => 404,
                'person_id' => 1766,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            448 => 
            array (
                'crew_id' => 454,
                'movie_id' => 405,
                'person_id' => 1053,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            449 => 
            array (
                'crew_id' => 455,
                'movie_id' => 406,
                'person_id' => 1670,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            450 => 
            array (
                'crew_id' => 456,
                'movie_id' => 407,
                'person_id' => 1767,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            451 => 
            array (
                'crew_id' => 457,
                'movie_id' => 408,
                'person_id' => 1168,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            452 => 
            array (
                'crew_id' => 458,
                'movie_id' => 409,
                'person_id' => 1654,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            453 => 
            array (
                'crew_id' => 459,
                'movie_id' => 410,
                'person_id' => 1670,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            454 => 
            array (
                'crew_id' => 460,
                'movie_id' => 411,
                'person_id' => 1168,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            455 => 
            array (
                'crew_id' => 461,
                'movie_id' => 412,
                'person_id' => 1768,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            456 => 
            array (
                'crew_id' => 462,
                'movie_id' => 413,
                'person_id' => 1769,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            457 => 
            array (
                'crew_id' => 463,
                'movie_id' => 414,
                'person_id' => 1724,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            458 => 
            array (
                'crew_id' => 464,
                'movie_id' => 415,
                'person_id' => 1768,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            459 => 
            array (
                'crew_id' => 465,
                'movie_id' => 416,
                'person_id' => 1760,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            460 => 
            array (
                'crew_id' => 466,
                'movie_id' => 417,
                'person_id' => 1651,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            461 => 
            array (
                'crew_id' => 467,
                'movie_id' => 418,
                'person_id' => 1563,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            462 => 
            array (
                'crew_id' => 468,
                'movie_id' => 419,
                'person_id' => 1770,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            463 => 
            array (
                'crew_id' => 469,
                'movie_id' => 420,
                'person_id' => 165,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            464 => 
            array (
                'crew_id' => 470,
                'movie_id' => 421,
                'person_id' => 1771,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            465 => 
            array (
                'crew_id' => 471,
                'movie_id' => 422,
                'person_id' => 1772,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            466 => 
            array (
                'crew_id' => 472,
                'movie_id' => 423,
                'person_id' => 1773,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            467 => 
            array (
                'crew_id' => 473,
                'movie_id' => 424,
                'person_id' => 1774,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            468 => 
            array (
                'crew_id' => 474,
                'movie_id' => 425,
                'person_id' => 1775,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            469 => 
            array (
                'crew_id' => 475,
                'movie_id' => 426,
                'person_id' => 1776,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            470 => 
            array (
                'crew_id' => 476,
                'movie_id' => 427,
                'person_id' => 269,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            471 => 
            array (
                'crew_id' => 477,
                'movie_id' => 428,
                'person_id' => 1777,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            472 => 
            array (
                'crew_id' => 478,
                'movie_id' => 429,
                'person_id' => 1748,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            473 => 
            array (
                'crew_id' => 479,
                'movie_id' => 430,
                'person_id' => 1748,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            474 => 
            array (
                'crew_id' => 480,
                'movie_id' => 431,
                'person_id' => 1748,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            475 => 
            array (
                'crew_id' => 481,
                'movie_id' => 432,
                'person_id' => 1778,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            476 => 
            array (
                'crew_id' => 482,
                'movie_id' => 433,
                'person_id' => 1778,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            477 => 
            array (
                'crew_id' => 483,
                'movie_id' => 434,
                'person_id' => 1779,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            478 => 
            array (
                'crew_id' => 484,
                'movie_id' => 435,
                'person_id' => 1778,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            479 => 
            array (
                'crew_id' => 485,
                'movie_id' => 436,
                'person_id' => 1780,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            480 => 
            array (
                'crew_id' => 486,
                'movie_id' => 437,
                'person_id' => 1781,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            481 => 
            array (
                'crew_id' => 487,
                'movie_id' => 438,
                'person_id' => 1779,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            482 => 
            array (
                'crew_id' => 488,
                'movie_id' => 439,
                'person_id' => 1779,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            483 => 
            array (
                'crew_id' => 489,
                'movie_id' => 440,
                'person_id' => 1779,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            484 => 
            array (
                'crew_id' => 490,
                'movie_id' => 441,
                'person_id' => 1780,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            485 => 
            array (
                'crew_id' => 491,
                'movie_id' => 442,
                'person_id' => 1780,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            486 => 
            array (
                'crew_id' => 492,
                'movie_id' => 443,
                'person_id' => 1782,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            487 => 
            array (
                'crew_id' => 493,
                'movie_id' => 444,
                'person_id' => 1782,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            488 => 
            array (
                'crew_id' => 494,
                'movie_id' => 445,
                'person_id' => 1782,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            489 => 
            array (
                'crew_id' => 495,
                'movie_id' => 446,
                'person_id' => 1782,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            490 => 
            array (
                'crew_id' => 496,
                'movie_id' => 447,
                'person_id' => 1782,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            491 => 
            array (
                'crew_id' => 497,
                'movie_id' => 448,
                'person_id' => 1716,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            492 => 
            array (
                'crew_id' => 498,
                'movie_id' => 449,
                'person_id' => 1783,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            493 => 
            array (
                'crew_id' => 499,
                'movie_id' => 450,
                'person_id' => 1746,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            494 => 
            array (
                'crew_id' => 500,
                'movie_id' => 451,
                'person_id' => 1784,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            495 => 
            array (
                'crew_id' => 501,
                'movie_id' => 452,
                'person_id' => 1716,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            496 => 
            array (
                'crew_id' => 502,
                'movie_id' => 453,
                'person_id' => 1610,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            497 => 
            array (
                'crew_id' => 503,
                'movie_id' => 454,
                'person_id' => 1651,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            498 => 
            array (
                'crew_id' => 504,
                'movie_id' => 455,
                'person_id' => 1714,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            499 => 
            array (
                'crew_id' => 505,
                'movie_id' => 456,
                'person_id' => 1785,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
        ));
        \DB::table('crew')->insert(array (
            0 => 
            array (
                'crew_id' => 506,
                'movie_id' => 457,
                'person_id' => 270,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            1 => 
            array (
                'crew_id' => 507,
                'movie_id' => 458,
                'person_id' => 1786,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            2 => 
            array (
                'crew_id' => 508,
                'movie_id' => 459,
                'person_id' => 1787,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            3 => 
            array (
                'crew_id' => 509,
                'movie_id' => 460,
                'person_id' => 44,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            4 => 
            array (
                'crew_id' => 510,
                'movie_id' => 461,
                'person_id' => 1788,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            5 => 
            array (
                'crew_id' => 511,
                'movie_id' => 462,
                'person_id' => 1789,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            6 => 
            array (
                'crew_id' => 512,
                'movie_id' => 463,
                'person_id' => 1649,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            7 => 
            array (
                'crew_id' => 513,
                'movie_id' => 464,
                'person_id' => 1758,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            8 => 
            array (
                'crew_id' => 514,
                'movie_id' => 465,
                'person_id' => 65,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            9 => 
            array (
                'crew_id' => 515,
                'movie_id' => 466,
                'person_id' => 1790,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            10 => 
            array (
                'crew_id' => 516,
                'movie_id' => 467,
                'person_id' => 1791,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            11 => 
            array (
                'crew_id' => 517,
                'movie_id' => 468,
                'person_id' => 1792,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            12 => 
            array (
                'crew_id' => 518,
                'movie_id' => 469,
                'person_id' => 1725,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            13 => 
            array (
                'crew_id' => 519,
                'movie_id' => 470,
                'person_id' => 1738,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            14 => 
            array (
                'crew_id' => 520,
                'movie_id' => 471,
                'person_id' => 1793,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            15 => 
            array (
                'crew_id' => 521,
                'movie_id' => 472,
                'person_id' => 1794,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            16 => 
            array (
                'crew_id' => 522,
                'movie_id' => 473,
                'person_id' => 1795,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            17 => 
            array (
                'crew_id' => 523,
                'movie_id' => 474,
                'person_id' => 1508,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            18 => 
            array (
                'crew_id' => 524,
                'movie_id' => 475,
                'person_id' => 1053,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            19 => 
            array (
                'crew_id' => 525,
                'movie_id' => 477,
                'person_id' => 1699,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            20 => 
            array (
                'crew_id' => 526,
                'movie_id' => 478,
                'person_id' => 1699,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            21 => 
            array (
                'crew_id' => 527,
                'movie_id' => 479,
                'person_id' => 1699,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            22 => 
            array (
                'crew_id' => 528,
                'movie_id' => 480,
                'person_id' => 1688,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            23 => 
            array (
                'crew_id' => 529,
                'movie_id' => 481,
                'person_id' => 1588,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            24 => 
            array (
                'crew_id' => 530,
                'movie_id' => 482,
                'person_id' => 1770,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            25 => 
            array (
                'crew_id' => 531,
                'movie_id' => 483,
                'person_id' => 1796,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            26 => 
            array (
                'crew_id' => 532,
                'movie_id' => 484,
                'person_id' => 1677,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            27 => 
            array (
                'crew_id' => 533,
                'movie_id' => 485,
                'person_id' => 1714,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            28 => 
            array (
                'crew_id' => 534,
                'movie_id' => 486,
                'person_id' => 1797,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            29 => 
            array (
                'crew_id' => 535,
                'movie_id' => 487,
                'person_id' => 1613,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            30 => 
            array (
                'crew_id' => 536,
                'movie_id' => 488,
                'person_id' => 1584,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            31 => 
            array (
                'crew_id' => 537,
                'movie_id' => 489,
                'person_id' => 1798,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            32 => 
            array (
                'crew_id' => 538,
                'movie_id' => 490,
                'person_id' => 1574,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            33 => 
            array (
                'crew_id' => 539,
                'movie_id' => 491,
                'person_id' => 1799,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            34 => 
            array (
                'crew_id' => 540,
                'movie_id' => 492,
                'person_id' => 70,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            35 => 
            array (
                'crew_id' => 541,
                'movie_id' => 493,
                'person_id' => 1659,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            36 => 
            array (
                'crew_id' => 542,
                'movie_id' => 494,
                'person_id' => 1663,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            37 => 
            array (
                'crew_id' => 543,
                'movie_id' => 495,
                'person_id' => 1676,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            38 => 
            array (
                'crew_id' => 544,
                'movie_id' => 496,
                'person_id' => 1664,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            39 => 
            array (
                'crew_id' => 545,
                'movie_id' => 497,
                'person_id' => 1800,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            40 => 
            array (
                'crew_id' => 546,
                'movie_id' => 498,
                'person_id' => 39,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            41 => 
            array (
                'crew_id' => 547,
                'movie_id' => 499,
                'person_id' => 1663,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            42 => 
            array (
                'crew_id' => 548,
                'movie_id' => 500,
                'person_id' => 1801,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            43 => 
            array (
                'crew_id' => 549,
                'movie_id' => 501,
                'person_id' => 1279,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            44 => 
            array (
                'crew_id' => 550,
                'movie_id' => 502,
                'person_id' => 1689,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            45 => 
            array (
                'crew_id' => 551,
                'movie_id' => 503,
                'person_id' => 1227,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            46 => 
            array (
                'crew_id' => 552,
                'movie_id' => 504,
                'person_id' => 187,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            47 => 
            array (
                'crew_id' => 553,
                'movie_id' => 505,
                'person_id' => 269,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            48 => 
            array (
                'crew_id' => 554,
                'movie_id' => 506,
                'person_id' => 1613,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            49 => 
            array (
                'crew_id' => 555,
                'movie_id' => 507,
                'person_id' => 1670,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            50 => 
            array (
                'crew_id' => 556,
                'movie_id' => 508,
                'person_id' => 1802,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            51 => 
            array (
                'crew_id' => 557,
                'movie_id' => 509,
                'person_id' => 1802,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            52 => 
            array (
                'crew_id' => 558,
                'movie_id' => 510,
                'person_id' => 1802,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            53 => 
            array (
                'crew_id' => 559,
                'movie_id' => 511,
                'person_id' => 105,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            54 => 
            array (
                'crew_id' => 560,
                'movie_id' => 512,
                'person_id' => 165,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            55 => 
            array (
                'crew_id' => 561,
                'movie_id' => 513,
                'person_id' => 1053,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            56 => 
            array (
                'crew_id' => 562,
                'movie_id' => 514,
                'person_id' => 1803,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            57 => 
            array (
                'crew_id' => 563,
                'movie_id' => 515,
                'person_id' => 165,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            58 => 
            array (
                'crew_id' => 564,
                'movie_id' => 516,
                'person_id' => 1804,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            59 => 
            array (
                'crew_id' => 565,
                'movie_id' => 517,
                'person_id' => 1805,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            60 => 
            array (
                'crew_id' => 566,
                'movie_id' => 518,
                'person_id' => 1806,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            61 => 
            array (
                'crew_id' => 567,
                'movie_id' => 519,
                'person_id' => 1807,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            62 => 
            array (
                'crew_id' => 568,
                'movie_id' => 520,
                'person_id' => 1792,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            63 => 
            array (
                'crew_id' => 569,
                'movie_id' => 521,
                'person_id' => 1808,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            64 => 
            array (
                'crew_id' => 570,
                'movie_id' => 522,
                'person_id' => 1697,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            65 => 
            array (
                'crew_id' => 571,
                'movie_id' => 523,
                'person_id' => 1697,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            66 => 
            array (
                'crew_id' => 572,
                'movie_id' => 524,
                'person_id' => 1626,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            67 => 
            array (
                'crew_id' => 573,
                'movie_id' => 525,
                'person_id' => 1843,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            68 => 
            array (
                'crew_id' => 574,
                'movie_id' => 526,
                'person_id' => 1631,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            69 => 
            array (
                'crew_id' => 575,
                'movie_id' => 527,
                'person_id' => 1844,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            70 => 
            array (
                'crew_id' => 576,
                'movie_id' => 528,
                'person_id' => 1845,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            71 => 
            array (
                'crew_id' => 577,
                'movie_id' => 529,
                'person_id' => 1623,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            72 => 
            array (
                'crew_id' => 578,
                'movie_id' => 530,
                'person_id' => 1626,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            73 => 
            array (
                'crew_id' => 579,
                'movie_id' => 531,
                'person_id' => 1846,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            74 => 
            array (
                'crew_id' => 580,
                'movie_id' => 532,
                'person_id' => 1631,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            75 => 
            array (
                'crew_id' => 581,
                'movie_id' => 533,
                'person_id' => 1847,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            76 => 
            array (
                'crew_id' => 582,
                'movie_id' => 534,
                'person_id' => 1848,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            77 => 
            array (
                'crew_id' => 583,
                'movie_id' => 535,
                'person_id' => 1849,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            78 => 
            array (
                'crew_id' => 584,
                'movie_id' => 536,
                'person_id' => 1850,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            79 => 
            array (
                'crew_id' => 585,
                'movie_id' => 537,
                'person_id' => 1851,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            80 => 
            array (
                'crew_id' => 586,
                'movie_id' => 538,
                'person_id' => 1626,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            81 => 
            array (
                'crew_id' => 587,
                'movie_id' => 539,
                'person_id' => 1852,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            82 => 
            array (
                'crew_id' => 588,
                'movie_id' => 540,
                'person_id' => 1853,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            83 => 
            array (
                'crew_id' => 589,
                'movie_id' => 541,
                'person_id' => 1854,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            84 => 
            array (
                'crew_id' => 590,
                'movie_id' => 542,
                'person_id' => 1851,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            85 => 
            array (
                'crew_id' => 591,
                'movie_id' => 543,
                'person_id' => 1855,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            86 => 
            array (
                'crew_id' => 592,
                'movie_id' => 544,
                'person_id' => 1856,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            87 => 
            array (
                'crew_id' => 593,
                'movie_id' => 545,
                'person_id' => 1848,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            88 => 
            array (
                'crew_id' => 594,
                'movie_id' => 546,
                'person_id' => 1617,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            89 => 
            array (
                'crew_id' => 595,
                'movie_id' => 547,
                'person_id' => 1631,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            90 => 
            array (
                'crew_id' => 596,
                'movie_id' => 548,
                'person_id' => 1846,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            91 => 
            array (
                'crew_id' => 597,
                'movie_id' => 549,
                'person_id' => 1857,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            92 => 
            array (
                'crew_id' => 598,
                'movie_id' => 550,
                'person_id' => 1638,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            93 => 
            array (
                'crew_id' => 599,
                'movie_id' => 551,
                'person_id' => 1858,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            94 => 
            array (
                'crew_id' => 600,
                'movie_id' => 552,
                'person_id' => 1859,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            95 => 
            array (
                'crew_id' => 601,
                'movie_id' => 553,
                'person_id' => 1627,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            96 => 
            array (
                'crew_id' => 602,
                'movie_id' => 554,
                'person_id' => 1860,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            97 => 
            array (
                'crew_id' => 603,
                'movie_id' => 555,
                'person_id' => 1631,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            98 => 
            array (
                'crew_id' => 604,
                'movie_id' => 556,
                'person_id' => 1843,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            99 => 
            array (
                'crew_id' => 605,
                'movie_id' => 557,
                'person_id' => 1861,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            100 => 
            array (
                'crew_id' => 606,
                'movie_id' => 558,
                'person_id' => 1862,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            101 => 
            array (
                'crew_id' => 607,
                'movie_id' => 559,
                'person_id' => 1626,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            102 => 
            array (
                'crew_id' => 608,
                'movie_id' => 560,
                'person_id' => 1622,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            103 => 
            array (
                'crew_id' => 609,
                'movie_id' => 561,
                'person_id' => 1863,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            104 => 
            array (
                'crew_id' => 610,
                'movie_id' => 562,
                'person_id' => 1864,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            105 => 
            array (
                'crew_id' => 611,
                'movie_id' => 563,
                'person_id' => 1846,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            106 => 
            array (
                'crew_id' => 612,
                'movie_id' => 564,
                'person_id' => 1626,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            107 => 
            array (
                'crew_id' => 613,
                'movie_id' => 565,
                'person_id' => 1846,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            108 => 
            array (
                'crew_id' => 614,
                'movie_id' => 566,
                'person_id' => 1625,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            109 => 
            array (
                'crew_id' => 615,
                'movie_id' => 567,
                'person_id' => 1865,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            110 => 
            array (
                'crew_id' => 616,
                'movie_id' => 568,
                'person_id' => 1860,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            111 => 
            array (
                'crew_id' => 617,
                'movie_id' => 569,
                'person_id' => 1917,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            112 => 
            array (
                'crew_id' => 618,
                'movie_id' => 570,
                'person_id' => 1860,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            113 => 
            array (
                'crew_id' => 619,
                'movie_id' => 571,
                'person_id' => 1918,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            114 => 
            array (
                'crew_id' => 620,
                'movie_id' => 572,
                'person_id' => 1919,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            115 => 
            array (
                'crew_id' => 621,
                'movie_id' => 573,
                'person_id' => 1920,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            116 => 
            array (
                'crew_id' => 622,
                'movie_id' => 574,
                'person_id' => 1741,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            117 => 
            array (
                'crew_id' => 623,
                'movie_id' => 575,
                'person_id' => 1600,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            118 => 
            array (
                'crew_id' => 624,
                'movie_id' => 576,
                'person_id' => 1921,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            119 => 
            array (
                'crew_id' => 625,
                'movie_id' => 577,
                'person_id' => 1922,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            120 => 
            array (
                'crew_id' => 626,
                'movie_id' => 578,
                'person_id' => 1923,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            121 => 
            array (
                'crew_id' => 627,
                'movie_id' => 579,
                'person_id' => 1924,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            122 => 
            array (
                'crew_id' => 628,
                'movie_id' => 580,
                'person_id' => 1925,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            123 => 
            array (
                'crew_id' => 629,
                'movie_id' => 582,
                'person_id' => 1926,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            124 => 
            array (
                'crew_id' => 630,
                'movie_id' => 583,
                'person_id' => 1927,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            125 => 
            array (
                'crew_id' => 631,
                'movie_id' => 584,
                'person_id' => 1928,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            126 => 
            array (
                'crew_id' => 632,
                'movie_id' => 585,
                'person_id' => 1929,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            127 => 
            array (
                'crew_id' => 633,
                'movie_id' => 586,
                'person_id' => 1930,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            128 => 
            array (
                'crew_id' => 634,
                'movie_id' => 587,
                'person_id' => 1931,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            129 => 
            array (
                'crew_id' => 635,
                'movie_id' => 588,
                'person_id' => 1932,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            130 => 
            array (
                'crew_id' => 636,
                'movie_id' => 589,
                'person_id' => 1932,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            131 => 
            array (
                'crew_id' => 637,
                'movie_id' => 590,
                'person_id' => 1933,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            132 => 
            array (
                'crew_id' => 638,
                'movie_id' => 591,
                'person_id' => 1934,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            133 => 
            array (
                'crew_id' => 639,
                'movie_id' => 592,
                'person_id' => 1745,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            134 => 
            array (
                'crew_id' => 640,
                'movie_id' => 593,
                'person_id' => 1745,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            135 => 
            array (
                'crew_id' => 641,
                'movie_id' => 594,
                'person_id' => 1935,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            136 => 
            array (
                'crew_id' => 642,
                'movie_id' => 595,
                'person_id' => 1936,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            137 => 
            array (
                'crew_id' => 643,
                'movie_id' => 596,
                'person_id' => 1937,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            138 => 
            array (
                'crew_id' => 644,
                'movie_id' => 597,
                'person_id' => 1109,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            139 => 
            array (
                'crew_id' => 645,
                'movie_id' => 598,
                'person_id' => 1938,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            140 => 
            array (
                'crew_id' => 646,
                'movie_id' => 599,
                'person_id' => 1939,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            141 => 
            array (
                'crew_id' => 647,
                'movie_id' => 600,
                'person_id' => 1940,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            142 => 
            array (
                'crew_id' => 648,
                'movie_id' => 601,
                'person_id' => 1940,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            143 => 
            array (
                'crew_id' => 649,
                'movie_id' => 602,
                'person_id' => 1940,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            144 => 
            array (
                'crew_id' => 650,
                'movie_id' => 603,
                'person_id' => 1940,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            145 => 
            array (
                'crew_id' => 651,
                'movie_id' => 604,
                'person_id' => 1795,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            146 => 
            array (
                'crew_id' => 652,
                'movie_id' => 605,
                'person_id' => 1941,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            147 => 
            array (
                'crew_id' => 653,
                'movie_id' => 606,
                'person_id' => 570,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            148 => 
            array (
                'crew_id' => 654,
                'movie_id' => 607,
                'person_id' => 570,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            149 => 
            array (
                'crew_id' => 655,
                'movie_id' => 608,
                'person_id' => 1878,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            150 => 
            array (
                'crew_id' => 656,
                'movie_id' => 609,
                'person_id' => 1941,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            151 => 
            array (
                'crew_id' => 657,
                'movie_id' => 610,
                'person_id' => 1942,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            152 => 
            array (
                'crew_id' => 658,
                'movie_id' => 611,
                'person_id' => 1897,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            153 => 
            array (
                'crew_id' => 659,
                'movie_id' => 612,
                'person_id' => 1897,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            154 => 
            array (
                'crew_id' => 660,
                'movie_id' => 613,
                'person_id' => 1943,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            155 => 
            array (
                'crew_id' => 661,
                'movie_id' => 615,
                'person_id' => 1944,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            156 => 
            array (
                'crew_id' => 662,
                'movie_id' => 616,
                'person_id' => 30,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            157 => 
            array (
                'crew_id' => 663,
                'movie_id' => 617,
                'person_id' => 1584,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            158 => 
            array (
                'crew_id' => 664,
                'movie_id' => 646,
                'person_id' => 1991,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            159 => 
            array (
                'crew_id' => 665,
                'movie_id' => 670,
                'person_id' => 1725,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            160 => 
            array (
                'crew_id' => 666,
                'movie_id' => 706,
                'person_id' => 53,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            161 => 
            array (
                'crew_id' => 667,
                'movie_id' => 707,
                'person_id' => 1676,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            162 => 
            array (
                'crew_id' => 668,
                'movie_id' => 708,
                'person_id' => 2073,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            163 => 
            array (
                'crew_id' => 669,
                'movie_id' => 709,
                'person_id' => 1579,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            164 => 
            array (
                'crew_id' => 670,
                'movie_id' => 710,
                'person_id' => 1638,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            165 => 
            array (
                'crew_id' => 671,
                'movie_id' => 711,
                'person_id' => 1167,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            166 => 
            array (
                'crew_id' => 672,
                'movie_id' => 712,
                'person_id' => 1636,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            167 => 
            array (
                'crew_id' => 673,
                'movie_id' => 713,
                'person_id' => 30,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            168 => 
            array (
                'crew_id' => 674,
                'movie_id' => 714,
                'person_id' => 2074,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            169 => 
            array (
                'crew_id' => 675,
                'movie_id' => 715,
                'person_id' => 2074,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            170 => 
            array (
                'crew_id' => 676,
                'movie_id' => 719,
                'person_id' => 2085,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            171 => 
            array (
                'crew_id' => 677,
                'movie_id' => 720,
                'person_id' => 2086,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            172 => 
            array (
                'crew_id' => 678,
                'movie_id' => 721,
                'person_id' => 1697,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            173 => 
            array (
                'crew_id' => 679,
                'movie_id' => 722,
                'person_id' => 2087,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            174 => 
            array (
                'crew_id' => 680,
                'movie_id' => 723,
                'person_id' => 2088,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            175 => 
            array (
                'crew_id' => 681,
                'movie_id' => 724,
                'person_id' => 2089,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            176 => 
            array (
                'crew_id' => 682,
                'movie_id' => 725,
                'person_id' => 2090,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            177 => 
            array (
                'crew_id' => 683,
                'movie_id' => 726,
                'person_id' => 2088,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            178 => 
            array (
                'crew_id' => 684,
                'movie_id' => 727,
                'person_id' => 2091,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            179 => 
            array (
                'crew_id' => 685,
                'movie_id' => 728,
                'person_id' => 2092,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            180 => 
            array (
                'crew_id' => 686,
                'movie_id' => 729,
                'person_id' => 2093,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            181 => 
            array (
                'crew_id' => 687,
                'movie_id' => 730,
                'person_id' => 2090,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            182 => 
            array (
                'crew_id' => 688,
                'movie_id' => 731,
                'person_id' => 2094,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            183 => 
            array (
                'crew_id' => 689,
                'movie_id' => 732,
                'person_id' => 2094,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            184 => 
            array (
                'crew_id' => 690,
                'movie_id' => 733,
                'person_id' => 2088,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            185 => 
            array (
                'crew_id' => 691,
                'movie_id' => 734,
                'person_id' => 2088,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            186 => 
            array (
                'crew_id' => 692,
                'movie_id' => 735,
                'person_id' => 2095,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            187 => 
            array (
                'crew_id' => 693,
                'movie_id' => 736,
                'person_id' => 2094,
                'position' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
        ));
        
        
    }
}
