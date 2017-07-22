<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
<?php


	echo '
	<form id="form1" name="form1" method="post" action="Q3.php">
	<p>New Information</p>
	<p>Name:
	<input name="name" type="text" id="name" size="10"></p>
	<p>Phone:
	<input name="phone" type="text" id="tel" size="20"></p>
	<p>Address:
	<input name="address" type="text" id="address" size="60"></p>
	<p>E-mail:
	<input name="email" type="email" id="email" size="40"></p>
	<p>
       <input type="submit" name="Submit" value="Submit">
		<input name="check" type="hidden" id="check" value="yes">	
	</p>
	</form>';
	
	
				
				header ("Location : Q3.php");	
			
?>
</body>
</html>