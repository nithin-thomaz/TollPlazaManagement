
<html>
  <head>
    <title>Password Checking Script</title>
  </head>
  <body>

<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="booths"; // Database name 

// Connect to server and select databse.
$cons=mysql_connect("localhost", "root", "") or die(mysql_error());
echo "Connected to MySQL<br />";
$datab=mysql_select_db("booths") or die(mysql_error());
echo "Connected to Database<br />";
// Check $username and $password 
/*
if(empty($_POST['username']))
{
    echo "UserName/Password is empty!";
    return false;
}
if(empty($_POST['password']))
{
    echo "Password is empty!";
    return false;
}
*/

// Define $username and $password 
$username=$_POST['username']; 
$password=md5($_POST['password']);

$me=mysql_query("SELECT * username FROM user");
$pass=mysql_query("SELECT * password FROM user");
      while(($row=mysql_fetch_array($me))&&$row1=mysql_fetch_array($pass))){
          if(($row['username']==$username)&&($row1['password']==$password)){
              header("refresh:.1;url=login1.html");
              exit():
          }
          else{
              echo("you are not authorized");
          }
      }
// To protect MySQL injection (more detail about MySQL injection)
  </body>
</html>
