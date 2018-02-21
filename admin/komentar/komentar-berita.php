<div class="row">
  <div id="no-more-tables">
    <table class="col-md-10 table-bordered table-striped table-condensed cf">
      <thead class="cf">
        <tr>
          <th>ID Komentar</th>
          <th>ID Berita</th>
          <th>Nama</th>
          <th>Email</th>
          <th>Komentar</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php

        include 'pagination1.php';
        include "config.php";
        $table='komentar_berita';
        $sql = "select * from $table order by id_komentar_berita desc";
        $result = mysql_query($sql);

        $rpp = 6; //min per halaman
        $reload = "admin.php?laman=komentar|berita&pg=true";
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
            <td data-title='Nomor' width='10%'>$data[id_komentar_berita]</td>
            <td data-title='Judul' width='10%'>$data[id_berita]</td>
            <td data-title='Berita' class='numeric' width='10%'>$data[nama_pengunjung]</td>
            <td data-title='Berita' class='numeric' width='10%'>$data[email_pengunjung]</td>
            <td data-title='Berita' class='numeric' width='50%'>$data[komentar]</td>
            <td data-title='Aksi' class='numeric' width='10%'>
              <a href=\"komentar/act_del_komentar_berita.php?id=$data[id_komentar_berita]&&table=$table\">
                <button type='button' class='btn btn-danger'>Hapus</button>
                </a>

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
