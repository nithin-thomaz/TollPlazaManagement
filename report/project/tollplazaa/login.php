<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration for Booth Admin</title>
	<link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<body>

	<div class="header">
		<h2>Login to Booth Admin Database</h2>
	</div>
	
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>adminname</label>
			<input type="text" name="username" placeholder="adminid" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password" placeholder="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
			login as booth? <a href="login1.php">click here</a>
		</p>
	</form>


</body>
</html>