<?php

use Illuminate\Database\Seeder;

class ViewingsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('viewings')->delete();
        
		\DB::table('viewings')->insert(array (
			0 => 
			array (
				'viewing_id' => 1,
				'viewing_movie_id' => 1,
				'viewing_date' => '2015-12-01 19:30:00',
				'updated_at' => '0000-00-00 00:00:00',
				'created_at' => '0000-00-00 00:00:00',
			),
			1 => 
			array (
				'viewing_id' => 2,
				'viewing_movie_id' => 2,
				'viewing_date' => '2015-12-02 18:35:00',
				'updated_at' => '0000-00-00 00:00:00',
				'created_at' => '0000-00-00 00:00:00',
			),
			2 => 
			array (
				'viewing_id' => 3,
				'viewing_movie_id' => 3,
				'viewing_date' => '2015-12-04 18:00:00',
				'updated_at' => '0000-00-00 00:00:00',
				'created_at' => '0000-00-00 00:00:00',
			),
			3 => 
			array (
				'viewing_id' => 4,
				'viewing_movie_id' => 4,
				'viewing_date' => '2015-11-11 19:35:00',
				'updated_at' => '0000-00-00 00:00:00',
				'created_at' => '0000-00-00 00:00:00',
			),
			4 => 
			array (
				'viewing_id' => 5,
				'viewing_movie_id' => 4,
				'viewing_date' => '2014-03-11 20:30:00',
				'updated_at' => '0000-00-00 00:00:00',
				'created_at' => '0000-00-00 00:00:00',
			),
			5 => 
			array (
				'viewing_id' => 6,
				'viewing_movie_id' => 9,
				'viewing_date' => '2015-11-12 18:30:00',
				'updated_at' => '0000-00-00 00:00:00',
				'created_at' => '0000-00-00 00:00:00',
			),
			6 => 
			array (
				'viewing_id' => 7,
				'viewing_movie_id' => 9,
				'viewing_date' => '2015-12-05 20:00:00',
				'updated_at' => '0000-00-00 00:00:00',
				'created_at' => '0000-00-00 00:00:00',
			),
		));
	}

}
