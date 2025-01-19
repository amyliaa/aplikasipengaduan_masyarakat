@extends('layouts.app')

@section('title', 'Pengaduan Terkirim')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 90vh;">
    <div class="p-5 rounded shadow-lg" style="max-width: 1500px; background: #ffffff; border-radius: 20px; border: none; margin: 40px 0;">
        <div class="text-center">
            <h2 class="text-success fw-bold mb-4" style="font-family: 'Poppins', sans-serif;">
                <i class="bi bi-check-circle-fill"></i> Pengaduan Terkirim!
            </h2>
            <p class="text-muted mb-3" style="font-size: 1rem;">Terima kasih telah mengirimkan pengaduan Anda. Berikut detail informasi pengaduan:</p>

            <div class="py-4 px-5 rounded mb-3" style="background-color: #f1f8e9; border: 1px solid #c8e6c9; border-radius: 12px;">
                <p class="mb-2 text-secondary" style="font-size: 0.9rem;">Kode Pengaduan:</p>
                <h4 class="fw-bold text-primary mb-0" style="font-family: 'Roboto Mono', monospace;">{{ $pengaduan->kode_pengaduan }}</h4>
            </div>

            <h5 class="text-dark mb-3" style="font-family: 'Poppins', sans-serif;">Scan QR Code untuk Detail</h5>
            <div class="d-flex justify-content-center mb-3">
                <div class="p-4 border rounded bg-white shadow-sm" style="border-radius: 12px; transition: transform 0.3s;">
                    {!! $qrCode !!}
                </div>
            </div>

            <a href="{{ route('pages.pengaduan.detail', $pengaduan->id) }}" class="btn btn-primary px-5 py-3 shadow-sm" style="border-radius: 50px; font-family: 'Poppins', sans-serif; font-size: 0.9rem; transition: background-color 0.3s;">
                <i class="bi bi-eye-fill"></i> Lihat Detail
            </a>

            <a href="{{ route('welcome') }}" class="btn btn-secondary px-5 py-3 shadow-sm" style="border-radius: 50px; font-family: 'Poppins', sans-serif; font-size: 0.9rem; transition: background-color 0.3s;">
                <i class="bi bi-arrow-left"></i> Kembali
            </a>

            
        </div>
    </div>
</div>


@endsection
