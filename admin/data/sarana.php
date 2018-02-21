<?PHP
include"config.php";
$query=mysql_query("SELECT * FROM data_kelurahan WHERE id_data=6");
$data=mysql_fetch_array($query);

?>
    <div class="panel panel-default">
      <div class="panel-heading">
        <div class="row">
          <div class="col-lg-6">
            <h3 class="panel-title">Sarana</h3>
          </div>
          <div class="col-lg-6">
            <button type="button" class="btn btn-info pull-right">Kembali</button>
          </div>
        </div>
      </div>
      <div class="panel-body">
        <form action="data/act_edit_data_desa.php" method="post" enctype="multipart/form-data">
          <center>
            <?PHP
            echo '<img src="data:image/jpeg;base64,'.base64_encode( $data['gambar_data'] ).'" height="500" width="500" class="img-responsive" alt="Placeholder image"/>';
            ?>
          </center>
            <input type="hidden" name="id" value="6" />
          <div id="contentname">
            <div id="nm_form">Gambar</div>
            <input name="image" id="form" type="file" required/>
            <span class="label label-danger">ukuran gambar max 1MB</span>
          </div>
          <div id="contentname">
            <div id="nm_form">Data</div>
            <div id="textarea">
              <textarea cols="" id="editor1" name="data" rows=""><?PHP echo"$data[data]"; ?></textarea>
              <script> CKEDITOR.replace( 'editor1' ); </script>
            </div>
            <div id="ket"></div>
          </div>
          <div id="contentname">
            <input name="save" type="submit"class="btn btn-primary pull-right" value="Edit Sarana"  />
            <div id="ket"></div>
          </div>
          <div id="ket"></div>
        </form>
      </div>
      <div class="panel-footer"></div>
    </div>
