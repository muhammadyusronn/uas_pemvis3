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
                    <form id="signupForm1" method="post" class="form-horizontal" action="config/admin.php">
                        <div class="form-group">
                            <label for="firstname1">Nama</label>
                            <input type="text" class="form-control" id="firstname1" name="firstname1" name="user_nama" placeholder="Nama" />
                        </div>
                        <div class="form-group">
                            <label for="firstname1">Kontak</label>
                            <input type="text" class="form-control" id="kontak" name="kontak" name="user_nama" placeholder="Nama" />
                        </div>
                        <div class="form-group">
                            <label for="username1">Username</label>
                            <input type="text" class="form-control" id="username1" name="username1" name="user_username" placeholder="Username" />
                        </div>
                        <div class="form-group">
                            <label for="password1">Password</label>
                            <input type="password" class="form-control" id="password1" name="password1" name="user_pass" placeholder="Password" />
                        </div>
                        <div class="form-group">
                            <label for="confirm_password1">Konfirmasi password</label>
                            <input type="password" class="form-control " id="confirm_password1" name="confirm_password1" name="user_password" placeholder="Konfirmasi password" />
                        </div>
                        <div class="form-group">
                            <label>Level</label>
                            <select class="form-control" name="user_role">
                                <option value="admin">Admin</option>
                                <option value="pimpinan">Pimpinan</option>
                            </select>
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