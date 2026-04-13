<?php

use Illuminate\Support\Facades\Route;
use App\Models\Berita;

Route::get('/', function () {
    $berita = Berita::all();
    return view('home', compact('berita'));
});


Route::get('/pengertian-kejaksaan', function () {
    return view('pengertian');
});

Route::get('/tentang-kami', function () {
    return view('tentang');
});

Route::get('/tugas-wewenang', function () {
    return view('tugas');
});

Route::get('/visi-misi', function () {
    return view('visi');
});

Route::get('/struktur-organisasi', function () {
    return view('struktur');
});

Route::get('/layanan-publik', function () {
    return view('layanan-publik');
});

Route::get('/berita', function () {
    $berita = Berita::latest()->get();
    return view('berita', compact('berita'));
});
