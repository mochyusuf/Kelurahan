<?php
session_start();
include "../../admin/config.php";
if (isset($_POST['save']) && $_FILES['image']['size'] <= $maxsize){
  //$fileName = $_FILES['gambar']['name'];
  $image   = addslashes(file_get_contents($_FILES['image']['tmp_name']));
  $image_name = addslashes($_FILES['image']['name']);
  $image_size = getimagesize($_FILES['image']['tmp_name']);
  // Simpan ke Database

  $id_admin1 = $_SESSION['id_admin'];
  $query="UPDATE data_kelurahan SET
  gambar_data='$image',
  data='$_POST[data]'
  WHERE id_data=$_POST[id]
  ";
  mysql_query($query);
  // Simpan di Folder Gambar
  //move_uploaded_file($_FILES['gambar']['tmp_name'], "../image/berita/".$_FILES['gambar']['name']);
  echo"<script>window.alert('Data Kelurahan berhasil disunting');history.back();</script>";
  echo"<script>document.location=?laman=berita;</script>";
}
else {
  echo "<script>window.alert('Gambar terlalu besar');history.back();</script>";
  echo"<script>document.location=?laman=artikel;</script>";
}
?>
