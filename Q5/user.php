<?php
require"database.php";

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
<form action="userpage.php" method="get">
<h1 align="center">Choose A Brand</h1>

<table align="center">
<tr>
	<td><select name="brand_select" style="width:auto">
    <option>SELECT </option>
    <?php
    $sql="SELECT brand_id,brand FROM brand";
	mysql_connect("localhost","root","test1234");
	mysql_select_db("brand");
	$result=mysql_query('SELECT * FROM brand');
	$result_length=mysql_num_rows($result);
	
	for($i=0;$i<$result_length;$i++){
		$result_arr=mysql_fetch_array($result);
		$brand_name=$result_arr["brand"];
		$brand_id=$result_arr["brand_id"];
		
		echo"<option name='$brand_id' value='$brand_id'>".$brand_name."</option>";
		}
    ?>
    </select>
    
    <input type="submit" name="submit" value="Submit">
   <input type="button" value="Back">
    </td>
</tr>
</table>
</form>
<hr>
</body>
</html>