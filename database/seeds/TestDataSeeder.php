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


      //  Categories *********
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


      //  Persons
      if( DB::table('persons')->count() ) DB::table('persons')->truncate();
      $persons = [
         ['Keanu', 'Reeves', '1964-09-02', 'keanu_reeves.jpg', 'Keanu Reeves, whose first name means &#034;cool breeze over the mountains&#034; in Hawaiian, was born in Beirut, Lebanon in 1964, the son of English-born Patricia Taylor, a showgirl, and American-born Samuel Nowlin Reeves, a geologist. Keanu&#039;s father was born in Hawaii, of British, Portuguese, Native Hawaiian, and Chinese ancestry.\n\n His first popular success was the role of totally rad dude &#034;Ted Logan&#034; in Bill & Ted&#039;s Excellent Adventure (1989). The wacky time-travel movie became something of a cultural phenomenon, and audiences would forever confuse Reeves&#039;s real-life persona with that of his doofy on-screen counterpart. In 1994, the understated actor became a big-budget action star with the release of Speed (1994). Its success heralded an era of five years in which Reeves would alternate between small films, like Feeling Minnesota (1996) and The Last Time I Committed Suicide (1997), and big films like A Walk in the Clouds (1995) and The Devil&#039;s Advocate (1997). After all this, Reeves did the unthinkable and passed on the Speed sequel, but he struck box-office gold again a few years later with the Wachowski siblings&#039; cyberadventure, The Matrix (1999).'],
         ['Carl', 'Rinsch', NULL, NULL, NULL],
         ['Chris', 'Morgan', NULL, NULL, NULL],
         ['Hossein', 'Amini', NULL, NULL, NULL],
         ['Hiroyuki', 'Sanada', '1960-10-12', NULL, 'Hiroyuki Sanada was born on the 12th of October, 1960 in Tokyo. He made his film debut when he was 5 in Game of Chance (1965) (Shin\'ichi Chiba played the lead role.) Sanada\'s father died when he was 11. Sanada joined Japan Action Club, organized and run by Sonny Chiba, when he was 12. Sanada first became famous as an action star for his role in The Shogun\'s Samurai (1978).']
      ];
      array_map( function( $person ) {
         DB::table('persons')->insert([
            'person_forename' => $person[0],
            'person_surname' => $person[1],
            'person_birthday' => $person[2],
            'person_image_path' => $person[3],
            'person_bio' => $person[4]
         ]);
      }, $persons); // end of Persons


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



      if( DB::table('quotes')->count() ) DB::table('quotes')->truncate();
      $quotes = [
         ['9','Sooner or later you&#039;re going to realize that there&#039;s a difference between knowing the page and finding the page.'],
         ['10','This is not the page you&#039;re looking for'],
         ['22','What&#039;s wrong? Have some trouble?'],
         ['37','Empty. The opposite of full. This page is supposed to be full! Anyone care to explain?'],
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
