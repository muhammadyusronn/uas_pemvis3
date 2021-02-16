<?php include 'header.php' ?>
<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->

<div class="row page-header">
    <div class="col-lg-6 align-self-center ">
        <h2>Gaji</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Tables</a></li>
            <li class="breadcrumb-item active">Gaji</li>
        </ol>
    </div>
</div>

<section class="main-content">
    <div class="row">
        <div class="col-md-12">
            <a href="gaji-form.php" class="btn btn-success box-shadow btn-icon btn-rounded mb-4"><i class="fa fa-plus"></i> Tambah Data Gaji</a>
            <div class="card">
                <div class="card-header card-default">
                    Data Gaji
                </div>
                <div class="card-body">
                    <table id="datatable2" class="table table-striped dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>Tanggal Gajian</th>
                                <th>Nama Pegawai</th>
                                <th>Periode Gaji</th>
                                <th>Total Gaji</th>
                                <th>Total Potongan</th>
                                <th>Total Pendapatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $sql = mysqli_query($koneksi, "SELECT gaji.*,pegawai.nama as nampeg from gaji,pegawai WHERE pegawai.nip=gaji.nip_pegawai");
                            while ($row = mysqli_fetch_array($sql)) {
                            ?>
                                <tr>
                                    <td><?= TanggalIndo($row['tanggalgajian']) ?></td>
                                    <td><?= $row['nampeg'] ?></td>
                                    <td><?= $nama_bulan[($row['periodebulan'] - 1)] . '/' . $row['periodetahun'] ?></td>
                                    <td><?= rupiah($row['totalgaji']) ?></td>
                                    <td><?= rupiah($row['potongan']) ?></td>
                                    <td><?= rupiah($row['totalgaji'] - $row['potongan']) ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php' ?>