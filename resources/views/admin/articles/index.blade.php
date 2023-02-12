@extends('layouts.adminapp')
  
@section('content')

<div class="row" style="margin:20px;">
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Liste des Articles</h2>
                    </div>
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="col-2">
                                <a href="{{ url('create') }}" class="btn btn-success btn-sm" title="Add New Student">
                                    Ajourter un article
                                </a> 
                            </div>
                            <div class="col-2">
                                <a href="{{ url('create/categorie') }}" class="btn btn-success btn-sm" title="Add New Student">
                                    Ajourter une categorie
                                </a>
                            </div>
                        </div>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Article</th>
                                        <th scope="col">Stock</th>
                                        <th scope="col">categorie</th>
                                        <th scope="col">Photo</th>
                                        <th scope="col" width="280px">Actions</th>
                                    </tr>
                                </thead>  
            @foreach ($articles as $article)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $article->nom_article }}</td>
                <td>{{ $article->stock_article }}</td>
                <td>{{ $article->categorie->nom_cotegorie }}</td>
                <td><img src="{{ asset('/images/articles/' . $article->image) }}" width="100px"></td>
                <td>
                    <form action="{{ route('article.destroy',$article->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('article.show',$article->id) }}">Details</a>
                        <a class="btn btn-primary" href="{{ route('article.edit',$article->id) }}">Editer</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Suppreimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
</div>    
    {!! $articles->links() !!}
 
@endsection