<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Kelurahan Purwawinangun</title>
<!--- css style --->
<link href="../css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" media="all" href="../css/style.css" />
<!-- slider -->
<!--favicon-->
<link rel="icon" href="../image/icon.png">
<!-- colorbox -->
<!--- js files --->
<script type="text/javascript" src="../js/bootstrap.js"></script>



</head>

<body bgcolor="rgba(94, 124, 249, 0.44)">
  <script src="../js/bootstrap.js"></script>
  <script src="../js/jquery-1.11.3.min.js"></script>

  <?php
  include "config.php";
  ?>

<!------------------------------------------------------header--------------------------------------------------->

<div class="container">
  <div class="jumbotron w3-theme-l5">

    <div class="row">
      <div class="col-sm-3">
        <img  src="../image/logo.png" width="120px" height="128px"/>
      </div>
      <div class="col-sm-9">
        <div class="sekolah">Kelurahan Purwawinangun</div>
        <div class="slogan">Kecamatan Kuningan</div>
        <div id="bg_tanggal" class="slogan">
          <?php
          /* script menentukan hari */
          $array_hr= array(1=>"Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu");
          $hr = $array_hr[date('N')];
          /* script menentukan tanggal */
          $tgl= date('j');
          /* script menentukan bulan */
          $array_bln = array(1=>"Januari","Februari","Maret", "April", "Mei","Juni","Juli","Agustus","September","Oktober", "November",
          "Desember");
          $bln = $array_bln[date('n')];
          /* script menentukan tahun */
          $thn = date('Y');
          /* script perintah keluaran*/
          echo $hr . ", " . $tgl . " " . $bln . " " . $thn . " ";

          ?>
        </div>
      </div>
    </div>



    <!---- tanggalan ------>

  </div>
</div>


			<!-----navigasi area------->
      <div class="container">
          <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid w3-pale-red">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <div class="navbar-brand w3-grey"> <font color="white">Purwawinangun</font></div>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse w3-opacity-min" id="topFixedNavbar1">
                <ul class="nav navbar-nav">
                  <li><a href="..">Home</a></li>
                  <li><a href="home.php?halaman=berita">Berita</a></li>
                  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profil<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="home.php?halaman=profil|visimisi">VISI MISI</a></li>
                      <li><a href="home.php?halaman=profil|sejarah">Sejarah</a></li>
                      <li><a href="home.php?halaman=profil|singkat">Profil Singkat</a></li>
                      <li><a href="home.php?halaman=profil|struktur">Struktur</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Potensi<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="home.php?halaman=potensi|sda">SDA</a></li>
                      <li><a href="home.php?halaman=potensi|sdm">SDM</a></li>
                      <li><a href="home.php?halaman=potensi|sarana">Sarana</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kelembagaan<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="home.php?halaman=kelembagaan|karangtaruna">Karang Taruna</a></li>
                      <li><a href="home.php?halaman=kelembagaan|lpm">LPM</a></li>
                      <li><a href="home.php?halaman=kelembagaan|pkk">PKK</a></li>
                    </ul>
                  </li>
                  <li><a href="home.php?halaman=galeri">Galeri</a></li>
                  <li><a href="home.php?halaman=kontak">Kritik & Saran</a></li>
                </ul>

                <form action="home.php?halaman=pencarian" class="navbar-form navbar-right" role="search" method="post">
                  <div class="form-group">
                    <input type="text" name="kata" class="form-control" placeholder="Cari" required>
                  </div>
                  <input name="cari" type="submit" class="btn btn-default" value="Cari">
                </form>
              </div>
              <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
          </nav>
        </div>
      <script src="../js/jquery-1.11.3.min.js"></script>

<div id="repeat_nav"></div>
<div style="height:10px;"></div>
<!---------------------------------------------slider area ----------------------------------------------------------->
