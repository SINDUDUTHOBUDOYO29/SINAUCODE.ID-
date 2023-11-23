<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Back\KategoriController;
use App\Http\Controllers\Controller;
use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        return view('front.home.index', [
            'latest_post' => Artikel::latest()->first(),
            'articles' => Artikel::with('Kategori')->whereStatus(1)->latest()->paginate(2),
            'categories' => Kategori::latest()->get()
        ]);
    }

    public function about()
    {
        return view('front.home.about', [
            'categories' => Kategori::latest()->get()
        ]);
    }
}
