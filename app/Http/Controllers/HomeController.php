<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AspekBisnis;
use App\Jabatan;
use App\LatarBelakang;
use App\Mitra;
use App\Pelanggan;
use App\Proyek;
use App\User;
use App\UnitKerja;
use DB;

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
        $proyek = DB::table('proyek')->leftjoin('aspek_bisnis','aspek_bisnis.id_proyek','=','proyek.id_proyek')->select('proyek.id_proyek','judul','saat_penggunaan','pemasukan_dokumen','ready_for_service','skema_bisnis','masa_kontrak','jenis_pelanggan','alamat_delivery','layanan_revenue','beban_mitra','nilai_kontrak','margin_tg','rp_margin')->get();
        return view('AM.dashboard', ['proyek'=>$proyek]);
        // return view('AM.dashboard');
    }
}
