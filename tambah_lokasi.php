<?php

include 'koneksi.php';

$nama_rumah = $_POST['nama_rumah'];
$jenis_lokasi = $_POST['jenis_lokasi'];
$ukuran_lokasi = $_POST['ukuran_lokasi'];

$tambah = mysqli_query($koneksi, "insert into lokasi values ('','$nama_rumah','$jenis_lokasi','$ukuran_lokasi')");

if ($tambah) {
    header('location:lokasi.php?pesan=berhasil');
} else {
    header('location:lokasi.php?pesan=gagal');
}
