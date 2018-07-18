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
                <!--/.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="white-box">
                            <h1 class="text-center" style="color: #d51100; font-weight: 500">MITRA</h1>
                            <button type="button" class="btn btn-danger btn-rounded" style="background-color: #d51100;" data-toggle="modal" data-target="#tambah-mitra">Tambah Mitra</button>
                                <div class="modal fade" id="tambah-mitra" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myLargeModalLabel">Tambah Mitra</h4>
                                            </div>
                                            <div class="modal-body">
                                                <form class="form-horizontal form-material" action="{{ url('/AM-mitra/insert') }}" method = "post">
                                                 {{ csrf_field() }}
                                                    <div class="form-group">
                                                        <label for="inputEmail3" class="col-sm-3 control-label">Nama Mitra</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Mitra" name="nama_mitra">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputEmail3" class="col-sm-3 control-label">Deskripsi Mitra</label>
                                                        <div class="col-sm-9">
                                                            <textarea class="form-control" rows="5" placeholder="Deskripsi Mitra" name="deskripsi_mitra"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group m-b-0">
                                                        <a href="#" class="fcbtn btn btn-default btn-1f m-r-10 m-t-10" data-dismiss="modal" style="padding-top: 5.5px; padding-bottom: 5.5px; float: right;">Keluar</a>
                                                        <!-- <a href="#" class="fcbtn btn btn-danger btn-1f m-r-10 m-t-10" data-dismiss="modal" style="padding-top: 5.5px; padding-bottom: 5.5px; float: right; background: #d51100; border: #d51100;">Simpan</a> -->
                                                        <button type="submit" style="float: right;" class="btn btn-danger waves-effect waves-light m-t-10">Simpan</button>
                                                    </div>
                                               </form>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                            <table id="demo-foo-accordion" class="table m-b-0 toggle-arrow-tiny">
                                <thead>
                                    <tr>
                                        <th data-toggle="true"> Mitra </th>
                                        <th data-hide="all"> Deskripsi </th>
                                        <th data-hide="all"> Edit </th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($mitra as $listmitra)
                                    <tr>
                                        <td>{{$listmitra->nama_mitra}}</td>
                                        <td>{{$listmitra->deskripsi_mitra}}</td>
                                        <td>
                                            <br>
                                            <button type="button" class="btn btn-danger btn-outline btn-circle btn-lg m-r-5"><i class="ti-trash"></i></button>
                                            <button type="button" class="btn btn-danger btn-outline btn-circle btn-lg m-r-5" data-toggle="modal" data-target="#mitra-{{$listmitra->id_mitra}}"><i class="ti-pencil-alt"></i></button>
                                            <div class="modal fade" id="mitra-{{$listmitra->id_mitra}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myLargeModalLabel">Edit {{$listmitra->nama_mitra}}</h4> </div>
                                                        <div class="modal-body">
                                                            <form class="form-horizontal form-material" action="{{ url('/AM-mitra/update/'.$listmitra->id_mitra) }}" method="get">
                                                                <div class="form-group">
                                                                    <label for="inputEmail3" class="col-sm-3 control-label">Nama Mitra</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" id="inputEmail3" value="{{$listmitra->nama_mitra}}" name="nama_mitra">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="inputEmail3" class="col-sm-3 control-label">Deskripsi Mitra</label>
                                                                    <div class="col-sm-9">
                                                                        <textarea class="form-control" rows="5" name="deskripsi_mitra">{{$listmitra->deskripsi_mitra}}</textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group m-b-0">
                                                                    <a href="#" class="fcbtn btn btn-default btn-1f m-r-10 m-t-10" data-dismiss="modal" style="padding-top: 5.5px; padding-bottom: 5.5px; float: right;">Keluar</a>
                                                                    <!-- <a href="#" class="fcbtn btn btn-danger btn-1f m-r-10 m-t-10" data-dismiss="modal" style="padding-top: 5.5px; padding-bottom: 5.5px; float: right; background: #d51100; border: #d51100;">Simpan</a> -->
                                                                    <button type="submit" style="float: right;" class="btn btn-danger waves-effect waves-light m-t-10">Simpan</button>
                                                                </div>
                                                           </form>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
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
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2018 &copy; PT. Telekomunikasi Indonesia Tbk </footer>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
@endsection