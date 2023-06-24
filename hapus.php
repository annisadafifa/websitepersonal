<?php 
// koneksi database
include 'koneksiadmin.php';
 
// menangkap data no yang di kirim dari url
$no = $_GET['no'];
 
 
// menghapus data dari database
mysqli_query($koneksiadmin,"delete from produk where no='$no'");
 
// mengalihkan halaman kembali ke produk(crud).php
header("location:produk(crud).php");
 
?>