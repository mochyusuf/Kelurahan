
<div class="well">
    <a href="?laman=add-user"><button type="button" class="btn btn-warning">Tambah Admin</button>
    </a>
</div>

<div class="row">
  <div id="no-more-tables">
    <table class="col-md-10 table-bordered table-striped table-condensed cf">
      <thead class="cf">
        <tr>
          <th>ID</th>
          <th>Username</th>
          <th>Nama</th>
          <th>Email</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php

        include 'pagination1.php';
        include "config.php";
        $table='admin';
        $sql = "select * from $table order by id_admin desc";
        $result = mysql_query($sql);

        $rpp = 6; //min per halaman
        $reload = "admin.php?laman=admin&pg=true";
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
            <td data-title='Nomor'>$data[id_admin]</td>
            <td data-title='Judul'>$data[username]</td>
            <td data-title='Judul'>$data[nama_admin]</td>
            <td data-title='Judul'>$data[email]</td>
            <td data-title='Aksi' class='numeric'>
            <div class='row'>
              <div class='col-sm-6'>
              <a href=\"?laman=edit-user&id=$data[id_admin]&&table=$table\">
                <button type='button' class='btn btn-primary'>Sunting</button>
              </a>
              </div>
              <div class='col-sm-6'>
              <a href=\"user/act_del_user.php?id=$data[id_admin]&&table=$table\">
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
