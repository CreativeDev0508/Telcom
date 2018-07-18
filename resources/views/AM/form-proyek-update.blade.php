@extends('layouts.app')
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
                    @foreach($proyek as $listproyek)
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h1 class="text-center" style="color: #d51100; font-weight: 500">PROYEK / KEGIATAN</h1>
                            <form class="form-horizontal form-material" action="{{ url('/AM-form-proyek/update.$listproyek->id_proyek') }}" method = "get">
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
                                                <textarea class="form-control" rows="5"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-3 control-label">Latar Belakang II</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" rows="5"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-3 control-label">Alamat Delivery</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="Alamat Delivery" name="alamat_delivery" value="{{$listproyek->alamat_delivery}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row col-sm-12 col-lg-6">
                                        <div class="row">
                                            <label class="col-sm-3 control-label">Unit Kerja</label>
                                            <div class="col-sm-9">
                                                <select class="selectpicker m-b-20" data-style="form-control" name="id_unit_kerja">
                                                    @foreach ($unit as $listunit)
                                                    <option value="{{$listunit->id_unit_kerja}}">{{$listunit->nama_unit_kerja}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <label class="col-sm-3 control-label">Nama Mitra</label>
                                            <div class="col-sm-9">
                                                <select class="selectpicker m-b-20" data-style="form-control" name="id_mitra">
                                                    @foreach ($mitra as $listmitra)
                                                    <option value="{{$listmitra->id_mitra}}">{{$listmitra->nama_mitra}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <label class="col-sm-3 control-label">Skema Bisnis</label>
                                            <div class="col-sm-9">
                                                <select class="selectpicker m-b-20" data-style="form-control" name="skema_bisnis" value="{{$listproyek->skema_bisnis}}">
                                                    <option value="Sewa Murni">Sewa Murni</option>
                                                    <option value="Sewa Beli">Sewa Beli</option>
                                                    <option value="Pengadaan Beli">Pengadaan Beli</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Deadline</label>
                                            <div class="input-group col-sm-9" style="padding-left: 15px; padding-right: 15px">
                                                <input type="date" class="form-control" name="saat_penggunaan" value="{{$listproyek->saat_penggunaan}}"><!-- <span class="input-group-addon"><i class="icon-calender"></i></span> -->
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Tanggal Pemasukan Dokumen</label>
                                            <div class="input-group col-sm-9" style="padding-left: 15px; padding-right: 15px">
                                                <input type="date" class="form-control" name="pemasukan_dokumen" value="{{$listproyek->pemasukan_dokumen}}"> <!-- <span class="input-group-addon"><i class="icon-calender"></i></span> -->
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Ready for Service</label>
                                            <div class="input-group col-sm-9" style="padding-left: 15px; padding-right: 15px">
                                                <input type="date" class="form-control" name="ready_for_service" value="{{$listproyek->ready_for_service}}"><!-- <span class="input-group-addon"><i class="icon-calender"></i></span> -->
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-3 control-label">Masa Kontrak</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control" id="inputEmail3" placeholder="Masa Kontrak" name="masa_kontrak" value="{{$listproyek->masa_kontrak}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group m-b-0">
                                    {{-- <a href="form-justifikasi.html"><i class="fa fa-arrow-circle-left m-t-30" style="color: #d51100; float: left; font-size: 250%"></i></a>
                                    <a href="form-justifikasi-aspek.html"><i class="fa fa-arrow-circle-right m-t-30" style="color: #d51100; float: right; font-size: 250%"></i></a> --}}
                                    {{-- <button type="submit" style="float: left;" class="btn btn-danger waves-effect waves-light m-t-10">Previous</button> --}}
                                    <button type="submit" style="float: right;" class="btn btn-danger waves-effect waves-light m-t-10">Next</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!--/.row -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2018 &copy; PT. Telekomunikasi Indonesia Tbk </footer>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
@endsection