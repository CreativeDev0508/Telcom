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
                            <h1 class="text-center" style="color: #d51100; font-weight: 500">ASPEK BISNIS</h1>
                            <form class="form-horizontal form-material"action="{{ url('/AM-form-aspek/insert') }}" method = "post">
                                {{ csrf_field() }}
                                <div class="row">
                                        <label for="inputEmail3" class="col-sm-3 control-label">Layanan Revenue</label>
                                        <div class="col-sm-9">
                                            <select class="selectpicker m-b-20" data-style="form-control" name="layanan_revenue">
                                                <option value="Bulanan">Bulanan</option>
                                                <option value="Tahunan">Tahunan</option>
                                                <option value="OTC">OTC</option>
                                            </select>
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Beban Mitra</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="Beban Mitra" name="beban_mitra"> </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Nilai Kontrak</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="Nilai Kontrak" name="nilai_kontrak"> </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Margin (Rp)</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="Margin (Rp)" name="rp_margin"> </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Margin (%)</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="Margin (%)" name="margin_tg"> </div>
                                </div>
                                <div class="form-group m-b-0">
                                    {{-- <a href="form-justifikasi-proyek.html"><i class="fa fa-arrow-circle-left m-t-30" style="color: #d51100; float: left; font-size: 250%"></i></a>
                                    <a href="#" class="fcbtn btn btn-danger btn-1f m-t-10" style="padding-top: 5.5px; padding-bottom: 5.5px; float: right; background: #d51100; border: #d51100;">Simpan</a> --}}
                                    <button type="submit" style="float: right;" class="btn btn-danger waves-effect waves-light m-t-10">Save</button>
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