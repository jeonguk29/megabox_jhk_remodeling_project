<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserved extends Model
{
    use HasFactory;
	
	protected $fillable = [
		'members_id',
		'members_uid',
		'movies_id',
		'theaters_id',
		'rooms_id',
		'dday',
		'time',
		'adult',
		'teen',
		'adult',
		'teen',
		'child',
		'disabledperson',
		'total',
		'seat'
		
	];
}
