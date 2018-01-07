<?php

namespace App\Repositories;


use App\ModelPresenters\RecipePresenter;
use App\Recipe;
use Illuminate\Http\Request;


class RecipesRepository
{
    public function findAll()
    {
        $rowRecipes = Recipe::orderBy('created_at')->paginate(10);
        $recipes = [];

        foreach ($rowRecipes as $rowRecipe) {
            $recipes[] = new RecipePresenter($rowRecipe);
        }

        $pagination = $rowRecipes->links();

        return ['recipes' => $recipes, 'pagination' => $pagination];
    }

    public function findById()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }
}