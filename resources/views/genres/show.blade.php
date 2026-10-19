@extends('layouts.app')

@section('title', 'Genre ' . $genre)

@section('content')

{{-- Header Genre --}}
<div class="genre-movies-header">

    <a href="{{ route('genres.index') }}" class="genre-back-link">
        &larr; Kembali ke Genre
    </a>

    <div class="genre-movies-heading">
        <div>
            <span class="genre-label">EXPLORE COLLECTION</span>

            <h1 class="genre-heading">
                Film <span>{{ $genre }}</span>
            </h1>

            <p class="genre-description">
                Temukan koleksi film bergenre {{ $genre }} dan pilih
                film yang ingin kamu tonton.
            </p>
        </div>

        <div class="genre-total-badge">
            <span>{{ $movies->total() }}</span>
            <small>Film Tersedia</small>
        </div>
    </div>

</div>

{{-- Daftar Film --}}
<div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">

    @forelse ($movies as $movie)

        <div class="col">
            <div class="genre-movie-card h-100">

                {{-- Poster --}}
                <div class="genre-movie-poster">
                    <img
                        src="{{ asset('assets/images/' . $movie->poster) }}"
                        alt="Poster {{ $movie->title }}"
                        loading="lazy"
                    >

                    <span class="genre-movie-year">
                        {{ $movie->release_year }}
                    </span>
                </div>

                {{-- Informasi Film --}}
                <div class="genre-movie-body">

                    <span class="genre-movie-category">
                        {{ $movie->genre }}
                    </span>

                    <h5 class="genre-movie-title">
                        {{ $movie->title }}
                    </h5>

                    <p class="genre-movie-duration">
                        Durasi {{ $movie->duration }} menit
                    </p>

                    <a
                        href="{{ route('movies.show', $movie->id) }}"
                        class="btn genre-movie-button"
                    >
                        Lihat Detail <span>&rarr;</span>
                    </a>

                </div>
            </div>
        </div>

    @empty

        <div class="col-12">
            <div class="genre-empty">
                <div class="genre-empty-icon">🎞️</div>

                <h5>Film Belum Tersedia</h5>

                <p>
                    Belum ada film untuk genre {{ $genre }}.
                </p>

                <a href="{{ route('genres.index') }}"
                   class="btn btn-danger mt-3">
                    Pilih Genre Lain
                </a>
            </div>
        </div>

    @endforelse

</div>

{{-- Pagination --}}
@if ($movies->hasPages())
    <div class="d-flex justify-content-center mt-5">
        {{ $movies->links() }}
    </div>
@endif

@endsection