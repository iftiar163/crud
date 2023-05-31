<?php

	$dbname = "crud";
	$dbUser = "root";
	$dbPass = "";
	$dbHost = "localhost";

	$db = mysqli_connect($dbHost, $dbUser, $dbPass, $dbname);

	if ($db) {
		// echo "Database Connected";
	} 
	else {
		die("MySQli Connection Failed" . mysql_error($db));
	}







?>