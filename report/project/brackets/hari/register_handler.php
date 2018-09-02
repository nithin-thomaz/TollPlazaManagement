<?php
$fname="";
$lname="";
$email="";
$phno="";
$pass="";
$repass="";
$date="";
$address="";
$username="";
$error_array=array();
$msgarray=array();
	if(isset($_POST['sumit'])){
		//register form value
		//first name
		$fname = strip_tags($_POST['rg_firstName']); //remove html tags
		$fname=str_replace('','',$fname); //remove space
		$fname=ucfirst(strtolower($fname));
		$_SESSION['rg_firstName']=$fname;
		//last name
		$lname=strip_tags($_POST['rg_lastName']);
		$lname=str_replace('','',$lname); //remove space
		$lname=ucfirst(strtolower($lname));
		$_SESSION['rg_lastName']=$lname;
		
		$email=strip_tags($_POST['rg_email']);
		$email=str_replace('','',$email); //remove space
		$email=ucfirst(strtolower($email));
		$_SESSION['rg_email']=$email;
		
		//$pass=strip_tags($_POST['rg_password']);
		//$pass=str_replace('','',$pass); //remove space
		//$pass=ucfirst(strtolower($pass));
		$_SESSION['rg_password']=$pass;
		
		//$repass=strip_tags($_POST['rg_re_password']);
		//$repass=str_replace('','',$repass); //remove space
		//$repass=ucfirst(strtolower($repass));
		$_SESSION['rg_re_password']=$repass;
		
		$address=strip_tags($_POST['rg_address']);
		$address=str_replace('','',$address); //remove space
		$address=ucfirst(strtolower($address));
		$_SESSION['rg_address']=$address;
		
		$phno=strip_tags($_POST['rg_phone']);
		$_SESSION['rg_phone']=$phno;
		
		$date=date("y-m-d");
		if($pass==$repass){
			//checks email format
			if(filter_var($email,FILTER_VALIDATE_EMAIL)){
				$e_check=mysqli_query($con,"SELECT email from CUSTOMERS where email='$email'");
				$num_rows=mysqli_num_rows($e_check);
				if($num_rows>0){
					array_push($error_array,"Email already in use<br/>");
				}
				
			}else{
				array_push($error_array,"Email format isn't good<br/>");
			}
			
		}else{
				array_push($error_array,"Password dosn't match<br/>");
			}
			if(empty($error_array)){
				$pass=md5($pass);
				$username=strtolower($fname." ".$lname);
			
				$check_username_query=mysqli_query($con,"SELECT name FROM customers WHERE name='$username'");
				$i=0;
				while(mysqli_num_rows($check_username_query)!=0){
					$i++;
					$username=$username."_".$i;
					$check_username_query=mysqli_query($con,"SELECT name FROM customers WHERE name='$username'");
				}
				$query=mysqli_query($con,"INSERT INTO customers (name,email,password,address,date,phone) VALUES('$username','$email','$pass','$address','$date','$phno')");
				echo'<script type="text/javascript">alert("login!!")</script>';
				echo "<script>location.href='http://localhost/hotel_loginpage.php';</script>";
				
			}
		
	}	
?>