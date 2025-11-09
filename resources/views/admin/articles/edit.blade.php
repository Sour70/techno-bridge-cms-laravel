@extends('layouts.app')
@section('title','Edit Article')
@section('content')
<h3>Edit Article</h3>
<form method="POST" action="{{ route('admin.articles.update', $article->id) }}">
  @csrf
  @method('PUT')

  <div class="mb-3">
    <label>Title</label>
    <input name="title" value="{{ old('title', $article->title) }}" class="form-control" required>
  </div>

  <div class="mb-3">
    <label>Content</label>
    <textarea name="content" rows="8" class="form-control" required>{{ old('content', $article->content) }}</textarea>
  </div>

  <div class="form-check mb-3">
    <input type="checkbox" class="form-check-input" id="publish" name="is_published" {{ $article->is_published ? 'checked' : '' }}>
    <label for="publish" class="form-check-label">Published</label>
  </div>

  <button class="btn btn-primary">Update</button>
  <a href="{{ route('admin.articles.index') }}" class="btn btn-link">Back</a>
</form>
@endsection
