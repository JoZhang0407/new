<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$db=mysql_connect("localhost","root","test1234")or die("Could not Connect MySql");
mysql_select_db("a1",$db) or die("Could connect to Database");

?>
</body>
</html>