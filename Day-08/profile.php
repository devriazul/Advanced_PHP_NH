<?php

$userName = $_REQUEST['username'];
$userEmail = $_REQUEST['email'];
$userPassword = $_REQUEST['password'];

$countPassword = strlen($userPassword);
    if(($countPassword>=5 && $countPassword <=10)== false){
        echo "Wrong";
    }else{
        echo "Perfect";
    }

?>