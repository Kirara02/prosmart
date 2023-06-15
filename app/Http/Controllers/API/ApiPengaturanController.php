<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Pengaturan;
use Illuminate\Http\Request;

class ApiPengaturanController extends Controller
{
    public function all(){
        try {
            $banner = Pengaturan::all();

            return ResponseFormatter::success(
                $banner,
                'Data Berhasil di ambil'
            );
        } catch (\Throwable $th) {
            return ResponseFormatter::error(
                null,
                'Data gagal di ambil'
            );
        }
    }
}
