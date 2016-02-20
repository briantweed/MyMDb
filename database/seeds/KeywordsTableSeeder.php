<?php

use Illuminate\Database\Seeder;

class KeywordsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('keywords')->delete();
        
        \DB::table('keywords')->insert(array (
            0 => 
            array (
                'keyword_id' => 1,
                'word' => 'Aliens',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            1 => 
            array (
                'keyword_id' => 2,
                'word' => 'Dragon',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            2 => 
            array (
                'keyword_id' => 3,
                'word' => 'Magic',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            3 => 
            array (
                'keyword_id' => 4,
                'word' => 'MCU',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            4 => 
            array (
                'keyword_id' => 5,
                'word' => 'Bond',
                'created_at' => '2016-02-01 16:49:40',
                'updated_at' => '2016-02-01 16:49:40',
            ),
            5 => 
            array (
                'keyword_id' => 6,
                'word' => 'TV',
                'created_at' => '2016-02-20 14:02:00',
                'updated_at' => '2016-02-20 14:02:00',
            ),
        ));
        
        
    }
}
