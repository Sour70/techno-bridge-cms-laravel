@extends('layouts.app')
@section('title','Add Article')
@section('content')
<h3>Add Article</h3>
<form method="POST" action="{{ route('admin.articles.store') }}">
  @csrf
  <div class="mb-3">
    <label>Title</label>
    <input name="title" value="{{ old('title') }}" class="form-control" required>
  </div>

  <div class="mb-3">
    <label>Content</label>
    <textarea name="content" rows="8" class="form-control" required>{{ old('content') }}</textarea>
  </div>

  <div class="form-check mb-3">
    <input type="checkbox" class="form-check-input" id="publish" name="is_published" {{ old('is_published') ? 'checked' : '' }}>
    <label for="publish" class="form-check-label">Publish now</label>
  </div>

  <button class="btn btn-success">Save</button>
  <a href="{{ route('admin.articles.index') }}" class="btn btn-link">Cancel</a>
</form>
@endsection
