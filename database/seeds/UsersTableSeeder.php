<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('users')->delete();
        
		\DB::table('users')->insert(array (
			0 => 
			array (
				'id' => 1,
				'name' => 'Brian Tweed',
				'email' => 'brtweed@outlook.com',
				'password' => '$2y$10$9AKzOHxWzlL3qWWVGibbG.OKeM3oLajo3RLMiFBys2THABAxJfQQK',
				'level' => 1,
				'remember_token' => 'hBO7AxJ7piblnhZebdh30HfdCGjCcnw9Ac0EILuG03jGgJcTRaEzOnWk0sDG',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '2016-01-01 18:00:09',
			),
		));
	}

}
