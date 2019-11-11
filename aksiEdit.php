<?php
include_once('koneksi.php');
$kode=$_POST['kode'];
$namaBarang=$_POST['namaBarang'];
$harga=$_POST['harga'];
$jumlah=$_POST['jumlah'];
$hasil=$cn->query("update barang set nama_barang='$namaBarang',jumlah='$jumlah',harga='$harga' WHERE kode='$kode'");
if($hasil==1){
		header('location:index.php');
}
 ?>
