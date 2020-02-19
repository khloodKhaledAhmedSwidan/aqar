<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RentPeriod extends Model {

	protected $table = 'rent_periods';
	public $timestamps = true;
	protected $fillable = array('interval');

	public function advertisements()
	{
		return $this->hasMany('App\Models\Advertisement');
	}

}