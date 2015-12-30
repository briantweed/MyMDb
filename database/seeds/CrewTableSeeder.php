<?php

use Illuminate\Database\Seeder;

class CrewTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('crew')->delete();
        
		\DB::table('crew')->insert(array (
			0 => 
			array (
				'crew_id' => 1,
				'crew_movie_id' => 1,
				'crew_person_id' => 2,
				'crew_position_id' => 1,
				'updated_at' => '0000-00-00 00:00:00',
				'created_at' => '0000-00-00 00:00:00',
			),
			1 => 
			array (
				'crew_id' => 2,
				'crew_movie_id' => 1,
				'crew_person_id' => 3,
				'crew_position_id' => 3,
				'updated_at' => '0000-00-00 00:00:00',
				'created_at' => '0000-00-00 00:00:00',
			),
			2 => 
			array (
				'crew_id' => 3,
				'crew_movie_id' => 1,
				'crew_person_id' => 4,
				'crew_position_id' => 3,
				'updated_at' => '0000-00-00 00:00:00',
				'created_at' => '0000-00-00 00:00:00',
			),
		));
	}

}
