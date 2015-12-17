<?php

use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder {

	public function run()
	{
		$existing = DB::table('movies')->count();
		if( !$existing )
		{
			$movies = [
				// title, sort-title, released, image, running, rating, certificate, format, studio, bio
				['47 Ronin', '47 Ronin', '2013', '47_Ronin_Front.jpg', '128','6', '5', '2','1', 'A band of samurai set out to avenge the death and dishonor of their master at the hands of a ruthless shogun.'],
				['Alice in Wonderland', 'Alice In Wonderland', '2010', 'Alice_In_Wonderland_Front.jpg', '108', '6','3','2','3', 'Nineteen-year-old Alice returns to the magical world from her childhood adventure, where she reunites with her old friends and learns of her true destiny: to end the Red Queen\'s reign of terror.'],
				['Alien', 'Alien 1', '1979', 'ALien_1_Front.jpg', '116', '8','7','2','1','In space, no-one can hear you scream'],
				['Aliens', 'Alien 2', '1986', 'Alien_2_Front.jpg', '131', '8','7','2','1','This time its war'],
				['Alien 3', 'Alien 3', '1992', 'Alien_3_Front.jpg', '109', '6','7','2','1', 'Ripley continues to be stalked by a savage alien, after her escape pod crashes on a prison planet.'],
				['Alien Resurrection', 'Alien 4', '1997', 'Alien_4_Front.jpg', '104', '5','7','2','1', 'Two centuries after her death, Ellen Ripley is revived as a powerful human/alien hybrid clone who must continue her war against the aliens.'],
				['Fight Club','Fight Club','1999','Fight_Club_Front.jpg','125','10','7','2','1','The first rule of Fight Club is: you do not talk about Fight Club'],
				['Die Hard','Die Hard 1','1990','Die_Hard_Front.jpg','108','8','7','1','1','Yippee Kayaye MaggotFarmer'],
				['The Matrix','Matrix 1','1999','The_Matrix_Front.jpg','123','8','6','1','17','He is the one'],
				['Star Wars','Star Wars 4','1977','Star_Wars_4_Front.jpg','128','10','2','2','1','The Force will be with you, always'],
				['Avengers Assemble','Avengers 1','2012','Avengers_1_Front.jpg','137','8','4','2','5','When an unexpected enemy emerges that threatens global safety and security, Nick Fury finds himself needing a team that can pull the world back from the brink of disaster. Cue Iron Man, Thor, The Incredible Hulk, Captain America, Black Widow and Hawkeye - The Avengers.'],
				['The Amazing Spiderman','Amazing Spiderman 1','2012','Amazing_Spiderman_1_Front.jpg','136','6','4','2','12','A wise-cracking, taller Spider-Man. This time he&#039;s up against Lizardman.'],
				['Titanic', 'Titanic', '1998', 'Titanic_1450359229.jpg', '194','7', '4', '1','1', 'Big ship hits an iceberg. Jack tells Rose not to let go, but she does after he freezes to death in the water; then watches him sink to the bottom of the Atlantic Ocean. '],
				['Angels with Dirty Faces', 'Angels with Dirty Faces', '1938', 'Angels_With_Dirty_Faces_1450361371.jpg', '97','9', '3', '1','19', 'A priest tries to stop a gangster from corrupting a group of street kids.'],
				['White Heat', 'White Heat', '1949', 'White_Heat_1450367282.jpg', '114','9', '6', '1','19', 'A psychopathic criminal with a mother complex makes a daring break from prison and leads his old gang in a chemical plant payroll heist. Shortly after the plan takes place, events take a crazy turn. &quot;Made it Ma, top of the world!&quot;'],
				['50 First Dates', '50 First Dates', '2004', '50_First_Dates_1450367805.jpg', '99','6', '5', '1','3', 'Henry Roth is a man afraid of commitment up until he meets the beautiful Lucy. They hit it off and Henry think he&#039;s finally found the girl of his dreams, until he discovers she has short-term memory loss and forgets him the very next day.'],
				['The Lion King', 'Lion King', '1994', 'Lion_King_1450368557.jpg', '89','9', '2', '2','4', 'A young lion Prince is cast out of his pride by his cruel uncle, who claims he killed his father. While the uncle rules with an iron fist, the prince grows up beyond the savannah, living by a philosophy: No worries for the rest of your days. But when his past comes to haunt him, the young Prince must decide his fate: will he remain an outcast, or face his demons and become what he needs to be?'],
				['Jurassic Park', 'Jurassic Park 1', '1993', 'Jurassic_Park_1_1450369841.jpg', '127','8', '3', '2','18', 'Huge advancements in scientific technology have enabled a mogul to create an island full of living dinosaurs. John Hammond has invited four individuals, along with his two grandchildren, to join him at Jurassic Park. But will everything go according to plan? A park employee attempts to steal dinosaur embryos, critical security systems are shut down and it now becomes a race for survival with dinosaurs roaming freely over the island.'],
				['The Lost World', 'Jurassic Park 2', '1997', 'Jurassic_Park_2_1450369988.jpg', '129','6', '3', '2','18', 'A research team is sent to the Jurassic Park Site B island to study the dinosaurs there while another team approaches with another agenda.'],
				['Jurassic Park 3', 'Jurassic Park 3', '2001', 'Jurassic_Park_3_1450370366.jpg', '92','5', '3', '2','18', 'A decidedly odd couple with ulterior motives convince Dr. Alan Grant to go to Isla Sorna (the second InGen dinosaur lab.), resulting in an unexpected landing; and unexpected new inhabitants on the island.'],
				['Jurassic World', 'Jurassic World 4', '2015', 'Jurassic_World_4_1450370490.jpg', '124','7', '5', '2','18', 'A new theme park is built on the original site of Jurassic Park. Everything is going well until the park&#039;s newest attraction--a genetically modified giant stealth killing machine--escapes containment and goes on a killing spree.'],

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
					'created_at' => $now,
					'updated_at' => $now
				]);
			}, $movies);

		} // end of if

	} // end of method

} // end of class
