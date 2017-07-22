<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$username = $_POST['username'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];

if($username and $password and $phone and $email and $address){
	$conn=@mysql_connect("localhost", "root", "test1234") or die ("Error Conn");
	$rs = @mysql_select_db("a1", $conn) or die("Error:Db");
	$sql = "INSERT INTO user (username, password, phone, email, address) value (\"$username\", \"$password\", \"$phone\", \"$email\", \"$address\")";
	
	$rs = mysql_query( $sql, $conn);
	
	if ($rs){
		echo("<h1 align='center'>Record added!</h1>
		<h3 align='center'> Name: $username</h3> 
		<h3 align='center'>Password: $password </h3> 
		<h3 align='center'>Phone: $phone </h3> 
		<h3 align='center'>E-mail: $email </h3> 
		<h3 align='center'>Address: $address</h3> 
		<h4 align='center'><a href='Q5index.php'>Back</a></h4>");
		
		}
}



?>
</body>
</html>