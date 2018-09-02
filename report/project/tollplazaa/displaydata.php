
<!DOCTYPE >
<html>
<head>
<title>View Records</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>

<h1>View Records</h1>


<?php
// connect to the database
include('connect-db.php');

// get the records from the database
if ($result = $mysqli->query("SELECT * FROM vehicle order by vehno"))
{
// display records if there are records to display
if ($result->num_rows > 0)
{
// display records in a table
echo "<table border='1' cellpadding='10'>";

// set table headers
echo "<tr><th>veh_no</th><th>veh_reg</th><th>veh_type</th><th>lic_no</th></tr>";
$x = "vehno";
$y = "vehreg";
$z = "vehtype";
$xy= "licno";
while ($row = $result->fetch_object())
{
// set up a row for each record
echo "<tr>";
echo "<td>" . $row->$x . "</td>";
echo "<td>" . $row->$y . "</td>";
echo "<td>" . $row->$z . "</td>";
echo "<td>" . $row->$xy . "</td>";
echo "<td><a href='retrieve.html'>delete</a></td>";
echo "</tr>";
}

echo "</table>";
}
// if there are no records in the database, display an alert message
else
{
echo "No results to display!";
}
}
// show an error if there is an issue with the database query
else
{
echo "Error: " . $mysqli->error;
}

// close database connection
$mysqli->close();

?>
<a href="retrieve.html">Go back</a>
</body>
</html>