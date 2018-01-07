<?php

namespace App\ModelPresenters;


use App\Recipe;

class RecipePresenter
{
    private $recipe;

    public function __construct(Recipe $recipe)
    {
        $this->recipe = $recipe;
    }

    public function getTitle()
    {
        return $this->recipe->title;
    }

    public function getDescription()
    {
        return $this->recipe->description;
    }

    public function getIdentifier()
    {
        return $this->recipe->id;
    }

    public function getIngredients()
    {
        $ingredients = $this->recipe->ingredients->map(function ($ingredient) {
            return ['quantity' => $ingredient->pivot->quantity, 'price' => $ingredient->pivot->price, 'title' => $ingredient->title];
        });

        return $ingredients;
    }
}