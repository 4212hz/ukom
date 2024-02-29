<?php
include '../koneksi.php';

$petugas_id = $_POST['petugas_id'];

mysqli_query($koneksi,"delete from petugas where petugas_id='$petugas_id'");

header("location:data_pengguna.php?pesan=hapus");
?>