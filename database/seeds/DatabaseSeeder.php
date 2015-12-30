<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// Required Setup Data
		$this->call('CertificatesTableSeeder');
		$this->call('FormatsTableSeeder');
		$this->call('GenresTableSeeder');
		$this->call('PositionsTableSeeder');
		$this->call('StudiosTableSeeder');
		$this->call('FormsTableSeeder');
		$this->call('UsersTableSeeder');

		// Back Up Data
		$this->call('MoviesTableSeeder');
		$this->call('PersonsTableSeeder');

		// Test Data
		$this->call('TestDataSeeder');

		Model::reguard();
	}

}
