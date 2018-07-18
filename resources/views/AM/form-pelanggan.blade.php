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
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h1 class="text-center" style="color: #d51100; font-weight: 500">PROFIL PELANGGAN</h1>
                            <form class="form-horizontal form-material" action="{{ url('/AM-form-pelanggan/insert') }}" method = "post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Nama Pelanggan</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Pelanggan" name="nama_pelanggan"> </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Alamat Pelanggan</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="Alamat Pelanggan" name="alamat_pelanggan"> </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">No Telepon</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="No Telepon" name="nomor_telepon"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Jenis Pelanggan</label>
                                    <div class="col-sm-9 radio-list">
                                        <label class="radio-inline p-0">
                                            <div class="radio radio">
                                                <input id="radio1" value="Goverment" active type="radio" name="jenis_pelanggan">
                                                <label for="radio1">Government</label>
                                            </div>
                                        </label>
                                        <label class="radio-inline p-0">
                                            <div class="radio radio">
                                                <input id="radio2" value="Enterprise" type="radio" name="jenis_pelanggan">
                                                <label for="radio2">Enterprise</label>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group m-b-0">
                                    <button type="submit" style="float: right;" class="btn btn-danger waves-effect waves-light m-t-10">Next</button>
                                    {{-- <a href="form-justifikasi-proyek.html"><i class="fa fa-arrow-circle-right m-t-30" style="color: #d51100; float: right; font-size: 250%"></i></a> --}}
                                </div>
                                
                            </form>
                        </div>
                    </div>
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