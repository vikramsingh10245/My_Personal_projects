<?php
	//date today in $x
	date_default_timezone_set("Asia/Kolkata");
	$x = date(DATE_ATOM);
	
	//echo $x;
	
	$x = substr($x,0,10);
	
	//current time in 24hrs format
	
	$y = date(DATE_ATOM);
	$y = "".$y."";
	$y = substr($y,11,11);
	
	$y = substr($y,0,5);
	
	//echo $y ."<br/>";
	//echo $x;
	
	//echo time();
	//echo "The time is " . date("h:i:sa");
	//echo $x;
	//echo $_REQUEST['base'];
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "carparking";
	$a = "open";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	
	$car=$_REQUEST['car'];
	$date=$_REQUEST['date'];
	$intime=$_REQUEST['intime'];
	
	$sql="update checkinout set status='checkedout', outtime='$y' where carno='$car' and date='$date' and intime='$intime'";
	
	if ($conn->query($sql) === TRUE) 
	{
		echo "Check out status updated successfully";
	} 
	else 
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	

?>