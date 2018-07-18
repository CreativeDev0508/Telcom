<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;
use PhpOffice\PhpWord\Settings;
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

    public function createWordDocxP1(){
        $settings = new Settings();
        $settings->setOutputEscapingEnabled(true);

        $templateProcessor = new TemplateProcessor('template/template_p1.docx');
        $templateProcessor->setValue('jenisPelanggan', 'ENTERPRISE');
        $templateProcessor->setValue('judul', 'Pekerjaan Penyediaan CPE Managed Services untuk Layanan Astinet, Indihome dan Wifi Station untuk RSUD Dr Soetomo');
        $templateProcessor->setValue('unitKerja', 'GES WITEL SURABAYA');
        $templateProcessor->setValue('bebanMitra', '69,120,000');
        $templateProcessor->setValue('saatPenggunaan', 'Feb 2018');
        $templateProcessor->setValue('lb1', 'lorem ipsum dolor sit amet');
        $templateProcessor->setValue('lb2', 'lorem ipsum dolor sit amet');
        $templateProcessor->setValue('pelanggan', 'RSUD Dr Soetomo');
        $templateProcessor->setValue('namaMitra', 'KOPKAR SMART MEDIA');
        $templateProcessor->setValue('readyForService', 'Februari 2018');
        $templateProcessor->setValue('alamatDelivery', 'Jl. Mayjen. Prof. Dr. Moestopo No. 6-8, Airlangga Gubeng, Surabaya 60286');
        $templateProcessor->deleteBlock('skema1');
        $templateProcessor->deleteBlock('skema2');
        $templateProcessor->deleteBlock('layanan1');
        $templateProcessor->deleteBlock('layanan2');
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
            $templateProcessor->saveAs('results/P1 - Pekerjaan Penyediaan CPE Managed Services untuk Layanan Astinet, Indihome dan Wifi Station untuk RSUD Dr Soetomo.docx');
            // $objectWriter->save(storage_path('P1 - Pekerjaan Penyediaan CPE Managed Services untuk Layanan Astinet, Indihome dan Wifi Station untuk RSUD Dr Soetomo.docx'));
        }
        catch (Exception $e){

        }
        return response()->download('results/P1 - Pekerjaan Penyediaan CPE Managed Services untuk Layanan Astinet, Indihome dan Wifi Station untuk RSUD Dr Soetomo.docx');
    }
}
