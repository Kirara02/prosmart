<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function getDoktrin(){

        $profile = Profile::first();
        $title = 'Data Profile - '.$profile->name_company;
        $action = route('profile.post.doktrin');
        $method = 'PUT';

        return view('pages.profile.doktrin', compact('profile','action','method','title'));
    }
}
