<?php

include 'koneksi.php';

$id_luas_tanah = $_GET['id'];

$hapus = mysqli_query($koneksi, "delete from luas_tanah where id_luas_tanah = '$id_luas_tanah'");

if ($hapus) {
    header('location:luas_tanah.php?pesan=berhasil');
} else {
    header('location:luas_tanah.php?pesan=gagal');
}
