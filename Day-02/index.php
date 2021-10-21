<?php require 'includes/link_style.php';?>

<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6 mt-5">
			<h2 class="mb-5">User can login here!</h2>
			<!-- <form action="login.php" method="post"> -->
			<!-- <form action="home.php" method="post"> -->
			<form action="redirect.php" method="post">
		
				<input class="" type="text" name="username" placeholder="User Name"></input>
				<input class="" type="password" name="password" placeholder="Password"></input>
				<input  class="" type="submit" value="submit"></input>

			</form>
		</div>
	</div>
</div>




<?php require 'includes/footer.php' ?>