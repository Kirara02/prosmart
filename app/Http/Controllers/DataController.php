<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use Carbon\Carbon;
use App\Models\BarangBukti;
use App\Models\Gallery;
use App\Models\Jaksa;
use App\Models\JenisBarangBukti;
use App\Models\Pengaturan;
use Yajra\DataTables\Facades\DataTables;

class DataController extends Controller
{
    public function getJaksa(){
        $data = Jaksa::all();

        return DataTables::of($data)
        ->addIndexColumn()
        ->addColumn('actions', function ($row) {
            return '<a href="'.route('jaksa.edit', $row->id).'" class="btn btn-sm btn-outline-warning"><i class="fa fa-pen "></i></a>'.
            '<form id="form-delete" action="'.route('jaksa.destroy', $row->id).'" method="post" class="d-inline">
            '.method_field('DELETE').'
            '.csrf_field().'
            <button type="button" class="btn btn-sm btn-outline-warning btn-delete"><i class="fas fa-trash"></i></button>
            </form>';
        })
        ->rawColumns(['actions'])
        ->make(true);
    }

    public function getBarangBukti(){
        $data = BarangBukti::with(['jaksa','jenis']);

        return DataTables::of($data)
        ->addIndexColumn()
        ->addColumn('actions', function ($row) {
            return '<a href="'.route('barang-bukti.edit', $row->id).'" class="btn btn-sm btn-outline-warning"><i class="fa fa-pen "></i></a>'.
            '<form id="form-delete" action="'.route('barang-bukti.destroy', $row->id).'" method="post" class="d-inline">
            '.method_field('DELETE').'
            '.csrf_field().'
            <button type="button" class="btn btn-sm btn-outline-warning btn-delete"><i class="fas fa-trash"></i></button>
            </form>';
        })
        ->rawColumns(['actions'])
        ->make(true);
    }

    public function getGallery(){
        $data = Gallery::all();

        return DataTables::of($data)
        ->addIndexColumn()
        ->editColumn('image', function ($row) {
            return '<a href="' . asset('storage/' . $row->image) . '">Lihat Gambar</a>';
        })
        ->editColumn('created_at', function ($row) {
            return Carbon::parse($row->created_at)->format('l, d-m-Y');
        })
        ->addColumn('actions', function ($row) {
            return '<a href="'.route('gallery.edit', $row->id).'" class="btn btn-sm btn-outline-warning"><i class="fa fa-pen "></i></a>'.
            '<form id="form-delete" action="'.route('gallery.destroy', $row->id).'" method="post" class="d-inline">
            '.method_field('DELETE').'
            '.csrf_field().'
            <button type="button" class="btn btn-sm btn-outline-warning btn-delete"><i class="fas fa-trash"></i></button>
            </form>';
        })
        ->rawColumns(['actions','image','created_at'])
        ->make(true);
    }

    public function getPengaturan(){
        $data = Pengaturan::all();

        return DataTables::of($data)
        ->addIndexColumn()
        ->editColumn('img_url', function ($row) {
            return '<a href="' . asset('storage/' . $row->img_url) . '">Lihat Gambar</a>';
        })
        ->addColumn('actions', function ($row) {
            return '<a href="'.route('pengaturan.edit', $row->id).'" class="btn btn-sm btn-outline-warning"><i class="fa fa-pen "></i></a>'.
            '<form id="form-delete" action="'.route('pengaturan.destroy', $row->id).'" method="post" class="d-inline">
            '.method_field('DELETE').'
            '.csrf_field().'
            <button type="button" class="btn btn-sm btn-outline-warning btn-delete"><i class="fas fa-trash"></i></button>
            </form>';
        })
        ->rawColumns(['actions','img_url'])
        ->make(true);
    }

    public function getPengajuan(){
        $data = Pengajuan::with(['gallery'])->get();

        return DataTables::of($data)
        ->addIndexColumn()
        ->editColumn('tgl_pengajuan', function ($row) {
            return Carbon::parse($row->tgl_pengajuan)->format('l, d-m-Y');
        })
        ->addColumn('actions', function ($row) {
            return '<a href="'.route('pengajuan.show', $row->id).'" class="btn btn-sm btn-outline-warning"><i class="fa fa-expand "></i></a>'.
            '<form id="form-delete" action="'.route('pengajuan.destroy', $row->id).'" method="post" class="d-inline">
            '.method_field('DELETE').'
            '.csrf_field().'
            <button type="button" class="btn btn-sm btn-outline-warning btn-delete"><i class="fas fa-trash"></i></button>
            </form>';
        })
        ->rawColumns(['actions','tgl_pengajuan'])
        ->make(true);
    }

    public function getJenis(){
        $data = JenisBarangBukti::get();

        return DataTables::of($data)
        ->addIndexColumn()

        ->addColumn('actions', function ($row) {
            return '<a href="'.route('jenis-barang-bukti.edit', $row->id).'" class="btn btn-sm btn-outline-warning"><i class="fa fa-pen "></i></a>'.
            '<form id="form-delete" action="'.route('jenis-barang-bukti.destroy', $row->id).'" method="post" class="d-inline">
            '.method_field('DELETE').'
            '.csrf_field().'
            <button type="button" class="btn btn-sm btn-outline-warning btn-delete"><i class="fas fa-trash"></i></button>
            </form>';
        })
        ->rawColumns(['actions'])
        ->make(true);
    }
}
