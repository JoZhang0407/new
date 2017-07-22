<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>
<body style="text-align:center">
<?php
$tires = $_GET['tires'];
$oil = $_GET['oil'];
$sp = $_GET['sp'];
$address = $_GET['address'];
$subtotal = $tires*10 + $oil*5 + $sp*10;
$sum = $tires + $oil + $sp;
$tax = $subtotal*1.5;

echo"<h1>Oreder Result</h1>";

if($tires==""&&$oil==""&&$sp=="")
{
echo"<font color='red'>You did not order anything on the previous page!</font>
     <h2><a href='Q4-Index.php'>Back</a></h2>";
}
else{
	date_default_timezone_set("Pacific/Auckland");
	echo "Order processed at"."&nbsp".date("h:iA")."&nbsp".date("dS")."&nbsp".date("F")."&nbsp".date("Y")."<br>";
	echo" "."<br>";
	echo"Your order is as follows:"."<br>";
	echo" "."<br>";
	if($tires==""){
	echo "";}
	else{
	echo"$tires"."&nbsp".'tires'."<br>";
		}
		
	if($oil==""){
	echo "";}
	else{
	echo"$oil"."&nbsp".'bottles of oil'."<br>";
		}
		
	if($sp==""){
	echo "";}
	else{
	echo"$sp"."&nbsp".'spark plugs'."<br>";
			}
	echo"Items ordered:"."&nbsp"."$sum"."<br>";
	echo"Subtotal:"."&nbsp"."$subtotal"."<br>";
	echo"Total including tax:"."&nbsp"."$tax"."<br>";
	echo" "."<br>";
	echo"Address to ship to is:"."&nbsp"."$address"."<br>";
	echo" "."<br>";
	echo"Order written.";
  
 $MyCon=mysql_connect("localhost","root","test1234");
	if(!$MyCon)
	{
		die("Connection Failed:".mysql_error());
	}
	mysql_select_db("a1",$MyCon);

	$connect=mysql_query("INSERT INTO OrderForm(Tires,Oil,Sparkplugs,Shippingaddress,total,totaltax)VALUES('$_GET[tires]','$_GET[oil]','$_GET[sp]','$address','$subtotal','$tax')");	

	if(!$connect)
	{
		die("Error:".mysql_error());	
	}
	else
	{
	}
	mysql_close($MyCon);
		
	}
  

?>

</body>
</html>