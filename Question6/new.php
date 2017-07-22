<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
<?php


class z_bank{
    var $username;
    function set_name($username){
        $this->name=$username;
    }
    function get_name(){
        return $this->name;
    }

    var $phone;
    function set_phone($phone){
        $this->phone=$phone;
    }
    function get_phone(){
        return $this->phone;
    }
    var $add;
    function set_add($add){
        $this->add=$add;
    }
    function get_add(){
        return $this->add;
    }

    var $email;
    function get_email(){
        return $this->email;
    }
    function set_email($email){
        $this->email=$email;
    }

    var $accountnumber;
    function set_accountnumber($accountnumber){
        $this->accountnumber=$accountnumber;
    }
    function get_accountnumber(){
        return $this->accountnumber;
    }

    var $type;
    function set_type($type){
        $this->type=$type;
    }
    function get_type(){
        return $this->type;
    }


    var $withdrawAmount;
    function set_withdraw($withdraw){
        $this->withdraw=$withdraw;
    }
    function get_withdraw(){
        return $this->withdraw;
    }

    var $deposit;
    function set_deposit($deposit){
        $this->deposit=$deposit;
    }
    function get_deposit(){
        return $this->deposit;
    }

}
?>
</body>
</html>