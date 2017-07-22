<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Adminstrative AreaOnline Quiz</title>
</head>

<body>
<?php
extract($_POST);
if(isset($submit)){
	include("database.php");
	$rs=mysql_query("select * from admin where loginid='$loginid' and pass1='$pass1'",$db) or
	die(mysql_error());
	if(mysql_num_rows($rs)<1)
	{
		echo"<div class=head1 align='center'><h2>Invalid User Name or Password!</h2>
		      <h2><a href='Q5index.php'>Back</a></h2></div>";
		exit;
		}
	
	
	}else if(!isset($_SESSION['login']))
	{
		echo"<div style='font-size:35px' align='center'>You are not logged in<br>Plaease <a href=Q5index.php>Login</a></div>";
		exit;
		}
		
?>

<div style="text-align:center">
<a href="addBrand.php"><input type="button" name="addBrand" value="addBrand"></a>
<a href="addProduct.php"><input type="button" name="addProduct" value="addProduct"></a>
<a href="Q5index.php"><input type="button" value="Back"></a>
</div>
<hr>
<h1 align="center">Welcome to Adminstrative Area</h1>
</body>
</html>