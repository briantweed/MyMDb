<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tags')->delete();
        
        \DB::table('tags')->insert(array (
            0 => 
            array (
                'tag_id' => 1,
                'movie_id' => 3,
                'keyword_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            1 => 
            array (
                'tag_id' => 2,
                'movie_id' => 4,
                'keyword_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            2 => 
            array (
                'tag_id' => 3,
                'movie_id' => 5,
                'keyword_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            3 => 
            array (
                'tag_id' => 4,
                'movie_id' => 6,
                'keyword_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            4 => 
            array (
                'tag_id' => 7,
                'movie_id' => 11,
                'keyword_id' => 4,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            5 => 
            array (
                'tag_id' => 9,
                'movie_id' => 1,
                'keyword_id' => 2,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            6 => 
            array (
                'tag_id' => 10,
                'movie_id' => 1,
                'keyword_id' => 3,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            7 => 
            array (
                'tag_id' => 11,
                'movie_id' => 432,
                'keyword_id' => 5,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            8 => 
            array (
                'tag_id' => 12,
                'movie_id' => 433,
                'keyword_id' => 5,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            9 => 
            array (
                'tag_id' => 13,
                'movie_id' => 434,
                'keyword_id' => 5,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            10 => 
            array (
                'tag_id' => 14,
                'movie_id' => 435,
                'keyword_id' => 5,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            11 => 
            array (
                'tag_id' => 15,
                'movie_id' => 436,
                'keyword_id' => 5,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            12 => 
            array (
                'tag_id' => 16,
                'movie_id' => 437,
                'keyword_id' => 5,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            13 => 
            array (
                'tag_id' => 17,
                'movie_id' => 438,
                'keyword_id' => 5,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            14 => 
            array (
                'tag_id' => 18,
                'movie_id' => 439,
                'keyword_id' => 5,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            15 => 
            array (
                'tag_id' => 19,
                'movie_id' => 440,
                'keyword_id' => 5,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            16 => 
            array (
                'tag_id' => 20,
                'movie_id' => 441,
                'keyword_id' => 5,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            17 => 
            array (
                'tag_id' => 21,
                'movie_id' => 442,
                'keyword_id' => 5,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            18 => 
            array (
                'tag_id' => 22,
                'movie_id' => 443,
                'keyword_id' => 5,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            19 => 
            array (
                'tag_id' => 23,
                'movie_id' => 444,
                'keyword_id' => 5,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            20 => 
            array (
                'tag_id' => 24,
                'movie_id' => 445,
                'keyword_id' => 5,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            21 => 
            array (
                'tag_id' => 25,
                'movie_id' => 446,
                'keyword_id' => 5,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            22 => 
            array (
                'tag_id' => 26,
                'movie_id' => 447,
                'keyword_id' => 5,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            23 => 
            array (
                'tag_id' => 27,
                'movie_id' => 448,
                'keyword_id' => 5,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            24 => 
            array (
                'tag_id' => 28,
                'movie_id' => 449,
                'keyword_id' => 5,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            25 => 
            array (
                'tag_id' => 29,
                'movie_id' => 450,
                'keyword_id' => 5,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            26 => 
            array (
                'tag_id' => 30,
                'movie_id' => 451,
                'keyword_id' => 5,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            27 => 
            array (
                'tag_id' => 31,
                'movie_id' => 452,
                'keyword_id' => 5,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            28 => 
            array (
                'tag_id' => 32,
                'movie_id' => 453,
                'keyword_id' => 5,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            29 => 
            array (
                'tag_id' => 33,
                'movie_id' => 454,
                'keyword_id' => 5,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            30 => 
            array (
                'tag_id' => 34,
                'movie_id' => 174,
                'keyword_id' => 4,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            31 => 
            array (
                'tag_id' => 35,
                'movie_id' => 76,
                'keyword_id' => 4,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            32 => 
            array (
                'tag_id' => 36,
                'movie_id' => 77,
                'keyword_id' => 4,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
        ));
        
        
    }
}
