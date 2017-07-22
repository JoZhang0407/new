 <!doctype html>
<html>
<head>
<body style="text-align:center; font-size:26px" >
<?php
if(isset($_POST['submit'])){
	
	$lastname="Last Name:".$_POST['lastname'];
	$firstname="First Name:".$_POST['firstname'];
	$address="Address:".$_POST['address'];
	$city="City:".$_POST['city'];
	$state="State:".$_POST['state'];
    $zip="Zip Postal Code:".$_POST['zip'];
	$phone="Phone:"."+"."(".$_POST['countrycode'].")".$_POST['areacode']."-".$_POST['number'];
	$email="E-mail:".$_POST['email'];
	$birth="Birth Date:".$_POST['month'].$_POST['day'].$_POST['year'];
	$gender="Gender:".$_POST['gender'];
	$season="Starting Session:".$_POST['season'];
	$comment="Comment Question:".$_POST['comment'];
		}
	
	$question1 = fopen("Question1.txt","w");
	 
	fwrite ($question1,$lastname."\n");
	fwrite ($question1,$firstname."\n");
	fwrite ($question1,$address."\n");
	fwrite ($question1,$city."\n");
	fwrite ($question1,$state."\n");
	fwrite ($question1,$zip."\n");
	fwrite ($question1,$phone."\n");
	fwrite ($question1,$email."\n");
	fwrite ($question1,$birth."\n");
	fwrite ($question1,$gender."\n" );
	fwrite ($question1,$season."\n");
	fwrite ($question1,$comment."\n");
	
	
	fclose($question1);
	
	
	$question=fopen('Question1.txt','r')or exit("Unable to open file!");
	while(!feof($question)){
		echo fgets($question)."<br>";
		}
		fclose($question);
		
	echo "<a href='Question1.html'>Back</a>";
    

?>
</body>
</html>