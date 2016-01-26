<?php

use Illuminate\Database\Seeder;

class ViewingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('viewings')->delete();
        
        \DB::table('viewings')->insert(array (
            0 => 
            array (
                'viewing_id' => 1,
                'movie_id' => 177,
                'created_at' => '2016-01-17 15:05:06',
                'updated_at' => '2016-01-17 15:05:06',
            ),
        ));
        
        
    }
}
