<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AspekBisnis;
use App\Jabatan;
use App\LatarBelakang;
use App\Mitra;
use App\Pelanggan;
use App\Proyek;
use App\User;
use DB;

class AMController extends Controller
{
    public function indexPelanggan()
	{
		$pelanggan = DB::table('pelanggan')->get();
		return view('AM.form-pelanggan', ['pelanggan'=>$pelanggan]);
	}

    public function insertPelanggan(Request $request)
    {
		$pelanggan = New Pelanggan;
		$pelanggan->id_pelanggan = $request->input('id_pelanggan');
		$pelanggan->nama_pelanggan = $request->input('nama_pelanggan');
		$pelanggan->nomor_telepon = $request->input('nomor_telepon');
		$pelanggan->alamat_pelanggan = $request->input('alamat_pelanggan');
		$pelanggan->jenis_pelanggan = $request->input('jenis_pelanggan');
		$pelanggan->save();
		return redirect('/AM/form-pelanggan');
	}

	public function indexProyek()
	{
		$proyek = DB::table('proyek')->get();
		$unit = DB::table('unit_kerja')->select('id_unit_kerja','nama_unit_kerja')->orderBy('nama_unit_kerja')->get();
		$mitra = DB::table('mitra')->select('id_mitra','nama_mitra')->orderBy('nama_mitra')->get();
		return view('AM.form-proyek', ['proyek'=>$proyek, 'unit'=>$unit, 'mitra'=>$mitra]);
	}

	public function insertProyek(Request $request)
    {
		$proyek = New Proyek;
		$proyek->id_proyek = $request->input('id_proyek');
		$proyek->id_aspek = $request->input('id_aspek');
		$proyek->id_mitra = $request->input('id_mitra');
		$proyek->nik = $request->input('nik');
		$proyek->id_pelanggan = $request->input('id_pelanggan');
		$proyek->judul = $request->input('judul');
		$proyek->id_unit_kerja = $request->input('id_unit_kerja');
		$proyek->saat_penggunaan = $request->input('saat_penggunaan');
		$proyek->pemasukan_dokumen = $request->input('pemasukan_dokumen');
		$proyek->ready_for_service = $request->input('ready_for_service');
		$proyek->skema_bisnis = $request->input('skema_bisnis');
		$proyek->masa_kontrak = $request->input('masa_kontrak');
		$proyek->jenis_pelanggan = $request->input('jenis_pelanggan');
		$proyek->alamat_delivery = $request->input('alamat_delivery');
		$pelanggan->save();
		return redirect('/AM/form-proyek');
	}
}
