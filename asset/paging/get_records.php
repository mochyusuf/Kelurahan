<?php
require_once 'dbconfig.php'; //include required dbconfig file

//sanitize post value
if(isset($_POST["page"])){
 $page_number = filter_var($_POST["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);
 if(!is_numeric($page_number)){die('Invalid page number!');} //incase of invalid page number
}else{
 $page_number = 1;
}

//get current starting point of records
$position = (($page_number-1) * $item_per_page);

$sql = "SELECT * FROM berita ORDER BY id_berita DESC LIMIT $position, $item_per_page";
$results = mysql_query($sql);

//getting results from database
?>
<ul class="page_result">
<?php
while($row = mysql_fetch_array($results))
{
 ?>
    <?php echo $row['judul']; ?>
    <br />
    <?php

}
?>
</ul>
