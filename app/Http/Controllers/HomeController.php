<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use App\AspekBisnis;
use App\ChatRoom;
use App\Jabatan;
use App\LatarBelakang;
use App\Mitra;
use App\Pelanggan;
use App\Proyek;
use App\User;
use App\UnitKerja;
use DB;
use Auth;
use Session;
use Telegram;
use Telegram\Bot\Api;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['user'] = Auth::user();
        // dd(Auth::user());
        switch(Auth::user()->id_jabatan){
            case 1:
                return redirect('/AM');
                break;
            case 2:
                return redirect('/SE');
                break;
            case 3:
                return redirect('/karyawan');
                break;
            case 4:
                return redirect('/karyawan');
                break;
            case 5:
                return redirect('/karyawan');
                break;
            case 6:
                return redirect('/karyawan');
                break;
            case 7:
                return redirect('/karyawan');
                break;
            default:
                Auth::logout();
                return redirect('/')->with('error','User tidak dikenali');
        }
    }


}
