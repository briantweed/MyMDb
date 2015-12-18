<?php

use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder {

	public function run()
	{
		$existing = DB::table('movies')->count();
		if( !$existing )
		{
			$movies = [
				// title,sort-title,released,image,running,rating,certificate,format,studio,bio
				['47 Ronin','47 Ronin','2013','47_Ronin_Front.jpg','128','6','5','2','18','A band of samurai set out to avenge the death and dishonor of their master at the hands of a ruthless shogun.'],
				['Alice in Wonderland','Alice In Wonderland','2010','Alice_In_Wonderland_Front.jpg','108','6','3','2','4','Nineteen-year-old Alice returns to the magical world from her childhood adventure, where she reunites with her old friends and learns of her true destiny: to end the Red Queen&#039;s reign of terror.'],
				['Alien','Alien 1','1979','ALien_1_Front.jpg','116','8','7','2','1','In space,no-one can hear you scream'],
				['Aliens','Alien 2','1986','Alien_2_Front.jpg','131','8','7','2','1','This time its war'],
				['Alien 3','Alien 3','1992','Alien_3_Front.jpg','109','6','7','2','1','Ripley continues to be stalked by a savage alien, after her escape pod crashes on a prison planet.'],
				['Alien Resurrection','Alien 4','1997','Alien_4_Front.jpg','104','5','7','2','1','Two centuries after her death, Ellen Ripley is revived as a powerful human/alien hybrid clone who must continue her war against the aliens.'],
				['Fight Club','Fight Club','1999','Fight_Club_Front.jpg','125','10','7','2','1','The first rule of Fight Club is: you do not talk about Fight Club'],
				['Die Hard','Die Hard 1','1990','Die_Hard_Front.jpg','108','8','7','1','1','Yippee Kayaye MaggotFarmer'],
				['The Matrix','Matrix 1','1999','The_Matrix_Front.jpg','123','8','6','1','19','He is the one'],
				['Star Wars','Star Wars 4','1977','Star_Wars_4_Front.jpg','128','10','2','2','1','The Force will be with you, always'],
				['Avengers Assemble','Avengers 1','2012','Avengers_1_Front.jpg','137','8','4','2','5','When an unexpected enemy emerges that threatens global safety and security, Nick Fury finds himself needing a team that can pull the world back from the brink of disaster. Cue Iron Man, The Incredible Hulk, Captain America, Black Widow and Hawkeye - The Avengers.'],
				['The Amazing Spiderman','Amazing Spiderman 1','2012','Amazing_Spiderman_1_Front.jpg','136','6','4','2','3','A wise-cracking, taller Spider-Man. This time he&#039;s up against Lizardman.'],
				['Titanic','Titanic','1998','Titanic_1450359229.jpg','194','7','4','1','1','Big ship hits an iceberg. Jack tells Rose not to let go, but she does after he freezes to death in the water; then watches him sink to the bottom of the Atlantic Ocean. '],
				['Angels with Dirty Faces','Angels with Dirty Faces','1938','Angels_With_Dirty_Faces_1450361371.jpg','97','9','3','1','19','A priest tries to stop a gangster from corrupting a group of street kids.'],
				['White Heat','White Heat','1949','White_Heat_1450367282.jpg','114','9','6','1','19','A psychopathic criminal with a mother complex makes a daring break from prison and leads his old gang in a chemical plant payroll heist. Shortly after the plan takes place, events take a crazy turn. &quot;Made it Ma, top of the world!&quot;'],
				['50 First Dates','50 First Dates','2004','50_First_Dates_1450367805.jpg','99','6','5','1','3','Henry Roth is a man afraid of commitment up until he meets the beautiful Lucy. They hit it off and Henry think he&#039;s finally found the girl of his dreams, until he discovers she has short-term memory loss and forgets him the very next day.'],
				['The Lion King','Lion King','1994','Lion_King_1450368557.jpg','89','9','2','2','4','A young lion Prince is cast out of his pride by his cruel uncle, who claims he killed his father. While the uncle rules with an iron fist, the prince grows up beyond the savannah, living by a philosophy: No worries for the rest of your days. But when his past comes to haunt him,the young Prince must decide his fate: will he remain an outcast, or face his demons and become what he needs to be?'],
				['Jurassic Park','Jurassic Park 1','1993','Jurassic_Park_1_1450369841.jpg','127','8','3','2','18','Huge advancements in scientific technology have enabled a mogul to create an island full of living dinosaurs. John Hammond has invited four individuals, along with his two grandchildren, to join him at Jurassic Park. But will everything go according to plan? A park employee attempts to steal dinosaur embryos, critical security systems are shut down and it now becomes a race for survival with dinosaurs roaming freely over the island.'],
				['The Lost World','Jurassic Park 2','1997','Jurassic_Park_2_1450369988.jpg','129','6','3','2','18','A research team is sent to the Jurassic Park Site B island to study the dinosaurs there while another team approaches with another agenda.'],
				['Jurassic Park 3','Jurassic Park 3','2001','Jurassic_Park_3_1450370366.jpg','92','5','3','2','18','A decidedly odd couple with ulterior motives convince Dr. Alan Grant to go to Isla Sorna (the second InGen dinosaur lab.), resulting in an unexpected landing; and unexpected new inhabitants on the island.'],
				['Jurassic World','Jurassic World 4','2015','Jurassic_World_4_1450370490.jpg','124','7','5','2','18','A new theme park is built on the original site of Jurassic Park. Everything is going well until the park&#039;s newest attraction--a genetically modified giant stealth killing machine--escapes containment and goes on a killing spree.'],
				['Akira','Akira','1988','Akira_1450373794.jpg','124','8','4','1','20','A secret military project endangers Neo-Tokyo when it turns a biker gang member into a rampaging psionic psychopath that only two kids and a group of psionics can stop.'],
				['Argo','Argo','2012','Argo_1450374473.jpg','120','7','6','2','19','Acting under the cover of a Hollywood producer scouting a location for a science fiction film, a CIA agent launches a dangerous operation to rescue six Americans in Tehran during the U.S. hostage crisis in Iran in 1980.'],
				['Avatar','Avatar 1','2009','Avatar_1_1450374586.jpg','162','7','5','2','1','A paraplegic marine dispatched to the moon Pandora on a unique mission becomes torn between following his orders and protecting the world he feels is his home.'],
				['Back to the Future','Back to the Future 1','1985','Back_To_The_Future_1_1450374793.jpg','116','9','3','2','18','A young man is accidentally sent thirty years into the past in a time-traveling DeLorean invented by his friend, Dr. Emmett Brown, and must make sure his high-school-age parents unite in order to save his own existence.'],
				['Back to the Future 2','Back to the Future 2','1989','Back_To_The_Future_2_1450374891.jpg','108','7','3','2','18','Marty McFly has only just gotten back from the past, when he is once again picked up by Dr. Emmett Brown and sent through time to the future. Marty&#039;s job in the future is to pose as his own son to prevent him from being thrown in prison. Unfortunately, things get worse when the future changes the present.'],
				['Back to the Future 3','Back to the Future 3','1990','Back_To_The_Future_3_1450374978.jpg','118','8','3','2','18','Stranded in 1955, Marty McFly receives written word from his friend, Doctor Emmett Brown, as to where can be found the DeLorean time machine. However, an unfortunate discovery prompts Marty to go to his friend&#039;s aid. Using the time machine, Marty travels to the old west where his friend has run afoul of a gang of thugs and has fallen in love with a local schoolteacher. Using the technology from the time, Marty and Emmett devise one last chance to send the two of them back to the future.'],
				['American - The Bill Hicks Story','American The Bill Hicks Story','2009','American_The_Bill_Hicks_Story_1450375278.jpg','102','7','6','2','22','Photo-animated feature documentary, uniquely narrated by the 10 people who knew Bill best.'],
				['The Bourne Identity','Bourne 1','2002','Bourne_1_1450375808.jpg','119','8','5','2','18','Based very loosely on Robert Ludlum&#039;s novel, the Bourne Identity is the story of a man whose wounded body is discovered by fishermen who nurse him back to health. He can remember nothing and begins to try to rebuild his memory based on clues such as the Swiss bank account, the number of which, is implanted in his hip. He soon realizes that he is being hunted and takes off with Marie on a search to find out who he is and why he is being hunted.'],
				['The Bourne Supremacy','Bourne 2','2004','Bourne_2_1450375918.jpg','108','9','5','2','18','After escaping from the emotional and physical pain he previously encountered. Jason Bourne and his girlfriend Marie begin a new life as far away as possible. But when an assassination attempt on Bourne goes horribly wrong, Bourne must re-enter the life he wanted to leave behind, in order to find out the truth why they are still after him.'],
				['The Bourne Ultimatium','Bourne 3','2007','Bourne_3_1450376066.jpg','115','8','5','2','18','Bourne is once again brought out of hiding, this time inadvertently by London-based reporter Simon Ross who is trying to unveil Operation Blackbriar--an upgrade to Project Treadstone--in a series of newspaper columns. Bourne sets up a meeting with Ross and realizes instantly they&#039;re being scanned. Information from the reporter stirs a new set of memories, and Bourne must finally, ultimately, uncover his dark past whilst dodging The Company&#039;s best efforts in trying to eradicate him.'],
				['Batman Begins','Batman 5','2005','Batman_5_1450376492.jpg','140','7','5','2','19','After training with his mentor, Batman begins his war on crime to free the crime-ridden Gotham City from corruption that the Scarecrow and the League of Shadows have cast upon it.'],
				['The Dark Knight','Batman 6','2008','Batman_6_1450376574.jpg','152','9','5','2','19','When the menace known as the Joker wreaks havoc and chaos on the people of Gotham, the caped crusader must come to terms with one of the greatest psychological tests of his ability to fight injustice.'],
				['The Dark Knight Rises','Batman 7','2012','Batman_7_1450376745.jpg','164','6','5','2','19','Eight years after the Joker&#039;s reign of anarchy, the Dark Knight is forced to return from his imposed exile to save Gotham City from the brutal guerrilla terrorist Bane with the help of the enigmatic Selina.'],
				['Black Swan','Black Swan','2010','Black_Swan_1450379048.jpg','108','7','6','2','23	','A committed dancer wins the lead role in a production of Tchaikovsky&#039;s Swan Lake only to find herself struggling to maintain her sanity.'],
				['Bad Lieutenant','Bad Lieutenant','2009','Bad_Lieutenant_1450379307.jpg','122','5','7','2','8','Terence McDonagh is a drug- and gambling-addled detective in post-Katrina New Orleans investigating the killing of five Senegalese immigrants.'],
				['The Fifth Element','Fifth Element','1997','Fifth_Element_1450452578.jpg','126','7','3','1','24','In the colorful future, a cab driver unwittingly becomes the central figure in the search for a legendary cosmic weapon to keep Evil and Mr Zorg at bay.'],
				['The Cabin in the Woods','Cabin in the Woods','2012','Cabin_In_The_Woods_1450460205.jpg','95','8','6','2','8','Five friends go for a break at a remote cabin in the woods, where they get more than they bargained for. Together, they must discover the truth behind the cabin in the woods.'],
				['Candyman','Candyman','1992','Candyman_1450460417.jpg','99','7','7','2','25','The Candyman, a murderous soul with a hook for a hand, is accidentally summoned to reality by a skeptic grad student researching the monster&#039;s myth.'],
				['Carlito&#039;s Way','Carlitos Way','1993','Carlitos_Way_1450460535.jpg','144','6','7','2','18','A Puerto Rican former convict, just released from prison, pledges to stay away from drugs and violence despite the pressure around him and lead on to a better life outside of N.Y.C.'], 
			];

			array_map( function( $movie ) {
				$now = date("Y-m-d H:i:d",strtotime('now'));
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
			},$movies);

		} // end of if

	} // end of method

} // end of class
