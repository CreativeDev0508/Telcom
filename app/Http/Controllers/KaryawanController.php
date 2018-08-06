<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
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
use Telegram\Bot\Api;
use Telegram;

class KaryawanController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyek = DB::table('proyek')
            ->leftjoin('users', 'users.id', '=', 'proyek.id_users')
            ->leftjoin('aspek_bisnis', 'aspek_bisnis.id_proyek', '=', 'proyek.id_proyek')
            ->leftjoin('pelanggan', 'pelanggan.id_pelanggan', '=', 'proyek.id_pelanggan')
            ->leftjoin('mitra','mitra.id_mitra','=','proyek.id_mitra')
            ->leftjoin('unit_kerja','unit_kerja.id_unit_kerja','=','proyek.id_unit_kerja')
            ->select('proyek.id_proyek', 'judul', 'saat_penggunaan', 'pemasukan_dokumen', 'ready_for_service', 'skema_bisnis', 'masa_kontrak', 'pelanggan.jenis_pelanggan', 'alamat_delivery', 'status_pengajuan', 'layanan_revenue', 'beban_mitra', 'nilai_kontrak', 'margin_tg', 'rp_margin', 'proyek.id_pelanggan', 'nama_pelanggan', 'nomor_telepon', 'alamat_pelanggan','nama_mitra','nama_unit_kerja', 'aspek_bisnis.id_aspek', 'users.name', 'pelanggan.nama_pelanggan', 'aspek_bisnis.margin_tg')
            ->get();
        $latarbelakang = DB::table('proyek')
            ->leftjoin('latar_belakang','latar_belakang.id_proyek','=','proyek.id_proyek')
            ->select('latar_belakang.id_proyek','latar_belakang')
            ->get();
        $pelanggan = DB::table('pelanggan')->get();
        return view('karyawan.dashboard', ['proyek'=>$proyek,'latarbelakang'=>$latarbelakang, 'pelanggan'=>$pelanggan]);
        // return view('AM.dashboard');
    }

}
