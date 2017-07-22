<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
<?php
require"database.php";

if(empty($_GET["id"])){
	die("id is not define!");
	}
mysql_connect("localhost","root","test1234");
mysql_select_db("product");	
$id = intval($_GET["id"]);

mysql_query("DELETE FROM product WHERE id=$id");

if(mysql_error()){
	die("fail to remove!");
	}else{
		header("Location:adminpage.php");
		}




?>
</body>
</html>