<?php

use Illuminate\Database\Seeder;

class PersonsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('persons')->delete();
        
		\DB::table('persons')->insert(array (
			0 => 
			array (
				'person_id' => 1,
				'person_forename' => 'Keanu',
				'person_surname' => 'Reeves',
				'person_birthday' => '1964-09-02',
				'person_image_path' => 'keanu_reeves.jpg',
				'person_bio' => 'Keanu Reeves, whose first name means "cool breeze over the mountains" in Hawaiian, was born in Beirut, Lebanon in 1964, the son of English-born Patricia Taylor, a showgirl, and American-born Samuel Nowlin Reeves, a geologist. Keanu\'s father was born in Hawaii, of British, Portuguese, Native Hawaiian, and Chinese ancestry.

His first popular success was the role of totally rad dude "Ted Logan" in Bill & Ted\'s Excellent Adventure (1989). The wacky time-travel movie became something of a cultural phenomenon, and audiences would forever confuse Reeves\'s real-life persona with that of his doofy on-screen counterpart. In 1994, the understated actor became a big-budget action star with the release of Speed (1994). Its success heralded an era of five years in which Reeves would alternate between small films, like Feeling Minnesota (1996) and The Last Time I Committed Suicide (1997), and big films like A Walk in the Clouds (1995) and The Devil\'s Advocate (1997).

After all this, Reeves did the unthinkable and passed on the Speed sequel, but he struck box-office gold again a few years later with the Wachowski siblings\' cyberadventure, The Matrix (1999).',
				'updated_at' => '2015-12-30 15:58:19',
				'created_at' => '0000-00-00 00:00:00',
			),
			1 => 
			array (
				'person_id' => 2,
				'person_forename' => 'Carl',
				'person_surname' => 'Rinsch',
				'person_birthday' => NULL,
				'person_image_path' => NULL,
				'person_bio' => NULL,
				'updated_at' => '0000-00-00 00:00:00',
				'created_at' => '0000-00-00 00:00:00',
			),
			2 => 
			array (
				'person_id' => 3,
				'person_forename' => 'Chris',
				'person_surname' => 'Morgan',
				'person_birthday' => NULL,
				'person_image_path' => NULL,
				'person_bio' => NULL,
				'updated_at' => '0000-00-00 00:00:00',
				'created_at' => '0000-00-00 00:00:00',
			),
			3 => 
			array (
				'person_id' => 4,
				'person_forename' => 'Hossein',
				'person_surname' => 'Amini',
				'person_birthday' => NULL,
				'person_image_path' => NULL,
				'person_bio' => NULL,
				'updated_at' => '0000-00-00 00:00:00',
				'created_at' => '0000-00-00 00:00:00',
			),
			4 => 
			array (
				'person_id' => 5,
				'person_forename' => 'Hiroyuki',
				'person_surname' => 'Sanada',
				'person_birthday' => '1960-10-12',
				'person_image_path' => 'hiroyuki_sanada.jpg',
			'person_bio' => 'Hiroyuki Sanada was born on the 12th of October, 1960 in Tokyo. He made his film debut when he was 5 in Game of Chance (1965) (Shin\'ichi Chiba played the lead role.) Sanada\'s father died when he was 11. Sanada joined Japan Action Club, organized and run by Sonny Chiba, when he was 12. Sanada first became famous as an action star for his role in The Shogun\'s Samurai (1978).',
				'updated_at' => '0000-00-00 00:00:00',
				'created_at' => '0000-00-00 00:00:00',
			),
		));
	}

}
