<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Berita;

class BeritaSeeder extends Seeder
{
    public function run(): void
    {
        Berita::create([
            'judul' => 'Peningkatan Pemahaman Hukum melalui BIMTEK Jaksa Sahabat Guru',
            'isi' => 'Kejaksaan Negeri Tanah Datar mengadakan kegiatan BIMTEK Pelaksanaan Proyek Strategis dan Legal Assistance dalam program Jaksa Sahabat Guru.',
            'gambar' => 'berita1.jpg'
        ]);

        Berita::create([
            'judul' => 'Apel Pagi',
            'isi' => 'Apel pagi dilaksanakan di halaman kantor Kejaksaan Negeri Tanah Datar yang diikuti oleh seluruh pegawai.',
            'gambar' => 'berita2.jpeg'
        ]);
    }
}
