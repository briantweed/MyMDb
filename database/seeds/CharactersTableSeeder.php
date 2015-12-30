<?php

use Illuminate\Database\Seeder;

class CharactersTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('characters')->delete();
        
		\DB::table('characters')->insert(array (
			0 => 
			array (
				'character_id' => 1,
				'character_name' => 'Kai',
				'updated_at' => '0000-00-00 00:00:00',
				'created_at' => '0000-00-00 00:00:00',
			),
			1 => 
			array (
				'character_id' => 2,
				'character_name' => 'Oishi',
				'updated_at' => '0000-00-00 00:00:00',
				'created_at' => '0000-00-00 00:00:00',
			),
			2 => 
			array (
				'character_id' => 3,
				'character_name' => 'Tyler Durden',
				'updated_at' => '0000-00-00 00:00:00',
				'created_at' => '0000-00-00 00:00:00',
			),
			3 => 
			array (
				'character_id' => 4,
				'character_name' => 'Lt. Aldo Raine',
				'updated_at' => '0000-00-00 00:00:00',
				'created_at' => '0000-00-00 00:00:00',
			),
			4 => 
			array (
				'character_id' => 5,
				'character_name' => 'Gerry Lane',
				'updated_at' => '0000-00-00 00:00:00',
				'created_at' => '0000-00-00 00:00:00',
			),
		));
	}

}
