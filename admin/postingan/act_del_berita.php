<?PHP
include"../../admin/config.php";
$query=mysql_query("DELETE FROM berita WHERE id_berita='$_GET[id]'");
if($query){
echo"<script>window.alert(Berita berhasil dihapus');history.back();</script>";
}
?>
