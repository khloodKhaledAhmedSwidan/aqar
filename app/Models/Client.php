<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model {

	protected $table = 'clients';
	public $timestamps = true;
	protected $fillable = array('name', 'email', 'phone', 'mobile', 'password', 'photo', 'information', 'is_message', 'type', 'longitude', 'latitude', 'city_id', 'address');
	protected $hidden = array('password');

	public function city()
	{
		return $this->belongsTo('App\Models\City');
	}

	public function advertisements()
	{
		return $this->hasMany('App\Models\Advertisement');
	}

	public function questions()
	{
		return $this->hasMany('App\Models\Question');
	}

	public function messages()
	{
		return $this->hasMany('App\Models\Message');
	}
//
//	public function advertisements()
//	{
//		return $this->belongsToMany('App\Models\Advertisement');
//	}

}