@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

{{-- HERO SECTION --}}
<section class="cine-hero position-relative overflow-hidden mb-5">
    <div class="row align-items-center position-relative">

        <div class="col-lg-8 py-4 py-lg-5">

            <span class="badge bg-danger px-3 py-2 mb-4">
                WELCOME TO CINESCOPE
            </span>

            <h1 class="display-3 fw-bold mb-4">
                Discover Movies.
                <br>
                <span class="text-danger">Explore Stories.</span>
            </h1>

            <p class="lead mb-4" style="max-width: 620px;">
                Temukan film menarik, jelajahi berbagai genre,
                dan temukan cerita yang sesuai dengan seleramu.
                Semua dalam satu tempat.
            </p>

            <div class="d-flex flex-wrap gap-3">

                <a href="{{ route('movies.index') }}"
                   class="btn btn-danger btn-lg px-4">
                    Jelajahi Film
                    <span class="ms-2">&rarr;</span>
                </a>

                <a href="{{ route('genres.index') }}"
                   class="btn btn-outline-secondary btn-lg px-4">
                    Jelajahi Genre
                </a>

            </div>

        </div>

        <div class="col-lg-4 text-center py-4">

            <div class="cine-hero-icon mb-3">
                <span>🎬</span>
            </div>

            <h2 class="fw-bold mb-2">
                <span class="text-danger">CINE</span>SCOPE
            </h2>

            <p class="text-secondary mb-0">
                Your Movie Discovery Platform
            </p>

            <div class="mt-4">
                <span class="badge border border-secondary text-light px-3 py-2">
                    DISCOVER · WATCH · ENJOY
                </span>
            </div>

        </div>

    </div>
</section>


{{-- FITUR WEBSITE --}}
<section class="mb-5">

    <div class="text-center mb-5">

        <span class="text-danger fw-bold small">
            EXPLORE CINESCOPE
        </span>

        <h2 class="fw-bold mt-2 mb-3">
            Jelajahi Dunia Film
        </h2>

        <p class="text-secondary mx-auto" style="max-width: 600px;">
            Temukan informasi film, jelajahi berbagai genre,
            dan kenali cerita menarik dari setiap film.
        </p>

    </div>

    <div class="row g-4">

        {{-- Katalog Film --}}
        <div class="col-md-4">

            <div class="card h-100">

                <div class="card-body p-4">

                    <div class="cine-feature-icon mb-4">
                        🎥
                    </div>

                    <h4 class="fw-bold mb-3">
                        Katalog Film
                    </h4>

                    <p class="text-secondary mb-4">
                        Temukan koleksi film beserta informasi
                        judul, genre, tahun rilis, dan durasinya.
                    </p>

                    <a href="{{ route('movies.index') }}"
                       class="text-danger text-decoration-none fw-bold mt-auto">
                        Lihat Katalog &rarr;
                    </a>

                </div>

            </div>

        </div>


        {{-- Genre --}}
        <div class="col-md-4">

            <div class="card h-100">

                <div class="card-body p-4">

                    <div class="cine-feature-icon mb-4">
                        🍿
                    </div>

                    <h4 class="fw-bold mb-3">
                        Beragam Genre
                    </h4>

                    <p class="text-secondary mb-4">
                        Jelajahi berbagai kategori film dan
                        pilih genre yang sesuai dengan seleramu.
                    </p>

                    <a href="{{ route('genres.index') }}"
                       class="text-danger text-decoration-none fw-bold mt-auto">
                        Jelajahi Genre &rarr;
                    </a>

                </div>

            </div>

        </div>


        {{-- Detail Film --}}
        <div class="col-md-4">

            <div class="card h-100">

                <div class="card-body p-4">

                    <div class="cine-feature-icon mb-4">
                        📖
                    </div>

                    <h4 class="fw-bold mb-3">
                        Detail Film
                    </h4>

                    <p class="text-secondary mb-4">
                        Baca sinopsis dan kenali informasi
                        lengkap dari film yang ingin kamu ketahui.
                    </p>

                    <a href="{{ route('movies.index') }}"
                       class="text-danger text-decoration-none fw-bold mt-auto">
                        Temukan Film &rarr;
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- CALL TO ACTION --}}
<section class="cine-cta text-center p-4 p-md-5 mb-4">

    <span class="text-danger fw-bold small">
        YOUR NEXT MOVIE STARTS HERE
    </span>

    <h2 class="fw-bold mt-3 mb-3">
        Temukan Film Favoritmu
    </h2>

    <p class="text-secondary mx-auto mb-4"
       style="max-width: 600px;">
        Ada banyak cerita untuk ditemukan.
        Mulai perjalananmu menjelajahi koleksi film CineScope sekarang.
    </p>

    <a href="{{ route('movies.index') }}"
       class="btn btn-danger btn-lg px-4">
        Lihat Semua Film &rarr;
    </a>

</section>

@endsection
