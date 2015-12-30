<?php

use Illuminate\Database\Seeder;

class KeywordsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('keywords')->delete();
        
		\DB::table('keywords')->insert(array (
			0 => 
			array (
				'keyword_id' => 1,
				'keyword_word' => 'Aliens',
				'updated_at' => '0000-00-00 00:00:00',
				'created_at' => '0000-00-00 00:00:00',
			),
			1 => 
			array (
				'keyword_id' => 2,
				'keyword_word' => 'Dragon',
				'updated_at' => '0000-00-00 00:00:00',
				'created_at' => '0000-00-00 00:00:00',
			),
			2 => 
			array (
				'keyword_id' => 3,
				'keyword_word' => 'Magic',
				'updated_at' => '0000-00-00 00:00:00',
				'created_at' => '0000-00-00 00:00:00',
			),
			3 => 
			array (
				'keyword_id' => 4,
				'keyword_word' => 'MCU',
				'updated_at' => '0000-00-00 00:00:00',
				'created_at' => '0000-00-00 00:00:00',
			),
		));
	}

}
