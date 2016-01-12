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
				'birthday' => '1899-01-01',
				'image' => 'james_cagney_1452607234.jpg',
				'bio' => 'James Francis Cagney, Jr. was an American actor and dancer, both on stage and in film, though he had his greatest impact in film. 

Known for his consistently energetic performances, distinctive vocal style, and deadpan comic timing, he won acclaim and major awards for a wide variety of performances. He is best remembered for playing multifaceted tough guys in movies such as The Public Enemy, Angels with Dirty Faces, and White Heat and was even typecast or limited by this view earlier in his career. 

In 1999, the American Film Institute ranked him eighth among its list of greatest male stars of Classic Hollywood Cinema. Orson Welles said of Cagney, &quot;he was maybe the greatest actor who ever appeared in front of a camera&quot;  and Stanley Kubrick considered him to be one of the best actors of all time.',
				'created_at' => '2016-01-12 14:00:34',
				'updated_at' => '2016-01-12 14:00:34',
			),
			12 => 
			array (
				'person_id' => 13,
				'forename' => 'Sean',
				'surname' => 'Astin',
				'birthday' => NULL,
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 20:37:24',
				'updated_at' => '2016-01-12 20:37:24',
			),
			13 => 
			array (
				'person_id' => 14,
				'forename' => 'Dan',
				'surname' => 'Aykroyd',
				'birthday' => NULL,
				'image' => 'dan_aykroyd_1452631198.jpg',
				'bio' => '',
				'created_at' => '2016-01-12 20:37:46',
				'updated_at' => '2016-01-12 20:39:58',
			),
			14 => 
			array (
				'person_id' => 15,
				'forename' => 'Rob',
				'surname' => 'Schneider',
				'birthday' => NULL,
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 20:38:45',
				'updated_at' => '2016-01-12 20:39:36',
			),
			15 => 
			array (
				'person_id' => 16,
				'forename' => 'Mia',
				'surname' => 'Wasikowska',
				'birthday' => NULL,
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 20:42:28',
				'updated_at' => '2016-01-12 20:42:28',
			),
			16 => 
			array (
				'person_id' => 17,
				'forename' => 'Helena',
				'surname' => 'Bonham Carter',
				'birthday' => NULL,
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 20:42:50',
				'updated_at' => '2016-01-12 20:42:50',
			),
			17 => 
			array (
				'person_id' => 18,
				'forename' => 'Anne',
				'surname' => 'Hathaway',
				'birthday' => NULL,
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 20:43:06',
				'updated_at' => '2016-01-12 20:43:06',
			),
			18 => 
			array (
				'person_id' => 19,
				'forename' => 'Crispin',
				'surname' => 'Glover',
				'birthday' => NULL,
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 20:43:35',
				'updated_at' => '2016-01-12 20:44:22',
			),
			19 => 
			array (
				'person_id' => 20,
				'forename' => 'Matt',
				'surname' => 'Lucas',
				'birthday' => NULL,
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 20:45:13',
				'updated_at' => '2016-01-12 20:45:13',
			),
			20 => 
			array (
				'person_id' => 21,
				'forename' => 'Micahel',
				'surname' => 'Sheen',
				'birthday' => NULL,
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 20:45:37',
				'updated_at' => '2016-01-12 20:45:37',
			),
			21 => 
			array (
				'person_id' => 22,
				'forename' => 'Stephen',
				'surname' => 'Fry',
				'birthday' => NULL,
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 20:46:00',
				'updated_at' => '2016-01-12 20:46:00',
			),
			22 => 
			array (
				'person_id' => 23,
				'forename' => 'Alan',
				'surname' => 'Rickman',
				'birthday' => '1946-02-21',
				'image' => 'alan_rickman_1452636759.jpg',
			'bio' => 'Alan Rickman was born on a council estate in Acton, West London, to Margaret Doreen Rose (Bartlett) and Bernard Rickman, who worked at a factory. He has English, Irish, and Welsh ancestry. Alan has an older brother David, a younger brother Michael and a younger sister Sheila. 

Rickman made his first movie appearance opposite Bruce Willis in Die Hard as the villain Hans Gruber. Though often cited as being a master of playing villains, Rickman has actually played a wide variety of characters, such as the romantic cello-playing ghost Jamie in Anthony Minghella\'s Truly Madly Deeply and the noble Colonel Brandon of Sense and Sensibility. He\'s treated audiences to his comedic abilities with films like Dogma, Galaxy Quest and The Hitchhiker\'s Guide to the Galaxy.',
				'created_at' => '2016-01-12 20:46:27',
				'updated_at' => '2016-01-12 22:15:38',
			),
			23 => 
			array (
				'person_id' => 24,
				'forename' => 'Tom',
				'surname' => 'Skerritt',
				'birthday' => NULL,
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 20:48:35',
				'updated_at' => '2016-01-12 20:48:35',
			),
			24 => 
			array (
				'person_id' => 25,
				'forename' => 'Veronica',
				'surname' => 'Cartwright',
				'birthday' => NULL,
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 20:48:49',
				'updated_at' => '2016-01-12 20:48:49',
			),
			25 => 
			array (
				'person_id' => 26,
				'forename' => 'Harry',
				'surname' => 'Dean Stanton',
				'birthday' => NULL,
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 20:49:02',
				'updated_at' => '2016-01-12 20:49:02',
			),
			26 => 
			array (
				'person_id' => 27,
				'forename' => 'John',
				'surname' => 'Hurt',
				'birthday' => NULL,
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 20:49:15',
				'updated_at' => '2016-01-12 20:49:15',
			),
			27 => 
			array (
				'person_id' => 28,
				'forename' => 'Ian',
				'surname' => 'Holm',
				'birthday' => NULL,
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 20:49:28',
				'updated_at' => '2016-01-12 20:49:28',
			),
			28 => 
			array (
				'person_id' => 29,
				'forename' => 'Yaphet',
				'surname' => 'Kotto',
				'birthday' => NULL,
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 20:49:47',
				'updated_at' => '2016-01-12 20:49:47',
			),
			29 => 
			array (
				'person_id' => 30,
				'forename' => 'Ridley',
				'surname' => 'Scott',
				'birthday' => NULL,
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 20:49:59',
				'updated_at' => '2016-01-12 20:49:59',
			),
			30 => 
			array (
				'person_id' => 31,
				'forename' => 'Carrie',
				'surname' => 'Henn',
				'birthday' => NULL,
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 20:52:14',
				'updated_at' => '2016-01-12 20:52:14',
			),
			31 => 
			array (
				'person_id' => 32,
				'forename' => 'Michael',
				'surname' => 'Biehn',
				'birthday' => NULL,
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 20:52:27',
				'updated_at' => '2016-01-12 20:52:27',
			),
			32 => 
			array (
				'person_id' => 33,
				'forename' => 'Paul',
				'surname' => 'Reiser',
				'birthday' => NULL,
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 20:52:41',
				'updated_at' => '2016-01-12 20:52:41',
			),
			33 => 
			array (
				'person_id' => 34,
				'forename' => 'Lance',
				'surname' => 'Henriksen',
				'birthday' => NULL,
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 20:52:56',
				'updated_at' => '2016-01-12 20:52:56',
			),
			34 => 
			array (
				'person_id' => 35,
				'forename' => 'Bill',
				'surname' => 'Paxton',
				'birthday' => NULL,
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 20:53:14',
				'updated_at' => '2016-01-12 20:53:14',
			),
			35 => 
			array (
				'person_id' => 36,
				'forename' => 'William',
				'surname' => 'Hope',
				'birthday' => NULL,
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 20:53:31',
				'updated_at' => '2016-01-12 20:53:31',
			),
			36 => 
			array (
				'person_id' => 37,
				'forename' => 'Jenette',
				'surname' => 'Goldstein',
				'birthday' => NULL,
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 20:53:44',
				'updated_at' => '2016-01-12 20:53:44',
			),
			37 => 
			array (
				'person_id' => 38,
				'forename' => 'Mark',
				'surname' => 'Rolston',
				'birthday' => NULL,
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 20:54:08',
				'updated_at' => '2016-01-12 20:54:08',
			),
			38 => 
			array (
				'person_id' => 39,
				'forename' => 'James',
				'surname' => 'Cameron',
				'birthday' => NULL,
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 20:54:22',
				'updated_at' => '2016-01-12 20:54:22',
			),
			39 => 
			array (
				'person_id' => 40,
				'forename' => 'James',
				'surname' => 'Horner',
				'birthday' => NULL,
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 20:55:48',
				'updated_at' => '2016-01-12 20:55:48',
			),
			40 => 
			array (
				'person_id' => 41,
				'forename' => 'Charles S.',
				'surname' => 'Dutton',
				'birthday' => NULL,
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 21:02:41',
				'updated_at' => '2016-01-12 21:02:41',
			),
			41 => 
			array (
				'person_id' => 42,
				'forename' => 'Charles',
				'surname' => 'Dance',
				'birthday' => NULL,
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 21:03:03',
				'updated_at' => '2016-01-12 21:03:03',
			),
			42 => 
			array (
				'person_id' => 43,
				'forename' => 'Pete',
				'surname' => 'Postlethwaite',
				'birthday' => NULL,
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 21:03:27',
				'updated_at' => '2016-01-12 21:03:27',
			),
			43 => 
			array (
				'person_id' => 44,
				'forename' => 'David',
				'surname' => 'Fincher',
				'birthday' => NULL,
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 21:04:31',
				'updated_at' => '2016-01-12 21:04:31',
			),
			44 => 
			array (
				'person_id' => 45,
				'forename' => 'Winona',
				'surname' => 'Ryder',
				'birthday' => NULL,
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 21:05:49',
				'updated_at' => '2016-01-12 21:05:49',
			),
			45 => 
			array (
				'person_id' => 46,
				'forename' => 'Ron',
				'surname' => 'Perlman',
				'birthday' => NULL,
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 21:06:06',
				'updated_at' => '2016-01-12 21:06:06',
			),
			46 => 
			array (
				'person_id' => 47,
				'forename' => 'Gary',
				'surname' => 'Dourdan',
				'birthday' => NULL,
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 21:06:26',
				'updated_at' => '2016-01-12 21:06:26',
			),
			47 => 
			array (
				'person_id' => 48,
				'forename' => 'Michael',
				'surname' => 'Wincott',
				'birthday' => NULL,
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 21:06:49',
				'updated_at' => '2016-01-12 21:06:49',
			),
			48 => 
			array (
				'person_id' => 49,
				'forename' => 'Dan',
				'surname' => 'Hedaya',
				'birthday' => NULL,
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 21:07:14',
				'updated_at' => '2016-01-12 21:07:14',
			),
			49 => 
			array (
				'person_id' => 50,
				'forename' => 'Brad',
				'surname' => 'Dourif',
				'birthday' => NULL,
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 21:07:33',
				'updated_at' => '2016-01-12 21:07:33',
			),
			50 => 
			array (
				'person_id' => 51,
				'forename' => 'Dominique',
				'surname' => 'Pinon',
				'birthday' => NULL,
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 21:08:38',
				'updated_at' => '2016-01-12 21:08:38',
			),
			51 => 
			array (
				'person_id' => 52,
				'forename' => 'Jean-Pierre',
				'surname' => 'Jeunet',
				'birthday' => NULL,
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 21:09:09',
				'updated_at' => '2016-01-12 21:10:19',
			),
			52 => 
			array (
				'person_id' => 53,
				'forename' => 'Joss',
				'surname' => 'Whedon',
				'birthday' => NULL,
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 21:09:43',
				'updated_at' => '2016-01-12 21:09:43',
			),
			53 => 
			array (
				'person_id' => 54,
				'forename' => 'Andrew',
				'surname' => 'Garfield',
				'birthday' => '1970-01-01',
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 21:20:34',
				'updated_at' => '2016-01-12 21:20:34',
			),
			54 => 
			array (
				'person_id' => 55,
				'forename' => 'Emma',
				'surname' => 'Stone',
				'birthday' => '1970-01-01',
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 21:21:04',
				'updated_at' => '2016-01-12 21:21:04',
			),
			55 => 
			array (
				'person_id' => 56,
				'forename' => 'Rhys',
				'surname' => 'Ifans',
				'birthday' => '1970-01-01',
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 21:21:22',
				'updated_at' => '2016-01-12 21:21:22',
			),
			56 => 
			array (
				'person_id' => 57,
				'forename' => 'Denis',
				'surname' => 'Leary',
				'birthday' => '1970-01-01',
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 21:21:53',
				'updated_at' => '2016-01-12 21:21:53',
			),
			57 => 
			array (
				'person_id' => 58,
				'forename' => 'Martin',
				'surname' => 'Sheen',
				'birthday' => '1970-01-01',
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 21:22:16',
				'updated_at' => '2016-01-12 21:22:16',
			),
			58 => 
			array (
				'person_id' => 59,
				'forename' => 'Sally',
				'surname' => 'Fields',
				'birthday' => '1970-01-01',
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 21:22:31',
				'updated_at' => '2016-01-12 21:22:31',
			),
			59 => 
			array (
				'person_id' => 60,
				'forename' => 'Marc',
				'surname' => 'Webb',
				'birthday' => '1970-01-01',
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 21:23:36',
				'updated_at' => '2016-01-12 21:23:36',
			),
			60 => 
			array (
				'person_id' => 61,
				'forename' => 'Pat',
				'surname' => 'O&#039;Brien',
				'birthday' => '1970-01-01',
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 21:24:49',
				'updated_at' => '2016-01-12 21:24:49',
			),
			61 => 
			array (
				'person_id' => 62,
				'forename' => 'Humphrey',
				'surname' => 'Bogart',
				'birthday' => '1970-01-01',
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 21:25:40',
				'updated_at' => '2016-01-12 21:25:40',
			),
			62 => 
			array (
				'person_id' => 63,
				'forename' => 'Ann',
				'surname' => 'Sheridan',
				'birthday' => '1970-01-01',
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 21:25:53',
				'updated_at' => '2016-01-12 21:25:53',
			),
			63 => 
			array (
				'person_id' => 64,
				'forename' => 'George',
				'surname' => 'Bancroft',
				'birthday' => '1970-01-01',
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 21:26:10',
				'updated_at' => '2016-01-12 21:26:10',
			),
			64 => 
			array (
				'person_id' => 65,
				'forename' => 'Tim',
				'surname' => 'Burton',
				'birthday' => '1958-08-25',
				'image' => NULL,
			'bio' => 'Timothy Walter Burton was born in Burbank, California, to Jean Rae (Erickson), cat-themed gift shop owner, and William Reed Burton, who worked for the Burbank Park and Recreation Department. 

After graduating from high school, he attended California Institute of the Arts. Like so many others who graduated from that school, Burton&#039;s first job was as an animator for Disney.



',
				'created_at' => '2016-01-12 21:37:07',
				'updated_at' => '2016-01-12 21:37:07',
			),
			65 => 
			array (
				'person_id' => 66,
				'forename' => 'Danny',
				'surname' => 'Elfman',
				'birthday' => '1970-01-01',
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 21:38:02',
				'updated_at' => '2016-01-12 21:38:02',
			),
			66 => 
			array (
				'person_id' => 67,
				'forename' => 'Bruce',
				'surname' => 'Willis',
				'birthday' => '1970-01-01',
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 21:39:22',
				'updated_at' => '2016-01-12 21:39:22',
			),
			67 => 
			array (
				'person_id' => 68,
				'forename' => 'William',
				'surname' => 'Atherton',
				'birthday' => '1970-01-01',
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 21:40:34',
				'updated_at' => '2016-01-12 21:40:34',
			),
			68 => 
			array (
				'person_id' => 69,
				'forename' => 'Robert',
				'surname' => 'Davi',
				'birthday' => '1970-01-01',
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 21:41:50',
				'updated_at' => '2016-01-12 21:41:50',
			),
			69 => 
			array (
				'person_id' => 70,
				'forename' => 'John',
				'surname' => 'McTiernan',
				'birthday' => '1970-01-01',
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 21:42:42',
				'updated_at' => '2016-01-12 21:43:05',
			),
			70 => 
			array (
				'person_id' => 71,
				'forename' => 'Laurence',
				'surname' => 'Fishburne',
				'birthday' => '1970-01-01',
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 21:44:28',
				'updated_at' => '2016-01-12 21:44:28',
			),
			71 => 
			array (
				'person_id' => 72,
				'forename' => 'Carrie-Anne',
				'surname' => 'Moss',
				'birthday' => '1970-01-01',
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 21:44:48',
				'updated_at' => '2016-01-12 21:44:48',
			),
			72 => 
			array (
				'person_id' => 73,
				'forename' => 'Joe',
				'surname' => 'Pantoliano',
				'birthday' => '1970-01-01',
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 21:45:23',
				'updated_at' => '2016-01-12 21:45:23',
			),
			73 => 
			array (
				'person_id' => 74,
				'forename' => 'Hugo',
				'surname' => 'Weaving',
				'birthday' => '1970-01-01',
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 21:45:37',
				'updated_at' => '2016-01-12 21:45:37',
			),
			74 => 
			array (
				'person_id' => 75,
				'forename' => 'Lana',
				'surname' => 'Wachowski',
				'birthday' => '1970-01-01',
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 21:46:11',
				'updated_at' => '2016-01-12 21:46:11',
			),
			75 => 
			array (
				'person_id' => 76,
				'forename' => 'Andy',
				'surname' => 'Wachowski',
				'birthday' => '1970-01-01',
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 21:46:21',
				'updated_at' => '2016-01-12 21:46:21',
			),
			76 => 
			array (
				'person_id' => 77,
				'forename' => 'Joel',
				'surname' => 'Silver',
				'birthday' => '1970-01-01',
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 21:49:03',
				'updated_at' => '2016-01-12 21:49:03',
			),
			77 => 
			array (
				'person_id' => 78,
				'forename' => 'Mark',
				'surname' => 'Hamill',
				'birthday' => '1970-01-01',
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 22:02:22',
				'updated_at' => '2016-01-12 22:02:22',
			),
			78 => 
			array (
				'person_id' => 79,
				'forename' => 'Harrison',
				'surname' => 'Ford',
				'birthday' => '1970-01-01',
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 22:02:38',
				'updated_at' => '2016-01-12 22:02:38',
			),
			79 => 
			array (
				'person_id' => 80,
				'forename' => 'Alec',
				'surname' => 'Guinness',
				'birthday' => '1970-01-01',
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 22:03:08',
				'updated_at' => '2016-01-12 22:03:08',
			),
			80 => 
			array (
				'person_id' => 81,
				'forename' => 'Carrie',
				'surname' => 'Fisher',
				'birthday' => '1970-01-01',
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 22:03:29',
				'updated_at' => '2016-01-12 22:03:29',
			),
			81 => 
			array (
				'person_id' => 82,
				'forename' => 'Peter',
				'surname' => 'Cushing',
				'birthday' => '1970-01-01',
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 22:03:45',
				'updated_at' => '2016-01-12 22:03:45',
			),
			82 => 
			array (
				'person_id' => 83,
				'forename' => 'Anthony',
				'surname' => 'Daniels',
				'birthday' => '1970-01-01',
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 22:04:17',
				'updated_at' => '2016-01-12 22:04:17',
			),
			83 => 
			array (
				'person_id' => 84,
				'forename' => 'Kenny',
				'surname' => 'Baker',
				'birthday' => '1970-01-01',
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 22:04:39',
				'updated_at' => '2016-01-12 22:04:39',
			),
			84 => 
			array (
				'person_id' => 85,
				'forename' => 'David',
				'surname' => 'Prowse',
				'birthday' => '1970-01-01',
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 22:04:56',
				'updated_at' => '2016-01-12 22:04:56',
			),
			85 => 
			array (
				'person_id' => 86,
				'forename' => 'James Earl',
				'surname' => 'Jones',
				'birthday' => '1970-01-01',
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 22:05:18',
				'updated_at' => '2016-01-12 22:05:18',
			),
			86 => 
			array (
				'person_id' => 87,
				'forename' => 'Peter',
				'surname' => 'Mayhew',
				'birthday' => '1970-01-01',
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 22:05:37',
				'updated_at' => '2016-01-12 22:05:37',
			),
			87 => 
			array (
				'person_id' => 88,
				'forename' => 'George',
				'surname' => 'Lucas',
				'birthday' => '1970-01-01',
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 22:06:03',
				'updated_at' => '2016-01-12 22:06:03',
			),
			88 => 
			array (
				'person_id' => 89,
				'forename' => 'John',
				'surname' => 'Williams',
				'birthday' => '1970-01-01',
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 22:06:21',
				'updated_at' => '2016-01-12 22:06:21',
			),
			89 => 
			array (
				'person_id' => 90,
				'forename' => 'Mitsuo',
				'surname' => 'Iwata',
				'birthday' => '1970-01-01',
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 22:07:30',
				'updated_at' => '2016-01-12 22:07:30',
			),
			90 => 
			array (
				'person_id' => 91,
				'forename' => 'Nozomu',
				'surname' => 'Sasaki',
				'birthday' => '1970-01-01',
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 22:07:46',
				'updated_at' => '2016-01-12 22:07:46',
			),
			91 => 
			array (
				'person_id' => 92,
				'forename' => 'Katsuhiro',
				'surname' => 'Otomo',
				'birthday' => '1970-01-01',
				'image' => NULL,
				'bio' => '',
				'created_at' => '2016-01-12 22:08:13',
				'updated_at' => '2016-01-12 22:08:13',
			),
		));
	}

}
