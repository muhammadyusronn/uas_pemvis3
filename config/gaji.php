<?php
include 'function_proses.php';
$nama_tabel = 'gaji';

if (isset($_POST['submit'])) {
    $bulan = $_POST['periodebulan'] + 1;
    $sql = "INSERT INTO $nama_tabel (`nip_pegawai`, `tanggalgajian`, `periodebulan`, `periodetahun`, `totalgaji`, `potongan`) VALUES ('$_POST[nip_pegawai]','$_POST[tanggalgajian]','$bulan','$_POST[periodetahun]','$_POST[totalgaji]','$_POST[potongan]')";
    // echo $sql;
    // die();
    $pesan = "Gaji";
    $sks = "../gaji-data.php";
    $ggl = "../gaji-form.php";
    tambahdata($sql, $pesan, $sks, $ggl);
}

// if (isset($_GET['del'])) {
//     $sql = "DELETE from $nama_tabel where nip='$_GET[id]'";
//     $pesan = "Pegawai";
//     $sks = "../pegawai-data.php";
//     $ggl = "../pegawai-data.php";
//     hapusdata($sql, $pesan, $sks, $ggl);
// }
