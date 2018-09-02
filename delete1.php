<?php
if(!isset($_SESSION)){
session_start();
}
require 'connect-db.php';
if(isset($_POST['delete_but'])){
	$vehID = strip_tags($_POST['username']); //remove html tags
	//$custID=str_replace('','',$custID); //remove space
	//$custID=ucfirst(strtolower($custID));
	$_SESSION['username']=$vehID;
	$query=mysqli_query($mysqli,"DELETE FROM boothlogin WHERE username='$vehID'");
	
}
?>

<html>
<head></head>
<body>
<div id="containerr">
<form method="POST" action="delete1.php">
<br>
<br>
<div class="field_container"><center><label>BOOTH ID:</label><input type="text" name="username"></div><br><br>
<center>
<input type="SUBMIT" name="delete_but"style="font-family:corbel;fontsize:18pt;text-transform:uppercase" value="DELETE"></input>
<a href="retrieveadmin.html"> <button type="button" style="font-family:corbel;fontsize:18pt;color:black;">EXIT</button>
</form>
</div>
</body>

</html>