<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('tags')->delete();
        
		\DB::table('tags')->insert(array (
			0 => 
			array (
				'tag_id' => 1,
				'tag_movie_id' => 3,
				'tag_keyword_id' => 1,
				'updated_at' => '0000-00-00 00:00:00',
				'created_at' => '0000-00-00 00:00:00',
			),
			1 => 
			array (
				'tag_id' => 2,
				'tag_movie_id' => 4,
				'tag_keyword_id' => 1,
				'updated_at' => '0000-00-00 00:00:00',
				'created_at' => '0000-00-00 00:00:00',
			),
			2 => 
			array (
				'tag_id' => 3,
				'tag_movie_id' => 5,
				'tag_keyword_id' => 1,
				'updated_at' => '0000-00-00 00:00:00',
				'created_at' => '0000-00-00 00:00:00',
			),
			3 => 
			array (
				'tag_id' => 4,
				'tag_movie_id' => 6,
				'tag_keyword_id' => 1,
				'updated_at' => '0000-00-00 00:00:00',
				'created_at' => '0000-00-00 00:00:00',
			),
			4 => 
			array (
				'tag_id' => 5,
				'tag_movie_id' => 1,
				'tag_keyword_id' => 2,
				'updated_at' => '0000-00-00 00:00:00',
				'created_at' => '0000-00-00 00:00:00',
			),
			5 => 
			array (
				'tag_id' => 6,
				'tag_movie_id' => 1,
				'tag_keyword_id' => 3,
				'updated_at' => '0000-00-00 00:00:00',
				'created_at' => '0000-00-00 00:00:00',
			),
			6 => 
			array (
				'tag_id' => 7,
				'tag_movie_id' => 11,
				'tag_keyword_id' => 4,
				'updated_at' => '0000-00-00 00:00:00',
				'created_at' => '0000-00-00 00:00:00',
			),
		));
	}

}
