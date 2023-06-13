<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('pages.login');
    }

    public function auth(Request $request){
        try {
            $credentials = $request->only('email', 'password');

            if(Auth::attempt($credentials)){
              return redirect()->intended('/dashboard');
            }

            return redirect()->back();
          } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
          }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

      return redirect('/');
    }
}
