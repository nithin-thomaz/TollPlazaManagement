<?php

// connect to the database
include('connect-db.php');

// confirm that the 'id' variable has been set
if (isset($_GET['username']) && is_numeric($_GET['username']))
{
// get the 'id' variable from the URL
$username = $_GET['username'];

// delete record from database
if ($stmt = $mysqli->prepare("DELETE FROM boothlogin WHERE username = ? LIMIT 1"))
{
$stmt->bind_param("i",$username);
$stmt->execute();
$stmt->close();
}
else
{
echo "ERROR: could not prepare SQL statement.";
}
$mysqli->close();

// redirect user after delete is successful
header("Location: view.php");
}
else
// if the 'id' variable isn't set, redirect the user
{
header("Location: view.php");
}

?>