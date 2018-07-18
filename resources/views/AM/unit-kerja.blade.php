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
                            <h1 class="text-center" style="color: #d51100; font-weight: 500">UNIT KERJA</h1>
                            <button type="button" class="btn btn-danger btn-rounded" style="background-color: #d51100;" data-toggle="modal" data-target="#tambah-unit">Tambah Unit Kerja</button>
                                <div class="modal fade" id="tambah-unit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myLargeModalLabel">Tambah Unit Kerja</h4>
                                            </div>
                                            <div class="modal-body">
                                                <form class="form-horizontal form-material" action="{{ url('/AM-unit-kerja/insert') }}" method = "post">
                                                    {{ csrf_field() }}
                                                    <div class="form-group">
                                                        <label for="inputEmail3" class="col-sm-3 control-label">Nama Unit Kerja</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Unit Kerja" name="nama_unit_kerja">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputEmail3" class="col-sm-3 control-label">Deskripsi Unit Kerja</label>
                                                        <div class="col-sm-9">
                                                            <textarea class="form-control" rows="5" placeholder="Deskripsi Unit Kerja" name="deskripsi_unit_kerja"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group m-b-0">
                                                        <a href="#" class="fcbtn btn btn-default btn-1f m-r-10 m-t-10" data-dismiss="modal" style="padding-top: 5.5px; padding-bottom: 5.5px; float: right;">Keluar</a>
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
                                            <th data-toggle="true"> Unit Kerja </th>
                                            <th data-hide="all"> Deskripsi </th>
                                            <th data-hide="all"> Edit </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($unit_kerja as $listunit_kerja)
                                        <tr>
                                            <td>{{$listunit_kerja->nama_unit_kerja}}</td>
                                            <td>{{$listunit_kerja->deskripsi_unit_kerja}}</td>
                                            <td>
                                            <br>
                                            <button type="submit" class="btn btn-danger btn-outline btn-circle btn-lg m-r-5" data-toggle="modal" data-target="#delete-{{$listunit_kerja->id_unit_kerja}}"><i class="ti-trash"></i></button>
                                            <div class="modal fade" id="delete-{{$listunit_kerja->id_unit_kerja}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myLargeModalLabel">Hapus {{$listunit_kerja->nama_unit_kerja}}</h4> 
                                                        </div>
                                                        <div class="modal-body">
                                                            <form class="form-horizontal form-material" action="{{ url('/AM-unit-kerja/delete/'.$listunit_kerja->id_unit_kerja) }}" method = "get"">
                                                            <h5> Apakah Anda yakin untuk menghapus unit kerja "{{$listunit_kerja->nama_unit_kerja}}"? </h5>
                                                                <div class="form-group m-b-0">
                                                                    <a href="#" class="fcbtn btn btn-default btn-1f m-r-10 m-t-10" data-dismiss="modal" style="padding-top: 5.5px; padding-bottom: 5.5px; float: right;">Keluar</a>
                                                                    <button type="submit" style="float: right;" class="btn btn-danger waves-effect waves-light m-t-10">Hapus</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <button type="button" class="btn btn-danger btn-outline btn-circle btn-lg m-r-5" data-toggle="modal" data-target="#edit-{{$listunit_kerja->id_unit_kerja}}"><i class="ti-pencil-alt"></i></button>
                                            <div class="modal fade" id="edit-{{$listunit_kerja->id_unit_kerja}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myLargeModalLabel">Edit {{$listunit_kerja->nama_unit_kerja}}</h4> </div>
                                                        <div class="modal-body">
                                                            <form class="form-horizontal form-material" action="{{ url('/AM-unit-kerja/update/'.$listunit_kerja->id_unit_kerja) }}" method = "get">
                                                                <div class="form-group">
                                                                    <label for="inputEmail3" class="col-sm-3 control-label">Nama Unit Kerja</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" id="inputEmail3" value="{{$listunit_kerja->nama_unit_kerja}}" name="nama_unit_kerja">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="inputEmail3" class="col-sm-3 control-label">Deskripsi Unit Kerja</label>
                                                                    <div class="col-sm-9">
                                                                        <textarea class="form-control" rows="5" name="deskripsi_unit_kerja">{{$listunit_kerja->deskripsi_unit_kerja}}</textarea>
                                                                    </div>
                                                                </div>
                                                                 <div class="form-group m-b-0">
                                                                    <a href="#" class="fcbtn btn btn-default btn-1f m-r-10 m-t-10" data-dismiss="modal" style="padding-top: 5.5px; padding-bottom: 5.5px; float: right;">Keluar</a>
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