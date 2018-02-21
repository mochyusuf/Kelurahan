<?php
error_reporting( 0);
switch($_GET['laman']){
	default:
	echo "
	<h1>Selamat Datang di Halaman Admin</h1>
	<h3>Untuk memulai klik menu di samping kiri</h3>";
	?>

	<?php break; ?>


	<?php case "profil|visimisi";?>
	<?php include 'data/visimisi.php'; ?>
	<?php break; ?>


	<?php case "profil|sejarah";?>
	<?php include 'data/sejarah.php'; ?>
	<?php break; ?>


	<?php case "profil|singkat";?>
	<?php include 'data/singkat.php'; ?>
	<?php break; ?>


	<?php case "profil|struktur";?>
	<?php include 'data/struktur.php'; ?>
	<?php break; ?>


	<?php case "potensi|sda";?>
	<?php include 'data/sda.php'; ?>
	<?php break; ?>


	<?php case "potensi|sdm";?>
	<?php include 'data/sdm.php'; ?>
	<?php break; ?>


	<?php case "potensi|sarana";?>
	<?php include 'data/sarana.php'; ?>
	<?php break; ?>


	<?php case "kelembagaan|karangtaruna";?>
	<?php include 'data/karangtaruna.php'; ?>
	<?php break; ?>


	<?php case "kelembagaan|lpm";?>
	<?php include 'data/lpm.php'; ?>
	<?php break; ?>


	<?php case "kelembagaan|pkk";?>
	<?php include 'data/pkk.php'; ?>
	<?php break; ?>


	<?php case "galery";?>
	<?php include 'galery/galery.php'; ?>
	<?php break; ?>


	<?php case "edit-galery";?>
	<?php include 'galery/edit_galery.php'; ?>
	<?php break; ?>


	<?php case "add-galery";?>
	<?php include "galery/add_galery.php" ?>
	<?php break; ?>


	<?php case "berita";?>
	<?php include 'postingan/berita.php'; ?>
	<?php break; ?>


	<?php case "add-berita";?>
	<?php include 'postingan/add-berita.php'; ?>
	<?php break; ?>


	<?php case "edit-berita";?>
	<?php include 'postingan/edit-berita.php'; ?>
	<?php break; ?>


	<?php case "komentar|berita";?>
	<?php include 'komentar/komentar-berita.php'; ?>
	<?php break; ?>


	<?php case "admin";?>
	<?php include "user/user.php" ?>
	<?php break; ?>



	<?php case "edit-user";?>
	<?php include 'user/edit-user.php'; ?>
	<?php break; ?>



	<?php case "add-user";?>
	<?php include 'user/add-user.php'; ?>
	<?php break; ?>


	<?php case "kontak";?>
	<?php include 'kontak/kontak.php' ?>
	<?php break; ?>


	<?php case "bantuan";?>
	<?php include 'bantuan.php' ?>
	<?php break; ?>



	<?php case "about";?>
	<?php include 'about.php'; ?>
	<?php break; ?>

	<?php } ?>
