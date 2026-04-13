<?php

namespace App\Http\Controllers;

use App\Models\Berita;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::latest()->get();
        return view('berita', compact('berita'));
    }

    public function show($id)
    {
        $berita = \App\Models\Berita::findOrFail($id);
        return view('detail-berita', compact('berita'));
    }
}
