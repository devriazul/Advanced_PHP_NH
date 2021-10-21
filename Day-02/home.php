<?php require 'includes/link_style.php';

// $user = $_POST['username'];
// $password = $_POST['password'];

// echo "User Name : ".$user;
// echo "</br>";
// echo "Password : ".$password;

?>


<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6 mt-5">
			<h3>User Name: <?php echo $_REQUEST['username'] ?></h3>
			<h3>User Password: <?php echo $_REQUEST ['password'] ?></h3>
		</div>
	</div>
</div>

<?php require 'includes/footer.php'; ?>