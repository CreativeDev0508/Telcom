<?php

namespace App\Http\Controllers\AM;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
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

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index() 
    { 
        $proyek = DB::table('proyek') 
            ->leftjoin('users','users.id','=','proyek.id_users')->where('users.id',Auth::user()->id) 
            ->leftjoin('aspek_bisnis', 'aspek_bisnis.id_proyek', '=', 'proyek.id_proyek') 
            ->leftjoin('pelanggan', 'pelanggan.id_pelanggan', '=', 'proyek.id_pelanggan') 
            ->leftjoin('mitra','mitra.id_mitra','=','proyek.id_mitra') 
            ->leftjoin('unit_kerja','unit_kerja.id_unit_kerja','=','proyek.id_unit_kerja') 
            ->get(); 

        $setuju = DB::table('proyek')->where('status_pengajuan',1)->orWhere('status_pengajuan',2)
            ->leftjoin('users','users.id','=','proyek.id_users')->where('users.id',Auth::user()->id)
            ->leftjoin('aspek_bisnis', 'aspek_bisnis.id_proyek', '=', 'proyek.id_proyek') 
            ->leftjoin('pelanggan', 'pelanggan.id_pelanggan', '=', 'proyek.id_pelanggan') 
            ->leftjoin('mitra','mitra.id_mitra','=','proyek.id_mitra') 
            ->leftjoin('unit_kerja','unit_kerja.id_unit_kerja','=','proyek.id_unit_kerja')
            ->get();

        if(Auth::user()->id_jabatan == 2)
        {
            return view('SE.dashboard', ['proyek'=>$proyek,'setuju'=>$setuju,]);
        }
        else
        {
            return view('AM.dashboard', ['proyek'=>$proyek,'setuju'=>$setuju,]); 
        }
    }

    public function insertBukti(Request $request,$id_proyek)
    {
        // $this->validate($request, ['gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048' ]);
        
        $bukti_scan = $request->file('bukti_scan');
        $name = $bukti_scan->getClientOriginalName();
        $destinationPath = public_path('/bukti_scan');
        $bukti_scan->move($destinationPath, $name);

        $proyek = Proyek::find($id_proyek);
        $proyek->id_proyek = $request->input('id_proyek',$id_proyek);
        $proyek->bukti_scan = $name;
        // dd($proyek);
        $proyek->save();

        // dd($proyek, $pelanggan, $aspek);
        return redirect()->route('index');
    }

    public function updateBukti(Request $request,$id_proyek)
    {

        $proyek = Proyek::find($id_proyek);
        $proyek->id_proyek = $request->input('id_proyek',$id_proyek);
        $proyek->bukti_scan = NULL;
        // dd($proyek);
        $proyek->save();
            
        // dd($proyek, $pelanggan, $aspek);
        return redirect()->route('index');
    }

    public function updateStatus(Request $request, $id_proyek)
    {
        $proyek = Proyek::find($id_proyek);
        $proyek->status_pengajuan = $request->input('status_pengajuan');
        $proyek->keterangan_proyek = $request->input('keterangan_proyek');
        $proyek->save();

        // dd($proyek);

        $data = DB::table('proyek')
            ->leftJoin('mitra', 'proyek.id_mitra', '=', 'mitra.id_mitra')
            ->leftJoin('aspek_bisnis', 'proyek.id_proyek', '=', 'aspek_bisnis.id_proyek')
            ->leftJoin('pelanggan', 'proyek.id_pelanggan', '=', 'pelanggan.id_pelanggan')
            ->where('proyek.id_proyek',$id_proyek)
            ->first();

    if($data->status_pengajuan == 1)
    {     
        $json = file_get_contents('https://api.telegram.org/bot637226509:AAHjfZr8JL58k7nxKKoAQPmxehclmAJHAlI/getUpdates');
        $obj = json_decode($json, true);
        $array = array();

        for ($i=0; $i<count($obj['result']); $i++)
        {
            print ($obj['result'][$i]['message']['chat']['id']);
            print '<br>';
            $chatid=Chatroom::where('chat_id','=', input::get('chat_id', $obj['result'][$i]['message']['chat']['id']))->first();
            if($chatid === null){
                $chatroom = new Chatroom;
                $count = Chatroom::count();
                $chatroom->id = Chatroom::count()+1;
                $chatroom->chat_id = input::get('chat_id', $obj['result'][$i]['message']['chat']['id']);
                $chatroom->save();
            }
        }

        $text = 
        "ALERT!
Ada proyek baru yang telah disetujui '".$data->judul."'
Dengan rincian sebagai berikut:
    - Account Manager : ".Auth::user()->name."
    - Pelanggan : ".$data->nama_pelanggan."
    - Ready for service : ".date('d F Y', strtotime($data->ready_for_service))."
    - Nilai kontrak : ".number_format($data->nilai_kontrak)."

        ";

        for ($i=1; $i<=Chatroom::count(); $i++)
        {
            $result = Chatroom::select('chat_id')->where('id', $i)->first();
            $response = Telegram::sendMessage([
                'chat_id' => $result->chat_id, 
                'text' => $text,
                'parse_mode' => 'HTML'
            ]);
        }
        $messageId = $response->getMessageId();

        return redirect()->route('index');
    }

    elseif($data->status_pengajuan == 2)
    {     
        $json = file_get_contents('https://api.telegram.org/bot637226509:AAHjfZr8JL58k7nxKKoAQPmxehclmAJHAlI/getUpdates');
        $obj = json_decode($json, true);
        $array = array();

        for ($i=0; $i<count($obj['result']); $i++)
        {
            print ($obj['result'][$i]['message']['chat']['id']);
            print '<br>';
            $chatid=Chatroom::where('chat_id','=', input::get('chat_id', $obj['result'][$i]['message']['chat']['id']))->first();
            if($chatid === null){
                $chatroom = new Chatroom;
                $count = Chatroom::count();
                $chatroom->id = Chatroom::count()+1;
                $chatroom->chat_id = input::get('chat_id', $obj['result'][$i]['message']['chat']['id']);
                $chatroom->save();
            }
        }

        $text = 
        "ALERT!
Proyek '".$data->judul."' telah dibatalkan
Dengan alasan: ".$data->keterangan_proyek."
Dengan rincian sebagai berikut:
    - Account Manager : ".Auth::user()->name."
    - Pelanggan : ".$data->nama_pelanggan."

        ";

        for ($i=1; $i<=Chatroom::count(); $i++)
        {
            $result = Chatroom::select('chat_id')->where('id', $i)->first();
            $response = Telegram::sendMessage([
                'chat_id' => $result->chat_id, 
                'text' => $text,
                'parse_mode' => 'HTML'
            ]);
        }
        $messageId = $response->getMessageId();

        return redirect()->route('index');
    }

    else
    {
        return redirect()->route('index');
    }

        
    }

    public function deleteProyek($id_proyek)
    {
        $idPelanggan = DB::table('proyek')->select('id_pelanggan')->where('id_proyek',$id_proyek)->first()->id_pelanggan;
        DB::table('pelanggan')->where('id_pelanggan',$idPelanggan)->delete();
        DB::table('latar_belakang')->where('id_proyek',$id_proyek)->delete();
        DB::table('proyek')->where('id_proyek',$id_proyek)->delete();
        return redirect()->route('index');
    }
}
