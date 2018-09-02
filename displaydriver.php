
<!DOCTYPE >
<html>
<head>
<title>View Records</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>

<h1><center>Driver Records</center></h1>


<?php
include('connect-db.php');

if ($result = $mysqli->query("SELECT * FROM driver"))
{
if ($result->num_rows > 0)
{
echo "<table border='1' cellpadding='10' align='center'>";

echo "<tr><th>licence</th><th>contact</th><th>vehicle</th><th></th></tr>";
$x = "licno";
$y = "mobile";
$z = "vehno";
while ($row = $result->fetch_object())
{
echo "<tr>";
echo "<td>" . $row->$x . "</td>";
echo "<td>" . $row->$y . "</td>";
echo "<td>" . $row->$z . "</td>";
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