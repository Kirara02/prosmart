<?php

use App\Http\Controllers\BarangBuktiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JaksaController;
use App\Http\Controllers\PengajuanBarangBuktiController;
use App\Http\Controllers\PengaturanController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Dashboard Route
Route::resource('/', DashboardController::class);

// Jaksa Route
Route::resource('/jaksa',JaksaController::class);

// Informasi Barang Bukti Route
Route::resource('/barang-bukti', BarangBuktiController::class);

// Pengajuan Barang Bukti
Route::resource('/pengajuan', PengajuanBarangBuktiController::class);

// Photo Route
Route::resource('photo', PhotoController::class);

// Profile
Route::resource('/pengaturan', PengaturanController::class);


