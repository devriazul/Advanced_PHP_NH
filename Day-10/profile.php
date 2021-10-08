<?php

$userName = $_REQUEST['username'];
$userEmail = $_REQUEST['email'];
$userPassword = $_REQUEST['password'];

$hash_format = "$2y$07$";
$salt = "sadfjlkafaldjsdk1ff22";
$conC = $hash_format . $salt;

echo $userPassword;
echo "<br>";
echo crypt($userPassword,$conC);

?>