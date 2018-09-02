<table border="1" align="center" width="400" height="100">
<tr>
    <th>licence</th>
    <th>contact</th>
    <th>vehicle</th>
</tr>


<?php

// server info
$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'tollplazadb';

// connect to the database
$conn= mysqli_connect($server, $user, $pass, $db);
$set=$_POST['licno'];
if($set){
$show="SELECT * FROM driver WHERE licno='$set'";
$result=mysqli_query($conn,$show);
echo"<h2><center>Vehicle datails of entered id:</center></h2>";
while($rows=mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>";
    echo $rows['licno'];
    echo "</td>";
    echo "<td>";
    echo $rows['mobile'];
    echo "</td>";
    echo "<td>";
    echo $rows['vehno'];
    echo "</td>";
    echo "</tr>";
    echo "<br/>";
}
}
else {
    echo"sorry";
}
   
?>
    </table>