<?php include 'header.php' ?>
<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->

<div class="row page-header">
    <div class="col-lg-6 align-self-center ">
        <h2>Admin</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Tables</a></li>
            <li class="breadcrumb-item active">Admin</li>
        </ol>
    </div>
</div>

<section class="main-content">
    <div class="row">
        <div class="col-md-12">
            <a href="admin-form.php" class="btn btn-success box-shadow btn-icon btn-rounded mb-4"><i class="fa fa-plus"></i> Tambah Data Admin</a>
            <div class="card">
                <div class="card-header card-default">
                    Data Admin
                </div>
                <div class="card-body">
                    <table id="datatable2" class="table table-striped dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Kontak</th>
                                <th>Level</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $sql = mysqli_query($koneksi, "SELECT * from user");
                            while ($row = mysqli_fetch_array($sql)) {
                            ?>
                                <tr>
                                    <td><?= $row['user_nama'] ?></td>
                                    <td><?= $row['user_username'] ?></td>
                                    <td><?= $row['user_kontak'] ?></td>
                                    <td><?= $row['user_role'] ?></td>
                                    <td>
                                        <a href="?edit&id=<?= $row['user_id'] ?>" class="btn btn-warning" title="EDIT"><i class="fa fa-pencil"></i></a>
                                        <a href="config/admin.php?del&id=<?= $row['user_id'] ?>" class="btn btn-danger" onclick="javascript: return confirm('Anda yaking menghapus data?')" title="HAPUS"><i class="fa fa-trash"></i></a>
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