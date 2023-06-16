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
                [
                    'title' => 'profile',
                    'content' => strip_tags($profile->profile)
                ],
                [
                    'title' => 'tugas',
                    'content' => strip_tags($profile->tugas)
                ],
                [
                    'title' => 'visi-misi',
                    'content' => strip_tags($profile->visi_misi)
                ],
                [
                    'title' => 'struktur organisasi',
                    'content' => strip_tags($profile->image_organisasi)
                ],
                [
                    'title' => 'kata sambutan',
                    'content' => strip_tags($profile->kata_sambutan)
                ],
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
