<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jangbui extends Model
{
    use HasFactory;
	
	protected $fillable = [
		'purchase_date',
		'reserveds_id',
		'food_id',
		'drinks_id',
		'total_price'
	];
}
