<!DOCTYPE >
<html>
<head>
<title>View vehicle</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>

    <h1><center>Successsfull!!</center></h1>


<?php

    $link = mysqli_connect("localhost", "root", "", "tollplazadb");

     


    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }

     


    $sql1 = "INSERT INTO vehicle (vehno,vehreg,vehtype) VALUES ('$_POST[vehno]','$_POST[state]','$_POST[type]')";
	$sql2 = "INSERT INTO driver (licno,mobile,vehno) VALUES ('$_POST[licno]','$_POST[mobile]','$_POST[vehno]')";
	$sql3 = "INSERT INTO tollbill (vehno,licno,passes,amount) VALUES ('$_POST[vehno]','$_POST[licno]','$_POST[pass]','$_POST[amount]')";
    if(mysqli_query($link, $sql1)){

        echo "<center>Record inserted into the database!</center></br>";

    } else{

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
    if(mysqli_query($link, $sql2)){

        echo "</br>";

    } else{

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }

	if(mysqli_query($link, $sql3)){

     echo " ";
		

    } else{

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }

    mysqli_close($link);

    ?>
    <center><a href="bill.html">Go back</a></center>
    </body>
</html>
