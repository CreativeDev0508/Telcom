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


	public function indexWitel()
	{
		// $wilayah = DB::table('wilayah')
		// ->get();
		// $data = DB::table('wilayah AS u')
		// ->select('u.*', DB::raw('(select name FROM users WHERE id = u.SE) AS SE', '(select name FROM users WHERE id = u.Bidding) AS Bidding', '(select name FROM users WHERE id = u.Manager) AS Manager'))->get();
		$wilayah = DB::table('wilayah')->get();
		$user = DB::table('users')->get();
		// dd($wilayah);
		$se = DB::table('wilayah') 
            ->leftjoin('users','users.id','=','wilayah.se')->where('id_jabatan',2)
            ->get();
        $bidding = DB::table('wilayah') 
            ->leftjoin('users','users.id','=','wilayah.bidding')->where('id_jabatan',3)
            ->get();
        $manager = DB::table('wilayah') 
            ->leftjoin('users','users.id','=','wilayah.manager')->where('id_jabatan',4)
            ->get();
        $deputy = DB::table('wilayah') 
            ->leftjoin('users','users.id','=','wilayah.deputy')->where('id_jabatan',5)
            ->get();
        $gm = DB::table('wilayah') 
            ->leftjoin('users','users.id','=','wilayah.gm')->where('id_jabatan',6)
            ->get();
        $approval = DB::table('wilayah') 
            ->leftjoin('users','users.id','=','wilayah.approval')->where('id_jabatan',7)
            ->get();
		return view('AM.jabatan', ['wilayah'=>$wilayah, 'user'=>$user, 'se'=>$se, 'bidding'=>$bidding, 'manager'=>$manager, 'deputy'=>$deputy, 'gm'=>$gm, 'approval'=>$approval]);
	}

	public function insertWitel(Request $request)
	{

		$wilayah = new Wilayah;
		$wilayah->nama_wilayah = $request->input('nama_wilayah');
		$wilayah->se = $request->input('se');
		$wilayah->bidding = $request->input('bidding');
		$wilayah->manager = $request->input('manager');
		$wilayah->deputy = $request->input('deputy');
		$wilayah->gm = $request->input('gm');
		$wilayah->approval = $request->input('approval');
		$wilayah->save();
		return redirect()->route('witel');
	}

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