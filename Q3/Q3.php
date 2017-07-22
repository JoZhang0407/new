<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
<p><h1>Address Book</h1></p>
<table border="1">
<tr>
<td width="50" align="center">No.</td>
<td width="80" align="center">Name</td>
<td width="120" align="center">Phone</td>
<td align="center">Address</td>
<td width="200" align="center">E-mail</td>
</tr>

<?php
$db = 'a1';
mysql_connect("localhost","root","test1234");
mysql_select_db("a1");
mysql_query("SET CHARACTER SET utf8;");

				extract ($_POST);
				$sql = "INSERT INTO first(Name,Phone,Address,Email) VALUES('$name','$phone','$address','$email')";
				mysql_query($sql) or die('SQL Error');
				
				echo "<p>New File is Inserted!</p>";
$sql = 'SELECT * FROM `first`';
$result = mysql_query($sql);
$num = mysql_num_rows($result);
for ( $i=1; $i<=$num; $i++ ){
	$row = mysql_fetch_row($result);
	$name = $row[1];
	$tel = $row[2];
	$address = $row[3];
	$email = $row[4];
	echo '<tr>';
	echo "<td align=center>$i</td>";
	echo "<td align=center>$name</td>";
	echo "<td align=center>$tel</td>";
	echo "<td>$address</td>";
	echo "<td>$email</td>";
	echo "</tr>";
	}
	
	mysql_close();
?>
</table>

<h5><a href='index.php'>BACK</a></h5>









</body>
</html>