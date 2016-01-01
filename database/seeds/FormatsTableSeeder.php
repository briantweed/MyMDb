<?php

use Illuminate\Database\Seeder;

class FormatsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('formats')->delete();
        
		\DB::table('formats')->insert(array (
			0 => 
			array (
				'format_id' => 1,
				'type' => 'DVD',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			1 => 
			array (
				'format_id' => 2,
				'type' => 'Blu-Ray',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			2 => 
			array (
				'format_id' => 3,
				'type' => 'Digital',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
		));
	}

}
