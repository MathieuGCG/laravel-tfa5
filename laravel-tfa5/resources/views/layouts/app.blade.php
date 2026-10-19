<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel POS')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4 px-3">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('home') }}">Laravel POS</a>
            <div class="navbar-nav">
                <a class="nav-link" href="{{ route('home') }}">Home</a>
                <a class="nav-link" href="{{ route('about') }}">About</a>
                <a class="nav-link" href="{{ route('customers.index') }}">Customers</a>
                <a class="nav-link" href="{{ route('users.index') }}">Users</a>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>