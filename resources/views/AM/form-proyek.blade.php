@extends('layouts.app')

@section('link')
<!-- Bootstrap Core CSS --> 
<link href="{{ asset('bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet"> 
    <!-- Menu CSS --> 
    <link href="{{ asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') }}" rel="stylesheet"> 
    <!-- page CSS --> 
    <link href="{{ asset('plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css" /> 
    <link href="{{ asset('plugins/bower_components/custom-select/custom-select.css' )}}" rel="stylesheet" type="text/css" /> 
    <link href="{{ asset('plugins/bower_components/switchery/dist/switchery.min.css') }}" rel="stylesheet" /> 
    <link href="{{ asset('plugins/bower_components/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet" /> 
    <link href="{{ asset('plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}" rel="stylesheet" /> 
    <link href="{{ asset('plugins/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet" /> 
    <link href="{{ asset('plugins/bower_components/multiselect/css/multi-select.css') }}" rel="stylesheet" type="text/css" /> 
    <!-- Page plugins css --> 
    <link href="{{ asset('plugins/bower_components/clockpicker/dist/jquery-clockpicker.min.css') }}" rel="stylesheet"> 
    <!-- toast CSS --> 
    <link href="{{ asset('plugins/bower_components/toast-master/css/jquery.toast.css') }}" rel="stylesheet"> 
    <!-- morris CSS --> 
    <link href="{{ asset('plugins/bower_components/morrisjs/morris.css') }}" rel="stylesheet"> 
    <!-- Footable CSS --> 
    <link href="{{ asset('plugins/bower_components/footable/css/footable.core.css') }}" rel="stylesheet"> 
    <!-- chartist CSS --> 
    <link href="{{ asset('plugins/bower_components/chartist-js/dist/chartist.min.css') }}" rel="stylesheet"> 
    <link href="{{ asset('plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css') }}" rel="stylesheet"> 
    <!-- Calendar CSS --> 
    <link href="{{ asset('plugins/bower_components/calendar/dist/fullcalendar.css') }}" rel="stylesheet" /> 
    <!-- animation CSS --> 
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet"> 
    <!-- Custom CSS --> 
    <link href="{{ asset('css/style.css') }}" rel="stylesheet"> 
    <!-- color CSS --> 
    <link href="{{ asset('css/colors/default.css') }}" id="theme" rel="stylesheet"> 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries --> 
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// --> 
    <!--[if lt IE 9]> 
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script> 
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script> 
    <![endif]-->
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
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h1 class="text-center" style="color: #d51100; font-weight: 500">PROYEK / KEGIATAN</h1>
                            <form class="form-horizontal form-material" action="{{ url('/AM-form-proyek/insert') }}" method = "post">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-sm-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-3 control-label">Judul Kegiatan</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="Judul Kegiatan" name="judul">
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
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="Alamat Delivery" name="alamat_delivery">
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
                                                <select class="selectpicker m-b-20" data-style="form-control" name="skema_bisnis">
                                                    <option value="Sewa Murni">Sewa Murni</option>
                                                    <option value="Sewa Beli">Sewa Beli</option>
                                                    <option value="Pengadaan Beli">Pengadaan Beli</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Deadline</label>
                                            <div class="input-group col-sm-9" style="padding-left: 15px; padding-right: 15px">
                                                <input type="date" class="form-control" name="saat_penggunaan"><!-- <span class="input-group-addon"><i class="icon-calender"></i></span> -->
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Tanggal Pemasukan Dokumen</label>
                                            <div class="input-group col-sm-9" style="padding-left: 15px; padding-right: 15px">
                                                <input type="date" class="form-control" name="pemasukan_dokumen"> <!-- <span class="input-group-addon"><i class="icon-calender"></i></span> -->
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Ready for Service</label>
                                            <div class="input-group col-sm-9" style="padding-left: 15px; padding-right: 15px">
                                                <input type="date" class="form-control" name="ready_for_service"><!-- <span class="input-group-addon"><i class="icon-calender"></i></span> -->
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-3 control-label">Masa Kontrak</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control" id="inputEmail3" placeholder="Masa Kontrak" name="masa_kontrak">
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
    <script src="{{ asset('plugins/bower_components/waypoints/lib/jquery.waypoints.js') }}"></script> 
    <script src="{{ asset('plugins/bower_components/counterup/jquery.counterup.min.js') }}"></script> 
    <!-- chartist chart --> 
    <script src="{{ asset('plugins/bower_components/chartist-js/dist/chartist.min.js') }}"></script> 
    <script src="{{ asset('plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js') }}"></script> 
    <!-- Sparkline chart JavaScript --> 
    <script src="{{ asset('plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js') }}"></script> 
    <!-- Footable --> 
    <script src="{{ asset('plugins/bower_components/footable/js/footable.all.min.js') }}"></script> 
    <!--FooTable init--> 
    <script src="{{ asset('js/footable-init.js') }}"></script> 
    <!-- Custom Theme JavaScript --> 
    <script src="{{ asset('js/custom.min.js') }}"></script> 
    <script src="{{ asset('plugins/bower_components/moment/moment.js') }}"></script> 
    <script src="{{ asset('plugins/bower_components/clockpicker/dist/jquery-clockpicker.min.js') }}"></script> 
    <script src="{{ asset('plugins/bower_components/switchery/dist/switchery.min.js') }}"></script> 
    <script src="{{ asset('plugins/bower_components/custom-select/custom-select.min.js') }}" type="text/javascript"></script> 
    <script src="{{ asset('plugins/bower_components/bootstrap-select/bootstrap-select.min.js') }}" type="text/javascript"></script> 
    <script src="{{ asset('plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script> 
    <script src="{{ asset('plugins/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js') }}" type="text/javascript"></script> 
    <script type="text/javascript" src="{{ asset('plugins/bower_components/multiselect/js/jquery.multi-select.js') }}"></script> 
    <script src="{{ asset('plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script> 
    <script src="{{ asset('plugins/bower_components/timepicker/bootstrap-timepicker.min.js') }}"></script> 
    <script src="{{ asset('plugins/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script> 
    <script src="{{ asset('plugins/bower_components/jquery-asColorPicker-master/libs/jquery-asColor.js') }}"></script> 
    <script src="{{ asset('plugins/bower_components/jquery-asColorPicker-master/libs/jquery-asGradient.js') }}"></script> 
    <script src="{{ asset('plugins/bower_components/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js') }}"></script> 
    <script src="{{ asset('js/dashboard1.js') }}"></script> 
    <script src="{{ asset('plugins/bower_components/toast-master/js/jquery.toast.js') }}"></script> 
    <script> 
    jQuery(document).ready(function() { 
        // Switchery 
        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch')); 
        $('.js-switch').each(function() { 
            new Switchery($(this)[0], $(this).data()); 
        }); 
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
    <script> 
    // Clock pickers 
    $('#single-input').clockpicker({ 
        placement: 'bottom', 
        align: 'left', 
        autoclose: true, 
        'default': 'now' 
    }); 
    $('.clockpicker').clockpicker({ 
        donetext: 'Done', 
    }).find('input').change(function() { 
        console.log(this.value); 
    }); 
    $('#check-minutes').click(function(e) { 
        // Have to stop propagation here 
        e.stopPropagation(); 
        input.clockpicker('show').clockpicker('toggleView', 'minutes'); 
    }); 
    if (/mobile/i.test(navigator.userAgent)) { 
        $('input').prop('readOnly', true); 
    } 
    // Colorpicker 
    $(".colorpicker").asColorPicker(); 
    $(".complex-colorpicker").asColorPicker({ 
        mode: 'complex' 
    }); 
    $(".gradient-colorpicker").asColorPicker({ 
        mode: 'gradient' 
    }); 
    // Date Picker 
    jQuery('.mydatepicker, #datepicker').datepicker(); 
    jQuery('#datepicker-autoclose').datepicker({ 
        autoclose: true, 
        todayHighlight: true 
    }); 
    jQuery('#date-range').datepicker({ 
        toggleActive: true 
    }); 
    jQuery('#datepicker-inline').datepicker({ 
        todayHighlight: true 
    }); 
    // Daterange picker 
    $('.input-daterange-datepicker').daterangepicker({ 
        buttonClasses: ['btn', 'btn-sm'], 
        applyClass: 'btn-danger', 
        cancelClass: 'btn-inverse' 
    }); 
    $('.input-daterange-timepicker').daterangepicker({ 
        timePicker: true, 
        format: 'MM/DD/YYYY h:mm A', 
        timePickerIncrement: 30, 
        timePicker12Hour: true, 
        timePickerSeconds: false, 
        buttonClasses: ['btn', 'btn-sm'], 
        applyClass: 'btn-danger', 
        cancelClass: 'btn-inverse' 
    }); 
    $('.input-limit-datepicker').daterangepicker({ 
        format: 'MM/DD/YYYY', 
        minDate: '06/01/2015', 
        maxDate: '06/30/2015', 
        buttonClasses: ['btn', 'btn-sm'], 
        applyClass: 'btn-danger', 
        cancelClass: 'btn-inverse', 
        dateLimit: { 
            days: 6 
        } 
    }); 
    </script>
@endsection