<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>User</title>
</head>

<body>
<?php
require  "database.php";
extract($_REQUEST);
if (isset($_REQUEST['submit'])){
	connectdb();
	$query = "SELECT * FROM user WHERE username=' ".$name." 'AND password='".$password."''";
	$data = mysql_query($query);
	if (mysql_num_rows($data)<1){
		echo "Invalid uesr name or password.";
		echo "<a href='Q5index.php'>Back</a>";
		}else{
			header('Location:');
			}
	}



?>
</body>
</html>