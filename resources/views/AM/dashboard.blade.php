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
<!-- Custom CSS -->
<link href="css/style.css" rel="stylesheet">
<!-- color CSS -->
<link href="css/colors/default.css" id="theme" rel="stylesheet">

    <style>
        .table > .detail-text > tr > td {
            border-top: 0;
        }
    </style>
@endsection()

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
                    <div class="col-sm-12">
                        <div class="white-box">
                            <div class="table-responsive">
                                <table class="table color-table warning-table">
                                    <thead>
                                        <tr>
                                            <th colspan=6>ON PROGRESS</th>
                                        </tr>
                                        <tr>
                                            <th class="text-center" style="background-color: white; color: black;">No.</th>
                                            <th class="text-center" style="background-color: white; color: black;">Nama Kegiatan</th>
                                            <th class="text-center" style="background-color: white; color: black;">Nilai Kontrak</th>
                                            <th class="text-center" style="background-color: white; color: black;">Profit</th>
                                            <th class="text-center" style="background-color: white; color: black; width: 20%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                    @foreach($proyek->sortBy('id_proyek') as $listproyek)
                                        <tr>
                                            <td style="vertical-align: middle;">{{$listproyek->id_proyek}}</td>
                                            <td style="vertical-align: middle;">{{$listproyek->judul}}</td>
                                            <td style="vertical-align: middle;">{{$listproyek->nilai_kontrak}}</td>
                                            <td style="vertical-align: middle;">13%</td>
                                            <td style="vertical-align: middle;">
                                            <button type="button" class="btn btn-default btn-outline btn-circle btn-lg m-r-5" data-target="#"><i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-default btn-outline btn-circle btn-lg m-r-5" data-toggle="modal" data-target="#{{$listproyek->id_proyek}}"><i class="fa fa-search"></i></button>
                                            <div class="modal fade" id="{{$listproyek->id_proyek}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                <h4 class="modal-title" id="myLargeModalLabel">{{$listproyek->judul}}</h4> </div>
                                                            <div class="modal-body">
                                                                <section style="text-align:left">
                                                                    <div class="sttabs tabs-style-bar">
                                                                        <nav>
                                                                            <ul>
                                                                                <li><a href="#profil-pelanggan"><span>Profil Pelanggan</span></a></li>
                                                                                <li><a href="#proyek-kegiatan"><span>Proyek/Kegiatan</span></a></li>
                                                                                <li><a href="#aspek-bisnis"><span>Aspek Bisnis</span></a></li>
                                                                                <li></li>
                                                                                <li></li>
                                                                            </ul>
                                                                        </nav>
                                                                        <div class="content-wrap">
                                                                            <section id="profil-pelanggan">
                                                                                    <table class="table table-borderless">
                                                                                            <tbody class="detail-text text-left">
                                                                                                <tr>
                                                                                                    <td style="width: 17%"><span class="text-muted" style="font-weight: 500">Nama Pelanggan</span></td>
                                                                                                    <td style="width: 1%"><span class="text-muted" style="font-weight: 500">:</td>
                                                                                                    <td><span>{{$listproyek->nama_pelanggan}}</span></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td><span class="text-muted" style="font-weight: 500">Alamat Pelanggan</span></td>
                                                                                                    <td><span class="text-muted" style="font-weight: 500">:</td>
                                                                                                    <td>{{$listproyek->alamat_pelanggan}}</td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td><span class="text-muted" style="font-weight: 500">No Telepon</span></td>
                                                                                                    <td><span class="text-muted" style="font-weight: 500">:</td>
                                                                                                    <td>{{$listproyek->nomor_telepon}}</td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td><span class="text-muted" style="font-weight: 500">Jenis Pelanggan</span></td>
                                                                                                    <td><span class="text-muted" style="font-weight: 500">:</td>
                                                                                                    <td class="text-success">{{$listproyek->jenis_pelanggan}}</td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                            </section>
                                                                            <section id="proyek-kegiatan">
                                                                                <div class="row">
                                                                                    <div class="col-sm-12 col-lg-6">
                                                                                            <table class="table table-borderless">
                                                                                                    <tbody class="detail-text text-left">
                                                                                                        <tr>
                                                                                                            <td><span class="text-muted" style="font-weight: 500">Judul Kegiatan</span></td>
                                                                                                            <td><span class="text-muted" style="font-weight: 500">:</td>
                                                                                                            <td><span>{{$listproyek->judul}}</span></td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td><span class="text-muted" style="font-weight: 500">Latar Belakang I</span></td>
                                                                                                            <td><span class="text-muted" style="font-weight: 500">:</td>
                                                                                                            <td style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla asperiores impedit hic, deleniti unde perspiciatis quam quo beatae rem voluptates ea voluptatibus esse eveniet deserunt reiciendis. Odio fuga delectus pariatur?</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td><span class="text-muted" style="font-weight: 500">Latar Belakang II</span></td>
                                                                                                            <td><span class="text-muted" style="font-weight: 500">:</td>
                                                                                                            <td style="text-align: justify;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam cum, facere vero nisi ab exercitationem illo ea asperiores quo distinctio alias sequi dolorem tenetur omnis expedita ipsam esse amet eveniet?</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td><span class="text-muted" style="font-weight: 500">Alamat Delivery</span></td>
                                                                                                            <td><span class="text-muted" style="font-weight: 500">:</td>
                                                                                                            <td>{{$listproyek->alamat_delivery}}</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td><span class="text-muted" style="font-weight: 500">Rincian Pola Pembayaran</span></td>
                                                                                                            <td><span class="text-muted" style="font-weight: 500">:</td>
                                                                                                            <td>Ye boye</td>
                                                                                                        </tr>
                                                                                                    </tbody>
                                                                                                </table>
                                                                                    </div>
                                                                                    <div class="col-sm-12 col-lg-6">
                                                                                            <table class="table table-borderless">
                                                                                                    <tbody class="detail-text text-left">
                                                                                                        <tr>
                                                                                                            <td><span class="text-muted" style="font-weight: 500">Unit Kerja</span></td>
                                                                                                            <td><span class="text-muted" style="font-weight: 500">:</td>
                                                                                                            <td><span>Approved</span></td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td><span class="text-muted" style="font-weight: 500">Nama Mitra</span></td>
                                                                                                            <td><span class="text-muted" style="font-weight: 500">:</td>
                                                                                                            <td>Arya Wiranata S.Kom</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td><span class="text-muted" style="font-weight: 500">Skema Bisnis</span></td>
                                                                                                            <td><span class="text-muted" style="font-weight: 500">:</td>
                                                                                                            <td>17 Juli 2018</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td><span class="text-muted" style="font-weight: 500">Deadline</span></td>
                                                                                                            <td><span class="text-muted" style="font-weight: 500">:</td>
                                                                                                            <td>{{$listproyek->ready_for_service}}</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td><span class="text-muted" style="font-weight: 500">Tanggal Pemasukan dokumen</span></td>
                                                                                                            <td><span class="text-muted" style="font-weight: 500">:</td>
                                                                                                            <td>{{$listproyek->pemasukan_dokumen}}</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td><span class="text-muted" style="font-weight: 500">Ready for Service</span></td>
                                                                                                            <td><span class="text-muted" style="font-weight: 500">:</td>
                                                                                                            <td>{{$listproyek->ready_for_service}}</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td><span class="text-muted" style="font-weight: 500">Masa Kontrak</span></td>
                                                                                                            <td><span class="text-muted" style="font-weight: 500">:</td>
                                                                                                            <td>{{$listproyek->masa_kontrak}}</td>
                                                                                                        </tr>
                                                                                                    </tbody>
                                                                                                </table>
                                                                                    </div>
                                                                                </div>
                                                                            </section>
                                                                            <section id="aspek-bisnis">
                                                                                    <table class="table table-borderless">
                                                                                            <tbody class="detail-text text-left">
                                                                                                <tr>
                                                                                                    <td><span class="text-muted" style="font-weight: 500">Layanan Revenue</span></td>
                                                                                                    <td><span class="text-muted" style="font-weight: 500">:</td>
                                                                                                    <td><span>{{$listproyek->layanan_revenue}}</span></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td><span class="text-muted" style="font-weight: 500">Beban Mitra</span></td>
                                                                                                    <td><span class="text-muted" style="font-weight: 500">:</td>
                                                                                                    <td>{{$listproyek->beban_mitra}}</td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td><span class="text-muted" style="font-weight: 500">Nilai Kontrak</span></td>
                                                                                                    <td><span class="text-muted" style="font-weight: 500">:</td>
                                                                                                    <td>{{$listproyek->nilai_kontrak}}</td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td><span class="text-muted" style="font-weight: 500">Margin (Rp)</span></td>
                                                                                                    <td><span class="text-muted" style="font-weight: 500">:</td>
                                                                                                    <td>{{$listproyek->rp_margin}}</td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td><span class="text-muted" style="font-weight: 500">Margin (%)</span></td>
                                                                                                    <td><span class="text-muted" style="font-weight: 500">:</td>
                                                                                                    <td>{{$listproyek->margin_tg}}</td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                            </section>
                                                                        </div>
                                                                        <!-- /content -->
                                                                    </div>
                                                                    <!-- /tabs -->
                                                                </section>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <form class="form-horizontal form-material" action="" method = "">
                                                                    <div class="form-group m-b-0">
                                                                        <label style="float: left;" class="control-label m-l-20">Status Pengajuan: </label>
                                                                        <button type="submit" style="float: left;" class="btn btn-success waves-effect waves-light m-l-10">Approve</button>
                                                                        <button type="submit" style="float: left;" class="btn btn-danger waves-effect waves-light m-l-5">Decline</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <!-- /.modal-content -->
                                                    </div>
                                                    <!-- /.modal-dialog -->
                                                </div>                                            
                                                <a href="{{ route('print', ['id' => $listproyek->id_proyek]) }}" class="btn btn-default btn-outline btn-circle btn-lg m-r-5"><i class="fa fa-download"></i></a>
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
                <!--row -->
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-12 col-lg-6 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <div class="table-responsive">
                                <table class="table color-table success-table">
                                    <thead>
                                        <tr>
                                            <th colspan=3>APPROVED</th>
                                        </tr>
                                        <tr>
                                            <th class="text-center" style="background-color: white; color: black;">No.</th>
                                            <th class="text-center" style="background-color: white; color: black;">Nama Kegiatan</th>
                                            <th class="text-center" style="background-color: white; color: black;">Detail</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <tr>
                                            <td style="vertical-align: middle;">1</td>
                                            <td style="vertical-align: middle;">ITS Server</td>
                                            <td style="vertical-align: middle;">
                                            <button type="button" class="btn btn-default btn-outline btn-circle btn-lg m-r-5" data-toggle="modal" data-target="#detail-approved"><i class="fa fa-search"></i></button>
                                                <div class="modal fade" id="detail-approved" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                <h4 class="modal-title" id="myLargeModalLabel">ITS Server</h4> </div>
                                                            <div class="modal-body">
                                                                <div class="btn-group btn-group-justified m-b-20">
                                                                    <a class="btn btn-danger btn-outline waves-effect waves-light disabled" style="opacity: initial; color: #d51100; border: 0;">Sales Engineer</a>
                                                                    <a class="btn btn-danger waves-effect waves-light disabled" style="opacity: initial; background: #d51100;">Bidding</a>
                                                                    <a class="btn btn-danger btn-outline waves-effect waves-light disabled" style="opacity: initial; color: #d51100; border: 0;">Manager</a>
                                                                    <a class="btn btn-danger btn-outline waves-effect waves-light disabled" style="opacity: initial; color: #d51100; border: 0;">Deputy</a>
                                                                    <a class="btn btn-danger btn-outline waves-effect waves-light disabled" style="opacity: initial; color: #d51100; border: 0;">General Manager</a>
                                                                </div>
                                                                <table class="table table-borderless">
                                                                    <tbody class="detail-text text-left">
                                                                        <tr>
                                                                            <td><span class="text-muted" style="font-weight: 500">Status</span></td>
                                                                            <td><span class="text-muted" style="font-weight: 500">:</td>
                                                                            <td><span class="text-success">Approved</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><span class="text-muted" style="font-weight: 500">Oleh</span></td>
                                                                            <td><span class="text-muted" style="font-weight: 500">:</td>
                                                                            <td>Arya Wiranata S.Kom</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><span class="text-muted" style="font-weight: 500">Tanggal</span></td>
                                                                            <td><span class="text-muted" style="font-weight: 500">:</td>
                                                                            <td>17 Juli 2018</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><span class="text-muted" style="font-weight: 500">Review</span></td>
                                                                            <td><span class="text-muted" style="font-weight: 500">:</td>
                                                                            <td style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, similique tenetur? Facere, officiis laborum, maxime consequuntur temporibus magnam repellendus ad ratione voluptas nostrum, est veritatis repellat assumenda. Iure, sequi adipisci?</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>                                                                    
                                                            </div>
                                                        </div>
                                                        <!-- /.modal-content -->
                                                    </div>
                                                    <!-- /.modal-dialog -->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>ITS Server</td>
                                            <td><a href="#" class="btn btn-default">Lihat</a></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Roshan</td>
                                            <td><a href="#" class="btn btn-default">Lihat</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <div class="table-responsive">
                                <table class="table color-table danger-table">
                                    <thead>
                                        <tr>
                                            <th colspan=3>FAILED</th>
                                        </tr>
                                        <tr>
                                            <th class="text-center" style="background-color: white; color: black;">No.</th>
                                            <th class="text-center" style="background-color: white; color: black;">Nama Kegiatan</th>
                                            <th class="text-center" style="background-color: white; color: black;">Detail</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <tr>
                                            <td style="vertical-align: middle;">1</td>
                                            <td style="vertical-align: middle;">ITS Server</td>
                                            <td style="vertical-align: middle;">
                                            <button type="button" class="btn btn-default btn-outline btn-circle btn-lg m-r-5" data-toggle="modal" data-target="#detail-failed"><i class="fa fa-search"></i></button>
                                                <div class="modal fade" id="detail-failed" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                <h4 class="modal-title" id="myLargeModalLabel">ITS Server</h4> </div>
                                                            <div class="modal-body">
                                                                <div class="btn-group btn-group-justified m-b-20">
                                                                    <a class="btn btn-danger btn-outline waves-effect waves-light disabled" style="opacity: initial; color: #d51100; border: 0;">Sales Engineer</a>
                                                                    <a class="btn btn-danger waves-effect waves-light disabled" style="opacity: initial; background: #d51100;">Bidding</a>
                                                                    <a class="btn btn-danger btn-outline waves-effect waves-light disabled" style="opacity: initial; color: #d51100; border: 0;">Manager</a>
                                                                    <a class="btn btn-danger btn-outline waves-effect waves-light disabled" style="opacity: initial; color: #d51100; border: 0;">Deputy</a>
                                                                    <a class="btn btn-danger btn-outline waves-effect waves-light disabled" style="opacity: initial; color: #d51100; border: 0;">General Manager</a>
                                                                </div>
                                                                <table class="table table-borderless">
                                                                    <tbody class="detail-text text-left">
                                                                        <tr>
                                                                            <td><span class="text-muted" style="font-weight: 500">Status</span></td>
                                                                            <td><span class="text-muted" style="font-weight: 500">:</td>
                                                                            <td><span class="text-success">Approved</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><span class="text-muted" style="font-weight: 500">Oleh</span></td>
                                                                            <td><span class="text-muted" style="font-weight: 500">:</td>
                                                                            <td>Arya Wiranata S.Kom</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><span class="text-muted" style="font-weight: 500">Tanggal</span></td>
                                                                            <td><span class="text-muted" style="font-weight: 500">:</td>
                                                                            <td>17 Juli 2018</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><span class="text-muted" style="font-weight: 500">Review</span></td>
                                                                            <td><span class="text-muted" style="font-weight: 500">:</td>
                                                                            <td style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, similique tenetur? Facere, officiis laborum, maxime consequuntur temporibus magnam repellendus ad ratione voluptas nostrum, est veritatis repellat assumenda. Iure, sequi adipisci?</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>                                                                    
                                                            </div>
                                                        </div>
                                                        <!-- /.modal-content -->
                                                    </div>
                                                    <!-- /.modal-dialog -->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>ITS Server</td>
                                            <td><a href="#" class="btn btn-default">Lihat</a></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Roshan</td>
                                            <td><a href="#" class="btn btn-default">Lihat</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2018 &copy; PT. Telekomunikasi Indonesia Tbk </footer>
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
})();
</script>
<script src="js/custom.min.js"></script>
<script src="js/dashboard1.js"></script>
<script src="plugins/bower_components/toast-master/js/jquery.toast.js"></script>
@endsection