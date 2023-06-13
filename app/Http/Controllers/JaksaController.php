<?php

namespace App\Http\Controllers;

use App\Http\Requests\JaksaRequest;
use App\Models\Jaksa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JaksaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'List Data Jaksa';
        $items = Jaksa::all();
        return view('pages.jaksa.index', compact('title','items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jaksa = new Jaksa();
        $title = 'Tambah Jaksa';
        $action = route('jaksa.store');
        $method = 'POST';

        return view('pages.jaksa.form', compact('title','action','method','jaksa'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JaksaRequest $request)
    {
        try {
            DB::beginTransaction();

            Jaksa::create($request->all());

            DB::commit();

            return redirect()->route('jaksa.index')->with('success', 'Data berhasil ditambahkan');
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
    public function edit(Jaksa $jaksa)
    {
        $title = 'Update Jaksa';
        $action = route('jaksa.update', $jaksa->id);
        $method = 'PUT';

        return view('pages.jaksa.form', compact('title','action','method','jaksa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JaksaRequest $request, Jaksa $jaksa)
    {
        try {
            DB::beginTransaction();
            $jaksa->update($request->all());

            DB::commit();

            return redirect()->route('jaksa.index')->with('success', 'Data berhasil diubah');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('error', $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jaksa $jaksa)
    {
        try {
            DB::beginTransaction();

            $jaksa->delete();

            DB::commit();

            return redirect()->route('jaksa.index')->with('success', 'Data berhasil dihapus');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('error', $th->getMessage());
        }
    }
}
