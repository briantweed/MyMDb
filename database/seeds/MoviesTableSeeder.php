<?php

use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder {

	public function run()
	{
		$existing = DB::table('movies')->count();
		if( !$existing )
		{
			$movies = [
				['Fight Club', '1999-11-13','10','7','The first rule of Fight Club is: you do not talk about Fight Club'],
				['Alien', '1979-10-21','8','7','In space, no-one can hear you scream'],
				['Aliens', '1997-05-11','8','7','This time its war'],
				['Die Hard', '1990-12-21','8','7','Yippee Kayaye MaggotFarmer'],
				['The Matrix', '1999-08-01','8','6','He is the one'],
				['The Matrix', '1977-08-11','10','2','The Force will be with you, always'],
			];
			
			array_map( function( $movie ) {
				$now = date("Y-m-d H:i:d", strtotime('now'));
				DB::table('movies')->insert([
					'movie_name' => $movie[0],
					'movie_release_date' => $movie[1],
					'movie_rating' => $movie[2],
					'movie_certificate' => $movie[3],
					'movie_description' => $movie[4],
					'movie_added_on' => $now
				]);
			}, $movies);

		} // end of if

	} // end of method

} // end of class
