@extends('layouts.adminapp')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editer un article</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('article.index') }}"> Retour</a>
            </div>
        </div>
    </div>
      
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Il y a eu des problèmes avec votre entrée.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
     
    <form action="{{ url('/update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="article_id" value="{{ $article->id }}">
        <label>Nom de l'article</label><br>
        <input type="text" name="nom_art" id="name" value="{{ $article->nom_article }}" class="form-control"><br>
        <label>Prix</label><br>
        <input type="number" name="prix" id="address" value="{{ $article->stock_article }}" class="form-control"><br>
        <label>Stock</label><br>
        <input type="number" name="stock" id="address" value="{{ $article->prix }}" class="form-control"><br>
        <label>Categorie</label><br>
        <select class="form-select" aria-label="Default select example" name="categorie">
            {{-- <option selected>{{ $article->categorie->nom_cotegorie }}</option> --}}
            @foreach ($categories as $categorie)
                <option value="{{ $categorie->id }}">{{ $categorie->nom_cotegorie }}</option>
            @endforeach
        </select><br>
        <label>Photo</label><br>
        <input type="file" name="image" value="{{ $article->image }}" id="mobile" class="form-control"><br>
        <img src="{{ asset('/images/articles/'. $article->image) }}" width="150px"><br><br>
        <input type="submit" value="Save" class="btn btn-success"><br>
      
    </form>
@endsection