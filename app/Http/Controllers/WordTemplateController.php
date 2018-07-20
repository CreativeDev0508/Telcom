<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;
use PhpOffice\PhpWord\Settings;
use App\AspekBisnis;
use App\Jabatan;
use App\LatarBelakang;
use App\Mitra;
use App\Pelanggan;
use App\Proyek;
use App\User;
use App\UnitKerja;
use DB;

class WordTemplateController extends Controller
{

    public function createWordDocxP0(){
        $templateProcessor = new TemplateProcessor('template/template_p0.docx');
        $templateProcessor->setValue('rowValue#1', 'Sun');

        $objectWriter = \PhpOffice\PhpWord\IOFactory::createWriter($wordTest, 'Word2007');
        try{
            $objectWriter->save(storage_path('TestWordFile.docx'));
        }
        catch (Exception $e){

        }
        return response()->download(storage_path('TestWordFile.docx'));
    }

    public function createWordDocxP1(Request $request, $id){
        $settings = new Settings();
        $settings->setOutputEscapingEnabled(true);

        $proyek = DB::table('proyek')->where('id_proyek','=',$id)->first();
        // $latarbelakang = DB::table('LatarBelakang')->where('id_proyek','=',$id)->first();
        // $pelanggan = DB::table('')->where('','=',$id)->first();
        // $unit_kerja = DB::table('')->where('','=',$id)->first();
        // $pelanggan = DB::table('')->where('','=',$id)->first();
        // $mitra = DB::table('')->where('','=',$id)->first();
        // $aspekbisnis = DB::table('AspekBisnis')->where('id_proyek','=',$id)->first();
        
        $templateProcessor = new TemplateProcessor('template/template_p1.docx');
        $templateProcessor->setValue('jenisPelanggan', $proyek->jenis_pelanggan);
        $templateProcessor->setValue('judul', $proyek->judul);
        // $templateProcessor->setValue('tahun', $proyek->tahun);
        // $templateProcessor->setValue('unitKerja', $unitkerja->nama_unit_kerja);
        // $templateProcessor->setValue('bebanMitra', $aspekbisnis->beban_mitra);
        $templateProcessor->setValue('saatPenggunaan', $proyek->saat_penggunaan);

        // foreach ($latarbelakang as $lb) {
        //     $i++;
        //     $templateProcessor->setValue('lb'.$i , $lb->latar_belakang);
        // }

        // $templateProcessor->setValue('pelanggan', $pelanggan->nama_pelanggan);
        // $templateProcessor->setValue('namaMitra', $mitra->nama_mitra);
        $templateProcessor->setValue('readyForService', $proyek->ready_for_service);
        $templateProcessor->setValue('alamatDelivery', $proyek->alamat_delivery);

        if($proyek->skema_bisnis == 'Sewa Murni'){
            $templateProcessor->setValue('skema1', 'Sewa Murni');
            $templateProcessor->setValue('skema2', '̶S̶e̶w̶a̶ ̶B̶e̶l̶i̶');
            $templateProcessor->setValue('skema3', '̶P̶e̶n̶g̶a̶d̶a̶a̶n̶ ̶B̶e̶l̶i̶ ̶p̶u̶t̶u̶s̶ ̶(̶a̶d̶a̶ ̶m̶a̶s̶a̶ ̶g̶a̶r̶a̶n̶s̶i̶)̶');
        }
        elseif($proyek->skema_bisnis == 'Sewa Beli'){
            $templateProcessor->setValue('skema1', '̶S̶e̶w̶a̶ ̶M̶u̶r̶n̶i̶');
            $templateProcessor->setValue('skema2', 'Sewa Beli');
            $templateProcessor->setValue('skema3', '̶P̶e̶n̶g̶a̶d̶a̶a̶n̶ ̶B̶e̶l̶i̶ ̶p̶u̶t̶u̶s̶ ̶(̶a̶d̶a̶ ̶m̶a̶s̶a̶ ̶g̶a̶r̶a̶n̶s̶i̶)̶');    
        }
        else{
            $templateProcessor->setValue('skema1', '̶S̶e̶w̶a̶ ̶M̶u̶r̶n̶i̶');
            $templateProcessor->setValue('skema2', '̶S̶e̶w̶a̶ ̶B̶e̶l̶i̶');
            $templateProcessor->setValue('skema3', 'Pengadaan Beli putus (ada masa garansi)');
        }
        
        // if($aspekbisnis->layanan_revenue == 'bulanan'){
        //     $templateProcessor->setValue('layanan1', 'bulanan');
        //     $templateProcessor->setValue('layanan2', '̶t̶a̶h̶u̶n̶a̶n̶');
        //     $templateProcessor->setValue('layanan3', '̶O̶T̶C̶');
        // }
        // elseif ($aspekbisnis->layanan_revenue == 'tahunan') {
        //     $templateProcessor->setValue('layanan1', '̶b̶u̶l̶a̶n̶a̶n̶');
        //     $templateProcessor->setValue('layanan2', 'tahunan');
        //     $templateProcessor->setValue('layanan3', '̶O̶T̶C̶');
        // }
        // else{
        //     $templateProcessor->setValue('layanan1', '̶b̶u̶l̶a̶n̶a̶n̶');
        //     $templateProcessor->setValue('layanan2', '̶t̶a̶h̶u̶n̶a̶n̶');
        //     $templateProcessor->setValue('layanan3', 'OTC');    
        // }

        // $templateProcessor->setValue('nilaiKontrak', $aspekbisnis->nilai_kontrak);
        // $templateProcessor->setValue('marginTg', $aspekbisnis->margin_tg);
        // $templateProcessor->setValue('rpMargin', $aspekbisnis->rp_margin);
        $templateProcessor->setValue('masaKontrak', $proyek->masa_kontrak);
        $templateProcessor->setValue('pemasukanDokumen', $proyek->pemasukan_dokumen);
        $templateProcessor->setValue('am', 'MUNARTI');
        $templateProcessor->setValue('nikAm', '720336');
        $templateProcessor->setValue('jabatanAm', 'ACCOUNT MANAGER');
        $templateProcessor->setValue('se', 'I PUTU AGUS PICASTANA');
        $templateProcessor->setValue('nikSe', '870036');
        $templateProcessor->setValue('jabatanSe', 'ASMAN GES SALES ENGINEER');
        $templateProcessor->setValue('bidding', 'DETRI YUSZIANI');
        $templateProcessor->setValue('nikBidding', '640579');
        $templateProcessor->setValue('jabatanBidding', 'ASMAN GES OBL & BIDDING MANAGEMENT');
        $templateProcessor->setValue('manager', 'YUSUF HARYANTO');
        $templateProcessor->setValue('nikManager', '740290');
        $templateProcessor->setValue('jabatanManager', 'MGR GOVERNMENT & ENTERPRISE SERVICE');
        $templateProcessor->setValue('deputy', 'MEYLA KUSUMADIARTI RR,ST');
        $templateProcessor->setValue('nikDeputy', '720205');
        $templateProcessor->setValue('jabatanDeputy', 'DEPUTY GM WITEL SURABAYA');
        $templateProcessor->setValue('gm', 'MUHAMMAD NASRUN IHSAN');
        $templateProcessor->setValue('nikGm', '720099');
        $templateProcessor->setValue('jabatanGm', 'GM WITEL SURABAYA');

        // $objectWriter = \PhpOffice\PhpWord\IOFactory::createWriter($wordTest, 'Word2007');
        try{
            $templateProcessor->saveAs('results/P1 - '.$proyek->judul.'.docx');
            // $objectWriter->save(storage_path('P1 - Pekerjaan Penyediaan CPE Managed Services untuk Layanan Astinet, Indihome dan Wifi Station untuk RSUD Dr Soetomo.docx'));
        }
        catch (Exception $e){

        }
        return response()->download('results/P1 - '.$proyek->judul.'.docx');
    }
}
