<?php
include "../../admin/config.php";
 if (isset($_POST['save'])){
		$query="UPDATE admin SET
          nama_admin='$_POST[nama]',
					username='$_POST[user]',
					password='$_POST[pass]',
					email='$_POST[email]'
					WHERE id_admin=$_POST[id]
					";
		mysql_query($query);
		echo"<script>window.alert('Admin berhasil disunting');history.back();</script>";
		echo"<script>document.location=?laman=admin;</script>";
	}
?>
