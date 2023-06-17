<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\JenisBarangBukti;
use Illuminate\Http\Request;

class ApiJenisBarangBuktiController extends Controller
{
    public function all(){
        try {

            $data = JenisBarangBukti::get();

            return ResponseFormatter::success(
                $data,
                'Data list jaksa berhasil diambil'
            );

        } catch (\Throwable $th) {
            return ResponseFormatter::error(
                null,
                'Data gagal diambil'
            );
        }
    }
}
