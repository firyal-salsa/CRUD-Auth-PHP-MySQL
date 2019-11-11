<?php
$kode=$_GET['kode'];
include_once('koneksi.php');
$hasil=$cn->query("delete from barang where kode='$kode'");
header('location:index.php');
 ?>
