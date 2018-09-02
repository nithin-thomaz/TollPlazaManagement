<?php

$usernam = $_POST['adminname'];
$passwor = $_POST['password'];

$usernam = stripcslashes($usernam);
$passwor = stripcslashes($passwor);
$usernam = mysql_real_escape_string($usernam);
$passwor = mysql_real_escape_string($passwor);

mysql_connect("localhost","root","");

mysql_select_db("tollplazadb");

$result = mysql_query("select * from adminlogin where adminname = '$usernam' and password='$passwor'")
    or die("failed to query database".mysql_error());
$row = mysql_fetch_array($result);
if($row['adminname'] == $usernam && $row['password'] == $passwor ){
    header("location: index.html");
}else{
  echo 'Sorry! wrong userid or password<br><a href="login1.html">Try again</a>';

}

?>