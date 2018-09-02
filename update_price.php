<?php 
session_start();
require 'connect-db.php';
if(isset($_POST['delete_but'])){
	$type=strip_tags($_POST['rg_roomid']); 
	$_SESSION['rg_roomid']=$type;
	$newprice=strip_tags($_POST['rg_price']); 
	$_SESSION['rg_price']=$newprice;
	
$result=mysqli_query($mysqli,"UPDATE vehicletype SET price ='$newprice' where typeid='$type'") or die("bad query");
    echo "<u>1 row updated !</u>";
}
?>

<html>
<style type='text/css'>
.center{
	text-align:center;
}
</style>

<body>
    <h1><center>Update Records</center></h1>
<div id="container">
<form method="POST" action="update_price.php">
<br>
<br>
    <center><label><b>Veh  Type:</b></label><input type="text" name="rg_roomid" placeholder="type Id"></div><br><br></center>
    <center><label><b>New Price:</b></label><input type="number_format" name="rg_price" placeholder="new price"></div><br><br></center>
<center>
<input type="SUBMIT" name="delete_but"style="font-family:corbel;fontsize:18pt;text-transform:uppercase" value="Update"></input>
<a href="indexadmin.html">
<button type="button" style="font-family:corbel;fontsize:18pt;color:black;">BACK</button></a>
</form>
</div>

</body>

</html>