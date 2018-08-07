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

class FormAspekController extends Controller
{
	public function _construct()
	{
		$this->middleware('auth');
	}


    /////////////////////////////// ASPEK ///////////////////////////
	public function indexAspek($id_pelanggan,$id_proyek,$id_aspek)
	{
		$data['pelanggan'] = Pelanggan::find($id_pelanggan)->select('id_pelanggan')->where('id_pelanggan',$id_pelanggan)->get();
		$data['proyek'] = Proyek::find($id_proyek)->select('id_proyek')->where('id_proyek',$id_proyek)->get();
		$data['aspek'] = AspekBisnis::find($id_aspek)->where('id_aspek',$id_aspek)->get();
		return view('AM.form-aspek',$data);
	}

    public function insertAspek(Request $request,$id_pelanggan,$id_proyek,$id_aspek)
    {
		$aspek = AspekBisnis::find($id_aspek);
		$aspek->id_aspek = $request->input('id_aspek',$id_aspek);
		$aspek->id_proyek = $request->input('id_proyek',$id_proyek);
		$aspek->layanan_revenue = $request->input('layanan_revenue');
		$aspek->beban_mitra = $request->input('beban_mitra');
		$aspek->nilai_kontrak = $request->input('nilai_kontrak');
		$aspek->margin_tg = $request->input('margin_tg');
		$aspek->rp_margin = $request->input('rp_margin');
		$aspek->colocation = $request->input('colocation');
		$aspek->revenue_connectivity = $request->input('revenue_connectivity');
		$aspek->revenue_cpe_proyek = $request->input('revenue_cpe_proyek');
		$aspek->revenue_cpe_mitra = $request->input('revenue_cpe_mitra');
		$aspek->save();

		$pelanggan = Pelanggan::find($id_pelanggan);
		$pelanggan->id_pelanggan = $request->input('id_pelanggan',$id_pelanggan);
		$pelanggan->save();

		$proyek = Proyek::find($id_proyek);
		$proyek->id_proyek = $request->input('id_proyek',$id_proyek);
		$proyek->id_pelanggan = $request->input('id_pelanggan',$id_pelanggan);
		$proyek->id_users = Auth::user()->id;
		$proyek->save();

		return redirect()->route('index');

	}
}