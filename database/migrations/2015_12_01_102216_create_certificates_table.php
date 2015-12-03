<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertificatesTable extends Migration {

	public function up()
	{
		Schema::create('certificates', function(Blueprint $table)
		{
			$table->increments('certificate_id');
			$table->string('certificate_type');
		});
	}

	public function down()
	{
		Schema::drop('certificates');
	}

}
