<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Categorie;

class WelcomeController extends Controller
{
    public function index() {
        $articles = Article::all();
        $categories = Categorie::all();

        return view('welcome', compact('articles', 'categories'));
    }
}
