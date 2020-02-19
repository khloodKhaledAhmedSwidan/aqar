<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdsPhotosTable extends Migration {

	public function up()
	{
		Schema::create('ads_photos', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('path');
			$table->integer('advertisement_id');
		});
	}

	public function down()
	{
		Schema::drop('ads_photos');
	}
}