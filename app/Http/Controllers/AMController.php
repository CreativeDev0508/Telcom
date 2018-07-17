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
    public function insertPelanggan(Request $request)
    {
		$pelanggan = New Pelanggan;
		$pelanggan->id_pelanggan = $request->input('id_pelanggan');
		$pelanggan->nama_pelanggan = $request->input('nama_pelanggan');
		$pelanggan->nomor_telepon = $request->input('nomor_telepon');
		$pelanggan->alamat_pelanggan = $request->input('alamat_pelanggan');
		$pelanggan->save();
		return redirect('/AM-dashboard');
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
		$proyek->unit_kerja = $request->input('unit_kerja');
		$proyek->saat_penggunaan = $request->input('saat_penggunaan');
		$proyek->pemasukan_dokumen = $request->input('pemasukan_dokumen');
		$proyek->ready_for_service = $request->input('ready_for_service');
		$proyek->skema_bisnis = $request->input('skema_bisnis');
		$proyek->masa_kontrak = $request->input('masa_kontrak');
		$proyek->jenis_pelanggan = $request->input('jenis_pelanggan');
		$proyek->alamat_delivery = $request->input('alamat_delivery');
		$pelanggan->save();
		return redirect('/AM-dashboard');
	}
}
