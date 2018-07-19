@extends('layouts.app')

@section('link')
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- color CSS -->
    <link href="{{ asset('css/colors/default.css') }}" id="theme" rel="stylesheet">

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
                                            <td><a href="#" class="btn btn-default" data-toggle="modal" data-target="#detail">Lihat</a>
                                                <div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
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
                                                                    <tbody class="detail-text">
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
                                                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, similique tenetur? Facere, officiis laborum, maxime consequuntur temporibus magnam repellendus ad ratione voluptas nostrum, est veritatis repellat assumenda. Iure, sequi adipisci?</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>                                                                    
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                        <!-- /.modal-content -->
                                                    </div>
                                                    <!-- /.modal-dialog -->
                                                </div>
                                            </td>
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
                                            <th colspan=3>FAILED</th>
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
            <footer class="footer text-center"> 2018 &copy; PT. Telekomunikasi Indonesia Tbk </footer>
        </div>
@endsection

@section ('script')
    <script src="{{ asset('plugins/bower_components/jquery/dist/jquery.min.js') }}"></script> 
    <!-- Bootstrap Core JavaScript --> 
    <script src="{{ asset('bootstrap/dist/js/bootstrap.min.js') }}"></script> 
    <!-- Menu Plugin JavaScript --> 
    <script src="{{ asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script> 
    <!--slimscroll JavaScript --> 
    <script src="{{ asset('js/jquery.slimscroll.js') }}"></script> 
    <!--Wave Effects --> 
    <script src="{{ asset('js/waves.js') }}"></script> 
    <!--Counter js --> 
    <script src="{{ asset('plugins/bower_components/counterup/jquery.counterup.min.js') }}"></script> 
    <!-- chartist chart --> 
    <script src="{{ asset('plugins/bower_components/chartist-js/dist/chartist.min.js') }}"></script> 
    <script src="{{ asset('plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js') }}"></script> 
    <!-- Sparkline chart JavaScript --> 
    <script src="{{ asset('plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js') }}"></script> 
    <!-- Custom Theme JavaScript --> 
    <script src="{{ asset('js/custom.min.js') }}"></script> 
    <script src="{{ asset('plugins/bower_components/custom-select/custom-select.min.js') }}" type="text/javascript"></script> 
    <script src="{{ asset('plugins/bower_components/bootstrap-select/bootstrap-select.min.js') }}" type="text/javascript"></script> 
    <script src="{{ asset('plugins/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js') }}" type="text/javascript"></script> 
    <script type="text/javascript" src="{{ asset('plugins/bower_components/multiselect/js/jquery.multi-select.js') }}"></script> 
    <script src="{{ asset('js/dashboard1.js') }}"></script> 
    <script> 
        jQuery(document).ready(function() { 
            // For select 2 
            $(".select2").select2(); 
            $('.selectpicker').selectpicker(); 
            //Bootstrap-TouchSpin 
            $(".vertical-spin").TouchSpin({ 
                verticalbuttons: true, 
                verticalupclass: 'ti-plus', 
                verticaldownclass: 'ti-minus' 
            }); 
            var vspinTrue = $(".vertical-spin").TouchSpin({ 
                verticalbuttons: true 
            }); 
            if (vspinTrue) { 
                $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove(); 
            } 
            $("input[name='tch1']").TouchSpin({ 
                min: 0, 
                max: 100, 
                step: 0.1, 
                decimals: 2, 
                boostat: 5, 
                maxboostedstep: 10, 
                postfix: '%' 
            }); 
            $("input[name='tch2']").TouchSpin({ 
                min: -1000000000, 
                max: 1000000000, 
                stepinterval: 50, 
                maxboostedstep: 10000000, 
                prefix: '$' 
            }); 
            $("input[name='tch3']").TouchSpin(); 
            $("input[name='tch3_22']").TouchSpin({ 
                initval: 40 
            }); 
            $("input[name='tch5']").TouchSpin({ 
                prefix: "pre", 
                postfix: "post" 
            }); 
            // For multiselect 
            $('#pre-selected-options').multiSelect(); 
            $('#optgroup').multiSelect({ 
                selectableOptgroup: true 
            }); 
            $('#public-methods').multiSelect(); 
            $('#select-all').click(function() { 
                $('#public-methods').multiSelect('select_all'); 
                return false; 
            }); 
            $('#deselect-all').click(function() { 
                $('#public-methods').multiSelect('deselect_all'); 
                return false; 
            }); 
            $('#refresh').on('click', function() { 
                $('#public-methods').multiSelect('refresh'); 
                return false; 
            }); 
            $('#add-option').on('click', function() { 
                $('#public-methods').multiSelect('addOption', { 
                    value: 42, 
                    text: 'test 42', 
                    index: 0 
                }); 
                return false; 
            }); 
        }); 
    </script> 
@endsection