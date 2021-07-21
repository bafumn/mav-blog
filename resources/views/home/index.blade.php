@extends('layouts/master')

@section('title', 'Main page')

@section('content')
    <div class="container">
        <h1 class="my-4">
            <small>Newest Posts</small>
        </h1>
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    @foreach($articles as $article)
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                @isset($article->image)
                                    <img class="card-img-top" data-src="" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="" data-holder-rendered="true">
                                @endisset
                                <div class="card-body">
                                    <a href="{{ route('articles.show', $article->id) }}"><p class="card-text">{{ $article->name }}</p></a>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <small class="text-muted">{{ $article->category->name }}</small>
                                        <small class="text-muted">{{ $article->created_at }}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
