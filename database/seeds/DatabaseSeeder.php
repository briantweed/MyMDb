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
		$this->call('CastTableSeeder');
		$this->call('CategoriesTableSeeder');
		$this->call('CertificatesTableSeeder');
		$this->call('CharactersTableSeeder');
		$this->call('CrewTableSeeder');
		$this->call('FormatsTableSeeder');
		$this->call('FormsTableSeeder');
		$this->call('GenresTableSeeder');
		$this->call('KeywordsTableSeeder');
		$this->call('MoviesTableSeeder');
		$this->call('PersonsTableSeeder');
		$this->call('PositionsTableSeeder');
		$this->call('QuotesTableSeeder');
		$this->call('StudiosTableSeeder');
		$this->call('TagsTableSeeder');
		$this->call('UsersTableSeeder');
		$this->call('ViewingsTableSeeder');
		Model::reguard();
	}

}
