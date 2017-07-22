<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css?family=Droid+Serif" rel="stylesheet">
<title>Withdraw</title>
</head>

<body>
<h1 style="font-family: 'Droid Serif', serif; text-align:center">Withdraw successfully!</h1>
<hr>
<?php

session_start();
require_once("new.php");

if(isset($_SESSION['account'])){
    if(unserialize($_SESSION['account'])->deposit - $_REQUEST['withdraw']< 0){
        echo "<script>alert('The Overdraft Facility is not available');  
	window.location.href='withdraw.html'</script>";
    }
    else {
        $account = unserialize($_SESSION['account']);
        $account->deposit = $account->deposit - $_REQUEST['withdraw'] ;
        $_SESSION['account'] =  serialize($account);
        echo "


<div style='text-align: center;'>
    Account Balance is:&nbsp&nbsp" .unserialize($_SESSION['account'])->deposit."
    &nbsp<a href='Q6-index.html'><input type='button' value='Back'></a>
</div>

";

    }
}
else{
    echo "<script>window.location.href='Q6-index.html';alert('Please set up account')</script>";
}
?>
</body>
</html>