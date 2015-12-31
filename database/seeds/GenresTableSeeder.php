<?php

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
   public function run()
   {
     $existing = DB::table('genres')->count();
     if( !$existing )
     {
        $genres = ['Action','Adventure','Animation','Biography','Children','Comedy','Crime','Disaster',
        'Documentary','Drama','Epic','Family','Fantasy','Film Noir','Historical','Horror','Legal','Martial Arts',
        'Musical','Mystery','Romance','Science Fiction','Spy','Superhero','Thriller','Video Game','War','Western','World'];

        array_map( function( $genre ) {
           DB::table('genres')->insert([
              'type' => $genre
           ]);
        }, $genres);

     } // end of if

  } // end of method

} // end of class
