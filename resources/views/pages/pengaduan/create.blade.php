@extends('layouts.app')

@section('title', 'Ajukan Pengaduan')

@section('content')
<h2 class="mb-4" style="color: #000000; font-size: 24px; 
    text-align: center; font-family: 'Poppins', 
    sans-serif; margin-top: 30px;">Silahkan Ajukan Pengaduan Anda!</h2>

    <div class="form-card">
        <div class="form-header">
        </div>

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
                <label for="laporan" class="form-label">Laporan Anda</label>
                <textarea class="form-control" id="laporan" name="laporan" rows="5" placeholder="Tulis laporan Anda di sini..." required></textarea>
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
        </form>
    </div>
@endsection