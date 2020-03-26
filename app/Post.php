<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable = [
		'title',
		'author',
		'text',
		'category',
		'original_source',
		'img',
		'slug',
		'updated_at',
	];
}
