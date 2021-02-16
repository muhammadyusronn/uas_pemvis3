<?php include 'header.php' ?>
<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->

<div class="row page-header">
    <div class="col-lg-6 align-self-center ">
        <h2>Form Gaji</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Form</a></li>
            <li class="breadcrumb-item active">Gaji</li>
        </ol>
    </div>
</div>

<section class="main-content">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header card-default">
                    Form Gaji
                </div>
                <div class="card-body">
                    <form method="post" class="form-horizontal" action="config/gaji.php">
                        <div class="form-group">
                            <label>Pegawai</label>
                            <select class="form-control" name="nip_pegawai">
                                <option value="0">Pilih Pegawai</option>
                                <?php $sqll = mysqli_query($koneksi, "SELECT * from pegawai");
                                while ($row = mysqli_fetch_array($sqll)) { ?>
                                    <option value="<?= $row['nip'] ?>"><?= $row['nama'] ?></option>
                                <?php }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Gajian</label>
                            <input type="date" class="form-control" name="tanggalgajian" />
                        </div>
                        <div class="form-group">
                            <label>Periode Bulan</label>
                            <select class="form-control" name="periodebulan">
                                <option value="-1">Pilih Periode Bulan</option>
                                <?php
                                $i = 0;
                                while ($i < count($nama_bulan)) { ?>
                                    <option value="<?= $i ?>"><?= $nama_bulan[$i] ?></option>
                                <?php $i++;
                                } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Periode Tahun</label>
                            <input type="text" class="form-control" name="periodetahun" placeholder="Periode Tahun (EX: 2021)" />
                        </div>
                        <div class="form-group">
                            <label>Total Gaji</label>
                            <input type="text" class="form-control" name="totalgaji" placeholder="Total Gaji (EX: 900000)" />
                        </div>
                        <div class="form-group">
                            <label>Total Potongan</label>
                            <input type="text" class="form-control" name="potongan" placeholder="Total Potongan (EX: 200000)" />
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