<div class="panel panel-default">
  <div class="panel-heading">
    <div class="row">
      <div class="col-lg-6">
        <h3 class="panel-title">Edit Berita</h3>
      </div>
      <div class="col-lg-6">
        <a href="?laman=berita">
        <button type="button" class="btn btn-info pull-right">Kembali</button>
        </a>
      </div>
    </div>
  </div>
  <div class="panel-body">
    <?PHP
    include"../admin/config.php";
    $query=mysql_query("SELECT * FROM berita WHERE id_berita='$_GET[id]'");
    $data=mysql_fetch_array($query);
    ?>
    <form action="postingan/act_edit_berita.php" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-lg-3">
          <h5>ID</h5>
        </div>
        <div class="col-lg-9">
          <input name="id" readonly="readonly" value="<?PHP echo"$data[id_berita]"; ?>" id="id" type="text" />
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <h5>Judul</h5>
        </div>
        <div class="col-lg-9">
          <input name="jud" value="<?PHP echo"$data[judul]"; ?>" id="form" type="text" required/>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <h5>Tanggal</h5>
        </div>
        <div class="col-lg-9">
          <input name="tgl" value="<?PHP echo date("Y-m-d"); ?>" readonly="readonly" id="form" type="text" required/>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <h5>Gambar</h5>
        </div>
        <div class="col-lg-9">
          <input name="image" id="brows" type="file" required/>
          <span class="label label-danger">ukuran gambar max 1MB</span>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <?PHP
          echo '<img src="data:image/jpeg;base64,'.base64_encode( $data['gambar_berita'] ).'" height="500" width="500" class="img-responsive" alt="Placeholder image"/>';
          ?>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <h5>Isi Berita</h5>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div id="textarea">
            <textarea cols="" id="editor1" name="isi" rows="" required><?PHP echo"  $data[isi]"; ?></textarea>
            <script> CKEDITOR.replace( 'editor1' ); </script>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <h5>ID Admin</h5>
        </div>
        <div class="col-lg-9">
          <input name="penulis" value="<?PHP echo $_SESSION['id_admin']; ?>" id="form" type="text" required/>
        </div>
      </div>

      <input name="save" type="submit" class="btn btn-primary" value="Tambah Berita" />
      <input name="save" type="reset" class="btn btn-success" value="Reset" />
    </form>
  </div>
  <div class="panel-footer"></div>
</div>
