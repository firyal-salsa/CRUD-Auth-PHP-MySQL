<?php
error_reporting(0);
$server		="localhost";
$user		="root";
$pass 		="";
$database	="latihanweb";

$cn=new mysqli($server,$user,$pass,$database);

if($cn->connect_error){
	echo "koneksi database error ".$cn->connect_error;
}
?>
