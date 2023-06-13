<?php

namespace App\Http\Controllers;

use App\Models\BarangBukti;
use App\Models\Jaksa;
use Yajra\DataTables\Facades\DataTables;

class DataController extends Controller
{
    public function getJaksa(){
        $data = Jaksa::all();

        return DataTables::of($data)
        ->addColumn('actions', function ($row) {
            return '<a href="'.route('jaksa.edit', $row->id).'" class="btn btn-secondary border-0 text-dark"><i class="fa fa-pen "></i></a>'.
            '<form id="form-delete" action="'.route('jaksa.destroy', $row->id).'" method="post" class="d-inline">
            '.method_field('DELETE').'
            '.csrf_field().'
            <button type="submit" class="btn btn-danger border-0"><i class="fas fa-trash"></i></button>
            </form>';
        })
        ->rawColumns(['actions'])
        ->make(true);
    }

    public function getBarangBukti(){
        $data = BarangBukti::with(['jaksa']);

        return DataTables::of($data)
        ->addColumn('actions', function ($row) {
            return '<a href="'.route('barang-bukti.edit', $row->id).'" class="btn btn-secondary border-0 text-dark"><i class="fa fa-pen "></i></a>'.
            '<form id="form-delete" action="'.route('barang-bukti.destroy', $row->id).'" method="post" class="d-inline">
            '.method_field('DELETE').'
            '.csrf_field().'
            <button type="submit" class="btn btn-danger border-0"><i class="fas fa-trash"></i></button>
            </form>';
        })
        ->rawColumns(['actions'])
        ->make(true);
    }
}
