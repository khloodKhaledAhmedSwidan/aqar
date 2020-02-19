<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model {

	protected $table = 'settings';
	public $timestamps = true;
	protected $fillable = array('about_us', 'vision', 'mession', 'fb_link', 'twitter_link', 'gmail_link', 'main_title', 'acceptance', 'policie', 'behavior');

}