
<!DOCTYPE >
<html>
<head>
<title>Inserted records</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>

    <h1><center>Vehicle Records</center></h1>


<?php
include('connect-db.php');
if ($result = $mysqli->query("SELECT v.vehno,v.vehreg,v.vehtype FROM vehicle v"))
{
if ($result->num_rows > 0)
{
echo "<table border='1' cellpadding='10' align='center'>";

echo "<tr><th>veh_no</th><th>veh_reg</th><th>veh_type</th></tr>";
$x = "vehno";
$y = "vehreg";
$z = "vehtype";
$xx= "licno";
$yy= "mobile";
while ($row = $result->fetch_object())
{
echo "<tr>";
echo "<td>" . $row->$x . "</td>";
echo "<td>" . $row->$y . "</td>";
echo "<td>" . $row->$z . "</td>";
echo "<td>" . $row->$xx . "</td>";
echo "<td>" . $row->$yy . "</td>";
echo "</tr>";
}

echo "</table>";
}
else
{
echo "No results to display!";
}
}
else
{
echo "Error: " . $mysqli->error;
}

$mysqli->close();

?>
    <center><a href="retrieve.html">Go back</a></center>
</body>
</html>