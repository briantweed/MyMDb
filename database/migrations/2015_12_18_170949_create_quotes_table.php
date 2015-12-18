<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuotesTable extends Migration
{
   public function up()
   {
      Schema::create('quotes', function(Blueprint $table)
      {
         $table->increments('quote_id');
         $table->integer('quote_movie_id');
         $table->string('quote_text');
      });
   }

   public function down()
   {
      Schema::drop('quotes');
   }
}
