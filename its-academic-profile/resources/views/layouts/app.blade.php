<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ITS Academic Profile')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <header class="top-nav">
        <div class="nav-container">
            <a class="brand-logo" href="{{ route('home') }}">
                <svg class="brand-icon" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="2.5">
                    <polygon points="16,3 29,10 29,22 16,29 3,22 3,10" />
                    <circle cx="16" cy="16" r="4" fill="currentColor"/>
                </svg>
                <span>ITS Academic Profile</span>
            </a>

            <ul class="nav-menu">
                <li><a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
                <li><a class="{{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a></li>
                <li><a class="{{ request()->routeIs('project') ? 'active' : '' }}" href="{{ route('project') }}">Project</a></li>
                <li><a class="{{ request()->routeIs('hitung') ? 'active' : '' }}" href="{{ route('hitung', [10, 5, 'kali']) }}">Kalkulator</a></li>
            </ul>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="section-container text-center">
            &copy; {{ config('profile.year') }} {{ config('profile.student.name') }} &bull; {{ config('profile.department') }}
        </div>
    </footer>

</body>
</html>
