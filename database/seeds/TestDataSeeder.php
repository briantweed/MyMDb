<?php

use Illuminate\Database\Seeder;

class TestDataSeeder extends Seeder
{
   public function run()
   {

      //  Cast
      if( DB::table('cast')->count() ) DB::table('cast')->truncate();
      $cast = [ ['1', '1', '1', '1'], ['1', '5', '2', '2'] ];
      array_map( function( $x ) {
         DB::table('cast')->insert([
            'cast_movie_id' => $x[0],
            'cast_person_id' => $x[1],
            'cast_character_id' => $x[2],
            'cast_order' => $x[3]
         ]);
      }, $cast); // end of Cast


      //  Categories
      if( DB::table('categories')->count() ) DB::table('categories')->truncate();
      $categories = [
         ['1', '13'],['1', '18'],['2', '12'],['2', '13'],['3', '16'],['3', '22'],['4', '16'],
         ['4', '22'],['5', '16'],['5', '22'],['6', '16'],['6', '22'],['7', '1'],['8', '1'],
         ['9', '1'],['9', '22'],['10', '22'],['11', '1'],['11', '24'],['12', '1'],['12', '24']
      ];
      array_map( function( $category ) {
         DB::table('categories')->insert([
            'category_movie_id' => $category[0],
            'category_genre_id' => $category[1]
         ]);
      }, $categories); // end of category



      //  Characters
      if( DB::table('characters')->count() ) DB::table('characters')->truncate();
      $characters = ['Kai','Oishi'];
      array_map( function( $character ) {
         DB::table('characters')->insert([
            'character_name' => $character
         ]);
      }, $characters); // end of Character


      //  Crew
      if( DB::table('crew')->count() ) DB::table('crew')->truncate();
      $crew = [ ['1',	'2', '1'], ['1',	'3', '3'], ['1', '4', '3'] ];
      array_map( function( $x ) {
         DB::table('crew')->insert([
            'crew_movie_id' => $x[0],
            'crew_person_id' => $x[1],
            'crew_position_id' => $x[2]
         ]);
      }, $crew); // end of Crew


      //  Keywords
      if( DB::table('keywords')->count() ) DB::table('keywords')->truncate();
      $keywords = ['Aliens','Dragon','Magic','MCU'];
      array_map( function( $keyword ) {
         DB::table('keywords')->insert([
            'keyword_word' => $keyword
         ]);
      }, $keywords); // end of Keywords


      // Quotes
      if( DB::table('quotes')->count() ) DB::table('quotes')->truncate();
      $quotes = [
         ['8','Tell these guys where the pages are so no one else gets hurt'],
         ['9','Sooner or later you&#039;re going to realize that there&#039;s a difference between knowing the page and finding the page.'],
         ['10','This is not the page you&#039;re looking for'],
         ['22','What&#039;s wrong? Have some trouble?'],
         ['25','Damn! Where is that page?'],
         ['33','We are tonight&#039;s entertainment! I only have one question. Where is the page?'],
         ['37','Empty. The opposite of full. This page is supposed to be full! Anyone care to explain?'],
         ['55','You don&#039;t think people are going to drive down and not see the page?'],
         ['96','Boy, it sure would be nice if we had some results, don&#039;t you think?'],
         ['170','What we got here is ... failure to communicate.'],
      ];
      array_map( function( $quote ) {
         DB::table('quotes')->insert([
            'quote_movie_id' => $quote[0],
            'quote_text' => $quote[1]
         ]);
      }, $quotes); // end of Quotes


      //  Tags
      if( DB::table('tags')->count() ) DB::table('tags')->truncate();
      $tags = [ ['3', '1'], ['4', '1'], ['5', '1'], ['6', '1'], ['1', '2'], ['1', '3'],['11', '4'] ];
      array_map( function( $tag ) {
         DB::table('tags')->insert([
            'tag_movie_id' => $tag[0],
            'tag_keyword_id' => $tag[1]
         ]);
      }, $tags); // end of Tags


      //  Viewings
      if( DB::table('viewings')->count() ) DB::table('viewings')->truncate();
      $viewings = [
         ['1', '2015-12-01 19:30:00'], ['2', '2015-12-02 18:35:00'], ['3', '2015-12-04 18:00:00'],
         ['4', '2015-11-11 19:35:00'], ['4', '2014-03-11 20:30:00'], ['9', '2015-11-12 18:30:00'],
         ['9', '2015-12-05 20:00:00'],
      ];
      array_map( function( $viewing ) {
         DB::table('viewings')->insert([
            'viewing_movie_id' => $viewing[0],
            'viewing_date' => $viewing[1]
         ]);
      }, $viewings); // end of Viewings


   } // end of method

} //end of class
