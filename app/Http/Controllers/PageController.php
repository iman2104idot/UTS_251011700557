<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    // Menampilkan halaman Beranda
    public function home()
    {
        return view('pages.home');
    }
}
