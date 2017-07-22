
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Admin</title>
</head>

<body>
<div style="text-align:center">
<a href="addBrand.php"><input type="button" name="addBrand" value="addBrand"></a>
<a href="addProduct.php"><input type="button" name="addProduct" value="addProduct"></a>
<a href="Q5index.php"><input type="button" value="Back"></a>
</div>

<hr>

<?php
require"database.php";
?> 
<table align="center" style="font-size:24px">
<tr>
	<td>Product Information</td>
</tr>








<?php
$con = mysql_connect("localhost","root","test1234");
if(!$con){
	die('Could not connect: '. mysql_error());
	}
	mysql_select_db("a1",$con);

$result=mysql_query("SELECT * FROM brand JOIN product ON brand.brand_id=product.brand_id");
if(!$result){
	die('Could not connect: '. mysql_error());
	}
while($result_array = mysql_fetch_array($result))
{
		
	$id=$result_array["id"];
	$product_name = $result_array["product"];
	$product_price = $result_array["price"];
	$brand_name=$result_array["brand_id"];
	
	echo "  <tr>
	<td>ID: $id</td>
	<td>Product Name: $product_name</td>
	<td>Price: $$product_price</td>
	<td>Brand ID: $brand_name</td>
	<td><a href='delete.php?id=$id'><input type='button' value='Delete'></a></td>
	</tr>
	";
	}
?>

</table>

</body>
</html>