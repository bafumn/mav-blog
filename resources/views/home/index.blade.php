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
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top" data-src="" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="" data-holder-rendered="true">
                            <div class="card-body">
                                <p class="card-text">asdf</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">asdf</small>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
