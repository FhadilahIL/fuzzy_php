<?php

include 'koneksi.php';

$id_luas_tanah = $_POST['id_luas_tanah'];
$jenis_luas_tanah = $_POST['jenis_luas_tanah'];
$ukuran_luas_tanah = $_POST['ukuran_tanah'];
$tahun = $_POST['tahun'];

$tambah = mysqli_query($koneksi, "insert into luas_tanah values ('','$jenis_luas_tanah','$ukuran_luas_tanah','$tahun')");

if ($tambah) {
    header('location:luas_tanah.php?pesan=berhasil');
} else {
    header('location:luas_tanah.php?pesan=gagal');
}
