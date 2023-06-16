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
                    'content' => $profile->profile
                ],
                [
                    'title' => 'Tugas Pokok & Fungsi',
                    'content' => $profile->tugas
                ],
                [
                    'title' => 'Visi Misi',
                    'content' => $profile->visi_misi
                ],
                [
                    'title' => 'Struktur Organisasi',
                    'content' => $profile->image_organisasi
                ],
                [
                    'title' => 'kata Sambutan',
                    'content' => $profile->kata_sambutan
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
