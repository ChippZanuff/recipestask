<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecipesIngredient extends Model
{
    protected $fillable = ['id', 'recipe_id', 'ingredient_id', 'quantity', 'price'];
}
