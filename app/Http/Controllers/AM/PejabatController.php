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

class PejabatController extends Controller
{
	public function _construct()
	{
		$this->middleware('auth');
	}


	public function indexPejabat()
	{

		$user = DB::table('users')
				->leftjoin('wilayah','users.id','=','wilayah.se')
				->leftjoin('jabatan','users.id_jabatan','=','jabatan.id_jabatan')
				->get();
		$jabatan = DB::table('jabatan')->get();
		
		return view('AM.pejabat', ['user'=>$user, 'jabatan'=>$jabatan]);
	}

	public function insertPejabat(Request $request)
	{

		$user = new User;
		$user->name = $request->input('name');
		$user->nik = $request->input('nik');
		$user->id_jabatan = $request->input('id_jabatan');
		$user->email = $request->input('email');
		$user->password = $request->input('password');
		$user->save();
		// dd($user);
		// if($user->email == NULL)
		// {	
		// 	$user->nik = $request->input('nik');
		// 	$user->email = $request->('email',$user->nik.'@gmail.com');
		// 	// dd($user);
		// 	$user->save();
		// 	if($request->input('password',NULL))
		// 	{
		// 		$user->password = $request->input('password','halohalo');
		// 		$user->save();
		// 	}
		// 	else
		// 	{
		// 		$user->password = $request->input('password');
		// 		$user->save();
		// 	}
		// }
		// else
		// {
		// 	$user->email = $request->input('email');
		// 	$user->save();
		// 	if($request->input('password',NULL))
		// 	{
		// 		$user->password = $request->input('password','halohalo');
		// 		$user->save();
		// 	}
		// 	else
		// 	{
		// 		$user->password = $request->input('password');
		// 		$user->save();
		// 	}
			
		// }

		// dd($user);
		return redirect()->route('pejabat');
	}

	public function updatePejabat(Request $request,$id)
	{
		// dd($id);
		$user = User::find($id);
		$user->id = $request->input('id',$id);
		$user->name = $request->input('name');
		$user->nik = $request->input('nik');
		$user->id_jabatan = $request->input('id_jabatan');
		$user->email = $request->input('email');
		$user->password = $request->input('password');
		$user->save();
		
		// dd($wilayah);
		return redirect()->route('pejabat');
	}

	public function deletePejabat($id)
	{
		DB::table('users')->where('id',$id)->delete();
		return redirect()->route('pejabat');
	}



	
}