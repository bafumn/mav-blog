@extends('layouts/master')

@section('title', 'Main page')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="mt-4">{{ $article->name }}</h1>
                <hr>
                <p>Posted on {{ $article->created_at }} ?></p>
                <hr>
                @isset($article->image)
                    <img class="card-img-top img-fluid" src="{{ $article->image->path }}>">
                @endisset
                {{ $article->content }}
            </div>
        </div>
    </div>
@endsection
