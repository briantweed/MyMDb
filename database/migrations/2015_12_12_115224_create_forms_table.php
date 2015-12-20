<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormsTable extends Migration
{
   public function up()
   {
      Schema::create('forms', function(Blueprint $table)
      {
         $table->increments('form_id');
         $table->string('form_name');
         $table->string('form_field');
         $table->string('form_label');
         $table->boolean('form_required');
         $table->string('form_type');
         $table->integer('form_order');
         $table->integer('form_range_from');
         $table->integer('form_range_to');
         $table->string('form_options');
         $table->string('form_default');
         $table->string('form_class');
      });
   }

   public function down()
   {
      Schema::drop('forms');
   }
}
