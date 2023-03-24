<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Challenge;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        // $challenges = Challenge::with(('category'))->where('category_id', $category->id)->get();
        return view('categories.show', compact('category'));
    }
}
