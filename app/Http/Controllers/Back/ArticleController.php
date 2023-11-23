<?php

namespace App\Http\Controllers\Back;

use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\UpdateArticleRequest;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $article =  Artikel::with('Kategori')->latest()->get();

            return DataTables::of($article)
                ->addIndexColumn()
                ->addcolumn('kategori_id', function ($article) {
                    return $article->Kategori->name;
                })
                ->addcolumn('status', function ($article) {
                    if ($article->status == 0) {
                        return '<span class="badge bg-danger">Private</span>';
                    } else {
                        return '<span class="badge bg-success">Published</span>';
                    }
                })
                ->addcolumn('button', function ($article) {
                    return '<div class="text-center">
                        <a href="article/' . $article->id . '" class="btn btn-secondary">Detail</a>
                        <a href="article/' . $article->id . '/edit" class="btn btn-primary">Edit</a>
                        <a href="#"onclick="deleteArticle(this)" data-id="' . $article->id . '" class="btn btn-danger">Delete</a>
                    </td>
                    </div>';
                })
                ->rawColumns(['kategori_id', 'status', 'button'])
                ->make();
        }

        return view('back.article.index', [
            'article' => Artikel::with('Kategori')->latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.article.create', [
            'kategori' => Kategori::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request)
    {
        $data = $request->validated();

        $file = $request->file('img');
        $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/back/', $fileName);

        $data['img'] = $fileName;
        $data['slug'] = Str::slug($data['title']);

        Artikel::create($data);

        return redirect(url('article'))->with('success', 'Data article has been created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('back.article.show', [
            'article' => Artikel::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('back.article.update', [
            'article' => Artikel::find($id),
            'kategori' => Kategori::get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $request, string $id)
    {
        $data = $request->validated();
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/back/', $fileName);

            Storage::delete(['public/back/' . $request->oldImg]);

            $data['img'] = $fileName;
        } else {
            $data['img'] = $request->oldImg;
        }

        $data['slug'] = Str::slug($data['title']);

        Artikel::find($id)->update($data);

        return redirect(url('article'))->with('success', 'Data article has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Artikel::find($id);
        Storage::delete(['public/back/' . $data->img]);
        $data->delete();

        return response()->json([
            'message' => 'Data article has been deleted'
        ]);
    }
}
