<?php

use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route untuk masyarakat mengajukan pengaduan (akses publik)
Route::get('/pengaduan/create', [PengaduanController::class, 'create'])->name('pengaduan.create');
Route::post('/pengaduan/store', [PengaduanController::class, 'store'])->name('pengaduan.store');

// Route untuk masyarakat mengecek status pengaduan (akses publik)
Route::get('/cek-pengaduan', [PengaduanController::class, 'showSearchForm'])->name('pengaduan.cek-pengaduan');
Route::post('/cek-pengaduan', [PengaduanController::class, 'searchPengaduan'])->name('pengaduan.search');
Route::get('/detailpengaduan', [PengaduanController::class, 'detail'])->name('pengaduan.detail');
// qr kode
Route::get('/pengaduan/qr/{id}', [PengaduanController::class, 'generateQrCode'])->name('pengaduan.success');
Route::get('/pengaduan/{id}', [PengaduanController::class, 'showForMasyarakat'])->name('pages.pengaduan.detail');


// Route yang membutuhkan login (akses terbatas)
Route::get('login', [LoginController::class, 'loginView'])->name('login');
Route::post('login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout'])->name('auth.logout');

// Menampilkan formulir tanggapan untuk Pengaduan 
Route::get('/pengaduan/{id}/tanggapi', [UserController::class, 'tanggapiPengaduan'])->name('pengaduan.tanggapi')->middleware('auth');
Route::post('/pengaduan/{id}/tanggapan', [UserController::class, 'kirimTanggapan'])->name('pengaduan.kirimTanggapan')->middleware('auth');

// Route untuk user
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::resource('/pengaduan', PengaduanController::class)->only(['index', 'edit', 'update', 'destroy'])->middleware('auth');
Route::resource('/user', UserController::class)->middleware('auth');
Route::resource('/masyarakat', MasyarakatController::class)->only(['index', 'destroy'])->names(['index' => 'user.masyarakat', 'destroy' => 'masyarakat.destroy' ])->middleware('auth');
Route::get('/laporan', [UserController::class, 'laporan'])->name('user.laporan')->middleware('auth');
Route::get('/cetaklaporan', [UserController::class, 'cetak'])->name('user.cetaklaporan');
Route::get('/cetaklaporanpengaduan/{id}', [UserController::class, 'pdf'])->name('pages.user.pengaduan.cetak');
Route::get('/tambah-user', [UserController::class, 'create'])->name('pages.user.tambahuser')->middleware('auth');
Route::get('/users', [UserController::class, 'index'])->name('pages.user.index')->middleware('auth');
Route::get('/pengaduan-detail/{id}', [PengaduanController::class, 'show'])->name('pengaduan.detail')->middleware('auth');
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');
