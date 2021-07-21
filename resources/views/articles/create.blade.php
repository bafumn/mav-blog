@extends('layouts/master')

@section('title', 'Create Article')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Create article</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('articles.store') }}" method="post" id="form" class="form-validate" enctype="multipart/form-data">
                            @CSRF
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="name" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <label for="title">Description</label>
                                <input type="text" name="description" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <label for="title">Category</label>
                                <select name="category" class="form-control">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="file">Image Upload</label>
                                <input type="file" name="image" class="form-control-file">
                                <small class="form-text text-muted">Max Size 3mb</small>
                            </div>
                            <div class="form-group">
                                <label for="body">Body</label>
                                <textarea name="content" class="form-control">
                            </textarea>
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
