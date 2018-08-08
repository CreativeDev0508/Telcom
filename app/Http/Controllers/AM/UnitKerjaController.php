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

class UnitKerjaController extends Controller
{
	public function _construct()
	{
		$this->middleware('auth');
	}


	////////////////////////// UNIT KERJA ///////////////////////////
	public function indexUnitKerja()
	{
		$unit_kerja = DB::table('unit_kerja')->get();
		return view('AM.unit-kerja', ['unit_kerja'=>$unit_kerja]);
	}

	public function insertUnitKerja(Request $request)
	{
		$unit_kerja = new UnitKerja;
		$unit_kerja->id_unit_kerja = $request->input('id_unit_kerja');
		$unit_kerja->nama_unit_kerja = $request->input('nama_unit_kerja');
		$unit_kerja->deskripsi_unit_kerja = $request->input('deskripsi_unit_kerja');
		$unit_kerja->save();
		return redirect()->route('unit');
	}

	public function updateUnitKerja(Request $request, $id)
	{
		DB::table('unit_kerja')->where('id_unit_kerja',$id)->update($request->all());
		return redirect()->route('unit');
	}

	public function deleteUnitKerja($id)
	{
		DB::table('unit_kerja')->where('id_unit_kerja',$id)->delete();
		return redirect()->route('unit');
	}

	
}