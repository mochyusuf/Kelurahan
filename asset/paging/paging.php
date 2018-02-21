<?php
include("dbconfig.php");

$sql ="SELECT COUNT(*) FROM berita";
$results = mysql_query($sql);
$get_total_rows = mysql_num_rows($results);

//breaking total records into pages
$pages = ceil($get_total_rows[0]/$item_per_page);


?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>jQuery Pagination using PHP PDO : Coding Cage</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<script type="text/javascript" src="jquery.bootpag.js"></script>
<script type="text/javascript">
$(document).ready(function() {
 $("#results").load("get_records.php");  //initial page number to load
 $(".paging_link").bootpag({
    total: <?php echo $pages; ?>,
    maxVisible: 10,
    nextClass: 'next',
    prevClass: 'prev',
    leaps: true,
    firstLastUse: true,
    first: '<span aria-hidden="true">&larr;</span>',
    last: '<span aria-hidden="true">&rarr;</span>',
    lastClass: 'last',
    firstClass: 'first'

 }).on("page", function(e, num){
  e.preventDefault();
  $("#results").prepend('<div class="loading-indication"><img src="ajax-loader.gif" /> Loading...</div>');
  $("#results").load("get_records.php", {'page':num});
 });

});
</script>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>


<br />


<div id="results"></div>

<br />

<div class="paging_link"></div>

</body>
</html>
