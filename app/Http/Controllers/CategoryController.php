<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Recipe;
use Illuminate\Contracts\View\View;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories.index', ['categories' => Category::all()]);
    }

    public function show(Category $category)
    {
        return view('content.categories.show', [
            'category' => $category,
        ]);
    }
}
