<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Content;
use App\Models\Genre;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contents = (new \App\Services\Contents\Content)->all();

        return view('contents', ['contents' => $contents]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $content = Content::query()->create([
            'title'       => $request->get('title'),
            'description' => $request->get('description'),
            'url'         => $request->get('url'),
            'category_id' => $request->get('category_id'),
        ]);

        $content->genres()->attach($request->get('genre_id'));

        return redirect('/contents')->with('success', 'Content created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Content $content)
    {
        $content->load('authors', 'genres');
        return view('content', compact('content'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Content $content)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Content $content)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Content $content)
    {
        //
    }

    public function adminIndex(): View|Application|Factory
    {
        $categories = Category::all('id', 'name')->pluck('name', 'id');
        $genres     = Genre::all('id', 'name')->pluck('name', 'id');

        return view('admin.index', compact('categories', 'genres'));
    }
}
