<?php
session_start();
include 'config/koneksi.php';
include 'config/func.php';
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.aksisweb.com/theme/fixed/layouts-5/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Jan 2021 09:33:36 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Informasi Penggajian</title>
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/icon.png">

    <!-- Common Plugins -->
    <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Vector Map Css-->
    <link href="assets/lib/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />

    <!-- Chart C3 -->
    <link href="assets/lib/chart-c3/c3.min.css" rel="stylesheet">
    <link href="assets/lib/chartjs/chartjs-sass-default.css" rel="stylesheet">

    <!-- DataTables -->
    <link href="assets/lib/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
    <link href="assets/lib/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/lib/toast/jquery.toast.min.css" rel="stylesheet">
    <link href="assets/lib/datatables/buttons.dataTables.css" rel="stylesheet" type="text/css">
    <!-- Jquery Steps-->
    <link rel="stylesheet" href="assets/lib/jquery-steps/jquery-steps.css">

    <!-- Custom Css-->
    <link href="assets/scss/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>

    <!-- ============================================================== -->
    <!-- 						Topbar Start 							-->
    <!-- ============================================================== -->
    <div class="top-bar light-top-bar">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <a class="admin-logo dark-logo" href="index.php">
                        <h1>
                            <img alt="" src="assets/img/icon.png" class="logo-icon margin-r-10">
                            <img alt="" src="assets/img/logo-default.png" class="toggle-none hidden-xs">
                        </h1>
                    </a>
                    <div class="left-nav-toggle">
                        <a href="#" class="nav-collapse"><i class="fa fa-bars"></i></a>
                    </div>
                    <div class="left-nav-collapsed">
                        <a href="#" class="nav-collapsed"><i class="fa fa-bars"></i></a>
                    </div>
                    <div class="search-form hidden-xs">
                    </div>
                    <ul class="list-inline top-right-nav">
                        <li class="dropdown icons-dropdown d-none-m">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-bell"></i>
                                <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <ul class="dropdown-menu top-dropdown lg-dropdown notification-dropdown">
                                <li>
                                    <div class="dropdown-header">
                                        <a class="float-right" href="#"><small>View All</small></a> Notifications
                                    </div>
                                    <div class="scrollDiv">
                                        <div class="notification-list">

                                            <a class="clearfix" href="javascript:%20void(0);">
                                                <span class="notification-icon">
                                                    <i class="icon-cloud-upload text-primary"></i>
                                                </span>
                                                <span class="notification-title">Upload Complete</span>
                                                <span class="notification-description">Lorem Ipsum is simply dummy text of the printing.</span>
                                                <span class="notification-time">15 minutes ago</span>
                                            </a>

                                            <a class="clearfix" href="javascript:%20void(0);">
                                                <span class="notification-icon">
                                                    <i class="icon-info text-warning"></i>
                                                </span>
                                                <span class="notification-title">Storage Space low</span>
                                                <span class="notification-description">Lorem Ipsum is simply dummy text of the printing.</span>
                                                <span class="notification-time">15 minutes ago</span>
                                            </a>

                                            <a class="clearfix" href="javascript:%20void(0);">
                                                <span class="notification-icon">
                                                    <i class="icon-check text-success"></i>
                                                </span>
                                                <span class="notification-title">Project Task Complete</span>
                                                <span class="notification-description">Lorem Ipsum is simply dummy text of the printing.</span>
                                                <span class="notification-time">15 minutes ago</span>
                                            </a>

                                            <a class="clearfix" href="javascript:%20void(0);">
                                                <span class="notification-icon">
                                                    <i class=" icon-graph text-danger"></i>
                                                </span>
                                                <span class="notification-title">CPU Usage</span>
                                                <span class="notification-description">Lorem Ipsum is simply dummy text of the printing.</span>
                                                <span class="notification-time">15 minutes ago</span>
                                            </a>

                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown avtar-dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <img alt="" class="rounded-circle" src="assets/img/avtar-2.png" width="30">
                                Admin
                            </a>
                            <ul class="dropdown-menu top-dropdown">
                                <li>
                                    <a class="dropdown-item" href="javascript:%20void(0);"><i class="icon-bell"></i> Activities</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:%20void(0);"><i class="icon-user"></i> Profile</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:%20void(0);"><i class="icon-settings"></i> Settings</a>
                                </li>
                                <li class="dropdown-divider"></li>
                                <li>
                                    <a class="dropdown-item" href="javascript:%20void(0);"><i class="icon-logout"></i> Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!--                        Topbar End                              -->
    <!-- ============================================================== -->


    <!-- ============================================================== -->
    <!-- 						Navigation Start 						-->
    <!-- ============================================================== -->
    <div class="main-sidebar-nav dark-navigation">
        <div class="nano">
            <div class="nano-content sidebar-nav">

                <div class="card-body border-bottom text-center nav-profile">
                    <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>
                    <img alt="profile" class="margin-b-10  " src="assets/img/avtar-2.png" width="80">
                    <p class="lead margin-b-0 toggle-none">Admin</p>
                    <p class="text-muted mv-0 toggle-none">Welcome</p>
                </div>

                <ul class="metisMenu nav flex-column" id="menu">
                    <li class="nav-heading"><span>MAIN</span></li>
                    <li class="nav-item active"><a class="nav-link" href="index.php"><i class="fa fa-home"></i> <span class="toggle-none">Dashboard</span></a></li>

                    <li class="nav-heading"><span>MASTER</span></li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript: void(0);" aria-expanded="false"><i class="fa fa-file"></i> <span class="toggle-none">Forms <span class="fa arrow"></span></span></a>
                        <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="admin-form.php">Admin</a></li>
                            <li class="nav-item"><a class="nav-link" href="pegawai-form.php">Pegawai</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="javascript: void(0);" aria-expanded="false"><i class="fa fa-table"></i> <span class="toggle-none">Tables <span class="fa arrow"></span></span></a>
                        <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="admin-data.php">Admin</a></li>
                            <li class="nav-item"><a class="nav-link" href="pegawai-data.php">Pegawai</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- 						Navigation End	 						-->
    <!-- ============================================================== -->