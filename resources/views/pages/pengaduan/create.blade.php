@extends('layouts.app')

@section('title', 'Ajukan Pengaduan')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4" style="color: #000000; font-size: 24px; text-align: center; font-family: 'Poppins', sans-serif;">
        Silahkan Ajukan Pengaduan Anda!
    </h2>

    <div class="form-card">
        <div class="form-header"></div>

        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <form action="{{ route('pengaduan.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">

                <!-- Nama Masyarakat -->
                <div class="mb-3">
                    <label for="nama">Nama Anda</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>

                <!-- No Telepon Masyarakat -->
                <div class="mb-3">
                    <label for="no_telepon">No Telepon Anda</label>
                    <input type="text" class="form-control" id="no_telepon" name="no_telepon" required>
                </div>

                <!-- Alamat -->
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat Anda</label>
                    <textarea class="form-control" id="alamat" name="alamat" rows="1" required></textarea>
                </div>

                <!-- Laporan -->
                <div class="mb-3">
                    <label for="isi_pengaduan" class="form-label">Laporan Anda</label>
                    <textarea class="form-control" id="isi_pengaduan" name="isi_pengaduan" rows="5" placeholder="Tulis laporan Anda di sini..." required></textarea>
                </div>

                <!-- Foto -->
                <div class="mb-3">
                    <label for="foto" class="form-label">Lampirkan Foto</label>
                    <input class="form-control" type="file" id="foto" name="foto" accept="image/*">
                    <small class="form-text text-muted">Format: jpg, jpeg, png, gif. Ukuran maksimum: 2MB.</small>
                </div>

                <!-- Submit Button -->
                <div class="mb-3">
                    <button type="submit" class="btn-submit">Kirim Pengaduan</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('tambahanCSS')
<style>
    body {
        background-color: #eff6ff;
        font-family: 'Arial', sans-serif;
        color: #212529;
        margin: 0;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    .content {
        flex: 1;
    }

    footer {
        text-align: center;
        padding: 10px 0;
        background-color: #ffffff;
        color: #212529;
        width: 100%;
        border-top: 1px solid #dee2e6;
        margin-top: auto;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .form-card {
        background-color: #ffffff;
        border: 1px solid #ced4da;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }

    .btn-submit {
        background-color: #49b5e7;
        color: #fff;
        padding: 12px 15px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
    }

    .btn-submit:hover {
        background-color: #0056b3;
    }
</style>
@endsection

@section('tambahanJS')
<script>
    // Tambahkan script tambahan jika diperlukan
</script>
@endsection
