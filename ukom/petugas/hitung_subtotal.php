<?php
include '../koneksi.php';

$stok = $_POST['stok'];
$produk_id = $_POST['produk_id'];
$jumlah_produk = $_POST['jumlah_produk'];
$harga = $_POST['harga'];
$detail_id = $_POST['detail_id'];
$pelanggan_id = $_POST['pelanggan_id'];
$subtotal = $jumlah_produk * $harga;
$stok_total = $srok - $jumlah_produk;

mysqli_query($koneksi,"update detailpenjualan set subtotal='$subtotal', jumlah_produk='$jumlah_produk' where detail_id='$detail_id'");
mysqli_query($koneksi,"update produk set stok='$stok' where produk_id='$produk_id'");

header("location:detail_pembelian.php?pelanggan_id=$pelanggan_id");
?>