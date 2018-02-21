<?php
error_reporting(0);
switch($_GET['halaman']){
default:
?>
<!-------------------------------------------------------HALAMAN TIDAK DITEMUKAN--------------------------------->
<link rel="stylesheet" href="../css/style.css" />
<br />
<div style="height:300px; width:1024px;">
    <center>
      <img src=../image/404.png />
    </center>
    <div id="empty">
      Halaman Tidak Ditemukan
    </div></div>
	<div id="empty"></div>
    <div id="pembatas"></div>
</div>
<?php break; ?>

<!------------------------------------------------------------------pencarian ----------------------------------------->
<?php case"pencarian";?>
<?php include 'pencarian/bruteforce.php'; ?>
<?php break; ?>

<!------------------------------------------------------------------berita ----------------------------------------->
<?php case"berita";?>
<?php include 'berita.php'; ?>
<?php break; ?>

<!------------------------------------------------- berita detail ------------------------------------------------------------>
<?php case"beritadetail";?>
		<?php include 'beritadetail.php'; ?>
<?php break; ?>

<!------------------------------------------------------------------visi misi ----------------------------------------->
<?php case"profil|visimisi";?>
		<?php include 'visimisi.php'; ?>
<?php break; ?>

<!------------------------------------------------------------------sejarah ----------------------------------------->
<?php case"profil|sejarah";?>
		<?php include 'sejarah.php'; ?>
<?php break; ?>

<!------------------------------------------------------------------singkat ----------------------------------------->
<?php case"profil|singkat";?>
		<?php include 'singkat.php'; ?>
<?php break; ?>

<!------------------------------------------------------------------struktur ----------------------------------------->
<?php case"profil|struktur";?>
		<?php include 'struktur.php'; ?>
<?php break; ?>

<!------------------------------------------------------------------sda ----------------------------------------->
<?php case"potensi|sda";?>
		<?php include 'sda.php'; ?>
<?php break; ?>
<!------------------------------------------------------------------sdm ----------------------------------------->
<?php case"potensi|sdm";?>
		<?php include 'sdm.php'; ?>
<?php break; ?>

<!------------------------------------------------------------------sarana ----------------------------------------->
<?php case"potensi|sarana";?>
		<?php include 'sarana.php'; ?>
<?php break; ?>

<!------------------------------------------------------------------karang taruna ----------------------------------------->
<?php case"kelembagaan|karangtaruna";?>
		<?php include 'karangtaruna.php'; ?>
<?php break; ?>

<!------------------------------------------------------------------lpm ----------------------------------------->
<?php case"kelembagaan|lpm";?>
		<?php include 'lpm.php'; ?>
<?php break; ?>

<!------------------------------------------------------------------pkk ----------------------------------------->
<?php case"kelembagaan|pkk";?>
		<?php include 'pkk.php'; ?>
<?php break; ?>

<!------------------------------------------------------------case galeri ------------------->

<?php case"galeri";?>
<?php include 'galeri.php'; ?>
<?php break;?>

<!------------------------------------------------------------case kontak ------------------->
<?php case"kontak";?>

	<?php include 'kontak.php'; ?>

<?php break; ?>

<?php } ?>
