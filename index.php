<?php include("koneksi.php"); ?>
<html>
<header>
	<title>Data Barang</title>
</header>
<body>
	<link rel="stylesheet" href="styleindex.css">
	<div class="content1">
		<div class="session">
			<?php
				session_start();
				echo "Nama Lengkap : ".$_SESSION['nama'];
			 ?>
			 <a href="logout.php">Logout</a>
		</div>
<div class="head">
	<h1>Cats Are Cute</h1>
	<h4>My Adorable Cats</h4>
	<h6>kkiruk studio</h6>
</div>
<nav>
	<ul>
		<li><a href="index.php">Data Barang</a></li>
		<li><a href="indexs.php">Data Supplier</a></li>
	</ul>
</nav>
<div class="lembar1">
<br>
<h4>Data Barang</h4>
<a href="tambah.php">Tambah Data</a>
<table border="1">
	<tr>
		<th>Nomor</th>
		<th>Kode</th>
		<th>Nama Barang</th>
		<th>Jumlah</th>
		<th>Harga</th>
		<th>Aksi</th>
	</tr>
	<?php
	$data=$cn->query("SELECT * FROM barang");
	$no=1;
	while ($data2=$data->fetch_assoc()) {
		?>
		<tr>
			<td><?php echo $no; ?></td>
			<td> <?php echo $data2["kode"]; ?></td>
			<td> <?php echo $data2["nama_barang"]; ?></td>
			<td> <?php echo $data2["jumlah"]; ?></td>
			<td> <?php echo $data2["harga"]; ?></td>
			<td><a href="edit.php?kode=<?php  echo $data2["kode"]; ?>">Edit</a> <a href="hapus.php?kode=<?php  echo $data2["kode"]; ?>">Hapus</a></td>
		</tr>
		<?php
		$no++;
	}
		?>
</table>
</div>
</div>
</body>
</html>
