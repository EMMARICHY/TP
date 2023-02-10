@extends('layouts.dashboard')
 
@section('content')

<div class="row" style="margin:20px;">
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3>ADMINISTRATION DU SITE</h3>
                    </div>
                    
                    <div class="card-body">
                        <a href="{{ url('post/add') }}" class="btn btn-success btn-sm" title="Add New Student">
                            Add New
                        </a>
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
                                    <th scope="col">Actions</th>
                                    </tr>
                                </thead> 
            @foreach ($articles as $article)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $article->nom_article }}</td>
                <td>{{ $article->stock_article }}</td>
                <td>{{ $article->categorie->nom_cotegorie }}</td>
                <td>{{ $article->image}}</td>
                <td>
                    <a href="{{ url('/post/' . $article->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                    <a href="{{ url('/post/edit/' . $article->id) }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
    
                    <form method="POST" action="post/delete" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm("Confirm delete?")"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
</div>    