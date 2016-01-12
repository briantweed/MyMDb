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
				'forename' => 'Keanu',
				'surname' => 'Reeves',
				'birthday' => '1964-09-02',
				'image' => 'keanu_reeves.jpg',
				'bio' => 'Keanu Reeves, whose first name means "cool breeze over the mountains" in Hawaiian, was born in Beirut, Lebanon in 1964, the son of English-born Patricia Taylor, a showgirl, and American-born Samuel Nowlin Reeves, a geologist. Keanu\'s father was born in Hawaii, of British, Portuguese, Native Hawaiian, and Chinese ancestry.

His first popular success was the role of totally rad dude "Ted Logan" in Bill & Ted\'s Excellent Adventure (1989). The wacky time-travel movie became something of a cultural phenomenon, and audiences would forever confuse Reeves\'s real-life persona with that of his doofy on-screen counterpart. In 1994, the understated actor became a big-budget action star with the release of Speed (1994). Its success heralded an era of five years in which Reeves would alternate between small films, like Feeling Minnesota (1996) and The Last Time I Committed Suicide (1997), and big films like A Walk in the Clouds (1995) and The Devil\'s Advocate (1997).

After all this, Reeves did the unthinkable and passed on the Speed sequel, but he struck box-office gold again a few years later with the Wachowski siblings\' cyberadventure, The Matrix (1999).',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '2015-12-30 15:58:19',
			),
			1 => 
			array (
				'person_id' => 2,
				'forename' => 'Carl',
				'surname' => 'Rinsch',
				'birthday' => NULL,
				'image' => 'carl_rinsch.jpg',
				'bio' => NULL,
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			2 => 
			array (
				'person_id' => 3,
				'forename' => 'Chris',
				'surname' => 'Morgan',
				'birthday' => NULL,
				'image' => NULL,
				'bio' => NULL,
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			3 => 
			array (
				'person_id' => 4,
				'forename' => 'Hossein',
				'surname' => 'Amini',
				'birthday' => NULL,
				'image' => NULL,
				'bio' => NULL,
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			4 => 
			array (
				'person_id' => 5,
				'forename' => 'Hiroyuki',
				'surname' => 'Sanada',
				'birthday' => '1960-10-12',
				'image' => 'hiroyuki_sanada.jpg',
			'bio' => 'Hiroyuki Sanada was born on the 12th of October, 1960 in Tokyo. He made his film debut when he was 5 in Game of Chance (1965) (Shin\'ichi Chiba played the lead role.) Sanada\'s father died when he was 11. Sanada joined Japan Action Club, organized and run by Sonny Chiba, when he was 12. Sanada first became famous as an action star for his role in The Shogun\'s Samurai (1978).',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			5 => 
			array (
				'person_id' => 6,
				'forename' => 'Brad',
				'surname' => 'Pitt',
				'birthday' => '1963-12-18',
				'image' => 'brad_pitt_1451494768.jpg',
			'bio' => 'Actor and producer Brad Pitt was born on December 18, 1963, in Shawnee, Oklahoma. Pitt&#039;s first jobs came in television in the late 1980s. Pitt made his big-screen debut in 1989&#039;s horror film Cutting Class and his role in 1994&#039;s Legends of the Fall helped secured his place as a Hollywood staple. More recent film credits include Fight Club (1999), Babel (2006), The Curious Case of Benjamin Button (2008), Inglourious Basterds (2009), Moneyball (2011) and World War Z (2013).

He was nominated for an Academy Award for the fifth time in 2014, winning his first Oscar in the best picture category as a producer for 12 Years a Slave (2013). He is married to fellow actor Angelina Jolie.',
				'created_at' => '2015-12-30 16:59:28',
				'updated_at' => '2015-12-30 16:59:28',
			),
			6 => 
			array (
				'person_id' => 7,
				'forename' => 'Edward',
				'surname' => 'Norton',
				'birthday' => '1969-08-18',
				'image' => 'edward_norton_1451692788.jpg',
			'bio' => 'Edward Harrison Norton was born on August 18, 1969, in Boston, Massachusetts, and was raised in Columbia, Maryland. From the age of five onward, the Yale graduate (majoring in history) was interested in acting. At the age of eight, he would ask his drama teacher what his motivation in a scene was.

He attended theater schools throughout his life, and eventually managed to find work on stage in New York as a member of the Signature players, who produced the works of playwright and director Edward Albee. Around the time when he was appearing in Albee\'s Fragments, in Hollywood, they were looking for a young actor to star opposite Richard Gere in a new courtroom thriller, Primal Fear (1996).  Before the film was even released, his test screenings for the part were causing a Hollywood sensation, and he was soon offered roles in Woody Allen\'s Everyone Says I Love You (1996) and The People vs. Larry Flynt (1996).

Edward won the Golden Globe for Best Actor in a Supporting Role and received an Oscar nomination for Best Supporting Actor for his performance in Primal Fear (1996). In 1998, Norton gained 30 pounds of muscle and transformed his look into that of a monstrous skinhead for his role as a violent white supremacist in American History X (1998). This performance would earn him his second Oscar nomination, this time for Best Actor. In 1999 came the critically acclaimed Fight Club (1999)',
				'created_at' => '2016-01-01 23:43:03',
				'updated_at' => '2016-01-03 19:01:26',
			),
			7 => 
			array (
				'person_id' => 8,
				'forename' => 'Drew',
				'surname' => 'Barrymore',
				'birthday' => '1975-02-22',
				'image' => 'drew_barrymore_1452604247.jpg',
				'bio' => 'Since melting audiences\' hearts - at the age of six - in Steven Spielberg\'s beloved sci-fi blockbuster, E.T. the Extra-Terrestrial, Drew Barrymore has emerged as one of the most endearing and talented actresses of her generation.

Drew Blyth Barrymore was born in Culver City, California, to actors John Drew Barrymore and Jaid Barrymore (née Ildiko Jaid Mako). Her father came from a long showbusiness legacy, as the son of actors John Barrymore and Dolores Costello, while her mother was the daughter of Hungarian immigrants. Despite a troubled and much-publicized adolescence, and a string of bad girl parts in lurid crime dramas such as Poison Ivy (1992), Barrymore\'s star was officially on the rise during the mid-1990s, with notable appearances in Boys on the Side (1995), Woody Allen\'s Everyone Says I Love You (1996), and the game-changing horror hit Scream (1996).',
				'created_at' => '2016-01-12 13:06:17',
				'updated_at' => '2016-01-12 13:10:47',
			),
			8 => 
			array (
				'person_id' => 9,
				'forename' => 'Adam',
				'surname' => 'Sandler',
				'birthday' => '1966-09-09',
				'image' => 'adam_sandler_1452604835.jpg',
			'bio' => 'Adam Richard Sandler was born September 9, 1966 in Brooklyn, New York, to Judith (Levine), a teacher at a nursery school, and Stanley Alan Sandler, an electrical engineer. He is of Russian Jewish descent. 

At 17, he took his first step towards becoming a stand-up comedian when he spontaneously took the stage at a Boston comedy club. He found he was a natural comic. He nurtured his talent while at New York University (graduating with a Bachelor of Fine Arts degree in 1991) by performing regularly in clubs and at universities. 

While working at a comedy club in L.A., he was "discovered" by Dennis Miller, who recommended him to Saturday Night Live producer Lorne Michaels and told him that Sandler had a big talent. This led to his being cast in the show in 1990, which he also wrote for in addition to performing. 

After Saturday Night Live, Sandler went on to the movies, starring in such hit comedies as Airheads (1994), Happy Gilmore, Billy Madison  and Big Daddy.',
				'created_at' => '2016-01-12 13:10:13',
				'updated_at' => '2016-01-12 13:20:35',
			),
			9 => 
			array (
				'person_id' => 10,
				'forename' => 'Sigourney',
				'surname' => 'Weaver',
				'birthday' => '1949-10-08',
				'image' => 'sigourney_weaver_1452606281.jpg',
			'bio' => 'Sigourney Weaver (born Susan Alexandra Weaver; October 8, 1949) is an American actress and film producer. Following her film debut as a minor character in Annie Hall, she quickly came to prominence in 1979 with her first lead role as Ellen Ripley in Alien. She reprised the role in three sequels: Aliens, for which she was nominated for the Academy Award Best Actress; Alien 3, and Alien: Resurrection. 

She is also known for her starring roles in the box-office hits Ghostbusters, Ghostbusters 2 and Avatar.',
				'created_at' => '2016-01-12 13:44:41',
				'updated_at' => '2016-01-12 13:46:19',
			),
			10 => 
			array (
				'person_id' => 11,
				'forename' => 'Johnny',
				'surname' => 'Depp',
				'birthday' => '1963-06-09',
				'image' => 'johnny_depp_1452606877.jpg',
			'bio' => 'Born John Christopher Depp II in Owensboro, Kentucky, on June 9, 1963, to Betty Sue (Wells), who worked as a waitress, and John Christopher Depp, a civil engineer.

Depp was raised in Florida. He dropped out of school when he was 15, and fronted a series of music-garage bands, including one named &#039;The Kids&#039;. However, it was when he married Lori Anne Allison (Lori A. Depp) that he took up the job of being a ballpoint-pen salesman to support himself and his wife. A visit to Los Angeles, California, with his wife, however, happened to be a blessing in disguise, when he met up with actor Nicolas Cage, who advised him to turn to acting, which culminated in Depp&#039;s film debut in the low-budget horror film, A Nightmare on Elm Street, where he played a teenager who falls prey to dream-stalking demon Freddy Krueger.

Depp has played many characters in his career, including another fact-based one, Insp. Fred Abberline in From Hell. He stole the show from screen greats such as Antonio Banderas in the finale to Robert Rodriguez&#039;s &quot;mariachi&quot; trilogy, Once Upon a Time in Mexico. In that same year he starred in the marvelous family blockbuster Pirates of the Caribbean: The Curse of the Black Pearl, playing a character that only the likes of Depp could pull off: the charming, conniving and roguish Capt. Jack Sparrow. The film&#039;s enormous success has opened several doors for his career and included an Oscar nomination.',
				'created_at' => '2016-01-12 13:54:37',
				'updated_at' => '2016-01-12 13:54:37',
			),
			11 => 
			array (
				'person_id' => 12,
				'forename' => 'James',
				'surname' => 'Cagney',
				'birthday' => '1970-01-01',
				'image' => 'james_cagney_1452607234.jpg',
				'bio' => 'James Francis Cagney, Jr. was an American actor and dancer, both on stage and in film, though he had his greatest impact in film. 

Known for his consistently energetic performances, distinctive vocal style, and deadpan comic timing, he won acclaim and major awards for a wide variety of performances. He is best remembered for playing multifaceted tough guys in movies such as The Public Enemy, Angels with Dirty Faces, and White Heat and was even typecast or limited by this view earlier in his career. 

In 1999, the American Film Institute ranked him eighth among its list of greatest male stars of Classic Hollywood Cinema. Orson Welles said of Cagney, &quot;he was maybe the greatest actor who ever appeared in front of a camera&quot;  and Stanley Kubrick considered him to be one of the best actors of all time.',
				'created_at' => '2016-01-12 14:00:34',
				'updated_at' => '2016-01-12 14:00:34',
			),
		));
	}

}
