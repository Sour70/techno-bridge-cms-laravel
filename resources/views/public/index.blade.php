@extends('layouts.app')

@section('title', 'Articles')

@section('content')
<div class="row justify-content-center">
  <div class="col-lg-9">
    <h2 class="mb-4 text-center fw-bold text-dark">Latest Articles</h2>

    @forelse($articles as $article)
      <div class="card mb-4 shadow-sm border-0 rounded-3 article-card">
        <div class="card-body">
          <h4 class="card-title mb-2">
            <a href="{{ route('article.show', $article->id) }}" class="text-decoration-none text-dark">
              {{ $article->title }}
            </a>
          </h4>
          <p class="text-muted small mb-2">
            <i class="bi bi-calendar-event"></i> Published on {{ $article->created_at->format('d M, Y') }}
          </p>
          <p class="card-text text-secondary">
            {{ \Illuminate\Support\Str::limit(strip_tags($article->content), 200) }}
          </p>
          <a href="{{ route('article.show', $article->id) }}" class="btn btn-sm btn-outline-primary mt-2">
            Read More →
          </a>
        </div>
      </div>
    @empty
      <div class="alert  text-center bg-light">
        No articles published yet. Please check back later.
      </div>
    @endforelse
  </div>
</div>

@endsection
