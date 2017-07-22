<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css?family=Droid+Serif" rel="stylesheet">
<title>Untitled Document</title>
</head>
<body>
<h1 style="text-align: center;font-family: 'Droid Serif', serif">Deposit successfully!</h1>
<hr>
<?php

session_start();
require_once("new.php");

if(isset($_SESSION['account'])){
    if($_REQUEST['deposit']<0){
        echo "<script>alert('The input value must bigger than 0');  
	window.location.href='deposit.html'</script>";
    }
    else {
        $account = unserialize($_SESSION['account']);
        $account->deposit = $account->deposit + $_REQUEST['deposit'] ;
        $_SESSION['account'] =  serialize($account);
        echo "


<h3 style='text-align: center;'>
    Account Balance is: " .unserialize($_SESSION['account'])->deposit."
    &nbsp<a href='Q6-index.html'><input type='button' value='Back'></a>
</h3>

";

    }
}
else{
    echo "<script>window.location.href='Q6-index.html';alert('Please set up account')</script>";
}
?>
</body>
</html>