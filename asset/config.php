<?PHP
	$host='localhost';
	$user='root';
	$pass='';
	$conn=mysql_connect("$host","$user","$pass") or die (mysql_error);
	$db=mysql_select_db("kelurahan");
	$maxsize = 1024 * 1000;
	$item_per_page = 7;
?>
