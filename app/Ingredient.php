<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $fillable = ['id', 'title'];

    public function recipes()
    {
        return $this->belongsToMany(Recipe::class, 'recipes_ingredients')->withPivot('quantity', 'price');
    }
}
