<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatabaseTables extends Migration {

	public function up()
	{

		Schema::create('cast', function(Blueprint $table)
		{
			$table->increments('cast_id');
			$table->integer('movie_id');
			$table->integer('person_id');
			$table->string('character');
			$table->timestamp('updated_at');
			$table->timestamp('created_at');
		});

		Schema::create('categories', function(Blueprint $table)
		{
			$table->increments('category_id');
			$table->integer('movie_id');
			$table->integer('genre_id');
			$table->timestamp('updated_at');
			$table->timestamp('created_at');
		});

		Schema::create('certificates', function(Blueprint $table)
		{
			$table->increments('certificate_id');
			$table->string('title');
			$table->timestamp('updated_at');
			$table->timestamp('created_at');
		});

		Schema::create('crew', function(Blueprint $table)
		{
			$table->increments('crew_id');
			$table->integer('movie_id');
			$table->integer('person_id');
			$table->string('position');
			$table->timestamp('updated_at');
			$table->timestamp('created_at');
		});

		Schema::create('formats', function(Blueprint $table)
		{
			$table->increments('format_id');
			$table->string('type');
			$table->timestamp('updated_at');
			$table->timestamp('created_at');
		});

		Schema::create('genres', function(Blueprint $table)
		{
			$table->increments('genre_id');
			$table->string('type');
			$table->timestamp('updated_at');
			$table->timestamp('created_at');
		});

		Schema::create('keywords', function(Blueprint $table)
		{
			$table->increments('keyword_id');
			$table->string('word');
			$table->timestamp('updated_at');
			$table->timestamp('created_at');
		});

		Schema::create('movies', function(Blueprint $table)
		{
			$table->increments('movie_id');
			$table->string('name');
			$table->string('sort_name');
			$table->integer('released');
			$table->integer('rating');
			$table->integer('running_time');
			$table->string('image');
			$table->integer('certificate_id');
			$table->integer('format_id');
			$table->integer('studio_id');
			$table->boolean('duplicate');
			$table->text('bio');
			$table->timestamp('purchased');
			$table->timestamp('updated_at');
			$table->timestamp('created_at');
		});

		Schema::create('persons', function(Blueprint $table)
		{
			$table->increments('person_id');
			$table->string('forename');
			$table->string('surname');
			$table->date('birthday')->nullable();
			$table->string('image')->nullable();
			$table->text('bio')->nullable();
			$table->timestamp('updated_at');
			$table->timestamp('created_at');
		});

		Schema::create('studios', function(Blueprint $table)
		{
			$table->increments('studio_id');
			$table->string('name');
			$table->timestamp('updated_at');
			$table->timestamp('created_at');
		});

		Schema::create('tags', function(Blueprint $table)
		{
			$table->increments('tag_id');
			$table->integer('movie_id');
			$table->integer('keyword_id');
			$table->timestamp('updated_at');
			$table->timestamp('created_at');
		});

		Schema::create('viewings', function(Blueprint $table)
		{
			$table->increments('viewing_id');
			$table->integer('movie_id');
			$table->datetime('date');
			$table->timestamp('updated_at');
			$table->timestamp('created_at');
		});

		Schema::create('quotes', function(Blueprint $table)
      {
         $table->increments('quote_id');
         $table->integer('movie_id');
         $table->string('text');
      });

		Schema::create('forms', function(Blueprint $table)
      {
         $table->increments('id');
         $table->string('name');
         $table->string('field');
         $table->string('label');
         $table->boolean('required');
         $table->string('type');
         $table->integer('order');
         $table->integer('range_from');
         $table->integer('range_to');
         $table->string('options');
         $table->string('default');
         $table->string('class');
      });

	} //end of up

	public function down()
	{
		Schema::drop('cast');
		Schema::drop('categories');
		Schema::drop('certificates');
		Schema::drop('crew');
		Schema::drop('formats');
		Schema::drop('genres');
		Schema::drop('keywords');
		Schema::drop('movies');
		Schema::drop('persons');
		Schema::drop('studios');
		Schema::drop('tags');
		Schema::drop('viewings');
		Schema::drop('quotes');
		Schema::drop('forms');
	} //end of down

} //end of class
