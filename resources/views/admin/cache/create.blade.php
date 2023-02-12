@extends('layouts.dashboard')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Create New Students</div>
  <div class="card-body">
       
      <form action="{{ url('post/storage') }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <label>Nom de l'article</label><br>
        <input type="text" name="nom_art" id="name" class="form-control"><br>
        <label>Prix</label><br>
        <input type="number" name="prix" id="address" class="form-control"><br>
        <label>Stock</label><br>
        <input type="number" name="stock" id="address" class="form-control"><br>
        <label>Categorie</label><br>
         <select class="form-select" aria-label="Default select example" name="categorie">
          <option selected>Aucune categorie selectionnée.</option>
          @foreach ($categories as $categorie)
            <option value="{{ $categorie->id }}">{{ $categorie->nom_cotegorie }}</option>
          @endforeach
        </select><br>
        <label>Photo</label><br>
        <input type="file" name="image" id="mobile" class="form-control"><br>
        <input type="submit" value="Save" class="btn btn-success"><br>
    </form>
    
  </div>
</div>
  
@stop