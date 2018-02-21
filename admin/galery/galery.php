<div class="well">
  <a href="?laman=add-galery"><button type="button" class="btn btn-warning">Tambah Galeri</button>
  </a>
</div>

<div class="row">
  <div id="no-more-tables">
    <table class="col-md-10 table-bordered table-striped table-condensed cf">
      <thead class="cf">
        <tr>
          <th>Nomor</th>
          <th style='width:55%'>Gambar</th>
          <th>Banner</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php

        include 'pagination1.php';
        include "config.php";
        $table='galery';
        $sql = "select * from $table order by id_galery desc";
        $result = mysql_query($sql);

        $rpp = 6; //min per halaman
        $reload = "admin.php?laman=galery&pg=true";
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
          echo"

          <tr>
          <td data-title='Nomor'>$data[id_galery]</td>
          <td data-title='Gambar' class='numeric'>";
          echo '<img src="data:image/jpeg;base64,'.base64_encode( $data['file'] ).'" height="200" width="200" class="img-responsive" alt="Placeholder image"/>';
          echo "
          </td>
          <td data-title='Banner' class='numeric'>

          $data[banner]


          </td>

          <td data-title='Aksi' class='numeric'>
            <div class='row'>
              <div class='col-sm-4'>
                <a href=\"?laman=edit-galery&id=$data[id_galery]&&table=$table\">
                  <button type='button' class='btn btn-primary'>Sunting</button>
                </a>
              </div>
              <div class='col-sm-4'>
                <a href=\"galery/act_del_galery.php?id=$data[id_galery]&&table=$table\">
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
