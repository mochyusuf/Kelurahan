<?php
include('db.php');

if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
$start_from = ($page-1) * $limit;

$sql = "SELECT * FROM berita ORDER BY id_berita ASC LIMIT $start_from, $limit";
$rs_result = mysql_query($sql);
?>

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
