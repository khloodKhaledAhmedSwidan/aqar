<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdvertisementClient extends Model {

	protected $table = 'advertisement_client';
	public $timestamps = true;
	protected $fillable = array('client_id', 'advertisement_id');

}