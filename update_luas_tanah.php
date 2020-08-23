<?php

include 'koneksi.php';

$id_luas_tanah = $_POST['id_luas_tanah'];
$jenis_luas_tanah = $_POST['jenis_luas_tanah'];
$ukuran_tanah = $_POST['ukuran_tanah'];
$tahun = $_POST['tahun'];

$update = mysqli_query($koneksi, "update luas_tanah set jenis_luas_tanah = '$jenis_luas_tanah', ukuran_tanah = '$ukuran_tanah', tahun = '$tahun' where id_luas_tanah = '$id_luas_tanah'");

if ($update) {
    header('location:luas_tanah.php?pesan=berhasil');
} else {
    header('location:luas_tanah.php?pesan=gagal');
}
