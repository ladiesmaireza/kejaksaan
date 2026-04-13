@extends('layouts.app')

@section('content')
    <div class="container mt-5">

        <!-- Judul -->
        <h3 style="color:#2e7d32; font-weight:bold; margin-bottom:30px;">
            Hubungi Kami
        </h3>

        <!-- LAPORAN PENGADUAN -->
        <div class="card p-4 mb-4 shadow-sm">
            <h4>Laporan Pengaduan Masyarakat</h4>
            <p>Klik tombol di bawah untuk mengisi laporan.</p>

            <button class="btn btn-success" onclick="toggleForm()">
                Isi Pengaduan
            </button>

            <!-- GForm disembunyikan dulu -->
            <div id="gform" style="display:none; margin-top:20px;">
                <iframe
                    src="https://docs.google.com/forms/d/e/1FAIpQLSdDjZ86NWYPswcQHTzVX-p5j2JlZvjyexOARkKEBXPiX3-wFw/viewform?embedded=true"
                    width="100%" height="600" style="border:none;">
                </iframe>
            </div>
        </div>

        <!-- INSTAGRAM -->
        <div class="card p-4 mb-4 shadow-sm">
            <h4>Instagram</h4>
            <a href="https://instagram.com/kejari_tanahdatar" target="_blank" class="btn btn-success">
                @kejari_tanahdatar
            </a>
        </div>

        <!-- WEBSITE -->
        <div class="card p-4 shadow-sm">
            <h4>Website</h4>
            <a href="/" class="btn btn-success">
                Kunjungi Website
            </a>
        </div>

    </div>

    <!-- SCRIPT -->
    <script>
        function toggleForm() {
            var form = document.getElementById("gform");
            form.style.display = (form.style.display === "none") ? "block" : "none";
        }
    </script>
@endsection
