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
use App\Wilayah;
use DB;
use Auth;
use Session;
use Telegram;
use Telegram\Bot\Api;
// use Input;

class JabatanController extends Controller
{
	public function _construct()
	{
		$this->middleware('auth');
	}


	public function indexJabatan()
	{
		// $wilayah = DB::table('wilayah')
		// ->get();
		// $data = DB::table('wilayah AS u')
		// ->select('u.*', DB::raw('(select name FROM users WHERE id = u.SE) AS SE', '(select name FROM users WHERE id = u.Bidding) AS Bidding', '(select name FROM users WHERE id = u.Manager) AS Manager'))->get();
		$se = DB::table('wilayah') 
            ->leftjoin('users','users.id','=','wilayah.se')->select('users.name','wilayah.nama_wilayah')
            ->get(); 
        $bidding = DB::table('wilayah') 
            ->leftjoin('users','users.id','=','wilayah.bidding')->select('name')
            ->get();
        $manager = DB::table('wilayah') 
            ->leftjoin('users','users.id','=','wilayah.manager')->select('name')
            ->get();
		return view('AM.jabatan', ['se'=>$se, 'bidding'=>$bidding, 'manager'=>$manager]);
	}

	// public function insertUnitKerja(Request $request)
	// {
	// 	$unit_kerja = new UnitKerja;
	// 	$unit_kerja->id_unit_kerja = $request->input('id_unit_kerja');
	// 	$unit_kerja->nama_unit_kerja = $request->input('nama_unit_kerja');
	// 	$unit_kerja->deskripsi_unit_kerja = $request->input('deskripsi_unit_kerja');
	// 	$unit_kerja->save();
	// 	return redirect()->route('unit');
	// }

	// public function updateUnitKerja(Request $request, $id)
	// {
	// 	DB::table('unit_kerja')->where('id_unit_kerja',$id)->update($request->all());
	// 	return redirect()->route('unit');
	// }

	// public function deleteUnitKerja($id)
	// {
	// 	DB::table('unit_kerja')->where('id_unit_kerja',$id)->delete();
	// 	return redirect()->route('unit');
	// }

	
}