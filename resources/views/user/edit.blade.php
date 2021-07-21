@extends('layouts/master')

@section('title', 'Main page')

@section('content')
    <section class="py-4 mb-4 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="{{ route('articles.create') }}" class="btn btn-success btn-block">Add new article</a>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Profile</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('users.update', $user->id) }}" method="post" id="form" class="form-validate">
                            @CSRF
                            @method('put')
                            <div class="form-group">
                                <label for="title">Name</label>
                                <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                            </div>
                            <div class="form-group">
                                <label for="title">Email</label>
                                <input type="text" readonly name="email" class="form-control" value="{{ $user->email }}">
                            </div>
                            <div class="form-group mb-0 d-flex">
                                <button class="btn btn-success btn-block col-md-3" form="form">
                                    <i class="fa fa-check"></i> Save Post
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
