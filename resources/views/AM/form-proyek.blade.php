@extends('layouts.app')

@section('link')
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{ asset('plugins/bower_components/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet" />
    <!-- animation CSS -->
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- color CSS -->
    <link href="{{ asset('css/colors/default.css') }}" id="theme" rel="stylesheet">
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
                    {{-- <label>ID</label>
                    <label>{{ Auth::user()->id }}</label> --}}
                    {{-- <label>ID</label> --}}
                    {{-- <label>{{$pelanggan->id_pelanggan}}</label> --}}
                    @foreach($pelanggan as $listpelanggan)
                    @foreach($proyek as $listproyek)
                    @foreach($aspek as $listaspek)
                    {{-- {{ $listpelanggan->id_pelanggan }} {{ $listproyek->id_proyek }} {{ $listaspek->id_aspek }}  --}}
                        <div class="col-sm-12">
                            <div class="white-box">
                                <h1 class="text-center" style="color: #d51100; font-weight: 500">PROYEK / KEGIATAN</h1>
                                <form enctype="multipart/form-data" class="form-horizontal form-material" action="{{ route('proyek_insert', ['id_pelanggan' => $listpelanggan->id_pelanggan, 'id_proyek' => $listproyek->id_proyek, 'id_aspek' => $listaspek->id_aspek]) }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-6">
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Judul Kegiatan</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="inputEmail3" placeholder="Judul Kegiatan" name="judul" value="{{$listproyek->judul}}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Latar Belakang I</label>
                                                <div class="col-sm-9">
                                                    <textarea class="form-control" rows="5" name="latar_belakang_1">{{$listproyek->latar_belakang_1}}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Latar Belakang II</label>
                                                <div class="col-sm-9">
                                                    <textarea class="form-control" rows="5" name="latar_belakang_2">{{$listproyek->latar_belakang_2}}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Alamat Delivery</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="inputEmail3" placeholder="Alamat Delivery" name="alamat_delivery" value="{{$listproyek->alamat_delivery}}">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Mekanisme Pembayaran</label>
                                                <div class="col-sm-9">
                                                    <select class="selectpicker m-b-20" data-style="form-control" name="mekanisme_pembayaran">
                                                        @if($listproyek->rincian_pembayaran == 'Back to Back')
                                                        <option value="Back to Back" selected>Back to Back</option>
                                                        @else
                                                        <option value="MRC">MRC</option>
                                                        @endif
                                                        
                                                        @if($listproyek->rincian_pembayaran == 'MRC')
                                                        <option value="MRC" selected>MRC</option>
                                                        @else
                                                        <option value="Back to Back">Back to Back</option>
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Rincian Pola Pembayaran</label>
                                                <div class="col-sm-9">
                                                    <select class="selectpicker m-b-20" data-style="form-control" name="rincian_pembayaran">
                                                        @if($listproyek->rincian_pembayaran == 'Sebelum')
                                                        <option value="Sebelum" selected>Sebelum Pembayaran</option>
                                                        @else
                                                        <option value="Sesudah">Sesudah Pembayaran</option>
                                                        @endif
                                                        
                                                        @if($listproyek->rincian_pembayaran == 'Setelah')
                                                        <option value="Setelah" selected>Setelah Pembayaran</option>
                                                        @else
                                                        <option value="Sebelum">Sebelum Pembayaran</option>
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row col-sm-12 col-lg-6">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Unit Kerja</label>
                                                <div class="col-sm-9">
                                                	@if($listpelanggan->jenis_pelanggan == 'Government')
                                                    <select class="selectpicker m-b-20" data-style="form-control" disabled="disabled">
                                                        <option value="4" selected>GES</option>
                                                    </select>
                                                    <input type="hidden" name="id_unit_kerja" value="4" />
                                                	@else
                                                    <select class="selectpicker m-b-20" data-style="form-control" name="id_unit_kerja">
                                                        @foreach ($unit as $listunit)
                                                        <option value="{{$listunit->id_unit_kerja}}" @if($listunit->id_unit_kerja == $listproyek->id_unit_kerja) selected @endif>{{$listunit->nama_unit_kerja}}</option>
                                                        @endforeach
                                                    </select>
                                                    @endif
                                                </div>
                                                <label class="col-sm-3 control-label">Nama Mitra</label>
                                                <div class="col-sm-9">
                                                    <select class="selectpicker m-b-20" data-style="form-control" name="id_mitra">
                                                        @foreach ($mitra as $listmitra)
                                                        <option value="{{$listmitra->id_mitra}}" @if($listmitra->id_mitra == $listproyek->id_mitra) selected @endif>{{$listmitra->nama_mitra}}</option>
                                                        @endforeach
                                                    </select>
                                                    <div id="ket-mitra" @if($listproyek->mitra_2 == NULL) style="display: none;" @endif>
                                                        <input type="text" name="keterangan_mitra_1" class="form-control" placeholder="Keterangan mitra 1" value="{{$listproyek->keterangan_mitra_1}}">
                                                        <br>
                                                    </div>
                                                    {{-- <a href="#">Tambah</a> --}}
                                                    {{-- <a name="hideMitra" id="hideMitra" onclick="hideMitra()"> halo</a> --}}
                                                    <a id='link' onclick='open_fun()'><i class='fa fa-plus'></i> Tambah Mitra</a> 
                                                    <br><br>
                                                    <div id="mitra" @if($listproyek->mitra_2 == NULL) style="display: none;" @endif>
                                                        <select class="selectpicker m-b-20" data-style="form-control" name="mitra_2">
                                                            @foreach ($mitra as $listmitra)
                                                            <option value="{{$listmitra->id_mitra}}" @if($listmitra->id_mitra == $listproyek->mitra_2) selected @endif>{{$listmitra->nama_mitra}}</option>
                                                            @endforeach
                                                        </select>
                                                        <input type="text" name="keterangan_mitra_2" class="form-control" placeholder="Keterangan mitra 2" value="{{$listproyek->keterangan_mitra_2}}">
                                                        <br>
                                                    </div>
                                                </div>
                                                <label class="col-sm-3 control-label">Skema Bisnis</label>
                                                <div class="col-sm-9">
                                                    <select class="selectpicker m-b-20" data-style="form-control" name="skema_bisnis">
                                                        @if($listproyek->skema_bisnis == NULL)
                                                            <option value="Sewa Murni">Sewa Murni</option>
                                                            <option value="Sewa Beli">Sewa Beli</option>
                                                            <option value="Pengadaan Beli Putus">Pengadaan Beli Putus</option>
                                                        @else
                                                            @if($listproyek->skema_bisnis == 'Sewa Murni')
                                                                <option value="Sewa Murni" selected>Sewa Murni</option>
                                                            @else
                                                                <option value="Sewa Beli">Sewa Beli</option>
                                                            @endif

                                                            @if($listproyek->skema_bisnis == 'Sewa Beli')
                                                                <option value="Sewa Beli" selected>Sewa Beli</option>
                                                            @else
                                                                <option value="Pengadaan Beli Putus">Pengadaan Beli Putus</option>
                                                            @endif

                                                            @if($listproyek->skema_bisnis == 'Pengadaan Beli Putus')
                                                                <option value="Pengadaan Beli Putus" selected>Pengadaan Beli Putus</option>
                                                            @else
                                                                <option value="Sewa Beli">Sewa Beli</option>
                                                            @endif
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Saat Penggunaan</label>
                                                <div class="input-group col-sm-9" style="padding-left: 15px; padding-right: 15px">
                                                    <input type="date" class="form-control" name="saat_penggunaan" value="{{$listproyek->saat_penggunaan}}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Tanggal Pemasukan Dokumen</label>
                                                <div class="input-group col-sm-9" style="padding-left: 15px; padding-right: 15px">
                                                    <input type="date" class="form-control" name="pemasukan_dokumen" value="{{$listproyek->pemasukan_dokumen}}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Ready for Service</label>
                                                <div class="input-group col-sm-9" style="padding-left: 15px; padding-right: 15px">
                                                    <input type="date" class="form-control" name="ready_for_service" value="{{$listproyek->ready_for_service}}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Masa Kontrak</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="inputEmail3" placeholder="Masa Kontrak" name="masa_kontrak" value="{{$listproyek->masa_kontrak}}">
                                                </div>
                                            </div>

                                            @if($listproyek->file_p0 == null)
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Tabel Ruang Lingkup Pekerjaan</label>
                                                <div class="col-sm-9">
                                                    <input type="file" class="form-control" id="file_p0" name="file_p0" value="{{$listproyek->file_p0}}">
                                                </div>
                                            </div>
                                            @else
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Tabel Ruang Lingkup Pekerjaan</label>
                                                <div class="col-sm-6">
                                                    <img src="{{asset('plugins/images/file_p0/'. $listproyek->file_p0)}}" style="width: 250px">
                                                    
                                                </div>
                                                <div class="col-sm-3">
                                                    <a href="{{ route('file_p0_update', ['id_pelanggan' => $listpelanggan->id_pelanggan, 'id_proyek' => $listproyek->id_proyek, 'id_aspek' => $listaspek->id_aspek]) }}"  style="float: left;" class="btn btn-success waves-effect waves-light m-t-10"><i class="fa fa-edit"></i> Edit</a>
                                                </div>
                                            </div>
                                            @endif

                                            @if($listproyek->file_p1 == null)
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Tabel Rincian Pekerjaan</label>
                                                <div class="col-sm-9">
                                                    <input type="file" class="form-control" id="file_p1" name="file_p1" value="{{$listproyek->file_p1}}">
                                                </div>
                                            </div>
                                            @else
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Tabel Rincian Pekerjaan</label>
                                                <div class="col-sm-6">
                                                    <img src="{{asset('plugins/images/file_p1/'. $listproyek->file_p1)}}" style="width: 250px">
                                                    
                                                </div>
                                                <div class="col-sm-3">
                                                    <a href="{{ route('file_p1_update', ['id_pelanggan' => $listpelanggan->id_pelanggan, 'id_proyek' => $listproyek->id_proyek, 'id_aspek' => $listaspek->id_aspek]) }}"  style="float: left;" class="btn btn-success waves-effect waves-light m-t-10"><i class="fa fa-edit"></i> Edit</a>
                                                </div>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row form-group m-b-0">
                                        <a href="{{ route('pelanggan_single', ['id_pelanggan' => $listpelanggan->id_pelanggan, 'id_proyek' => $listproyek->id_proyek, 'id_aspek' => $listaspek->id_aspek]) }}"  style="float: left;" class="btn btn-danger waves-effect waves-light m-t-10">Previous</a>
                                        <button type="submit" style="float: right;" class="btn btn-danger waves-effect waves-light m-t-10"  name="myButton" value="save">Next</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @endforeach
                    @endforeach
                    @endforeach
                </div>
        <!--/.row -->
            </div>
    <!-- /.container-fluid -->
    <footer class="footer text-center"> 2018 &copy; PT Telekomunikasi Indonesia Tbk </footer>
    </div>
<!-- ============================================================== -->
<!-- End Page Content -->
<!-- ============================================================== -->

@endsection

@section('script')
    <script src="{{ asset('plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('bootstrap/dist/js/bootstrap.min.js') }}"></script>    
    <!-- Menu Plugin JavaScript -->
    <script src="{{ asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>
    <!--slimscroll JavaScript -->
    <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('js/waves.js') }}"></script>
    <script src="{{ asset('plugins/bower_components/counterup/jquery.counterup.min.js') }}"></script>
    <!-- chartist chart -->
    <script src="{{ asset('plugins/bower_components/chartist-js/dist/chartist.min.js') }}"></script>
    <script src="{{ asset('plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js') }}"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="{{ asset('plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('plugins/bower_components/custom-select/custom-select.min.js') }}" type="text/javascript"></script> 
    <script src="{{ asset('plugins/bower_components/bootstrap-select/bootstrap-select.min.js') }}" type="text/javascript"></script> 
    <script src="{{ asset('plugins/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js') }}" type="text/javascript"></script> 
    <script type="text/javascript" src="{{ asset('plugins/bower_components/multiselect/js/jquery.multi-select.js') }}"></script> 
    <script src="{{ asset('js/dashboard1.js') }}"></script>
    <script src="{{ asset('js/custom.min.js') }}"></script>
    {{-- <script type="text/javascript" src="{{ asset('js/proyek.js') }}"></script> --}}
    <script type="text/javascript">
        var x = document.getElementById("mitra");
        var y = document.getElementById("ket-mitra");
        
        function open_fun() { 
            document.getElementById('link').innerHTML = "<a id='link' href='javascript:clo_fun()'><i class='fa fa-minus'></i> Hapus Mitra</a>";
            x.style.display = "block";
            y.style.display = "block";
        }
        
        function clo_fun() {
            document.getElementById('link').innerHTML = "<a id='link' onclick='open_fun()'><i class='fa fa-plus'></i> Tambah Mitra</a>";        
            x.style.display = "none";
            y.style.display = "none";
        }
    </script>
@endsection