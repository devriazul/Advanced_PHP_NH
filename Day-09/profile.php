<?php

$userName = $_REQUEST['username'];
$userEmail = $_REQUEST['email'];
$userPassword = $_REQUEST['password'];

$hash_format = "$2a$07$";
$salt = "sadfjl;kafaldjsdk1f22";
$conC = $hash_format . $salt;

?>