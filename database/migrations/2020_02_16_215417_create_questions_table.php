<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuestionsTable extends Migration {

	public function up()
	{
		Schema::create('questions', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 255);
			$table->string('phone', 11);
			$table->string('email', 255);
			$table->string('ques', 255);
			$table->string('answer', 255)->nullable();
			$table->integer('client_id');
		});
	}

	public function down()
	{
		Schema::drop('questions');
	}
}