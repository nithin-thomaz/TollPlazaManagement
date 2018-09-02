<?php
require 'config.php';
if(isset($_POST['login_but'])){
	$email=filter_var($_POST['login_email'],FILTER_SANITIZE_EMAIL);
	$_SESSION['login_email']=$email;
	
	$password=md5($_POST['passkey']);
	
	$check_database_query=mysqli_query($con,"SELECT * FROM customers WHERE email='$email' AND password='$password'");
	$check_login_query=mysqli_num_rows($check_database_query);
	if($check_login_query == 1){
		$row=mysqli_fetch_array($check_database_query);
		$userid=$row['userid'];
		$_SESSION['userid']=$userid;
		header("Location:http://localhost/register.php");
		exit();
	}else{
		echo <script type="text/javascript">wrong passkey</script>;
	}
}


?>