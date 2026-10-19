@extends('layouts.app')

@section('title', $movie->title)

@section('content')

<div class="movie-detail-container">

    {{-- Tombol kembali --}}
    <a href="{{ route('movies.index') }}" class="btn btn-outline-danger mb-4">
        &larr; Kembali ke Daftar Film
    </a>

    {{-- Detail film --}}
    <div class="movie-detail-card">

        <div class="row g-0">

            {{-- Poster film --}}
            <div class="col-md-4">
                <div class="movie-detail-poster">
                    <img
                        src="{{ asset('assets/images/' . $movie->poster) }}"
                        alt="Poster {{ $movie->title }}"
                        class="img-fluid"
                    >
                </div>
            </div>

            {{-- Informasi film --}}
            <div class="col-md-8">
                <div class="movie-detail-content">

                    <span class="movie-detail-label">
                        DETAIL FILM
                    </span>

                    <h1 class="movie-detail-title">
                        {{ $movie->title }}
                    </h1>

                    <span class="badge movie-detail-genre">
                        {{ $movie->genre }}
                    </span>

                    {{-- Informasi utama --}}
                    <div class="movie-info-grid">

                        <div class="movie-info-item">
                            <span class="movie-info-label">TAHUN RILIS</span>
                            <span class="movie-info-value">
                                {{ $movie->release_year }}
                            </span>
                        </div>

                        <div class="movie-info-item">
                            <span class="movie-info-label">DURASI</span>
                            <span class="movie-info-value">
                                {{ $movie->duration }} menit
                            </span>
                        </div>

                        <div class="movie-info-item">
                            <span class="movie-info-label">GENRE</span>
                            <span class="movie-info-value">
                                {{ $movie->genre }}
                            </span>
                        </div>

                    </div>

                    {{-- Sinopsis --}}
                    <div class="movie-synopsis">
                        <h4>Sinopsis</h4>

                        <p>
                            {{ $movie->description ?: 'Sinopsis film belum tersedia.' }}
                        </p>
                    </div>

                </div>
            </div>

        </div>
    </div>

</div>

@endsection