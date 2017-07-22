<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
<h1>Address Book</h1>
<?php
$id = !empty($_GET["id"]) ? $_GET["id"] : "";
$db = 'a1';
mysql_connect("localhost","root","test1234");
mysql_select_db("a1");
mysql_query("SET CHARACTER SET utf8;");
if ( $id == "")
{
	echo '
	     <table border="1">
		 <tr>
		 <td width="50" align="center">No.</td>
		 <td width="120" align="center">Name</td>
		 <td width="120" align="center">Phone</td>
		 <td align="center">Address</td>
		 <td width="200" align="center">E-mail</td>
		 <td width="120" align="center"><a href="Q3insertForm.php"><input type="button" value="Add"></a></td>
		 </tr>';
$sql = 'SELECT * FROM `first`';
$result = mysql_query($sql);
$num = mysql_num_rows($result);
for ( $i=1; $i<=$num; $i++){
	$row = mysql_fetch_row($result);
	$id = $row[0];
	$name = $row[1];
	$tel = $row[2];
	$address = $row[3];
	$email = $row[4];
	echo "<tr><form>";
	echo "<td align='center'>$i</td>";
	echo "<td align='center'><input type='text' name='name' value='$name' size='8'></td>";
	echo "<td align='center'><input type='text' name='phone' value='$tel' size='10'></td>";
	echo "<td><input type='text' name='address' value='$address' size='30'></td>";
	echo "<td><input type='text' name='email' value='$email' size='30'></td>";
	echo "<td align='center'><input type='submit' name='Submit' value='Edit'>
							<input type='submit' name='Submit' value='Delete'>
							<input type='hidden' name='id' value='$id'>
	        </td>";
			echo "</form></tr>";
     }
	echo "</table>";
	}
	else 
	{
		$n =!empty($_GET["name"]) ? $_GET["name"] : null;
		$t =!empty($_GET["phone"]) ? $_GET["phone"] : null;
		$a =!empty($_GET["address"]) ? $_GET["address"] : null;
		$e =!empty($_GET["email"]) ? $_GET["email"] : null;
		$Submit =!empty($_GET["Submit"]) ? $_GET["Submit"] : null;
		
		$msg = '';
		if ( $Submit == 'Edit' )
		{
			$sql = "UPDATE first SET name='$n',phone='$t',address='$a',email='$e'
			      WHERE id=$id";
				 $msg = 'File is edited.<br><h5><a href="index.php">BACK</a></h5>';
				  }
				  else if ( $Submit == 'Delete' ){
					  $sql = "DELETE FROM first WHERE id =$id";
					  $msg = 'File is deleted.<br><h5><a href="index.php">BACK</a></h5>';
					  }
					  else
					  {
						  echo 'Error';
						  return;
					}
					mysql_query($sql) or die('SQL Error');
					
					echo $msg;
		      }
			  mysql_close();


?>

</body>
</html>