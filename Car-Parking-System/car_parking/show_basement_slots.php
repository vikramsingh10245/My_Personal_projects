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
	
	$floor =$_REQUEST['base'];
	
	$sql = "select * from slot where floorid='".$_REQUEST['base']."'";
	$result = $conn->query($sql);
	
	if($_REQUEST['base']=="base1")
	{
		echo "<h2>Floor : Basement 1</h2>";
	}
	elseif($_REQUEST['base']=="base2")
	{
		echo "<h2>Floor : Basement 2</h2>";
	}
	else
	{
		echo "<h2>Floor : Basement 3</h2>";
	}
	
	
	$usernames="";
	while($row = $result->fetch_assoc())
	{
		$sql_find_status = "select * from checkinout where date='".$x."' and slotid='".$row['slotid']."' and floorid='".$_REQUEST['base']."' and status='checkedin'";
		$result2 = $conn->query($sql_find_status);
		if($result2->num_rows > 0)
		{
			echo "<div style='float:left;padding:15px;border:2px solid green;'><button class='btn btn-danger'>".$row['slotid']."</button></div>";
		}
		else
		{
			echo "<div style='float:left;padding:15px;border:2px solid green;'><button class='btn btn-success' onclick=checkin('$x','$y',this,'$floor') data-toggle='modal' data-target='#myModal'>".$row['slotid']."</button></div>";
		}
		
	}
	

?>