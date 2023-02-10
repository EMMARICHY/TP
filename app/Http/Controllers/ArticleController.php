<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\categorie;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = article::with('categorie')->get();
        $categories = categorie::with('articles')->get();
        return view('admin.index', compact('articles', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $articles = article::with('categorie')->get();
        $categories = categorie::with('articles')->get();
        return view('admin.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Article::create([
            'nom_article'=>$request->nom_art,
            'stock_article'=>$request->stock,
            'prix'=>$request->prix,
            'categorie_id'=>$request->categorie,
            'image'=>$request->image,
        ]);
        $request->file('image')->move(public_path('images/articles'),$request->prodname.'.webp');
        return redirect('/posts');

    }

    /**
     * Display the specified resource.
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('show',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product->delete();
        return redirect()->route('index')
                        ->with('success','Product deleted successfully');
    }
}
