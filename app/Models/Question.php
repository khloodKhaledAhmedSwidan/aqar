<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model {

	protected $table = 'questions';
	public $timestamps = true;
	protected $fillable = array('name', 'phone', 'email', 'ques', 'answer', 'client_id');

	public function client()
	{
		return $this->belongsTo('App\Models\Client');
	}

}