@extends('layouts.app')

@section('title', 'Genre Film')

@section('content')

<div class="genre-header">
    <span class="genre-label">EXPLORE CATEGORIES</span>

    <h1 class="genre-heading">
        Jelajahi <span>Genre Film</span>
    </h1>

    <p class="genre-description">
        Temukan film menarik sesuai genre favoritmu.
        Pilih kategori dan mulai petualangan sinematikmu.
    </p>
</div>

<div class="row g-4">

    @forelse ($genres as $genre)

        <div class="col-6 col-md-4 col-lg-3">
            <a
                href="{{ route('genres.show', ['genre' => $genre]) }}"
                class="genre-link"
            >
                <div class="genre-card h-100">

                    <div class="genre-icon">
                        🎬
                    </div>

                    <h5 class="genre-card-title">
                        {{ $genre }}
                    </h5>

                    <span class="genre-explore">
                        Jelajahi Film <span>&rarr;</span>
                    </span>

                </div>
            </a>
        </div>

    @empty

        <div class="col-12">
            <div class="genre-empty">
                <div class="genre-empty-icon">🎞️</div>
                <h5>Belum Ada Genre</h5>
                <p>Genre film belum tersedia saat ini.</p>
            </div>
        </div>

    @endforelse

</div>

@endsection