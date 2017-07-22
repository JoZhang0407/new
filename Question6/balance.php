<!doctype html>
<html>
<head>
<meta charset="UTF-8">

<link href="https://fonts.googleapis.com/css?family=Droid+Serif" rel="stylesheet">
<title>Untitled Document</title>
</head>

<body>
<h1 align='center' style="font-family: 'Droid Serif', serif">Your Balance Detail</h1>
<hr>
<?php
session_start();
require("new.php");
if(isset($_SESSION['account'])){
	$account = unserialize($_SESSION['account']);
	echo "
	
	<p style='text-align:center'>
	The account balance is:&nbsp;".$account->deposit."
	&nbsp;<a href='Q6-index.html'><input type='button' value='Back'></a>
	</p>
	
	";}else{
		echo "<script>'Location:Q6-index.html';alert('Please log in')</script>";
		}
?>

</body>
</html>