<?php

use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder {

	public function run()
	{
		$existing = DB::table('movies')->count();
		if( !$existing )
		{
			$movies = [
				['47 Ronin', '47 Ronin', '2013-12-26', '47_Ronin_Front.jpg', '128','6', '5', '2','1', 'A band of samurai set out to avenge the death and dishonor of their master at the hands of a ruthless shogun.'],
				['Alice in Wonderland', 'Alice In Wonderland', '2010-03-05', 'Alice_In_Wonderland_Front.jpg', '108', '6','3','2','3', 'Nineteen-year-old Alice returns to the magical world from her childhood adventure, where she reunites with her old friends and learns of her true destiny: to end the Red Queen\'s reign of terror.'],
				['Alien', 'Alien 1', '1979-06-22', 'ALien_1_Front.jpg', '116', '8','7','2','1','In space, no-one can hear you scream'],
				['Aliens', 'Alien 2', '1986-08-29', 'Alien_2_Front.jpg', '131', '8','7','2','1','This time its war'],
				['Alien 3', 'Alien 3', '1992-05-22', 'Alien_3_Front.jpg', '109', '6','7','2','1', 'Ripley continues to be stalked by a savage alien, after her escape pod crashes on a prison planet.'],
				['Alien Resurrection', 'Alien 4', '1997-11-28', 'Alien_4_Front.jpg', '104', '5','7','2','1', 'Two centuries after her death, Ellen Ripley is revived as a powerful human/alien hybrid clone who must continue her war against the aliens.'],
				['Fight Club','Fight Club','1999-11-13','Fight_Club_Front.jpg','125','10','7','2','1','The first rule of Fight Club is: you do not talk about Fight Club'],
				['Die Hard','Die Hard 1','1990-12-21','Die_Hard_Front.jpg','108','8','7','1','1','Yippee Kayaye MaggotFarmer'],
				['The Matrix','Matrix 1','1999-08-01','The_Matrix_Front.jpg','123','8','6','1','17','He is the one'],
				['Star Wars','Star Wars 4','1977-08-11','Star_Wars_4_Front.jpg','128','10','2','2','1','The Force will be with you, always']
			];

			array_map( function( $movie ) {
				$now = date("Y-m-d H:i:d", strtotime('now'));
				DB::table('movies')->insert([
					'movie_name' => $movie[0],
					'movie_sort_name' => $movie[1],
					'movie_release_date' => $movie[2],
					'movie_image_path' => $movie[3],
					'movie_running_time' => $movie[4],
					'movie_my_rating' => $movie[5],
					'movie_certificate_id'=> $movie[6],
					'movie_format_id' => $movie[7],
					'movie_studio_id' => $movie[8],
					'movie_bio' => $movie[9],
					'movie_added_on' => $now
				]);
			}, $movies);

		} // end of if

	} // end of method

} // end of class
