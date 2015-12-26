<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatabaseTables extends Migration {

	public function up()
	{

		Schema::create('cast', function(Blueprint $table)
		{
			$table->increments('cast_id');
			$table->integer('cast_movie_id');
			$table->integer('cast_person_id');
			$table->integer('cast_character_id');
			$table->integer('cast_order');
			$table->timestamp('updated_at');
			$table->timestamp('created_at');
		});

		Schema::create('categories', function(Blueprint $table)
		{
			$table->increments('category_id');
			$table->integer('category_movie_id');
			$table->integer('category_genre_id');
			$table->timestamp('updated_at');
			$table->timestamp('created_at');
		});

		Schema::create('certificates', function(Blueprint $table)
		{
			$table->increments('certificate_id');
			$table->string('certificate_title');
			$table->string('certificate_image');
			$table->timestamp('updated_at');
			$table->timestamp('created_at');
		});

		Schema::create('characters', function(Blueprint $table)
		{
			$table->increments('character_id');
			$table->string('character_name');
			$table->timestamp('updated_at');
			$table->timestamp('created_at');
		});

		Schema::create('crew', function(Blueprint $table)
		{
			$table->increments('crew_id');
			$table->integer('crew_movie_id');
			$table->integer('crew_person_id');
			$table->integer('crew_position_id');
			$table->timestamp('updated_at');
			$table->timestamp('created_at');
		});

		Schema::create('formats', function(Blueprint $table)
		{
			$table->increments('format_id');
			$table->string('format_type');
			$table->timestamp('updated_at');
			$table->timestamp('created_at');
		});

		Schema::create('genres', function(Blueprint $table)
		{
			$table->increments('genre_id');
			$table->string('genre_type');
			$table->timestamp('updated_at');
			$table->timestamp('created_at');
		});

		Schema::create('keywords', function(Blueprint $table)
		{
			$table->increments('keyword_id');
			$table->string('keyword_word');
			$table->timestamp('updated_at');
			$table->timestamp('created_at');
		});

		Schema::create('movies', function(Blueprint $table)
		{
			$table->increments('movie_id');
			$table->string('movie_name');
			$table->string('movie_sort_name');
			$table->integer('movie_release_date');
			$table->integer('movie_my_rating');
			$table->integer('movie_running_time');
			$table->string('movie_image_path');
			$table->integer('movie_certificate_id');
			$table->integer('movie_format_id');
			$table->integer('movie_studio_id');
			$table->boolean('movie_duplicate');
			$table->text('movie_bio');
			$table->timestamp('movie_purchased');
			$table->timestamp('updated_at');
			$table->timestamp('created_at');
		});

		Schema::create('persons', function(Blueprint $table)
		{
			$table->increments('person_id');
			$table->string('person_forename');
			$table->string('person_surname');
			$table->date('person_birthday')->nullable();
			$table->string('person_image_path')->nullable();
			$table->text('person_bio')->nullable();
			$table->timestamp('updated_at');
			$table->timestamp('created_at');
		});

		Schema::create('positions', function(Blueprint $table)
		{
			$table->increments('position_id');
			$table->string('position_title');
			$table->integer('position_order');
			$table->timestamp('updated_at');
			$table->timestamp('created_at');
		});

		Schema::create('studios', function(Blueprint $table)
		{
			$table->increments('studio_id');
			$table->string('studio_name');
			$table->timestamp('updated_at');
			$table->timestamp('created_at');
		});

		Schema::create('tags', function(Blueprint $table)
		{
			$table->increments('tag_id');
			$table->integer('tag_movie_id');
			$table->integer('tag_keyword_id');
			$table->timestamp('updated_at');
			$table->timestamp('created_at');
		});

		Schema::create('viewings', function(Blueprint $table)
		{
			$table->increments('viewing_id');
			$table->integer('viewing_movie_id');
			$table->datetime('viewing_date');
			$table->timestamp('updated_at');
			$table->timestamp('created_at');
		});

	} //end of up

	public function down()
	{
		Schema::drop('cast');
		Schema::drop('categories');
		Schema::drop('certificates');
		Schema::drop('characters');
		Schema::drop('crew');
		Schema::drop('formats');
		Schema::drop('genres');
		Schema::drop('keywords');
		Schema::drop('movies');
		Schema::drop('persons');
		Schema::drop('positions');
		Schema::drop('studios');
		Schema::drop('tags');
		Schema::drop('viewings');
	} //end of down

} //end of class
