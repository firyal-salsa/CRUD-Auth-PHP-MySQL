<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Barang</title>
</head>
<body>
	<link rel="stylesheet" href="styleedit.css">
<?php
$kode =$_GET['kode'];
include('koneksi.php');
$dataBarang=$cn->query("SELECT * FROM barang WHERE kode='$kode'");
$row=$dataBarang->fetch_row();
 ?>
<form action="aksiEdit.php" method="post">
	<fieldset>
		<legend>Edit Data</legend>
	<table>
		<tr>
			<td><label for="kode">Kode Barang</label></td>
			<td>:</td>
			<td><input type="text" name="kode" id="kode" value="<?php echo($kode);?>"</td>
		</tr>
		<tr>
			<td><label for="namaBarang">Nama Barang</label></td>
			<td>:</td>
			<td><input type="text" name="namaBarang" id="namaBarang" value="<?php echo($row[1]);?>"</td>
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
</fieldset>
</form>
</body>
</html>
