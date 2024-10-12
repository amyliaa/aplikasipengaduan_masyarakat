<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PengaduanController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Rute untuk masyarakat
Route::get('/masyarakat', [MasyarakatController::class, 'index']);
Route::post('/masyarakat', [MasyarakatController::class, 'store']);
Route::get('/masyarakat/{id}', [MasyarakatController::class, 'show']);
Route::delete('/masyarakat/{id}', [MasyarakatController::class, 'destroy']);

// Rute untuk user
Route::get('/user', [UserController::class, 'index']);
Route::post('/user', [UserController::class, 'store']);
Route::get('/user/{id}', [UserController::class, 'show']);
Route::delete('/user/{id}', [UserController::class, 'destroy']);

// Rute untuk pengaduan
Route::get('/pengaduan', [PengaduanController::class, 'index']);
Route::post('/pengaduan', [PengaduanController::class, 'store']);
Route::get('/pengaduan/{kode_pengaduan}', [PengaduanController::class, 'show']);
Route::post('/pengaduan/{kode_pengaduan}/tanggapan', [PengaduanController::class, 'beriTanggapan']);