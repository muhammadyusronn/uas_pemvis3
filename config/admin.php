<?php
include 'function_proses.php';
$nama_tabel = 'user';

if (isset($_POST['submit'])) {
    $pass = md5($_POST['confirm_password1']);
    // print_r($_POST);
    $sql = "INSERT INTO $nama_tabel (`user_nama`, `user_username`, `user_password`, `user_role`, `user_kontak`) VALUES ('$_POST[firstname1]','$_POST[username1]','$pass','$_POST[user_role]','$_POST[kontak]')";
    // echo $sql;
    // die();
    $pesan = "User";
    $sks = "../admin-data.php";
    $ggl = "../admin-form.php";
    tambahdata($sql, $pesan, $sks, $ggl);
}

if (isset($_GET['del'])) {
    $sql = "DELETE from $nama_tabel where user_id='$_GET[id]'";
    $pesan = "User";
    $sks = "../admin-data.php";
    $ggl = "../admin-data.php";
    hapusdata($sql, $pesan, $sks, $ggl);
}

if (isset($_POST['update'])) {
    // echo "aa";
    // die();
    if (isset($_POST['cek_pass'])) {
        $sql = "UPDATE $nama_tabel SET `email`='$_POST[email]', `nama`='$_POST[nama]', `alamat`='$_POST[alamat]', `nomorhp`='$_POST[nomorhp]', `level`='$_POST[level]' where `email`='$_POST[email_lama]'";
    } else {
        $pass = md5($_POST['password']);
        $sql = "UPDATE $nama_tabel SET `email`='$_POST[email]', `nama`='$_POST[nama]', `alamat`='$_POST[alamat]', `nomorhp`='$_POST[nomorhp]',`password`='$pass', `level`='$_POST[level]' where `email`='$_POST[email_lama]'";
    }
    $pesan = "User";
    $sks = "../admin-data.php";
    $ggl = "../admin-data.php";
    editdata($sql, $pesan, $sks, $ggl);
}
