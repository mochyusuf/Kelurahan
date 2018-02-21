<?PHP
	$host='localhost';
	$user='root';
	$pass='';
	$conn=mysql_connect("$host","$user","$pass") or die (mysql_error);
	$db=mysql_select_db("kelurahan",$conn) or die("db_error");
	$maxsize = 1024 * 1000;
?>
