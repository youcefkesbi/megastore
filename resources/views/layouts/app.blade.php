<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    @livewireStyles
</head>
<body class="bg-light" style="font-family: Figtree, system-ui, -apple-system, Segoe UI, Roboto, sans-serif;">
    <nav class="navbar navbar-expand-lg bg-white border-bottom">
        <div class="container">
            <a class="navbar-brand fw-semibold" href="{{ route('dashboard') }}">{{ config('app.name', 'MegaStore') }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNavbar">
                @auth
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('shop') }}">Shop</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('cart.view') }}">Cart</a></li>
                    </ul>

                    <div class="d-flex align-items-center gap-2">
                        <a href="{{ route('profile.show') }}" class="btn btn-sm btn-outline-secondary">Profile</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-dark">Logout</button>
                        </form>
                    </div>
                @else
                    <div class="ms-auto d-flex gap-2">
                        <a href="{{ route('login') }}" class="btn btn-sm btn-outline-secondary">Login</a>
                        <a href="{{ route('register') }}" class="btn btn-sm btn-dark">Register</a>
                    </div>
                @endauth
            </div>
        </div>
    </nav>

    @isset($header)
        <header class="bg-white border-bottom">
            <div class="container py-3">
                {{ $header }}
            </div>
        </header>
    @endisset

    <main class="py-4">
        @if (session('success'))
            <div class="container mb-3">
                <div class="alert alert-success mb-0">{{ session('success') }}</div>
            </div>
        @endif

        @if (session('error'))
            <div class="container mb-3">
                <div class="alert alert-danger mb-0">{{ session('error') }}</div>
            </div>
        @endif

        @yield('content')

        @isset($slot)
            <div class="container">
                {{ $slot }}
            </div>
        @endisset
    </main>

    @stack('modals')
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>