@extends('layouts.dashboard')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">posts Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Name : {{ $posts->id }}</h5>
        <p class="card-text">Address : {{ $posts->prodname }}</p>
        <p class="card-text">Mobile : {{ $posts->category->catname }}</p>
  </div>
    <hr>
  </div>
</div>