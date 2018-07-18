<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
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
    	$user = DB::table('user')->get();
		$jabatan = DB::table('jabatan')->select('id_jabatan','nama_jabatan')->orderBy('nama_jabatan')->get();
        return view('signup', ['user'=>$user, 'jabatan'=>$jabatan]);
    }
    
    public function register(Request $request)
    {
        $isDuplicate = $this->checkNIK($request->nik);
        if ($isDuplicate)
        {
            return redirect('/register')->with('error','NIK sudah pernah terdaftar !');
        }

        $user = new User();
        $user->nik = $request->nik;
        $user->password = bcrypt($request->password);
        $user->id_jabatan = $request->id_jabatan;
        $user->nama = $request->nama;
        $user->save();

        return redirect('/login');
    }

    protected function checkNIK($nik)
    {
        $user = User::where('nik',$nik)->get();
        if ($user==null)
        {
            return TRUE;
        }
        else
        {
           return FALSE;
        }
    }

    public function login(Request $request)
    {
        if(Auth::attempt(['nik' => $request->input('nik'),
        'password' => $request->input('password')]))
        {
            return redirect('/home');
        }
        return redirect('/login')->with('error','NIK atau password salah');
    }

    public function home()
    {
        $data['user'] = Auth::user();
        // dd(Auth::user());
        switch(Auth::user()->id_jabatan)
        {
            case 1:
                return redirect('/AM-dashboard');
                break;
            case 2:
                return redirect('/Karyawan/dashboard');
                break;
            case 3:
                return redirect('/Karyawan/dashboard');
                break;
            case 4:
                return redirect('/Karyawan/dashboard');
                break;
            default:
                Auth::logout();
                return redirect('/')->with('error','User tidak dikenali');
        }
    }

    public function logout(Request $request)
    {
        $user = Auth::User();
        Auth::logout();
    }
}
