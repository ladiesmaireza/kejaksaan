@extends('layouts.app')

@section('content')
    <div class="container mt-4">

        <!-- Judul -->
        <h2>{{ $berita->judul }}</h2>

        <!-- Tanggal -->
        <small class="text-muted">
            {{ $berita->created_at->format('d M Y') }}
        </small>

        <!-- Gambar -->
        <div class="mt-3">
            <img src="{{ asset('images/' . $berita->gambar) }}"
                style="width:100%; height:400px; object-fit:cover; border-radius:10px;">
        </div>

        <!-- Isi lengkap -->
        <div class="mt-4" style="text-align:justify;">
            <p style="line-height:1.8;">
                {{ $berita->isi }}
            </p>
        </div>

        <!-- Tombol kembali -->
        <a href="/berita" class="btn btn-secondary mt-3">
            ← Kembali ke Berita
        </a>

    </div>
@endsection
