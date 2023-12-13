<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{

    public function index()
    {
        $data = [
            'recipes'    => Recipe::all(),
            'categories' => Category::all()
        ];

        // dd($data);

        return view('recipes.index', $data);
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recipe $recipe)
    {
        $recipe->delete();

        return redirect('recipes')->with('status', 'Recipe deleted');
    }
}
