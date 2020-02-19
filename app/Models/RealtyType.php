<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RealtyType extends Model {

	protected $table = 'realty_types';
	public $timestamps = true;
	protected $fillable = array('name');

	public function advertisements()
	{
		return $this->hasMany('App\Models\Advertisement');
	}

}