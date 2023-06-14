<?php

namespace App\Http\Controllers;

use App\Http\Requests\PengaturanRequest;
use App\Models\Pengaturan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PengaturanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Pengaturan::all();
        $title = 'List Data Gambar';

        return view('pages.pengaturan.index', compact('items','title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pengaturan = new Pengaturan();
        $title = 'Tambah Data Gambar';
        $action = route('pengaturan.store');
        $method = 'POST';

        return view('pages.pengaturan.form', compact('title','action','method','pengaturan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PengaturanRequest $request)
    {
        try {
            DB::beginTransaction();

            $image = $request->file('image');
            $imageUrl = $image->storeAs('images/setting', date('YmdHis') . '-' . Str::slug($request->deskripsi) . '.' . $image->extension());

            Pengaturan::create([
                'deskripsi' => $request->deskripsi,
                'img_url' => $imageUrl,
            ]);

            DB::commit();

            return redirect()->route('pengaturan.index')->with('success', 'Data berhasil ditambah');

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
    public function edit(Pengaturan $pengaturan)
    {
        $title = 'Edit Data Gambar';
        $action = route('pengaturan.update', $pengaturan->id);
        $method = 'PUT';

        return view('pages.pengaturan.form', compact('title','pengaturan','action','method'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PengaturanRequest $request, Pengaturan $pengaturan)
    {
        try {
            DB::beginTransaction();

            if ($request->file('image')) {
                Storage::delete($pengaturan->img_url);
                $image = $request->file('image');
                $imageUrl = $image->storeAs('images/setting', date('YmdHis') . '-' . Str::slug($request->judul) . '.' . $image->extension());
            } else {
                $imageUrl = $pengaturan->img_url;
            }

            $pengaturan->update([
                'deskripsi' => $request->deskripsi,
                'img_url' => $imageUrl,
            ]);

            DB::commit();

            return redirect()->route('pengaturan.index')->with('success', 'Data berhasil diubah');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('error', $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengaturan $pengaturan)
    {
        try {
            DB::beginTransaction();
            Storage::delete($pengaturan->img_url);
            $pengaturan->delete();

            DB::commit();

            return redirect()->route('pengaturan.index')->with('success', 'Data berhasil dihapus');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('error', $th->getMessage());
        }
    }
}
