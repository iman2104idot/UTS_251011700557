<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'CineScope') | CineScope</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="cine-body">

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark cine-navbar sticky-top">
        <div class="container">

            {{-- Logo --}}
            <a class="navbar-brand cine-brand" href="{{ route('home') }}">
                <span class="cine-brand-icon">▶</span>
                Cine<span>Scope</span>
            </a>

            {{-- Tombol navigasi mobile --}}
            <button
                class="navbar-toggler cine-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarCineScope"
                aria-controls="navbarCineScope"
                aria-expanded="false"
                aria-label="Buka navigasi"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            {{-- Menu navigasi --}}
            <div class="collapse navbar-collapse" id="navbarCineScope">
                <ul class="navbar-nav ms-auto gap-lg-2">

                    <li class="nav-item">
                        <a class="nav-link cine-nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                           href="{{ route('home') }}">
                            Beranda
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link cine-nav-link {{ request()->routeIs('movies.*') ? 'active' : '' }}"
                           href="{{ route('movies.index') }}">
                            Katalog Film
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link cine-nav-link {{ request()->routeIs('genres.*') ? 'active' : '' }}"
                           href="{{ route('genres.index') }}">
                            Genre
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link cine-nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                           href="{{ route('about') }}">
                            Tentang Kami
                        </a>
                    </li>

                </ul>
            </div>

        </div>
    </nav>

    {{-- Konten halaman --}}
    <main class="cine-main container py-4 flex-grow-1">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('layouts.footer')

</body>
</html>