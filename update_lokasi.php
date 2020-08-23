<?php

include 'koneksi.php';

$id_lokasi = $_POST['id_lokasi'];
$nama_rumah = $_POST['nama_rumah'];
$jenis_lokasi = $_POST['jenis_lokasi'];
$ukuran_lokasi = $_POST['ukuran_lokasi'];

$update = mysqli_query($koneksi, "update lokasi set nama_rumah = '$nama_rumah', jenis_lokasi = '$jenis_lokasi', ukuran_lokasi = '$ukuran_lokasi' where id_lokasi = '$id_lokasi'");

if ($update) {
    header('location:lokasi.php?pesan=berhasil');
} else {
    header('location:lokasi.php?pesan=gagal');
}
