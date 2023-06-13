<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangBuktiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\JaksaController;
use App\Http\Controllers\PengajuanBarangBuktiController;
use App\Http\Controllers\PengaturanController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\DataCollector\DataCollector;

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

// Login Route
Route::get('/', [AuthController::class, 'index'])->name('index');
Route::post('/auth', [AuthController::class, 'auth'])->name('auth');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function(){

    // Dashboard Route
    Route::resource('/dashboard', DashboardController::class);

    // Profile Route
    Route::controller(ProfileController::class)->group(function(){
        Route::get('/profile', 'index')->name('profile.index');
        Route::post('/profile', 'profileCreate')->name('profile.post');
        Route::get('/profile/tugas', 'getTugas')->name('profile.get.tugas');
        Route::post('/profile/tugas', 'postTugas')->name('profile.post.tugas');
        Route::get('/profile/visi-misi', 'getVisiMisi')->name('profile.get.visimisi');
        Route::post('/profile/visi-misi', 'postVisiMisi')->name('profile.post.visimisi');
        Route::get('/profile/struktur-organisasi', 'getStruktur')->name('profile.get.struktur');
        Route::post('/profile/struktur-organisasi', 'postStruktur')->name('profile.post.struktur');
        Route::get('/profile/kata-sambutan', 'getSambutan')->name('profile.get.sambutan');
        Route::post('/profile/kata-sambutan', 'postSambutan')->name('profile.post.sambutan');

    });

    // Jaksa Route
    Route::resource('/jaksa',JaksaController::class);

    // Informasi Barang Bukti Route
    Route::resource('/barang-bukti', BarangBuktiController::class);

    // Pengajuan Barang Bukti
    Route::resource('/pengajuan', PengajuanBarangBuktiController::class);

    // Gallery Route
    Route::resource('/gallery', GalleryController::class);

    // Pengaturan Route
    Route::resource('/pengaturan', PengaturanController::class);

    Route::controller(DataController::class)->group(function(){
        Route::get('data/jaksa','getJaksa')->name('data.jaksa');
        Route::get('data/barang-bukti','getBarangBukti')->name('data.barang-bukti');
    });
});

