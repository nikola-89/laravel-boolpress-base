<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
	protected $fillable = [
		'url',
		'title',
		'user_id',
		'post_id'
	];

	public function user()
	{
		return $this->belongsTo('App\User');
	}

	public function post()
	{
		return $this->belongsTo('App\Post');
	}
}
