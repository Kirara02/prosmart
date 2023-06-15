<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\BuktiGallery;
use App\Models\Pengajuan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ApiPengajuanController extends Controller
{
    public function post(Request $request)
    {
        $ktp = $request->file('ktp');
        $imgKtp = $ktp->storeAs('images/ktp', Str::slug($request->nama_pemohon) . '-' . Str::random(6) . '.' . $ktp->extension());

        $data = Pengajuan::create([
            'nama_pemohon' => $request->nama_pemohon,
            'nama_terdakwa' => $request->nama_terdakwa,
            'no_handphone' => $request->no_handphone,
            'alamat' => $request->alamat,
            'ktp' => $imgKtp,
            'catatan' => $request->catatan
        ]);


        $bukti = $request->file('bukti');
        $insert = [];
        foreach ($bukti as $key=>$image) {
            $imgBukti = $image->storeAs('images/bukti-kepemilikan', Str::slug($request->nama_pemohon) . '-' . Str::random(6) . '.' . $image->extension());
            $insert[$key]['id_pengajuan'] = $data->id;
            $insert[$key]['image'] = $imgBukti;
            $insert[$key]['created_at'] = Carbon::now();
            $insert[$key]['updated_at'] = Carbon::now();
        }

        BuktiGallery::insert($insert);

        $result = Pengajuan::with(['gallery'])->find($data->id);

        return ResponseFormatter::success(
            $result,
            'Data berhasil diupload'
        );
    }
}
