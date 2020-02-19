<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRentPeriodsTable extends Migration {

	public function up()
	{
		Schema::create('rent_periods', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('interval');
		});
	}

	public function down()
	{
		Schema::drop('rent_periods');
	}
}