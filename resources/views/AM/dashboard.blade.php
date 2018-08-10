@extends('layouts.app')

@section('link')
<link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- animation CSS -->
<link href="css/animate.css" rel="stylesheet">
<!-- Menu CSS -->
<link href="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
<!-- toast CSS -->
<link href="plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
<!-- morris CSS -->
<link href="plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
<!-- chartist CSS -->
<link href="plugins/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
<link href="plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
<!-- Calendar CSS -->
<link href="plugins/bower_components/calendar/dist/fullcalendar.css" rel="stylesheet" />
<link rel="stylesheet" href="plugins/bower_components/dropify/dist/css/dropify.min.css">
<!-- Custom CSS -->
<link href="css/animate.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<!-- color CSS -->
<link href="css/colors/default.css" id="theme" rel="stylesheet">
<!-- CSS tambahan -->
<link href="css/mystyle.css" rel="stylesheet">
<!-- Toggle CSS -->
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<!--alerts CSS -->
<link href="plugins/bower_components/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
{{-- Datatable --}}
<link rel="stylesheet" type="text/css" href="plugins/datatables/dataTables.bootstrap4.min.css"/>

@endsection

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Different data widgets -->
        <!-- ============================================================== -->
        <!-- .row -->
        <br>
        <br>
        <div class="row">

            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
            {{-- {{Auth::user()->id_jabatan}} --}}
            <div class="col-sm-12">
                <div class="white-box">
                    <div class="table-responsive">
                        <table class="table color-table warning-table example">
                            <thead>
                                <tr>
                                    <th colspan=6>SEDANG BERJALAN</th>
                                </tr>
                                <tr>
                                    <th class="text-center" style="background-color: white; color: black;">No.</th>
                                    <th class="text-center" style="background-color: white; color: black;">Nama Kegiatan</th>
                                    <th class="text-center" style="background-color: white; color: black;">Nilai Kontrak</th>
                                    <th class="text-center" style="background-color: white; color: black;">Profit</th>
                                    <th class="text-center" style="background-color: white; color: black;">Ready For Service</th>
                                    <th class="text-center" style="background-color: white; color: black;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php $x=1; ?>
                                @foreach($proyek->where('status_pengajuan','=',NULL)->sortBy('id_proyek') as $listproyek)
                                <tr class="fuckOffPadding">
                                    <td style="vertical-align: middle;"><?php echo $x; $x=$x+1; ?></td>
                                    <td style="vertical-align: middle;">{{$listproyek->judul}}</td>
                                    <td style="vertical-align: middle;">{{number_format($listproyek->nilai_kontrak)}}</td>
                                    <td style="vertical-align: middle;">{{$listproyek->margin_tg}} %</td>
                                    <td style="vertical-align: middle;">{{date('d F Y', strtotime($listproyek->ready_for_service))}}</td>
                                    <td style="vertical-align: middle;">
                                        <a href="{{ route('pelanggan_single', ['id_pelanggan' => $listproyek->id_pelanggan, 'id_proyek' => $listproyek->id_proyek, 'id_aspek' => $listproyek->id_aspek]) }}" class="btn btn-default"><i class="fa fa-edit"></i></a>
                                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#view-{{$listproyek->id_proyek}}"><i class="fa fa-folder-open"></i></button>
                                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#upload-{{$listproyek->id_proyek}}"><i class="fa fa-upload"></i></button>
                                        <div class="btn-group dropup m-r-10">
                                            <button aria-expanded="false" data-toggle="dropdown" class="btn btn-default dropdown-toggle waves-effect waves-light" type="button"><i class="fa fa-download"></i><span class="caret"></span></button>
                                            <ul role="menu" class="dropdown-menu" style="min-width: 0">
                                                @if(empty($listproyek->colocation))
                                                <li><a href="#" class="disableditem" aria-disabled="true">P0</a></li>
                                                @else
                                                <li><a href="{{ route('print_p0', ['id' => $listproyek->id_proyek]) }}">P0</a></li>
                                                @endif
                                                <li><a href="{{ route('print_p1', ['id' => $listproyek->id_proyek]) }}">P1</a></li>
                                            </ul>
                                        </div>
                                        <div class="modal fade" id="view-{{$listproyek->id_proyek}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h4 class="modal-title" id="myLargeModalLabel" style="font-weight: 450;">{{$listproyek->judul}}</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="panel panel-default">
                                                            <div class="panel-body">
                                                                <ul class="nav nav-pills m-b-30 ">
                                                                    <li class="active"> <a href="#profilpelanggan-onprogress-{{$listproyek->id_proyek}}" data-toggle="tab" aria-expanded="false">Profil Pelanggan</a> </li>
                                                                    <li class=""> <a href="#proyekkegiatan-onprogress-{{$listproyek->id_proyek}}" data-toggle="tab" aria-expanded="false">Proyek/Kegiatan</a> </li>
                                                                    <li> <a href="#aspekbisnis-onprogress-{{$listproyek->id_proyek}}" data-toggle="tab" aria-expanded="true">Aspek Bisnis</a> </li>
                                                                </ul>
                                                                <div class="tab-content br-n pn">
                                                                            <div id="profilpelanggan-onprogress-{{$listproyek->id_proyek}}" class="tab-pane active">
                                                                                    <table class="table table-borderless">
                                                                                            <tbody class="detail-text text-left">
                                                                                                <tr>
                                                                                                    <td style="width: 17%"><span class="text-muted" style="font-weight: 500">Nama Pelanggan</span></td>
                                                                                                    <td style="width: 1%"><span class="text-muted" style="font-weight: 500">:</td>
                                                                                                    <td><span>{{$listproyek->nama_pelanggan}}</span></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td><span class="text-muted" style="font-weight: 500">Alamat Pelanggan</span></td>
                                                                                                    <td><span class="text-muted" style="font-weight: 500">:</span></td>
                                                                                                    <td>{{$listproyek->alamat_pelanggan}}</td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td><span class="text-muted" style="font-weight: 500">No Telepon</span></td>
                                                                                                    <td><span class="text-muted" style="font-weight: 500">:</span></td>
                                                                                                    <td>{{$listproyek->nomor_telepon}}</td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td><span class="text-muted" style="font-weight: 500">Jenis Pelanggan</span></td>
                                                                                                    <td><span class="text-muted" style="font-weight: 500">:</span></td>
                                                                                                    <td class="text-success">{{$listproyek->jenis_pelanggan}}</td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                            </div>
                                                                            <div id="proyekkegiatan-onprogress-{{$listproyek->id_proyek}}" class="tab-pane">
                                                                                    <div class="row">
                                                                                            <div class="col-sm-12 col-lg-6">
                                                                                                <table class="table table-borderless">
                                                                                                    <tbody class="detail-text text-left">
                                                                                                        <tr>
                                                                                                            <td style="width: 32%"><span class="text-muted" style="font-weight: 500;">Judul Kegiatan</span></td>
                                                                                                            <td style="width: 0%"><span class="text-muted" style="font-weight: 500;">:</span></td>
                                                                                                            <td><span>{{$listproyek->judul}}</span></td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td><span class="text-muted" style="font-weight: 500">Latar Belakang 1</span></td>
                                                                                                            <td><span class="text-muted" style="font-weight: 500">:</span></td>
                                                                                                            <td>{{$listproyek->latar_belakang_1}}</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td><span class="text-muted" style="font-weight: 500">Latar Belakang 2</span></td>
                                                                                                            <td><span class="text-muted" style="font-weight: 500">:</span></td>
                                                                                                            <td>{{$listproyek->latar_belakang_2}}</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td><span class="text-muted" style="font-weight: 500">Alamat Delivery</span></td>
                                                                                                            <td><span class="text-muted" style="font-weight: 500">:</span></td>
                                                                                                            <td>{{$listproyek->alamat_delivery}}</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td><span class="text-muted" style="font-weight: 500">Mekanisme Pembayaran</span></td>
                                                                                                            <td><span class="text-muted" style="font-weight: 500">:</span></td>
                                                                                                            <td>{{$listproyek->mekanisme_pembayaran}}</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td><span class="text-muted" style="font-weight: 500">Rincian Pola Pembayaran</span></td>
                                                                                                            <td><span class="text-muted" style="font-weight: 500">:</span></td>
                                                                                                            <td>{{$listproyek->rincian_pembayaran}} pembayaran oleh pelanggan</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td><span class="text-muted" style="font-weight: 500">File</span></td>
                                                                                                            <td><span class="text-muted" style="font-weight: 500">:</span></td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td><img src="{{asset('images/'. $listproyek->file)}}" style="width: 200px"></td>
                                                                                                        </tr>
                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </div>
                                                                                            <div class="col-sm-12 col-lg-6">
                                                                                                <table class="table table-borderless">
                                                                                                    <tbody class="detail-text text-left">
                                                                                                        <tr>
                                                                                                            <td style="width: 39%"><span class="text-muted" style="font-weight: 500">Unit Kerja</span></td>
                                                                                                            <td style="width: 0%"><span class="text-muted" style="font-weight: 500">:</span></td>
                                                                                                            <td><span>{{$listproyek->nama_unit_kerja}}</span></td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td><span class="text-muted" style="font-weight: 500">Nama Mitra</span></td>
                                                                                                            <td><span class="text-muted" style="font-weight: 500">:</span></td>
                                                                                                            <td>{{$listproyek->nama_mitra}}</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td><span class="text-muted" style="font-weight: 500">Skema Bisnis</span></td>
                                                                                                            <td><span class="text-muted" style="font-weight: 500">:</span></td>
                                                                                                            <td>{{$listproyek->saat_penggunaan}}</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td><span class="text-muted" style="font-weight: 500">Saat Penggunaan</span></td>
                                                                                                            <td><span class="text-muted" style="font-weight: 500">:</span></td>
                                                                                                            <td>{{$listproyek->saat_penggunaan}}</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td><span class="text-muted" style="font-weight: 500">Tanggal Pemasukan dokumen</span></td>
                                                                                                            <td><span class="text-muted" style="font-weight: 500">:</span></td>
                                                                                                            <td>{{$listproyek->pemasukan_dokumen}}</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td><span class="text-muted" style="font-weight: 500">Ready for Service</span></td>
                                                                                                            <td><span class="text-muted" style="font-weight: 500">:</span></td>
                                                                                                            <td>{{$listproyek->ready_for_service}}</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td><span class="text-muted" style="font-weight: 500">Masa Kontrak</span></td>
                                                                                                            <td><span class="text-muted" style="font-weight: 500">:</span></td>
                                                                                                            <td>{{$listproyek->masa_kontrak}}</td>
                                                                                                        </tr>
                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </div>
                                                                                        </div>
                                                                            </div>
                                                                            <div id="aspekbisnis-onprogress-{{$listproyek->id_proyek}}" class="tab-pane">
                                                                                <div class="row">
                                                                                    <div class="col-sm-12 col-lg-6">
                                                                                        <table class="table table-borderless">
                                                                                            <tbody class="detail-text text-left">
                                                                                                    <tr>
                                                                                                        <td><span class="text-muted" style="font-weight: 500">Layanan Revenue</span></td>
                                                                                                        <td><span class="text-muted" style="font-weight: 500">:</span></td>
                                                                                                        <td><span>{{$listproyek->layanan_revenue}}</span></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td><span class="text-muted" style="font-weight: 500">Beban Mitra</span></td>
                                                                                                        <td><span class="text-muted" style="font-weight: 500">:</span></td>
                                                                                                        <td>{{number_format($listproyek->beban_mitra)}}</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td><span class="text-muted" style="font-weight: 500">Nilai Kontrak</span></td>
                                                                                                        <td><span class="text-muted" style="font-weight: 500">:</span></td>
                                                                                                        <td>{{number_format($listproyek->nilai_kontrak)}}</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td><span class="text-muted" style="font-weight: 500">Margin (Rp)</span></td>
                                                                                                        <td><span class="text-muted" style="font-weight: 500">:</span></td>
                                                                                                        <td>{{number_format($listproyek->rp_margin)}}</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td><span class="text-muted" style="font-weight: 500">Margin (%)</span></td>
                                                                                                        <td><span class="text-muted" style="font-weight: 500">:</span></td>
                                                                                                        <td>{{$listproyek->margin_tg}}</td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                    <div class="col-sm-12 col-lg-6">
                                                                                        <table class="table table-borderless">
                                                                                            <tbody class="detail-text text-left">
                                                                                                <tr>
                                                                                                    <td><span class="text-muted" style="font-weight: 500">Colocation</span></td>
                                                                                                    <td><span class="text-muted" style="font-weight: 500">:</span></td>
                                                                                                    <td><span>{{number_format($listproyek->colocation)}}</span></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td><span class="text-muted" style="font-weight: 500">Revenue Connectivity</span></td>
                                                                                                    <td><span class="text-muted" style="font-weight: 500">:</span></td>
                                                                                                     <td>{{number_format($listproyek->revenue_connectivity)}}</td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td><span class="text-muted" style="font-weight: 500">Revenue CPE Proyek</span></td>
                                                                                                    <td><span class="text-muted" style="font-weight: 500">:</span></td>
                                                                                                    <td>{{number_format($listproyek->revenue_cpe_proyek)}}</td>
                                                                                                    </tr>
                                                                                                <tr>
                                                                                                    <td><span class="text-muted" style="font-weight: 500">Revenue CPE Mitra</span></td>
                                                                                                    <td><span class="text-muted" style="font-weight: 500">:</span></td>
                                                                                                    <td>{{number_format($listproyek->revenue_cpe_mitra)}}</td>
                                                                                                </tr>    
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>    
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <div class="form-group m-b-0">
                                                            <table class="table table-borderless">
                                                                <form class="form-horizontal form-material" action="{{ route('status_update', ['id'=>$listproyek->id_proyek]) }}" method = "get">
                                                                    <tbody class="detail-text text-left">
                                                                        <tr id="footer-padding">
                                                                            <td style="font-weight: 450; color: black">Status Pengajuan
                                                                                {{-- <label style="font-weight: 450; color: black" class="control-label">Status Pengajuan</label> --}}
                                                                                @if($listproyek->status_pengajuan == NULL)
                                                                                {{-- <div class="btn-group btn-toggle" data-toggle="buttons">
                                                                                    <label class="btn btn-default approved">
                                                                                      <input type="radio" name="status_pengajuan" value="1">APPROVED
                                                                                    </label>
                                                                                    <label class="btn btn-default active notApproved">
                                                                                      <input type="radio" name="status_pengajuan" value="" checked="">NOT APPROVED
                                                                                    </label>
                                                                                  </div> --}}
                                                                                {{-- <div class="radio-list">
                                                                                    <label class="radio-inline p-0">
                                                                                        <div class="radio radio-info">
                                                                                            <input type="radio" name="status_pengajuan" id="radio1" value="1">
                                                                                            <label for="radio1">APPROVED</label>
                                                                                        </div>
                                                                                    </label>
                                                                                    <label class="radio-inline">
                                                                                        <div class="radio radio-info">
                                                                                            <input type="radio" name="status_pengajuan" id="radio2" value="">
                                                                                            <label for="radio2">NOT APPROVED</label>
                                                                                        </div>
                                                                                    </label>
                                                                                </div> --}}
                                                                                <div class="btn-group btn-group-toggle m-l-20" data-toggle="buttons">
                                                                                    <label class="btn btn-success btn-outline approved">
                                                                                        <input type="radio" name="status_pengajuan" value="1" id="option1" autocomplete="off" checked> SETUJUI
                                                                                    </label>
                                                                                    <label class="btn btn-danger active notApproved">
                                                                                        <input type="radio" name="status_pengajuan" value="" id="option2" autocomplete="off"> BELUM DISETUJUI
                                                                                    </label>
                                                                                </div>
                                                                                @endif
                                                                            </td>
                                                                        </tr>
                                                                        <tr id="footer-padding">
                                                                            <td style="font-weight: 450; color: black">Keterangan</td>
                                                                        </tr>
                                                                        <tr id="footer-padding">
                                                                            <td>
                                                                                    <textarea class="form-control" rows="5" name="keterangan_proyek" placeholder="Tulis keterangan tentang proyek di sini....">{{$listproyek->keterangan_proyek}}</textarea>
                                                                                    <hr>
                                                                                    <button type="submit" style="float: left;" class="btn btn-danger waves-effect waves-light m-l-10">Simpan</button>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                 </form>   
                                                            </table>                
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="upload-{{$listproyek->id_proyek}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h4 class="modal-title" id="myLargeModalLabel" style="font-weight: 450;">{{$listproyek->judul}}</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="panel panel-default">
                                                            <div class="panel-body">
                                                                @if($listproyek->bukti_scan == NULL)
                                                                    <form enctype="multipart/form-data" action="{{ route('bukti_insert', ['id_proyek' => $listproyek->id_proyek]) }}" method="post">
                                                                        {{ csrf_field() }}
                                                                        <label class="control-label">Unggah Dokumen</label>
                                                                        <div class="col-sm-12">
                                                                            {{-- <input type="file" class="form-control" name="bukti_scan"> --}}
                                                                            <input type="file" id="input-file-disable-remove" class="dropify" name="bukti_scan" data-show-remove="false" /> </div>
                                                                        </div>
                                                                        <hr>
                                                                        <button type="submit" style="float: right;margin-top: -1.5%;" class="btn btn-danger waves-effect waves-light">Simpan</button>
                                                                    </form>
                                                                @else
                                                                    <div class="row">
                                                                        <img src="{{asset('bukti_scan/'. $listproyek->bukti_scan)}}" style="width: 500px">
                                                                    </div>
                                                                    <div class="row">
                                                                    <form action="{{ route('bukti_update', ['id_proyek' => $listproyek->id_proyek]) }}" method="post">
                                                                        {{ csrf_field() }}
                                                                        <hr>
                                                                        {{-- <input type="text" name="bukti_scan" value="NULL"> --}}
                                                                        <button type="submit" style="float: center;" class="btn btn-danger waves-effect waves-light m-t-10"><i class="fa fa-trash"></i> Hapus</button>
                                                                        {{-- <button type="button" class="btn btn-default" data-toggle="modal" data-target="#view-{{$listproyek->id_proyek}}"><i class="fa fa-folder-open"></i></button> --}}
                                                                    </form>
                                                                        
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="delete-{{$listproyek->id_proyek}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myLargeModalLabel" style="font-weight: 450;">Hapus "{{$listproyek->judul}}"</h4> 
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="form-horizontal form-material" action = "{{ route('proyek_delete', ['id_proyek' => $listproyek->id_proyek]) }}" method = "get">
                                                            <h5> Apakah Anda yakin untuk menghapus proyek "{{$listproyek->judul}}"? </h5>
                                                            <div class="form-group m-b-0">
                                                                <a href="#" class="fcbtn btn btn-default btn-1f m-r-10 m-t-10" data-dismiss="modal" style="padding-top: 5.5px; padding-bottom: 5.5px; float: right;">Keluar</a>
                                                                <button type="submit" style="float: right;" class="btn btn-danger waves-effect waves-light m-t-10">Hapus</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                            
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--/.row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <div class="table-responsive">
                        <table class="table color-table success-table example">
                            <thead>
                                <tr>
                                    <th colspan=7>SUDAH DISETUJUI</th>
                                </tr>
                                <tr>
                                    <th class="text-center" style="background-color: white; color: black;">No.</th>
                                    <th class="text-center" style="background-color: white; color: black;">Nama Kegiatan</th>
                                    <th class="text-center" style="background-color: white; color: black;">Nilai Kontrak</th>
                                    <th class="text-center" style="background-color: white; color: black;">Profit</th>
                                    <th class="text-center" style="background-color: white; color: black;">Ready For Service</th>
                                    <th class="text-center" style="background-color: white; color: black;">Status</th>
                                    <th class="text-center" style="background-color: white; color: black;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php $y=1; ?>
                                @foreach($proyek->where('status_pengajuan','=',1)->sortBy('id_proyek') as $listproyek)
                                {{-- {{ $listproyek->id_proyek }} --}}
                                <tr class="fuckOffPadding">
                                    <td style="vertical-align: middle;"><?php echo $y; $y=$y+1; ?></td>
                                    <td style="vertical-align: middle;">{{$listproyek->judul}}</td>
                                    <td style="vertical-align: middle;">{{number_format($listproyek->nilai_kontrak)}}</td>
                                    <td style="vertical-align: middle;">{{$listproyek->margin_tg}} %</td>
                                    <td style="vertical-align: middle;">{{date('d F Y', strtotime($listproyek->ready_for_service))}}</td>
                                    <td style="vertical-align: middle;">
                                      <div class="white-box-2">
                                        @php
                                        $ket = $listproyek->keterangan_proyek;
                                        @endphp
                                        @if($listproyek->keterangan_proyek == NULL)
                                        <p alt="alert" class="img-responsive model_img text-success sa-success-keterangan"> Telah Disetujui </p>
                                        @else                                        
                                        <p alt="alert" class="img-responsive model_img text-danger sa-problem-keterangan" data-keterangan="{{$listproyek->keterangan_proyek}}"> Bermasalah </p>
                                        @endif
                                        </div>
                                    </td>
                                    <td style="vertical-align: middle; padding: 0; width: 23%">
                                        <a href="{{ route('pelanggan_single', ['id_pelanggan' => $listproyek->id_pelanggan, 'id_proyek' => $listproyek->id_proyek, 'id_aspek' => $listproyek->id_aspek]) }}" class="btn btn-default"><i class="fa fa-edit"></i></a>
                                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#view-{{$listproyek->id_proyek}}"><i class="fa fa-folder-open"></i></button>
                                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#upload-{{$listproyek->id_proyek}}"><i class="fa fa-upload"></i></button>
                                        <div class="btn-group dropup m-r-10">
                                            <button aria-expanded="false" data-toggle="dropdown" class="btn btn-default dropdown-toggle waves-effect waves-light" type="button"><i class="fa fa-download"></i><span class="caret"></span></button>
                                            <ul role="menu" class="dropdown-menu" style="min-width: 0">
                                                @if(empty($listproyek->colocation))
                                                <li><a href="#" class="disableditem" aria-disabled="true">P0</a></li>
                                                @else
                                                <li><a href="{{ route('print_p0', ['id' => $listproyek->id_proyek]) }}">P0</a></li>
                                                @endif
                                                <li><a href="{{ route('print_p1', ['id' => $listproyek->id_proyek]) }}">P1</a></li>
                                            </ul>
                                        </div>
                                        {{-- <button type="button" class="btn btn-default" data-toggle="modal" data-target="#delete-{{$listproyek->id_proyek}}"><i class="fa fa-trash"></i></button> --}}
                                        <div class="modal fade" id="view-{{$listproyek->id_proyek}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h4 class="modal-title" id="myLargeModalLabel" style="font-weight: 450;">{{$listproyek->judul}}</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                            <div class="panel panel-default">
                                                                <div class="panel-body">
                                                                    <ul class="nav nav-pills m-b-30 ">
                                                                        <li class="active"> <a href="#profilpelanggan-onprogress-{{$listproyek->id_proyek}}" data-toggle="tab" aria-expanded="false">Profil Pelanggan</a> </li>
                                                                        <li class=""> <a href="#proyekkegiatan-onprogress-{{$listproyek->id_proyek}}" data-toggle="tab" aria-expanded="false">Proyek/Kegiatan</a> </li>
                                                                        <li> <a href="#aspekbisnis-onprogress-{{$listproyek->id_proyek}}" data-toggle="tab" aria-expanded="true">Aspek Bisnis</a> </li>
                                                                    </ul>
                                                                    <div class="tab-content br-n pn">
                                                                                <div id="profilpelanggan-onprogress-{{$listproyek->id_proyek}}" class="tab-pane active">
                                                                                        <table class="table table-borderless">
                                                                                                <tbody class="detail-text text-left">
                                                                                                    <tr>
                                                                                                        <td style="width: 17%"><span class="text-muted" style="font-weight: 500">Nama Pelanggan</span></td>
                                                                                                        <td style="width: 1%"><span class="text-muted" style="font-weight: 500">:</td>
                                                                                                        <td><span>{{$listproyek->nama_pelanggan}}</span></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td><span class="text-muted" style="font-weight: 500">Alamat Pelanggan</span></td>
                                                                                                        <td><span class="text-muted" style="font-weight: 500">:</span></td>
                                                                                                        <td>{{$listproyek->alamat_pelanggan}}</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td><span class="text-muted" style="font-weight: 500">No Telepon</span></td>
                                                                                                        <td><span class="text-muted" style="font-weight: 500">:</span></td>
                                                                                                        <td>{{$listproyek->nomor_telepon}}</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td><span class="text-muted" style="font-weight: 500">Jenis Pelanggan</span></td>
                                                                                                        <td><span class="text-muted" style="font-weight: 500">:</span></td>
                                                                                                        <td class="text-success">{{$listproyek->jenis_pelanggan}}</td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                </div>
                                                                                <div id="proyekkegiatan-onprogress-{{$listproyek->id_proyek}}" class="tab-pane">
                                                                                        <div class="row">
                                                                                                <div class="col-sm-12 col-lg-6">
                                                                                                    <table class="table table-borderless">
                                                                                                        <tbody class="detail-text text-left">
                                                                                                            <tr>
                                                                                                                <td style="width: 32%"><span class="text-muted" style="font-weight: 500;">Judul Kegiatan</span></td>
                                                                                                                <td style="width: 0%"><span class="text-muted" style="font-weight: 500;">:</span></td>
                                                                                                                <td><span>{{$listproyek->judul}}</span></td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td><span class="text-muted" style="font-weight: 500">Latar Belakang 1</span></td>
                                                                                                                <td><span class="text-muted" style="font-weight: 500">:</span></td>
                                                                                                                <td>{{$listproyek->latar_belakang_1}}</td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td><span class="text-muted" style="font-weight: 500">Latar Belakang 2</span></td>
                                                                                                                <td><span class="text-muted" style="font-weight: 500">:</span></td>
                                                                                                                <td>{{$listproyek->latar_belakang_2}}</td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td><span class="text-muted" style="font-weight: 500">Alamat Delivery</span></td>
                                                                                                                <td><span class="text-muted" style="font-weight: 500">:</span></td>
                                                                                                                <td>{{$listproyek->alamat_delivery}}</td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td><span class="text-muted" style="font-weight: 500">Mekanisme Pembayaran</span></td>
                                                                                                                <td><span class="text-muted" style="font-weight: 500">:</span></td>
                                                                                                                <td>{{$listproyek->mekanisme_pembayaran}}</td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td><span class="text-muted" style="font-weight: 500">Rincian Pola Pembayaran</span></td>
                                                                                                                <td><span class="text-muted" style="font-weight: 500">:</span></td>
                                                                                                                <td>{{$listproyek->rincian_pembayaran}} pembayaran oleh pelanggan</td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td><span class="text-muted" style="font-weight: 500">File</span></td>
                                                                                                                <td><span class="text-muted" style="font-weight: 500">:</span></td>
                                                                                                                
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td><img src="{{asset('images/'. $listproyek->file)}}" style="width: 200px"></td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </div>
                                                                                                <div class="col-sm-12 col-lg-6">
                                                                                                    <table class="table table-borderless">
                                                                                                        <tbody class="detail-text text-left">
                                                                                                            <tr>
                                                                                                                <td style="width: 39%"><span class="text-muted" style="font-weight: 500">Unit Kerja</span></td>
                                                                                                                <td style="width: 0%"><span class="text-muted" style="font-weight: 500">:</span></td>
                                                                                                                <td><span>{{$listproyek->nama_unit_kerja}}</span></td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td><span class="text-muted" style="font-weight: 500">Nama Mitra</span></td>
                                                                                                                <td><span class="text-muted" style="font-weight: 500">:</span></td>
                                                                                                                <td>{{$listproyek->nama_mitra}}</td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td><span class="text-muted" style="font-weight: 500">Skema Bisnis</span></td>
                                                                                                                <td><span class="text-muted" style="font-weight: 500">:</span></td>
                                                                                                                <td>{{$listproyek->saat_penggunaan}}</td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td><span class="text-muted" style="font-weight: 500">Saat Penggunaan</span></td>
                                                                                                                <td><span class="text-muted" style="font-weight: 500">:</span></td>
                                                                                                                <td>{{$listproyek->saat_penggunaan}}</td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td><span class="text-muted" style="font-weight: 500">Tanggal Pemasukan dokumen</span></td>
                                                                                                                <td><span class="text-muted" style="font-weight: 500">:</span></td>
                                                                                                                <td>{{$listproyek->pemasukan_dokumen}}</td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td><span class="text-muted" style="font-weight: 500">Ready for Service</span></td>
                                                                                                                <td><span class="text-muted" style="font-weight: 500">:</span></td>
                                                                                                                <td>{{$listproyek->ready_for_service}}</td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td><span class="text-muted" style="font-weight: 500">Masa Kontrak</span></td>
                                                                                                                <td><span class="text-muted" style="font-weight: 500">:</span></td>
                                                                                                                <td>{{$listproyek->masa_kontrak}}</td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </div>
                                                                                            </div>
                                                                                </div>
                                                                                <div id="aspekbisnis-onprogress-{{$listproyek->id_proyek}}" class="tab-pane">
                                                                                    <div class="row">
                                                                                        <div class="col-sm-12 col-lg-6">
                                                                                            <table class="table table-borderless">
                                                                                                <tbody class="detail-text text-left">
                                                                                                        <tr>
                                                                                                            <td><span class="text-muted" style="font-weight: 500">Layanan Revenue</span></td>
                                                                                                            <td><span class="text-muted" style="font-weight: 500">:</span></td>
                                                                                                            <td><span>{{$listproyek->layanan_revenue}}</span></td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td><span class="text-muted" style="font-weight: 500">Beban Mitra</span></td>
                                                                                                            <td><span class="text-muted" style="font-weight: 500">:</span></td>
                                                                                                            <td>{{number_format($listproyek->beban_mitra)}}</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td><span class="text-muted" style="font-weight: 500">Nilai Kontrak</span></td>
                                                                                                            <td><span class="text-muted" style="font-weight: 500">:</span></td>
                                                                                                            <td>{{number_format($listproyek->nilai_kontrak)}}</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td><span class="text-muted" style="font-weight: 500">Margin (Rp)</span></td>
                                                                                                            <td><span class="text-muted" style="font-weight: 500">:</span></td>
                                                                                                            <td>{{number_format($listproyek->rp_margin)}}</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td><span class="text-muted" style="font-weight: 500">Margin (%)</span></td>
                                                                                                            <td><span class="text-muted" style="font-weight: 500">:</span></td>
                                                                                                            <td>{{$listproyek->margin_tg}}</td>
                                                                                                        </tr>
                                                                                                    </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                        <div class="col-sm-12 col-lg-6">
                                                                                            <table class="table table-borderless">
                                                                                                <tbody class="detail-text text-left">
                                                                                                    <tr>
                                                                                                        <td><span class="text-muted" style="font-weight: 500">Colocation</span></td>
                                                                                                        <td><span class="text-muted" style="font-weight: 500">:</span></td>
                                                                                                        <td><span>{{number_format($listproyek->colocation)}}</span></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td><span class="text-muted" style="font-weight: 500">Revenue Connectivity</span></td>
                                                                                                        <td><span class="text-muted" style="font-weight: 500">:</span></td>
                                                                                                         <td>{{number_format($listproyek->revenue_connectivity)}}</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td><span class="text-muted" style="font-weight: 500">Revenue CPE Proyek</span></td>
                                                                                                        <td><span class="text-muted" style="font-weight: 500">:</span></td>
                                                                                                        <td>{{number_format($listproyek->revenue_cpe_proyek)}}</td>
                                                                                                        </tr>
                                                                                                    <tr>
                                                                                                        <td><span class="text-muted" style="font-weight: 500">Revenue CPE Mitra</span></td>
                                                                                                        <td><span class="text-muted" style="font-weight: 500">:</span></td>
                                                                                                        <td>{{number_format($listproyek->revenue_cpe_mitra)}}</td>
                                                                                                    </tr>    
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>    
                                                                                </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                    <div class="modal-footer">
                                                        <div class="form-group m-b-0">
                                                            <table class="table table-borderless">
                                                                <form class="form-horizontal form-material" action="{{ route('status_update', ['id'=>$listproyek->id_proyek]) }}" method = "get">
                                                                    <tbody class="detail-text text-left">
                                                                        <tr id="footer-padding">
                                                                            <td style="font-weight: 450; color: black" class="m-r-20">Status Pengajuan
                                                                                @if($listproyek->status_pengajuan == 1)
                                                                                <div class="btn-group btn-group-toggle m-l-20" data-toggle="buttons">
                                                                                        <label class="btn btn-success active approved">
                                                                                            <input type="radio" name="status_pengajuan" value="1" id="option1" autocomplete="off" checked> SETUJUI
                                                                                        </label>
                                                                                        <label class="btn btn-danger btn-outline notApproved">
                                                                                            <input type="radio" name="status_pengajuan" value="" id="option2" autocomplete="off"> BELUM DISETUJUI
                                                                                        </label>
                                                                                    </div>
                                                                                @endif
                                                                            </td>   
                                                                        </tr>
                                                                        <tr id="footer-padding">
                                                                            <td style="font-weight: 450; color: black">Keterangan</td>
                                                                        </tr>
                                                                        <tr id="footer-padding">
                                                                            <td>
                                                                                    <textarea class="form-control" rows="5" name="keterangan_proyek" placeholder="Tulis keterangan tentang proyek di sini....">{{$listproyek->keterangan_proyek}}</textarea>
                                                                                    <hr>
                                                                                    <button type="submit" style="float: left;" class="btn btn-danger waves-effect waves-light m-l-10">Simpan</button>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                 </form>   
                                                            </table>                
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="upload-{{$listproyek->id_proyek}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h4 class="modal-title" id="myLargeModalLabel" style="font-weight: 450;">{{$listproyek->judul}}</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="panel panel-default">
                                                            <div class="panel-body">
                                                                @if($listproyek->bukti_scan == NULL)
                                                                    <form enctype="multipart/form-data" action="{{ route('bukti_insert', ['id_proyek' => $listproyek->id_proyek]) }}" method="post">
                                                                        {{ csrf_field() }}
                                                                        <label class="control-label">Unggah Dokumen</label>
                                                                        <div class="col-sm-12">
                                                                            <input type="file" id="input-file-disable-remove" class="dropify" name="bukti_scan" data-show-remove="false" /> </div>
                                                                            {{-- <input type="file" class="form-control" name="bukti_scan"> --}}
                                                                        </div>
                                                                        <hr>
                                                                        <button type="submit" style="float: right;margin-top: -1.5%;" class="btn btn-danger waves-effect waves-light">Simpan</button>
                                                                    </form>
                                                                @else
                                                                    <div class="row">
                                                                        <img src="{{asset('bukti_scan/'. $listproyek->bukti_scan)}}" style="width: 500px">
                                                                    </div>
                                                                    <div class="row">
                                                                        <form action="{{ route('bukti_update', ['id_proyek' => $listproyek->id_proyek]) }}" method="post">
                                                                            {{ csrf_field() }}
                                                                            <hr>
                                                                            {{-- <input type="text" name="bukti_scan" value="NULL"> --}}
                                                                            <button type="submit" style="float: center;" class="btn btn-danger waves-effect waves-light m-t-10"><i class="fa fa-edit"></i> Edit</button>
                                                                            {{-- <button type="button" class="btn btn-default" data-toggle="modal" data-target="#view-{{$listproyek->id_proyek}}"><i class="fa fa-folder-open"></i></button> --}}
                                                                        </form>
                                                                        
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="delete-{{$listproyek->id_proyek}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myLargeModalLabel" style="font-weight: 450;">Hapus "{{$listproyek->judul}}"</h4> 
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="form-horizontal form-material" action = "{{ route('proyek_delete', ['id_proyek' => $listproyek->id_proyek]) }}" method = "get">
                                                            <h5> Apakah Anda yakin untuk menghapus proyek "{{$listproyek->judul}}"? </h5>
                                                            <div class="form-group m-b-0">
                                                                <a href="#" class="fcbtn btn btn-default btn-1f m-r-10 m-t-10" data-dismiss="modal" style="padding-top: 5.5px; padding-bottom: 5.5px; float: right;">Keluar</a>
                                                                <button type="submit" style="float: right;" class="btn btn-danger waves-effect waves-light m-t-10">Hapus</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                            
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /.container-fluid -->
    <footer class="footer text-center"> 2018 &copy; PT Telekomunikasi Indonesia Tbk </footer>
