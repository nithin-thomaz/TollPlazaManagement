<?php
require 'connect-db.php';
$oldpassword="";
$newpassword="";
$error_array=array();
$booth = $_POST['username']
$hotel_dcb_info=mysqli_query($mysqli,"SELECT * FROM boothlogin WHERE username='$booth'");
$row=mysqli_fetch_array($hotel_dcb_info);
if(isset($_POST['SUBMIT'])){
	
	$oldpassword = strip_tags($_POST['old_password']); 
$_SESSION['old_password']=$oldpassword;

$newpassword = strip_tags($_POST['new_password']);
$_SESSION['new_password']=$newpassword;

	if($row['password']!=$oldpassword){
		array_push($error_array,"Old Password is Wrong<br/>");
	}else if($row['password']==$oldpassword){
		$query=mysqli_query($mysqli,"UPDATE boothlogin SET password='$newpassword' WHERE username='$booth'");
		array_push($error_array,"Password changed<br/>");
	}
	
}


?>
<html>
<form method="POST" action="change_password.php">
<center>
	<input type="text" name="old_password" placeholder="OLD PASSWORD" required> </input>
	<br></br>
	<input type="text" name="new_password" placeholder="NEW PASSWORD" required></input>
	<br></br>
			<?php
				if(in_array("Old Password is Wrong<br/>",$error_array))
				echo "OLD Password is Wrong";?><br></br><br></br>
	
	<a href="hotel_homepage.php"><button name="BACK" type="button" style="font-family:corbel;fontsize:18pt;">BACK</button></a>
	<input name="SUBMIT" type="submit" style="font-family:corbel;fontsize:18pt;text-transform:uppercase"></input></a><br></br>
	<?php
			if(in_array("Password changed<br/>",$error_array))
			echo "Password changed";?> 
	<br></br><br></br>
</center>
</form>
</html>