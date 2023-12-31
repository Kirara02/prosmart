<?php

use App\Http\Controllers\API\ApiBarangBuktiController;
use App\Http\Controllers\API\ApiGalleryController;
use App\Http\Controllers\API\ApiJaksaController;
use App\Http\Controllers\API\ApiJenisBarangBuktiController;
use App\Http\Controllers\API\ApiPengajuanController;
use App\Http\Controllers\API\ApiPengaturanController;
use App\Http\Controllers\API\ApiProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('jaksa',[ApiJaksaController::class, 'all']);
Route::get('profile',[ApiProfileController::class,'all']);
Route::get('gallery',[ApiGalleryController::class,'all']);
Route::get('terdakwa',[ApiBarangBuktiController::class,'terdakwa']);
Route::get('barang-bukti',[ApiBarangBuktiController::class,'show']);
Route::get('jenis-barang-bukti',[ApiJenisBarangBuktiController::class,'all']);
Route::get('banner',[ApiPengaturanController::class,'all']);
Route::post('pengajuan',[ApiPengajuanController::class,'post']);
