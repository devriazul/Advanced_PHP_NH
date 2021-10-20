<?php require 'includes/link_style.php';

	$user = $_REQUEST['username'];
	$password = $_REQUEST['password'];
	
if ($user=="google") {
	header("location: https://www.google.com");
}elseif ($user=="facebook") {
	header("location: https://www.facebook.com");
}else{
	header("location: show.php");
}

 require 'includes/footer.php' ?>