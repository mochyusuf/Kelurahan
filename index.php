<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>Kelurahan Purwawinangun</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/w3.css">
  <link rel="stylesheet" type="text/css" media="all" href="css/style.css" />
  <link rel="icon" href="image/icon.png">
  <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
</head>

<body class="w3-pale-blue" style="padding:70px 0px 50px 0px">
  <?php
  include "./asset/config.php";
  ?>

  <div id="repeat_head"></div>

  <div class="container">
    <div class="jumbotron w3-theme-l5">

      <div class="row">
        <div class="col-sm-3">
          <img  src="image/logo.png" width="120px" height="128px"/>
        </div>
        <div class="col-sm-9">
          <div class="kelurahan">Kelurahan Purwawinangun</div>
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
    </div>
  </div>

  <div class="container w3-border-bottom w3-border-blue">
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid w3-light-blue">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
          <div class="navbar-brand w3-grey"> <font color="white">Purwawinangun</font> </div>
        </div>

        <div class="collapse navbar-collapse w3-opacity-min" id="topFixedNavbar1">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="asset/home.php?halaman=berita">Berita</a></li>
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profil<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="asset/home.php?halaman=profil|visimisi">VISI MISI</a></li>
                <li><a href="asset/home.php?halaman=profil|sejarah">Sejarah</a></li>
                <li><a href="asset/home.php?halaman=profil|singkat">Profil Singkat</a></li>
                <li><a href="asset/home.php?halaman=profil|struktur">Struktur</a></li>
              </ul>
            </li>
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Potensi<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="asset/home.php?halaman=potensi|sda">SDA</a></li>
                <li><a href="asset/home.php?halaman=potensi|sdm">SDM</a></li>
                <li><a href="asset/home.php?halaman=potensi|sarana">Sarana</a></li>
              </ul>
            </li>
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kelembagaan<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="asset/home.php?halaman=kelembagaan|karangtaruna">Karang Taruna</a></li>
                <li><a href="asset/home.php?halaman=kelembagaan|lpm">LPM</a></li>
                <li><a href="asset/home.php?halaman=kelembagaan|pkk">PKK</a></li>
              </ul>
            </li>
            <li><a href="asset/home.php?halaman=galeri">Galeri</a></li>
            <li><a href="asset/home.php?halaman=kontak">Kritik & Saran</a></li>
          </ul>
          <form action="asset/home.php?halaman=pencarian" class="navbar-form navbar-right" role="search" method="post">
            <div class="form-group">
              <input type="text" name="kata" class="form-control" placeholder="Cari" required>
            </div>
            <input name="cari" type="submit" class="btn btn-default" value="Cari">
          </form>
        </div>

      </div>

    </nav>
  </div>
  <script src="js/jquery-1.11.3.min.js"></script>

  <div style="height:10px;"></div>

  <div class="container">
    <?PHP
    $query=mysql_query("select * from galery where banner = 'Y'");
    echo "<div id='carousel1' class='carousel slide  w3-topbar w3-bottombar w3-rightbar w3-leftbar w3-border-indigo' data-ride='carousel'>
    <ol class='carousel-indicators'>";
    $j = 0;
    $num=mysql_num_rows($query);
    for ($j=0; $j < $num ; $j++) {
      if ($j == 0) {
        echo "<li data-target='#carousel1' data-slide-to=$j class='active'></li>";
      }
      else{
        echo "<li data-target='#carousel1' data-slide-to=$j></li>";
      }
    }
    echo "</ol>";
    echo "<div class='carousel-inner' role='listbox'>";
    $i = 0;
    while($img=mysql_fetch_array($query)) {
      if ($i == 0) {
        echo "<div class='item active'>";
      }
      else{
        echo "<div class='item'>";
      }
      echo '<img src="data:image/jpeg;base64,'.base64_encode( $img['file'] ).'"   height="30%w" width="100%" class="center-block" alt="Placeholder image"/>';
      echo "</div>";
      $i = $i + 1;
    }
    echo "</div>";
    ?>
    <br />
  </div>


    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Berita</h3>
      </div>
      <div class="panel-body">
        <div class="row">

          <div class="col-lg-8">
            <?php
            include "./asset/config.php";
            $brt=mysql_query("select * from berita  order by id_berita limit 2");
            while($data=mysql_fetch_array($brt)){
              $cut=substr($data['isi'], 0, 150);
              $cut_1=substr($data['judul'], 0, 50);
              echo "
              <div class='panel panel-info'>
              <div class='panel-heading'>";
              echo "
              <div>$cut_1</div>";
              echo "
              </div>
              <div class='panel-body'>
              <div class='row'>
              <div class='col-lg-4'>";
              echo '<img src="data:image/jpeg;base64,'.base64_encode( $data['gambar_berita'] ).'"  class="img-responsive" alt="Placeholder image"/>';
              echo "
              </div>
              <div class='col-lg-8'>
              <div>$cut ...</div>
              </div>
              </div>
              </div>
              <div class='panel-footer'>
              <a href=\"asset/home.php?halaman=beritadetail&&id_berita=$data[id_berita]\" class=\"h3\"><button type='button' class='btn btn-info'>Selengkapnya</button>
              </a>
              </div>
              </div>
              ";
            }
            ?>
          </div>

        </div>
        <div class="col-lg-4">
          <?php
          include "./asset/config.php";
          $brt=mysql_query("select * from berita order by id_berita limit 3 offset 2");
          while($data=mysql_fetch_array($brt)){
            $cut=substr($data['isi'], 0, 50);
            $cut_1=substr($data['judul'], 0, 50);
            echo "
            <div class='panel panel-info'>
            <div class='panel-heading'>";
            echo "
            <div>$cut_1</div>";
            echo "
            </div>
            <div class='panel-body'>
            <div class='row'>
            <div class='col-lg-4'>";
            echo '<img src="data:image/jpeg;base64,'.base64_encode( $data['gambar_berita'] ).'"  class="img-responsive" alt="Placeholder image"/>';
            echo "
            </div>
            <div class='col-lg-8'>
            <div>$cut ...</div>
            </div>
            </div>
            </div>
            <div class='panel-footer'>
            <a href=\"asset/home.php?halaman=beritadetail&&id_berita=$data[id_berita]\" class=\"h3\"><button type='button' class='btn btn-info'>Selengkapnya</button>
            </a>
            </div>
            </div>
            ";
          }
          ?>
        </div>
      </div>
      <div class="panel-footer">
        <a href="asset/home.php?halaman=berita"><button type="button" class="btn btn-info">Berita Lainnya</button>
        </a>
      </div>
    </div>


</div>

<div class="container w3-border w3-border-red">
  <div class="row">
    <div class="col-lg-12">
      <h1>Peta Kelurahan Purwawinangun</h1>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14418.008715803542!2d108.4727642149253!3d-6.972525669913245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f1683dd9a2bf7%3A0x96417421487adb6f!2sPurwawinangun%2C+Kuningan+Sub-District%2C+Kuningan+Regency%2C+West+Java!5e1!3m2!1sen!2sid!4v1476190183236" width="100%" height="280px" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>
</div>

<center>
  <h2>
    Jalan Pramuka Nomor. 07 Kelurahan Purwawinangun Kecamatan Kuningan
  </h2>
</center>

</div>


<nav class="navbar navbar-default navbar-fixed-bottom">
  <div class="container-fluid">

    <div class="navbar-header navbar-brand">KP Kelompok 2 UNIKU 2016</div>

    <div class="collapse navbar-collapse" id="bottomFixedNavbar1">
    </div>

  </div>
</nav>

<script src="js/bootstrap.js"></script>
</body>
</html>
