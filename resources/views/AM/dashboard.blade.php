<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/icon" sizes="16x16" href="asset/image/icon/index.ico">
    <title>Ample Admin Template - The Ultimate Multipurpose admin template</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="plugins/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!-- Calendar CSS -->
    <link href="plugins/bower_components/calendar/dist/fullcalendar.css" rel="stylesheet" />
    <!-- animation CSS -->
    
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
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
                    <a class="logo" href="index.html">
                        <!-- Logo icon image, you can use font-icon also --><b>
                        <img src="asset/image/logo_sm.png" alt="home" class="dark-logo light-logo" />
                     </b>
                        <!-- Logo text image you can use text also --><span class="hidden-xs">
                        <img src="asset/image/logo.png" alt="home" class="light-logo dark-logo" />
                     </span> </a>
                </div>
                <!-- /Logo -->
                <!-- Search input and Toggle icon -->
                <ul class="nav navbar-top-links navbar-left">
                    <li><a href="javascript:void(0)" class="open-close waves-effect waves-light"><i class="ti-menu"></i></a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"> <i class="mdi mdi-gmail"></i>
                            <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                        </a>
                        <ul class="dropdown-menu mailbox animated bounceInDown">
                            <li>
                                <div class="drop-title">You have 4 new messages</div>
                            </li>
                            <li>
                                <div class="message-center">
                                    <a href="#">
                                        <div class="user-img"> <img src="plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="plugins/images/users/sonu.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="plugins/images/users/arijit.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <a class="text-center" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-messages -->
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
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu"><img src="asset/image/logo_extend.png" alt="home" /></span></h3> </div>
                <div class="user-profile">
                    <div class="dropdown user-pro-body">
                        <div><img src="plugins/images/users/varun.jpg" alt="user-img" class="img-circle"></div>
                        <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Steave Gection <span class="caret"></span></a>
                        <ul class="dropdown-menu animated flipInY">
                            <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                            <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                            <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="login.html"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                    </div>
                </div>
                <ul class="nav" id="side-menu">
                    <li> <a href="index.html" class="waves-effect"> <span class="hide-menu"> DASHBOARD </span></a></li>
                    <li> <a href="#" class="waves-effect"> <span class="hide-menu"> FORM JUSTIFIKASI </span></a></li>
                    <li> <a href="#" class="waves-effect"> <span class="hide-menu"> FORM BIDDING </span></a></li>
                    <li class="devider"></li>
                    <li><a href="#" class="waves-effect"><i class="mdi mdi-logout fa-fw"></i> <span class="hide-menu">Log out</span></a></li>
                </ul>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
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
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Counter js -->
    <script src="plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    <!-- chartist chart -->
    <script src="plugins/bower_components/chartist-js/dist/chartist.min.js"></script>
    <script src="plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <script src="js/dashboard1.js"></script>
    <script src="plugins/bower_components/toast-master/js/jquery.toast.js"></script>
</body>

</html>
