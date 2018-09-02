<?php include('server1.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration for Booth</title>
	<link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<body>

	<div class="header">
		<h2>Login to Booth Database</h2>
	</div>
	
	<form method="post" action="login1.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" placeholder="boothid" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password" placeholder="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
			Not yet registered? <a href="register.php">Sign up</a>
		</p>
	</form>


</body>
</html>