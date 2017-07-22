<?php
mysql_connect("localhost","root","test1234");
mysql_select_db("product");
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>

<body style="text-align:center">
<div style="font-size:28px">
<form action="addProduct.php" method="get">
Product Name:<input type="text" name="product"><br><br>
Product Price:<input type="text" name="price"><br><br>
Brand <select name="brand_select">
</div>
<?php
require"database.php";

$result= mysql_query("SELECT * FROM brand");

while($row= mysql_fetch_array($result)){
	$brand_name = $row["brand"];
	echo "<option value='$brand_name'>".$brand_name."
	</option>";
	echo "mysql_num_row($result)";
	echo "<br>";
	}
?>
    </select>
    <br>
    <br>
    <input type="submit" name="submit" value="Submit">
  <a href="adminpage.php" ><input type="button" value="Back"></a>
</form>


<?php
if(isset($_GET["submit"]))  {

    extract($_GET);

    if (empty($product)&&empty($price)){
        die('Please enter product name and product price');
    }
    $result=mysql_query("SELECT * FROM brand WHERE brand.brand='$brand_select'");
	$row= mysql_fetch_array($result);


   
    $add_product = "INSERT INTO product(product,price,brand_id)
                            VALUES ('$product','$price',".$row['brand_id'].")";

    $insert_data = mysql_query("$add_product");

    if ($insert_data){
        echo "
        <h2 align='center'>
        Insert successfully!<br>
	
        <a href='adminpage.php'>Back</a>
		</h2>
	";
    }

}
?>

</body>
</html>