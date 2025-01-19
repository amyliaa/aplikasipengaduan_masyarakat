@extends('layouts.template')

@section('title', 'Detail Pengaduan')

@section('content')
<h1 class="h3 mb-4 text-gray-800 text-center">Detail Pengaduan</h1>

<div class="page-heading">

    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h6>Nama : {{ $data->masyarakat->nama }}</h6>
                        <h6 class="mt-4">No Telepon : {{ $data->masyarakat->no_telepon }}</h6>
                        <h6 class="mt-4">Tanggal :    {{ \Carbon\Carbon::parse($data->created_at)->translatedFormat('l, d F Y') }} </h6>
                        <h6 class="mt-4">Status : @if($data->status_pengaduan =='Belum diproses')
                            <td class="px-4 py-3 text-xs">
                                <span class="badge bg-danger">{{ $data->status_pengaduan }}</span>
                        </h6>
                        </td>
                        @elseif ($data->status_pengaduan =='Sedang diproses')
                        <td class="px-4 py-3 text-xs">
                            <span class="badge bg-warning">{{ $data->status_pengaduan }}</span></h6>
                        </td>
                        @else
                        <td class="px-4 py-3 text-xs">
                            <span class="badge bg-success">{{ $data->status_pengaduan }}</span></h6>
                        </td>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <!-- Titles for Foto and Keterangan -->
                        <div style="display: flex; justify-content: center; align-items: center;">
                            <div style="width: 300px; text-align: center;"> <!-- Updated width for larger image -->
                                <h6>Foto</h6>
                            </div>
                            <div style="flex-grow: 1; padding-left: 20px; text-align: center;">
                                <h6>Keterangan</h6>
                            </div>
                        </div>

                        <!-- Content (Image and Description) -->
                        <div style="display: flex; justify-content: center; align-items: center;">
                            <div style="width: 300px; text-align: center;"> <!-- Updated width for larger image -->
                                <img src="{{ asset('storage/' . $data->foto) }}" alt="Gambar Sampah" style="max-width: 300px;">
                            </div>
                            <div style="flex-grow: 1; padding-left: 20px; text-align: center;">
                                {{ $data->isi_pengaduan }}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body d-flex justify-content-center align-items-center flex-column" style="min-height: 15px;">
                        <h6 style="margin-bottom: 20px;">Tanggapan</h6>
                        <p> @if (empty($data->tanggapan_user))
                            Belum ada tanggapan
                            @else
                            {{ $data->tanggapan_user }}
                            @endif
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="buttons text-center">
        <a href="{{ route('pages.user.pengaduan.cetak', $data->id) }}" class="btn btn-primary mb-3">Export ke PDF</a> <br>
        <a href="{{ route('pengaduan.tanggapi', $data->id) }} " class="btn btn-primary">Berikan Tanggapan</a>
    </div>

    @endsection

    @section('tambahanJS')
    <script src="{{ asset('dist/assetsstatic/js/components/dark.js') }}"></script>
    <script src="{{ asset('dist/assetsextensions/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('dist/assetscompiled/js/app.js') }}"></script>
    @endsection