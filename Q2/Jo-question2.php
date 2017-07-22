<?php
function suba($a){
  foreach($a as $i){
   echo "<input type=\"checkbox\" value=\"$i\" name=w[]>".$i;
  };
};
$a=["Sunshine<br>",
	"Clouds<br>",
	"Rains<br>",
	"Hail<br>",
	"Sleet<br>",
	"Snow<br>",
	"Wind<br>",
	"Cold<br>",
	"Heal<br>"];

$b=["Spring<br>",
	"Summer<br>",
	"Autumn<br>",
	"Winter<br>"];

function subb($b){
  
  	foreach($b as $y){
  	 echo "<input type=\"checkbox\" value=\"$y\" name=x[]>".$y;
  };
};




?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>
<body>
<h1><b>Your Favorite Seasons and Weather are:-</b></h1>
<p>Please enter the city of your choice:</p>
<br>
<form action="Jo-question2.php" method="POST">
<tr>
<td>City:</td>
<input type="text" name="city" required>
</tr>
<br>

<p>
Please choose the kinds of seasons and weather you like from the list below.<br>
Choose all that apply.
</p>



<?php
	suba($a);
?>
	<br>
 	Season:
    <br>
 <?php
      subb($b);
 ?>



<td><input type="submit" name="s2" value="go"></td>
</form>

<?php
/*echo "<h1><b>Your Favorite Seasons and Weather are:</b></h1>";*/

if(isset($_POST['s2']))
{   echo "<h1><b>Your Favorite Seasons and Weather are:</b></h1>";
	echo "<h3>Your favourite weather in ".$_POST["city"]." is:</h3>";

	$w = $_POST['w'];
	print"<ul type=circle>";
	for($i=0; $i<count($w); $i++)
		{
		print"<li>".$w[$i]."</li>";
		}
		print"</ul>";

	echo"<br><h3>Your favorite seasons are:</h3>";
	$x = $_POST['x'];
	print"<ul type=circle>";
	for($y=0; $y<count($x); $y++)
		{
		print"<li>".$x[$y]."</li>";
		}
		print"</ul>";
}



	
?>
</body>
</html>