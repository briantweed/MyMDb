<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('categories')->delete();
        
		\DB::table('categories')->insert(array (
			0 => 
			array (
				'category_id' => 1,
				'category_movie_id' => 1,
				'category_genre_id' => 13,
				'updated_at' => '0000-00-00 00:00:00',
				'created_at' => '0000-00-00 00:00:00',
			),
			1 => 
			array (
				'category_id' => 2,
				'category_movie_id' => 1,
				'category_genre_id' => 18,
				'updated_at' => '0000-00-00 00:00:00',
				'created_at' => '0000-00-00 00:00:00',
			),
			2 => 
			array (
				'category_id' => 3,
				'category_movie_id' => 2,
				'category_genre_id' => 12,
				'updated_at' => '0000-00-00 00:00:00',
				'created_at' => '0000-00-00 00:00:00',
			),
			3 => 
			array (
				'category_id' => 4,
				'category_movie_id' => 2,
				'category_genre_id' => 13,
				'updated_at' => '0000-00-00 00:00:00',
				'created_at' => '0000-00-00 00:00:00',
			),
			4 => 
			array (
				'category_id' => 5,
				'category_movie_id' => 3,
				'category_genre_id' => 16,
				'updated_at' => '0000-00-00 00:00:00',
				'created_at' => '0000-00-00 00:00:00',
			),
			5 => 
			array (
				'category_id' => 6,
				'category_movie_id' => 3,
				'category_genre_id' => 22,
				'updated_at' => '0000-00-00 00:00:00',
				'created_at' => '0000-00-00 00:00:00',
			),
			6 => 
			array (
				'category_id' => 7,
				'category_movie_id' => 4,
				'category_genre_id' => 16,
				'updated_at' => '0000-00-00 00:00:00',
				'created_at' => '0000-00-00 00:00:00',
			),
			7 => 
			array (
				'category_id' => 8,
				'category_movie_id' => 4,
				'category_genre_id' => 22,
				'updated_at' => '0000-00-00 00:00:00',
				'created_at' => '0000-00-00 00:00:00',
			),
			8 => 
			array (
				'category_id' => 9,
				'category_movie_id' => 5,
				'category_genre_id' => 16,
				'updated_at' => '0000-00-00 00:00:00',
				'created_at' => '0000-00-00 00:00:00',
			),
			9 => 
			array (
				'category_id' => 10,
				'category_movie_id' => 5,
				'category_genre_id' => 22,
				'updated_at' => '0000-00-00 00:00:00',
				'created_at' => '0000-00-00 00:00:00',
			),
			10 => 
			array (
				'category_id' => 11,
				'category_movie_id' => 6,
				'category_genre_id' => 16,
				'updated_at' => '0000-00-00 00:00:00',
				'created_at' => '0000-00-00 00:00:00',
			),
			11 => 
			array (
				'category_id' => 12,
				'category_movie_id' => 6,
				'category_genre_id' => 22,
				'updated_at' => '0000-00-00 00:00:00',
				'created_at' => '0000-00-00 00:00:00',
			),
			12 => 
			array (
				'category_id' => 13,
				'category_movie_id' => 7,
				'category_genre_id' => 1,
				'updated_at' => '0000-00-00 00:00:00',
				'created_at' => '0000-00-00 00:00:00',
			),
			13 => 
			array (
				'category_id' => 14,
				'category_movie_id' => 8,
				'category_genre_id' => 1,
				'updated_at' => '0000-00-00 00:00:00',
				'created_at' => '0000-00-00 00:00:00',
			),
			14 => 
			array (
				'category_id' => 15,
				'category_movie_id' => 9,
				'category_genre_id' => 1,
				'updated_at' => '0000-00-00 00:00:00',
				'created_at' => '0000-00-00 00:00:00',
			),
			15 => 
			array (
				'category_id' => 16,
				'category_movie_id' => 9,
				'category_genre_id' => 22,
				'updated_at' => '0000-00-00 00:00:00',
				'created_at' => '0000-00-00 00:00:00',
			),
			16 => 
			array (
				'category_id' => 17,
				'category_movie_id' => 10,
				'category_genre_id' => 22,
				'updated_at' => '0000-00-00 00:00:00',
				'created_at' => '0000-00-00 00:00:00',
			),
			17 => 
			array (
				'category_id' => 18,
				'category_movie_id' => 11,
				'category_genre_id' => 1,
				'updated_at' => '0000-00-00 00:00:00',
				'created_at' => '0000-00-00 00:00:00',
			),
			18 => 
			array (
				'category_id' => 19,
				'category_movie_id' => 11,
				'category_genre_id' => 24,
				'updated_at' => '0000-00-00 00:00:00',
				'created_at' => '0000-00-00 00:00:00',
			),
			19 => 
			array (
				'category_id' => 20,
				'category_movie_id' => 12,
				'category_genre_id' => 1,
				'updated_at' => '0000-00-00 00:00:00',
				'created_at' => '0000-00-00 00:00:00',
			),
			20 => 
			array (
				'category_id' => 21,
				'category_movie_id' => 12,
				'category_genre_id' => 24,
				'updated_at' => '0000-00-00 00:00:00',
				'created_at' => '0000-00-00 00:00:00',
			),
		));
	}

}
