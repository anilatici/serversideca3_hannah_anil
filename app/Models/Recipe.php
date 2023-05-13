<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'recipe_name',
        'recipe_description',
        'recipe_ingredients',
        'cuisine',
        'recipe_img'
    ];
}
