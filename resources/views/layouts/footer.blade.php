<footer class="cine-footer mt-auto">

    <div class="container">

        <div class="row g-4 py-5">

            {{-- Identitas --}}
            <div class="col-md-6 col-lg-5">

                <a href="{{ route('home') }}" class="cine-footer-brand">
                    <span class="cine-footer-icon">▶</span>
                    Cine<span>Scope</span>
                </a>

                <p class="cine-footer-description mt-3">
                    Discover Movies. Explore Stories.
                    Temukan berbagai film, jelajahi genre,
                    dan temukan cerita favoritmu bersama CineScope.
                </p>

            </div>

            {{-- Navigasi --}}
            <div class="col-6 col-md-3 col-lg-3">

                <h5 class="cine-footer-heading">Navigasi</h5>

                <ul class="cine-footer-links">
                    <li>
                        <a href="{{ route('home') }}">Beranda</a>
                    </li>
                    <li>
                        <a href="{{ route('movies.index') }}">Katalog Film</a>
                    </li>
                    <li>
                        <a href="{{ route('genres.index') }}">Genre Film</a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}">Tentang Kami</a>
                    </li>
                </ul>

            </div>

            {{-- Tentang --}}
            <div class="col-6 col-md-3 col-lg-4">

                <h5 class="cine-footer-heading">Tentang CineScope</h5>

                <p class="cine-footer-description">
                    Platform katalog film yang dirancang untuk
                    membantu pengunjung menemukan informasi film
                    dengan mudah dan nyaman.
                </p>

            </div>

        </div>

        {{-- Copyright --}}
        <div class="cine-footer-bottom">
            <p class="mb-0">
                &copy; {{ date('Y') }}
                <span>CineScope</span>.
                Semua hak dilindungi.
            </p>

            <p class="cine-footer-tagline mb-0">
                Made for Movie Lovers
            </p>
        </div>

    </div>

</footer>