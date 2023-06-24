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
 
	<h2>DAFTAR PESANAN MAUNG SHOP</h2>
	<br/>
	<a href="tambah.php">+ TAMBAH PRODUK</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>no</th>
			<th>nama produk</th>
			<th>Harga</th>
			<th>alamat pengirim</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include 'koneksiadmin.php';
		$no = 1;
		$data = mysqli_query($koneksiadmin,"select * from produk");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['namaproduk']; ?></td>
				<td><?php echo $d['Harga']; ?></td>
				<td><?php echo $d['alamatpengirim']; ?></td>
				<td>
					<a href="edit.php?no=<?php echo $d['no']; ?>">EDIT</a>
					<a href="hapus.php?no=<?php echo $d['no']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>