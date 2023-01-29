<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
	
	protected $fillable = [
		'name',
		'rating',
		'director',
		'playingtime',
		'release_date',
		'publisher',
		'video',
		'pic1',
		'pic2',
		'pic3',
		'description'
	];
}
