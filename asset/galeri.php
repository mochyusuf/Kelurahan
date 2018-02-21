		<h3>Galeri</h3>
		<br />
		<?php

		error_reporting(0);
		include 'pagination1.php';
		include "config.php";
		$table='galery';

		$sql = "select * from $table order by id_galery desc";
		$result = mysql_query($sql);

		$rpp = 8; //min per halaman
		$reload = "home.php?halaman=galery&pagination=true";

		$page = intval($_GET["page"]);
		if($page<=0) $page = 1;
		$tcount = mysql_num_rows($result);
		$tpages = ($tcount) ? ceil($tcount/$rpp) : 1;

		$count = 0;
		$i = ($page-1)*$rpp;
		$no_urut = ($page-1)*$rpp;


		$x = 0;
		while (($count<$rpp) && ($i<$tcount)) {
			mysql_data_seek($result,$i);
      $data = mysql_fetch_array($result);
			if ($x == 0) {
				echo "<div class='row'>";
			}
			echo "
			<div class='col-lg-3 gallery-item'>
				<a href='#galleryImg1' class='link-gallery' data-toggle='modal' data-target='#modalGallery'>";
			echo '<img src="data:image/jpeg;base64,'.base64_encode( $data['file'] ).'"  class="img-responsive" alt="Placeholder image"/>';
			echo "
				</a>
			</div>

			";
			$x++;
			if ($x == 4) {
				$x = 0;
				echo "</div>";
			}
			$i++;
      $count++;
		}
		?>

	<div class="online">
	  <?php
	  echo paginate_one($reload, $page, $tpages);
	  ?>
	</div>



<div class="modal fade" id="modalGallery" tabindex="-1" role="dialog" aria-labelledby="modalGalleryLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="modalGalleryLabel">Gallery</h4>
			</div>

			<div class="modal-body">
				<div id="carouselGallery" class="carousel slide" data-ride="carousel" data-interval="false">
					<div class="carousel-inner">
					</div> 
				</div>
			</div>

			<div class="modal-footer">
				<ul class="pagination">
				</ul>
			</div>
		</div>
	</div>
</div>
