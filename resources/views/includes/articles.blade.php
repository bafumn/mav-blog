@foreach($articles as $article)
    <div class="card mb-4">
{{--        <img class="card-img-top img-fluid" src="/">--}}
        <div class="card-body">
            <h2 class="card-title">{{ $article->name }}</h2>
            <p class="card-text">{{ $article->description }}</p>
            <a href="{{ route('articles.show', $article->id) }}" class="btn btn-primary">Read More &rarr;</a>
        </div>
        <div class="card-footer text-muted">
            Posted on {{ $article->created_at }} | {{ $article->category->name }}
        </div>
    </div>
@endforeach
