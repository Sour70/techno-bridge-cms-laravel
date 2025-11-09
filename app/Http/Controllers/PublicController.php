<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    //
     public function index()
    {
        $articles = Article::where('is_published', true)->latest()->get();
        return view('public.index', compact('articles'));
    }

    public function show(Article $article)
    {
        if (!$article->is_published) {
            abort(404);
        }
        return view('public.show', compact('article'));
    }
}
