<?php
//connect to the database
mysql_connect ("localhost","root","") or die ('Cannot connect to MySQL: ' . mysql_error());
mysql_select_db ("tollplazadb") or die ('Cannot connect to the database: ' . mysql_error());

//query
$query = mysql_query("SELECT vehno,vehreg,vehtype FROM vehicle") or die ('Query is invalid: ' . mysql_error());

//write the results

while ($row = mysql_fetch_array($query)) {
	echo $row['vehno'] . "  " . $row['vehreg'] . " <br>" . "  " . $row['vehtype'] . "<br>";
	
// close the loop
}
?>