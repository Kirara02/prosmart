<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    public function getDoktrin(){

        $profile = Profile::first();
        $title = 'Data Profile - '.$profile->name_company;
        $action = route('profile.post.doktrin');
        $method = 'PUT';

        return view('pages.profile.doktrin', compact('profile','action','method','title'));
    }

    public function postDoktrin(Request $request){
        $request->validate([
            'doktrin' => 'required|string'
        ]);

        try {
            DB::beginTransaction();

            $profile = Profile::first();
            $profile->update([
                'profile' => $request->doktrin
            ]);
            DB::commit();
            return redirect()->route('profile.get.doktrin')->with('success','Data Berhasil Diubah');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('error', $th->getMessage());
        }
    }

    public function getTugas(){

        $profile = Profile::first();
        $title = 'Data Profile - Tugas Pokok & Fungsi';
        $action = route('profile.post.tugas');
        $method = 'PUT';

        return view('pages.profile.tugas', compact('profile','action','method','title'));
    }

    public function postTugas(Request $request){

        $request->validate([
            'tugas' => 'required|string'
        ]);

        try {
            DB::beginTransaction();

            $profile = Profile::first();
            $profile->update([
                'tugas' => $request->tugas
            ]);

            DB::commit();

            return redirect()->route('profile.get.tugas')->with('success','Data Berhasil Diubah');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('error', $th->getMessage());
        }
    }

    public function getVisiMisi(){

        $profile = Profile::first();
        $title = 'Data Profile - Visi & Misi';
        $action = route('profile.post.visimisi');
        $method = 'PUT';

        return view('pages.profile.vimi', compact('profile','action','method','title'));
    }

    public function postVisiMisi(Request $request){
        $request->validate([
            'visi_misi' => 'required|string'
        ]);

        try {
            DB::beginTransaction();

            $profile = Profile::first();
            $profile->update([
                'visi_misi' => $request->visi_misi
            ]);

            DB::commit();

            return redirect()->route('profile.get.visimisi')->with('success','Data Berhasil Diubah');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('error', $th->getMessage());
        }
    }

    public function getSambutan(){

        $profile = Profile::first();
        $title = 'Data Profile - Kata Sambutan';
        $action = route('profile.post.sambutan');
        $method = 'PUT';

        return view('pages.profile.sambutan', compact('profile','action','method','title'));
    }

    public function postSambutan(Request $request){

        $request->validate([
            'kata_sambutan' => 'required|string'
        ]);

        try {
            DB::beginTransaction();

            $profile = Profile::first();
            $profile->update([
                'kata_sambutan' => $request->kata_sambutan
            ]);

            DB::commit();
            return redirect()->route('profile.get.sambutan')->with('success','Data Berhasil Diubah');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('error', $th->getMessage());
        }
    }

    public function getStruktur(){

        $profile = Profile::first();
        $title = 'Data Profile - Struktur Organisasi';
        $action = route('profile.post.struktur');
        $method = 'PUT';

        return view('pages.profile.struktur', compact('profile','action','method','title'));
    }

    public function postStruktur(Request $request){

        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg|max:5120'
        ]);

        try {
            DB::beginTransaction();
            $profile = Profile::first();

            if ($request->hasFile('image')) {
                if($profile->image_organisasi != null){
                    Storage::delete($profile->image_organisasi);
                }
                $image = $request->file('image');
                $imageUrl = $image->storeAs('images/gallery', date('YmdHis') . '-' . Str::slug($profile->name_company) . '.' . $image->extension());
            } else {
                $imageUrl = $profile->image_organisasi;
            }

            $profile->update([
                'image_organisasi' => $imageUrl
            ]);

            DB::commit();

            return redirect()->route('profile.get.struktur')->with('success','Data Berhasil Diubah');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('error', $th->getMessage());
        }
    }
}