</div>
@endsection

@section ('script')
<script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
<!--slimscroll JavaScript -->
<script src="js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="js/waves.js"></script>
<!--Counter js -->
<script src="plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
<script src="plugins/bower_components/counterup/jquery.counterup.min.js"></script>
<!-- chartist chart -->
<script src="plugins/bower_components/chartist-js/dist/chartist.min.js"></script>
<script src="plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
<!-- Sparkline chart JavaScript -->
<script src="plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
<!-- Custom Theme JavaScript -->
<script src="js/cbpFWTabs.js"></script>
<script type="text/javascript">
(function() {
    [].slice.call(document.querySelectorAll('.sttabs')).forEach(function(el) {
        new CBPFWTabs(el);
    });
});

$('.btn-toggle').click(function() {
    $(this).find('.btn').toggleClass('active');  
    
    if ($(this).find('.btn-primary').size()>0) {
        $(this).find('.btn').toggleClass('btn-primary');
    }
    if ($(this).find('.btn-danger').size()>0) {
        $(this).find('.btn').toggleClass('btn-danger');
    }
    if ($(this).find('.btn-success').size()>0) {
        $(this).find('.btn').toggleClass('btn-success');
    }
    if ($(this).find('.btn-info').size()>0) {
        $(this).find('.btn').toggleClass('btn-info');
    }
    
    $(this).find('.btn').toggleClass('btn-default');
       
});
</script>
<script src="js/custom.min.js"></script>
<script src="js/dashboard1.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/waves.js"></script>
<script src="plugins/bower_components/toast-master/js/jquery.toast.js"></script>
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap4.min.js"></script>
<script src="plugins/bower_components/sweetalert/sweetalert.min.js"></script>
<script src="plugins/bower_components/sweetalert/jquery.sweet-alert.custom.js"></script>

<script type="text/javascript">
$(document).ready(function()
{
    $('.example').DataTable(
    {
        "pagingType": "full_numbers"
    } );
} );
</script>
<script>
    $(document).ready(function(){
        $('.approved').click(function() {
            $(this).removeClass('btn-success btn-outline');
            $(this).addClass('btn-success');
            $('.notApproved').removeClass('btn-danger');
            $('.notApproved').addClass('btn-danger btn-outline');
        });
        $('.notApproved').click(function() {
            $('.approved').removeClass('btn-success');
            $('.approved').addClass('btn-success btn-outline');
            $(this).removeClass('btn-danger btn-outline');
            $(this).addClass('btn-danger');
        });
    })
</script>
    <script src="plugins/bower_components/dropify/dist/js/dropify.min.js"></script>
    <script>
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();
        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'Désolé, le fichier trop volumineux'
            }
        });
        // Used events
        var drEvent = $('#input-file-events').dropify();
        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });
        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });
        drEvent.on('dropify.errors', function(event, element) {
            console.log('Has Errors');
        });
        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });
    </script>
@endsection