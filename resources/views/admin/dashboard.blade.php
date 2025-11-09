@extends('layouts.app')

@section('title','Admin Dashboard')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
  <h2>Dashboard</h2>
  <a class="btn btn-success" href="{{ route('admin.articles.create') }}">Add New Article</a>
</div>

<div class="card">
  <div class="card-body">
    <p>Total articles: {{ \App\Models\Article::count() }}</p>
    <a class="btn btn-link" href="{{ route('admin.articles.index') }}">Manage Articles</a>
  </div>
</div>
@endsection
