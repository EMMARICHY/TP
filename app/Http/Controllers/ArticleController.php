<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\categorie;
use App\Models\Commande;
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
        $articles = article::latest()->paginate(5);
     
        return view('admin.articles.index',compact('articles'))
               ->with('i', (request()->input('page', 1) - 1) * 5);
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
        return view('admin.articles.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $article = Article::create([
            'nom_article' => $request->nom_art,
            'stock_article' => $request->stock,
            'prix' => $request->prix,
            'categorie_id' => $request->categorie,
            'image' => $request->image,
        ]);

        Article::where('id', $article->id)->update([
            'image' => $article->id . '.jpg'
        ]);

        $request->file('image')->move(public_path('images/articles'), $article->id.'.jpg');

        // dd($request);
        // if ($image = $request->file('image')) {
        //     $destinationPath = 'images/';
        //     $profileImage = date('YmdHis') . "." .'.webp' /* $image->getClientOriginalExtension() */;
        //     $image->move($destinationPath, $profileImage);
        //     $input['image'] = "$profileImage";
        // }

        return redirect()->route('article.index')
                        ->with('success','Article créé avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('admin.articles.show',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $articles = article::with('categorie')->get();
        $categories = categorie::with('articles')->get();
        return view('admin.articles.edit',compact('article','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // dd($request);
        $article = Article::where('id', $request->article_id)->update([
            'nom_article'=>$request->nom_art,
            'prix'=>$request->prix,
            'stock_article'=>$request->stock,
            'categorie_id'=>$request->categorie,
            'image' => $request->article_id . '.jpg'
        ]);
        
        if ($request->image != null) {
            $request->file('image')->move(public_path('images/articles'), $request->article_id .'.jpg');
        }
        return redirect()->route('articles.index')
                         ->with('success','Article mis à jour avec succès');   
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return back()->with('success','supprimé avec succès');
    }
    public function panier($article_id, $client_id){
        $paniers = Commande::where('client_id', '1')->get();

        return view('pages.checkout', compact('paniers'));

        $commandes = Commande::where('article_id', $article_id)->where('client_id', $client_id)->get();

        // dd($commande == null);

        $quantite = 0;

        // if ($commandes != null ) {
            $quantite = $commandes->count() + 1;
        // } else {
        //     $quantite = 0;
        // }        

        $article = Article::where('id', $article_id)->first();
        
        Commande::create([
            'nom' => $article->nom_article,
            'quantite' => $quantite,
            'date_op' => now(),
            'article_id' => $article_id,
            'client_id' => $client_id,
        ]);

        return back();
    }

    public function panierindex() {
        $paniers = Commande::where('client_id', '1')->get();

        return view('pages.checkout', compact('paniers'));
    }
}
