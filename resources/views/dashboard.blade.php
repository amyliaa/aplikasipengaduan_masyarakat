@extends('layouts.template')
@section('title', 'Dashboard')
@section('content')

<div class="page-heading">
                <h3>Dashboard</h3>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-15">
                        <div class="row">
                            <div class="col-4 col-lg-3 col-md-4">
                                <div class="card">
                                    <div class="card-body px-3 py-3">
                                        <div class="row">
                                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                                <div class="stats-icon purple mb-2">
                                                    <i class="iconly-boldShow"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                <h6 class="text-muted font-semibold">Jumlah Pengaduan</h6>
                                                <h6 class="font-extrabold mb-0">{{ $pengaduanCount }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4 col-lg-3 col-md-4">
                                <div class="card">
                                    <div class="card-body px-3 py-3">
                                        <div class="row">
                                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                                <div class="stats-icon blue mb-2">
                                                    <i class="iconly-boldProfile"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                <h6 class="text-muted font-semibold">Jumlah Petugas</h6>
                                                <h6 class="font-extrabold mb-0"> {{ $userCount }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4 col-lg-3 col-md-4">
                                <div class="card">
                                    <div class="card-body px-3 py-3">
                                        <div class="row">
                                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                                <div class="stats-icon mb-2" style="background-color: yellow;">
                                                    <i class="fas fa-clock"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                <h6 class="text-muted font-semibold">Belum Diproses</h6>
                                                <h6 class="font-extrabold mb-0">{{ $pendingCount }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4 col-lg-3 col-md-4">
                                <div class="card">
                                    <div class="card-body px-3 py-3">
                                        <div class="row">
                                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                                <div class="stats-icon red mb-2">
                                                    <i class="fas fa-spinner fa-spin"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                <h6 class="text-muted font-semibold">Sedang Diproses</h6>
                                                <h6 class="font-extrabold mb-0">{{ $processCount}}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4 col-lg-3 col-md-4">
                                <div class="card">
                                    <div class="card-body px-3 py-3">
                                        <div class="row">
                                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                                <div class="stats-icon green mb-2">
                                                    <i class="fas fa-check-circle"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                <h6 class="text-muted font-semibold">Selesai</h6>
                                                <h6 class="font-extrabold mb-0">{{ $successCount}}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>
            </div>

@endsection


