<?php

include 'koneksi.php';

$id_lokasi = $_GET['id'];

$hapus = mysqli_query($koneksi, "delete from lokasi where id_lokasi = '$id_lokasi'");

if ($hapus) {
    header('location:lokasi.php?pesan=berhasil');
} else {
    header('location:lokasi.php?pesan=gagal');
}
