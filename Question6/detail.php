<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css?family=Droid+Serif" rel="stylesheet">
<title>Account Detail</title>
</head>



<body>
<h1 align='center' style="font-family: 'Droid Serif', serif">Your Detail</h1>
<hr>
<?php
session_start();
require("new.php");
if(isset($_SESSION['account'])){
	echo "
	<table align='center'>
<tr>
	<td>Name:</td>
	<td>".unserialize($_SESSION['account'])->name."</td>
</tr>
<br>
<tr>
    <td>Address:</td>
	<td>".unserialize($_SESSION['account'])->add."</td>
</tr>
<br>
<tr>
    <td>Phone:</td>
	<td>".unserialize($_SESSION['account'])->phone."</td>
</tr>
<br>
<tr>
    <td>Email:</td>
	<td>".unserialize($_SESSION['account'])->email."</td>
</tr>
<br>
<tr>
    <td>Account Number:</td>
	<td>".unserialize($_SESSION['account'])->accountnumber."</td>
</tr>
<br>
<tr>
    <td>Account Type:</td>
	<td>".unserialize($_SESSION['account'])->type."</td>
</tr>
<br>
<tr>
    <td>Balance:</td>
	<td>".unserialize($_SESSION['account'])->deposit."</td>
</tr>
<br>
<tr>
    <td colspan='2' align='center'><a href='Q6-index.html'><input type='button' value='Back'></a></td>
</tr>
</table>
";
} else {
    echo "<script>window.location.href='Q6-index.html';alert('Please set up account')</script>
"
	;
	
}
?>
	







</body>
</html>