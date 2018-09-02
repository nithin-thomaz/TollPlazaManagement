 <?php

    $link = mysqli_connect("localhost", "root", "", "tollplazadb");

     


    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }

     


    $sql1 = "INSERT INTO vehicle (vehno,vehreg,vehtype,passes,mobile) VALUES ('$_POST[vehno]','$_POST[state]','$_POST[type]','$_POST[pass]','$_POST[mobile]')";
	$sql2 = "INSERT INTO driver (licno,mobile) VALUES ('$_POST[licno]','$_POST[mobile]')";
	$sql2 = "INSERT INTO tollbill (vehno,licno) VALUES ('$_POST[vehno]','$_POST[licno]')";
    if(mysqli_query($link, $sql1)){

        echo "Records inserted successfully to vehicle table.</br>";

    } else{

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }

	if(mysqli_query($link, $sql2)){

        echo "Records inserted successfully to driver table.";
		

    } else{

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
     
    header('location: index1.html');

    mysqli_close($link);

    ?>

