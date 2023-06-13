<?php

namespace App\Http\Controllers;

use App\Http\Requests\BarangBuktiRequest;
use App\Models\BarangBukti;
use App\Models\Jaksa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangBuktiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Data List Daftar Barang Bukti';
        $items = BarangBukti::all();
        return view('pages.barang_bukti.index', compact('title','items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $barangBukti = new BarangBukti();
        $title = 'Tambah Daftar Barang Bukti';
        $action = route('barang-bukti.store');
        $method = 'POST';
        $jaksa = Jaksa::all();

        return view('pages.barang_bukti.form', compact('title','action','method','barangBukti','jaksa'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BarangBuktiRequest $request)
    {
        try {
            DB::beginTransaction();

            BarangBukti::create($request->all());

            DB::commit();

            return redirect()->route('barang-bukti.index')->with('success', 'Data berhasil ditambahkan');
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
    public function edit(BarangBukti $barangBukti)
    {
        $title = 'Tambah Daftar Barang Bukti';
        $action = route('barang-bukti.update', $barangBukti->id);
        $method = 'PUT';
        $jaksa = Jaksa::all();

        return view('pages.barang_bukti.form', compact('title','action','method','barangBukti','jaksa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BarangBuktiRequest $request, BarangBukti $barangBukti)
    {
        try {
            DB::beginTransaction();
            $barangBukti->update($request->all());

            DB::commit();

            return redirect()->route('barang-bukti.index')->with('success', 'Data berhasil diubah');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('error', $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BarangBukti $barangBukti)
    {
        try {
            DB::beginTransaction();

            $barangBukti->delete();

            DB::commit();

            return redirect()->route('barang-bukti.index')->with('success', 'Data berhasil dihapus');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('error', $th->getMessage());
        }
    }
}
