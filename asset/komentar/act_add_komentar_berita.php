<?php
include "../../asset/config.php";
if (isset($_POST['save'])){
  // Simpan ke Database
  $sql = "insert into komentar_berita (id_berita, id_komentar_berita, nama_pengunjung, email_pengunjung, komentar)
  values ('$_POST[id_berita]',
  '',
  '".$_POST['nama']."',
  '".$_POST['email']."',
  '".$_POST['komentar']."')";
  //echo "$sql";
  mysql_query($sql);
  // Simpan di Folder Gambar
  //move_uploaded_file($_FILES['gambar']['tmp_name'], "../image/banner/".$_FILES['gambar']['name']);
  echo"<script>window.alert('Komentar Berhasil ditambah!!!');history.back();</script>";
  echo"<script>document.location=?halaman=beritadetail&id_berita='$_POST[id_berita]';</script>";
}
?>
