<?php include 'header.php' ?>
<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->
<div class="row page-header no-background no-shadow margin-b-0">
    <div class="col-lg-6 align-self-center ">
        <h2>Dashboard</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </div>
    <div class="col-lg-6 align-self-center text-right">
        <!-- <a href="#" class="btn btn-success box-shadow btn-icon btn-rounded"><i class="fa fa-plus"></i> Create New</a> -->
    </div>
</div>

<section class="main-content">
    <div class="row w-no-padding margin-b-30">

        <div class="col-md-3">
            <div class="widget  bg-light">
                <div class="row row-table ">
                    <div class="margin-b-30">
                        <h2 class="margin-b-5">Pegwai</h2>
                        <p class="text-muted">Total Pegawai</p>
                        <span class="float-right text-primary widget-r-m">2</span>
                    </div>
                    <div class="progress margin-b-10  progress-mini">
                        <div style="width:50%;" class="progress-bar bg-primary"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="widget  bg-light">
                <div class="row row-table ">
                    <div class="margin-b-30">
                        <h2 class="margin-b-5">Admin</h2>
                        <p class="text-muted">Total Admin</p>
                        <span class="float-right text-indigo widget-r-m">2</span>
                    </div>
                    <div class="progress margin-b-10 progress-mini">
                        <div style="width:45%;" class="progress-bar bg-indigo"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php' ?>