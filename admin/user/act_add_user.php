<?php
include "../../admin/config.php";
 if (isset($_POST['save'])){

		// Simpan ke Database
		$sql = "insert into admin (id_admin, username, password,nama_admin, email) values (
		'',
		'".$_POST['user']."',
    '".$_POST['nama']."',
		'".$_POST['pass']."',
		'".$_POST['email']."'
		)";
		mysql_query($sql);
		echo"<script>window.alert('Admin berhasil ditambah!!!');history.back();</script>";
		echo"<script>document.location=?laman=admin;</script>";
	}
?>
