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
                            <div class="table-responsive">
                                <table class="table color-table warning-table">
                                    <thead>
                                        <tr>
                                            <th colspan=6>ON PROGRESS</th>
                                        </tr>
                                        <tr>
                                            <th style="background-color: white; color: black;">No.</th>
                                            <th style="background-color: white; color: black;">Nama Kegiatan</th>
                                            <th style="background-color: white; color: black;">Status</th>
                                            <th style="background-color: white; color: black;">Review</th>
                                            <th style="background-color: white; color: black;">Nilai Kontrak</th>
                                            <th style="background-color: white; color: black;">Profit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>ITS Server</td>
                                            <td class="text-success">Bidding</td>
                                            <td><a href="#" class="btn btn-default">Lihat</a></td>
                                            <td>300.000.000</td>
                                            <td>13%</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Deshmukh</td>
                                            <td class="text-warning">SE</td>
                                            <td><a href="#" class="btn btn-default">Lihat</a></td>
                                            <td>250.000.000</td>
                                            <td>17%</td>
                                        </tr>
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
                                            <th style="background-color: white; color: black;">No.</th>
                                            <th style="background-color: white; color: black;">Nama Kegiatan</th>
                                            <th style="background-color: white; color: black;">Detail</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>ITS Server</td>
                                            <td><a href="#" class="btn btn-default">Lihat</a></td>
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
                                            <th colspan=3>APPROVED</th>
                                        </tr>
                                        <tr>
                                            <th style="background-color: white; color: black;">No.</th>
                                            <th style="background-color: white; color: black;">Nama Kegiatan</th>
                                            <th style="background-color: white; color: black;">Detail</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>ITS Server</td>
                                            <td><a href="#" class="btn btn-default">Lihat</a></td>
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
            <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by themedesigner.in </footer>
        </div>
    @endsection