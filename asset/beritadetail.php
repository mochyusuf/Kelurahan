<h1>BERITA</h1>
<?php
if($_GET["id_berita"]){
  include "config.php";
  $content=mysql_query("select * from berita where id_berita='$_GET[id_berita]'");

  while($data=mysql_fetch_array($content)) {
    echo"
    <div class='panel panel-default'>
    <div class='panel-heading'>
    <center>
      <h3 class='panel-title'>$data[judul]</h3>
    </center>

    <p></p>
    </div>
    <br>
    <div class='row'>
    <div class='col-lg-6'>
    <div class='well-sm'>$data[penulis]</div>
    </div>
    <div class='col-lg-'>
    <div class='well-s'>$data[date]</div>
    </div>
    </div>
    <div class='panel-body'> <center>";
    echo '<img src="data:image/jpeg;base64,'.base64_encode( $data['gambar_berita'] ).'" height="500" width="500" class="img-responsive" alt="Placeholder image"/>';
    echo "</center>
    $data[isi]
    </div>
    <div class='panel-footer'>
    </div>
    </div>";
  }
}
?>

<!--------komentar--->
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Komentar</h3>
  </div>
  <div class="panel-body">
    <?php
    $content=mysql_query("select * from komentar_berita where id_berita='$_GET[id_berita]'");
    if ((mysql_num_rows($content)) == 0) {
      echo "Tidak Ada Komentar";
    }
    else{
      while($data=mysql_fetch_array($content)) {

        echo "<div class='panel panel-default'>
        <div class='panel-heading'>
        <h3 class='panel-title'>
        $data[nama_pengunjung]
        </h3>
        </div>

        <div class='panel-body'>
        $data[komentar]
        </div>
        <div class='panel-footer'>
        $data[email_pengunjung]
        </div>
        </div>";
      }
    }
    ?>

  </div>
  <div class="panel-footer"></div>
</div>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Tinggalkan Komentar</h3>
  </div>
  <div class="panel-body">

    <form action="komentar/act_add_komentar_berita.php" method="post">
      <input type="hidden" name="id_berita" value="<?php echo "$_GET[id_berita]"; ?>" />
      <div class="row">
        <div class="col-md-2">
          <h6>Nama</h6>
        </div>
        <div class="col-md-10">
          <input name="nama" id="form" type="text" required class="form-control"/>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <h6>Email</h6>
        </div>
        <div class="col-md-10">
          <input name="email" id="form" type="email" required class="form-control"/>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <h6>Komentar</h6>
        </div>
        <div class="col-md-10">
          <textarea required name="komentar" class="form-control"></textarea>
        </div>
      </div>
      <button type="Submit" name="save" class="btn btn-primary">Submit</button>
    </form>
  </div>
  <div class="panel-footer"></div>
</div>
