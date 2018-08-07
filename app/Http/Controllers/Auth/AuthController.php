<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Jabatan;
use DB;

class AuthController extends Controller
{
    public function indexLogin()
    {
        return view('login');
    }
    
    public function indexRegister()
    {
		$jabatan = DB::table('jabatan')->select('id_jabatan','nama_jabatan')->orderBy('nama_jabatan')->get();
        return view('auth.register', ['jabatan'=>$jabatan]);
    }

    public function logout(Request $request)
    {
        $user = Auth::User();
        Auth::logout();
        return redirect()->route('login');
    }
}
