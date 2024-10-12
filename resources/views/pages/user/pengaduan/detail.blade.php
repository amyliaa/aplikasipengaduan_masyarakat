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
                        <h6>Nama : </h6>
                        <h6 class="mt-4">No Telepon : </h6>
                        <h6 class="mt-4">Tanggal : </h6>
                        <h6 class="mt-4">Status : </h6>
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
                                <img src="./assets/img/hero-img.png" alt="Gambar Sampah" style="max-width: 300px;">
                            </div>
                            <div style="flex-grow: 1; padding-left: 20px; text-align: center;">
                                Ada sampah menumpuk, tolong dibersihkan!
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
                        <p>Belum ada tanggapan</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="buttons text-center">
        <a href="#" class="btn btn-primary mb-3">Export ke PDF</a> <br>
        <a href="{{ route('user.tanggapanuser')}} " class="btn btn-primary">Berikan Tanggapan</a>
    </div>

    @endsection

    @section('tambahanJS')
    <script src="././dist/assetsstatic/js/components/dark.js"></script>
    <script src="././dist/assetsextensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="././dist/assetscompiled/js/app.js"></script>
    @endsection