<?php include 'header.php' ?>
<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->

<div class="row page-header">
    <div class="col-lg-6 align-self-center ">
        <h2>Form Admin</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Form</a></li>
            <li class="breadcrumb-item active">Admin</li>
        </ol>
    </div>
</div>

<section class="main-content">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header card-default">
                    Form Admin
                </div>
                <div class="card-body">
                    <form method="post" class="form-horizontal" action="config/pegawai.php">
                        <div class="form-group">
                            <label>NIP</label>
                            <input type="text" class="form-control" id="nip" name="nip" placeholder="NIP" />
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" />
                        </div>
                        <div class="form-group">
                            <label>Kontak</label>
                            <input type="text" class="form-control" name="kontak" placeholder="Nama" />
                        </div>
                        <div class="form-group">
                            <label>Rekening</label>
                            <input type="text" class="form-control" name="rekening" placeholder="Rekening" />
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" name="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php' ?>