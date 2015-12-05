<?php

use Illuminate\Database\Seeder;

class PositionsTableSeeder extends Seeder
{
   public function run()
   {
     $existing = DB::table('positions')->count();
     if( !$existing )
     {
        $positions = [
           ['Director','1'],
           ['Producer','2'],
           ['Writer','3'],
           ['Composer','4'],
        ];

        array_map( function( $position ) {
           DB::table('positions')->insert([
              'position_title' => $position[0],
              'position_order' => $position[1]
           ]);
        }, $positions);

     } // end of if

  } // end of method

} // end of class
