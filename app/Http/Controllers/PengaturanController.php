<?php

namespace App\Http\Controllers;

use App\Models\Pengaturan;
use Illuminate\Http\Request;

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
        $action = route('pengaturan.create');
        $method = 'POST';

        return view('pages.pengaturan.form', compact('title','action','method','pengaturan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function destroy(string $id)
    {
        //
    }
}
