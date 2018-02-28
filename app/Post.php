<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

	//protected $table = 'posts';
	//protected $primeyKey = 'id';

    protected $fillable = [
	
    'title',
    'content'
	];	
}
