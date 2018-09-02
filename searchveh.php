<html>
    <head></head>
    <body>
    <table border="1" align="center" width="400" height="100">
<tr>
    <th>vehicle</th>
    <th>state</th>
    <th>type</th>
    </tr>
<?php
// server info
$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'tollplazadb';

// connect to the database
$conn= mysqli_connect($server, $user, $pass, $db);
$set=$_POST['vehno'];
if($set){
$show="SELECT * FROM vehicle WHERE vehno='$set'";
$result=mysqli_query($conn,$show);
echo"<h2><center>Vehicle datails of entered id:</center></h2>";
while($rows=mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>";
    echo $rows['vehno'];
    echo "</td>";
    echo "<td>";
    echo $rows['vehreg'];
    echo "</td>";
    echo "<td>";
    echo $rows['vehtype'];
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
</body>
</html>