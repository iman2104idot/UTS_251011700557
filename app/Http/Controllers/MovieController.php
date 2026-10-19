<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class MovieController extends Controller
{
    // Menampilkan katalog film dan fitur pencarian
    public function index()
    {
        $search = request('search');

        $movies = Movie::when($search, function ($query, $search) {
            $query->where('title', 'like', '%' . $search . '%');
        })
            ->orderBy('title')
            ->paginate(6)
            ->withQueryString();

        return view('movies.index', compact('movies', 'search'));
    }

    // Menampilkan detail film
    public function show($id)
    {
        $movie = Movie::findOrFail($id);

        return view('movies.show', compact('movie'));
    }

    // Menampilkan daftar genre film
    public function genres()
    {
        $genres = Movie::select('genre')
            ->distinct()
            ->orderBy('genre')
            ->pluck('genre');

        return view('genres.index', compact('genres'));
    }

    // Menampilkan film berdasarkan genre
    public function genreShow($genre)
    {
        $movies = Movie::where('genre', $genre)
            ->orderBy('title')
            ->paginate(6)
            ->withQueryString();

        return view('genres.show', compact('movies', 'genre'));
    }
}
