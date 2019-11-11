<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Barang</title>
</head>
<body>
<h3>Tambah Barang</h3>
<?php
include('koneksi.php');
$kode =$_GET['kode'];
$dataBarang=$cn->query("SELECT * FROM barang WHERE kode='$kode'");
$row=$dataBarang->fetch_row();
 ?>
 <form action="aksiTambah.php" method="post">
 	<table>
 		<tr>
 			<td><label for="kode">Kode Barang</label></td>
 			<td>:</td>
 			<td><input type="text" name="kode" id="kode" value="<?php echo($kode);?>"</td>
 		</tr>
 		<tr>
 			<td><label for="nama_barang">Nama Barang</label></td>
 			<td>:</td>
 			<td><input type="text" name="nama_barang" id="nama_barang" value="<?php echo($row[1]);?>"</td>
 		</tr>
 		<tr>
 			<td><label for="jumlah">Jumlah</label></td>
 			<td>:</td>
 			<td><input type="text" name="jumlah" id="jumlah" value="<?php echo($row[2]);?>"</td>
 		</tr>
 		<tr>
 			<td><label for="harga">Harga</label></td>
 			<td>:</td>
 			<td><input type="text" name="harga" id="harga" value="<?php echo($row[3]);?>"</td>
 		</tr>
 	</table>
 <button type="submit" name="submit">Update</button>
 <button type="button" name="submit" onclick="location.href='index.php'">Back</button>
 </form>
</body>
</html>
