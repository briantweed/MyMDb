<?php

use Illuminate\Database\Seeder;

class QuotesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('quotes')->delete();
        
		\DB::table('quotes')->insert(array (
			0 => 
			array (
				'quote_id' => 1,
				'quote_movie_id' => 8,
				'quote_text' => 'Tell these guys where the pages are so no one else gets hurt',
			),
			1 => 
			array (
				'quote_id' => 2,
				'quote_movie_id' => 9,
				'quote_text' => 'Sooner or later you&#039;re going to realize that there&#039;s a difference between knowing the page and finding the page.',
			),
			2 => 
			array (
				'quote_id' => 3,
				'quote_movie_id' => 10,
				'quote_text' => 'This is not the page you&#039;re looking for',
			),
			3 => 
			array (
				'quote_id' => 4,
				'quote_movie_id' => 22,
				'quote_text' => 'What&#039;s wrong? Have some trouble?',
			),
			4 => 
			array (
				'quote_id' => 5,
				'quote_movie_id' => 25,
				'quote_text' => 'Damn! Where is that page?',
			),
			5 => 
			array (
				'quote_id' => 6,
				'quote_movie_id' => 33,
				'quote_text' => 'We are tonight&#039;s entertainment! I only have one question. Where is the page?',
			),
			6 => 
			array (
				'quote_id' => 7,
				'quote_movie_id' => 37,
				'quote_text' => 'Empty. The opposite of full. This page is supposed to be full! Anyone care to explain?',
			),
			7 => 
			array (
				'quote_id' => 8,
				'quote_movie_id' => 55,
				'quote_text' => 'You don&#039;t think people are going to drive down and not see the page?',
			),
			8 => 
			array (
				'quote_id' => 9,
				'quote_movie_id' => 96,
				'quote_text' => 'Boy, it sure would be nice if we had some results, don&#039;t you think?',
			),
			9 => 
			array (
				'quote_id' => 10,
				'quote_movie_id' => 170,
				'quote_text' => 'What we got here is ... failure to communicate.',
			),
		));
	}

}
