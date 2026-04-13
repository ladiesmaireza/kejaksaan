@extends('layouts.app')

@section('content')

<div class="container mt-5">

    <!-- JUDUL INSTANSI -->
    <div class="text-center mb-4">

        <h1 style="color:#2e7d32; font-weight:bold;">
            KEJAKSAAN NEGERI TANAH DATAR
        </h1>

        <p class="text-muted">
            Website Resmi Kejaksaan Negeri Tanah Datar
        </p>

    </div>

    <!-- PROFIL SINGKAT -->
    <div class="card shadow-sm p-4 mb-5">

        <h4 style="color:#2e7d32; font-weight:bold;">
            Selamat Datang
        </h4>

        <p style="text-align:justify; line-height:1.9;">
            Kejaksaan Negeri Tanah Datar merupakan lembaga penegak hukum yang memiliki tugas dan wewenang
            dalam bidang penuntutan, pelaksanaan putusan pengadilan, serta pelayanan hukum kepada masyarakat.
            Website ini hadir sebagai sarana informasi publik, transparansi instansi, serta pelayanan masyarakat
            secara digital.
        </p>

    </div>

    <!-- MENU INFORMASI UTAMA (RAPI & FORMAL) -->
    <div class="row mb-4">

        <div class="col-md-4 mb-3">
            <div class="card shadow-sm p-3 h-100">
                <h5>📢 Berita Kegiatan</h5>
                <p class="text-muted">Informasi kegiatan dan publikasi resmi</p>
                <a href="/berita" class="btn btn-outline-success btn-sm">Lihat</a>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card shadow-sm p-3 h-100">
                <h5>🏛️ Profil Kejaksaan</h5>
                <p class="text-muted">Pengertian, visi misi, dan struktur organisasi</p>
                <a href="/pengertian-kejaksaan" class="btn btn-outline-success btn-sm">Lihat</a>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card shadow-sm p-3 h-100">
                <h5>📍 Layanan Publik</h5>
                <p class="text-muted">Informasi layanan dan pengaduan masyarakat</p>
                <a href="/layanan-publik" class="btn btn-outline-success btn-sm">Lihat</a>
            </div>
        </div>

    </div>

    <!-- BERITA TERBARU -->
    <h3 style="color:#2e7d32; font-weight:bold; margin-bottom:20px;">
        Berita Terbaru
    </h3>

    <div class="row">

        @forelse ($berita as $item)

            <div class="col-md-4 mb-4">

                <div class="card shadow-sm h-100">

                    <img src="{{ asset('images/' . $item->gambar) }}"
                         class="card-img-top"
                         style="height:200px; object-fit:cover;">

                    <div class="card-body">

                        <h5>{{ $item->judul }}</h5>

                        <p class="text-muted">
                            {{ \Illuminate\Support\Str::limit($item->isi, 120) }}
                        </p>

                        <small class="text-secondary">
                            📅 {{ $item->created_at->format('d M Y') }}
                        </small>

                        <br>

                        <a href="/berita/{{ $item->id }}" class="btn btn-success btn-sm mt-2">
                            Baca Selengkapnya
                        </a>

                    </div>

                </div>

            </div>

        @empty

            <div class="col-12">
                <div class="alert alert-warning">
                    Belum ada berita tersedia.
                </div>
            </div>

        @endforelse

    </div>

</div>

@endsection
