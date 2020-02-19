<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdvertisementsTable extends Migration {

	public function up()
	{
		Schema::create('advertisements', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 255);
			$table->double('price');
			$table->double('space');
			$table->integer('num_of_room');
			$table->integer('num_of_hole');
			$table->enum('status', array('0', '1'));
			$table->text('description');
			$table->string('floor');
			$table->integer('num_of_bathroom');
			$table->string('phone', 11);
			$table->string('email', 255);
			$table->enum('electric_elevator', array('0', '1'));
			$table->date('date');
			$table->integer('is_watch');
			$table->decimal('longitude', 10,8);
			$table->decimal('latitude', 10,8);
			$table->integer('realty_type_id');
			$table->integer('client_id');
			$table->integer('city_id');
			$table->integer('rent_period_id');
			$table->string('address', 255);
		});
	}

	public function down()
	{
		Schema::drop('advertisements');
	}
}