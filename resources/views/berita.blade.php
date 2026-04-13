@extends('layouts.app')

@section('content')
    <div class="container mt-4">

        <h2 class="JudulBerita mb-4">Berita Kegiatan</h2>

        <div class="row">

            @foreach ($berita as $item)
                <div class="col-md-4">

                    <div class="card berita-card mb-4">

                        <!-- Gambar -->
                        <img src="{{ asset('images/' . $item->gambar) }}" class="card-img-top"
                            style="height:200px; object-fit:cover; width:100%;">

                        <!-- Isi -->
                        <div class="card-body">
                            <h5>{{ $item->judul }}</h5>

                            <p>
                                {{ \Illuminate\Support\Str::limit($item->isi, 100) }}
                            </p>

                            <small class="text-muted">
                                26 Februari 2026
                            </small>

                            <a href="/berita/{{ $item->id }}" class="btn btn-success btn-sm">
                                Baca Selengkapnya
                            </a>

                        </div>

                    </div>

                </div>
            @endforeach

        </div>

    </div>
@endsection
