<?php

namespace App\Http\Controllers;

use App\Models\BuktiGallery;
use App\Models\Pengajuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PengajuanBarangBuktiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Data Permohonan Barang Bukti';
        return view('pages.pengajuan.index', compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah pengajuan pemohonan';
        $action = route('pengajuan.store');
        $method = 'POST';
        $pengajuan = new Pengajuan();

        return view('pages.pengajuan.form', compact('title','action','method','pengajuan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pemohon' => 'required|string',
            'nama_terdakwa' => 'string',
            'no_handphone' => 'required|string',
            'alamat' => 'required|string',
            'ktp' => 'required|image|mimes:jpeg,jpg,png|max:5120',
            'kepemilikan.*' => 'required|image|mimes:png,jpg,jpeg|max:5120',
            'catatan' => 'required|string'
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

        $kepemilikan = $request->file('kepemilikan');
        foreach ($kepemilikan as $image) {
            $imgBukti = $image->storeAs('images/bukti-kepemilikan', Str::slug($request->nama_pemohon) . '-' . Str::random(6). '.' . $ktp->extension());
            BuktiGallery::create([
                'id_pengajuan' => $data->id,
                'image' => $imgBukti
            ]);
        }

        return redirect()->route('pengajuan.index')->with('success', 'Data berhasil diubah');

    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $title = 'View Data Permohonan Barang Bukti';
        $data = Pengajuan::find($id);

        return view('pages.pengajuan.detail', compact('title','data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengajuan $pengajuan)
    {
        // try {
        //     DB::beginTransaction();
            $data = BuktiGallery::where('id_pengajuan',$pengajuan->id)->get();
            foreach ($data as $item) {
                Storage::delete($item->image);
                BuktiGallery::find($item->id)->delete();
            }
            $pengajuan->delete();

            // DB::commit();

            return redirect()->route('pengajuan.index')->with('success', 'Data berhasil dihapus');
        // } catch (\Throwable $th) {
        //     DB::rollBack();
        //     return back()->with('error', $th->getMessage());
        // }
    }
}
