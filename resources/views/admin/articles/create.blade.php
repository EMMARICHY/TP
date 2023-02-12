@extends('layouts.adminapp')
   
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ url('/') }}"> Retour</a>
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
 
<form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label>Nom de l'article</label><br>
    <input type="text" name="nom_art" id="name" class="form-control" required><br>
    <label>Prix ($)</label><br>
    <input type="number" name="prix" id="address" class="form-control" required><br>
    <label>Stock</label><br>
    <input type="number" name="stock" id="address" class="form-control" required><br>
    <label>Categorie</label><br>
     <select class="form-select" aria-label="Default select example" name="categorie" required>
      @foreach ($categories as $categorie)
        <option value="{{ $categorie->id }}">{{ $categorie->nom_cotegorie }}</option>
      @endforeach
    </select><br>
    <label>Photo</label><br>
    <input type="file" name="image" id="mobile" class="form-control" required><br>
    <input type="submit" value="Enregistrer" class="btn btn-success"><br>
      
</form>
@endsection