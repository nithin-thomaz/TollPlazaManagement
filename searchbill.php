<html>
    <head></head>
<body>
    <table border="1" align="center" width="400" height="100">
<tr>
    <th>billid</th>
    <th>vehicle</th>
    <th>licence</th>
    <th>date</th>
</tr>


<?php

// server info
$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'tollplazadb';

// connect to the database
$conn= mysqli_connect($server, $user, $pass, $db);
$set=$_POST['billid'];
if($set){
$show="SELECT * FROM tollbill WHERE billid='$set'";
$result=mysqli_query($conn,$show);
    echo"<h2><center>Vehicle datails of entered id:</center></h2>";
while($rows=mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>";
    echo $rows['billid'];
    echo "</td>";
    echo "<td>";
    echo $rows['vehno'];
    echo "</td>";
    echo "<td>";
    echo $rows['licno'];
    echo "</td>";
    echo "<td>";
    echo $rows['date_time'];
    echo "</td>";
    echo "</tr>";
    echo "<br/>";
}
}
else {
    echo"Nothing to display!!";
}
   
?>
    </table>
<center> <a href="retrieve.html">Go back!</a> </center>
</body>
</html>