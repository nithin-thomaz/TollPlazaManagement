<?php
if(!isset($_SESSION)){
session_start();
}
require 'connect-db.php';
if(isset($_POST['delete_but'])){
	$vehID = strip_tags($_POST['licno']); //remove html tags
	//$custID=str_replace('','',$custID); //remove space
	//$custID=ucfirst(strtolower($custID));
	$_SESSION['licno']=$vehID;
	$query=mysqli_query($mysqli,"DELETE FROM driver WHERE licno='$vehID'");
	
}
?>

<html>
<head></head>
<body>
<div id="containerr">
<form method="POST" action="delete2.php">
<br>
<br>
<div class="field_container"><center><label>LICENCE:</label><input type="text" name="licno"></div><br><br>
<center>
<input type="SUBMIT" name="delete_but"style="font-family:corbel;fontsize:18pt;text-transform:uppercase" value="DELETE"></input>
<a href="retrieveadmin.html"> <button type="button" style="font-family:corbel;fontsize:18pt;color:black;">EXIT</button>
</form>
</div>
</body>

</html>