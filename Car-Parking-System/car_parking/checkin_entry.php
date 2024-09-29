<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "carparking";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	
	$floor =$_REQUEST['floor'];
	$slot =$_REQUEST['slot'];
	$time =$_REQUEST['time_c'];
	$date =$_REQUEST['date_c'];
	$car =$_REQUEST['car'];
	
	$sql = "Insert into checkinout values('$car','$date','$slot','$floor','$time','','checkedin')";

	
	if ($conn->query($sql) === TRUE) 
	{
		echo "New record created successfully";
	} 
	else 
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

$conn->close();
	

?>