@extends('layouts/master')

@section('title', 'Main page')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card my-4">
                    <h5 class="card-header">Filter</h5>
                    <div class="card-body">
                        <form class="form-vv" action="{{ route('articles.index') }}" method="get">
                            <p>Category</p>
                            <select class="form-control" id="cat_id" name="category_id" >
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            <p class="mt-2">Date</p>
                            <select class="form-control" id="order_by" name="order_by">
                                <option value="DESC">Latest</option>
                                <option value="ASC">Newest</option>
                            </select>
                            <button type="submit" class="btn btn-dark btn-block mt-4">Result</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="articles my-4">
                    @include('includes/articles')
                </div>
            </div>
        </div>
    </div>
@endsection
