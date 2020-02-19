<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSettingsTable extends Migration {

	public function up()
	{
		Schema::create('settings', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->text('about_us');
			$table->text('vision');
			$table->text('mession');
			$table->string('fb_link');
			$table->string('twitter_link');
			$table->string('gmail_link');
			$table->string('main_title');
			$table->text('acceptance');
			$table->text('policie');
			$table->text('behavior');
		});
	}

	public function down()
	{
		Schema::drop('settings');
	}
}