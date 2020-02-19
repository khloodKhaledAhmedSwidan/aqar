<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdvertisementClientTable extends Migration {

	public function up()
	{
		Schema::create('advertisement_client', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('client_id');
			$table->integer('advertisement_id');
		});
	}

	public function down()
	{
		Schema::drop('advertisement_client');
	}
}