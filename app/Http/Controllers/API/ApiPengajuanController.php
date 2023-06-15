<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Pengajuan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ApiPengajuanController extends Controller
{
    public function post(Request $request){
        $request->validate([
            'tgl_pengajuan' => 'required',
            'nama_pemohon' => 'required|string',
            'nama_terdakwa' => 'string',
            'no_handphone' => 'required|string',
            'jenis_barang_bukti' => 'required|string',
            'alamat' => 'required|string',
            'ktp' => 'required|image|mimes:jpeg,jpg,png|max:512',
            'bukti.*' => 'required|image|mimes:jpeg,jpg,png|max:1024',
            'catatan' => 'string'
        ]);

        $ktp = $request->ktp;
        $imgKtp = $ktp->storeAs('images/ktp', Str::slug($request->nama_pemohon) . '-' . Str::random(6). '.' . $ktp->extension());

        $data = Pengajuan::create([
            'nama_pemohon' => $request->nama_pemohon,
            'nama_terdakwa' => $request->nama_terdakwa,
            'no_handphone' => $request->no_handphone,
            'alamat' => $request->alamat,
            'ktp' => $imgKtp,
            'catatan' => $request->catatan
        ]);

    }
}
