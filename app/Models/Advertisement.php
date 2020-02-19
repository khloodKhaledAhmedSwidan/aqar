<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model {

	protected $table = 'advertisements';
	public $timestamps = true;
	protected $fillable = array('name', 'price', 'space', 'num_of_room', 'num_of_hole', 'status', 'description', 'floor', 'num_of_bathroom', 'phone', 'email', 'electric_elevator', 'date', 'is_watch', 'longitude', 'latitude', 'realty_type_id', 'client_id', 'city_id', 'rent_period_id', 'address');

	public function city()
	{
		return $this->belongsTo('App\Models\City');
	}

	public function realtyType()
	{
		return $this->belongsTo('App\Models\RealtyType');
	}

	public function client()
	{
		return $this->belongsTo('App\Models\Client');
	}

	public function rentPeriod()
	{
		return $this->belongsTo('App\Models\RentPeriod');
	}

	public function adsPhotos()
	{
		return $this->hasMany('App\Models\AdsPhoto');
	}

	public function clients()
	{
		return $this->belongsToMany('App\Models\Client');
	}

	public function messages()
	{
		return $this->hasMany('App\Models\Message');
	}

}