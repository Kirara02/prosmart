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
                    'title' => 'Doktrin Adhiyaksa',
                    'content' => strip_tags($profile->profile)
                ],
                [
                    'title' => 'Tugas Pokok & Fungsi',
                    'content' => strip_tags($profile->tugas)
                ],
                [
                    'title' => 'Visi Misi',
                    'content' => strip_tags($profile->visi_misi)
                ],
                [
                    'title' => 'Struktur Organisasi',
                    'content' => strip_tags($profile->image_organisasi)
                ],
                [
                    'title' => 'kata Sambutan',
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
