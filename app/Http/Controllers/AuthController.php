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
		$jabatan = DB::table('jabatan')->select('id_jabatan','nama_jabatan')->orderBy('nama_jabatan')->get();
        return view('auth.register', ['jabatan'=>$jabatan]);
    }
    
    public function register(Request $request)
    {
        $isDuplicate = $this->checkNIK($request->nik);
        if ($isDuplicate)
        {
            return redirect('/register')->with('error','NIK sudah pernah terdaftar !');
        }

        $user = new User();
        $user->nik = $request->input('nik');
        $user->password = bcrypt($request->input('password'));
        $user->id_jabatan = $request->input('id_jabatan');
        $user->nama = $request->input('nama');
        $user->save();

        return redirect()->route('login';
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
        $credentials = [
        'nik' => $request['nik'],
        'password' => $request['password'] ];

        // dd($credentials);
        if(Auth::attempt($credentials))
        {
            return redirect()->route('index');
        }
        return redirect()->route('login')->with('error','NIK atau password salah');
    }

    public function home()
    {
        $data['user'] = Auth::user();
        
        dd(Auth::user());
        switch(Auth::user()->id_jabatan)
        {
            case 1:
                return redirect()->route('home');
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
        return redirect()->route('login');
    }
}
