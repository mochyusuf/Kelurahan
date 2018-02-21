<?php
include "config.php";
$table ="data_kelurahan";
$content=mysql_query("select * from data_kelurahan where id_data=1");
while($data=mysql_fetch_array($content)) {


echo "
    <div class='row'>
      <div class='col-md-12'>
        <div class='panel panel-default'>
          <div class='panel-heading'>
            <h3 class='panel-title'>
            <center>

              $data[judul_data]
              <br /><br />

              </center>
            </h3>
          </div>
          <div class='panel-body'>
          <div class='row'>
              <div class='col-lg-6'>
                <div class='well-sm'>$data[penulis]</div>
              </div>
              <div class='col-lg-6'>
              <div class='well-sm'>$data[date]</div>
              </div>
            </div>
<center>
            <br />";
        echo '<img src="data:image/jpeg;base64,'.base64_encode( $data['gambar_data'] ).'" height="500" width="500" class="img-responsive" alt="Placeholder image"/>';
        echo "$data[data]
        </center>
        </div>
        <div class='panel-footer'></div>
        </div>
      </div>
      </div>
    </div>";
}

?>
