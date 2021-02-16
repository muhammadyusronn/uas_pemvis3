<?php
include 'function_proses.php';
$nama_tabel = 'pegawai';

if (isset($_POST['submit'])) {
    $sql = "INSERT INTO $nama_tabel (`nip`, `nama`, `kontak`, `rekening`) VALUES ('$_POST[nip]','$_POST[nama]','$_POST[kontak]','$_POST[rekening]')";
    $pesan = "Pegawai";
    $sks = "../pegawai-data.php";
    $ggl = "../pegawai-form.php";
    tambahdata($sql, $pesan, $sks, $ggl);
}

if (isset($_GET['del'])) {
    $sql = "DELETE from $nama_tabel where nip='$_GET[id]'";
    $pesan = "Pegawai";
    $sks = "../pegawai-data.php";
    $ggl = "../pegawai-data.php";
    hapusdata($sql, $pesan, $sks, $ggl);
}
