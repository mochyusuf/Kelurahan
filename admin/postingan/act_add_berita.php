<?php
include "../../admin/config.php";
if (isset($_POST['save']) && $_FILES['image']['size'] <= $maxsize){
  $image   = addslashes(file_get_contents($_FILES['image']['tmp_name']));
  $image_name = addslashes($_FILES['image']['name']);
  $image_size = getimagesize($_FILES['image']['tmp_name']);
  $sql = "insert into berita (id_berita, date, judul, gambar_berita, isi, id_admin)
  values ('','".$_POST['tgl']."','".$_POST['jud']."','$image','".$_POST['isi']."','".$_POST['penulis']."')";
  mysql_query($sql);
  echo"<script>window.alert('Berita berhasil diposting');history.back();</script>";
  echo"<script>document.location=?laman=berita;</script>";
}
else {
  echo "<script>window.alert('Gambar terlalu besar');history.back();</script>";
    echo"<script>document.location=?laman=artikel;</script>";
}
?>
