<?php
require 'config.php';
require 'register_handler.php';
?>
<html>
	<head>
		<title>Register</title>
	</head>
	<body>
		<h1><b><i><center>Register HERE!! </b></i></center></h1>
		<fieldset><center>
			<form method="POST" action='register.php'>
				<input type="text" name="rg_firstName" placeholder="first name" value="<?php 
					if(isset($_SESSION['rg_firstName']))
						echo $_SESSION['rg_firstName'];
					 ?>" required>
					<br></br>
				<input type="text" name="rg_lastName" placeholder="Last name" value="<?php 
					if(isset($_SESSION['rg_lastName']))
						echo $_SESSION['rg_lastName'];
					 ?>" required>
					<br></br>
				<input type="email" name="rg_email" placeholder="Email" value="
					<?php
						if(isset($_SESSION['rg_email']))
						echo $_SESSION['rg_email'];
						?>"required><br></br>
						<?php 
						if(in_array("Email already in use<br/>",$error_array))
							echo "Email already in used";
						else if(in_array("Email format isn't good<br/>",$error_array))
							echo "Email format isn't good";
						?>
						
				<input type="number_format" name="rg_phone" placeholder="phone no" value="<?php 
					if(isset($_SESSION['rg_phone']))
						echo $_SESSION['rg_phone'];
					?>" required>
				<br></br>
				<input type="text" name="rg_password" placeholder="password" required> <br></br>
				
				<input type="text" name="rg_re_password" placeholder="retype password" required><br></br>
					<?php
					if(in_array("Password dosn't match<br/>",$error_array))
							echo "Password dosn't match";?><br></br>
				
				<input type="text" rows="4" cols="40" style="width:170px; height:150px;" name="rg_address" placeholder="address" required>
				<br></br>
				
				<input name="sumit" type="submit"></input></a>
				
			</form>
			</fieldset>
			<center/> 
	</body>
</html>