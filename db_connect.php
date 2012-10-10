<?php

$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";

mysql_connect($dbHost,$dbUser,$dbPass)
	or die("Couldn't Connect to Database!");

//printf("<b>No Connection to DB!</b>");

mysql_select_db("db_painfo")
	or die("Couldn't find current Database!");
?>
