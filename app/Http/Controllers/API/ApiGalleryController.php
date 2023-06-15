<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class ApiGalleryController extends Controller
{
    public function all(){
        try {
            $gallery = Gallery::all();

            return ResponseFormatter::success(
                $gallery,
                'Data berhasil diambil'
            );
        } catch (\Throwable $th) {
            return ResponseFormatter::error(
                null,
                'Data gagal diambil'
            );
        }

    }
}
