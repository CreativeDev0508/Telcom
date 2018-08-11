<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/icon" sizes="16x16" href="{{ asset('asset/image/icon/index.ico') }}">
    <title>Pengajuan Justifikasi</title>
    @yield('link')
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="{{ route('index') }}">
                        <!-- Logo icon image, you can use font-icon also -->
                        <b>
                            <img src="{{ asset('asset/image/logo_sm.png') }}" alt="home" class="dark-logo light-logo" />
                        </b>
                        <!-- Logo text image you can use text also -->
                        <span class="hidden-xs">
                            <img src="{{ asset('asset/image/logo.png') }}" alt="home" class="light-logo dark-logo" />
                        </span>
                    </a>
                </div>
                <!-- /Logo -->
                <!-- Search input and Toggle icon -->
                <ul class="nav navbar-top-links navbar-left">
                    <li>
                        <a href="javascript:void(0)" class="open-close waves-effect waves-light">
                            <i class="ti-menu"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3>
                        <span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span>
                        <span class="hide-menu">
                            <img src="{{ asset('asset/image/logo_extend.png') }}" alt="home" />
                        </span>
                    </h3>
                </div>
                <div class="user-profile">
                    <div class="dropdown user-pro-body">
                        <div>
                            <img src="{{ asset('plugins/images/users/varun.jpg') }}" alt="user-img" class="img-circle">
                        </div>
                        <p style="font-size:16px;font-weight: 450;">{{ Auth::user()->name }}</p>
                        <p style="font-size:12px;">{{ Auth::user()->jabatan->nama_jabatan }}</p>
                    </div>
                </div>
                <ul class="nav" id="side-menu">
                    @if (Request::is('AM'))
                    <li>
                        <a href="{{route('index')}}" class="waves-effect active">
                            <span class="hide-menu"> BERANDA </span>
                        </a>
                    </li>
                    @elseif (Request::is('SE'))
                    <li>
                        <a href="{{route('index')}}" class="waves-effect active">
                            <span class="hide-menu"> BERANDA </span>
                        </a>
                    </li>
                    @else
                    <li>
                        <a href="{{route('index')}}" class="waves-effect">
                            <span class="hide-menu"> BERANDA </span>
                        </a>
                    </li>
                    @endif
                    @if (Request::is('AM-form-*'))
                    <li>
                        <a href="{{route('pelanggan')}}" class="waves-effect active">
                            <span class="hide-menu"> FORM JUSTIFIKASI </span>
                        </a>
                    </li>
                    @else
                    <li>
                        <a href="{{route('pelanggan')}}" class="waves-effect">
                            <span class="hide-menu"> FORM JUSTIFIKASI </span>
                        </a>
                    </li>
                    @endif
                    <li>
                        <a href="{{route('unit')}}" class="waves-effect">
                            <span class="hide-menu"> UNIT KERJA </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('mitra')}}" class="waves-effect">
                            <span class="hide-menu"> MITRA </span>
                        </a>
                    </li>
                    <li class="devider"></li>
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="waves-effect">
                            <i class="mdi mdi-logout fa-fw"></i>
                            <span class="hide-menu">Keluar</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        @yield('content')
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    @yield('script')
</body>

</html>
