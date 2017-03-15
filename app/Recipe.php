<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
	protected $table = 'recipes';

    protected $fillable = [
    	'user_id',
    	'name',
    	'description',
    	'ingredients',
    	'steps',
    	'isSecret'
    ];
}
