<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\BarangBukti;
use App\Models\Jaksa;
use Illuminate\Http\Request;

class ApiBarangBuktiController extends Controller
{
    public function terdakwa()
    {
        try {
            $data = BarangBukti::pluck('nama_terpidana')->toArray();

            return ResponseFormatter::success(
                $data,
                'Data berhasil diambil'
            );
        } catch (\Throwable $th) {
            return ResponseFormatter::error(
                null,
                'Data gagal diambil'
            );
        }
    }

    public function show(Request $request)
    {
        try {
            $jaksa = $request->input('jaksa');
            $terdakwa = $request->input('terdakwa');

            $dataJaksa = Jaksa::where('nama_jaksa', $jaksa)->first();

            if (!$dataJaksa) {
                return ResponseFormatter::error(null, 'Data tidak ditemukan', 404);
            }

            $data = BarangBukti::with(['jaksa','jenis'])->where('nama_terpidana', $terdakwa)
                ->where('id_jaksa', $dataJaksa->id)
                ->first();

            if ($data == null) {
                return ResponseFormatter::error(null, 'Data tidak ditemukan',404);
            }

            return ResponseFormatter::success($data, 'Data berhasil diambil');
        } catch (\Throwable $th) {
            return ResponseFormatter::error(null, 'Terjadi kesalahan: ' . $th->getMessage());
        }
    }

}
