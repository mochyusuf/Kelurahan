<div class="panel panel-default">
  <div class="panel-heading">
    <div class="row">
      <div class="col-lg-6">
        <h3 class="panel-title">Edit Galery</h3>
      </div>
      <div class="col-lg-6">
        <a href="?laman=galery">
          <button type="button" class="btn btn-info pull-right">Kembali</button>
        </a>
      </div>
    </div>
  </div>
  <div class="panel-body">
    <?PHP
    include"../admin/config.php";
    $query=mysql_query("SELECT * FROM galery WHERE id_galery='$_GET[id]'");
    $data=mysql_fetch_array($query);
    ?>
    <form action="galery/act_edit_galery.php" method="post" enctype="multipart/form-data">
      <div class="row">
        <div id="nm_form">ID</div>
        <input name="id" readonly="readonly" value="<?PHP echo"$data[id_galery]"; ?>" id="id" type="text" />
      </div>
      <br />
      <div class='row'>
        <div class="col-lg-12">
          <?PHP
          echo '<img src="data:image/jpeg;base64,'.base64_encode( $data['file'] ).'" height="500" width="500" class="img-responsive" alt="Placeholder image"/>';
          ?>
        </div>
      </div>
      <br />
      <div class='row'>
        <div id="nm_form">Gambar</div>
        <input name="image" id="form" type="file" required/>
        <span class="label label-danger">ukuran gambar max 1MB</span>
      </div>
      <br />
      <div class='row'>
        <div id="nm_form">Banner</div>
        <?php
        if ($data['banner'] == 'Y') {
          echo "<label-default><input type='radio' name='RadioGroup1' value='Y' id='RadioGroup1_0' checked>Y</label>";
          echo "<label-default><input type='radio' name='RadioGroup1' value='N' id='RadioGroup1_1'>N</label>";
        }
        else{
          echo "<label-default><input type='radio' name='RadioGroup1' value='Y' id='RadioGroup1_0'>Y</label>";
          echo "<label-default><input type='radio' name='RadioGroup1' value='N' id='RadioGroup1_1' checked>N</label>";
        }
        ?>

      </div>
      <div>
        <input name="save" type="submit"class="btn btn-primary pull-right" value="Edit Galery"  />
      </div>
    </form>
  </div>
  <div class="panel-footer"></div>
</div>
