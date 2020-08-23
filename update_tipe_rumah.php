<?php

include 'koneksi.php';

$id_tipe_rumah = $_POST['id_tipe_rumah'];
$jenis_tipe_rumah = $_POST['jenis_tipe_rumah'];
$luas_rumah = $_POST['luas_rumah'];

$update = mysqli_query($koneksi, "update tipe_rumah set jenis_tiperumah = '$jenis_tipe_rumah', ukuran_tipe = '$luas_rumah' where id_tipe_rumah = '$id_tipe_rumah'");

if ($update) {
    header('location:tipe_rumah.php?pesan=berhasil');
} else {
    header('location:tipe_rumah.php?pesan=gagal');
}
