<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\BarangBukti;
use Illuminate\Http\Request;

class ApiBarangBuktiController extends Controller
{
    public function terdakwa(){
        try {

            $data = BarangBukti::all();

            $terdakwa = [];
            foreach ($data as $item) {
                $terdakwa[] = $item->nama_terpidana;
            }

            return ResponseFormatter::success(
                $terdakwa,
                'Data berhasil diambil'
            );
        } catch (\Throwable $th) {
            return ResponseFormatter::error(
                null,
                'Data gagal diambil'
            );
        }
    }
}