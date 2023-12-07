<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{

    public function index()
    {
        return view('recipes.index', ['recipes' => Recipe::all()]);
    }


    public function create()
    {
        return view('recipes.create');
    }

    public function store(Request $request)
    {
        $recipe = new Recipe();
        $recipe->name = $request->nameRecipe;
        $recipe->description = $request->descriptionRecipe;
        $recipe->cook_time = $request->cookTime;
        $recipe->category = $request->category;
        $recipe->save();
    }

    public function edit(Recipe $recipe)
    {
        return view('recipes.edit', ['recipe' =>  $recipe]);
    }

    public function show(Recipe $recipe)
    {
        return view('recipes.show', ['recipe' =>  $recipe]);
    }

    public function update(Recipe $recipe, Request $request)
    {
        $recipe->name = $request->nameRecipe;
        $recipe->description = $request->descriptionRecipe;
        $recipe->cook_time = $request->cookTime;
        $recipe->category = $request->category;
        $recipe->save();

        return redirect('/recipes');
    }
}
