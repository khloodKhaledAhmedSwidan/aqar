<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdsPhoto extends Model {

	protected $table = 'ads_photos';
	public $timestamps = true;
	protected $fillable = array('path', 'advertisement_id');

	public function advertisement()
	{
		return $this->belongsTo('App\Models\Advertisement');
	}

}