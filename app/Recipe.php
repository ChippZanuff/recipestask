<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = ['id', 'user_id', 'title', 'description'];

    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class, 'recipes_ingredients');
    }
}
