<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "attendancesys";
	
	$conn = new mysqli($host, $user, $pass, $db);
	if($conn->connect_error){
		echo "Failed To Connect to database:" . $conn->connect_error;
	}
?>