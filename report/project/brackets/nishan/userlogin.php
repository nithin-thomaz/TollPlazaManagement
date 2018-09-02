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