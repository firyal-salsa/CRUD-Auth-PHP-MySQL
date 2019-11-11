<?php
require('koneksi.php');
$user=$_POST['username'];
$pass=$_POST['pass'];

$hasil=$cn->query("SELECT * FROM users WHERE  username='$user' AND password='$pass'");

if($hasil->num_rows>=1){
  session_start();
  $data=$hasil->fetch_row();
  $_SESSION['nama']=$data[1];
  $_SESSION['status']=1;
  header('location:index.php');
}else{
  echo "username dan password salah";
}
 ?>
