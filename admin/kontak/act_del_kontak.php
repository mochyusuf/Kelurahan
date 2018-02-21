<?PHP
include "../../admin/config.php";
$query=mysql_query("DELETE FROM $_GET[table] WHERE id_kritik='$_GET[id]'");
if($query){
  echo"<script>window.alert('Penghapusan Data Berhasil');history.back();</script>";
}
?>
