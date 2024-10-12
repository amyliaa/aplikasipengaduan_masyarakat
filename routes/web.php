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

// Route untuk masyarakat mengajukan pengaduan
Route::get('/pengaduan/create', [PengaduanController::class, 'create'])->name('pengaduan.create');
Route::post('/pengaduan/store', [PengaduanController::class, 'store'])->name('pengaduan.store');

// Route untuk masyarakat mengecek status pengaduan
Route::get('/cek-pengaduan', [PengaduanController::class, 'showSearchForm'])->name('pengaduan.cek-pengaduan');
Route::post('/cek-pengaduan', [PengaduanController::class, 'searchPengaduan'])->name('pengaduan.search');
Route::get('/detailpengaduan', [PengaduanController::class, 'detail'])->name('pengaduan.detail');
Route::get('/tanggapan', [UserController::class, 'tanggapiPengaduan'])->name('user.tanggapanuser');

// Route untuk menampilkan dan mengedit data masyarakat (hanya user)
Route::get('/user/masyarakat/{id}', [MasyarakatController::class, 'show'])->name('masyarakat.show');
Route::get('/user/masyarakat/{id}/edit', [MasyarakatController::class, 'edit'])->name('masyarakat.edit');
Route::post('/user/masyarakat/{id}/update', [MasyarakatController::class, 'update'])->name('masyarakat.update');

// Route untuk user
Route::get('login',[LoginController::class,'loginView'])->name('login');
Route::post('login',[LoginController::class,'authenticate']);
Route::get('/logout', [LoginController::class, 'logout'])->name('auth.logout');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('/user',UserController::class)->except('destroy');
Route::resource('/pengaduan',PengaduanController::class)->except('destroy','show');
Route::get('/masyarakat', [MasyarakatController::class, 'index'])->name('user.masyarakat');
Route::get('/laporan', [UserController::class, 'laporan'])->name('user.laporan');
Route::get('/tambah-user', [UserController::class, 'create'])->name('pages.user.tambahuser');
Route::get('/detail-pengaduan', [PengaduanController::class, 'show'])->name('pengaduan.detail');
Route::get('/detail-pengaduan', [PengaduanController::class, 'show'])->name('pengaduan.show');
