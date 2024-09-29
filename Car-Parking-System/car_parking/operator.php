<?php
    session_start();
    echo "welcome ".$_SESSION['name'];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        #header
        {
            background-color:#0FEB97;
        }
        #header h1
        {
            color:white;
        }
        .content
        {
            background-color:#FDF1DD;
            height:700px;
            width:100%;
            background-image:url('park1.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
  <title>Homepage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
    <body>
      <div class="container-fluid">
         <div style="background-color:#0FEB97;">
            <div id="header" class="jumbotron text-center">
                <h1>Car Parking System</h1>
            </div>
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <ul class="nav navbar-nav">
                        <li><a href="car.html">Checkin</a></li>
                        <li><a href="checkout.php">Checkout</a></li>
                        <li><a href="enquiry.html">Enquiry</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#" data-toggle="popover" data-placement="bottom" title="Popover Header" data-content="some content inside popover" >Profile</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
           </nav>
         </div>
        <div class="content">
        </div>
      </div>
    </body>
</html>
