<?php 
// koneksi database
include 'koneksiadmin.php';
 
// menangkap data yang di kirim dari form
$namaproduk = $_POST['namaproduk'];
$Harga = $_POST['Harga'];
$alamatpengirim = $_POST['alamatpengirim'];
 
// menginput data ke database
mysqli_query($koneksiadmin,"insert into produk values('','$namaproduk','$Harga','$alamatpengirim')");
 
// mengalihkan halaman kembali ke produk(crud).php
header("location:produk(crud).php");
 
?>