<?PHP
include "../../admin/config.php";
$query=mysql_query("DELETE FROM $_GET[table] WHERE id_admin='$_GET[id]'");
if($query){
echo"<script>window.alert('Admin berhasil dihapus');history.back();</script>";
}
?>
