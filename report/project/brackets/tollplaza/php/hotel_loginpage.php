 <?php
 if(!isset($_SESSION)){
session_start();
}
 require 'login_handler.php';
 require 'config.php';
?>





<html>
<head>
	<title>Login</title>
<style type="text/css">
	h1 {color:blue;}
</style>
</head>

<body>
<h1><b><i><center>WELCOME TO HOTEL MANAGEMENT </b></i></center></h1>
<center>
<legend>LOGIN</legend>
<div id="container">

<form method="POST" action='hotel_loginpage.php'>

		<div class="field_container"><center><input type="text" name="login_email" placeholder="USERNAME" required><div/>
		<br></br>
		<div class="field_container"><center><input type="text" name="passkey" placeholder="PASSWORD" required><div/>
		<br></br>
	
		<input type="SUBMIT" name="login_but" style="font-family:corbel;fontsize:18pt;"></input>
		<a href="register.php"><button type="button" style="font-family:corbel;fontsize:18pt;">REGISTER</button></a>
		
		
	
  <form/>  
 <div/>



</body>
</html>