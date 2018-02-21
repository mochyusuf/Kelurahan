<?php
error_reporting(0);

include "../asset/config.php";

if (isset($_POST['cari'])){
  $kata = $_POST['kata'];
  $judul = array();

  $judul = AmbilBerita();

  $berita = array();
  $k = 0;
  for ($i=0; $i < count($judul); $i++) {
    $ketemu = Bruteforce(strtolower($kata) , strtolower($judul[$i][1]));
    if ($ketemu != 0) {
      $berita[$k] = $judul[$i][0];
      $k++;
    }
    //echo $ketemu;
  }

  TampilBerita($berita);
}

function AmbilBerita()
{
  $sql = "select * from berita order by id_berita desc";
  $result = mysql_query($sql);

  while ($data = mysql_fetch_array($result)) {
    $judul[] = array($data["id_berita"], $data["judul"], "-1");
  }
  return $judul;
}

function Bruteforce($pattern, $subject)
{
  $n = strlen($subject);
  $m = strlen($pattern);

  for ($i = 0; $i < $n; $i++) {
    $j = 0;
    while ($j < $m && $subject[$i+$j] == $pattern[$j]) {
      $j++;
    }
    if ($j >= $m)
    return $j;
  }
  return 0;
}

function TampilBerita($berita)
{
  echo "
  <div class='panel panel-default'>
  <div class='panel-heading'>
  <h3 class='panel-title'>Hasil Pencarian Berita</h3>
  </div>
  <div class='panel-body'>";

  include 'pagination1.php';
  include "config.php";
  $table='berita';
  $id_sql = " id_berita = ";
  $berita_Sql = array();
  //echo $id_berita_sql;
  $x = count($berita);
  for ($m=0; $m < $x; $m++) {
    $id_berita_sql = $id_sql.$berita[$m];
    if ($m < ($x - 1)) {
      $berita_Sql[$m] = $id_berita_sql." or ";
    }
    else {
      $berita_Sql[$m] = $id_berita_sql;
    }
  }

  $berita_sql_akhir = "";

  for ($o=0;  $o < count($berita_Sql) ; $o++)  {
    $berita_sql_akhir = $berita_sql_akhir.$berita_Sql[$o];
  }

  $sql = "select * from $table where $berita_sql_akhir
  order by id_berita desc ";
  $result = mysql_query($sql);

  $rpp = 5; //min per halaman
  $reload = "home.php?halaman=berita&pagination=true";

  $page = intval($_GET['page']);
  if($page<=0) $page = 1;
  $tcount = mysql_num_rows($result);
  $tpages = ($tcount) ? ceil($tcount/$rpp) : 1;

  $count = 0;
  $i = ($page-1)*$rpp;

  $no_urut = ($page-1)*$rpp;


  while(($count<$rpp) && ($i<$tcount)) {
    mysql_data_seek($result,$i);
    $data = mysql_fetch_array($result);
    $cut=substr($data["isi"], 0, 450);
    echo"

    <div class='panel panel-default'>
    <div class='panel-heading'>
    <h3 class='panel-title'>
    $data[judul]
    </h3>
    </div>
    <div class='panel-body'>
    <div class='row'>
    <div class='col-lg-3'>";

    echo '<img src="data:image/jpeg;base64,'.base64_encode( $data['gambar_berita'] ).'" height="500" width="500" class="img-responsive" alt="Placeholder image"/>';
    echo "</div>
    <div class='col-lg-9'>
    $cut
    </div>
    </div>
    </div>

    <div class='panel-footer'>
    <a href='home.php?halaman=beritadetail&id_berita=$data[id_berita]'>
    <button type='button' class='btn btn-primary'>
    Selengkapnya..
    </button>
    </a>
    </div>
    </div>

    ";
    $i++;
    $count++;
  }


}
?>
