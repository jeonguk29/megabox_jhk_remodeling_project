<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playing extends Model
{
    use HasFactory;
	
	protected $fillable = [
		'movies_id',
		'playing_date', 
	];
}
