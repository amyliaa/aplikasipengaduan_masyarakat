@extends('layouts.template')
@section('title', 'Tanggapan')
@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800 text-center">Berikan Tanggapan</h1>

<div class="card">
    <div class="card-body">
        <form action="{{ route('pengaduan.kirimTanggapan', $pengaduan->id) }}" method="POST">
            @csrf
            <!-- Tanggapan -->
            <div class="mb-3">
                <label for="tanggapan" class="form-label" style="font-weight: bold;">Tanggapan Anda</label>
                <textarea class="form-control" id="tanggapan_user" name="tanggapan_user" rows="5" required></textarea>
            </div>

            <div class="mb-3">
                <h6>Status</h6>
                <fieldset class="form-group">
                    <select class="form-select" id="status_pengaduan" name="status_pengaduan" required>
                        <option value="Belum diproses">Belum diproses</option>
                        <option value="Sedang diproses">Sedang diproses</option>
                        <option value="Selesai">Selesai</option>
                    </select>
                </fieldset>
            </div>

            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

            <div class="text-end mt-3">
                <a href="default-page-url"  onclick="history.back(); return false;" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Batal
                </a>
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Tanggapi
                </button>
            </div>
        </form>
    </div>
</div>

@endsection
@if (session('success'))
<div class="custom-toast">
    <i class="fas fa-check-circle"></i>
    <span>{{ session('success') }}</span>
    <button type="button" class="close-btn" onclick="this.parentElement.style.display='none';">&times;</button>
</div>
@endif

@section('footer')
@endsection