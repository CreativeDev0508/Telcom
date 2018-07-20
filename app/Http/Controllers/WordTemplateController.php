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

        $data = DB::table('proyek')->where('id_proyek','=',$id)->first();
        
        $templateProcessor = new TemplateProcessor('template/template_p1.docx');
        $templateProcessor->setValue('jenisPelanggan', 'ENTERPRISE');
        $templateProcessor->setValue('judul', $data->judul);
        $templateProcessor->setValue('unitKerja', 'GES WITEL SURABAYA');
        $templateProcessor->setValue('bebanMitra', '69,120,000');
        $templateProcessor->setValue('saatPenggunaan', 'Feb 2018');
        $templateProcessor->setValue('lb1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nec libero pulvinar, vehicula tortor ac, dictum urna. Curabitur efficitur sem ut purus dignissim, sit amet ultrices tellus aliquam. Proin imperdiet volutpat cursus. Donec fringilla diam risus, non tincidunt magna condimentum non. Pellentesque ultricies enim magna, vitae tristique justo viverra eu. Suspendisse tristique lacinia ipsum, at dignissim purus auctor et. Fusce nibh metus, egestas quis felis sit amet, pretium consequat quam. Nulla non felis augue. Suspendisse porttitor mi sed elit finibus sodales. Integer at eleifend lorem, ac volutpat nisl. Ut venenatis feugiat nibh. In sollicitudin facilisis fringilla. Ut vel tristique tortor. ');
        $templateProcessor->setValue('lb2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nec libero pulvinar, vehicula tortor ac, dictum urna. Curabitur efficitur sem ut purus dignissim, sit amet ultrices tellus aliquam. Proin imperdiet volutpat cursus. Donec fringilla diam risus, non tincidunt magna condimentum non. Pellentesque ultricies enim magna, vitae tristique justo viverra eu. Suspendisse tristique lacinia ipsum, at dignissim purus auctor et. Fusce nibh metus, egestas quis felis sit amet, pretium consequat quam. Nulla non felis augue. Suspendisse porttitor mi sed elit finibus sodales. Integer at eleifend lorem, ac volutpat nisl. Ut venenatis feugiat nibh. In sollicitudin facilisis fringilla. Ut vel tristique tortor. ');
        $templateProcessor->setValue('pelanggan', 'RSUD Dr Soetomo');
        $templateProcessor->setValue('namaMitra', 'KOPKAR SMART MEDIA');
        $templateProcessor->setValue('readyForService', 'Februari 2018');
        $templateProcessor->setValue('alamatDelivery', 'Jl. Mayjen. Prof. Dr. Moestopo No. 6-8, Airlangga Gubeng, Surabaya 60286');

        // $templateProcessor->setValue('skema1', '̶S̶e̶w̶a̶ ̶M̶u̶r̶n̶i̶');
        $templateProcessor->setValue('skema1', 'Sewa Murni');
        // $templateProcessor->setValue('skema2', 'Sewa Beli');
        $templateProcessor->setValue('skema2', '̶S̶e̶w̶a̶ ̶B̶e̶l̶i̶');
        // $templateProcessor->setValue('skema3', 'Pengadaan Beli putus (ada masa garansi)');
        $templateProcessor->setValue('skema3', '̶P̶e̶n̶g̶a̶d̶a̶a̶n̶ ̶B̶e̶l̶i̶ ̶p̶u̶t̶u̶s̶ ̶(̶a̶d̶a̶ ̶m̶a̶s̶a̶ ̶g̶a̶r̶a̶n̶s̶i̶)̶');
        
        // $templateProcessor->setValue('layanan1', 'bulanan');
        $templateProcessor->setValue('layanan1', '̶b̶u̶l̶a̶n̶a̶n̶');
        // $templateProcessor->setValue('layanan2', 'tahunan');
        $templateProcessor->setValue('layanan2', '̶t̶a̶h̶u̶n̶a̶n̶');
        $templateProcessor->setValue('layanan3', 'OTC');
        // $templateProcessor->setValue('layanan3', '̶O̶T̶C̶');

        $templateProcessor->setValue('nilaiKontrak', '368,520,000');
        $templateProcessor->setValue('bebanMitra', '69,120,000');
        $templateProcessor->setValue('marginTg', '4');
        $templateProcessor->setValue('rpMargin', '2,880,000');
        $templateProcessor->setValue('masaKontrak', '12');
        $templateProcessor->setValue('pemasukanDokumen', 'Februari 2018');
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
            $templateProcessor->saveAs('results/P1 - '.$data->judul.'.docx');
            // $objectWriter->save(storage_path('P1 - Pekerjaan Penyediaan CPE Managed Services untuk Layanan Astinet, Indihome dan Wifi Station untuk RSUD Dr Soetomo.docx'));
        }
        catch (Exception $e){

        }
        return response()->download('results/P1 - '.$data->judul.'.docx');
    }
}
