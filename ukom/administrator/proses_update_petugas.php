<?php
include '../koneksi.php';

$petugas_id = $_POST['petugas_id'];
$nama_petugas = $_POST['nama_petugas'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$level = $_POST['level'];

if (!$password) {
    mysqli_query($koneksi,"update petugas set nama_petugas='$nama_petugas', username='$username', level='$level' where petugas_id='$petugas_id'");
} else {
    mysqli_query($koneksi,"update petugas set nama_petugas='$nama_petugas', username='$username', password='$password', level='$level' where petugas_id='$petugas_id'");
}

header("location:data_pengguna.php?pesan=update");
?>