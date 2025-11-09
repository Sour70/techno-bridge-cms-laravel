<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>@yield('title', 'Techno Bridge CMS')</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<style>
.article-card:hover {
  transform: translateY(-3px);
  transition: all 0.2s ease-in-out;
  box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}
footer {
  background-color: #f8f9fa;
  padding: 25px 0;
  margin-top: 50px;
  border-top: 1px solid #e4e4e4;
  font-size: 14px;
  color: #6c757d;
}
footer a {
  color: #0d6efd;
  text-decoration: none;
}
footer a:hover {
  text-decoration: underline;
}
</style>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
    <div class="container">
      <a class="navbar-brand fw-bold" href="{{ route('home') }}">Techno Bridge CMS</a>

      <div>
        @if(session('user_id'))
          <span class="me-2">Hi, {{ session('user_name') }}</span>
          <form method="POST" action="{{ route('admin.logout') }}" class="d-inline">@csrf
            <button class="btn btn-outline-secondary btn-sm">Logout</button>
          </form>
        @else
          <a class="btn btn-outline-primary btn-sm" href="{{ route('admin.login') }}">Login</a>
        @endif
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container mb-5">
    @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
      <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    @yield('content')
  </div>

  <!-- Footer -->
  <footer class="text-center">
    <div class="container">
      <p class="mb-1">&copy; {{ date('Y') }} <strong>Techno Bridge CMS</strong>. All rights reserved.</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
