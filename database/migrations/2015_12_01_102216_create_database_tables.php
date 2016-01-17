<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatabaseTables extends Migration {

	public function up()
	{

		// if(Schema::hasTable('certificates')) Schema::drop('certificates');
		Schema::create('certificates', function(Blueprint $table)
		{
			$table->increments('certificate_id');
			$table->string('title');
			$table->timestamps();
		});

		// if(Schema::hasTable('forms')) Schema::drop('forms');
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

		// if(Schema::hasTable('formats')) Schema::drop('formats');
		Schema::create('formats', function(Blueprint $table)
		{
			$table->increments('format_id');
			$table->string('type')->unique();
			$table->timestamps();
		});

		// if(Schema::hasTable('genres')) Schema::drop('genres');
		Schema::create('genres', function(Blueprint $table)
		{
			$table->increments('genre_id');
			$table->string('type')->unique();
			$table->timestamps();
		});

		// if(Schema::hasTable('keywords')) Schema::drop('keywords');
		Schema::create('keywords', function(Blueprint $table)
		{
			$table->increments('keyword_id');
			$table->string('word')->unique();
			$table->timestamps();
		});

		// if(Schema::hasTable('persons')) Schema::drop('persons');
		Schema::create('persons', function(Blueprint $table)
		{
			$table->increments('person_id');
			$table->string('forename');
			$table->string('surname');
			$table->date('birthday')->nullable()->default(NULL);
			$table->date('deceased')->nullable()->default(NULL);
			$table->string('image')->nullable();
			$table->text('bio')->nullable();
			$table->timestamps();
		});

		// if(Schema::hasTable('studios')) Schema::drop('studios');
		Schema::create('studios', function(Blueprint $table)
		{
			$table->increments('studio_id');
			$table->string('name')->unique();
			$table->timestamps();
		});

		// if(Schema::hasTable('movies')) Schema::drop('movies');
		Schema::create('movies', function(Blueprint $table)
		{
			$table->increments('movie_id');
			$table->string('name');
			$table->string('sort_name')->nullable();
			$table->integer('released');
			$table->integer('rating');
			$table->integer('running_time');
			$table->string('image');
			$table->integer('certificate_id')->unsigned();
			$table->foreign('certificate_id')->references('certificate_id')->on('certificates');
			$table->integer('format_id')->unsigned();
			$table->foreign('format_id')->references('format_id')->on('formats');
			$table->integer('studio_id')->unsigned();
			$table->foreign('studio_id')->references('studio_id')->on('studios');
			$table->boolean('duplicate');
			$table->text('bio');
			$table->timestamp('purchased')->default('2015-01-01 08:00:00');
			$table->timestamps();
		});

		// if(Schema::hasTable('quotes')) Schema::drop('quotes');
		Schema::create('quotes', function(Blueprint $table)
      {
         $table->increments('quote_id');
			$table->integer('movie_id')->unsigned();
			$table->foreign('movie_id')->references('movie_id')->on('movies')->onDelete('cascade');
         $table->string('text');
			$table->timestamps();
      });

		// if(Schema::hasTable('cast')) Schema::drop('cast');
		Schema::create('cast', function(Blueprint $table)
		{
			$table->increments('cast_id');
			$table->integer('movie_id')->unsigned();
			$table->foreign('movie_id')->references('movie_id')->on('movies')->onDelete('cascade');
			$table->integer('person_id')->unsigned();
			$table->foreign('person_id')->references('person_id')->on('persons')->onDelete('cascade');
			$table->string('character');
			$table->timestamps();
		});

		// if(Schema::hasTable('categories')) Schema::drop('categories');
		Schema::create('categories', function(Blueprint $table)
		{
			$table->increments('category_id');
			$table->integer('movie_id')->unsigned();
			$table->foreign('movie_id')->references('movie_id')->on('movies')->onDelete('cascade');
			$table->integer('genre_id')->unsigned();
			$table->foreign('genre_id')->references('genre_id')->on('genres')->onDelete('cascade');
			$table->timestamps();
		});

		// if(Schema::hasTable('crew')) Schema::drop('crew');
		Schema::create('crew', function(Blueprint $table)
		{
			$table->increments('crew_id');
			$table->integer('movie_id')->unsigned();
			$table->foreign('movie_id')->references('movie_id')->on('movies')->onDelete('cascade');
			$table->integer('person_id')->unsigned();
			$table->foreign('person_id')->references('person_id')->on('persons')->onDelete('cascade');
			$table->string('position');
			$table->timestamps();
		});

		// if(Schema::hasTable('tags')) Schema::drop('tags');
		Schema::create('tags', function(Blueprint $table)
		{
			$table->increments('tag_id');
			$table->integer('movie_id')->unsigned();
			$table->foreign('movie_id')->references('movie_id')->on('movies')->onDelete('cascade');
			$table->integer('keyword_id')->unsigned();
			$table->foreign('keyword_id')->references('keyword_id')->on('keywords')->onDelete('cascade');
			$table->timestamps();
		});

		// if(Schema::hasTable('viewings')) Schema::drop('viewings');
		Schema::create('viewings', function(Blueprint $table)
		{
			$table->increments('viewing_id');
			$table->integer('movie_id')->unsigned();
			$table->foreign('movie_id')->references('movie_id')->on('movies')->onDelete('cascade');
			$table->timestamps();
		});

	} //end of up

	public function down()
	{
		DB::statement('SET FOREIGN_KEY_CHECKS = 0');
		Schema::drop('certificates');
		Schema::drop('formats');
		Schema::drop('genres');
		Schema::drop('keywords');
		Schema::drop('movies');
		Schema::drop('persons');
		Schema::drop('studios');
		Schema::drop('viewings');
		Schema::drop('quotes');
		Schema::drop('forms');
		Schema::drop('cast');
		Schema::drop('categories');
		Schema::drop('crew');
		Schema::drop('tags');
		DB::statement('SET FOREIGN_KEY_CHECKS = 1');
	} //end of down

} //end of class
