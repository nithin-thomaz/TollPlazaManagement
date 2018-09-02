<?php

$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'tollplazadb';

$mysqli= mysqli_connect($server, $user, $pass, $db);

mysqli_report(MYSQLI_REPORT_ERROR);

?>