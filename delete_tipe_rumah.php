<?php

include 'koneksi.php';

$id_tipe_rumah = $_GET['id'];

$hapus = mysqli_query($koneksi, "delete from tipe_rumah where id_tipe_rumah = '$id_tipe_rumah'");

if ($hapus) {
    header('location:tipe_rumah.php?pesan=berhasil');
} else {
    header('location:tipe_rumah.php?pesan=gagal');
}
