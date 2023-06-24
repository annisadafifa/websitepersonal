<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<style>
body {
			background-image: url("wallpaperproduk.jpg");
			background-repeat: no-repeat;
			background-size: cover;
		}
	</style>
<body>
 
	<h2>PESANAN</h2>
	<br/>
	<a href="produk(crud).php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA PESANAN</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>Nama Produk</td>
				<td><input type="text" name="namaproduk"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="number" name="Harga"></td>
			</tr>
			<tr>
				<td>Alamat Pengirim</td>
				<td><input type="text" name="alamatpengirim"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>