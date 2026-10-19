@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')

{{-- Hero Tentang Kami --}}
<section class="about-hero">

    <div class="about-hero-content">
        <span class="about-label">GET TO KNOW US</span>

        <h1 class="about-title">
            Tentang <span>CineScope</span>
        </h1>

        <p class="about-tagline">
            Discover Movies. Explore Stories.
        </p>

        <p class="about-description">
            Menjelajahi dunia film menjadi lebih mudah.
            Temukan berbagai cerita, genre, dan pengalaman sinematik
            dalam satu tempat.
        </p>

        <a href="{{ route('movies.index') }}" class="about-button">
            Jelajahi Film <span>&rarr;</span>
        </a>
    </div>

    <div class="about-hero-visual">
        <div class="about-film-icon">🎬</div>
        <span class="about-visual-text">YOUR MOVIE DISCOVERY</span>
    </div>

</section>

{{-- Informasi CineScope --}}
<section class="about-section">

    <div class="about-section-heading">
        <span class="about-label">WHO WE ARE</span>
        <h2>Mengenal <span>CineScope</span></h2>
    </div>

    <div class="row g-4">

        <div class="col-md-6">
            <div class="about-info-card h-100">
                <div class="about-info-icon">🎥</div>

                <h4>Platform Katalog Film</h4>

                <p>
                    CineScope adalah website katalog film yang membantu
                    pengunjung menemukan berbagai film berdasarkan genre,
                    tahun rilis, durasi, dan informasi sinopsis.
                </p>
            </div>
        </div>

        <div class="col-md-6">
            <div class="about-info-card h-100">
                <div class="about-info-icon">✨</div>

                <h4>Pengalaman Menjelajah</h4>

                <p>
                    CineScope dirancang dengan tampilan yang sederhana,
                    modern, dan mudah digunakan agar pengunjung dapat
                    menjelajahi koleksi film dengan nyaman.
                </p>
            </div>
        </div>

    </div>

</section>

{{-- Penutup --}}
<section class="about-bottom">
    <span class="about-label">START EXPLORING</span>

    <h2>Temukan Cerita Favoritmu</h2>

    <p>
        Setiap film memiliki cerita. Temukan film berikutnya
        yang ingin kamu tonton bersama CineScope.
    </p>

    <a href="{{ route('movies.index') }}" class="about-button">
        Lihat Koleksi Film <span>&rarr;</span>
    </a>
</section>

@endsection