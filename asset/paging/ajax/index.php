<?php
include('db.php');

//for total count data
$countSql = "SELECT COUNT(id_berita) FROM berita";
$tot_result = mysql_query($countSql);
$row = mysql_fetch_row($tot_result);
$total_records = $row[0];
$total_pages = ceil($total_records / $limit);

//for first time load data
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
$start_from = ($page-1) * $limit;
$sql = "SELECT * FROM berita ORDER BY id_berita ASC LIMIT $start_from, $limit";
$rs_result = mysql_query($sql);
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.0.3.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="dist/jquery.simplePagination.js"></script>
<title></title>
<script>
</script>
</head>
<body>
<div class="container" style="padding-top:20px;">
<table class="table table-bordered table-striped">
<thead>
<tr>
<th>Name</th>
<th>Salary</th>
<th>Age</th>
</tr>
</thead>
<tbody id="target-content">
<?php
while ($row = mysql_fetch_assoc($rs_result)) {
?>
            <tr>
            <td><?php echo $row["id_berita"]; ?></td>
            <td><?php echo $row["date"]; ?></td>
			<td><?php echo $row["judul"]; ?></td>
            </tr>
<?php
};
?>
</tbody>
</table>
<nav><ul class="pagination">
<?php if(!empty($total_pages)):for($i=1; $i<=$total_pages; $i++):
            if($i == 1):?>
            <li class='active'  id="<?php echo $i;?>"><a href='pagination.php?page=<?php echo $i;?>'><?php echo $i;?></a></li>
            <?php else:?>
            <li id="<?php echo $i;?>"><a href='pagination.php?page=<?php echo $i;?>'><?php echo $i;?></a></li>
        <?php endif;?>
<?php endfor;endif;?>
</ul></nav>
</div>
</body>
<script type="text/javascript">
$(document).ready(function(){
$('.pagination').pagination({
        items: <?php echo $total_records;?>,
        itemsOnPage: <?php echo $limit;?>,
        cssStyle: 'light-theme',
		currentPage : 1,
		onPageClick : function(pageNumber) {
			jQuery("#target-content").html('loading...');
			jQuery("#target-content").load("pagination.php?page=" + pageNumber);
		}
    });
});
</script>
