<?php 
// koneksi database
include 'koneksiadmin.php';
 
// menangkap data yang di kirim dari form
$no = $_POST['no'];
$namaproduk = $_POST['namaproduk'];
$Harga = $_POST['Harga'];
$alamatpengirim = $_POST['alamatpengirim'];
 
// update data ke database
mysqli_query($koneksiadmin,"update produk set namaproduk='$namaproduk', harga='$Harga', alamatpengirim='$alamatpengirim' where no='$no'");
 
// mengalihkan halaman kembali ke produk(crud).php
header("location:produk(crud).php");
 
?>