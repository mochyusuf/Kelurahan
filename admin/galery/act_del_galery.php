<?PHP
include "../../admin/config.php";
$query=mysql_query("DELETE FROM $_GET[table] WHERE id_galery='$_GET[id]'");
if($query){
  echo"<script>window.alert('Galeri berhasil dihapus');history.back();</script>";
}
?>
