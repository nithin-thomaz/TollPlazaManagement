
<!DOCTYPE >
<html>
<head>
<title>View Records</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>

    <h1><center>Bill Records</center></h1>


<?php
include('connect-db.php');

if ($result = $mysqli->query("SELECT * FROM tollbill"))
{
if ($result->num_rows > 0)
{
echo "<table border='1' cellpadding='10' align='center'>";

echo "<tr><th>Billid</th><th>Vehicle</th><th>Licence</th><th>Passes</th><th>Amount</th><th>date and time</th></tr>";
$x = "billid";
$y = "vehno";
$z = "licno";
$xx = "passes";
$xy = "amount";
$xz ="date_time";
while ($row = $result->fetch_object())
{
echo "<tr>";
echo "<td>" . $row->$x . "</td>";
echo "<td>" . $row->$y . "</td>";
echo "<td>" . $row->$z . "</td>";
echo "<td>" . $row->$xx . "</td>";
echo "<td>" . $row->$xy . "</td>";
echo "<td>" . $row->$xz . "</td>";
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
    <center><a href="retrieveadmin.html">Go back</a></center>
</body>
</html>