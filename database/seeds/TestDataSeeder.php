<?php

use Illuminate\Database\Seeder;

class TestDataSeeder extends Seeder
{
   public function run()
   {

      // ********** Cast **********
      DB::table('cast')->truncate();
      $cast = [ ['1', '1', '1', '1'], ['1', '2', '2', '2'] ];
      array_map( function( $x ) {
         DB::table('cast')->insert([
            'cast_movie_id' => $x[0],
            'cast_person_id' => $x[1],
            'cast_character_id' => $x[2],
            'cast_order' => $x[3]
         ]);
      }, $cast); // end of Cast


      // ********** Categories *********
      DB::table('categories')->truncate();
      $categories = [
         ['1', '13'],['1', '18'],['2', '12'],['2', '13'],['3', '16'],['3', '22'],['4', '16'],
         ['4', '22'],['5', '16'],['5', '22'],['6', '16'],['6', '22'],['7', '1']
      ];
      array_map( function( $category ) {
         DB::table('categories')->insert([
            'category_movie_id' => $category[0],
            'category_genre_id' => $category[1]
         ]);
      }, $categories); // end of category


      // ********** Persons **********
      DB::table('persons')->truncate();
      $persons = [
         ['Keanu', 'Reeves', '1964-09-02', '', 'Keanu Reeves, whose first name means &#034;cool breeze over the mountains&#034; in Hawaiian, was born in Beirut, Lebanon in 1964, the son of English-born Patricia Taylor, a showgirl, and American-born Samuel Nowlin Reeves, a geologist. Keanu&#039;s father was born in Hawaii, of British, Portuguese, Native Hawaiian, and Chinese ancestry.'],
         ['Carl', 'Rinsch', '', '', ''],
         ['Chris', 'Morgan', '', '', ''],
         ['Hossein', 'Amini', '', '', ''],
         ['Hiroyuki', 'Sanada', '1960-10-12', '', 'Hiroyuki Sanada was born on the 12th of October, 1960 in Tokyo. He made his film debut when he was 5 in Game of Chance (1965) (Shin\'ichi Chiba played the lead role.) Sanada\'s father died when he was 11. Sanada joined Japan Action Club, organized and run by Sonny Chiba, when he was 12. Sanada first became famous as an action star for his role in The Shogun\'s Samurai (1978).']
      ];
      array_map( function( $person ) {
         DB::table('persons')->insert([
            'person_forename' => $person[0],
            'person_surname' => $person[1],
            'person_birthday' => $person[2],
            'person_bio' => $person[4]
         ]);
      }, $persons); // end of Persons


      // ********** Characters **********
      DB::table('characters')->truncate();
      $characters = ['Kai','Oishi'];
      array_map( function( $character ) {
         DB::table('characters')->insert([
            'character_name' => $character
         ]);
      }, $characters); // end of Character


      // ********** Crew **********
      DB::table('crew')->truncate();
      $crew = [ ['1',	'2', '1'], ['1',	'3', '3'], ['1', '4', '3'] ];
      array_map( function( $x ) {
         DB::table('crew')->insert([
            'crew_movie_id' => $x[0],
            'crew_person_id' => $x[1],
            'crew_position_id' => $x[2]
         ]);
      }, $crew); // end of Crew


      // ********** Keywords **********
      DB::table('keywords')->truncate();
      $keywords = ['Aliens','Dragon','Magic'];
      array_map( function( $keyword ) {
         DB::table('keywords')->insert([
            'keyword_word' => $keyword
         ]);
      }, $keywords); // end of Keywords


      // ********** Tags **********
      DB::table('tags')->truncate();
      $tags = [ ['3', '1'], ['4', '1'], ['5', '1'], ['6', '1'], ['1', '2'], ['1', '3'] ];
      array_map( function( $tag ) {
         DB::table('tags')->insert([
            'tag_movie_id' => $tag[0],
            'tag_keyword_id' => $tag[1]
         ]);
      }, $tags); // end of Tags


      // ********** Viewings **********
      DB::table('viewings')->truncate();
      $viewings = [
         ['1', '2015-12-01'], ['2', '2015-12-02'], ['3', '2015-12-04'], ['4', '2015-11-11'],
         ['4', '2014-03-11'], ['9', '2015-11-12'], ['9', '2015-12-05'],
      ];
      array_map( function( $viewing ) {
         DB::table('viewings')->insert([
            'viewing_movie_id' => $viewing[0],
            'viewing_date' => $viewing[1]
         ]);
      }, $viewings); // end of Viewings


   } // end of method

} //end of class
