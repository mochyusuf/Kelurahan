<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kelurahan";
$limit = 5;

$conn = mysql_connect($servername, $username, $password, $dbname) or die("Connection failed: ");
mysql_select_db($dbname);
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>
