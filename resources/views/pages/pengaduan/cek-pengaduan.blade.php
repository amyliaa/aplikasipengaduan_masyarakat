@extends('layouts.app')

@section('title', 'Cek Pengaduan')

@section('content')
<div class="container py-5">
    <h2 class="text-center mb-4">Cek Status Pengaduan Anda</h2>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="form-card">
                <form action="{{ route('pengaduan.search') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="kode_pengaduan" class="form-label">Kode Pengaduan</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="kode_pengaduan" name="kode_pengaduan" placeholder="Masukkan Kode Pengaduan Anda" required>
                            <span class="input-group-text">
                                <i class="bi bi-search"></i> 
                            </span>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-submit w-100">
                        <i class="bi bi-search"></i> Cek Pengaduan
                    </button>
                </form>
                @if(session('error'))
                    <div class="alert alert-danger mt-3">
                        {{ session('error') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
