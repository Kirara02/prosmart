<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;

class ApiProfileController extends Controller
{
    public function all(){
        try {
            $profile = Profile::first();

            $data = [
                'profile' =>  strip_tags($profile->profile),
                'tugas' =>  strip_tags($profile->tugas),
                'visi_misi' =>  strip_tags($profile->visi_misi),
                'kata_sambutan' =>  strip_tags($profile->kata_sambutan),
                'struktur_organisasi' =>  strip_tags($profile->image_organisasi),
            ];

            return ResponseFormatter::success(
               $data,
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
