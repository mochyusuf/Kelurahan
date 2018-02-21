<div class="panel panel-default">
  <div class="panel-heading">
    <div class="row">
      <div class="col-lg-6">
        <h3 class="panel-title">Tambah Galeri</h3>
      </div>
      <div class="col-lg-6">
        <a href="?laman=galery">
          <button type="button" class="btn btn-info pull-right">Kembali</button>
        </a>
      </div>
    </div>
  </div>
  <div class="panel-body">
    <form action="galery/act_add_galery.php" method="post" enctype="multipart/form-data">
      <div class='row'>
        <div id="nm_form">File</div>
        <input name="image" id="form" type="file" required/>
        <span class="label label-danger">ukuran gambar max 1MB</span>

      </div>
      <br />
      <div class='row'>
          <div id="nm_form">Banner</div>
          <label-default><input type="radio" name="RadioGroup1" value="Y" id="RadioGroup1_0">Y</label>
          <label-default><input type="radio" name="RadioGroup1" value="N" id="RadioGroup1_1">N</label>
          </div>
          <div>
            <input name="save" type="submit"class="btn btn-primary pull-right" value="Tambah Galery"  />
          </div>
        </form>
      </div>
      <div class="panel-footer"></div>
    </div>
