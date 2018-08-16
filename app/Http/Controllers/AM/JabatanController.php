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
		$jabatan = DB::table('jabatan')->get();
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
		return view('AM.jabatan', ['wilayah'=>$wilayah, 'user'=>$user, 'jabatan'=>$jabatan, 'se'=>$se, 'bidding'=>$bidding, 'manager'=>$manager, 'deputy'=>$deputy, 'gm'=>$gm, 'approval'=>$approval]);
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

	public function updateWitel(Request $request,$id)
	{
		// dd($id);
		$wilayah = Wilayah::find($id);
		$wilayah->id_wilayah = $request->input('id_wilayah',$id);
		$wilayah->nama_wilayah = $request->input('nama_wilayah');
		$wilayah->se = $request->input('se');
		$wilayah->bidding = $request->input('bidding');
		$wilayah->manager = $request->input('manager');
		$wilayah->deputy = $request->input('deputy');
		$wilayah->gm = $request->input('gm');
		$wilayah->approval = $request->input('approval');
		$wilayah->save();
		
		// dd($wilayah);
		return redirect()->route('witel');
	}

	public function deleteWitel($id)
	{
		DB::table('wilayah')->where('id_wilayah',$id)->delete();
		return redirect()->route('witel');
	}


	public function insertPejabat(Request $request)
	{

		$user = new User;
		$user->name = $request->input('name');
		$user->nik = $request->input('nik');
		$user->id_jabatan = $request->input('id_jabatan');
		$user->password = $request->input('password','halohalo');
		$user->email = $request->input('email',$user->nik.'@gmail.com');
		$user->save();

		// dd($user);
		return redirect()->route('witel');
	}

	public function updatePejabat(Request $request,$id)
	{
		// dd($id);
		$user = Wilayah::find($id);
		$user->id = $request->input('id',$id);
		$user->name = $request->input('name');
		$user->nik = $request->input('nik');
		$user->id_jabatan = $request->input('id_jabatan');
		$user->save();
		
		// dd($wilayah);
		return redirect()->route('witel');
	}

	public function deletePejabat($id)
	{
		DB::table('wilayah')->where('id_wilayah',$id)->delete();
		return redirect()->route('witel');
	}

	
}