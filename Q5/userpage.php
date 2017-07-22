<?php
include_once"user.php";
mysql_connect("localhost","root","test1234");
mysql_select_db("brand");
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Product</title>
</head>

<body>
 <table border="1px" align="center" style="font-size:30px">
 <tr>
 <th>ID</th>
 <th>PRODUCT</th>
 <th>PRICE</th>
 </tr>
 

 <?php
 error_reporting(0);
 require"database.php";

 $brandid= intval($_GET['brand_select']);
 $result= mysql_query("SELECT * FROM brand WHERE brand_id=$brandid");
 $result_arr=mysql_fetch_array($result);
 $product=$result_arr["brand"];
 
 echo "<h2 style='text-align:center'>Brand Name:".$product."</h2>";
 
 $data="SELECT *FROM product WHERE product.brand_id = $brandid";
 $result1=mysql_query($data);
 $data_length=mysql_num_rows($result1);
 
 for ($i=0;$i<$data_length;$i++){
	 $result_arr=mysql_fetch_array($result1);
	 $id=$result_arr["id"];
	 $product=$result_arr["product"];
	 $price=$result_arr["price"];
	 echo "
	 
	 <tr>
	 <th> $id</th><br>
	 <th> $product</th><br>
	 <th> $$price</th>
	 </tr>
	 
	 ";
	 }
 
 
 
 
 ?>
  </table>
</body>
</html>