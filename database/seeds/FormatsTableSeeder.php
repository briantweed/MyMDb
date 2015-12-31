<?php

use Illuminate\Database\Seeder;

class FormatsTableSeeder extends Seeder
{
   public function run()
   {
     $existing = DB::table('formats')->count();
     if( !$existing )
     {
        $formats = ['DVD','Blu-Ray','Digital'];

        array_map( function( $format ) {
           DB::table('formats')->insert([
              'type' => $format,
           ]);
        }, $formats);

     } // end of if

   } // end of method

} //end of class
