<?php include 'header.php' ?>
<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->

<div class="row page-header">
    <div class="col-lg-6 align-self-center ">
        <h2>Pegawai</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Tables</a></li>
            <li class="breadcrumb-item active">Pegawai</li>
        </ol>
    </div>
</div>

<section class="main-content">
    <div class="row">
        <div class="col-md-12">
            <a href="pegawai-form.php" class="btn btn-success box-shadow btn-icon btn-rounded mb-4"><i class="fa fa-plus"></i> Tambah Data Pegawai</a>
            <div class="card">
                <div class="card-header card-default">
                    Data Pegawai
                </div>
                <div class="card-body">
                    <table id="datatable2" class="table table-striped dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>NIP</th>
                                <th>Nama</th>
                                <th>Kontak</th>
                                <th>Rekening</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $sql = mysqli_query($koneksi, "SELECT * from pegawai");
                            while ($row = mysqli_fetch_array($sql)) {
                            ?>
                                <tr>
                                    <td><?= $row['nip'] ?></td>
                                    <td><?= $row['nama'] ?></td>
                                    <td><?= $row['kontak'] ?></td>
                                    <td><?= $row['rekening'] ?></td>
                                    <td>
                                        <a href="config/pegawai.php?del&id=<?= $row['nip'] ?>" class="btn btn-danger" onclick="javascript: return confirm('Anda yakin menghapus data?')" title="HAPUS"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php' ?>