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

		// support tables
		$this->call('CertificatesTableSeeder');
		$this->call('FormatsTableSeeder');
		$this->call('FormsTableSeeder');
		$this->call('GenresTableSeeder');
		$this->call('KeywordsTableSeeder');
		$this->call('PersonsTableSeeder');
		$this->call('StudiosTableSeeder');
		$this->call('UsersTableSeeder');

		// main table
		$this->call('MoviesTableSeeder');
		// child table
		$this->call('QuotesTableSeeder');

		//pivot tables
		$this->call('CastTableSeeder');
		$this->call('CategoriesTableSeeder');
		$this->call('CrewTableSeeder');
		$this->call('TagsTableSeeder');
		$this->call('ViewingsTableSeeder');

		Model::reguard();
	}

}
