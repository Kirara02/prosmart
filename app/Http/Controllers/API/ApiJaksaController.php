<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Jaksa;
use Illuminate\Http\Request;

class ApiJaksaController extends Controller
{
    public function all(Request $request){
        try {

            $id = $request->input('id');
            $name = $request->input('nama_jaksa');

            if($id){
                $jaksa = Jaksa::with(['barangBukti'])->find($id);

                if($jaksa){
                    return ResponseFormatter::success($jaksa, 'Data jaksa berhasil diambil');
                }else{
                    return ResponseFormatter::error(null, 'Data jaksa tidak ada');
                }
            }

            $jaksa = Jaksa::query();

            if($name){
                $jaksa->where('nama_jaksa','like','%'.$name.'%');
            }

            return ResponseFormatter::success(
                $jaksa->get(),
                'Data list jaksa berhasil diambil'
            );

        } catch (\Throwable $th) {
            return ResponseFormatter::error(
                null,
                'Data gagal diambil'
            );
        }
    }
}
