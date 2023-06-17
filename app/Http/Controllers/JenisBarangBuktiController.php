<?php

namespace App\Http\Controllers;

use App\Http\Requests\JenisBarangBuktiRequest;
use App\Models\JenisBarangBukti;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JenisBarangBuktiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Data Jenis Barag Bukti';
        return view('pages.jenis_barang_bukti.index', compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Jenis Barang Bukti';
        $jenisBarangBukti = new JenisBarangBukti();
        $method = 'POST';
        $action = route('jenis-barang-bukti.store');

        return view('pages.jenis_barang_bukti.form', compact('title','jenisBarangBukti','method','action'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JenisBarangBuktiRequest $request)
    {
        try {
            DB::beginTransaction();

            JenisBarangBukti::create($request->all());

            DB::commit();

            return redirect()->route('jenis-barang-bukti.index')->with('success', 'Data berhasil ditambahkan');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('error', $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JenisBarangBukti $jenisBarangBukti)
    {
        $title = 'Update Jenis Barang Bukti';
        $action = route('jenis-barang-bukti.update', $jenisBarangBukti->id);
        $method = 'PUT';

        return view('pages.jenis_barang_bukti.form', compact('title','action','method','jenisBarangBukti'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JenisBarangBuktiRequest $request, JenisBarangBukti $jenisBarangBukti)
    {
        try {
            DB::beginTransaction();
            $jenisBarangBukti->update($request->all());

            DB::commit();

            return redirect()->route('jenis-barang-bukti.index')->with('success', 'Data berhasil diubah');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('error', $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JenisBarangBukti $jenisBarangBukti)
    {
        try {
            DB::beginTransaction();

            $jenisBarangBukti->delete();

            DB::commit();

            return redirect()->route('jenis-barang-bukti.index')->with('success', 'Data berhasil dihapus');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('error', $th->getMessage());
        }
    }
}
