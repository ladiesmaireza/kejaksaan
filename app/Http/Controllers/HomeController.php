<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $berita = [
            [
                'judul' => 'Kegiatan Sosialisasi Hukum',
                'gambar' => 'kejaksaan.jpg',
                'deskripsi' => 'Kegiatan sosialisasi hukum kepada masyarakat.'
            ],
            [
                'judul' => 'Pelayanan Publik',
                'gambar' => 'kejaksaan.jpg',
                'deskripsi' => 'Pelayanan publik yang cepat dan transparan.'
            ]
        ];

        return view('home', compact('berita'));
    }
}
