<?php

namespace App\Http\Controllers;

use App\Http\Requests\GalleryRequest;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'List Foto Gallery';

        return view('pages.gallery.index', compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Data Foto Gallery';
        $gallery = new Gallery();
        $action = route('gallery.store');
        $method = 'POST';

        return view('pages.gallery.form', compact('title','gallery','action','method'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GalleryRequest $request)
    {
        try {
            DB::beginTransaction();

            $image = $request->file('image');
            $imageUrl = $image->storeAs('images/gallery', date('YmdHis') . '-' . Str::slug($request->judul) . '.' . $image->extension());

            Gallery::create([
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'image' => $imageUrl,
            ]);

            DB::commit();

            return redirect()->route('gallery.index')->with('success', 'Data berhasil ditambah');

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

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        $title = 'Edit Data Foto Gallery';
        $action = route('gallery.update', $gallery->id);
        $method = 'PUT';

        return view('pages.gallery.form', compact('title','gallery','action','method'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GalleryRequest $request, Gallery $gallery)
    {
        try {
            DB::beginTransaction();

            if ($request->file('image')) {
                Storage::delete($gallery->image);
                $image = $request->file('image');
                $imageUrl = $image->storeAs('images/gallery', date('YmdHis') . '-' . Str::slug($request->judul) . '.' . $image->extension());
            } else {
                $imageUrl = $gallery->image;
            }

            $gallery->update([
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'image' => $imageUrl,
            ]);

            DB::commit();

            return redirect()->route('gallery.index')->with('success', 'Data berhasil diubah');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('error', $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        try {
            DB::beginTransaction();
            Storage::delete($gallery->image);
            $gallery->delete();

            DB::commit();

            return redirect()->route('gallery.index')->with('success', 'Data berhasil dihapus');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('error', $th->getMessage());
        }
    }
}
