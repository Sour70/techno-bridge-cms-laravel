@extends('layouts.app')
@section('title','Manage Articles')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
  <h2>Articles</h2>
  <a class="btn btn-primary" href="{{ route('admin.articles.create') }}">Add Article</a>
</div>

<table class="table table-bordered">
  <thead>
    <tr>
      <th>#</th>
      <th>Title</th>
      <th>Status</th>
      <th>Created</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @forelse($articles as $a)
      <tr>
        <td>{{ $a->id }}</td>
        <td>{{ $a->title }}</td>
        <td>
          @if($a->is_published)
            <span class="badge bg-success">Published</span>
          @else
            <span class="badge bg-secondary">Draft</span>
          @endif
        </td>
        <td>{{ $a->created_at->format('Y-m-d') }}</td>
        <td style="width:260px;">
          <a href="{{ route('admin.articles.edit', $a->id) }}" class="btn btn-sm btn-secondary">Edit</a>

          <form action="{{ route('admin.articles.destroy', $a->id) }}" method="POST" style="display:inline-block" onsubmit="return confirm('Delete this article?');">
            @csrf
            @method('DELETE')
            <button class="btn btn-sm btn-danger">Delete</button>
          </form>

          @if($a->is_published)
            <a href="{{ route('article.show', $a->id) }}" target="_blank" class="btn btn-sm btn-outline-primary">View</a>
          @endif
        </td>
      </tr>
    @empty
      <tr><td colspan="5">No articles yet.</td></tr>
    @endforelse
  </tbody>
</table>

{{ $articles->links() }}
@endsection
