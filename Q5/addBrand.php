<?php
mysql_connect("localhost","root","test1234");
mysql_select_db("brand");
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
<form action="addBrand.php" method="get">
<table align="center">
<tr>
<td style="font-size:24px">Brand Name</td>
<td><input type="text" name="BrandName"></td>
<td>
<input type="submit" name="submit" value="Submit"></td>
<td><a href="addProduct.php"><input type="button" name="product" value="addProduct"></a></td>
<td><a href="adminpage.php"><input type="button" value="Back"></a></td>
</tr>
</table>
</form>
<hr>






<table align="center" border="1px" style="font-size:26px">
  <tr>
	<th>Brand ID</th>
    <th>Brand Name</th>
    
  </tr>

<?php
require_once "database.php";

$result= mysql_query("SELECT * FROM brand");
$result_length= mysql_num_rows($result);
 
 for ($i=0;$i<$result_length;$i++){
	 $result_arr=mysql_fetch_array($result);
	 $id=$result_arr["brand_id"];
	 $name=$result_arr["brand"];
	 
	 echo "
	 <tr>
	 <td>$id</td>
	 <td>$name</td>
	 
	 </tr>
	 
	 
	 ";}
?>



<?php
if(isset($_GET["submit"])){
	extract($_GET);
	if(empty($BrandName)){
		die("Please input brand");
		}
		$brand=$_REQUEST['BrandName'];
		$add_brand="INSERT INTO brand (brand) VALUES ('$brand')";
		
		$insert_data = mysql_query("$add_brand");
		if($insert_data){
			echo "<h1>Insert Successful!</h1>
			      <br><a href='adminpage.php'>Back</a>
				  ";
				  header("Location:addBrand.php");
				  }
	
	}

?>



</table>
</body>
</html>