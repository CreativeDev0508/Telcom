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
                <!--/.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="white-box">
                            <h1 class="text-center" style="color: #d51100; font-weight: 500">WITEL</h1>
                            <button type="button" class="btn btn-danger btn-rounded" style="background-color: #d51100;" data-toggle="modal" data-target="#tambah-witel"><i class="fa fa-plus"></i>  WITEL</button>
                            <div class="modal fade" id="tambah-witel" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myLargeModalLabel" style="text-align: center; font-weight: 450;">Tambah WITEL</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form-horizontal form-material" action="{{ route('witel_insert') }}" method = "get">
                                                {{-- {{ csrf_field() }} --}}
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-3 control-label">Nama WITEL</label>
                                                    <div class="col-sm-5">
                                                        <input type="text" class="form-control" id="inputEmail3" placeholder="Nama WITEL" name="nama_wilayah">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label for="inputEmail3" class="col-sm-3 control-label">Sales Engineering</label>
                                                    <div class="col-sm-5">
                                                       <select class="selectpicker m-b-20" data-style="form-control" name="se">
                                                        @foreach ($user->where('id_jabatan','=',2) as $listuser)
                                                            <option value="{{$listuser->id}}">{{$listuser->name}}</option>
                                                        @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label for="inputEmail3" class="col-sm-3 control-label">Bidding</label>
                                                    <div class="col-sm-5">
                                                       <select class="selectpicker m-b-20" data-style="form-control" name="bidding">
                                                        @foreach ($user->where('id_jabatan','=',3) as $listuser)
                                                            <option value="{{$listuser->id}}">{{$listuser->name}}</option>
                                                        @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label for="inputEmail3" class="col-sm-3 control-label">Manager</label>
                                                    <div class="col-sm-5">
                                                       <select class="selectpicker m-b-20" data-style="form-control" name="manager">
                                                        @foreach ($user->where('id_jabatan','=',4) as $listuser)
                                                            <option value="{{$listuser->id}}">{{$listuser->name}}</option>
                                                        @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label for="inputEmail3" class="col-sm-3 control-label">Deputy</label>
                                                    <div class="col-sm-5">
                                                       <select class="selectpicker m-b-20" data-style="form-control" name="deputy">
                                                        @foreach ($user->where('id_jabatan','=',5) as $listuser)
                                                            <option value="{{$listuser->id}}">{{$listuser->name}}</option>
                                                        @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label for="inputEmail3" class="col-sm-3 control-label">General Manager</label>
                                                    <div class="col-sm-5">
                                                       <select class="selectpicker m-b-20" data-style="form-control" name="gm">
                                                        @foreach ($user->where('id_jabatan','=',6) as $listuser)
                                                            <option value="{{$listuser->id}}">{{$listuser->name}}</option>
                                                        @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label for="inputEmail3" class="col-sm-3 control-label">Approval</label>
                                                    <div class="col-sm-5">
                                                       <select class="selectpicker m-b-20" data-style="form-control" name="approval">
                                                        @foreach ($user->where('id_jabatan','=',7) as $listuser)
                                                            <option value="{{$listuser->id}}">{{$listuser->name}}</option>
                                                        @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group m-b-0">
                                                    <a href="#" class="fcbtn btn btn-default btn-1f m-r-10 m-t-10" data-dismiss="modal" style="padding-top: 5.5px; padding-bottom: 5.5px; float: right; margin-left: 10px">Keluar</a>
                                                    <button id="divide" type="submit" style="float: right;" class="btn btn-danger waves-effect waves-light m-t-10">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type="button" class="btn btn-danger btn-rounded" style="background-color: #d51100;" data-toggle="modal" data-target="#tambah-jabatan"><i class="fa fa-plus"></i>  PEJABAT</button>
                            <div class="modal fade" id="tambah-jabatan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myLargeModalLabel" style="text-align: center; font-weight: 450;">Tambah PEJABAT</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form-horizontal form-material" action="{{ route('user_insert') }}" method = "get">
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-3 control-label">Nama Pejabat</label>
                                                    <div class="col-sm-5">
                                                        <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Pejabat" name="name">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-3 control-label">NIK</label>
                                                    <div class="col-sm-5">
                                                        <input type="text" class="form-control" id="inputEmail3" placeholder="NIK Pejabat" name="nik">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label for="inputEmail3" class="col-sm-3 control-label">Jabatan</label>
                                                    <div class="col-sm-4">
                                                       <select class="selectpicker m-b-20" data-style="form-control" name="id_jabatan">
                                                        @foreach ($jabatan as $listjabatan)
                                                            <option value="{{$listjabatan->id_jabatan}}">{{$listjabatan->nama_jabatan}}</option>
                                                        @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group m-b-0">
                                                    <a href="#" class="fcbtn btn btn-default btn-1f m-r-10 m-t-10" data-dismiss="modal" style="padding-top: 5.5px; padding-bottom: 5.5px; float: right; margin-left: 10px">Keluar</a>
                                                    <button id="divide" type="submit" style="float: right;" class="btn btn-danger waves-effect waves-light m-t-10">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">WITEL</th>
                                        <th style="text-align: center;">SE</th>
                                        <th style="text-align: center;">Bidding</th>
                                        <th style="text-align: center;">Manager</th>
                                        <th style="text-align: center;">Deputy</th>
                                        <th style="text-align: center;">GM</th>
                                        <th style="text-align: center;">Approval</th>
                                        <th style="text-align: center; width: 15%;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                @foreach($wilayah as $listwilayah)                             
                                    <tr>
                                        <td align="center" style="width: 9%;">{{$listwilayah->nama_wilayah}}</td>
                                        <td style="text-align: justify;">
                                            @foreach($se->where('id_wilayah','=',$listwilayah->id_wilayah) as $listse)
                                            {{$listse->name}}<br>
                                            {{$listse->nik}}
                                            @endforeach</td>
                                        <td style="text-align: justify;">
                                            @foreach($bidding->where('id_wilayah','=',$listwilayah->id_wilayah) as $listbidding)
                                            {{$listbidding->name}}<br>
                                            {{$listbidding->nik}}
                                            @endforeach</td>
                                        <td style="text-align: justify;">
                                            @foreach($manager->where('id_wilayah','=',$listwilayah->id_wilayah) as $listmanager)
                                            {{$listmanager->name}}<br>
                                            {{$listmanager->nik}}
                                            @endforeach
                                        </td>
                                        <td style="text-align: justify;">
                                            @foreach($deputy->where('id_wilayah','=',$listwilayah->id_wilayah) as $listdeputy)
                                            {{$listdeputy->name}}<br>
                                            {{$listdeputy->nik}}
                                            @endforeach
                                        </td>
                                        <td style="text-align: justify;">
                                            @foreach($gm->where('id_wilayah','=',$listwilayah->id_wilayah) as $listgm)
                                            {{$listgm->name}}<br>
                                            {{$listgm->nik}}
                                            @endforeach
                                        </td>
                                        <td style="text-align: justify;">
                                            @foreach($approval->where('id_wilayah','=',$listwilayah->id_wilayah) as $listapproval)
                                            {{$listapproval->name}}<br>
                                            {{$listapproval->nik}}
                                            @endforeach
                                        </td>
                                        <td align="center">
                                            <button type="button" class="btn btn-danger btn-rounded" data-toggle="modal" data-target="#edit-{{$listwilayah->id_wilayah}}" data-plaement="top" title="Ubah WITEL"><i class="ti-pencil-alt"></i></button>
                                            <div class="modal fade" id="edit-{{$listwilayah->id_wilayah}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myLargeModalLabel" style="font-weight: 450;">Sunting </h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form class="form-horizontal form-material" action="{{ route('witel_update', ['id_wilayah' => $listwilayah->id_wilayah]) }}" method = "get">
                                                                {{-- {{ csrf_field() }} --}}
                                                                <div class="row">
                                                                    <label for="inputEmail3" class="col-sm-3 control-label">Nama WITEL</label>
                                                                    <div class="col-sm-5">
                                                                        <input type="text" class="form-control" id="inputEmail3" placeholder="Nama WITEL" name="nama_wilayah" value="{{$listwilayah->nama_wilayah}}">
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <label for="inputEmail3" class="col-sm-3 control-label">Sales Engineering</label>
                                                                    <div class="col-sm-5">
                                                                       <select class="selectpicker m-b-20" data-style="form-control" name="se">
                                                                        @foreach ($user->where('id_jabatan','=',2) as $listuser)
                                                                            <option value="{{$listuser->id}}" @if($listwilayah->se == $listuser->id) selected @endif>{{$listuser->name}}</option>
                                                                        @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <label for="inputEmail3" class="col-sm-3 control-label">Bidding</label>
                                                                    <div class="col-sm-5">
                                                                       <select class="selectpicker m-b-20" data-style="form-control" name="bidding">
                                                                        @foreach ($user->where('id_jabatan','=',3) as $listuser)
                                                                            <option value="{{$listuser->id}}" @if($listwilayah->bidding == $listuser->id) selected @endif>{{$listuser->name}}</option>
                                                                        @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <label for="inputEmail3" class="col-sm-3 control-label">Manager</label>
                                                                    <div class="col-sm-5">
                                                                       <select class="selectpicker m-b-20" data-style="form-control" name="manager">
                                                                        @foreach ($user->where('id_jabatan','=',4) as $listuser)
                                                                            <option value="{{$listuser->id}}" @if($listwilayah->manager == $listuser->id) selected @endif>{{$listuser->name}}</option>
                                                                        @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <label for="inputEmail3" class="col-sm-3 control-label">Deputy</label>
                                                                    <div class="col-sm-5">
                                                                       <select class="selectpicker m-b-20" data-style="form-control" name="deputy">
                                                                        @foreach ($user->where('id_jabatan','=',5) as $listuser)
                                                                            <option value="{{$listuser->id}}" @if($listwilayah->deputy == $listuser->id) selected @endif>{{$listuser->name}}</option>
                                                                        @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <label for="inputEmail3" class="col-sm-3 control-label">General Manager</label>
                                                                    <div class="col-sm-5">
                                                                       <select class="selectpicker m-b-20" data-style="form-control" name="gm">
                                                                        @foreach ($user->where('id_jabatan','=',6) as $listuser)
                                                                            <option value="{{$listuser->id}}" @if($listwilayah->gm == $listuser->id) selected @endif>{{$listuser->name}}</option>
                                                                        @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <label for="inputEmail3" class="col-sm-3 control-label">Approval</label>
                                                                    <div class="col-sm-5">
                                                                       <select class="selectpicker m-b-20" data-style="form-control" name="approval">
                                                                        @foreach ($user->where('id_jabatan','=',7) as $listuser)
                                                                            <option value="{{$listuser->id}}" @if($listwilayah->approval == $listuser->id) selected @endif>{{$listuser->name}}</option>
                                                                        @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group m-b-0">
                                                                    <a href="#" class="fcbtn btn btn-default btn-1f m-r-10 m-t-10" data-dismiss="modal" style="padding-top: 5.5px; padding-bottom: 5.5px; float: right; margin-left: 10px">Keluar</a>
                                                                    <button id="divide" type="submit" style="float: right;" class="btn btn-danger waves-effect waves-light m-t-10">Simpan</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-danger btn-rounded" data-toggle="modal" data-target="#delete-{{$listwilayah->id_wilayah}}" data-plaement="top" title="Hapus WITEL"><i class="ti-trash"></i></button>
                                            <div class="modal fade" id="delete-{{$listwilayah->id_wilayah}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myLargeModalLabel" style="font-weight: 450;">Hapus </h4> 
                                                        </div>
                                                        <div class="modal-body">
                                                            <form class="form-horizontal form-material" action="{{ route('witel_delete', ['id' => $listwilayah->id_wilayah]) }}" method = "get">
                                                            <h5> Apakah Anda yakin untuk menghapus "{{$listwilayah->nama_wilayah}}" "? </h5>
                                                                <div class="form-group m-b-0">
                                                                    <a href="#" class="fcbtn btn btn-default btn-1f m-r-10 m-t-10" data-dismiss="modal" style="padding-top: 5.5px; padding-bottom: 5.5px; float: right; margin-left: 10px">Keluar</a>
                                                                    <button type="submit" style="float: right;" class="btn btn-danger waves-effect waves-light m-t-10">Hapus</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
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
            <footer class="footer text-center"> 2018 &copy; PT Telekomunikasi Indonesia Tbk </footer>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
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