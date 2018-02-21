<?php
include "../../asset/config.php";
if (isset($_POST['save']) && $_FILES['image']['size'] <= $maxsize){
  //$fileName = $_FILES['gambar']['name'];
  $image   = addslashes(file_get_contents($_FILES['image']['tmp_name']));
  $image_name = addslashes($_FILES['image']['name']);
  $image_size = getimagesize($_FILES['image']['tmp_name']);
  // Simpan ke Database
  $sql = "UPDATE galery SET
  file='$image',
  banner='$_POST[RadioGroup1]'
  WHERE id_galery=$_POST[id]
  ";
  mysql_query($sql);
  // Simpan di Folder Gambar
  echo"<script>window.alert('Galeri berhasil disunting');history.back();</script>";
  echo"<script>document.location=?laman=galery;</script>";
}
else {
  echo "<script>window.alert('Gambar terlalu besar');history.back();</script>";
    echo"<script>document.location=?laman=artikel;</script>";
}

?>
