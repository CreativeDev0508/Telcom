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
                                                <form class="form-horizontal form-material">
                                                    <div class="form-group">
                                                        <label for="inputEmail3" class="col-sm-3 control-label">Nama Unit Kerja</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Unit Kerja">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputEmail3" class="col-sm-3 control-label">Deskripsi Unit Kerja</label>
                                                        <div class="col-sm-9">
                                                            <textarea class="form-control" rows="5" placeholder="Deskripsi Unit Kerja"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group m-b-0">
                                                        <a href="#" class="fcbtn btn btn-default btn-1f m-r-10 m-t-10" data-dismiss="modal" style="padding-top: 5.5px; padding-bottom: 5.5px; float: right;">Keluar</a>
                                                        <a href="#" class="fcbtn btn btn-danger btn-1f m-r-10 m-t-10" data-dismiss="modal" style="padding-top: 5.5px; padding-bottom: 5.5px; float: right; background: #d51100; border: #d51100;">Simpan</a>
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
                                        <tr>
                                            <td>Isidra</td>
                                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium mollitia doloribus, doloremque fugit distinctio quaerat expedita temporibus dolorum impedit accusantium officia, eos nam corrupti earum neque. Commodi, delectus blanditiis?</td>
                                            <td>
                                            <br>
                                            <button type="button" class="btn btn-danger btn-outline btn-circle btn-lg m-r-5"><i class="ti-trash"></i></button>
                                            <button type="button" class="btn btn-danger btn-outline btn-circle btn-lg m-r-5" data-toggle="modal" data-target="#unit-1"><i class="ti-pencil-alt"></i></button>
                                            <div class="modal fade" id="unit-1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myLargeModalLabel">edit #1</h4> </div>
                                                        <div class="modal-body">
                                                            <form class="form-horizontal form-material">
                                                                <div class="form-group">
                                                                    <label for="inputEmail3" class="col-sm-3 control-label">Nama Unit Kerja</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" id="inputEmail3" placeholder="Daniel Kristeen">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="inputEmail3" class="col-sm-3 control-label">Deskripsi Unit Kerja</label>
                                                                    <div class="col-sm-9">
                                                                        <textarea class="form-control" rows="5" placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis ad temporibus iusto? Neque a quis veniam quibusdam, beatae cupiditate officia aliquid excepturi illo nemo, similique, est pariatur veritatis. Natus, tenetur."></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group m-b-0">
                                                                    <a href="#" class="fcbtn btn btn-default btn-1f m-r-10 m-t-10" data-dismiss="modal" style="padding-top: 5.5px; padding-bottom: 5.5px; float: right;">Keluar</a>
                                                                    <a href="#" class="fcbtn btn btn-danger btn-1f m-r-10 m-t-10" data-dismiss="modal" style="padding-top: 5.5px; padding-bottom: 5.5px; float: right; background: #d51100; border: #d51100;">Simpan</a>
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
                                    <tr>
                                        <td>Shona</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium mollitia doloribus, doloremque fugit distinctio quaerat expedita temporibus dolorum impedit accusantium officia, eos nam corrupti earum neque. Commodi, delectus blanditiis?</td>
                                        <td>
                                            <br>
                                            <button type="button" class="btn btn-danger btn-outline btn-circle btn-lg m-r-5"><i class="ti-trash"></i></button>
                                            <button type="button" class="btn btn-danger btn-outline btn-circle btn-lg m-r-5" data-toggle="modal" data-target="#unit-2"><i class="ti-pencil-alt"></i></button>
                                            <div class="modal fade" id="unit-2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                                  <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myLargeModalLabel">edit #1</h4> </div>
                                                        <div class="modal-body">
                                                            <form class="form-horizontal form-material">
                                                                <div class="form-group">
                                                                    <label for="inputEmail3" class="col-sm-3 control-label">Nama Unit Kerja</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" id="inputEmail3" placeholder="Daniel Kristeen">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="inputEmail3" class="col-sm-3 control-label">Deskripsi Unit Kerja</label>
                                                                    <div class="col-sm-9">
                                                                        <textarea class="form-control" rows="5" placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis ad temporibus iusto? Neque a quis veniam quibusdam, beatae cupiditate officia aliquid excepturi illo nemo, similique, est pariatur veritatis. Natus, tenetur."></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group m-b-0">
                                                                    <a href="#" class="fcbtn btn btn-default btn-1f m-r-10 m-t-10" data-dismiss="modal" style="padding-top: 5.5px; padding-bottom: 5.5px; float: right;">Keluar</a>
                                                                    <a href="#" class="fcbtn btn btn-danger btn-1f m-r-10 m-t-10" data-dismiss="modal" style="padding-top: 5.5px; padding-bottom: 5.5px; float: right; background: #d51100; border: #d51100;">Simpan</a>
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
                                    <tr>
                                        <td>Granville</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium mollitia doloribus, doloremque fugit distinctio quaerat expedita temporibus dolorum impedit accusantium officia, eos nam corrupti earum neque. Commodi, delectus blanditiis?</td>
                                        <td>
                                                <br>
                                                <button type="button" class="btn btn-danger btn-outline btn-circle btn-lg m-r-5"><i class="ti-trash"></i></button>
                                                <button type="button" class="btn btn-danger btn-outline btn-circle btn-lg m-r-5" data-toggle="modal" data-target="#unit-3"><i class="ti-pencil-alt"></i></button>
                                                <div class="modal fade" id="unit-3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                                      <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="myLargeModalLabel">edit #1</h4> </div>
                                                            <div class="modal-body">
                                                                <form class="form-horizontal form-material">
                                                                    <div class="form-group">
                                                                        <label for="inputEmail3" class="col-sm-3 control-label">Nama Unit Kerja</label>
                                                                        <div class="col-sm-9">
                                                                            <input type="text" class="form-control" id="inputEmail3" placeholder="Daniel Kristeen">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="inputEmail3" class="col-sm-3 control-label">Deskripsi Unit Kerja</label>
                                                                        <div class="col-sm-9">
                                                                            <textarea class="form-control" rows="5" placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis ad temporibus iusto? Neque a quis veniam quibusdam, beatae cupiditate officia aliquid excepturi illo nemo, similique, est pariatur veritatis. Natus, tenetur."></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group m-b-0">
                                                                        <a href="#" class="fcbtn btn btn-default btn-1f m-r-10 m-t-10" data-dismiss="modal" style="padding-top: 5.5px; padding-bottom: 5.5px; float: right;">Keluar</a>
                                                                        <a href="#" class="fcbtn btn btn-danger btn-1f m-r-10 m-t-10" data-dismiss="modal" style="padding-top: 5.5px; padding-bottom: 5.5px; float: right; background: #d51100; border: #d51100;">Simpan</a>
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