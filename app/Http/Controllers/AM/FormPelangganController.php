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

class FormPelangganController extends Controller
{
	public function _construct()
	{
		$this->middleware('auth');
	}


	///////////////////// PELANGGAN ////////////////////////////
	public function indexPelanggan()
	{
        $auth = Auth::user()->id;
        
		$pelanggan = DB::table('pelanggan')->get();
		$proyek = DB::table('proyek')->get();
		return view('AM.form-pelanggan', ['pelanggan'=>$pelanggan, 'auth'=>$auth, 'proyek'=>$proyek]);
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

		$getPelanggan = $pelanggan->id_pelanggan;

		$proyek = New Proyek;
		$proyek->id_proyek = $request->input('id_proyek');
		$proyek->id_pelanggan = $request->input('id_pelanggan',$getPelanggan);
		$proyek->id_users = Auth::user()->id;
		$proyek->save();

		$getProyek = $proyek->id_proyek;

		$aspek = New AspekBisnis;
		$aspek->id_aspek = $request->input('id_aspek');
		$aspek->id_proyek = $request->input('id_proyek',$getProyek);
		$aspek->save();

		// dd($pelanggan,$proyek,$aspek);
		return redirect()->route('proyek_single', ['id_pelanggan'=>$pelanggan->id_pelanggan, 'id_proyek' => $proyek->id_proyek, 'id_aspek' => $aspek->id_aspek, ]);
	
	}

	public function singlePelanggan($id_pelanggan,$id_proyek,$id_aspek)
    {
    	$data['proyek'] = Proyek::find($id_proyek)->where('id_proyek',$id_proyek)->get();
		$data['pelanggan'] =Pelanggan::find($id_pelanggan)->where('id_pelanggan',$id_pelanggan)->get();
		$data['aspek'] =AspekBisnis::find($id_aspek)->where('id_aspek',$id_aspek)->get();
    	return view('AM.form-pelanggan-update',$data);
    }

	public function updatePelanggan(Request $request,$id_pelanggan,$id_proyek,$id_aspek)
    {
    	$pelanggan = Pelanggan::find($id_pelanggan);
		$pelanggan->id_pelanggan = $request->input('id_pelanggan',$id_pelanggan);
		$pelanggan->nama_pelanggan = $request->input('nama_pelanggan');
		$pelanggan->nomor_telepon = $request->input('nomor_telepon');
		$pelanggan->alamat_pelanggan = $request->input('alamat_pelanggan');
		$pelanggan->jenis_pelanggan = $request->input('jenis_pelanggan');
		$pelanggan->save();
    	
    	$proyek = Proyek::find($id_proyek);
		$proyek->id_proyek = $request->input('id_proyek',$id_proyek);
		$proyek->id_pelanggan = $request->input('id_pelanggan',$id_pelanggan);
		$proyek->id_users = Auth::user()->id;
		$proyek->save();

		
		$aspek = AspekBisnis::find($id_aspek);
		$aspek->id_aspek = $request->input('id_aspek',$id_aspek);
		$aspek->id_proyek = $request->input('id_proyek',$id_proyek);
		$aspek->save();

		// dd($pelanggan, $proyek, $aspek);
	   	return redirect()->route('proyek_single', ['id_pelanggan' => $pelanggan->id_pelanggan, 'id_proyek' => $proyek->id_proyek, 'id_aspek' => $aspek->id_aspek]);
    }


}