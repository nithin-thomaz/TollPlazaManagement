<?php
$host='localhost';
$user='root'; 
$pass='';
$database='tollplazadb';
$cons=mysqli_connect($host,$user,$pass) or die("no host");

$datab=mysqli_select_db($cons,$database) or die("not found");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password=md5(mysqli_real_escape_string($conn, $_POST['password']));

    $sql = "SELECT * FROM boothlogin WHERE username = '$username' and password='$password' ";
    $retval=mysqli_query($conn,$sql);

    $row = mysqli_fetch_array($retval,MYSQLI_ASSOC);

// Mysql_num_row is counting table row
$count=mysql_num_rows($retval);
// If result matched $username and $password, table row must be 1 row
if ($count==1) {
    echo "Success! $count";
} else {
    echo "Unsuccessful! $count";
}


?>