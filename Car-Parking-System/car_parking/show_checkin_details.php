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
	
	$sql="select * from checkinout where carno='$car' and date='$x' ";
	$result = $conn->query($sql);
	
	if($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc())
		{
			if($row['status']=='checkedout')
			{
				echo "Already Checked out";
			}
			else
			{
				echo "Car no : <input type='text' id='carno' class='form-control' readonly value=".$row['carno']." />";
				echo "Date : <input type='text' id='date' class='form-control' readonly value=".$row['date']." />";
				echo "Slot Id : <input type='text' id='slotid' class='form-control' readonly value=".$row['slotid']." />";
				echo "Floor Id : <input type='text' id='floorid' class='form-control' readonly value=".$row['floorid']." />";
				echo "In Time: <input type='text' id='intime' class='form-control' readonly value=".$row['intime']." />";
				echo "Out time : <input type='text' id='carno' class='form-control' readonly value=".$row['outtime']." />";
				echo "Status : <input type='text' id='status' class='form-control' readonly value=".$row['status']." />";
				echo "<br/>";
				echo "<button class='btn btn-danger' type='button' onclick='update_status()'>Update Check Out</button>";
			}
		
		}
	}
	else
	{
		echo "No data found";
	}
	

?>