
<html>
  <head>
    <title>Password Checking Script</title>
  </head>
  <body>

<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="tollplazadb"; // Database name 

// Connect to server and select databse.
$cons=mysql_connect("localhost", "root", "") or die("not connected");
$datab=mysql_select_db("tollplazadb") or die("not found");
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

$me=mysql_query("SELECT * username FROM boothlogin");
$pass=mysql_query("SELECT * password FROM boothlogin");
while(($row=mysql_fetch_array($me))&&($row1=mysql_fetch_array($pass))){
          if((($row['username']==$username)&&($row1['password']==$password))){
              header("refresh:.1;url=php/login.php");
              exit();
          }
          else{
              echo("you are not authorized");
          }
      }
      ?>
  </body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: nishan
 * Date: 03-10-2017
 * Time: 09:01 PM
 *
 */
session_start();
require("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password=md5(mysqli_real_escape_string($conn, $_POST['password']));

    $sql = "SELECT * FROM boothlogin WHERE username = '$username' and password='$password' ";
    $retval=mysqli_query($conn,$sql);

    $row = mysqli_fetch_array($retval,MYSQLI_ASSOC);

    $count = mysqli_num_rows($retval);
    if($count == 1) {
        global  $username;
        $_SESSION['login_user'] = $username;
        mysqli_commit($con);
        header("location: index.php");
    }else {
        header("location:login.php");
    }
}else{
    header("location:login.php");
}
?>
