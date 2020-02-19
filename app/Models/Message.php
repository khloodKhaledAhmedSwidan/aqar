<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model {

	protected $table = 'messages';
	public $timestamps = true;
	protected $fillable = array('content', 'client_id', 'advertisement_id');

	public function client()
	{
		return $this->belongsTo('App\Models\Client');
	}

	public function advertisement()
	{
		return $this->belongsTo('App\Models\Advertisement');
	}

}