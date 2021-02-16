<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'uas_pemvis');
if (!$koneksi) {
    echo "Koneksi gagal, lur! :(";
    die();
}
