<?php

namespace App\Http\Controllers\AM;

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
// use Input;

class FormProyekController extends Controller
{
	public function _construct()
	{
		$this->middleware('auth');
	}


    //////////////////////// PROYEK /////////////////////////////
	public function indexProyek($id_pelanggan,$id_proyek,$id_aspek)
    {
		$data['pelanggan'] = Pelanggan::find($id_pelanggan)->select('id_pelanggan')->where('id_pelanggan',$id_pelanggan)->get();
		$data['proyek'] = Proyek::find($id_proyek)->where('id_proyek',$id_proyek)->get();
		$data['aspek'] = AspekBisnis::find($id_aspek)->select('id_aspek')->where('id_aspek',$id_aspek)->get();
		$data['unit'] = DB::table('unit_kerja')->select('id_unit_kerja','nama_unit_kerja')->orderBy('nama_unit_kerja')->get();
		$data['mitra'] = DB::table('mitra')->select('id_mitra','nama_mitra')->orderBy('nama_mitra')->get();
    	return view('AM.form-proyek',$data);
    }

	public function insertProyek(Request $request,$id_pelanggan,$id_proyek,$id_aspek)
    {
    	// $this->validate($request, ['gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048' ]);

    	if($request->hasFile('file'))
    	{
			$file = $request->file('file');
        	$name = $file->getClientOriginalName();
        	$destinationPath = public_path('/images');
        	$file->move($destinationPath, $name);

			$proyek = Proyek::find($id_proyek);
			$proyek->id_proyek = $request->input('id_proyek',$id_proyek);
			$proyek->id_mitra = $request->input('id_mitra');
			$proyek->id_pelanggan = $request->input('id_pelanggan',$id_pelanggan);
			$proyek->judul = $request->input('judul');
			$proyek->id_unit_kerja = $request->input('id_unit_kerja');
			$proyek->latar_belakang_1 = $request->input('latar_belakang_1');
			$proyek->latar_belakang_2 = $request->input('latar_belakang_2');
			$proyek->saat_penggunaan = $request->input('saat_penggunaan');
			$proyek->pemasukan_dokumen = $request->input('pemasukan_dokumen');
			$proyek->ready_for_service = $request->input('ready_for_service');
			$proyek->skema_bisnis = $request->input('skema_bisnis');
			$proyek->masa_kontrak = $request->input('masa_kontrak');
			$proyek->alamat_delivery = $request->input('alamat_delivery');
			$proyek->mekanisme_pembayaran = $request->input('mekanisme_pembayaran');
			$proyek->rincian_pembayaran = $request->input('rincian_pembayaran');
			$proyek->file = $name;
			// dd($proyek);
			$proyek->save();

			$pelanggan = Pelanggan::find($id_pelanggan);
			$pelanggan->id_pelanggan = $request->input('id_pelanggan',$id_pelanggan);
			$pelanggan->save();

			$aspek = AspekBisnis::find($id_aspek);
			$aspek->id_aspek = $request->input('id_aspek',$id_aspek);
			$aspek->id_proyek = $request->input('id_proyek',$id_proyek);
			$aspek->save();

		// dd($proyek, $pelanggan, $aspek);
		return redirect()->route('aspek_single', ['id_pelanggan' => $pelanggan, 'id_proyek' => $proyek->id_proyek, 'id_aspek' => $aspek]);
		}
		else
		{
			echo "File tidak ditemukan!";
		}
		
	}



}