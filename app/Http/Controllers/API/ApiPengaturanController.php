<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Pengaturan;
use Illuminate\Http\Request;

class ApiPengaturanController extends Controller
{
    public function all(){
        $banner = Pengaturan::first();

        return ResponseFormatter::success(
            $banner,
            'Data Berhasil di ambil'
        );
    }
}
