<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $articles = Article::latest()->paginate(10);
        return view('admin.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'is_published' => 'nullable'
        ]);

        $data['is_published'] = $request->has('is_published');
        Article::create($data);

        return redirect()->route('admin.articles.index')->with('success', 'Article added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
        return view('admin.articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'is_published' => 'nullable'
        ]);

        $data['is_published'] = $request->has('is_published');
        $article->update($data);

        return redirect()->route('admin.articles.index')->with('success', 'Article updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article,string $id)
    {
        //
        $article->delete();
        return redirect()->route('admin.articles.index')->with('success', 'Article deleted successfully.');
    }
}
