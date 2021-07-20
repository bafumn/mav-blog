@extends('layouts/master')

@section('title', 'Main page')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card my-4">
                    <h5 class="card-header">Filter</h5>
                    <div class="card-body">
                        <form action="">
                            <p>Category</p>
                            <select class="form-control">
                                <option value="one">One</option>
                                <option value="two">Two</option>
                            </select>
                            <p class="mt-2">Date</p>
                            <select class="form-control">
                                <option value="one">Latest</option>
                                <option value="two">Newest</option>
                            </select>
                            <button type="button" class="btn btn-dark btn-block mt-4">Dark</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <h1 class="my-4">
                    <small>Newest Posts</small>
                </h1>
                @include('includes/articles')
            </div>
        </div>
    </div>
@endsection
