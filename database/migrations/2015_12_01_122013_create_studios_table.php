<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudiosTable extends Migration {

	public function up()
	{
		Schema::create('studios', function(Blueprint $table)
		{
			$table->increments('studio_id');
			$table->string('studio_name');
		});
	}

	public function down()
	{
		Schema::drop('studios');
	}

}
