<?php

namespace App\Http\Controllers;

use App\Repositories\RecipesRepository;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $recipesRepository = new RecipesRepository();

        $recipes = $recipesRepository->findAll();

        return view('recipes.dashboard', $recipes);
    }
}
