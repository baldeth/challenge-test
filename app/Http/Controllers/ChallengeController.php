<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChallengeRequest;
use App\Models\Category;
use App\Models\Challenge;
use Illuminate\Support\Str;

class ChallengeController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('challenges.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ChallengeRequest $request)
    {
        $category = Category::query()->where('id', $request->category)->first();
        $path = $request->file('image')->store('challenges');
        Challenge::query()->create([
            'title' => $title = $request->title,
            'slug' => Str::slug($title) . '-' . now()->format('YdmHis'),
            'image' => $path,
            'level' => $request->level,
            'description' => $request->description,
            'category_id' => $category->id,
            'user_id' => auth()->id(),
        ]);
        return to_route('dashboard')->with('success', 'Challenge added successfully !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Challenge $challenge)
    {
        $categories = Category::query()->latest()->get();
        $category = $challenge->category;
        return view('challenges.show', compact('challenge', 'categories', 'category'));
    }

}
