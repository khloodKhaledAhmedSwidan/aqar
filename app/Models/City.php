<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model {

	protected $table = 'cities';
	public $timestamps = true;
	protected $fillable = array('name');

	public function clients()
	{
		return $this->hasMany('App\Models\Client');
	}

	public function advertisements()
	{
		return $this->hasMany('App\Models\Advertisement');
	}

}