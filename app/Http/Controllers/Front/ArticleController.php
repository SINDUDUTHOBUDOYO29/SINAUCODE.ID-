<?php

namespace App\Http\Controllers\Front;

use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index()
    {
        $keyword = request()->keyword;

        if ($keyword) {
            $articles = Artikel::with('Kategori')
                ->whereStatus(1)
                ->where('title', 'like', '%' . $keyword . '%')
                ->latest()
                ->paginate(2);
        } else {
            $articles = Artikel::with('Kategori')->whereStatus(1)->latest()->paginate(2);
        }

        return view('front.article.index', [
            'articles' => $articles,
            'keyword' => $keyword
        ]);
    }

    public function show($slug)
    {
        $article = Artikel::whereSlug($slug)->firstOrFail();
        $article->increment('views');

        return view('front.article.show', [
            'article' => $article,
            'categories' => Kategori::latest()->get()
        ]);
    }
}
