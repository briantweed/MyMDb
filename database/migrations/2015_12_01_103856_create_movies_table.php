<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration {

	public function up()
	{
		Schema::create('movies', function(Blueprint $table)
		{
			$table->increments('movie_id');
			$table->string('movie_name');
			$table->date('movie_release_date');
			$table->integer('movie_rating');
			$table->integer('movie_certificate');
			$table->index('movie_certificate');
			$table->text('movie_description');
			$table->timestamp('movie_added_on');
		});
	}

	public function down()
	{
		Schema::drop('movies');
	}

}
