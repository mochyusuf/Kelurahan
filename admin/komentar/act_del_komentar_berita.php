<?PHP
include"../../admin/config.php";
$query=mysql_query("DELETE FROM komentar_berita WHERE id_komentar_berita='$_GET[id]'");
if($query){
  echo"<script>window.alert('Penghapusan Komentar Berhasil');history.back();</script>";
}
?>
