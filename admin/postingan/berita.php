  <div class="well">
      <a href="?laman=add-berita"><button type="button" class="btn btn-warning">Tambah Berita</button>
      </a>
  </div>

  <div class="row">
    <div id="no-more-tables">
      <table class="col-md-10 table-bordered table-striped table-condensed cf">
        <thead class="cf">
          <tr>
            <th>Nomor</th>
            <th>Judul</th>
            <th>Gambar</th>
            <th>Berita</th>
            <th width="30%">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php

          include 'pagination1.php';
          include "config.php";
          $table='berita';
          $sql = "select * from $table order by id_berita desc";
          $result = mysql_query($sql);

          $rpp = 6; //min per halaman
          $reload = "admin.php?laman=berita&pg=true";
          $page = intval($_GET["page"]);
          if($page<=0) $page = 1;
          $tcount = mysql_num_rows($result);
          $tpages = ($tcount) ? ceil($tcount/$rpp) : 1;

          $count = 0;
          $i = ($page-1)*$rpp;
          $no_urut = ($page-1)*$rpp;
          ?>
          <?php
          while(($count<$rpp) && ($i<$tcount)) {
            mysql_data_seek($result,$i);
            $data = mysql_fetch_array($result);
            $cut=substr($data["isi"],0,220);
            echo"

            <tr>
              <td data-title='Nomor'>$data[id_berita]</td>
              <td data-title='Judul'>$data[judul]</td>
              <td data-title='Gambar' class='numeric'>";
              echo '<img src="data:image/jpeg;base64,'.base64_encode( $data['gambar_berita'] ).'" height="100" width="100" class="img-responsive" alt="Placeholder image"/>';
              echo "
              </td>
              <td data-title='Berita' class='numeric' width='50%'>$cut</td>
              <td data-title='Aksi' class='numeric'>
              <div class='row'>
                <div class='col-sm-6'>
                <a href=\"?laman=edit-berita&id=$data[id_berita]&&table=$table\">
                  <button type='button' class='btn btn-primary'>Sunting</button>
                </a>
                </div>
                <div class='col-sm-6'>
                <a href=\"postingan/act_del_berita.php?id=$data[id_berita]&&table=$table\">
                  <button type='button' class='btn btn-danger'>Hapus</button>
                  </a>
                </div>
              </div>

              </td>
            </tr>
            ";

            $i++;
            $count++;
          }

          ?>
        </tbody>
      </table>

    </div>
  </div>
<?php
 echo paginate_one($reload, $page, $tpages);
?>
