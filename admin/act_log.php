<?php
session_start();
include 'config.php';
$username=$_POST['username'];
$password=$_POST['password'];

$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

$query=mysql_query("select id_admin from admin where username='$username' and password='$password'");
$id_admin = "";
while(mysql_fetch_row($query))
{
  $id_admin = $row['0'];
}
echo "$id_admin";

$num=mysql_num_rows($query);

if($num==1){
  $_SESSION['id_admin']=$query;
  header("location:admin.php"); // dan alihkan ke index.php
}else{ //jika tidak tampilkan pesan gagal login
  echo "<script> alert('Username atau Password Salah'); location = 'index.php'; </script>";
}
?>
