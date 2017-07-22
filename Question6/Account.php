<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css?family=Droid+Serif" rel="stylesheet">
<title></title>
</head>
<h1 style="font-family: 'Droid Serif', serif" align='center'>Account is created!</h1>
<body>
<?php
session_start();
$username=$_REQUEST['username'];
$phone=$_REQUEST['phone'];
$add=$_REQUEST['add'];
$email=$_REQUEST['email'];
$accountnumber=$_REQUEST['accountnumber'];
$type=$_REQUEST['type'];
$balance=$_REQUEST['balance'];

require_once('new.php');
$bank = new z_bank();
$bank->set_name($username);
$bank->set_phone($phone);
$bank->set_add($add);
$bank->set_email($email);
$bank->set_accountnumber($accountnumber);
$bank->set_type($type);
$bank->set_deposit($balance);
$_SESSION['account'] = serialize($bank);

echo "

<hr>
<h2 align='center'>Your Personal Information:</h2>

<table align='center'>

<tr>
	<td>Name: ".$username."</td>
</tr>

<tr>
	<td>Phone: ".$phone."</td>
</tr>

<tr>
	<td>Address: ".$add."</td>
</tr>

<tr>
	<td>Email: ".$email."</td>
</tr>

<tr>
	<td>Account Number: ".$accountnumber."</td>
</tr>

<tr>
	<td>Account Type: ".$type."</td>
</tr>

<tr>
	<td>Balance: ".$balance."</td>
</tr>

<td align='center'><a href='Q6-index.html'><input type='submit' name='back' value='Back'></a></td>


</table>
";

?>
</body>
</html>
