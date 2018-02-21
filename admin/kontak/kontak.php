<div class="row">
  <div id="no-more-tables">
    <table class="col-md-10 table-bordered table-striped table-condensed cf">
      <thead class="cf">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Email</th>
          <th>Pesan</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php

        include 'pagination1.php';
        include "config.php";
        $table='kritik';
        $sql = "select * from $table order by id_kritik desc";
        $result = mysql_query($sql);

        $rpp = 6; //min per halaman
        $reload = "admin.php?laman=kontak&pg=true";
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
          <td data-title='Nomor'>$data[id_kritik]</td>
          <td data-title='Nomor'>$data[nama_kritik]</td>
          <td data-title='Nomor'>$data[email_kritik]</td>
          <td data-title='Nomor'>$data[kritik]</td>
          <td data-title='Aksi' class='numeric'>
          <div class='col-sm-6'>
          <a href=\"kontak/act_del_kontak.php?id=$data[id_kritik]&&table=$table\">
          <button type='button' class='btn btn-danger'>Hapus</button>
          </a>

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
