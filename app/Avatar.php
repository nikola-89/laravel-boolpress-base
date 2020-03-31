<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avatar extends Model
{
	protected $fillable = [
		'url',
		'user_id'
	];

	public $timestamps = false;

	public function user()
	{
		return $this->belongsTo('App\User');
	}
}
