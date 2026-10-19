@extends('layouts.app')

@section('title', 'Katalog Film')

@section('content')

{{-- HEADER KATALOG --}}
<section class="movie-header mb-4">
    <div>
        <span class="text-danger fw-bold small">
            CINESCOPE COLLECTION
        </span>

        <h1 class="fw-bold mt-2 mb-2">
            Jelajahi Dunia Film
        </h1>

        <p class="text-secondary mb-0">
            Temukan cerita menarik dari berbagai genre film favoritmu.
        </p>
    </div>

    <div class="movie-total mt-3 mt-md-0">
        <span class="movie-total-number">
            {{ $movies->total() }}
        </span>

        <span class="movie-total-label">
            Film Tersedia
        </span>
    </div>
</section>


{{-- PENCARIAN FILM --}}
<section class="movie-search mb-4">
    <form action="{{ route('movies.index') }}" method="GET">

        <label for="search" class="form-label fw-semibold">
            Cari Film Favoritmu
        </label>

        <div class="input-group">
            <input
                type="text"
                id="search"
                name="search"
                class="form-control"
                placeholder="Masukkan judul film..."
                value="{{ $search ?? '' }}"
            >

            <button type="submit" class="btn btn-danger px-4">
                Cari Film
            </button>

            @if (!empty($search))
                <a
                    href="{{ route('movies.index') }}"
                    class="btn btn-outline-secondary d-flex align-items-center"
                >
                    Reset
                </a>
            @endif
        </div>

    </form>
</section>


{{-- INFORMASI HASIL PENCARIAN --}}
@if (!empty($search))
    <div class="search-information mb-4">
        <span class="text-secondary">
            Hasil pencarian untuk
        </span>

        <strong class="text-white">
            "{{ $search }}"
        </strong>

        <span class="badge bg-danger ms-2">
            {{ $movies->total() }} hasil
        </span>
    </div>
@endif


{{-- DAFTAR FILM --}}
<div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">

    @forelse ($movies as $movie)

        <div class="col">
            <article class="card movie-card h-100">

                {{-- POSTER FILM --}}
                <div class="movie-poster-wrapper">
                    <img
                        src="{{ asset('assets/images/' . $movie->poster) }}"
                        class="card-img-top movie-poster"
                        alt="Poster {{ $movie->title }}"
                        loading="lazy"
                    >
                </div>

                {{-- INFORMASI FILM --}}
                <div class="card-body d-flex flex-column p-4">

                    {{-- TAHUN FILM --}}
                    <span class="movie-year-badge mb-3">
                        {{ $movie->release_year }}
                    </span>

                    {{-- GENRE FILM --}}
                    <span class="movie-genre mb-2">
                        {{ $movie->genre }}
                    </span>

                    {{-- JUDUL FILM --}}
                    <h5 class="card-title fw-bold mb-3">
                        {{ $movie->title }}
                    </h5>

                    {{-- DURASI FILM --}}
                    <div class="movie-duration mb-4">
                        <span class="me-2">◷</span>
                        {{ $movie->duration }} menit
                    </div>

                    {{-- TOMBOL DETAIL --}}
                    <a
                        href="{{ route('movies.show', $movie->id) }}"
                        class="btn btn-danger w-100 mt-auto"
                    >
                        Lihat Detail
                        <span class="ms-2">&rarr;</span>
                    </a>

                </div>

            </article>
        </div>

    @empty

        {{-- JIKA FILM TIDAK DITEMUKAN --}}
        <div class="col-12">
            <div class="movie-empty-state text-center p-5">

                <div class="display-4 mb-3">🎬</div>

                <h4 class="fw-bold mb-3">
                    Film Tidak Ditemukan
                </h4>

                <p class="text-secondary mb-4">
                    @if (!empty($search))
                        Tidak ada film dengan judul "{{ $search }}".
                        Coba gunakan kata kunci lain.
                    @else
                        Belum ada data film yang tersedia.
                    @endif
                </p>

                @if (!empty($search))
                    <a
                        href="{{ route('movies.index') }}"
                        class="btn btn-danger px-4"
                    >
                        Lihat Semua Film
                    </a>
                @endif

            </div>
        </div>

    @endforelse

</div>


{{-- PAGINATION --}}
@if ($movies->hasPages())
    <div class="movie-pagination mt-5">

        <p class="text-secondary small mb-3">
            Menampilkan {{ $movies->firstItem() }}–{{ $movies->lastItem() }}
            dari {{ $movies->total() }} film
        </p>

        <div class="d-flex justify-content-center">
            {{ $movies->links() }}
        </div>

    </div>
@endif

@endsection