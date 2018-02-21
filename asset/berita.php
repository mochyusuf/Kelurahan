<div  class="h1">BERITA</div>
<?php
error_reporting(0);
include 'pagination1.php';
include "config.php";
$table='berita';
$sql = "select * from $table order by id_berita desc";
$result = mysql_query($sql);

$rpp = 5;
$reload = "home.php?halaman=berita&pagination=true";

$page = intval($_GET["page"]);
if($page<=0) $page = 1;
$tcount = mysql_num_rows($result);
$tpages = ($tcount) ? ceil($tcount/$rpp) : 1;

$count = 0;
$i = ($page-1)*$rpp;
$no_urut = ($page-1)*$rpp;
?>
<div class="row" style="text-align:left">
  <div class="col-md-10" >

    <?php
    while(($count<$rpp) && ($i<$tcount)) {
      echo "<div class='w3-theme-l3'>";


      mysql_data_seek($result,$i);
      $data = mysql_fetch_array($result);
      $cut=substr($data["isi"], 0, 450);
      echo"
      <div clas'panel panel-info w3-theme-d5'>
      <div class='well w3-theme-d5'>

      $data[judul]

      </div>
      <div class='panel-body'>
      <div class='row'>
      <div class='col-md-3'>";

      echo '<img src="data:image/jpeg;base64,'.base64_encode( $data['gambar_berita'] ).'" height="500" width="500" class="img-responsive" alt="Placeholder image"/>';
      echo "
      </div>
      <div class='col-md-9'>
      <div class='row'>
      <div class='col-lg-6'>
      $data[date]
      </div>
      <div class='col-lg-6'>
      $data[penulis]
      </div>
      </div>
      <br />
      $cut
      <br>
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
      <br />
      </div>
      ";
      $i++;
      $count++;
    }

    ?>
  </div>
</div>
<div class="online">
  <?php
  echo paginate_one($reload, $page, $tpages);
  ?>
</div>
