<?php require 'includes/link_style.php';

// echo "DB Information: <br>";

$dbUsename = "riaz@gmail.com";
$dbPassword = "12345";

// echo "User Name: ".$dbUsename;
// echo "<br>";
// echo "Password: ".$dbPassword;
// echo "<hr>";

// echo "User Information: <br>";
$user = $_REQUEST['username'];
$password = $_REQUEST['password'];

// echo "User Name: ".$user;
// echo "<br>";
// echo "Password: ".$password;
// echo "<hr>";

// echo "Login information";
// echo "<br>";
if ($dbUsename==$user && $dbPassword==$password) {
	echo "You are logged in!";
}else{
	echo "Your login information is wrong!";
}

require 'includes/footer.php' ?>