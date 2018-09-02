<?php
if(!isset($_SESSION)){
session_start();
}
require 'connect-db.php';
if(isset($_POST['delete_but'])){
	$vehID = strip_tags($_POST['billid']); //remove html tags
	//$custID=str_replace('','',$custID); //remove space
	//$custID=ucfirst(strtolower($custID));
	$_SESSION['billid']=$vehID;
	$query=mysqli_query($mysqli,"DELETE FROM tollbill WHERE billid='$vehID'");
	
}
?>

<html>
<head></head>
<body>
<div id="container">
<form method="POST" action="delete3.php">
<br>
<br>
<div class="field_container"><center><label>BILL ID:</label><input type="text" name="billid"></div><br><br>
<center>
<input type="SUBMIT" name="delete_but"style="font-family:corbel;fontsize:18pt;text-transform:uppercase" value="DELETE"></input>
<a href="retrieveadmin.html"> <button type="button" style="font-family:corbel;fontsize:18pt;color:black;">EXIT</button>
</form>
</div>
</body>

</html>