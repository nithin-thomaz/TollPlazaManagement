
<!DOCTYPE >
<html>
<head>
<title>View Records</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>

<h1><center>Vehicle price</center></h1>


<?php
include('connect-db.php');

if ($result = $mysqli->query("SELECT * FROM vehicletype order by typeid"))
{
if ($result->num_rows > 0)
{
echo "<table border='1' cellpadding='10' align='center'>";

echo "<tr><th>type id</th><th>amount</th></tr>";
$x = "typeid";
$y = "price";
while ($row = $result->fetch_object())
{
echo "<tr>";
echo "<td>" . $row->$x . "</td>";
echo "<td>" . $row->$y . "</td>";
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
    <center><a href="indexadmin.html">Go back</a></center>
</body>
</html>