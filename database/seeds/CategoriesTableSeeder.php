<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'category_id' => 1,
                'movie_id' => 1,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            1 => 
            array (
                'category_id' => 2,
                'movie_id' => 1,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            2 => 
            array (
                'category_id' => 3,
                'movie_id' => 1,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            3 => 
            array (
                'category_id' => 4,
                'movie_id' => 1,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            4 => 
            array (
                'category_id' => 5,
                'movie_id' => 2,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            5 => 
            array (
                'category_id' => 6,
                'movie_id' => 2,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            6 => 
            array (
                'category_id' => 7,
                'movie_id' => 2,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            7 => 
            array (
                'category_id' => 8,
                'movie_id' => 3,
                'genre_id' => 16,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            8 => 
            array (
                'category_id' => 9,
                'movie_id' => 3,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            9 => 
            array (
                'category_id' => 10,
                'movie_id' => 4,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            10 => 
            array (
                'category_id' => 11,
                'movie_id' => 4,
                'genre_id' => 16,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            11 => 
            array (
                'category_id' => 12,
                'movie_id' => 4,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            12 => 
            array (
                'category_id' => 13,
                'movie_id' => 5,
                'genre_id' => 16,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            13 => 
            array (
                'category_id' => 14,
                'movie_id' => 5,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            14 => 
            array (
                'category_id' => 15,
                'movie_id' => 6,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            15 => 
            array (
                'category_id' => 16,
                'movie_id' => 6,
                'genre_id' => 16,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            16 => 
            array (
                'category_id' => 17,
                'movie_id' => 6,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            17 => 
            array (
                'category_id' => 18,
                'movie_id' => 7,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            18 => 
            array (
                'category_id' => 19,
                'movie_id' => 8,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            19 => 
            array (
                'category_id' => 20,
                'movie_id' => 8,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            20 => 
            array (
                'category_id' => 21,
                'movie_id' => 9,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            21 => 
            array (
                'category_id' => 22,
                'movie_id' => 9,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            22 => 
            array (
                'category_id' => 23,
                'movie_id' => 10,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            23 => 
            array (
                'category_id' => 24,
                'movie_id' => 10,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            24 => 
            array (
                'category_id' => 25,
                'movie_id' => 10,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            25 => 
            array (
                'category_id' => 26,
                'movie_id' => 10,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            26 => 
            array (
                'category_id' => 27,
                'movie_id' => 11,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            27 => 
            array (
                'category_id' => 28,
                'movie_id' => 11,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            28 => 
            array (
                'category_id' => 29,
                'movie_id' => 11,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            29 => 
            array (
                'category_id' => 30,
                'movie_id' => 12,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            30 => 
            array (
                'category_id' => 31,
                'movie_id' => 12,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            31 => 
            array (
                'category_id' => 32,
                'movie_id' => 12,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            32 => 
            array (
                'category_id' => 33,
                'movie_id' => 13,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            33 => 
            array (
                'category_id' => 34,
                'movie_id' => 13,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            34 => 
            array (
                'category_id' => 35,
                'movie_id' => 14,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            35 => 
            array (
                'category_id' => 36,
                'movie_id' => 14,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            36 => 
            array (
                'category_id' => 37,
                'movie_id' => 14,
                'genre_id' => 14,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            37 => 
            array (
                'category_id' => 38,
                'movie_id' => 14,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            38 => 
            array (
                'category_id' => 39,
                'movie_id' => 15,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            39 => 
            array (
                'category_id' => 40,
                'movie_id' => 15,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            40 => 
            array (
                'category_id' => 41,
                'movie_id' => 15,
                'genre_id' => 14,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            41 => 
            array (
                'category_id' => 42,
                'movie_id' => 15,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            42 => 
            array (
                'category_id' => 43,
                'movie_id' => 16,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            43 => 
            array (
                'category_id' => 44,
                'movie_id' => 16,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            44 => 
            array (
                'category_id' => 45,
                'movie_id' => 17,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            45 => 
            array (
                'category_id' => 46,
                'movie_id' => 17,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            46 => 
            array (
                'category_id' => 47,
                'movie_id' => 17,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            47 => 
            array (
                'category_id' => 48,
                'movie_id' => 17,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            48 => 
            array (
                'category_id' => 49,
                'movie_id' => 17,
                'genre_id' => 19,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            49 => 
            array (
                'category_id' => 50,
                'movie_id' => 18,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            50 => 
            array (
                'category_id' => 51,
                'movie_id' => 18,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            51 => 
            array (
                'category_id' => 52,
                'movie_id' => 18,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            52 => 
            array (
                'category_id' => 53,
                'movie_id' => 19,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            53 => 
            array (
                'category_id' => 54,
                'movie_id' => 19,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            54 => 
            array (
                'category_id' => 55,
                'movie_id' => 19,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            55 => 
            array (
                'category_id' => 56,
                'movie_id' => 20,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            56 => 
            array (
                'category_id' => 57,
                'movie_id' => 20,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            57 => 
            array (
                'category_id' => 58,
                'movie_id' => 20,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            58 => 
            array (
                'category_id' => 59,
                'movie_id' => 20,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            59 => 
            array (
                'category_id' => 60,
                'movie_id' => 21,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            60 => 
            array (
                'category_id' => 61,
                'movie_id' => 21,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            61 => 
            array (
                'category_id' => 62,
                'movie_id' => 21,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            62 => 
            array (
                'category_id' => 63,
                'movie_id' => 21,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            63 => 
            array (
                'category_id' => 64,
                'movie_id' => 22,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            64 => 
            array (
                'category_id' => 65,
                'movie_id' => 22,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            65 => 
            array (
                'category_id' => 66,
                'movie_id' => 22,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            66 => 
            array (
                'category_id' => 67,
                'movie_id' => 23,
                'genre_id' => 4,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            67 => 
            array (
                'category_id' => 68,
                'movie_id' => 23,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            68 => 
            array (
                'category_id' => 69,
                'movie_id' => 23,
                'genre_id' => 15,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            69 => 
            array (
                'category_id' => 70,
                'movie_id' => 23,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            70 => 
            array (
                'category_id' => 71,
                'movie_id' => 24,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            71 => 
            array (
                'category_id' => 72,
                'movie_id' => 24,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            72 => 
            array (
                'category_id' => 73,
                'movie_id' => 24,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            73 => 
            array (
                'category_id' => 74,
                'movie_id' => 24,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            74 => 
            array (
                'category_id' => 75,
                'movie_id' => 25,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            75 => 
            array (
                'category_id' => 76,
                'movie_id' => 25,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            76 => 
            array (
                'category_id' => 77,
                'movie_id' => 25,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            77 => 
            array (
                'category_id' => 78,
                'movie_id' => 26,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            78 => 
            array (
                'category_id' => 79,
                'movie_id' => 26,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            79 => 
            array (
                'category_id' => 80,
                'movie_id' => 26,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            80 => 
            array (
                'category_id' => 81,
                'movie_id' => 27,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            81 => 
            array (
                'category_id' => 82,
                'movie_id' => 27,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            82 => 
            array (
                'category_id' => 83,
                'movie_id' => 27,
                'genre_id' => 28,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            83 => 
            array (
                'category_id' => 84,
                'movie_id' => 28,
                'genre_id' => 9,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            84 => 
            array (
                'category_id' => 85,
                'movie_id' => 28,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            85 => 
            array (
                'category_id' => 86,
                'movie_id' => 28,
                'genre_id' => 4,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            86 => 
            array (
                'category_id' => 87,
                'movie_id' => 28,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            87 => 
            array (
                'category_id' => 88,
                'movie_id' => 29,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            88 => 
            array (
                'category_id' => 89,
                'movie_id' => 29,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            89 => 
            array (
                'category_id' => 90,
                'movie_id' => 29,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            90 => 
            array (
                'category_id' => 91,
                'movie_id' => 30,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            91 => 
            array (
                'category_id' => 92,
                'movie_id' => 30,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            92 => 
            array (
                'category_id' => 93,
                'movie_id' => 31,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            93 => 
            array (
                'category_id' => 94,
                'movie_id' => 31,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            94 => 
            array (
                'category_id' => 95,
                'movie_id' => 32,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            95 => 
            array (
                'category_id' => 96,
                'movie_id' => 32,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            96 => 
            array (
                'category_id' => 97,
                'movie_id' => 33,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            97 => 
            array (
                'category_id' => 98,
                'movie_id' => 33,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            98 => 
            array (
                'category_id' => 99,
                'movie_id' => 33,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            99 => 
            array (
                'category_id' => 100,
                'movie_id' => 34,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            100 => 
            array (
                'category_id' => 101,
                'movie_id' => 34,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            101 => 
            array (
                'category_id' => 102,
                'movie_id' => 35,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            102 => 
            array (
                'category_id' => 103,
                'movie_id' => 35,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            103 => 
            array (
                'category_id' => 104,
                'movie_id' => 36,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            104 => 
            array (
                'category_id' => 105,
                'movie_id' => 36,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            105 => 
            array (
                'category_id' => 106,
                'movie_id' => 37,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            106 => 
            array (
                'category_id' => 107,
                'movie_id' => 37,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            107 => 
            array (
                'category_id' => 108,
                'movie_id' => 37,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            108 => 
            array (
                'category_id' => 109,
                'movie_id' => 38,
                'genre_id' => 16,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            109 => 
            array (
                'category_id' => 110,
                'movie_id' => 38,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            110 => 
            array (
                'category_id' => 111,
                'movie_id' => 38,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            111 => 
            array (
                'category_id' => 112,
                'movie_id' => 39,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            112 => 
            array (
                'category_id' => 113,
                'movie_id' => 39,
                'genre_id' => 16,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            113 => 
            array (
                'category_id' => 114,
                'movie_id' => 40,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            114 => 
            array (
                'category_id' => 115,
                'movie_id' => 40,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            115 => 
            array (
                'category_id' => 116,
                'movie_id' => 41,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            116 => 
            array (
                'category_id' => 117,
                'movie_id' => 41,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            117 => 
            array (
                'category_id' => 118,
                'movie_id' => 41,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            118 => 
            array (
                'category_id' => 119,
                'movie_id' => 42,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            119 => 
            array (
                'category_id' => 120,
                'movie_id' => 42,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            120 => 
            array (
                'category_id' => 121,
                'movie_id' => 42,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            121 => 
            array (
                'category_id' => 122,
                'movie_id' => 43,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            122 => 
            array (
                'category_id' => 123,
                'movie_id' => 44,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            123 => 
            array (
                'category_id' => 124,
                'movie_id' => 44,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            124 => 
            array (
                'category_id' => 125,
                'movie_id' => 44,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            125 => 
            array (
                'category_id' => 126,
                'movie_id' => 45,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            126 => 
            array (
                'category_id' => 127,
                'movie_id' => 45,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            127 => 
            array (
                'category_id' => 128,
                'movie_id' => 45,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            128 => 
            array (
                'category_id' => 129,
                'movie_id' => 46,
                'genre_id' => 4,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            129 => 
            array (
                'category_id' => 130,
                'movie_id' => 46,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            130 => 
            array (
                'category_id' => 131,
                'movie_id' => 46,
                'genre_id' => 30,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            131 => 
            array (
                'category_id' => 132,
                'movie_id' => 46,
                'genre_id' => 19,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            132 => 
            array (
                'category_id' => 133,
                'movie_id' => 47,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            133 => 
            array (
                'category_id' => 134,
                'movie_id' => 47,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            134 => 
            array (
                'category_id' => 135,
                'movie_id' => 48,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            135 => 
            array (
                'category_id' => 136,
                'movie_id' => 48,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            136 => 
            array (
                'category_id' => 137,
                'movie_id' => 49,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            137 => 
            array (
                'category_id' => 138,
                'movie_id' => 49,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            138 => 
            array (
                'category_id' => 139,
                'movie_id' => 50,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            139 => 
            array (
                'category_id' => 140,
                'movie_id' => 50,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            140 => 
            array (
                'category_id' => 141,
                'movie_id' => 50,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            141 => 
            array (
                'category_id' => 142,
                'movie_id' => 50,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            142 => 
            array (
                'category_id' => 143,
                'movie_id' => 50,
                'genre_id' => 19,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            143 => 
            array (
                'category_id' => 144,
                'movie_id' => 50,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            144 => 
            array (
                'category_id' => 145,
                'movie_id' => 51,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            145 => 
            array (
                'category_id' => 146,
                'movie_id' => 51,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            146 => 
            array (
                'category_id' => 147,
                'movie_id' => 52,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            147 => 
            array (
                'category_id' => 148,
                'movie_id' => 52,
                'genre_id' => 28,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            148 => 
            array (
                'category_id' => 149,
                'movie_id' => 53,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            149 => 
            array (
                'category_id' => 150,
                'movie_id' => 53,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            150 => 
            array (
                'category_id' => 151,
                'movie_id' => 54,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            151 => 
            array (
                'category_id' => 152,
                'movie_id' => 54,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            152 => 
            array (
                'category_id' => 153,
                'movie_id' => 54,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            153 => 
            array (
                'category_id' => 154,
                'movie_id' => 55,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            154 => 
            array (
                'category_id' => 155,
                'movie_id' => 55,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            155 => 
            array (
                'category_id' => 156,
                'movie_id' => 55,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            156 => 
            array (
                'category_id' => 157,
                'movie_id' => 56,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            157 => 
            array (
                'category_id' => 158,
                'movie_id' => 56,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            158 => 
            array (
                'category_id' => 159,
                'movie_id' => 56,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            159 => 
            array (
                'category_id' => 160,
                'movie_id' => 57,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            160 => 
            array (
                'category_id' => 161,
                'movie_id' => 57,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            161 => 
            array (
                'category_id' => 162,
                'movie_id' => 57,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            162 => 
            array (
                'category_id' => 163,
                'movie_id' => 58,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            163 => 
            array (
                'category_id' => 164,
                'movie_id' => 58,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            164 => 
            array (
                'category_id' => 165,
                'movie_id' => 58,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            165 => 
            array (
                'category_id' => 166,
                'movie_id' => 58,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            166 => 
            array (
                'category_id' => 167,
                'movie_id' => 59,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            167 => 
            array (
                'category_id' => 168,
                'movie_id' => 59,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            168 => 
            array (
                'category_id' => 169,
                'movie_id' => 59,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            169 => 
            array (
                'category_id' => 170,
                'movie_id' => 59,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            170 => 
            array (
                'category_id' => 171,
                'movie_id' => 60,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            171 => 
            array (
                'category_id' => 172,
                'movie_id' => 60,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            172 => 
            array (
                'category_id' => 173,
                'movie_id' => 60,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            173 => 
            array (
                'category_id' => 174,
                'movie_id' => 60,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            174 => 
            array (
                'category_id' => 175,
                'movie_id' => 61,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            175 => 
            array (
                'category_id' => 176,
                'movie_id' => 61,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            176 => 
            array (
                'category_id' => 177,
                'movie_id' => 61,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            177 => 
            array (
                'category_id' => 178,
                'movie_id' => 61,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            178 => 
            array (
                'category_id' => 179,
                'movie_id' => 62,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            179 => 
            array (
                'category_id' => 180,
                'movie_id' => 62,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            180 => 
            array (
                'category_id' => 181,
                'movie_id' => 62,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            181 => 
            array (
                'category_id' => 182,
                'movie_id' => 62,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            182 => 
            array (
                'category_id' => 183,
                'movie_id' => 63,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            183 => 
            array (
                'category_id' => 184,
                'movie_id' => 63,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            184 => 
            array (
                'category_id' => 185,
                'movie_id' => 63,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            185 => 
            array (
                'category_id' => 186,
                'movie_id' => 63,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            186 => 
            array (
                'category_id' => 187,
                'movie_id' => 64,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            187 => 
            array (
                'category_id' => 188,
                'movie_id' => 64,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            188 => 
            array (
                'category_id' => 189,
                'movie_id' => 64,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            189 => 
            array (
                'category_id' => 190,
                'movie_id' => 64,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            190 => 
            array (
                'category_id' => 191,
                'movie_id' => 65,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            191 => 
            array (
                'category_id' => 192,
                'movie_id' => 65,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            192 => 
            array (
                'category_id' => 193,
                'movie_id' => 65,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            193 => 
            array (
                'category_id' => 194,
                'movie_id' => 65,
                'genre_id' => 16,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            194 => 
            array (
                'category_id' => 195,
                'movie_id' => 65,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            195 => 
            array (
                'category_id' => 196,
                'movie_id' => 66,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            196 => 
            array (
                'category_id' => 197,
                'movie_id' => 67,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            197 => 
            array (
                'category_id' => 198,
                'movie_id' => 67,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            198 => 
            array (
                'category_id' => 199,
                'movie_id' => 67,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            199 => 
            array (
                'category_id' => 200,
                'movie_id' => 67,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            200 => 
            array (
                'category_id' => 201,
                'movie_id' => 67,
                'genre_id' => 27,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            201 => 
            array (
                'category_id' => 202,
                'movie_id' => 68,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            202 => 
            array (
                'category_id' => 203,
                'movie_id' => 68,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            203 => 
            array (
                'category_id' => 204,
                'movie_id' => 68,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            204 => 
            array (
                'category_id' => 205,
                'movie_id' => 68,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            205 => 
            array (
                'category_id' => 206,
                'movie_id' => 69,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            206 => 
            array (
                'category_id' => 207,
                'movie_id' => 69,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            207 => 
            array (
                'category_id' => 208,
                'movie_id' => 69,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            208 => 
            array (
                'category_id' => 209,
                'movie_id' => 70,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            209 => 
            array (
                'category_id' => 210,
                'movie_id' => 70,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            210 => 
            array (
                'category_id' => 211,
                'movie_id' => 70,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            211 => 
            array (
                'category_id' => 212,
                'movie_id' => 71,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            212 => 
            array (
                'category_id' => 213,
                'movie_id' => 71,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            213 => 
            array (
                'category_id' => 214,
                'movie_id' => 71,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            214 => 
            array (
                'category_id' => 215,
                'movie_id' => 71,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            215 => 
            array (
                'category_id' => 216,
                'movie_id' => 72,
                'genre_id' => 4,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            216 => 
            array (
                'category_id' => 217,
                'movie_id' => 72,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            217 => 
            array (
                'category_id' => 218,
                'movie_id' => 72,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            218 => 
            array (
                'category_id' => 219,
                'movie_id' => 72,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            219 => 
            array (
                'category_id' => 220,
                'movie_id' => 72,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            220 => 
            array (
                'category_id' => 221,
                'movie_id' => 73,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            221 => 
            array (
                'category_id' => 222,
                'movie_id' => 73,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            222 => 
            array (
                'category_id' => 223,
                'movie_id' => 73,
                'genre_id' => 27,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            223 => 
            array (
                'category_id' => 224,
                'movie_id' => 74,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            224 => 
            array (
                'category_id' => 225,
                'movie_id' => 74,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            225 => 
            array (
                'category_id' => 226,
                'movie_id' => 74,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            226 => 
            array (
                'category_id' => 227,
                'movie_id' => 74,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            227 => 
            array (
                'category_id' => 228,
                'movie_id' => 76,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            228 => 
            array (
                'category_id' => 229,
                'movie_id' => 76,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            229 => 
            array (
                'category_id' => 230,
                'movie_id' => 76,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            230 => 
            array (
                'category_id' => 231,
                'movie_id' => 77,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            231 => 
            array (
                'category_id' => 232,
                'movie_id' => 77,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            232 => 
            array (
                'category_id' => 233,
                'movie_id' => 77,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            233 => 
            array (
                'category_id' => 234,
                'movie_id' => 78,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            234 => 
            array (
                'category_id' => 235,
                'movie_id' => 78,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            235 => 
            array (
                'category_id' => 236,
                'movie_id' => 79,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            236 => 
            array (
                'category_id' => 237,
                'movie_id' => 79,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            237 => 
            array (
                'category_id' => 238,
                'movie_id' => 79,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            238 => 
            array (
                'category_id' => 239,
                'movie_id' => 79,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            239 => 
            array (
                'category_id' => 240,
                'movie_id' => 80,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            240 => 
            array (
                'category_id' => 241,
                'movie_id' => 80,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            241 => 
            array (
                'category_id' => 242,
                'movie_id' => 80,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            242 => 
            array (
                'category_id' => 243,
                'movie_id' => 81,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            243 => 
            array (
                'category_id' => 244,
                'movie_id' => 81,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            244 => 
            array (
                'category_id' => 245,
                'movie_id' => 81,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            245 => 
            array (
                'category_id' => 246,
                'movie_id' => 82,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            246 => 
            array (
                'category_id' => 247,
                'movie_id' => 82,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            247 => 
            array (
                'category_id' => 248,
                'movie_id' => 82,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            248 => 
            array (
                'category_id' => 249,
                'movie_id' => 83,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            249 => 
            array (
                'category_id' => 250,
                'movie_id' => 83,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            250 => 
            array (
                'category_id' => 251,
                'movie_id' => 83,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            251 => 
            array (
                'category_id' => 252,
                'movie_id' => 83,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            252 => 
            array (
                'category_id' => 253,
                'movie_id' => 84,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            253 => 
            array (
                'category_id' => 254,
                'movie_id' => 84,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            254 => 
            array (
                'category_id' => 255,
                'movie_id' => 85,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            255 => 
            array (
                'category_id' => 256,
                'movie_id' => 85,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            256 => 
            array (
                'category_id' => 257,
                'movie_id' => 85,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            257 => 
            array (
                'category_id' => 258,
                'movie_id' => 85,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            258 => 
            array (
                'category_id' => 259,
                'movie_id' => 85,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            259 => 
            array (
                'category_id' => 260,
                'movie_id' => 86,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            260 => 
            array (
                'category_id' => 261,
                'movie_id' => 86,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            261 => 
            array (
                'category_id' => 262,
                'movie_id' => 86,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            262 => 
            array (
                'category_id' => 263,
                'movie_id' => 87,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            263 => 
            array (
                'category_id' => 264,
                'movie_id' => 87,
                'genre_id' => 4,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            264 => 
            array (
                'category_id' => 265,
                'movie_id' => 87,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            265 => 
            array (
                'category_id' => 266,
                'movie_id' => 87,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            266 => 
            array (
                'category_id' => 267,
                'movie_id' => 87,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            267 => 
            array (
                'category_id' => 268,
                'movie_id' => 88,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            268 => 
            array (
                'category_id' => 269,
                'movie_id' => 89,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            269 => 
            array (
                'category_id' => 270,
                'movie_id' => 89,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            270 => 
            array (
                'category_id' => 271,
                'movie_id' => 89,
                'genre_id' => 27,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            271 => 
            array (
                'category_id' => 272,
                'movie_id' => 90,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            272 => 
            array (
                'category_id' => 273,
                'movie_id' => 90,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            273 => 
            array (
                'category_id' => 274,
                'movie_id' => 90,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            274 => 
            array (
                'category_id' => 275,
                'movie_id' => 91,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            275 => 
            array (
                'category_id' => 276,
                'movie_id' => 91,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            276 => 
            array (
                'category_id' => 277,
                'movie_id' => 91,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            277 => 
            array (
                'category_id' => 278,
                'movie_id' => 91,
                'genre_id' => 15,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            278 => 
            array (
                'category_id' => 279,
                'movie_id' => 91,
                'genre_id' => 27,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            279 => 
            array (
                'category_id' => 280,
                'movie_id' => 92,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            280 => 
            array (
                'category_id' => 281,
                'movie_id' => 92,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            281 => 
            array (
                'category_id' => 282,
                'movie_id' => 92,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            282 => 
            array (
                'category_id' => 283,
                'movie_id' => 92,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            283 => 
            array (
                'category_id' => 284,
                'movie_id' => 93,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            284 => 
            array (
                'category_id' => 285,
                'movie_id' => 93,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            285 => 
            array (
                'category_id' => 286,
                'movie_id' => 93,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            286 => 
            array (
                'category_id' => 287,
                'movie_id' => 93,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            287 => 
            array (
                'category_id' => 288,
                'movie_id' => 94,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            288 => 
            array (
                'category_id' => 289,
                'movie_id' => 95,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            289 => 
            array (
                'category_id' => 290,
                'movie_id' => 95,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            290 => 
            array (
                'category_id' => 291,
                'movie_id' => 95,
                'genre_id' => 27,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            291 => 
            array (
                'category_id' => 292,
                'movie_id' => 96,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            292 => 
            array (
                'category_id' => 293,
                'movie_id' => 96,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            293 => 
            array (
                'category_id' => 294,
                'movie_id' => 96,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            294 => 
            array (
                'category_id' => 295,
                'movie_id' => 96,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            295 => 
            array (
                'category_id' => 296,
                'movie_id' => 97,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            296 => 
            array (
                'category_id' => 297,
                'movie_id' => 97,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            297 => 
            array (
                'category_id' => 298,
                'movie_id' => 97,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            298 => 
            array (
                'category_id' => 299,
                'movie_id' => 98,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            299 => 
            array (
                'category_id' => 300,
                'movie_id' => 98,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            300 => 
            array (
                'category_id' => 301,
                'movie_id' => 99,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            301 => 
            array (
                'category_id' => 302,
                'movie_id' => 99,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            302 => 
            array (
                'category_id' => 303,
                'movie_id' => 99,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            303 => 
            array (
                'category_id' => 304,
                'movie_id' => 99,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            304 => 
            array (
                'category_id' => 305,
                'movie_id' => 99,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            305 => 
            array (
                'category_id' => 306,
                'movie_id' => 100,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            306 => 
            array (
                'category_id' => 307,
                'movie_id' => 100,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            307 => 
            array (
                'category_id' => 308,
                'movie_id' => 100,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            308 => 
            array (
                'category_id' => 309,
                'movie_id' => 101,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            309 => 
            array (
                'category_id' => 310,
                'movie_id' => 101,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            310 => 
            array (
                'category_id' => 311,
                'movie_id' => 101,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            311 => 
            array (
                'category_id' => 312,
                'movie_id' => 102,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            312 => 
            array (
                'category_id' => 313,
                'movie_id' => 102,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            313 => 
            array (
                'category_id' => 314,
                'movie_id' => 102,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            314 => 
            array (
                'category_id' => 315,
                'movie_id' => 102,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            315 => 
            array (
                'category_id' => 316,
                'movie_id' => 103,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            316 => 
            array (
                'category_id' => 317,
                'movie_id' => 103,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            317 => 
            array (
                'category_id' => 318,
                'movie_id' => 103,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            318 => 
            array (
                'category_id' => 319,
                'movie_id' => 103,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            319 => 
            array (
                'category_id' => 320,
                'movie_id' => 104,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            320 => 
            array (
                'category_id' => 321,
                'movie_id' => 104,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            321 => 
            array (
                'category_id' => 322,
                'movie_id' => 104,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            322 => 
            array (
                'category_id' => 323,
                'movie_id' => 104,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            323 => 
            array (
                'category_id' => 324,
                'movie_id' => 105,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            324 => 
            array (
                'category_id' => 325,
                'movie_id' => 105,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            325 => 
            array (
                'category_id' => 326,
                'movie_id' => 105,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            326 => 
            array (
                'category_id' => 327,
                'movie_id' => 105,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            327 => 
            array (
                'category_id' => 328,
                'movie_id' => 106,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            328 => 
            array (
                'category_id' => 329,
                'movie_id' => 106,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            329 => 
            array (
                'category_id' => 330,
                'movie_id' => 106,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            330 => 
            array (
                'category_id' => 331,
                'movie_id' => 106,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            331 => 
            array (
                'category_id' => 332,
                'movie_id' => 107,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            332 => 
            array (
                'category_id' => 333,
                'movie_id' => 107,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            333 => 
            array (
                'category_id' => 334,
                'movie_id' => 107,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            334 => 
            array (
                'category_id' => 335,
                'movie_id' => 107,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            335 => 
            array (
                'category_id' => 336,
                'movie_id' => 107,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            336 => 
            array (
                'category_id' => 337,
                'movie_id' => 108,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            337 => 
            array (
                'category_id' => 338,
                'movie_id' => 108,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            338 => 
            array (
                'category_id' => 339,
                'movie_id' => 109,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            339 => 
            array (
                'category_id' => 340,
                'movie_id' => 109,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            340 => 
            array (
                'category_id' => 341,
                'movie_id' => 110,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            341 => 
            array (
                'category_id' => 342,
                'movie_id' => 110,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            342 => 
            array (
                'category_id' => 343,
                'movie_id' => 111,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            343 => 
            array (
                'category_id' => 344,
                'movie_id' => 111,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            344 => 
            array (
                'category_id' => 345,
                'movie_id' => 112,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            345 => 
            array (
                'category_id' => 346,
                'movie_id' => 112,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            346 => 
            array (
                'category_id' => 347,
                'movie_id' => 112,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            347 => 
            array (
                'category_id' => 348,
                'movie_id' => 113,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            348 => 
            array (
                'category_id' => 349,
                'movie_id' => 113,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            349 => 
            array (
                'category_id' => 350,
                'movie_id' => 113,
                'genre_id' => 28,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            350 => 
            array (
                'category_id' => 351,
                'movie_id' => 114,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            351 => 
            array (
                'category_id' => 352,
                'movie_id' => 114,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            352 => 
            array (
                'category_id' => 353,
                'movie_id' => 114,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            353 => 
            array (
                'category_id' => 354,
                'movie_id' => 115,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            354 => 
            array (
                'category_id' => 355,
                'movie_id' => 115,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            355 => 
            array (
                'category_id' => 356,
                'movie_id' => 115,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            356 => 
            array (
                'category_id' => 357,
                'movie_id' => 116,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            357 => 
            array (
                'category_id' => 358,
                'movie_id' => 116,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            358 => 
            array (
                'category_id' => 359,
                'movie_id' => 116,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            359 => 
            array (
                'category_id' => 360,
                'movie_id' => 117,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            360 => 
            array (
                'category_id' => 361,
                'movie_id' => 117,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            361 => 
            array (
                'category_id' => 362,
                'movie_id' => 117,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            362 => 
            array (
                'category_id' => 363,
                'movie_id' => 118,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            363 => 
            array (
                'category_id' => 364,
                'movie_id' => 118,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            364 => 
            array (
                'category_id' => 365,
                'movie_id' => 118,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            365 => 
            array (
                'category_id' => 366,
                'movie_id' => 118,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            366 => 
            array (
                'category_id' => 367,
                'movie_id' => 119,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            367 => 
            array (
                'category_id' => 368,
                'movie_id' => 119,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            368 => 
            array (
                'category_id' => 369,
                'movie_id' => 119,
                'genre_id' => 16,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            369 => 
            array (
                'category_id' => 370,
                'movie_id' => 119,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            370 => 
            array (
                'category_id' => 371,
                'movie_id' => 119,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            371 => 
            array (
                'category_id' => 372,
                'movie_id' => 120,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            372 => 
            array (
                'category_id' => 373,
                'movie_id' => 120,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            373 => 
            array (
                'category_id' => 374,
                'movie_id' => 120,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            374 => 
            array (
                'category_id' => 375,
                'movie_id' => 120,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            375 => 
            array (
                'category_id' => 376,
                'movie_id' => 121,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            376 => 
            array (
                'category_id' => 377,
                'movie_id' => 121,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            377 => 
            array (
                'category_id' => 378,
                'movie_id' => 121,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            378 => 
            array (
                'category_id' => 379,
                'movie_id' => 121,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            379 => 
            array (
                'category_id' => 380,
                'movie_id' => 122,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            380 => 
            array (
                'category_id' => 381,
                'movie_id' => 122,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            381 => 
            array (
                'category_id' => 382,
                'movie_id' => 122,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            382 => 
            array (
                'category_id' => 383,
                'movie_id' => 123,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            383 => 
            array (
                'category_id' => 384,
                'movie_id' => 123,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            384 => 
            array (
                'category_id' => 385,
                'movie_id' => 123,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            385 => 
            array (
                'category_id' => 386,
                'movie_id' => 123,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            386 => 
            array (
                'category_id' => 387,
                'movie_id' => 124,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            387 => 
            array (
                'category_id' => 388,
                'movie_id' => 124,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            388 => 
            array (
                'category_id' => 389,
                'movie_id' => 124,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            389 => 
            array (
                'category_id' => 390,
                'movie_id' => 125,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            390 => 
            array (
                'category_id' => 391,
                'movie_id' => 125,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            391 => 
            array (
                'category_id' => 392,
                'movie_id' => 125,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            392 => 
            array (
                'category_id' => 393,
                'movie_id' => 125,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            393 => 
            array (
                'category_id' => 394,
                'movie_id' => 126,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            394 => 
            array (
                'category_id' => 395,
                'movie_id' => 126,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            395 => 
            array (
                'category_id' => 396,
                'movie_id' => 126,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            396 => 
            array (
                'category_id' => 397,
                'movie_id' => 126,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            397 => 
            array (
                'category_id' => 398,
                'movie_id' => 127,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            398 => 
            array (
                'category_id' => 399,
                'movie_id' => 127,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            399 => 
            array (
                'category_id' => 400,
                'movie_id' => 127,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            400 => 
            array (
                'category_id' => 401,
                'movie_id' => 127,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            401 => 
            array (
                'category_id' => 402,
                'movie_id' => 127,
                'genre_id' => 28,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            402 => 
            array (
                'category_id' => 403,
                'movie_id' => 128,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            403 => 
            array (
                'category_id' => 404,
                'movie_id' => 128,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            404 => 
            array (
                'category_id' => 405,
                'movie_id' => 128,
                'genre_id' => 16,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            405 => 
            array (
                'category_id' => 406,
                'movie_id' => 129,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            406 => 
            array (
                'category_id' => 407,
                'movie_id' => 129,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            407 => 
            array (
                'category_id' => 408,
                'movie_id' => 129,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            408 => 
            array (
                'category_id' => 409,
                'movie_id' => 129,
                'genre_id' => 19,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            409 => 
            array (
                'category_id' => 410,
                'movie_id' => 129,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            410 => 
            array (
                'category_id' => 411,
                'movie_id' => 130,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            411 => 
            array (
                'category_id' => 412,
                'movie_id' => 130,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            412 => 
            array (
                'category_id' => 413,
                'movie_id' => 130,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            413 => 
            array (
                'category_id' => 414,
                'movie_id' => 130,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            414 => 
            array (
                'category_id' => 415,
                'movie_id' => 130,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            415 => 
            array (
                'category_id' => 416,
                'movie_id' => 130,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            416 => 
            array (
                'category_id' => 417,
                'movie_id' => 131,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            417 => 
            array (
                'category_id' => 418,
                'movie_id' => 131,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            418 => 
            array (
                'category_id' => 419,
                'movie_id' => 131,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            419 => 
            array (
                'category_id' => 420,
                'movie_id' => 131,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            420 => 
            array (
                'category_id' => 421,
                'movie_id' => 132,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            421 => 
            array (
                'category_id' => 422,
                'movie_id' => 132,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            422 => 
            array (
                'category_id' => 423,
                'movie_id' => 132,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            423 => 
            array (
                'category_id' => 424,
                'movie_id' => 132,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            424 => 
            array (
                'category_id' => 425,
                'movie_id' => 132,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            425 => 
            array (
                'category_id' => 426,
                'movie_id' => 133,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            426 => 
            array (
                'category_id' => 427,
                'movie_id' => 133,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            427 => 
            array (
                'category_id' => 428,
                'movie_id' => 133,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            428 => 
            array (
                'category_id' => 429,
                'movie_id' => 133,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            429 => 
            array (
                'category_id' => 430,
                'movie_id' => 134,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            430 => 
            array (
                'category_id' => 431,
                'movie_id' => 134,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            431 => 
            array (
                'category_id' => 432,
                'movie_id' => 134,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            432 => 
            array (
                'category_id' => 433,
                'movie_id' => 134,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            433 => 
            array (
                'category_id' => 434,
                'movie_id' => 135,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            434 => 
            array (
                'category_id' => 435,
                'movie_id' => 135,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            435 => 
            array (
                'category_id' => 436,
                'movie_id' => 135,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            436 => 
            array (
                'category_id' => 437,
                'movie_id' => 135,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            437 => 
            array (
                'category_id' => 438,
                'movie_id' => 136,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            438 => 
            array (
                'category_id' => 439,
                'movie_id' => 136,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            439 => 
            array (
                'category_id' => 440,
                'movie_id' => 136,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            440 => 
            array (
                'category_id' => 441,
                'movie_id' => 136,
                'genre_id' => 30,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            441 => 
            array (
                'category_id' => 442,
                'movie_id' => 137,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            442 => 
            array (
                'category_id' => 443,
                'movie_id' => 137,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            443 => 
            array (
                'category_id' => 444,
                'movie_id' => 137,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            444 => 
            array (
                'category_id' => 445,
                'movie_id' => 137,
                'genre_id' => 30,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            445 => 
            array (
                'category_id' => 446,
                'movie_id' => 138,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            446 => 
            array (
                'category_id' => 447,
                'movie_id' => 138,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            447 => 
            array (
                'category_id' => 448,
                'movie_id' => 138,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            448 => 
            array (
                'category_id' => 449,
                'movie_id' => 138,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            449 => 
            array (
                'category_id' => 450,
                'movie_id' => 139,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            450 => 
            array (
                'category_id' => 451,
                'movie_id' => 139,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            451 => 
            array (
                'category_id' => 452,
                'movie_id' => 139,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            452 => 
            array (
                'category_id' => 453,
                'movie_id' => 139,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            453 => 
            array (
                'category_id' => 454,
                'movie_id' => 139,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            454 => 
            array (
                'category_id' => 455,
                'movie_id' => 139,
                'genre_id' => 19,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            455 => 
            array (
                'category_id' => 456,
                'movie_id' => 140,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            456 => 
            array (
                'category_id' => 457,
                'movie_id' => 140,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            457 => 
            array (
                'category_id' => 458,
                'movie_id' => 140,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            458 => 
            array (
                'category_id' => 459,
                'movie_id' => 140,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            459 => 
            array (
                'category_id' => 460,
                'movie_id' => 141,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            460 => 
            array (
                'category_id' => 461,
                'movie_id' => 141,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            461 => 
            array (
                'category_id' => 462,
                'movie_id' => 141,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            462 => 
            array (
                'category_id' => 463,
                'movie_id' => 141,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            463 => 
            array (
                'category_id' => 464,
                'movie_id' => 141,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            464 => 
            array (
                'category_id' => 465,
                'movie_id' => 142,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            465 => 
            array (
                'category_id' => 466,
                'movie_id' => 142,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            466 => 
            array (
                'category_id' => 467,
                'movie_id' => 142,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            467 => 
            array (
                'category_id' => 468,
                'movie_id' => 142,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            468 => 
            array (
                'category_id' => 469,
                'movie_id' => 143,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            469 => 
            array (
                'category_id' => 470,
                'movie_id' => 143,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            470 => 
            array (
                'category_id' => 471,
                'movie_id' => 143,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            471 => 
            array (
                'category_id' => 472,
                'movie_id' => 143,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            472 => 
            array (
                'category_id' => 473,
                'movie_id' => 143,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            473 => 
            array (
                'category_id' => 474,
                'movie_id' => 144,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            474 => 
            array (
                'category_id' => 475,
                'movie_id' => 144,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            475 => 
            array (
                'category_id' => 476,
                'movie_id' => 144,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            476 => 
            array (
                'category_id' => 477,
                'movie_id' => 144,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            477 => 
            array (
                'category_id' => 478,
                'movie_id' => 144,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            478 => 
            array (
                'category_id' => 479,
                'movie_id' => 145,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            479 => 
            array (
                'category_id' => 480,
                'movie_id' => 145,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            480 => 
            array (
                'category_id' => 481,
                'movie_id' => 145,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            481 => 
            array (
                'category_id' => 482,
                'movie_id' => 145,
                'genre_id' => 19,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            482 => 
            array (
                'category_id' => 483,
                'movie_id' => 146,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            483 => 
            array (
                'category_id' => 484,
                'movie_id' => 146,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            484 => 
            array (
                'category_id' => 485,
                'movie_id' => 146,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            485 => 
            array (
                'category_id' => 486,
                'movie_id' => 146,
                'genre_id' => 19,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            486 => 
            array (
                'category_id' => 487,
                'movie_id' => 146,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            487 => 
            array (
                'category_id' => 488,
                'movie_id' => 147,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            488 => 
            array (
                'category_id' => 489,
                'movie_id' => 147,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            489 => 
            array (
                'category_id' => 490,
                'movie_id' => 147,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            490 => 
            array (
                'category_id' => 491,
                'movie_id' => 147,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            491 => 
            array (
                'category_id' => 492,
                'movie_id' => 148,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            492 => 
            array (
                'category_id' => 493,
                'movie_id' => 148,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            493 => 
            array (
                'category_id' => 494,
                'movie_id' => 148,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            494 => 
            array (
                'category_id' => 495,
                'movie_id' => 148,
                'genre_id' => 19,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            495 => 
            array (
                'category_id' => 496,
                'movie_id' => 148,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            496 => 
            array (
                'category_id' => 497,
                'movie_id' => 149,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            497 => 
            array (
                'category_id' => 498,
                'movie_id' => 149,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            498 => 
            array (
                'category_id' => 499,
                'movie_id' => 149,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            499 => 
            array (
                'category_id' => 500,
                'movie_id' => 149,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
        ));
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'category_id' => 501,
                'movie_id' => 149,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            1 => 
            array (
                'category_id' => 502,
                'movie_id' => 149,
                'genre_id' => 19,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            2 => 
            array (
                'category_id' => 503,
                'movie_id' => 149,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            3 => 
            array (
                'category_id' => 504,
                'movie_id' => 150,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            4 => 
            array (
                'category_id' => 505,
                'movie_id' => 150,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            5 => 
            array (
                'category_id' => 506,
                'movie_id' => 150,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            6 => 
            array (
                'category_id' => 507,
                'movie_id' => 150,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            7 => 
            array (
                'category_id' => 508,
                'movie_id' => 150,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            8 => 
            array (
                'category_id' => 509,
                'movie_id' => 151,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            9 => 
            array (
                'category_id' => 510,
                'movie_id' => 151,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            10 => 
            array (
                'category_id' => 511,
                'movie_id' => 151,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            11 => 
            array (
                'category_id' => 512,
                'movie_id' => 151,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            12 => 
            array (
                'category_id' => 513,
                'movie_id' => 151,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            13 => 
            array (
                'category_id' => 514,
                'movie_id' => 152,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            14 => 
            array (
                'category_id' => 515,
                'movie_id' => 152,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            15 => 
            array (
                'category_id' => 516,
                'movie_id' => 152,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            16 => 
            array (
                'category_id' => 517,
                'movie_id' => 152,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            17 => 
            array (
                'category_id' => 518,
                'movie_id' => 152,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            18 => 
            array (
                'category_id' => 519,
                'movie_id' => 153,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            19 => 
            array (
                'category_id' => 520,
                'movie_id' => 153,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            20 => 
            array (
                'category_id' => 521,
                'movie_id' => 153,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            21 => 
            array (
                'category_id' => 522,
                'movie_id' => 153,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            22 => 
            array (
                'category_id' => 523,
                'movie_id' => 154,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            23 => 
            array (
                'category_id' => 524,
                'movie_id' => 154,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            24 => 
            array (
                'category_id' => 525,
                'movie_id' => 154,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            25 => 
            array (
                'category_id' => 526,
                'movie_id' => 154,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            26 => 
            array (
                'category_id' => 527,
                'movie_id' => 155,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            27 => 
            array (
                'category_id' => 528,
                'movie_id' => 155,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            28 => 
            array (
                'category_id' => 529,
                'movie_id' => 155,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            29 => 
            array (
                'category_id' => 530,
                'movie_id' => 155,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            30 => 
            array (
                'category_id' => 531,
                'movie_id' => 156,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            31 => 
            array (
                'category_id' => 532,
                'movie_id' => 156,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            32 => 
            array (
                'category_id' => 533,
                'movie_id' => 156,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            33 => 
            array (
                'category_id' => 534,
                'movie_id' => 156,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            34 => 
            array (
                'category_id' => 535,
                'movie_id' => 156,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            35 => 
            array (
                'category_id' => 536,
                'movie_id' => 157,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            36 => 
            array (
                'category_id' => 537,
                'movie_id' => 157,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            37 => 
            array (
                'category_id' => 538,
                'movie_id' => 158,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            38 => 
            array (
                'category_id' => 539,
                'movie_id' => 158,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            39 => 
            array (
                'category_id' => 540,
                'movie_id' => 158,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            40 => 
            array (
                'category_id' => 541,
                'movie_id' => 159,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            41 => 
            array (
                'category_id' => 542,
                'movie_id' => 159,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            42 => 
            array (
                'category_id' => 543,
                'movie_id' => 159,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            43 => 
            array (
                'category_id' => 544,
                'movie_id' => 159,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            44 => 
            array (
                'category_id' => 545,
                'movie_id' => 160,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            45 => 
            array (
                'category_id' => 546,
                'movie_id' => 160,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            46 => 
            array (
                'category_id' => 547,
                'movie_id' => 160,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            47 => 
            array (
                'category_id' => 548,
                'movie_id' => 160,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            48 => 
            array (
                'category_id' => 549,
                'movie_id' => 161,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            49 => 
            array (
                'category_id' => 550,
                'movie_id' => 161,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            50 => 
            array (
                'category_id' => 551,
                'movie_id' => 161,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            51 => 
            array (
                'category_id' => 552,
                'movie_id' => 161,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            52 => 
            array (
                'category_id' => 553,
                'movie_id' => 161,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            53 => 
            array (
                'category_id' => 554,
                'movie_id' => 161,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            54 => 
            array (
                'category_id' => 555,
                'movie_id' => 162,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            55 => 
            array (
                'category_id' => 556,
                'movie_id' => 162,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            56 => 
            array (
                'category_id' => 557,
                'movie_id' => 162,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            57 => 
            array (
                'category_id' => 558,
                'movie_id' => 162,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            58 => 
            array (
                'category_id' => 559,
                'movie_id' => 162,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            59 => 
            array (
                'category_id' => 560,
                'movie_id' => 163,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            60 => 
            array (
                'category_id' => 561,
                'movie_id' => 163,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            61 => 
            array (
                'category_id' => 562,
                'movie_id' => 163,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            62 => 
            array (
                'category_id' => 563,
                'movie_id' => 163,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            63 => 
            array (
                'category_id' => 564,
                'movie_id' => 163,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            64 => 
            array (
                'category_id' => 565,
                'movie_id' => 164,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            65 => 
            array (
                'category_id' => 566,
                'movie_id' => 164,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            66 => 
            array (
                'category_id' => 567,
                'movie_id' => 164,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            67 => 
            array (
                'category_id' => 568,
                'movie_id' => 164,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            68 => 
            array (
                'category_id' => 569,
                'movie_id' => 164,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            69 => 
            array (
                'category_id' => 570,
                'movie_id' => 164,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            70 => 
            array (
                'category_id' => 571,
                'movie_id' => 165,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            71 => 
            array (
                'category_id' => 572,
                'movie_id' => 165,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            72 => 
            array (
                'category_id' => 573,
                'movie_id' => 165,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            73 => 
            array (
                'category_id' => 574,
                'movie_id' => 165,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            74 => 
            array (
                'category_id' => 575,
                'movie_id' => 165,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            75 => 
            array (
                'category_id' => 576,
                'movie_id' => 166,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            76 => 
            array (
                'category_id' => 577,
                'movie_id' => 166,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            77 => 
            array (
                'category_id' => 578,
                'movie_id' => 166,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            78 => 
            array (
                'category_id' => 579,
                'movie_id' => 167,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            79 => 
            array (
                'category_id' => 580,
                'movie_id' => 167,
                'genre_id' => 16,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            80 => 
            array (
                'category_id' => 581,
                'movie_id' => 167,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            81 => 
            array (
                'category_id' => 582,
                'movie_id' => 168,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            82 => 
            array (
                'category_id' => 583,
                'movie_id' => 168,
                'genre_id' => 16,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            83 => 
            array (
                'category_id' => 584,
                'movie_id' => 168,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            84 => 
            array (
                'category_id' => 585,
                'movie_id' => 169,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            85 => 
            array (
                'category_id' => 586,
                'movie_id' => 169,
                'genre_id' => 16,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            86 => 
            array (
                'category_id' => 587,
                'movie_id' => 169,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            87 => 
            array (
                'category_id' => 588,
                'movie_id' => 170,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            88 => 
            array (
                'category_id' => 589,
                'movie_id' => 170,
                'genre_id' => 16,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            89 => 
            array (
                'category_id' => 590,
                'movie_id' => 170,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            90 => 
            array (
                'category_id' => 591,
                'movie_id' => 171,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            91 => 
            array (
                'category_id' => 592,
                'movie_id' => 171,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            92 => 
            array (
                'category_id' => 593,
                'movie_id' => 172,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            93 => 
            array (
                'category_id' => 594,
                'movie_id' => 172,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            94 => 
            array (
                'category_id' => 595,
                'movie_id' => 172,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            95 => 
            array (
                'category_id' => 596,
                'movie_id' => 172,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            96 => 
            array (
                'category_id' => 597,
                'movie_id' => 172,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            97 => 
            array (
                'category_id' => 598,
                'movie_id' => 172,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            98 => 
            array (
                'category_id' => 599,
                'movie_id' => 173,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            99 => 
            array (
                'category_id' => 600,
                'movie_id' => 174,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            100 => 
            array (
                'category_id' => 601,
                'movie_id' => 174,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            101 => 
            array (
                'category_id' => 602,
                'movie_id' => 174,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            102 => 
            array (
                'category_id' => 603,
                'movie_id' => 175,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            103 => 
            array (
                'category_id' => 604,
                'movie_id' => 175,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            104 => 
            array (
                'category_id' => 605,
                'movie_id' => 175,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            105 => 
            array (
                'category_id' => 606,
                'movie_id' => 176,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            106 => 
            array (
                'category_id' => 607,
                'movie_id' => 176,
                'genre_id' => 30,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            107 => 
            array (
                'category_id' => 608,
                'movie_id' => 177,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            108 => 
            array (
                'category_id' => 609,
                'movie_id' => 177,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            109 => 
            array (
                'category_id' => 610,
                'movie_id' => 177,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            110 => 
            array (
                'category_id' => 611,
                'movie_id' => 178,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            111 => 
            array (
                'category_id' => 612,
                'movie_id' => 178,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            112 => 
            array (
                'category_id' => 613,
                'movie_id' => 178,
                'genre_id' => 27,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            113 => 
            array (
                'category_id' => 614,
                'movie_id' => 179,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            114 => 
            array (
                'category_id' => 615,
                'movie_id' => 179,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            115 => 
            array (
                'category_id' => 616,
                'movie_id' => 180,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            116 => 
            array (
                'category_id' => 617,
                'movie_id' => 181,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            117 => 
            array (
                'category_id' => 618,
                'movie_id' => 181,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            118 => 
            array (
                'category_id' => 619,
                'movie_id' => 182,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            119 => 
            array (
                'category_id' => 620,
                'movie_id' => 182,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            120 => 
            array (
                'category_id' => 621,
                'movie_id' => 183,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            121 => 
            array (
                'category_id' => 622,
                'movie_id' => 183,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            122 => 
            array (
                'category_id' => 623,
                'movie_id' => 184,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            123 => 
            array (
                'category_id' => 624,
                'movie_id' => 184,
                'genre_id' => 27,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            124 => 
            array (
                'category_id' => 625,
                'movie_id' => 185,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            125 => 
            array (
                'category_id' => 626,
                'movie_id' => 185,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            126 => 
            array (
                'category_id' => 627,
                'movie_id' => 185,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            127 => 
            array (
                'category_id' => 628,
                'movie_id' => 185,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            128 => 
            array (
                'category_id' => 629,
                'movie_id' => 186,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            129 => 
            array (
                'category_id' => 630,
                'movie_id' => 186,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            130 => 
            array (
                'category_id' => 631,
                'movie_id' => 186,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            131 => 
            array (
                'category_id' => 632,
                'movie_id' => 187,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            132 => 
            array (
                'category_id' => 633,
                'movie_id' => 187,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            133 => 
            array (
                'category_id' => 634,
                'movie_id' => 187,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            134 => 
            array (
                'category_id' => 635,
                'movie_id' => 187,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            135 => 
            array (
                'category_id' => 636,
                'movie_id' => 188,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            136 => 
            array (
                'category_id' => 637,
                'movie_id' => 188,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            137 => 
            array (
                'category_id' => 638,
                'movie_id' => 189,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            138 => 
            array (
                'category_id' => 639,
                'movie_id' => 189,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            139 => 
            array (
                'category_id' => 640,
                'movie_id' => 189,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            140 => 
            array (
                'category_id' => 641,
                'movie_id' => 189,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            141 => 
            array (
                'category_id' => 642,
                'movie_id' => 190,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            142 => 
            array (
                'category_id' => 643,
                'movie_id' => 190,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            143 => 
            array (
                'category_id' => 644,
                'movie_id' => 190,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            144 => 
            array (
                'category_id' => 645,
                'movie_id' => 191,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            145 => 
            array (
                'category_id' => 646,
                'movie_id' => 191,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            146 => 
            array (
                'category_id' => 647,
                'movie_id' => 191,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            147 => 
            array (
                'category_id' => 648,
                'movie_id' => 191,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            148 => 
            array (
                'category_id' => 649,
                'movie_id' => 191,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            149 => 
            array (
                'category_id' => 650,
                'movie_id' => 192,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            150 => 
            array (
                'category_id' => 651,
                'movie_id' => 192,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            151 => 
            array (
                'category_id' => 652,
                'movie_id' => 192,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            152 => 
            array (
                'category_id' => 653,
                'movie_id' => 192,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            153 => 
            array (
                'category_id' => 654,
                'movie_id' => 193,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            154 => 
            array (
                'category_id' => 655,
                'movie_id' => 193,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            155 => 
            array (
                'category_id' => 656,
                'movie_id' => 194,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            156 => 
            array (
                'category_id' => 657,
                'movie_id' => 195,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            157 => 
            array (
                'category_id' => 658,
                'movie_id' => 195,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            158 => 
            array (
                'category_id' => 659,
                'movie_id' => 195,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            159 => 
            array (
                'category_id' => 660,
                'movie_id' => 196,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            160 => 
            array (
                'category_id' => 661,
                'movie_id' => 197,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            161 => 
            array (
                'category_id' => 662,
                'movie_id' => 197,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            162 => 
            array (
                'category_id' => 663,
                'movie_id' => 197,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            163 => 
            array (
                'category_id' => 664,
                'movie_id' => 198,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            164 => 
            array (
                'category_id' => 665,
                'movie_id' => 198,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            165 => 
            array (
                'category_id' => 666,
                'movie_id' => 198,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            166 => 
            array (
                'category_id' => 667,
                'movie_id' => 198,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            167 => 
            array (
                'category_id' => 668,
                'movie_id' => 199,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            168 => 
            array (
                'category_id' => 669,
                'movie_id' => 199,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            169 => 
            array (
                'category_id' => 670,
                'movie_id' => 199,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            170 => 
            array (
                'category_id' => 671,
                'movie_id' => 199,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            171 => 
            array (
                'category_id' => 672,
                'movie_id' => 200,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            172 => 
            array (
                'category_id' => 673,
                'movie_id' => 200,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            173 => 
            array (
                'category_id' => 674,
                'movie_id' => 200,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            174 => 
            array (
                'category_id' => 675,
                'movie_id' => 201,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            175 => 
            array (
                'category_id' => 676,
                'movie_id' => 201,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            176 => 
            array (
                'category_id' => 677,
                'movie_id' => 201,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            177 => 
            array (
                'category_id' => 678,
                'movie_id' => 201,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            178 => 
            array (
                'category_id' => 679,
                'movie_id' => 202,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            179 => 
            array (
                'category_id' => 680,
                'movie_id' => 202,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            180 => 
            array (
                'category_id' => 681,
                'movie_id' => 202,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            181 => 
            array (
                'category_id' => 682,
                'movie_id' => 202,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            182 => 
            array (
                'category_id' => 683,
                'movie_id' => 203,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            183 => 
            array (
                'category_id' => 684,
                'movie_id' => 203,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            184 => 
            array (
                'category_id' => 685,
                'movie_id' => 203,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            185 => 
            array (
                'category_id' => 686,
                'movie_id' => 203,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            186 => 
            array (
                'category_id' => 687,
                'movie_id' => 204,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            187 => 
            array (
                'category_id' => 688,
                'movie_id' => 204,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            188 => 
            array (
                'category_id' => 689,
                'movie_id' => 205,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            189 => 
            array (
                'category_id' => 690,
                'movie_id' => 205,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            190 => 
            array (
                'category_id' => 691,
                'movie_id' => 205,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            191 => 
            array (
                'category_id' => 692,
                'movie_id' => 205,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            192 => 
            array (
                'category_id' => 693,
                'movie_id' => 206,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            193 => 
            array (
                'category_id' => 694,
                'movie_id' => 206,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            194 => 
            array (
                'category_id' => 695,
                'movie_id' => 206,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            195 => 
            array (
                'category_id' => 696,
                'movie_id' => 207,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            196 => 
            array (
                'category_id' => 697,
                'movie_id' => 207,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            197 => 
            array (
                'category_id' => 698,
                'movie_id' => 207,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            198 => 
            array (
                'category_id' => 699,
                'movie_id' => 207,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            199 => 
            array (
                'category_id' => 700,
                'movie_id' => 208,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            200 => 
            array (
                'category_id' => 701,
                'movie_id' => 208,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            201 => 
            array (
                'category_id' => 702,
                'movie_id' => 209,
                'genre_id' => 16,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            202 => 
            array (
                'category_id' => 703,
                'movie_id' => 210,
                'genre_id' => 4,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            203 => 
            array (
                'category_id' => 704,
                'movie_id' => 210,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            204 => 
            array (
                'category_id' => 705,
                'movie_id' => 210,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            205 => 
            array (
                'category_id' => 706,
                'movie_id' => 211,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            206 => 
            array (
                'category_id' => 707,
                'movie_id' => 211,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            207 => 
            array (
                'category_id' => 708,
                'movie_id' => 211,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            208 => 
            array (
                'category_id' => 709,
                'movie_id' => 211,
                'genre_id' => 30,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            209 => 
            array (
                'category_id' => 710,
                'movie_id' => 213,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            210 => 
            array (
                'category_id' => 711,
                'movie_id' => 213,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            211 => 
            array (
                'category_id' => 712,
                'movie_id' => 213,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            212 => 
            array (
                'category_id' => 713,
                'movie_id' => 214,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            213 => 
            array (
                'category_id' => 714,
                'movie_id' => 214,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            214 => 
            array (
                'category_id' => 715,
                'movie_id' => 215,
                'genre_id' => 4,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            215 => 
            array (
                'category_id' => 716,
                'movie_id' => 215,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            216 => 
            array (
                'category_id' => 717,
                'movie_id' => 215,
                'genre_id' => 15,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            217 => 
            array (
                'category_id' => 718,
                'movie_id' => 215,
                'genre_id' => 27,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            218 => 
            array (
                'category_id' => 719,
                'movie_id' => 216,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            219 => 
            array (
                'category_id' => 720,
                'movie_id' => 216,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            220 => 
            array (
                'category_id' => 721,
                'movie_id' => 216,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            221 => 
            array (
                'category_id' => 722,
                'movie_id' => 217,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            222 => 
            array (
                'category_id' => 723,
                'movie_id' => 218,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            223 => 
            array (
                'category_id' => 724,
                'movie_id' => 218,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            224 => 
            array (
                'category_id' => 725,
                'movie_id' => 219,
                'genre_id' => 4,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            225 => 
            array (
                'category_id' => 726,
                'movie_id' => 219,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            226 => 
            array (
                'category_id' => 727,
                'movie_id' => 219,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            227 => 
            array (
                'category_id' => 728,
                'movie_id' => 219,
                'genre_id' => 28,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            228 => 
            array (
                'category_id' => 729,
                'movie_id' => 220,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            229 => 
            array (
                'category_id' => 730,
                'movie_id' => 220,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            230 => 
            array (
                'category_id' => 731,
                'movie_id' => 220,
                'genre_id' => 27,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            231 => 
            array (
                'category_id' => 732,
                'movie_id' => 221,
                'genre_id' => 4,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            232 => 
            array (
                'category_id' => 733,
                'movie_id' => 221,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            233 => 
            array (
                'category_id' => 734,
                'movie_id' => 221,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            234 => 
            array (
                'category_id' => 735,
                'movie_id' => 222,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            235 => 
            array (
                'category_id' => 736,
                'movie_id' => 222,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            236 => 
            array (
                'category_id' => 737,
                'movie_id' => 222,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            237 => 
            array (
                'category_id' => 738,
                'movie_id' => 222,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            238 => 
            array (
                'category_id' => 739,
                'movie_id' => 223,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            239 => 
            array (
                'category_id' => 740,
                'movie_id' => 223,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            240 => 
            array (
                'category_id' => 741,
                'movie_id' => 223,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            241 => 
            array (
                'category_id' => 742,
                'movie_id' => 223,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            242 => 
            array (
                'category_id' => 743,
                'movie_id' => 223,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            243 => 
            array (
                'category_id' => 744,
                'movie_id' => 224,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            244 => 
            array (
                'category_id' => 745,
                'movie_id' => 224,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            245 => 
            array (
                'category_id' => 746,
                'movie_id' => 224,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            246 => 
            array (
                'category_id' => 747,
                'movie_id' => 224,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            247 => 
            array (
                'category_id' => 748,
                'movie_id' => 225,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            248 => 
            array (
                'category_id' => 749,
                'movie_id' => 225,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            249 => 
            array (
                'category_id' => 750,
                'movie_id' => 225,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            250 => 
            array (
                'category_id' => 751,
                'movie_id' => 226,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            251 => 
            array (
                'category_id' => 752,
                'movie_id' => 226,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            252 => 
            array (
                'category_id' => 753,
                'movie_id' => 226,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            253 => 
            array (
                'category_id' => 754,
                'movie_id' => 227,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            254 => 
            array (
                'category_id' => 755,
                'movie_id' => 227,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            255 => 
            array (
                'category_id' => 756,
                'movie_id' => 228,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            256 => 
            array (
                'category_id' => 757,
                'movie_id' => 229,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            257 => 
            array (
                'category_id' => 758,
                'movie_id' => 229,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            258 => 
            array (
                'category_id' => 759,
                'movie_id' => 230,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            259 => 
            array (
                'category_id' => 760,
                'movie_id' => 230,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            260 => 
            array (
                'category_id' => 761,
                'movie_id' => 230,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            261 => 
            array (
                'category_id' => 762,
                'movie_id' => 231,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            262 => 
            array (
                'category_id' => 763,
                'movie_id' => 231,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            263 => 
            array (
                'category_id' => 764,
                'movie_id' => 231,
                'genre_id' => 16,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            264 => 
            array (
                'category_id' => 765,
                'movie_id' => 231,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            265 => 
            array (
                'category_id' => 766,
                'movie_id' => 232,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            266 => 
            array (
                'category_id' => 767,
                'movie_id' => 232,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            267 => 
            array (
                'category_id' => 768,
                'movie_id' => 233,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            268 => 
            array (
                'category_id' => 769,
                'movie_id' => 233,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            269 => 
            array (
                'category_id' => 770,
                'movie_id' => 233,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            270 => 
            array (
                'category_id' => 771,
                'movie_id' => 234,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            271 => 
            array (
                'category_id' => 772,
                'movie_id' => 234,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            272 => 
            array (
                'category_id' => 773,
                'movie_id' => 234,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            273 => 
            array (
                'category_id' => 774,
                'movie_id' => 234,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            274 => 
            array (
                'category_id' => 775,
                'movie_id' => 235,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            275 => 
            array (
                'category_id' => 776,
                'movie_id' => 235,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            276 => 
            array (
                'category_id' => 777,
                'movie_id' => 235,
                'genre_id' => 16,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            277 => 
            array (
                'category_id' => 778,
                'movie_id' => 235,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            278 => 
            array (
                'category_id' => 779,
                'movie_id' => 236,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            279 => 
            array (
                'category_id' => 780,
                'movie_id' => 236,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            280 => 
            array (
                'category_id' => 781,
                'movie_id' => 236,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            281 => 
            array (
                'category_id' => 782,
                'movie_id' => 237,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            282 => 
            array (
                'category_id' => 783,
                'movie_id' => 237,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            283 => 
            array (
                'category_id' => 784,
                'movie_id' => 237,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            284 => 
            array (
                'category_id' => 785,
                'movie_id' => 238,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            285 => 
            array (
                'category_id' => 786,
                'movie_id' => 239,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            286 => 
            array (
                'category_id' => 787,
                'movie_id' => 239,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            287 => 
            array (
                'category_id' => 788,
                'movie_id' => 239,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            288 => 
            array (
                'category_id' => 789,
                'movie_id' => 240,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            289 => 
            array (
                'category_id' => 790,
                'movie_id' => 240,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            290 => 
            array (
                'category_id' => 791,
                'movie_id' => 241,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            291 => 
            array (
                'category_id' => 792,
                'movie_id' => 241,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            292 => 
            array (
                'category_id' => 793,
                'movie_id' => 242,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            293 => 
            array (
                'category_id' => 794,
                'movie_id' => 242,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            294 => 
            array (
                'category_id' => 795,
                'movie_id' => 242,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            295 => 
            array (
                'category_id' => 796,
                'movie_id' => 243,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            296 => 
            array (
                'category_id' => 797,
                'movie_id' => 243,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            297 => 
            array (
                'category_id' => 798,
                'movie_id' => 243,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            298 => 
            array (
                'category_id' => 799,
                'movie_id' => 244,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            299 => 
            array (
                'category_id' => 800,
                'movie_id' => 244,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            300 => 
            array (
                'category_id' => 801,
                'movie_id' => 244,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            301 => 
            array (
                'category_id' => 802,
                'movie_id' => 244,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            302 => 
            array (
                'category_id' => 803,
                'movie_id' => 245,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            303 => 
            array (
                'category_id' => 804,
                'movie_id' => 245,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            304 => 
            array (
                'category_id' => 805,
                'movie_id' => 245,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            305 => 
            array (
                'category_id' => 806,
                'movie_id' => 245,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            306 => 
            array (
                'category_id' => 807,
                'movie_id' => 246,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            307 => 
            array (
                'category_id' => 808,
                'movie_id' => 246,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            308 => 
            array (
                'category_id' => 809,
                'movie_id' => 246,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            309 => 
            array (
                'category_id' => 810,
                'movie_id' => 246,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            310 => 
            array (
                'category_id' => 811,
                'movie_id' => 247,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            311 => 
            array (
                'category_id' => 812,
                'movie_id' => 247,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            312 => 
            array (
                'category_id' => 813,
                'movie_id' => 247,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            313 => 
            array (
                'category_id' => 814,
                'movie_id' => 248,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            314 => 
            array (
                'category_id' => 815,
                'movie_id' => 248,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            315 => 
            array (
                'category_id' => 816,
                'movie_id' => 248,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            316 => 
            array (
                'category_id' => 817,
                'movie_id' => 249,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            317 => 
            array (
                'category_id' => 818,
                'movie_id' => 249,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            318 => 
            array (
                'category_id' => 819,
                'movie_id' => 250,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            319 => 
            array (
                'category_id' => 820,
                'movie_id' => 250,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            320 => 
            array (
                'category_id' => 821,
                'movie_id' => 250,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            321 => 
            array (
                'category_id' => 822,
                'movie_id' => 251,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            322 => 
            array (
                'category_id' => 823,
                'movie_id' => 251,
                'genre_id' => 30,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            323 => 
            array (
                'category_id' => 824,
                'movie_id' => 251,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            324 => 
            array (
                'category_id' => 825,
                'movie_id' => 252,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            325 => 
            array (
                'category_id' => 826,
                'movie_id' => 252,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            326 => 
            array (
                'category_id' => 827,
                'movie_id' => 252,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            327 => 
            array (
                'category_id' => 828,
                'movie_id' => 253,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            328 => 
            array (
                'category_id' => 829,
                'movie_id' => 253,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            329 => 
            array (
                'category_id' => 830,
                'movie_id' => 253,
                'genre_id' => 27,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            330 => 
            array (
                'category_id' => 831,
                'movie_id' => 254,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            331 => 
            array (
                'category_id' => 832,
                'movie_id' => 254,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            332 => 
            array (
                'category_id' => 833,
                'movie_id' => 254,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            333 => 
            array (
                'category_id' => 834,
                'movie_id' => 255,
                'genre_id' => 4,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            334 => 
            array (
                'category_id' => 835,
                'movie_id' => 255,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            335 => 
            array (
                'category_id' => 836,
                'movie_id' => 255,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            336 => 
            array (
                'category_id' => 837,
                'movie_id' => 256,
                'genre_id' => 16,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            337 => 
            array (
                'category_id' => 838,
                'movie_id' => 256,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            338 => 
            array (
                'category_id' => 839,
                'movie_id' => 257,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            339 => 
            array (
                'category_id' => 840,
                'movie_id' => 257,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            340 => 
            array (
                'category_id' => 841,
                'movie_id' => 258,
                'genre_id' => 4,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            341 => 
            array (
                'category_id' => 842,
                'movie_id' => 258,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            342 => 
            array (
                'category_id' => 843,
                'movie_id' => 258,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            343 => 
            array (
                'category_id' => 844,
                'movie_id' => 260,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            344 => 
            array (
                'category_id' => 845,
                'movie_id' => 260,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            345 => 
            array (
                'category_id' => 846,
                'movie_id' => 260,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            346 => 
            array (
                'category_id' => 847,
                'movie_id' => 261,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            347 => 
            array (
                'category_id' => 848,
                'movie_id' => 261,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            348 => 
            array (
                'category_id' => 849,
                'movie_id' => 261,
                'genre_id' => 30,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            349 => 
            array (
                'category_id' => 850,
                'movie_id' => 262,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            350 => 
            array (
                'category_id' => 851,
                'movie_id' => 262,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            351 => 
            array (
                'category_id' => 852,
                'movie_id' => 262,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            352 => 
            array (
                'category_id' => 853,
                'movie_id' => 262,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            353 => 
            array (
                'category_id' => 854,
                'movie_id' => 262,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            354 => 
            array (
                'category_id' => 855,
                'movie_id' => 263,
                'genre_id' => 4,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            355 => 
            array (
                'category_id' => 856,
                'movie_id' => 263,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            356 => 
            array (
                'category_id' => 857,
                'movie_id' => 264,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            357 => 
            array (
                'category_id' => 858,
                'movie_id' => 264,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            358 => 
            array (
                'category_id' => 859,
                'movie_id' => 264,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            359 => 
            array (
                'category_id' => 860,
                'movie_id' => 265,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            360 => 
            array (
                'category_id' => 861,
                'movie_id' => 265,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            361 => 
            array (
                'category_id' => 862,
                'movie_id' => 265,
                'genre_id' => 16,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            362 => 
            array (
                'category_id' => 863,
                'movie_id' => 266,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            363 => 
            array (
                'category_id' => 864,
                'movie_id' => 266,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            364 => 
            array (
                'category_id' => 865,
                'movie_id' => 266,
                'genre_id' => 16,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            365 => 
            array (
                'category_id' => 866,
                'movie_id' => 267,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            366 => 
            array (
                'category_id' => 867,
                'movie_id' => 267,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            367 => 
            array (
                'category_id' => 868,
                'movie_id' => 267,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            368 => 
            array (
                'category_id' => 869,
                'movie_id' => 267,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            369 => 
            array (
                'category_id' => 870,
                'movie_id' => 268,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            370 => 
            array (
                'category_id' => 871,
                'movie_id' => 270,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            371 => 
            array (
                'category_id' => 872,
                'movie_id' => 271,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            372 => 
            array (
                'category_id' => 873,
                'movie_id' => 272,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            373 => 
            array (
                'category_id' => 874,
                'movie_id' => 272,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            374 => 
            array (
                'category_id' => 875,
                'movie_id' => 273,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            375 => 
            array (
                'category_id' => 876,
                'movie_id' => 273,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            376 => 
            array (
                'category_id' => 877,
                'movie_id' => 273,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            377 => 
            array (
                'category_id' => 878,
                'movie_id' => 274,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            378 => 
            array (
                'category_id' => 879,
                'movie_id' => 274,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            379 => 
            array (
                'category_id' => 880,
                'movie_id' => 274,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            380 => 
            array (
                'category_id' => 881,
                'movie_id' => 274,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            381 => 
            array (
                'category_id' => 882,
                'movie_id' => 274,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            382 => 
            array (
                'category_id' => 883,
                'movie_id' => 275,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            383 => 
            array (
                'category_id' => 884,
                'movie_id' => 275,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            384 => 
            array (
                'category_id' => 885,
                'movie_id' => 275,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            385 => 
            array (
                'category_id' => 886,
                'movie_id' => 276,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            386 => 
            array (
                'category_id' => 887,
                'movie_id' => 276,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            387 => 
            array (
                'category_id' => 888,
                'movie_id' => 276,
                'genre_id' => 4,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            388 => 
            array (
                'category_id' => 889,
                'movie_id' => 276,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            389 => 
            array (
                'category_id' => 890,
                'movie_id' => 276,
                'genre_id' => 15,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            390 => 
            array (
                'category_id' => 891,
                'movie_id' => 276,
                'genre_id' => 27,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            391 => 
            array (
                'category_id' => 892,
                'movie_id' => 277,
                'genre_id' => 16,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            392 => 
            array (
                'category_id' => 893,
                'movie_id' => 277,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            393 => 
            array (
                'category_id' => 894,
                'movie_id' => 278,
                'genre_id' => 4,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            394 => 
            array (
                'category_id' => 895,
                'movie_id' => 278,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            395 => 
            array (
                'category_id' => 896,
                'movie_id' => 278,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            396 => 
            array (
                'category_id' => 897,
                'movie_id' => 279,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            397 => 
            array (
                'category_id' => 898,
                'movie_id' => 279,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            398 => 
            array (
                'category_id' => 899,
                'movie_id' => 280,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            399 => 
            array (
                'category_id' => 900,
                'movie_id' => 281,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            400 => 
            array (
                'category_id' => 901,
                'movie_id' => 281,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            401 => 
            array (
                'category_id' => 902,
                'movie_id' => 282,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            402 => 
            array (
                'category_id' => 903,
                'movie_id' => 282,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            403 => 
            array (
                'category_id' => 904,
                'movie_id' => 283,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            404 => 
            array (
                'category_id' => 905,
                'movie_id' => 283,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            405 => 
            array (
                'category_id' => 906,
                'movie_id' => 283,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            406 => 
            array (
                'category_id' => 907,
                'movie_id' => 283,
                'genre_id' => 16,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            407 => 
            array (
                'category_id' => 908,
                'movie_id' => 283,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            408 => 
            array (
                'category_id' => 909,
                'movie_id' => 284,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            409 => 
            array (
                'category_id' => 910,
                'movie_id' => 284,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            410 => 
            array (
                'category_id' => 911,
                'movie_id' => 284,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            411 => 
            array (
                'category_id' => 912,
                'movie_id' => 285,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            412 => 
            array (
                'category_id' => 913,
                'movie_id' => 285,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            413 => 
            array (
                'category_id' => 914,
                'movie_id' => 285,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            414 => 
            array (
                'category_id' => 915,
                'movie_id' => 286,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            415 => 
            array (
                'category_id' => 916,
                'movie_id' => 286,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            416 => 
            array (
                'category_id' => 917,
                'movie_id' => 286,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            417 => 
            array (
                'category_id' => 918,
                'movie_id' => 286,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            418 => 
            array (
                'category_id' => 919,
                'movie_id' => 287,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            419 => 
            array (
                'category_id' => 920,
                'movie_id' => 287,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            420 => 
            array (
                'category_id' => 921,
                'movie_id' => 288,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            421 => 
            array (
                'category_id' => 922,
                'movie_id' => 288,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            422 => 
            array (
                'category_id' => 923,
                'movie_id' => 288,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            423 => 
            array (
                'category_id' => 924,
                'movie_id' => 289,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            424 => 
            array (
                'category_id' => 925,
                'movie_id' => 289,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            425 => 
            array (
                'category_id' => 926,
                'movie_id' => 290,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            426 => 
            array (
                'category_id' => 927,
                'movie_id' => 290,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            427 => 
            array (
                'category_id' => 928,
                'movie_id' => 291,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            428 => 
            array (
                'category_id' => 929,
                'movie_id' => 291,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            429 => 
            array (
                'category_id' => 930,
                'movie_id' => 291,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            430 => 
            array (
                'category_id' => 931,
                'movie_id' => 291,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            431 => 
            array (
                'category_id' => 932,
                'movie_id' => 291,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            432 => 
            array (
                'category_id' => 933,
                'movie_id' => 292,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            433 => 
            array (
                'category_id' => 934,
                'movie_id' => 293,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            434 => 
            array (
                'category_id' => 935,
                'movie_id' => 293,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            435 => 
            array (
                'category_id' => 936,
                'movie_id' => 293,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            436 => 
            array (
                'category_id' => 937,
                'movie_id' => 293,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            437 => 
            array (
                'category_id' => 938,
                'movie_id' => 294,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            438 => 
            array (
                'category_id' => 939,
                'movie_id' => 294,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            439 => 
            array (
                'category_id' => 940,
                'movie_id' => 294,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            440 => 
            array (
                'category_id' => 941,
                'movie_id' => 295,
                'genre_id' => 19,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            441 => 
            array (
                'category_id' => 942,
                'movie_id' => 295,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            442 => 
            array (
                'category_id' => 943,
                'movie_id' => 296,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            443 => 
            array (
                'category_id' => 944,
                'movie_id' => 296,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            444 => 
            array (
                'category_id' => 945,
                'movie_id' => 296,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            445 => 
            array (
                'category_id' => 946,
                'movie_id' => 296,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            446 => 
            array (
                'category_id' => 947,
                'movie_id' => 296,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            447 => 
            array (
                'category_id' => 948,
                'movie_id' => 297,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            448 => 
            array (
                'category_id' => 949,
                'movie_id' => 297,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            449 => 
            array (
                'category_id' => 950,
                'movie_id' => 297,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            450 => 
            array (
                'category_id' => 951,
                'movie_id' => 298,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            451 => 
            array (
                'category_id' => 952,
                'movie_id' => 299,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            452 => 
            array (
                'category_id' => 953,
                'movie_id' => 299,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            453 => 
            array (
                'category_id' => 954,
                'movie_id' => 299,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            454 => 
            array (
                'category_id' => 955,
                'movie_id' => 299,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            455 => 
            array (
                'category_id' => 956,
                'movie_id' => 300,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            456 => 
            array (
                'category_id' => 957,
                'movie_id' => 300,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            457 => 
            array (
                'category_id' => 958,
                'movie_id' => 301,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            458 => 
            array (
                'category_id' => 959,
                'movie_id' => 301,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            459 => 
            array (
                'category_id' => 960,
                'movie_id' => 302,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            460 => 
            array (
                'category_id' => 961,
                'movie_id' => 302,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            461 => 
            array (
                'category_id' => 962,
                'movie_id' => 303,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            462 => 
            array (
                'category_id' => 963,
                'movie_id' => 303,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            463 => 
            array (
                'category_id' => 964,
                'movie_id' => 303,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            464 => 
            array (
                'category_id' => 965,
                'movie_id' => 304,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            465 => 
            array (
                'category_id' => 966,
                'movie_id' => 304,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            466 => 
            array (
                'category_id' => 967,
                'movie_id' => 304,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            467 => 
            array (
                'category_id' => 968,
                'movie_id' => 304,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            468 => 
            array (
                'category_id' => 969,
                'movie_id' => 305,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            469 => 
            array (
                'category_id' => 970,
                'movie_id' => 305,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            470 => 
            array (
                'category_id' => 971,
                'movie_id' => 305,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            471 => 
            array (
                'category_id' => 972,
                'movie_id' => 306,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            472 => 
            array (
                'category_id' => 973,
                'movie_id' => 306,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            473 => 
            array (
                'category_id' => 974,
                'movie_id' => 307,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            474 => 
            array (
                'category_id' => 975,
                'movie_id' => 307,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            475 => 
            array (
                'category_id' => 976,
                'movie_id' => 307,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            476 => 
            array (
                'category_id' => 977,
                'movie_id' => 307,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            477 => 
            array (
                'category_id' => 978,
                'movie_id' => 308,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            478 => 
            array (
                'category_id' => 979,
                'movie_id' => 308,
                'genre_id' => 27,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            479 => 
            array (
                'category_id' => 980,
                'movie_id' => 309,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            480 => 
            array (
                'category_id' => 981,
                'movie_id' => 309,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            481 => 
            array (
                'category_id' => 982,
                'movie_id' => 309,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            482 => 
            array (
                'category_id' => 983,
                'movie_id' => 309,
                'genre_id' => 19,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            483 => 
            array (
                'category_id' => 984,
                'movie_id' => 309,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            484 => 
            array (
                'category_id' => 985,
                'movie_id' => 310,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            485 => 
            array (
                'category_id' => 986,
                'movie_id' => 310,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            486 => 
            array (
                'category_id' => 987,
                'movie_id' => 310,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            487 => 
            array (
                'category_id' => 988,
                'movie_id' => 310,
                'genre_id' => 19,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            488 => 
            array (
                'category_id' => 989,
                'movie_id' => 310,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            489 => 
            array (
                'category_id' => 990,
                'movie_id' => 311,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            490 => 
            array (
                'category_id' => 991,
                'movie_id' => 311,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            491 => 
            array (
                'category_id' => 992,
                'movie_id' => 311,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            492 => 
            array (
                'category_id' => 993,
                'movie_id' => 311,
                'genre_id' => 19,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            493 => 
            array (
                'category_id' => 994,
                'movie_id' => 311,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            494 => 
            array (
                'category_id' => 995,
                'movie_id' => 312,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            495 => 
            array (
                'category_id' => 996,
                'movie_id' => 312,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            496 => 
            array (
                'category_id' => 997,
                'movie_id' => 313,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            497 => 
            array (
                'category_id' => 998,
                'movie_id' => 313,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            498 => 
            array (
                'category_id' => 999,
                'movie_id' => 314,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            499 => 
            array (
                'category_id' => 1000,
                'movie_id' => 314,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
        ));
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'category_id' => 1001,
                'movie_id' => 314,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            1 => 
            array (
                'category_id' => 1002,
                'movie_id' => 315,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            2 => 
            array (
                'category_id' => 1003,
                'movie_id' => 315,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            3 => 
            array (
                'category_id' => 1004,
                'movie_id' => 316,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            4 => 
            array (
                'category_id' => 1005,
                'movie_id' => 316,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            5 => 
            array (
                'category_id' => 1006,
                'movie_id' => 316,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            6 => 
            array (
                'category_id' => 1007,
                'movie_id' => 317,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            7 => 
            array (
                'category_id' => 1008,
                'movie_id' => 317,
                'genre_id' => 30,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            8 => 
            array (
                'category_id' => 1009,
                'movie_id' => 318,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            9 => 
            array (
                'category_id' => 1010,
                'movie_id' => 318,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            10 => 
            array (
                'category_id' => 1011,
                'movie_id' => 319,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            11 => 
            array (
                'category_id' => 1012,
                'movie_id' => 319,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            12 => 
            array (
                'category_id' => 1013,
                'movie_id' => 319,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            13 => 
            array (
                'category_id' => 1014,
                'movie_id' => 320,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            14 => 
            array (
                'category_id' => 1015,
                'movie_id' => 320,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            15 => 
            array (
                'category_id' => 1016,
                'movie_id' => 320,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            16 => 
            array (
                'category_id' => 1017,
                'movie_id' => 321,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            17 => 
            array (
                'category_id' => 1018,
                'movie_id' => 321,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            18 => 
            array (
                'category_id' => 1019,
                'movie_id' => 322,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            19 => 
            array (
                'category_id' => 1020,
                'movie_id' => 322,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            20 => 
            array (
                'category_id' => 1021,
                'movie_id' => 323,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            21 => 
            array (
                'category_id' => 1022,
                'movie_id' => 323,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            22 => 
            array (
                'category_id' => 1023,
                'movie_id' => 324,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            23 => 
            array (
                'category_id' => 1024,
                'movie_id' => 324,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            24 => 
            array (
                'category_id' => 1025,
                'movie_id' => 324,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            25 => 
            array (
                'category_id' => 1026,
                'movie_id' => 324,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            26 => 
            array (
                'category_id' => 1027,
                'movie_id' => 324,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            27 => 
            array (
                'category_id' => 1028,
                'movie_id' => 324,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            28 => 
            array (
                'category_id' => 1029,
                'movie_id' => 325,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            29 => 
            array (
                'category_id' => 1030,
                'movie_id' => 325,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            30 => 
            array (
                'category_id' => 1031,
                'movie_id' => 325,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            31 => 
            array (
                'category_id' => 1032,
                'movie_id' => 326,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            32 => 
            array (
                'category_id' => 1033,
                'movie_id' => 326,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            33 => 
            array (
                'category_id' => 1034,
                'movie_id' => 326,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            34 => 
            array (
                'category_id' => 1035,
                'movie_id' => 327,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            35 => 
            array (
                'category_id' => 1036,
                'movie_id' => 327,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            36 => 
            array (
                'category_id' => 1037,
                'movie_id' => 327,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            37 => 
            array (
                'category_id' => 1038,
                'movie_id' => 327,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            38 => 
            array (
                'category_id' => 1039,
                'movie_id' => 328,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            39 => 
            array (
                'category_id' => 1040,
                'movie_id' => 328,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            40 => 
            array (
                'category_id' => 1041,
                'movie_id' => 328,
                'genre_id' => 16,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            41 => 
            array (
                'category_id' => 1042,
                'movie_id' => 329,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            42 => 
            array (
                'category_id' => 1043,
                'movie_id' => 329,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            43 => 
            array (
                'category_id' => 1044,
                'movie_id' => 329,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            44 => 
            array (
                'category_id' => 1045,
                'movie_id' => 330,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            45 => 
            array (
                'category_id' => 1046,
                'movie_id' => 330,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            46 => 
            array (
                'category_id' => 1047,
                'movie_id' => 331,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            47 => 
            array (
                'category_id' => 1048,
                'movie_id' => 331,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            48 => 
            array (
                'category_id' => 1049,
                'movie_id' => 331,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            49 => 
            array (
                'category_id' => 1050,
                'movie_id' => 332,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            50 => 
            array (
                'category_id' => 1051,
                'movie_id' => 332,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            51 => 
            array (
                'category_id' => 1052,
                'movie_id' => 332,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            52 => 
            array (
                'category_id' => 1053,
                'movie_id' => 333,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            53 => 
            array (
                'category_id' => 1054,
                'movie_id' => 333,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            54 => 
            array (
                'category_id' => 1055,
                'movie_id' => 334,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            55 => 
            array (
                'category_id' => 1056,
                'movie_id' => 334,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            56 => 
            array (
                'category_id' => 1057,
                'movie_id' => 334,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            57 => 
            array (
                'category_id' => 1058,
                'movie_id' => 334,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            58 => 
            array (
                'category_id' => 1059,
                'movie_id' => 335,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            59 => 
            array (
                'category_id' => 1060,
                'movie_id' => 335,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            60 => 
            array (
                'category_id' => 1061,
                'movie_id' => 335,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            61 => 
            array (
                'category_id' => 1062,
                'movie_id' => 335,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            62 => 
            array (
                'category_id' => 1063,
                'movie_id' => 336,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            63 => 
            array (
                'category_id' => 1064,
                'movie_id' => 336,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            64 => 
            array (
                'category_id' => 1065,
                'movie_id' => 337,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            65 => 
            array (
                'category_id' => 1066,
                'movie_id' => 337,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            66 => 
            array (
                'category_id' => 1067,
                'movie_id' => 337,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            67 => 
            array (
                'category_id' => 1068,
                'movie_id' => 337,
                'genre_id' => 19,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            68 => 
            array (
                'category_id' => 1069,
                'movie_id' => 338,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            69 => 
            array (
                'category_id' => 1070,
                'movie_id' => 338,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            70 => 
            array (
                'category_id' => 1071,
                'movie_id' => 338,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            71 => 
            array (
                'category_id' => 1072,
                'movie_id' => 339,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            72 => 
            array (
                'category_id' => 1073,
                'movie_id' => 339,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            73 => 
            array (
                'category_id' => 1074,
                'movie_id' => 339,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            74 => 
            array (
                'category_id' => 1075,
                'movie_id' => 340,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            75 => 
            array (
                'category_id' => 1076,
                'movie_id' => 340,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            76 => 
            array (
                'category_id' => 1077,
                'movie_id' => 340,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            77 => 
            array (
                'category_id' => 1078,
                'movie_id' => 341,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            78 => 
            array (
                'category_id' => 1079,
                'movie_id' => 341,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            79 => 
            array (
                'category_id' => 1080,
                'movie_id' => 341,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            80 => 
            array (
                'category_id' => 1081,
                'movie_id' => 342,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            81 => 
            array (
                'category_id' => 1082,
                'movie_id' => 342,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            82 => 
            array (
                'category_id' => 1083,
                'movie_id' => 342,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            83 => 
            array (
                'category_id' => 1084,
                'movie_id' => 343,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            84 => 
            array (
                'category_id' => 1085,
                'movie_id' => 344,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            85 => 
            array (
                'category_id' => 1086,
                'movie_id' => 344,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            86 => 
            array (
                'category_id' => 1087,
                'movie_id' => 345,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            87 => 
            array (
                'category_id' => 1088,
                'movie_id' => 345,
                'genre_id' => 16,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            88 => 
            array (
                'category_id' => 1089,
                'movie_id' => 346,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            89 => 
            array (
                'category_id' => 1090,
                'movie_id' => 346,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            90 => 
            array (
                'category_id' => 1091,
                'movie_id' => 346,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            91 => 
            array (
                'category_id' => 1092,
                'movie_id' => 346,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            92 => 
            array (
                'category_id' => 1093,
                'movie_id' => 346,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            93 => 
            array (
                'category_id' => 1094,
                'movie_id' => 347,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            94 => 
            array (
                'category_id' => 1095,
                'movie_id' => 347,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            95 => 
            array (
                'category_id' => 1096,
                'movie_id' => 347,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            96 => 
            array (
                'category_id' => 1097,
                'movie_id' => 348,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            97 => 
            array (
                'category_id' => 1098,
                'movie_id' => 348,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            98 => 
            array (
                'category_id' => 1099,
                'movie_id' => 348,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            99 => 
            array (
                'category_id' => 1100,
                'movie_id' => 348,
                'genre_id' => 19,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            100 => 
            array (
                'category_id' => 1101,
                'movie_id' => 349,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            101 => 
            array (
                'category_id' => 1102,
                'movie_id' => 349,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            102 => 
            array (
                'category_id' => 1103,
                'movie_id' => 349,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            103 => 
            array (
                'category_id' => 1104,
                'movie_id' => 349,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            104 => 
            array (
                'category_id' => 1105,
                'movie_id' => 349,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            105 => 
            array (
                'category_id' => 1106,
                'movie_id' => 349,
                'genre_id' => 28,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            106 => 
            array (
                'category_id' => 1107,
                'movie_id' => 350,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            107 => 
            array (
                'category_id' => 1108,
                'movie_id' => 350,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            108 => 
            array (
                'category_id' => 1109,
                'movie_id' => 350,
                'genre_id' => 28,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            109 => 
            array (
                'category_id' => 1110,
                'movie_id' => 351,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            110 => 
            array (
                'category_id' => 1111,
                'movie_id' => 351,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            111 => 
            array (
                'category_id' => 1112,
                'movie_id' => 352,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            112 => 
            array (
                'category_id' => 1113,
                'movie_id' => 352,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            113 => 
            array (
                'category_id' => 1114,
                'movie_id' => 352,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            114 => 
            array (
                'category_id' => 1115,
                'movie_id' => 352,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            115 => 
            array (
                'category_id' => 1116,
                'movie_id' => 352,
                'genre_id' => 28,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            116 => 
            array (
                'category_id' => 1117,
                'movie_id' => 353,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            117 => 
            array (
                'category_id' => 1118,
                'movie_id' => 354,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            118 => 
            array (
                'category_id' => 1119,
                'movie_id' => 354,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            119 => 
            array (
                'category_id' => 1120,
                'movie_id' => 355,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            120 => 
            array (
                'category_id' => 1121,
                'movie_id' => 355,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            121 => 
            array (
                'category_id' => 1122,
                'movie_id' => 355,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            122 => 
            array (
                'category_id' => 1123,
                'movie_id' => 355,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            123 => 
            array (
                'category_id' => 1124,
                'movie_id' => 356,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            124 => 
            array (
                'category_id' => 1125,
                'movie_id' => 356,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            125 => 
            array (
                'category_id' => 1126,
                'movie_id' => 357,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            126 => 
            array (
                'category_id' => 1127,
                'movie_id' => 357,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            127 => 
            array (
                'category_id' => 1128,
                'movie_id' => 358,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            128 => 
            array (
                'category_id' => 1129,
                'movie_id' => 358,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            129 => 
            array (
                'category_id' => 1130,
                'movie_id' => 359,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            130 => 
            array (
                'category_id' => 1131,
                'movie_id' => 360,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            131 => 
            array (
                'category_id' => 1132,
                'movie_id' => 360,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            132 => 
            array (
                'category_id' => 1133,
                'movie_id' => 360,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            133 => 
            array (
                'category_id' => 1134,
                'movie_id' => 361,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            134 => 
            array (
                'category_id' => 1135,
                'movie_id' => 362,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            135 => 
            array (
                'category_id' => 1136,
                'movie_id' => 362,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            136 => 
            array (
                'category_id' => 1137,
                'movie_id' => 362,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            137 => 
            array (
                'category_id' => 1138,
                'movie_id' => 363,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            138 => 
            array (
                'category_id' => 1139,
                'movie_id' => 363,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            139 => 
            array (
                'category_id' => 1140,
                'movie_id' => 363,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            140 => 
            array (
                'category_id' => 1141,
                'movie_id' => 363,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            141 => 
            array (
                'category_id' => 1142,
                'movie_id' => 364,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            142 => 
            array (
                'category_id' => 1143,
                'movie_id' => 364,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            143 => 
            array (
                'category_id' => 1144,
                'movie_id' => 364,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            144 => 
            array (
                'category_id' => 1145,
                'movie_id' => 364,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            145 => 
            array (
                'category_id' => 1146,
                'movie_id' => 365,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            146 => 
            array (
                'category_id' => 1147,
                'movie_id' => 365,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            147 => 
            array (
                'category_id' => 1148,
                'movie_id' => 365,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            148 => 
            array (
                'category_id' => 1149,
                'movie_id' => 366,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            149 => 
            array (
                'category_id' => 1150,
                'movie_id' => 366,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            150 => 
            array (
                'category_id' => 1151,
                'movie_id' => 366,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            151 => 
            array (
                'category_id' => 1152,
                'movie_id' => 366,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            152 => 
            array (
                'category_id' => 1153,
                'movie_id' => 367,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            153 => 
            array (
                'category_id' => 1154,
                'movie_id' => 367,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            154 => 
            array (
                'category_id' => 1155,
                'movie_id' => 367,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            155 => 
            array (
                'category_id' => 1156,
                'movie_id' => 368,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            156 => 
            array (
                'category_id' => 1157,
                'movie_id' => 369,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            157 => 
            array (
                'category_id' => 1158,
                'movie_id' => 369,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            158 => 
            array (
                'category_id' => 1159,
                'movie_id' => 369,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            159 => 
            array (
                'category_id' => 1160,
                'movie_id' => 369,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            160 => 
            array (
                'category_id' => 1161,
                'movie_id' => 370,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            161 => 
            array (
                'category_id' => 1162,
                'movie_id' => 370,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            162 => 
            array (
                'category_id' => 1163,
                'movie_id' => 370,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            163 => 
            array (
                'category_id' => 1164,
                'movie_id' => 370,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            164 => 
            array (
                'category_id' => 1165,
                'movie_id' => 370,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            165 => 
            array (
                'category_id' => 1166,
                'movie_id' => 371,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            166 => 
            array (
                'category_id' => 1167,
                'movie_id' => 371,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            167 => 
            array (
                'category_id' => 1168,
                'movie_id' => 371,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            168 => 
            array (
                'category_id' => 1169,
                'movie_id' => 371,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            169 => 
            array (
                'category_id' => 1170,
                'movie_id' => 372,
                'genre_id' => 16,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            170 => 
            array (
                'category_id' => 1171,
                'movie_id' => 373,
                'genre_id' => 16,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            171 => 
            array (
                'category_id' => 1172,
                'movie_id' => 374,
                'genre_id' => 16,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            172 => 
            array (
                'category_id' => 1173,
                'movie_id' => 374,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            173 => 
            array (
                'category_id' => 1174,
                'movie_id' => 375,
                'genre_id' => 16,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            174 => 
            array (
                'category_id' => 1175,
                'movie_id' => 375,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            175 => 
            array (
                'category_id' => 1176,
                'movie_id' => 376,
                'genre_id' => 16,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            176 => 
            array (
                'category_id' => 1177,
                'movie_id' => 376,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            177 => 
            array (
                'category_id' => 1178,
                'movie_id' => 377,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            178 => 
            array (
                'category_id' => 1179,
                'movie_id' => 377,
                'genre_id' => 16,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            179 => 
            array (
                'category_id' => 1180,
                'movie_id' => 377,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            180 => 
            array (
                'category_id' => 1181,
                'movie_id' => 378,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            181 => 
            array (
                'category_id' => 1182,
                'movie_id' => 378,
                'genre_id' => 16,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            182 => 
            array (
                'category_id' => 1183,
                'movie_id' => 378,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            183 => 
            array (
                'category_id' => 1184,
                'movie_id' => 378,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            184 => 
            array (
                'category_id' => 1185,
                'movie_id' => 379,
                'genre_id' => 16,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            185 => 
            array (
                'category_id' => 1186,
                'movie_id' => 379,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            186 => 
            array (
                'category_id' => 1187,
                'movie_id' => 380,
                'genre_id' => 16,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            187 => 
            array (
                'category_id' => 1188,
                'movie_id' => 381,
                'genre_id' => 16,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            188 => 
            array (
                'category_id' => 1189,
                'movie_id' => 382,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            189 => 
            array (
                'category_id' => 1190,
                'movie_id' => 382,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            190 => 
            array (
                'category_id' => 1191,
                'movie_id' => 382,
                'genre_id' => 30,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            191 => 
            array (
                'category_id' => 1192,
                'movie_id' => 383,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            192 => 
            array (
                'category_id' => 1193,
                'movie_id' => 383,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            193 => 
            array (
                'category_id' => 1194,
                'movie_id' => 384,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            194 => 
            array (
                'category_id' => 1195,
                'movie_id' => 384,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            195 => 
            array (
                'category_id' => 1196,
                'movie_id' => 385,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            196 => 
            array (
                'category_id' => 1197,
                'movie_id' => 385,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            197 => 
            array (
                'category_id' => 1198,
                'movie_id' => 386,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            198 => 
            array (
                'category_id' => 1199,
                'movie_id' => 386,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            199 => 
            array (
                'category_id' => 1200,
                'movie_id' => 386,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            200 => 
            array (
                'category_id' => 1201,
                'movie_id' => 386,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            201 => 
            array (
                'category_id' => 1202,
                'movie_id' => 387,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            202 => 
            array (
                'category_id' => 1203,
                'movie_id' => 387,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            203 => 
            array (
                'category_id' => 1204,
                'movie_id' => 387,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            204 => 
            array (
                'category_id' => 1205,
                'movie_id' => 388,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            205 => 
            array (
                'category_id' => 1206,
                'movie_id' => 389,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            206 => 
            array (
                'category_id' => 1207,
                'movie_id' => 390,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            207 => 
            array (
                'category_id' => 1208,
                'movie_id' => 391,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            208 => 
            array (
                'category_id' => 1209,
                'movie_id' => 391,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            209 => 
            array (
                'category_id' => 1210,
                'movie_id' => 391,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            210 => 
            array (
                'category_id' => 1211,
                'movie_id' => 392,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            211 => 
            array (
                'category_id' => 1212,
                'movie_id' => 392,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            212 => 
            array (
                'category_id' => 1213,
                'movie_id' => 392,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            213 => 
            array (
                'category_id' => 1214,
                'movie_id' => 393,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            214 => 
            array (
                'category_id' => 1215,
                'movie_id' => 393,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            215 => 
            array (
                'category_id' => 1216,
                'movie_id' => 393,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            216 => 
            array (
                'category_id' => 1217,
                'movie_id' => 394,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            217 => 
            array (
                'category_id' => 1218,
                'movie_id' => 394,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            218 => 
            array (
                'category_id' => 1219,
                'movie_id' => 394,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            219 => 
            array (
                'category_id' => 1220,
                'movie_id' => 395,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            220 => 
            array (
                'category_id' => 1221,
                'movie_id' => 395,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            221 => 
            array (
                'category_id' => 1222,
                'movie_id' => 395,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            222 => 
            array (
                'category_id' => 1223,
                'movie_id' => 396,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            223 => 
            array (
                'category_id' => 1224,
                'movie_id' => 396,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            224 => 
            array (
                'category_id' => 1225,
                'movie_id' => 396,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            225 => 
            array (
                'category_id' => 1226,
                'movie_id' => 397,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            226 => 
            array (
                'category_id' => 1227,
                'movie_id' => 397,
                'genre_id' => 16,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            227 => 
            array (
                'category_id' => 1228,
                'movie_id' => 397,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            228 => 
            array (
                'category_id' => 1229,
                'movie_id' => 398,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            229 => 
            array (
                'category_id' => 1230,
                'movie_id' => 398,
                'genre_id' => 27,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            230 => 
            array (
                'category_id' => 1231,
                'movie_id' => 399,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            231 => 
            array (
                'category_id' => 1232,
                'movie_id' => 399,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            232 => 
            array (
                'category_id' => 1233,
                'movie_id' => 399,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            233 => 
            array (
                'category_id' => 1234,
                'movie_id' => 400,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            234 => 
            array (
                'category_id' => 1235,
                'movie_id' => 400,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            235 => 
            array (
                'category_id' => 1236,
                'movie_id' => 400,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            236 => 
            array (
                'category_id' => 1237,
                'movie_id' => 401,
                'genre_id' => 16,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            237 => 
            array (
                'category_id' => 1238,
                'movie_id' => 402,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            238 => 
            array (
                'category_id' => 1239,
                'movie_id' => 402,
                'genre_id' => 16,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            239 => 
            array (
                'category_id' => 1240,
                'movie_id' => 402,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            240 => 
            array (
                'category_id' => 1241,
                'movie_id' => 403,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            241 => 
            array (
                'category_id' => 1242,
                'movie_id' => 403,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            242 => 
            array (
                'category_id' => 1243,
                'movie_id' => 404,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            243 => 
            array (
                'category_id' => 1244,
                'movie_id' => 404,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            244 => 
            array (
                'category_id' => 1245,
                'movie_id' => 404,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            245 => 
            array (
                'category_id' => 1246,
                'movie_id' => 404,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            246 => 
            array (
                'category_id' => 1247,
                'movie_id' => 405,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            247 => 
            array (
                'category_id' => 1248,
                'movie_id' => 405,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            248 => 
            array (
                'category_id' => 1249,
                'movie_id' => 405,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            249 => 
            array (
                'category_id' => 1250,
                'movie_id' => 405,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            250 => 
            array (
                'category_id' => 1251,
                'movie_id' => 405,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            251 => 
            array (
                'category_id' => 1252,
                'movie_id' => 406,
                'genre_id' => 16,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            252 => 
            array (
                'category_id' => 1253,
                'movie_id' => 406,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            253 => 
            array (
                'category_id' => 1254,
                'movie_id' => 406,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            254 => 
            array (
                'category_id' => 1255,
                'movie_id' => 407,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            255 => 
            array (
                'category_id' => 1256,
                'movie_id' => 407,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            256 => 
            array (
                'category_id' => 1257,
                'movie_id' => 408,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            257 => 
            array (
                'category_id' => 1258,
                'movie_id' => 408,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            258 => 
            array (
                'category_id' => 1259,
                'movie_id' => 409,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            259 => 
            array (
                'category_id' => 1260,
                'movie_id' => 409,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            260 => 
            array (
                'category_id' => 1261,
                'movie_id' => 409,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            261 => 
            array (
                'category_id' => 1262,
                'movie_id' => 410,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            262 => 
            array (
                'category_id' => 1263,
                'movie_id' => 410,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            263 => 
            array (
                'category_id' => 1264,
                'movie_id' => 411,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            264 => 
            array (
                'category_id' => 1265,
                'movie_id' => 411,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            265 => 
            array (
                'category_id' => 1266,
                'movie_id' => 412,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            266 => 
            array (
                'category_id' => 1267,
                'movie_id' => 412,
                'genre_id' => 16,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            267 => 
            array (
                'category_id' => 1268,
                'movie_id' => 412,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            268 => 
            array (
                'category_id' => 1269,
                'movie_id' => 413,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            269 => 
            array (
                'category_id' => 1270,
                'movie_id' => 413,
                'genre_id' => 16,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            270 => 
            array (
                'category_id' => 1271,
                'movie_id' => 413,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            271 => 
            array (
                'category_id' => 1272,
                'movie_id' => 413,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            272 => 
            array (
                'category_id' => 1273,
                'movie_id' => 414,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            273 => 
            array (
                'category_id' => 1274,
                'movie_id' => 414,
                'genre_id' => 16,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            274 => 
            array (
                'category_id' => 1275,
                'movie_id' => 414,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            275 => 
            array (
                'category_id' => 1276,
                'movie_id' => 414,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            276 => 
            array (
                'category_id' => 1277,
                'movie_id' => 415,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            277 => 
            array (
                'category_id' => 1278,
                'movie_id' => 415,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            278 => 
            array (
                'category_id' => 1279,
                'movie_id' => 415,
                'genre_id' => 16,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            279 => 
            array (
                'category_id' => 1280,
                'movie_id' => 415,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            280 => 
            array (
                'category_id' => 1281,
                'movie_id' => 416,
                'genre_id' => 16,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            281 => 
            array (
                'category_id' => 1282,
                'movie_id' => 416,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            282 => 
            array (
                'category_id' => 1283,
                'movie_id' => 417,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            283 => 
            array (
                'category_id' => 1284,
                'movie_id' => 417,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            284 => 
            array (
                'category_id' => 1285,
                'movie_id' => 417,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            285 => 
            array (
                'category_id' => 1286,
                'movie_id' => 418,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            286 => 
            array (
                'category_id' => 1287,
                'movie_id' => 418,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            287 => 
            array (
                'category_id' => 1288,
                'movie_id' => 418,
                'genre_id' => 14,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            288 => 
            array (
                'category_id' => 1289,
                'movie_id' => 418,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            289 => 
            array (
                'category_id' => 1290,
                'movie_id' => 419,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            290 => 
            array (
                'category_id' => 1291,
                'movie_id' => 419,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            291 => 
            array (
                'category_id' => 1292,
                'movie_id' => 419,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            292 => 
            array (
                'category_id' => 1293,
                'movie_id' => 419,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            293 => 
            array (
                'category_id' => 1294,
                'movie_id' => 420,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            294 => 
            array (
                'category_id' => 1295,
                'movie_id' => 420,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            295 => 
            array (
                'category_id' => 1296,
                'movie_id' => 420,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            296 => 
            array (
                'category_id' => 1297,
                'movie_id' => 420,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            297 => 
            array (
                'category_id' => 1298,
                'movie_id' => 421,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            298 => 
            array (
                'category_id' => 1299,
                'movie_id' => 421,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            299 => 
            array (
                'category_id' => 1300,
                'movie_id' => 421,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            300 => 
            array (
                'category_id' => 1301,
                'movie_id' => 421,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            301 => 
            array (
                'category_id' => 1302,
                'movie_id' => 422,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            302 => 
            array (
                'category_id' => 1303,
                'movie_id' => 423,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            303 => 
            array (
                'category_id' => 1304,
                'movie_id' => 423,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            304 => 
            array (
                'category_id' => 1305,
                'movie_id' => 424,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            305 => 
            array (
                'category_id' => 1306,
                'movie_id' => 424,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            306 => 
            array (
                'category_id' => 1307,
                'movie_id' => 424,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            307 => 
            array (
                'category_id' => 1308,
                'movie_id' => 424,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            308 => 
            array (
                'category_id' => 1309,
                'movie_id' => 425,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            309 => 
            array (
                'category_id' => 1310,
                'movie_id' => 425,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            310 => 
            array (
                'category_id' => 1311,
                'movie_id' => 426,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            311 => 
            array (
                'category_id' => 1312,
                'movie_id' => 426,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            312 => 
            array (
                'category_id' => 1313,
                'movie_id' => 426,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            313 => 
            array (
                'category_id' => 1314,
                'movie_id' => 427,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            314 => 
            array (
                'category_id' => 1315,
                'movie_id' => 427,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            315 => 
            array (
                'category_id' => 1316,
                'movie_id' => 428,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            316 => 
            array (
                'category_id' => 1317,
                'movie_id' => 428,
                'genre_id' => 30,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            317 => 
            array (
                'category_id' => 1318,
                'movie_id' => 429,
                'genre_id' => 16,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            318 => 
            array (
                'category_id' => 1319,
                'movie_id' => 429,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            319 => 
            array (
                'category_id' => 1320,
                'movie_id' => 430,
                'genre_id' => 16,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            320 => 
            array (
                'category_id' => 1321,
                'movie_id' => 430,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            321 => 
            array (
                'category_id' => 1322,
                'movie_id' => 431,
                'genre_id' => 16,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            322 => 
            array (
                'category_id' => 1323,
                'movie_id' => 431,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            323 => 
            array (
                'category_id' => 1324,
                'movie_id' => 432,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            324 => 
            array (
                'category_id' => 1325,
                'movie_id' => 432,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            325 => 
            array (
                'category_id' => 1326,
                'movie_id' => 432,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            326 => 
            array (
                'category_id' => 1327,
                'movie_id' => 433,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            327 => 
            array (
                'category_id' => 1328,
                'movie_id' => 433,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            328 => 
            array (
                'category_id' => 1329,
                'movie_id' => 433,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            329 => 
            array (
                'category_id' => 1330,
                'movie_id' => 434,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            330 => 
            array (
                'category_id' => 1331,
                'movie_id' => 434,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            331 => 
            array (
                'category_id' => 1332,
                'movie_id' => 434,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            332 => 
            array (
                'category_id' => 1333,
                'movie_id' => 435,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            333 => 
            array (
                'category_id' => 1334,
                'movie_id' => 435,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            334 => 
            array (
                'category_id' => 1335,
                'movie_id' => 435,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            335 => 
            array (
                'category_id' => 1336,
                'movie_id' => 436,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            336 => 
            array (
                'category_id' => 1337,
                'movie_id' => 436,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            337 => 
            array (
                'category_id' => 1338,
                'movie_id' => 436,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            338 => 
            array (
                'category_id' => 1339,
                'movie_id' => 437,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            339 => 
            array (
                'category_id' => 1340,
                'movie_id' => 437,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            340 => 
            array (
                'category_id' => 1341,
                'movie_id' => 437,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            341 => 
            array (
                'category_id' => 1342,
                'movie_id' => 438,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            342 => 
            array (
                'category_id' => 1343,
                'movie_id' => 438,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            343 => 
            array (
                'category_id' => 1344,
                'movie_id' => 438,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            344 => 
            array (
                'category_id' => 1345,
                'movie_id' => 439,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            345 => 
            array (
                'category_id' => 1346,
                'movie_id' => 439,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            346 => 
            array (
                'category_id' => 1347,
                'movie_id' => 439,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            347 => 
            array (
                'category_id' => 1348,
                'movie_id' => 440,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            348 => 
            array (
                'category_id' => 1349,
                'movie_id' => 440,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            349 => 
            array (
                'category_id' => 1350,
                'movie_id' => 440,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            350 => 
            array (
                'category_id' => 1351,
                'movie_id' => 441,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            351 => 
            array (
                'category_id' => 1352,
                'movie_id' => 441,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            352 => 
            array (
                'category_id' => 1353,
                'movie_id' => 441,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            353 => 
            array (
                'category_id' => 1354,
                'movie_id' => 441,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            354 => 
            array (
                'category_id' => 1355,
                'movie_id' => 442,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            355 => 
            array (
                'category_id' => 1356,
                'movie_id' => 442,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            356 => 
            array (
                'category_id' => 1357,
                'movie_id' => 442,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            357 => 
            array (
                'category_id' => 1358,
                'movie_id' => 442,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            358 => 
            array (
                'category_id' => 1359,
                'movie_id' => 443,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            359 => 
            array (
                'category_id' => 1360,
                'movie_id' => 443,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            360 => 
            array (
                'category_id' => 1361,
                'movie_id' => 443,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            361 => 
            array (
                'category_id' => 1362,
                'movie_id' => 444,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            362 => 
            array (
                'category_id' => 1363,
                'movie_id' => 444,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            363 => 
            array (
                'category_id' => 1364,
                'movie_id' => 444,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            364 => 
            array (
                'category_id' => 1365,
                'movie_id' => 445,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            365 => 
            array (
                'category_id' => 1366,
                'movie_id' => 445,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            366 => 
            array (
                'category_id' => 1367,
                'movie_id' => 445,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            367 => 
            array (
                'category_id' => 1368,
                'movie_id' => 446,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            368 => 
            array (
                'category_id' => 1369,
                'movie_id' => 446,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            369 => 
            array (
                'category_id' => 1370,
                'movie_id' => 446,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            370 => 
            array (
                'category_id' => 1371,
                'movie_id' => 447,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            371 => 
            array (
                'category_id' => 1372,
                'movie_id' => 447,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            372 => 
            array (
                'category_id' => 1373,
                'movie_id' => 447,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            373 => 
            array (
                'category_id' => 1374,
                'movie_id' => 448,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            374 => 
            array (
                'category_id' => 1375,
                'movie_id' => 448,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            375 => 
            array (
                'category_id' => 1376,
                'movie_id' => 448,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            376 => 
            array (
                'category_id' => 1377,
                'movie_id' => 448,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            377 => 
            array (
                'category_id' => 1378,
                'movie_id' => 449,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            378 => 
            array (
                'category_id' => 1379,
                'movie_id' => 449,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            379 => 
            array (
                'category_id' => 1380,
                'movie_id' => 449,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            380 => 
            array (
                'category_id' => 1381,
                'movie_id' => 450,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            381 => 
            array (
                'category_id' => 1382,
                'movie_id' => 450,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            382 => 
            array (
                'category_id' => 1383,
                'movie_id' => 450,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            383 => 
            array (
                'category_id' => 1384,
                'movie_id' => 451,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            384 => 
            array (
                'category_id' => 1385,
                'movie_id' => 451,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            385 => 
            array (
                'category_id' => 1386,
                'movie_id' => 451,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            386 => 
            array (
                'category_id' => 1387,
                'movie_id' => 452,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            387 => 
            array (
                'category_id' => 1388,
                'movie_id' => 452,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            388 => 
            array (
                'category_id' => 1389,
                'movie_id' => 452,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            389 => 
            array (
                'category_id' => 1390,
                'movie_id' => 453,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            390 => 
            array (
                'category_id' => 1391,
                'movie_id' => 453,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            391 => 
            array (
                'category_id' => 1392,
                'movie_id' => 454,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            392 => 
            array (
                'category_id' => 1393,
                'movie_id' => 454,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            393 => 
            array (
                'category_id' => 1394,
                'movie_id' => 454,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            394 => 
            array (
                'category_id' => 1395,
                'movie_id' => 455,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            395 => 
            array (
                'category_id' => 1396,
                'movie_id' => 455,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            396 => 
            array (
                'category_id' => 1397,
                'movie_id' => 455,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            397 => 
            array (
                'category_id' => 1398,
                'movie_id' => 456,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            398 => 
            array (
                'category_id' => 1399,
                'movie_id' => 457,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            399 => 
            array (
                'category_id' => 1400,
                'movie_id' => 457,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            400 => 
            array (
                'category_id' => 1401,
                'movie_id' => 458,
                'genre_id' => 4,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            401 => 
            array (
                'category_id' => 1402,
                'movie_id' => 458,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            402 => 
            array (
                'category_id' => 1403,
                'movie_id' => 458,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            403 => 
            array (
                'category_id' => 1404,
                'movie_id' => 458,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            404 => 
            array (
                'category_id' => 1405,
                'movie_id' => 459,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            405 => 
            array (
                'category_id' => 1406,
                'movie_id' => 459,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            406 => 
            array (
                'category_id' => 1407,
                'movie_id' => 460,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            407 => 
            array (
                'category_id' => 1408,
                'movie_id' => 460,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            408 => 
            array (
                'category_id' => 1409,
                'movie_id' => 460,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            409 => 
            array (
                'category_id' => 1410,
                'movie_id' => 460,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            410 => 
            array (
                'category_id' => 1411,
                'movie_id' => 461,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            411 => 
            array (
                'category_id' => 1412,
                'movie_id' => 461,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            412 => 
            array (
                'category_id' => 1413,
                'movie_id' => 461,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            413 => 
            array (
                'category_id' => 1414,
                'movie_id' => 461,
                'genre_id' => 28,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            414 => 
            array (
                'category_id' => 1415,
                'movie_id' => 462,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            415 => 
            array (
                'category_id' => 1416,
                'movie_id' => 462,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            416 => 
            array (
                'category_id' => 1417,
                'movie_id' => 463,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            417 => 
            array (
                'category_id' => 1418,
                'movie_id' => 463,
                'genre_id' => 16,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            418 => 
            array (
                'category_id' => 1419,
                'movie_id' => 464,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            419 => 
            array (
                'category_id' => 1420,
                'movie_id' => 464,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            420 => 
            array (
                'category_id' => 1421,
                'movie_id' => 464,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            421 => 
            array (
                'category_id' => 1422,
                'movie_id' => 465,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            422 => 
            array (
                'category_id' => 1423,
                'movie_id' => 465,
                'genre_id' => 16,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            423 => 
            array (
                'category_id' => 1424,
                'movie_id' => 465,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            424 => 
            array (
                'category_id' => 1425,
                'movie_id' => 466,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            425 => 
            array (
                'category_id' => 1426,
                'movie_id' => 466,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            426 => 
            array (
                'category_id' => 1427,
                'movie_id' => 466,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            427 => 
            array (
                'category_id' => 1428,
                'movie_id' => 467,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            428 => 
            array (
                'category_id' => 1429,
                'movie_id' => 467,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            429 => 
            array (
                'category_id' => 1430,
                'movie_id' => 467,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            430 => 
            array (
                'category_id' => 1431,
                'movie_id' => 468,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            431 => 
            array (
                'category_id' => 1432,
                'movie_id' => 468,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            432 => 
            array (
                'category_id' => 1433,
                'movie_id' => 468,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            433 => 
            array (
                'category_id' => 1434,
                'movie_id' => 469,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            434 => 
            array (
                'category_id' => 1435,
                'movie_id' => 469,
                'genre_id' => 16,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            435 => 
            array (
                'category_id' => 1436,
                'movie_id' => 470,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            436 => 
            array (
                'category_id' => 1437,
                'movie_id' => 470,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            437 => 
            array (
                'category_id' => 1438,
                'movie_id' => 471,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            438 => 
            array (
                'category_id' => 1439,
                'movie_id' => 471,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            439 => 
            array (
                'category_id' => 1440,
                'movie_id' => 472,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            440 => 
            array (
                'category_id' => 1441,
                'movie_id' => 472,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            441 => 
            array (
                'category_id' => 1442,
                'movie_id' => 472,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            442 => 
            array (
                'category_id' => 1443,
                'movie_id' => 473,
                'genre_id' => 4,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            443 => 
            array (
                'category_id' => 1444,
                'movie_id' => 473,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            444 => 
            array (
                'category_id' => 1445,
                'movie_id' => 473,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            445 => 
            array (
                'category_id' => 1446,
                'movie_id' => 473,
                'genre_id' => 19,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            446 => 
            array (
                'category_id' => 1447,
                'movie_id' => 473,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            447 => 
            array (
                'category_id' => 1448,
                'movie_id' => 474,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            448 => 
            array (
                'category_id' => 1449,
                'movie_id' => 474,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            449 => 
            array (
                'category_id' => 1450,
                'movie_id' => 474,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            450 => 
            array (
                'category_id' => 1451,
                'movie_id' => 474,
                'genre_id' => 19,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            451 => 
            array (
                'category_id' => 1452,
                'movie_id' => 475,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            452 => 
            array (
                'category_id' => 1453,
                'movie_id' => 475,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            453 => 
            array (
                'category_id' => 1454,
                'movie_id' => 477,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            454 => 
            array (
                'category_id' => 1455,
                'movie_id' => 477,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            455 => 
            array (
                'category_id' => 1456,
                'movie_id' => 478,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            456 => 
            array (
                'category_id' => 1457,
                'movie_id' => 478,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            457 => 
            array (
                'category_id' => 1458,
                'movie_id' => 478,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            458 => 
            array (
                'category_id' => 1459,
                'movie_id' => 479,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            459 => 
            array (
                'category_id' => 1460,
                'movie_id' => 479,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            460 => 
            array (
                'category_id' => 1461,
                'movie_id' => 480,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            461 => 
            array (
                'category_id' => 1462,
                'movie_id' => 480,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            462 => 
            array (
                'category_id' => 1463,
                'movie_id' => 480,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            463 => 
            array (
                'category_id' => 1464,
                'movie_id' => 481,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            464 => 
            array (
                'category_id' => 1465,
                'movie_id' => 481,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            465 => 
            array (
                'category_id' => 1466,
                'movie_id' => 481,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            466 => 
            array (
                'category_id' => 1467,
                'movie_id' => 481,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            467 => 
            array (
                'category_id' => 1468,
                'movie_id' => 482,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            468 => 
            array (
                'category_id' => 1469,
                'movie_id' => 482,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            469 => 
            array (
                'category_id' => 1470,
                'movie_id' => 483,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            470 => 
            array (
                'category_id' => 1471,
                'movie_id' => 483,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            471 => 
            array (
                'category_id' => 1472,
                'movie_id' => 483,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            472 => 
            array (
                'category_id' => 1473,
                'movie_id' => 483,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            473 => 
            array (
                'category_id' => 1474,
                'movie_id' => 483,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            474 => 
            array (
                'category_id' => 1475,
                'movie_id' => 484,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            475 => 
            array (
                'category_id' => 1476,
                'movie_id' => 484,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            476 => 
            array (
                'category_id' => 1477,
                'movie_id' => 484,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            477 => 
            array (
                'category_id' => 1478,
                'movie_id' => 485,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            478 => 
            array (
                'category_id' => 1479,
                'movie_id' => 485,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            479 => 
            array (
                'category_id' => 1480,
                'movie_id' => 485,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            480 => 
            array (
                'category_id' => 1481,
                'movie_id' => 485,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            481 => 
            array (
                'category_id' => 1482,
                'movie_id' => 486,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            482 => 
            array (
                'category_id' => 1483,
                'movie_id' => 486,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            483 => 
            array (
                'category_id' => 1484,
                'movie_id' => 487,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            484 => 
            array (
                'category_id' => 1485,
                'movie_id' => 487,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            485 => 
            array (
                'category_id' => 1486,
                'movie_id' => 487,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            486 => 
            array (
                'category_id' => 1487,
                'movie_id' => 487,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            487 => 
            array (
                'category_id' => 1488,
                'movie_id' => 488,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            488 => 
            array (
                'category_id' => 1489,
                'movie_id' => 488,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            489 => 
            array (
                'category_id' => 1490,
                'movie_id' => 489,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            490 => 
            array (
                'category_id' => 1491,
                'movie_id' => 489,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            491 => 
            array (
                'category_id' => 1492,
                'movie_id' => 490,
                'genre_id' => 16,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            492 => 
            array (
                'category_id' => 1493,
                'movie_id' => 490,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            493 => 
            array (
                'category_id' => 1494,
                'movie_id' => 491,
                'genre_id' => 14,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            494 => 
            array (
                'category_id' => 1495,
                'movie_id' => 491,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            495 => 
            array (
                'category_id' => 1496,
                'movie_id' => 491,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            496 => 
            array (
                'category_id' => 1497,
                'movie_id' => 492,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            497 => 
            array (
                'category_id' => 1498,
                'movie_id' => 492,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            498 => 
            array (
                'category_id' => 1499,
                'movie_id' => 492,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            499 => 
            array (
                'category_id' => 1500,
                'movie_id' => 493,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
        ));
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'category_id' => 1501,
                'movie_id' => 493,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            1 => 
            array (
                'category_id' => 1502,
                'movie_id' => 493,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            2 => 
            array (
                'category_id' => 1503,
                'movie_id' => 494,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            3 => 
            array (
                'category_id' => 1504,
                'movie_id' => 494,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            4 => 
            array (
                'category_id' => 1505,
                'movie_id' => 494,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            5 => 
            array (
                'category_id' => 1506,
                'movie_id' => 495,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            6 => 
            array (
                'category_id' => 1507,
                'movie_id' => 495,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            7 => 
            array (
                'category_id' => 1508,
                'movie_id' => 495,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            8 => 
            array (
                'category_id' => 1509,
                'movie_id' => 495,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            9 => 
            array (
                'category_id' => 1510,
                'movie_id' => 496,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            10 => 
            array (
                'category_id' => 1511,
                'movie_id' => 497,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            11 => 
            array (
                'category_id' => 1512,
                'movie_id' => 497,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            12 => 
            array (
                'category_id' => 1513,
                'movie_id' => 497,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            13 => 
            array (
                'category_id' => 1514,
                'movie_id' => 498,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            14 => 
            array (
                'category_id' => 1515,
                'movie_id' => 498,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            15 => 
            array (
                'category_id' => 1516,
                'movie_id' => 498,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            16 => 
            array (
                'category_id' => 1517,
                'movie_id' => 499,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            17 => 
            array (
                'category_id' => 1518,
                'movie_id' => 499,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            18 => 
            array (
                'category_id' => 1519,
                'movie_id' => 499,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            19 => 
            array (
                'category_id' => 1520,
                'movie_id' => 499,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            20 => 
            array (
                'category_id' => 1521,
                'movie_id' => 500,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            21 => 
            array (
                'category_id' => 1522,
                'movie_id' => 501,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            22 => 
            array (
                'category_id' => 1523,
                'movie_id' => 501,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            23 => 
            array (
                'category_id' => 1524,
                'movie_id' => 501,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            24 => 
            array (
                'category_id' => 1525,
                'movie_id' => 502,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            25 => 
            array (
                'category_id' => 1526,
                'movie_id' => 502,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            26 => 
            array (
                'category_id' => 1527,
                'movie_id' => 502,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            27 => 
            array (
                'category_id' => 1528,
                'movie_id' => 502,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            28 => 
            array (
                'category_id' => 1529,
                'movie_id' => 503,
                'genre_id' => 28,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            29 => 
            array (
                'category_id' => 1530,
                'movie_id' => 504,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            30 => 
            array (
                'category_id' => 1531,
                'movie_id' => 504,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            31 => 
            array (
                'category_id' => 1532,
                'movie_id' => 504,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            32 => 
            array (
                'category_id' => 1533,
                'movie_id' => 504,
                'genre_id' => 15,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            33 => 
            array (
                'category_id' => 1534,
                'movie_id' => 504,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            34 => 
            array (
                'category_id' => 1535,
                'movie_id' => 505,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            35 => 
            array (
                'category_id' => 1536,
                'movie_id' => 505,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            36 => 
            array (
                'category_id' => 1537,
                'movie_id' => 505,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            37 => 
            array (
                'category_id' => 1538,
                'movie_id' => 506,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            38 => 
            array (
                'category_id' => 1539,
                'movie_id' => 506,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            39 => 
            array (
                'category_id' => 1540,
                'movie_id' => 506,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            40 => 
            array (
                'category_id' => 1541,
                'movie_id' => 507,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            41 => 
            array (
                'category_id' => 1542,
                'movie_id' => 507,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            42 => 
            array (
                'category_id' => 1543,
                'movie_id' => 507,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            43 => 
            array (
                'category_id' => 1544,
                'movie_id' => 508,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            44 => 
            array (
                'category_id' => 1545,
                'movie_id' => 508,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            45 => 
            array (
                'category_id' => 1546,
                'movie_id' => 508,
                'genre_id' => 16,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            46 => 
            array (
                'category_id' => 1547,
                'movie_id' => 509,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            47 => 
            array (
                'category_id' => 1548,
                'movie_id' => 509,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            48 => 
            array (
                'category_id' => 1549,
                'movie_id' => 509,
                'genre_id' => 16,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            49 => 
            array (
                'category_id' => 1550,
                'movie_id' => 510,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            50 => 
            array (
                'category_id' => 1551,
                'movie_id' => 510,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            51 => 
            array (
                'category_id' => 1552,
                'movie_id' => 510,
                'genre_id' => 16,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            52 => 
            array (
                'category_id' => 1553,
                'movie_id' => 510,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            53 => 
            array (
                'category_id' => 1554,
                'movie_id' => 510,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            54 => 
            array (
                'category_id' => 1555,
                'movie_id' => 511,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            55 => 
            array (
                'category_id' => 1556,
                'movie_id' => 511,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            56 => 
            array (
                'category_id' => 1557,
                'movie_id' => 511,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            57 => 
            array (
                'category_id' => 1558,
                'movie_id' => 512,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            58 => 
            array (
                'category_id' => 1559,
                'movie_id' => 512,
                'genre_id' => 16,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            59 => 
            array (
                'category_id' => 1560,
                'movie_id' => 512,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            60 => 
            array (
                'category_id' => 1561,
                'movie_id' => 512,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            61 => 
            array (
                'category_id' => 1562,
                'movie_id' => 513,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            62 => 
            array (
                'category_id' => 1563,
                'movie_id' => 513,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            63 => 
            array (
                'category_id' => 1564,
                'movie_id' => 513,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            64 => 
            array (
                'category_id' => 1565,
                'movie_id' => 514,
                'genre_id' => 9,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            65 => 
            array (
                'category_id' => 1566,
                'movie_id' => 514,
                'genre_id' => 15,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            66 => 
            array (
                'category_id' => 1567,
                'movie_id' => 515,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            67 => 
            array (
                'category_id' => 1568,
                'movie_id' => 515,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            68 => 
            array (
                'category_id' => 1569,
                'movie_id' => 515,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            69 => 
            array (
                'category_id' => 1570,
                'movie_id' => 515,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            70 => 
            array (
                'category_id' => 1571,
                'movie_id' => 515,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            71 => 
            array (
                'category_id' => 1572,
                'movie_id' => 516,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            72 => 
            array (
                'category_id' => 1573,
                'movie_id' => 516,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            73 => 
            array (
                'category_id' => 1574,
                'movie_id' => 516,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            74 => 
            array (
                'category_id' => 1575,
                'movie_id' => 516,
                'genre_id' => 19,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            75 => 
            array (
                'category_id' => 1576,
                'movie_id' => 517,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            76 => 
            array (
                'category_id' => 1577,
                'movie_id' => 517,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            77 => 
            array (
                'category_id' => 1578,
                'movie_id' => 517,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            78 => 
            array (
                'category_id' => 1579,
                'movie_id' => 517,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            79 => 
            array (
                'category_id' => 1580,
                'movie_id' => 518,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            80 => 
            array (
                'category_id' => 1581,
                'movie_id' => 518,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            81 => 
            array (
                'category_id' => 1582,
                'movie_id' => 519,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            82 => 
            array (
                'category_id' => 1583,
                'movie_id' => 519,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            83 => 
            array (
                'category_id' => 1584,
                'movie_id' => 519,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            84 => 
            array (
                'category_id' => 1585,
                'movie_id' => 520,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            85 => 
            array (
                'category_id' => 1586,
                'movie_id' => 520,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            86 => 
            array (
                'category_id' => 1587,
                'movie_id' => 520,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            87 => 
            array (
                'category_id' => 1588,
                'movie_id' => 521,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            88 => 
            array (
                'category_id' => 1589,
                'movie_id' => 521,
                'genre_id' => 15,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            89 => 
            array (
                'category_id' => 1590,
                'movie_id' => 521,
                'genre_id' => 27,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            90 => 
            array (
                'category_id' => 1591,
                'movie_id' => 257,
                'genre_id' => 18,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            91 => 
            array (
                'category_id' => 1592,
                'movie_id' => 49,
                'genre_id' => 18,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            92 => 
            array (
                'category_id' => 1593,
                'movie_id' => 9,
                'genre_id' => 18,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            93 => 
            array (
                'category_id' => 1594,
                'movie_id' => 356,
                'genre_id' => 18,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            94 => 
            array (
                'category_id' => 1595,
                'movie_id' => 357,
                'genre_id' => 18,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            95 => 
            array (
                'category_id' => 1596,
                'movie_id' => 522,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            96 => 
            array (
                'category_id' => 1597,
                'movie_id' => 522,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            97 => 
            array (
                'category_id' => 1598,
                'movie_id' => 522,
                'genre_id' => 27,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            98 => 
            array (
                'category_id' => 1599,
                'movie_id' => 523,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            99 => 
            array (
                'category_id' => 1600,
                'movie_id' => 523,
                'genre_id' => 4,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            100 => 
            array (
                'category_id' => 1601,
                'movie_id' => 523,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            101 => 
            array (
                'category_id' => 1602,
                'movie_id' => 523,
                'genre_id' => 15,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            102 => 
            array (
                'category_id' => 1603,
                'movie_id' => 523,
                'genre_id' => 27,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            103 => 
            array (
                'category_id' => 1604,
                'movie_id' => 524,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            104 => 
            array (
                'category_id' => 1605,
                'movie_id' => 524,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            105 => 
            array (
                'category_id' => 1606,
                'movie_id' => 524,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            106 => 
            array (
                'category_id' => 1607,
                'movie_id' => 524,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            107 => 
            array (
                'category_id' => 1608,
                'movie_id' => 525,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            108 => 
            array (
                'category_id' => 1609,
                'movie_id' => 525,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            109 => 
            array (
                'category_id' => 1610,
                'movie_id' => 526,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            110 => 
            array (
                'category_id' => 1611,
                'movie_id' => 526,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            111 => 
            array (
                'category_id' => 1612,
                'movie_id' => 526,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            112 => 
            array (
                'category_id' => 1613,
                'movie_id' => 526,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            113 => 
            array (
                'category_id' => 1614,
                'movie_id' => 526,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            114 => 
            array (
                'category_id' => 1615,
                'movie_id' => 526,
                'genre_id' => 19,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            115 => 
            array (
                'category_id' => 1616,
                'movie_id' => 526,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            116 => 
            array (
                'category_id' => 1617,
                'movie_id' => 527,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            117 => 
            array (
                'category_id' => 1618,
                'movie_id' => 527,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            118 => 
            array (
                'category_id' => 1619,
                'movie_id' => 527,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            119 => 
            array (
                'category_id' => 1620,
                'movie_id' => 527,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            120 => 
            array (
                'category_id' => 1621,
                'movie_id' => 527,
                'genre_id' => 19,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            121 => 
            array (
                'category_id' => 1622,
                'movie_id' => 527,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            122 => 
            array (
                'category_id' => 1623,
                'movie_id' => 528,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            123 => 
            array (
                'category_id' => 1624,
                'movie_id' => 528,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            124 => 
            array (
                'category_id' => 1625,
                'movie_id' => 528,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            125 => 
            array (
                'category_id' => 1626,
                'movie_id' => 528,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            126 => 
            array (
                'category_id' => 1627,
                'movie_id' => 528,
                'genre_id' => 19,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            127 => 
            array (
                'category_id' => 1628,
                'movie_id' => 528,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            128 => 
            array (
                'category_id' => 1629,
                'movie_id' => 529,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            129 => 
            array (
                'category_id' => 1630,
                'movie_id' => 529,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            130 => 
            array (
                'category_id' => 1631,
                'movie_id' => 530,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            131 => 
            array (
                'category_id' => 1632,
                'movie_id' => 530,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            132 => 
            array (
                'category_id' => 1633,
                'movie_id' => 530,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            133 => 
            array (
                'category_id' => 1634,
                'movie_id' => 530,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            134 => 
            array (
                'category_id' => 1635,
                'movie_id' => 530,
                'genre_id' => 19,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            135 => 
            array (
                'category_id' => 1636,
                'movie_id' => 531,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            136 => 
            array (
                'category_id' => 1637,
                'movie_id' => 531,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            137 => 
            array (
                'category_id' => 1638,
                'movie_id' => 531,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            138 => 
            array (
                'category_id' => 1639,
                'movie_id' => 531,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            139 => 
            array (
                'category_id' => 1640,
                'movie_id' => 531,
                'genre_id' => 30,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            140 => 
            array (
                'category_id' => 1641,
                'movie_id' => 532,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            141 => 
            array (
                'category_id' => 1642,
                'movie_id' => 532,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            142 => 
            array (
                'category_id' => 1643,
                'movie_id' => 532,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            143 => 
            array (
                'category_id' => 1644,
                'movie_id' => 532,
                'genre_id' => 30,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            144 => 
            array (
                'category_id' => 1645,
                'movie_id' => 532,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            145 => 
            array (
                'category_id' => 1646,
                'movie_id' => 532,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            146 => 
            array (
                'category_id' => 1647,
                'movie_id' => 533,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            147 => 
            array (
                'category_id' => 1648,
                'movie_id' => 533,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            148 => 
            array (
                'category_id' => 1649,
                'movie_id' => 533,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            149 => 
            array (
                'category_id' => 1650,
                'movie_id' => 533,
                'genre_id' => 30,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            150 => 
            array (
                'category_id' => 1651,
                'movie_id' => 533,
                'genre_id' => 19,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            151 => 
            array (
                'category_id' => 1652,
                'movie_id' => 534,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            152 => 
            array (
                'category_id' => 1653,
                'movie_id' => 534,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            153 => 
            array (
                'category_id' => 1654,
                'movie_id' => 534,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            154 => 
            array (
                'category_id' => 1655,
                'movie_id' => 534,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            155 => 
            array (
                'category_id' => 1656,
                'movie_id' => 535,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            156 => 
            array (
                'category_id' => 1657,
                'movie_id' => 535,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            157 => 
            array (
                'category_id' => 1658,
                'movie_id' => 535,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            158 => 
            array (
                'category_id' => 1659,
                'movie_id' => 535,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            159 => 
            array (
                'category_id' => 1660,
                'movie_id' => 536,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            160 => 
            array (
                'category_id' => 1661,
                'movie_id' => 536,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            161 => 
            array (
                'category_id' => 1662,
                'movie_id' => 536,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            162 => 
            array (
                'category_id' => 1663,
                'movie_id' => 536,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            163 => 
            array (
                'category_id' => 1664,
                'movie_id' => 536,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            164 => 
            array (
                'category_id' => 1665,
                'movie_id' => 537,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            165 => 
            array (
                'category_id' => 1666,
                'movie_id' => 537,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            166 => 
            array (
                'category_id' => 1667,
                'movie_id' => 537,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            167 => 
            array (
                'category_id' => 1668,
                'movie_id' => 537,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            168 => 
            array (
                'category_id' => 1669,
                'movie_id' => 537,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            169 => 
            array (
                'category_id' => 1670,
                'movie_id' => 538,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            170 => 
            array (
                'category_id' => 1671,
                'movie_id' => 538,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            171 => 
            array (
                'category_id' => 1672,
                'movie_id' => 538,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            172 => 
            array (
                'category_id' => 1673,
                'movie_id' => 538,
                'genre_id' => 19,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            173 => 
            array (
                'category_id' => 1674,
                'movie_id' => 538,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            174 => 
            array (
                'category_id' => 1675,
                'movie_id' => 539,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            175 => 
            array (
                'category_id' => 1676,
                'movie_id' => 539,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            176 => 
            array (
                'category_id' => 1677,
                'movie_id' => 539,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            177 => 
            array (
                'category_id' => 1678,
                'movie_id' => 539,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            178 => 
            array (
                'category_id' => 1679,
                'movie_id' => 540,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            179 => 
            array (
                'category_id' => 1680,
                'movie_id' => 540,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            180 => 
            array (
                'category_id' => 1681,
                'movie_id' => 540,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            181 => 
            array (
                'category_id' => 1682,
                'movie_id' => 540,
                'genre_id' => 19,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            182 => 
            array (
                'category_id' => 1683,
                'movie_id' => 540,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            183 => 
            array (
                'category_id' => 1684,
                'movie_id' => 541,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            184 => 
            array (
                'category_id' => 1685,
                'movie_id' => 541,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            185 => 
            array (
                'category_id' => 1686,
                'movie_id' => 541,
                'genre_id' => 19,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            186 => 
            array (
                'category_id' => 1687,
                'movie_id' => 542,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            187 => 
            array (
                'category_id' => 1688,
                'movie_id' => 542,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            188 => 
            array (
                'category_id' => 1689,
                'movie_id' => 542,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            189 => 
            array (
                'category_id' => 1690,
                'movie_id' => 542,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            190 => 
            array (
                'category_id' => 1691,
                'movie_id' => 542,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            191 => 
            array (
                'category_id' => 1692,
                'movie_id' => 543,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            192 => 
            array (
                'category_id' => 1693,
                'movie_id' => 543,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            193 => 
            array (
                'category_id' => 1694,
                'movie_id' => 543,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            194 => 
            array (
                'category_id' => 1695,
                'movie_id' => 543,
                'genre_id' => 19,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            195 => 
            array (
                'category_id' => 1696,
                'movie_id' => 543,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            196 => 
            array (
                'category_id' => 1697,
                'movie_id' => 544,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            197 => 
            array (
                'category_id' => 1698,
                'movie_id' => 544,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            198 => 
            array (
                'category_id' => 1699,
                'movie_id' => 544,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            199 => 
            array (
                'category_id' => 1700,
                'movie_id' => 544,
                'genre_id' => 19,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            200 => 
            array (
                'category_id' => 1701,
                'movie_id' => 544,
                'genre_id' => 27,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            201 => 
            array (
                'category_id' => 1702,
                'movie_id' => 545,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            202 => 
            array (
                'category_id' => 1703,
                'movie_id' => 545,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            203 => 
            array (
                'category_id' => 1704,
                'movie_id' => 545,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            204 => 
            array (
                'category_id' => 1705,
                'movie_id' => 545,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            205 => 
            array (
                'category_id' => 1706,
                'movie_id' => 546,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            206 => 
            array (
                'category_id' => 1707,
                'movie_id' => 546,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            207 => 
            array (
                'category_id' => 1708,
                'movie_id' => 546,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            208 => 
            array (
                'category_id' => 1709,
                'movie_id' => 546,
                'genre_id' => 19,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            209 => 
            array (
                'category_id' => 1710,
                'movie_id' => 546,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            210 => 
            array (
                'category_id' => 1711,
                'movie_id' => 547,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            211 => 
            array (
                'category_id' => 1712,
                'movie_id' => 547,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            212 => 
            array (
                'category_id' => 1713,
                'movie_id' => 547,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            213 => 
            array (
                'category_id' => 1714,
                'movie_id' => 547,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            214 => 
            array (
                'category_id' => 1715,
                'movie_id' => 547,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            215 => 
            array (
                'category_id' => 1716,
                'movie_id' => 547,
                'genre_id' => 19,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            216 => 
            array (
                'category_id' => 1717,
                'movie_id' => 547,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            217 => 
            array (
                'category_id' => 1718,
                'movie_id' => 548,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            218 => 
            array (
                'category_id' => 1719,
                'movie_id' => 548,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            219 => 
            array (
                'category_id' => 1720,
                'movie_id' => 548,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            220 => 
            array (
                'category_id' => 1721,
                'movie_id' => 548,
                'genre_id' => 19,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            221 => 
            array (
                'category_id' => 1722,
                'movie_id' => 549,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            222 => 
            array (
                'category_id' => 1723,
                'movie_id' => 549,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            223 => 
            array (
                'category_id' => 1724,
                'movie_id' => 549,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            224 => 
            array (
                'category_id' => 1725,
                'movie_id' => 549,
                'genre_id' => 19,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            225 => 
            array (
                'category_id' => 1726,
                'movie_id' => 550,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            226 => 
            array (
                'category_id' => 1727,
                'movie_id' => 550,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            227 => 
            array (
                'category_id' => 1728,
                'movie_id' => 550,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            228 => 
            array (
                'category_id' => 1729,
                'movie_id' => 550,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            229 => 
            array (
                'category_id' => 1730,
                'movie_id' => 550,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            230 => 
            array (
                'category_id' => 1731,
                'movie_id' => 550,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            231 => 
            array (
                'category_id' => 1732,
                'movie_id' => 550,
                'genre_id' => 30,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            232 => 
            array (
                'category_id' => 1733,
                'movie_id' => 550,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            233 => 
            array (
                'category_id' => 1734,
                'movie_id' => 551,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            234 => 
            array (
                'category_id' => 1735,
                'movie_id' => 551,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            235 => 
            array (
                'category_id' => 1736,
                'movie_id' => 551,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            236 => 
            array (
                'category_id' => 1737,
                'movie_id' => 551,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            237 => 
            array (
                'category_id' => 1738,
                'movie_id' => 551,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            238 => 
            array (
                'category_id' => 1739,
                'movie_id' => 552,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            239 => 
            array (
                'category_id' => 1740,
                'movie_id' => 552,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            240 => 
            array (
                'category_id' => 1741,
                'movie_id' => 552,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            241 => 
            array (
                'category_id' => 1742,
                'movie_id' => 553,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            242 => 
            array (
                'category_id' => 1743,
                'movie_id' => 553,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            243 => 
            array (
                'category_id' => 1744,
                'movie_id' => 553,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            244 => 
            array (
                'category_id' => 1745,
                'movie_id' => 553,
                'genre_id' => 19,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            245 => 
            array (
                'category_id' => 1746,
                'movie_id' => 553,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            246 => 
            array (
                'category_id' => 1747,
                'movie_id' => 554,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            247 => 
            array (
                'category_id' => 1748,
                'movie_id' => 554,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            248 => 
            array (
                'category_id' => 1749,
                'movie_id' => 554,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            249 => 
            array (
                'category_id' => 1750,
                'movie_id' => 554,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            250 => 
            array (
                'category_id' => 1751,
                'movie_id' => 555,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            251 => 
            array (
                'category_id' => 1752,
                'movie_id' => 555,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            252 => 
            array (
                'category_id' => 1753,
                'movie_id' => 555,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            253 => 
            array (
                'category_id' => 1754,
                'movie_id' => 555,
                'genre_id' => 19,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            254 => 
            array (
                'category_id' => 1755,
                'movie_id' => 555,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            255 => 
            array (
                'category_id' => 1756,
                'movie_id' => 556,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            256 => 
            array (
                'category_id' => 1757,
                'movie_id' => 556,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            257 => 
            array (
                'category_id' => 1758,
                'movie_id' => 556,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            258 => 
            array (
                'category_id' => 1759,
                'movie_id' => 556,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            259 => 
            array (
                'category_id' => 1760,
                'movie_id' => 556,
                'genre_id' => 19,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            260 => 
            array (
                'category_id' => 1761,
                'movie_id' => 557,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            261 => 
            array (
                'category_id' => 1762,
                'movie_id' => 557,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            262 => 
            array (
                'category_id' => 1763,
                'movie_id' => 557,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            263 => 
            array (
                'category_id' => 1764,
                'movie_id' => 557,
                'genre_id' => 19,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            264 => 
            array (
                'category_id' => 1765,
                'movie_id' => 558,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            265 => 
            array (
                'category_id' => 1766,
                'movie_id' => 558,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            266 => 
            array (
                'category_id' => 1767,
                'movie_id' => 558,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            267 => 
            array (
                'category_id' => 1768,
                'movie_id' => 558,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            268 => 
            array (
                'category_id' => 1769,
                'movie_id' => 559,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            269 => 
            array (
                'category_id' => 1770,
                'movie_id' => 559,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            270 => 
            array (
                'category_id' => 1771,
                'movie_id' => 559,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            271 => 
            array (
                'category_id' => 1772,
                'movie_id' => 559,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            272 => 
            array (
                'category_id' => 1773,
                'movie_id' => 559,
                'genre_id' => 30,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            273 => 
            array (
                'category_id' => 1774,
                'movie_id' => 560,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            274 => 
            array (
                'category_id' => 1775,
                'movie_id' => 560,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            275 => 
            array (
                'category_id' => 1776,
                'movie_id' => 560,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            276 => 
            array (
                'category_id' => 1777,
                'movie_id' => 560,
                'genre_id' => 19,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            277 => 
            array (
                'category_id' => 1778,
                'movie_id' => 561,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            278 => 
            array (
                'category_id' => 1779,
                'movie_id' => 561,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            279 => 
            array (
                'category_id' => 1780,
                'movie_id' => 561,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            280 => 
            array (
                'category_id' => 1781,
                'movie_id' => 561,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            281 => 
            array (
                'category_id' => 1782,
                'movie_id' => 561,
                'genre_id' => 15,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            282 => 
            array (
                'category_id' => 1783,
                'movie_id' => 561,
                'genre_id' => 19,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            283 => 
            array (
                'category_id' => 1784,
                'movie_id' => 561,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            284 => 
            array (
                'category_id' => 1785,
                'movie_id' => 562,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            285 => 
            array (
                'category_id' => 1786,
                'movie_id' => 562,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            286 => 
            array (
                'category_id' => 1787,
                'movie_id' => 562,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            287 => 
            array (
                'category_id' => 1788,
                'movie_id' => 562,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            288 => 
            array (
                'category_id' => 1789,
                'movie_id' => 563,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            289 => 
            array (
                'category_id' => 1790,
                'movie_id' => 563,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            290 => 
            array (
                'category_id' => 1791,
                'movie_id' => 563,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            291 => 
            array (
                'category_id' => 1792,
                'movie_id' => 563,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            292 => 
            array (
                'category_id' => 1793,
                'movie_id' => 563,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            293 => 
            array (
                'category_id' => 1794,
                'movie_id' => 564,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            294 => 
            array (
                'category_id' => 1795,
                'movie_id' => 564,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            295 => 
            array (
                'category_id' => 1796,
                'movie_id' => 564,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            296 => 
            array (
                'category_id' => 1797,
                'movie_id' => 564,
                'genre_id' => 19,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            297 => 
            array (
                'category_id' => 1798,
                'movie_id' => 564,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            298 => 
            array (
                'category_id' => 1799,
                'movie_id' => 565,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            299 => 
            array (
                'category_id' => 1800,
                'movie_id' => 565,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            300 => 
            array (
                'category_id' => 1801,
                'movie_id' => 565,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            301 => 
            array (
                'category_id' => 1802,
                'movie_id' => 565,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            302 => 
            array (
                'category_id' => 1803,
                'movie_id' => 565,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            303 => 
            array (
                'category_id' => 1804,
                'movie_id' => 565,
                'genre_id' => 19,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            304 => 
            array (
                'category_id' => 1805,
                'movie_id' => 566,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            305 => 
            array (
                'category_id' => 1806,
                'movie_id' => 566,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            306 => 
            array (
                'category_id' => 1807,
                'movie_id' => 566,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            307 => 
            array (
                'category_id' => 1808,
                'movie_id' => 566,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            308 => 
            array (
                'category_id' => 1809,
                'movie_id' => 567,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            309 => 
            array (
                'category_id' => 1810,
                'movie_id' => 567,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            310 => 
            array (
                'category_id' => 1811,
                'movie_id' => 566,
                'genre_id' => 30,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            311 => 
            array (
                'category_id' => 1812,
                'movie_id' => 567,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            312 => 
            array (
                'category_id' => 1813,
                'movie_id' => 568,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            313 => 
            array (
                'category_id' => 1814,
                'movie_id' => 568,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            314 => 
            array (
                'category_id' => 1815,
                'movie_id' => 568,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            315 => 
            array (
                'category_id' => 1816,
                'movie_id' => 568,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            316 => 
            array (
                'category_id' => 1817,
                'movie_id' => 569,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            317 => 
            array (
                'category_id' => 1818,
                'movie_id' => 569,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            318 => 
            array (
                'category_id' => 1819,
                'movie_id' => 569,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            319 => 
            array (
                'category_id' => 1820,
                'movie_id' => 569,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            320 => 
            array (
                'category_id' => 1821,
                'movie_id' => 570,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            321 => 
            array (
                'category_id' => 1822,
                'movie_id' => 570,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            322 => 
            array (
                'category_id' => 1823,
                'movie_id' => 570,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            323 => 
            array (
                'category_id' => 1824,
                'movie_id' => 570,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            324 => 
            array (
                'category_id' => 1825,
                'movie_id' => 571,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            325 => 
            array (
                'category_id' => 1826,
                'movie_id' => 571,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            326 => 
            array (
                'category_id' => 1827,
                'movie_id' => 571,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            327 => 
            array (
                'category_id' => 1828,
                'movie_id' => 572,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            328 => 
            array (
                'category_id' => 1829,
                'movie_id' => 572,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            329 => 
            array (
                'category_id' => 1830,
                'movie_id' => 572,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            330 => 
            array (
                'category_id' => 1831,
                'movie_id' => 573,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            331 => 
            array (
                'category_id' => 1832,
                'movie_id' => 573,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            332 => 
            array (
                'category_id' => 1833,
                'movie_id' => 573,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            333 => 
            array (
                'category_id' => 1834,
                'movie_id' => 573,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            334 => 
            array (
                'category_id' => 1835,
                'movie_id' => 573,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            335 => 
            array (
                'category_id' => 1836,
                'movie_id' => 574,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            336 => 
            array (
                'category_id' => 1837,
                'movie_id' => 574,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            337 => 
            array (
                'category_id' => 1838,
                'movie_id' => 574,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            338 => 
            array (
                'category_id' => 1839,
                'movie_id' => 574,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            339 => 
            array (
                'category_id' => 1840,
                'movie_id' => 574,
                'genre_id' => 19,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            340 => 
            array (
                'category_id' => 1841,
                'movie_id' => 575,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            341 => 
            array (
                'category_id' => 1842,
                'movie_id' => 575,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            342 => 
            array (
                'category_id' => 1843,
                'movie_id' => 575,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            343 => 
            array (
                'category_id' => 1844,
                'movie_id' => 575,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            344 => 
            array (
                'category_id' => 1845,
                'movie_id' => 575,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            345 => 
            array (
                'category_id' => 1846,
                'movie_id' => 576,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            346 => 
            array (
                'category_id' => 1847,
                'movie_id' => 576,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            347 => 
            array (
                'category_id' => 1848,
                'movie_id' => 576,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            348 => 
            array (
                'category_id' => 1849,
                'movie_id' => 577,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            349 => 
            array (
                'category_id' => 1850,
                'movie_id' => 577,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            350 => 
            array (
                'category_id' => 1851,
                'movie_id' => 577,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            351 => 
            array (
                'category_id' => 1852,
                'movie_id' => 578,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            352 => 
            array (
                'category_id' => 1853,
                'movie_id' => 578,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            353 => 
            array (
                'category_id' => 1854,
                'movie_id' => 578,
                'genre_id' => 19,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            354 => 
            array (
                'category_id' => 1855,
                'movie_id' => 578,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            355 => 
            array (
                'category_id' => 1856,
                'movie_id' => 579,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            356 => 
            array (
                'category_id' => 1857,
                'movie_id' => 579,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            357 => 
            array (
                'category_id' => 1858,
                'movie_id' => 579,
                'genre_id' => 19,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            358 => 
            array (
                'category_id' => 1859,
                'movie_id' => 579,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            359 => 
            array (
                'category_id' => 1860,
                'movie_id' => 580,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            360 => 
            array (
                'category_id' => 1861,
                'movie_id' => 580,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            361 => 
            array (
                'category_id' => 1862,
                'movie_id' => 580,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            362 => 
            array (
                'category_id' => 1863,
                'movie_id' => 580,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            363 => 
            array (
                'category_id' => 1864,
                'movie_id' => 581,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            364 => 
            array (
                'category_id' => 1865,
                'movie_id' => 581,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            365 => 
            array (
                'category_id' => 1866,
                'movie_id' => 581,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            366 => 
            array (
                'category_id' => 1867,
                'movie_id' => 581,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            367 => 
            array (
                'category_id' => 1868,
                'movie_id' => 581,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            368 => 
            array (
                'category_id' => 1869,
                'movie_id' => 582,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            369 => 
            array (
                'category_id' => 1870,
                'movie_id' => 582,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            370 => 
            array (
                'category_id' => 1871,
                'movie_id' => 582,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            371 => 
            array (
                'category_id' => 1872,
                'movie_id' => 582,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            372 => 
            array (
                'category_id' => 1873,
                'movie_id' => 582,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            373 => 
            array (
                'category_id' => 1874,
                'movie_id' => 582,
                'genre_id' => 19,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            374 => 
            array (
                'category_id' => 1875,
                'movie_id' => 582,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            375 => 
            array (
                'category_id' => 1876,
                'movie_id' => 582,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            376 => 
            array (
                'category_id' => 1877,
                'movie_id' => 583,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            377 => 
            array (
                'category_id' => 1878,
                'movie_id' => 583,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            378 => 
            array (
                'category_id' => 1879,
                'movie_id' => 583,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            379 => 
            array (
                'category_id' => 1880,
                'movie_id' => 583,
                'genre_id' => 19,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            380 => 
            array (
                'category_id' => 1881,
                'movie_id' => 584,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            381 => 
            array (
                'category_id' => 1882,
                'movie_id' => 584,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            382 => 
            array (
                'category_id' => 1883,
                'movie_id' => 584,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            383 => 
            array (
                'category_id' => 1884,
                'movie_id' => 584,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            384 => 
            array (
                'category_id' => 1885,
                'movie_id' => 584,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            385 => 
            array (
                'category_id' => 1886,
                'movie_id' => 584,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            386 => 
            array (
                'category_id' => 1887,
                'movie_id' => 585,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            387 => 
            array (
                'category_id' => 1888,
                'movie_id' => 585,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            388 => 
            array (
                'category_id' => 1889,
                'movie_id' => 585,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            389 => 
            array (
                'category_id' => 1890,
                'movie_id' => 586,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            390 => 
            array (
                'category_id' => 1891,
                'movie_id' => 586,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            391 => 
            array (
                'category_id' => 1892,
                'movie_id' => 586,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            392 => 
            array (
                'category_id' => 1893,
                'movie_id' => 586,
                'genre_id' => 30,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            393 => 
            array (
                'category_id' => 1894,
                'movie_id' => 586,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            394 => 
            array (
                'category_id' => 1895,
                'movie_id' => 587,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            395 => 
            array (
                'category_id' => 1896,
                'movie_id' => 587,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            396 => 
            array (
                'category_id' => 1897,
                'movie_id' => 587,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            397 => 
            array (
                'category_id' => 1898,
                'movie_id' => 587,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            398 => 
            array (
                'category_id' => 1899,
                'movie_id' => 588,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            399 => 
            array (
                'category_id' => 1900,
                'movie_id' => 588,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            400 => 
            array (
                'category_id' => 1901,
                'movie_id' => 588,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            401 => 
            array (
                'category_id' => 1902,
                'movie_id' => 588,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            402 => 
            array (
                'category_id' => 1903,
                'movie_id' => 589,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            403 => 
            array (
                'category_id' => 1904,
                'movie_id' => 589,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            404 => 
            array (
                'category_id' => 1905,
                'movie_id' => 589,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            405 => 
            array (
                'category_id' => 1906,
                'movie_id' => 589,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            406 => 
            array (
                'category_id' => 1907,
                'movie_id' => 589,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            407 => 
            array (
                'category_id' => 1908,
                'movie_id' => 590,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            408 => 
            array (
                'category_id' => 1909,
                'movie_id' => 590,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            409 => 
            array (
                'category_id' => 1910,
                'movie_id' => 590,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            410 => 
            array (
                'category_id' => 1911,
                'movie_id' => 590,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            411 => 
            array (
                'category_id' => 1912,
                'movie_id' => 591,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            412 => 
            array (
                'category_id' => 1913,
                'movie_id' => 591,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            413 => 
            array (
                'category_id' => 1914,
                'movie_id' => 591,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            414 => 
            array (
                'category_id' => 1915,
                'movie_id' => 591,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            415 => 
            array (
                'category_id' => 1916,
                'movie_id' => 591,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            416 => 
            array (
                'category_id' => 1917,
                'movie_id' => 591,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            417 => 
            array (
                'category_id' => 1918,
                'movie_id' => 592,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            418 => 
            array (
                'category_id' => 1919,
                'movie_id' => 592,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            419 => 
            array (
                'category_id' => 1920,
                'movie_id' => 592,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            420 => 
            array (
                'category_id' => 1921,
                'movie_id' => 592,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            421 => 
            array (
                'category_id' => 1922,
                'movie_id' => 592,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            422 => 
            array (
                'category_id' => 1923,
                'movie_id' => 593,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            423 => 
            array (
                'category_id' => 1924,
                'movie_id' => 593,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            424 => 
            array (
                'category_id' => 1925,
                'movie_id' => 593,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            425 => 
            array (
                'category_id' => 1926,
                'movie_id' => 593,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            426 => 
            array (
                'category_id' => 1927,
                'movie_id' => 593,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            427 => 
            array (
                'category_id' => 1928,
                'movie_id' => 594,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            428 => 
            array (
                'category_id' => 1929,
                'movie_id' => 594,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            429 => 
            array (
                'category_id' => 1930,
                'movie_id' => 594,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            430 => 
            array (
                'category_id' => 1931,
                'movie_id' => 594,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            431 => 
            array (
                'category_id' => 1932,
                'movie_id' => 594,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            432 => 
            array (
                'category_id' => 1933,
                'movie_id' => 595,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            433 => 
            array (
                'category_id' => 1934,
                'movie_id' => 595,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            434 => 
            array (
                'category_id' => 1935,
                'movie_id' => 595,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            435 => 
            array (
                'category_id' => 1936,
                'movie_id' => 595,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            436 => 
            array (
                'category_id' => 1937,
                'movie_id' => 595,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            437 => 
            array (
                'category_id' => 1938,
                'movie_id' => 596,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            438 => 
            array (
                'category_id' => 1939,
                'movie_id' => 596,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            439 => 
            array (
                'category_id' => 1940,
                'movie_id' => 596,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            440 => 
            array (
                'category_id' => 1941,
                'movie_id' => 596,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            441 => 
            array (
                'category_id' => 1942,
                'movie_id' => 597,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            442 => 
            array (
                'category_id' => 1943,
                'movie_id' => 597,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            443 => 
            array (
                'category_id' => 1944,
                'movie_id' => 598,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            444 => 
            array (
                'category_id' => 1945,
                'movie_id' => 598,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            445 => 
            array (
                'category_id' => 1946,
                'movie_id' => 598,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            446 => 
            array (
                'category_id' => 1947,
                'movie_id' => 599,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            447 => 
            array (
                'category_id' => 1948,
                'movie_id' => 599,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            448 => 
            array (
                'category_id' => 1949,
                'movie_id' => 599,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            449 => 
            array (
                'category_id' => 1950,
                'movie_id' => 600,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            450 => 
            array (
                'category_id' => 1951,
                'movie_id' => 600,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            451 => 
            array (
                'category_id' => 1952,
                'movie_id' => 600,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            452 => 
            array (
                'category_id' => 1953,
                'movie_id' => 600,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            453 => 
            array (
                'category_id' => 1954,
                'movie_id' => 600,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            454 => 
            array (
                'category_id' => 1955,
                'movie_id' => 601,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            455 => 
            array (
                'category_id' => 1956,
                'movie_id' => 601,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            456 => 
            array (
                'category_id' => 1957,
                'movie_id' => 601,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            457 => 
            array (
                'category_id' => 1958,
                'movie_id' => 601,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            458 => 
            array (
                'category_id' => 1959,
                'movie_id' => 601,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            459 => 
            array (
                'category_id' => 1960,
                'movie_id' => 602,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            460 => 
            array (
                'category_id' => 1961,
                'movie_id' => 602,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            461 => 
            array (
                'category_id' => 1962,
                'movie_id' => 602,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            462 => 
            array (
                'category_id' => 1963,
                'movie_id' => 602,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            463 => 
            array (
                'category_id' => 1964,
                'movie_id' => 602,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            464 => 
            array (
                'category_id' => 1965,
                'movie_id' => 603,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            465 => 
            array (
                'category_id' => 1966,
                'movie_id' => 603,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            466 => 
            array (
                'category_id' => 1967,
                'movie_id' => 603,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            467 => 
            array (
                'category_id' => 1968,
                'movie_id' => 603,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            468 => 
            array (
                'category_id' => 1969,
                'movie_id' => 604,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            469 => 
            array (
                'category_id' => 1970,
                'movie_id' => 604,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            470 => 
            array (
                'category_id' => 1971,
                'movie_id' => 604,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            471 => 
            array (
                'category_id' => 1972,
                'movie_id' => 604,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            472 => 
            array (
                'category_id' => 1973,
                'movie_id' => 605,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            473 => 
            array (
                'category_id' => 1974,
                'movie_id' => 605,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            474 => 
            array (
                'category_id' => 1975,
                'movie_id' => 605,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            475 => 
            array (
                'category_id' => 1976,
                'movie_id' => 605,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            476 => 
            array (
                'category_id' => 1977,
                'movie_id' => 605,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            477 => 
            array (
                'category_id' => 1978,
                'movie_id' => 606,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            478 => 
            array (
                'category_id' => 1979,
                'movie_id' => 606,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            479 => 
            array (
                'category_id' => 1980,
                'movie_id' => 606,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            480 => 
            array (
                'category_id' => 1981,
                'movie_id' => 607,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            481 => 
            array (
                'category_id' => 1982,
                'movie_id' => 607,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            482 => 
            array (
                'category_id' => 1983,
                'movie_id' => 607,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            483 => 
            array (
                'category_id' => 1984,
                'movie_id' => 608,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            484 => 
            array (
                'category_id' => 1985,
                'movie_id' => 608,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            485 => 
            array (
                'category_id' => 1986,
                'movie_id' => 608,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            486 => 
            array (
                'category_id' => 1987,
                'movie_id' => 608,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            487 => 
            array (
                'category_id' => 1988,
                'movie_id' => 609,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            488 => 
            array (
                'category_id' => 1989,
                'movie_id' => 609,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            489 => 
            array (
                'category_id' => 1990,
                'movie_id' => 609,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            490 => 
            array (
                'category_id' => 1991,
                'movie_id' => 609,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            491 => 
            array (
                'category_id' => 1992,
                'movie_id' => 610,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            492 => 
            array (
                'category_id' => 1993,
                'movie_id' => 610,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            493 => 
            array (
                'category_id' => 1994,
                'movie_id' => 610,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            494 => 
            array (
                'category_id' => 1995,
                'movie_id' => 610,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            495 => 
            array (
                'category_id' => 1996,
                'movie_id' => 610,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            496 => 
            array (
                'category_id' => 1997,
                'movie_id' => 611,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            497 => 
            array (
                'category_id' => 1998,
                'movie_id' => 611,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            498 => 
            array (
                'category_id' => 1999,
                'movie_id' => 611,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            499 => 
            array (
                'category_id' => 2000,
                'movie_id' => 611,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
        ));
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'category_id' => 2001,
                'movie_id' => 612,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            1 => 
            array (
                'category_id' => 2002,
                'movie_id' => 612,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            2 => 
            array (
                'category_id' => 2003,
                'movie_id' => 612,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            3 => 
            array (
                'category_id' => 2004,
                'movie_id' => 612,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            4 => 
            array (
                'category_id' => 2005,
                'movie_id' => 613,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            5 => 
            array (
                'category_id' => 2006,
                'movie_id' => 613,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            6 => 
            array (
                'category_id' => 2007,
                'movie_id' => 613,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            7 => 
            array (
                'category_id' => 2008,
                'movie_id' => 613,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            8 => 
            array (
                'category_id' => 2009,
                'movie_id' => 614,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            9 => 
            array (
                'category_id' => 2010,
                'movie_id' => 614,
                'genre_id' => 16,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            10 => 
            array (
                'category_id' => 2011,
                'movie_id' => 614,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            11 => 
            array (
                'category_id' => 2012,
                'movie_id' => 615,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            12 => 
            array (
                'category_id' => 2013,
                'movie_id' => 615,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            13 => 
            array (
                'category_id' => 2014,
                'movie_id' => 615,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            14 => 
            array (
                'category_id' => 2015,
                'movie_id' => 615,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            15 => 
            array (
                'category_id' => 2017,
                'movie_id' => 616,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            16 => 
            array (
                'category_id' => 2018,
                'movie_id' => 616,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            17 => 
            array (
                'category_id' => 2019,
                'movie_id' => 616,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            18 => 
            array (
                'category_id' => 2020,
                'movie_id' => 617,
                'genre_id' => 4,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            19 => 
            array (
                'category_id' => 2021,
                'movie_id' => 617,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            20 => 
            array (
                'category_id' => 2022,
                'movie_id' => 617,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            21 => 
            array (
                'category_id' => 2023,
                'movie_id' => 618,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            22 => 
            array (
                'category_id' => 2024,
                'movie_id' => 619,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            23 => 
            array (
                'category_id' => 2025,
                'movie_id' => 620,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            24 => 
            array (
                'category_id' => 2026,
                'movie_id' => 621,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            25 => 
            array (
                'category_id' => 2027,
                'movie_id' => 622,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            26 => 
            array (
                'category_id' => 2028,
                'movie_id' => 623,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            27 => 
            array (
                'category_id' => 2029,
                'movie_id' => 624,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            28 => 
            array (
                'category_id' => 2030,
                'movie_id' => 625,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            29 => 
            array (
                'category_id' => 2031,
                'movie_id' => 626,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            30 => 
            array (
                'category_id' => 2032,
                'movie_id' => 626,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            31 => 
            array (
                'category_id' => 2033,
                'movie_id' => 626,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            32 => 
            array (
                'category_id' => 2034,
                'movie_id' => 627,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            33 => 
            array (
                'category_id' => 2035,
                'movie_id' => 627,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            34 => 
            array (
                'category_id' => 2036,
                'movie_id' => 627,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            35 => 
            array (
                'category_id' => 2037,
                'movie_id' => 628,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            36 => 
            array (
                'category_id' => 2038,
                'movie_id' => 628,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            37 => 
            array (
                'category_id' => 2039,
                'movie_id' => 628,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            38 => 
            array (
                'category_id' => 2040,
                'movie_id' => 629,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            39 => 
            array (
                'category_id' => 2041,
                'movie_id' => 629,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            40 => 
            array (
                'category_id' => 2042,
                'movie_id' => 629,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            41 => 
            array (
                'category_id' => 2043,
                'movie_id' => 630,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            42 => 
            array (
                'category_id' => 2044,
                'movie_id' => 630,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            43 => 
            array (
                'category_id' => 2045,
                'movie_id' => 630,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            44 => 
            array (
                'category_id' => 2046,
                'movie_id' => 631,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            45 => 
            array (
                'category_id' => 2047,
                'movie_id' => 631,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            46 => 
            array (
                'category_id' => 2048,
                'movie_id' => 631,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            47 => 
            array (
                'category_id' => 2049,
                'movie_id' => 632,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            48 => 
            array (
                'category_id' => 2050,
                'movie_id' => 632,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            49 => 
            array (
                'category_id' => 2051,
                'movie_id' => 632,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            50 => 
            array (
                'category_id' => 2052,
                'movie_id' => 632,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            51 => 
            array (
                'category_id' => 2053,
                'movie_id' => 632,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            52 => 
            array (
                'category_id' => 2054,
                'movie_id' => 633,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            53 => 
            array (
                'category_id' => 2055,
                'movie_id' => 633,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            54 => 
            array (
                'category_id' => 2056,
                'movie_id' => 633,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            55 => 
            array (
                'category_id' => 2057,
                'movie_id' => 633,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            56 => 
            array (
                'category_id' => 2058,
                'movie_id' => 633,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            57 => 
            array (
                'category_id' => 2059,
                'movie_id' => 634,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            58 => 
            array (
                'category_id' => 2060,
                'movie_id' => 634,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            59 => 
            array (
                'category_id' => 2061,
                'movie_id' => 634,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            60 => 
            array (
                'category_id' => 2062,
                'movie_id' => 634,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            61 => 
            array (
                'category_id' => 2063,
                'movie_id' => 634,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            62 => 
            array (
                'category_id' => 2064,
                'movie_id' => 635,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            63 => 
            array (
                'category_id' => 2065,
                'movie_id' => 635,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            64 => 
            array (
                'category_id' => 2066,
                'movie_id' => 635,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            65 => 
            array (
                'category_id' => 2067,
                'movie_id' => 635,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            66 => 
            array (
                'category_id' => 2068,
                'movie_id' => 635,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            67 => 
            array (
                'category_id' => 2069,
                'movie_id' => 636,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            68 => 
            array (
                'category_id' => 2070,
                'movie_id' => 636,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            69 => 
            array (
                'category_id' => 2071,
                'movie_id' => 636,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            70 => 
            array (
                'category_id' => 2072,
                'movie_id' => 636,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            71 => 
            array (
                'category_id' => 2073,
                'movie_id' => 636,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            72 => 
            array (
                'category_id' => 2074,
                'movie_id' => 637,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            73 => 
            array (
                'category_id' => 2075,
                'movie_id' => 637,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            74 => 
            array (
                'category_id' => 2076,
                'movie_id' => 637,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            75 => 
            array (
                'category_id' => 2077,
                'movie_id' => 637,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            76 => 
            array (
                'category_id' => 2078,
                'movie_id' => 637,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            77 => 
            array (
                'category_id' => 2079,
                'movie_id' => 638,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            78 => 
            array (
                'category_id' => 2080,
                'movie_id' => 638,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            79 => 
            array (
                'category_id' => 2081,
                'movie_id' => 638,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            80 => 
            array (
                'category_id' => 2082,
                'movie_id' => 638,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            81 => 
            array (
                'category_id' => 2083,
                'movie_id' => 638,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            82 => 
            array (
                'category_id' => 2084,
                'movie_id' => 639,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            83 => 
            array (
                'category_id' => 2085,
                'movie_id' => 639,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            84 => 
            array (
                'category_id' => 2086,
                'movie_id' => 639,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            85 => 
            array (
                'category_id' => 2087,
                'movie_id' => 639,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            86 => 
            array (
                'category_id' => 2088,
                'movie_id' => 639,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            87 => 
            array (
                'category_id' => 2089,
                'movie_id' => 640,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            88 => 
            array (
                'category_id' => 2090,
                'movie_id' => 640,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            89 => 
            array (
                'category_id' => 2091,
                'movie_id' => 640,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            90 => 
            array (
                'category_id' => 2092,
                'movie_id' => 640,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            91 => 
            array (
                'category_id' => 2093,
                'movie_id' => 640,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            92 => 
            array (
                'category_id' => 2094,
                'movie_id' => 641,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            93 => 
            array (
                'category_id' => 2095,
                'movie_id' => 641,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            94 => 
            array (
                'category_id' => 2096,
                'movie_id' => 641,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            95 => 
            array (
                'category_id' => 2097,
                'movie_id' => 641,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            96 => 
            array (
                'category_id' => 2098,
                'movie_id' => 641,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            97 => 
            array (
                'category_id' => 2099,
                'movie_id' => 642,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            98 => 
            array (
                'category_id' => 2100,
                'movie_id' => 642,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            99 => 
            array (
                'category_id' => 2101,
                'movie_id' => 642,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            100 => 
            array (
                'category_id' => 2102,
                'movie_id' => 643,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            101 => 
            array (
                'category_id' => 2103,
                'movie_id' => 643,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            102 => 
            array (
                'category_id' => 2104,
                'movie_id' => 643,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            103 => 
            array (
                'category_id' => 2105,
                'movie_id' => 646,
                'genre_id' => 16,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            104 => 
            array (
                'category_id' => 2106,
                'movie_id' => 646,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            105 => 
            array (
                'category_id' => 2107,
                'movie_id' => 646,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            106 => 
            array (
                'category_id' => 2108,
                'movie_id' => 647,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            107 => 
            array (
                'category_id' => 2109,
                'movie_id' => 647,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            108 => 
            array (
                'category_id' => 2110,
                'movie_id' => 647,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            109 => 
            array (
                'category_id' => 2111,
                'movie_id' => 647,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            110 => 
            array (
                'category_id' => 2112,
                'movie_id' => 647,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            111 => 
            array (
                'category_id' => 2113,
                'movie_id' => 648,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            112 => 
            array (
                'category_id' => 2114,
                'movie_id' => 648,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            113 => 
            array (
                'category_id' => 2115,
                'movie_id' => 648,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            114 => 
            array (
                'category_id' => 2116,
                'movie_id' => 649,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            115 => 
            array (
                'category_id' => 2117,
                'movie_id' => 649,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            116 => 
            array (
                'category_id' => 2118,
                'movie_id' => 649,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            117 => 
            array (
                'category_id' => 2119,
                'movie_id' => 650,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            118 => 
            array (
                'category_id' => 2120,
                'movie_id' => 650,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            119 => 
            array (
                'category_id' => 2121,
                'movie_id' => 650,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            120 => 
            array (
                'category_id' => 2122,
                'movie_id' => 651,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            121 => 
            array (
                'category_id' => 2123,
                'movie_id' => 651,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            122 => 
            array (
                'category_id' => 2124,
                'movie_id' => 651,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            123 => 
            array (
                'category_id' => 2125,
                'movie_id' => 652,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            124 => 
            array (
                'category_id' => 2126,
                'movie_id' => 652,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            125 => 
            array (
                'category_id' => 2127,
                'movie_id' => 652,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            126 => 
            array (
                'category_id' => 2128,
                'movie_id' => 653,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            127 => 
            array (
                'category_id' => 2129,
                'movie_id' => 653,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            128 => 
            array (
                'category_id' => 2130,
                'movie_id' => 653,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            129 => 
            array (
                'category_id' => 2131,
                'movie_id' => 654,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            130 => 
            array (
                'category_id' => 2132,
                'movie_id' => 654,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            131 => 
            array (
                'category_id' => 2133,
                'movie_id' => 654,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            132 => 
            array (
                'category_id' => 2134,
                'movie_id' => 655,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            133 => 
            array (
                'category_id' => 2135,
                'movie_id' => 655,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            134 => 
            array (
                'category_id' => 2136,
                'movie_id' => 655,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            135 => 
            array (
                'category_id' => 2137,
                'movie_id' => 656,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            136 => 
            array (
                'category_id' => 2138,
                'movie_id' => 656,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            137 => 
            array (
                'category_id' => 2139,
                'movie_id' => 657,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            138 => 
            array (
                'category_id' => 2140,
                'movie_id' => 657,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            139 => 
            array (
                'category_id' => 2141,
                'movie_id' => 658,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            140 => 
            array (
                'category_id' => 2142,
                'movie_id' => 658,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            141 => 
            array (
                'category_id' => 2143,
                'movie_id' => 659,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            142 => 
            array (
                'category_id' => 2144,
                'movie_id' => 659,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            143 => 
            array (
                'category_id' => 2145,
                'movie_id' => 660,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            144 => 
            array (
                'category_id' => 2146,
                'movie_id' => 660,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            145 => 
            array (
                'category_id' => 2147,
                'movie_id' => 661,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            146 => 
            array (
                'category_id' => 2148,
                'movie_id' => 661,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            147 => 
            array (
                'category_id' => 2149,
                'movie_id' => 662,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            148 => 
            array (
                'category_id' => 2150,
                'movie_id' => 662,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            149 => 
            array (
                'category_id' => 2151,
                'movie_id' => 663,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            150 => 
            array (
                'category_id' => 2152,
                'movie_id' => 663,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            151 => 
            array (
                'category_id' => 2153,
                'movie_id' => 664,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            152 => 
            array (
                'category_id' => 2154,
                'movie_id' => 664,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            153 => 
            array (
                'category_id' => 2155,
                'movie_id' => 665,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            154 => 
            array (
                'category_id' => 2156,
                'movie_id' => 665,
                'genre_id' => 21,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            155 => 
            array (
                'category_id' => 2157,
                'movie_id' => 666,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            156 => 
            array (
                'category_id' => 2158,
                'movie_id' => 667,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            157 => 
            array (
                'category_id' => 2159,
                'movie_id' => 668,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            158 => 
            array (
                'category_id' => 2160,
                'movie_id' => 669,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            159 => 
            array (
                'category_id' => 2161,
                'movie_id' => 669,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            160 => 
            array (
                'category_id' => 2162,
                'movie_id' => 669,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            161 => 
            array (
                'category_id' => 2163,
                'movie_id' => 717,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            162 => 
            array (
                'category_id' => 2164,
                'movie_id' => 718,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            163 => 
            array (
                'category_id' => 2165,
                'movie_id' => 670,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            164 => 
            array (
                'category_id' => 2166,
                'movie_id' => 671,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            165 => 
            array (
                'category_id' => 2167,
                'movie_id' => 671,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            166 => 
            array (
                'category_id' => 2168,
                'movie_id' => 672,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            167 => 
            array (
                'category_id' => 2169,
                'movie_id' => 672,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            168 => 
            array (
                'category_id' => 2170,
                'movie_id' => 673,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            169 => 
            array (
                'category_id' => 2171,
                'movie_id' => 673,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            170 => 
            array (
                'category_id' => 2172,
                'movie_id' => 674,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            171 => 
            array (
                'category_id' => 2173,
                'movie_id' => 674,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            172 => 
            array (
                'category_id' => 2174,
                'movie_id' => 675,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            173 => 
            array (
                'category_id' => 2175,
                'movie_id' => 675,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            174 => 
            array (
                'category_id' => 2176,
                'movie_id' => 676,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            175 => 
            array (
                'category_id' => 2177,
                'movie_id' => 676,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            176 => 
            array (
                'category_id' => 2178,
                'movie_id' => 677,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            177 => 
            array (
                'category_id' => 2179,
                'movie_id' => 677,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            178 => 
            array (
                'category_id' => 2180,
                'movie_id' => 678,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            179 => 
            array (
                'category_id' => 2181,
                'movie_id' => 678,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            180 => 
            array (
                'category_id' => 2182,
                'movie_id' => 679,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            181 => 
            array (
                'category_id' => 2183,
                'movie_id' => 679,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            182 => 
            array (
                'category_id' => 2184,
                'movie_id' => 679,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            183 => 
            array (
                'category_id' => 2185,
                'movie_id' => 679,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            184 => 
            array (
                'category_id' => 2186,
                'movie_id' => 680,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            185 => 
            array (
                'category_id' => 2187,
                'movie_id' => 681,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            186 => 
            array (
                'category_id' => 2188,
                'movie_id' => 681,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            187 => 
            array (
                'category_id' => 2189,
                'movie_id' => 682,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            188 => 
            array (
                'category_id' => 2190,
                'movie_id' => 682,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            189 => 
            array (
                'category_id' => 2191,
                'movie_id' => 682,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            190 => 
            array (
                'category_id' => 2192,
                'movie_id' => 682,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            191 => 
            array (
                'category_id' => 2193,
                'movie_id' => 683,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            192 => 
            array (
                'category_id' => 2194,
                'movie_id' => 683,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            193 => 
            array (
                'category_id' => 2195,
                'movie_id' => 683,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            194 => 
            array (
                'category_id' => 2196,
                'movie_id' => 683,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            195 => 
            array (
                'category_id' => 2197,
                'movie_id' => 684,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            196 => 
            array (
                'category_id' => 2198,
                'movie_id' => 684,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            197 => 
            array (
                'category_id' => 2199,
                'movie_id' => 684,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            198 => 
            array (
                'category_id' => 2200,
                'movie_id' => 684,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            199 => 
            array (
                'category_id' => 2201,
                'movie_id' => 685,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            200 => 
            array (
                'category_id' => 2202,
                'movie_id' => 685,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            201 => 
            array (
                'category_id' => 2203,
                'movie_id' => 685,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            202 => 
            array (
                'category_id' => 2204,
                'movie_id' => 685,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            203 => 
            array (
                'category_id' => 2205,
                'movie_id' => 686,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            204 => 
            array (
                'category_id' => 2206,
                'movie_id' => 686,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            205 => 
            array (
                'category_id' => 2207,
                'movie_id' => 686,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            206 => 
            array (
                'category_id' => 2208,
                'movie_id' => 686,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            207 => 
            array (
                'category_id' => 2209,
                'movie_id' => 687,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            208 => 
            array (
                'category_id' => 2210,
                'movie_id' => 687,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            209 => 
            array (
                'category_id' => 2211,
                'movie_id' => 687,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            210 => 
            array (
                'category_id' => 2212,
                'movie_id' => 687,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            211 => 
            array (
                'category_id' => 2213,
                'movie_id' => 688,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            212 => 
            array (
                'category_id' => 2214,
                'movie_id' => 688,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            213 => 
            array (
                'category_id' => 2215,
                'movie_id' => 688,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            214 => 
            array (
                'category_id' => 2216,
                'movie_id' => 688,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            215 => 
            array (
                'category_id' => 2217,
                'movie_id' => 689,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            216 => 
            array (
                'category_id' => 2218,
                'movie_id' => 689,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            217 => 
            array (
                'category_id' => 2219,
                'movie_id' => 689,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            218 => 
            array (
                'category_id' => 2220,
                'movie_id' => 689,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            219 => 
            array (
                'category_id' => 2221,
                'movie_id' => 690,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            220 => 
            array (
                'category_id' => 2222,
                'movie_id' => 690,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            221 => 
            array (
                'category_id' => 2223,
                'movie_id' => 690,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            222 => 
            array (
                'category_id' => 2224,
                'movie_id' => 691,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            223 => 
            array (
                'category_id' => 2225,
                'movie_id' => 691,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            224 => 
            array (
                'category_id' => 2226,
                'movie_id' => 691,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            225 => 
            array (
                'category_id' => 2227,
                'movie_id' => 692,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            226 => 
            array (
                'category_id' => 2228,
                'movie_id' => 692,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            227 => 
            array (
                'category_id' => 2229,
                'movie_id' => 692,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            228 => 
            array (
                'category_id' => 2230,
                'movie_id' => 693,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            229 => 
            array (
                'category_id' => 2231,
                'movie_id' => 693,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            230 => 
            array (
                'category_id' => 2232,
                'movie_id' => 694,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            231 => 
            array (
                'category_id' => 2233,
                'movie_id' => 694,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            232 => 
            array (
                'category_id' => 2234,
                'movie_id' => 695,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            233 => 
            array (
                'category_id' => 2235,
                'movie_id' => 695,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            234 => 
            array (
                'category_id' => 2236,
                'movie_id' => 696,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            235 => 
            array (
                'category_id' => 2237,
                'movie_id' => 696,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            236 => 
            array (
                'category_id' => 2238,
                'movie_id' => 697,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            237 => 
            array (
                'category_id' => 2239,
                'movie_id' => 697,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            238 => 
            array (
                'category_id' => 2240,
                'movie_id' => 698,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            239 => 
            array (
                'category_id' => 2241,
                'movie_id' => 698,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            240 => 
            array (
                'category_id' => 2242,
                'movie_id' => 699,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            241 => 
            array (
                'category_id' => 2243,
                'movie_id' => 699,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            242 => 
            array (
                'category_id' => 2244,
                'movie_id' => 700,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            243 => 
            array (
                'category_id' => 2245,
                'movie_id' => 700,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            244 => 
            array (
                'category_id' => 2246,
                'movie_id' => 701,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            245 => 
            array (
                'category_id' => 2247,
                'movie_id' => 701,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            246 => 
            array (
                'category_id' => 2248,
                'movie_id' => 702,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            247 => 
            array (
                'category_id' => 2249,
                'movie_id' => 702,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            248 => 
            array (
                'category_id' => 2250,
                'movie_id' => 703,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            249 => 
            array (
                'category_id' => 2251,
                'movie_id' => 703,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            250 => 
            array (
                'category_id' => 2252,
                'movie_id' => 704,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            251 => 
            array (
                'category_id' => 2253,
                'movie_id' => 704,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            252 => 
            array (
                'category_id' => 2254,
                'movie_id' => 705,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            253 => 
            array (
                'category_id' => 2255,
                'movie_id' => 705,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            254 => 
            array (
                'category_id' => 2256,
                'movie_id' => 706,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            255 => 
            array (
                'category_id' => 2257,
                'movie_id' => 706,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            256 => 
            array (
                'category_id' => 2258,
                'movie_id' => 706,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            257 => 
            array (
                'category_id' => 2259,
                'movie_id' => 707,
                'genre_id' => 7,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            258 => 
            array (
                'category_id' => 2260,
                'movie_id' => 707,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            259 => 
            array (
                'category_id' => 2261,
                'movie_id' => 707,
                'genre_id' => 14,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            260 => 
            array (
                'category_id' => 2262,
                'movie_id' => 707,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            261 => 
            array (
                'category_id' => 2263,
                'movie_id' => 708,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            262 => 
            array (
                'category_id' => 2264,
                'movie_id' => 708,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            263 => 
            array (
                'category_id' => 2265,
                'movie_id' => 708,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            264 => 
            array (
                'category_id' => 2266,
                'movie_id' => 709,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            265 => 
            array (
                'category_id' => 2267,
                'movie_id' => 709,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            266 => 
            array (
                'category_id' => 2268,
                'movie_id' => 710,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            267 => 
            array (
                'category_id' => 2269,
                'movie_id' => 710,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            268 => 
            array (
                'category_id' => 2270,
                'movie_id' => 710,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            269 => 
            array (
                'category_id' => 2271,
                'movie_id' => 710,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            270 => 
            array (
                'category_id' => 2272,
                'movie_id' => 710,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            271 => 
            array (
                'category_id' => 2273,
                'movie_id' => 710,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            272 => 
            array (
                'category_id' => 2274,
                'movie_id' => 711,
                'genre_id' => 4,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            273 => 
            array (
                'category_id' => 2275,
                'movie_id' => 711,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            274 => 
            array (
                'category_id' => 2276,
                'movie_id' => 711,
                'genre_id' => 15,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            275 => 
            array (
                'category_id' => 2277,
                'movie_id' => 711,
                'genre_id' => 30,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            276 => 
            array (
                'category_id' => 2278,
                'movie_id' => 712,
                'genre_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            277 => 
            array (
                'category_id' => 2279,
                'movie_id' => 712,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            278 => 
            array (
                'category_id' => 2280,
                'movie_id' => 712,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            279 => 
            array (
                'category_id' => 2281,
                'movie_id' => 712,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            280 => 
            array (
                'category_id' => 2282,
                'movie_id' => 712,
                'genre_id' => 12,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            281 => 
            array (
                'category_id' => 2283,
                'movie_id' => 712,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            282 => 
            array (
                'category_id' => 2284,
                'movie_id' => 713,
                'genre_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            283 => 
            array (
                'category_id' => 2285,
                'movie_id' => 713,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            284 => 
            array (
                'category_id' => 2286,
                'movie_id' => 713,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            285 => 
            array (
                'category_id' => 2287,
                'movie_id' => 714,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            286 => 
            array (
                'category_id' => 2288,
                'movie_id' => 714,
                'genre_id' => 20,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            287 => 
            array (
                'category_id' => 2289,
                'movie_id' => 714,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            288 => 
            array (
                'category_id' => 2290,
                'movie_id' => 714,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            289 => 
            array (
                'category_id' => 2291,
                'movie_id' => 715,
                'genre_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            290 => 
            array (
                'category_id' => 2292,
                'movie_id' => 715,
                'genre_id' => 22,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            291 => 
            array (
                'category_id' => 2293,
                'movie_id' => 715,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            292 => 
            array (
                'category_id' => 2294,
                'movie_id' => 716,
                'genre_id' => 10,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            293 => 
            array (
                'category_id' => 2295,
                'movie_id' => 716,
                'genre_id' => 13,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            294 => 
            array (
                'category_id' => 2296,
                'movie_id' => 716,
                'genre_id' => 16,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            295 => 
            array (
                'category_id' => 2297,
                'movie_id' => 716,
                'genre_id' => 25,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            296 => 
            array (
                'category_id' => 2298,
                'movie_id' => 722,
                'genre_id' => 6,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
        ));
        
        
    }
}
