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
 
	<h2>PRODUK</h2>
	<br/>
	<a href="produk(crud).php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA PRODUK</h3>
 
	<?php
	include 'koneksiadmin.php';
	$no = $_GET['no'];
	$data = mysqli_query($koneksiadmin,"select * from produk where no='$no'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>namaproduk</td>
					<td>
						<input type="hidden" name="no" value="<?php echo $d['no']; ?>">
						<input type="text" name="namaproduk" value="<?php echo $d['namaproduk']; ?>">
					</td>
				</tr>
				<tr>
					<td>Harga</td>
					<td><input type="number" name="Harga" value="<?php echo $d['Harga']; ?>"></td>
				</tr>
				<tr>
					<td>AlamatPengirim</td>
					<td><input type="text" name="alamatpengirim" value="<?php echo $d['alamatpengirim']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>