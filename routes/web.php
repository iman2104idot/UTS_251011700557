<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\PageController;

// Beranda
Route::get('/', [PageController::class, 'home'])
    ->name('home');

// Katalog Film dan Pencarian
Route::get('/movies', [MovieController::class, 'index'])
    ->name('movies.index');

// Detail Film
Route::get('/movies/{id}', [MovieController::class, 'show'])
    ->name('movies.show');

// Daftar Genre
Route::get('/genres', [MovieController::class, 'genres'])
    ->name('genres.index');

// Film Berdasarkan Genre
Route::get('/genres/{genre}', [MovieController::class, 'genreShow'])
    ->name('genres.show');

// Tentang Kami
Route::get('/about', function () {
    return view('pages.about');
})->name('about');
