<?php

   echo ‘Hello world’;

?>

<!--
ob_start();


$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

$sql="SELECT * FROM $tbl_name WHERE username='$username' and password='$password'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $username and $password, table row must be 1 row
if ($count==1) {
    echo "Success! $count";
} else {
    echo "Unsuccessful! $count";
}

ob_end_flush();
?>
      -->