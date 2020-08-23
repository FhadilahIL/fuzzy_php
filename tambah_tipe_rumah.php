<?php

include 'koneksi.php';

$jenis_tipe_rumah = $_POST['jenis_tipe_rumah'];
$luas_rumah = $_POST['luas_rumah'];

$tambah = mysqli_query($koneksi, "insert into tipe_rumah values ('','$jenis_tipe_rumah','$luas_rumah')");

if ($tambah) {
    header('location:tipe_rumah.php?pesan=berhasil');
} else {
    header('location:tipe_rumah.php?pesan=gagal');
}
