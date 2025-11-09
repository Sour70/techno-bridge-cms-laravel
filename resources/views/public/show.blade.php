@extends('layouts.app')

@section('title', $article->title)

@section('content')
<div class="row justify-content-center">
  <div class="col-lg-9">
    <article class="card shadow-sm border-0 rounded-3 p-4 mb-4">
      <h1 class="fw-bold mb-3 text-dark">{{ $article->title }}</h1>
      <p class="text-muted small mb-4">
        <i class="bi bi-calendar-event"></i> Published on {{ $article->created_at->format('d M, Y') }}
      </p>
      <div class="article-content" style="line-height:1.8; color:#333;">
        {!! nl2br(e($article->content)) !!}
      </div>
    </article>

    <div class="text-center mt-4">
      <a href="{{ route('home') }}" class="btn btn-outline-secondary btn-sm">
        ← Back to Articles
      </a>
    </div>
  </div>
</div>


@endsection
