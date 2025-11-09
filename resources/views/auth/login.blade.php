@extends('layouts.app')

@section('title','Admin Login')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-5">
    <h3>Admin Login</h3>
    <form method="POST" action="{{ route('admin.login.process') }}">
      @csrf
      <div class="mb-3">
        <label class="form-label">Username</label>
        <input name="username" value="{{ old('username') }}" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input name="password" type="password" class="form-control" required>
      </div>
      <button class="btn btn-primary">Login</button>
    </form>
  </div>
</div>
@endsection
