<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientsTable extends Migration {

	public function up()
	{
		Schema::create('clients', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 255);
			$table->string('email', 255);
			$table->string('phone', 11);
			$table->string('mobile', 11);
			$table->string('password', 255);
			$table->string('photo');
			$table->text('information');
			$table->enum('is_message', array('0', '1'));
			$table->enum('type', array('0', '1'));
			$table->decimal('longitude', 10,8);
			$table->decimal('latitude', 10,8);
			$table->integer('city_id');
			$table->string('address', 255);
		});
	}

	public function down()
	{
		Schema::drop('clients');
	}
}