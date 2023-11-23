<?php

namespace App\Http\Controllers\Back;

use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('back.dashboard.index', [
            'total_artikel' => Artikel::count(),
            'kategori' => Kategori::count(),
            'latest_article' => Artikel::with('Kategori')->whereStatus(1)->latest()->take(5)->get(),
            'popular_article' => Artikel::with('Kategori')->whereStatus(1)->orderBy('views', 'desc')->take(5)->get()
        ]);
    }
}
