<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css?family=Droid+Serif" rel="stylesheet">
<title>Untitled Document</title>
</head>

<body style="text-align:center; ">
<h1 style="font-family: 'Droid Serif', serif">You are log out!</h1>
<hr>
<?php
session_start();
session_destroy();
echo "<a href='Q6-index.html'><input type='button' value='Back'></a>";


?>
</body>
</html>