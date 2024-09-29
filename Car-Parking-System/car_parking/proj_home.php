<?php
    session_start();
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
        .navbar
        {
            margin-bottom:0px;
        }
    </style>
  <title>Homepage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
    <body style="background-color:">
      <div class="container-fluid">
         <div style="background-color:#0FEB97;">
            <div id="header" class="jumbotron text-center">
                <h1>Car Parking System</h1>
            </div>
            <nav class="navbar navbar-inverse" style="background-color:black;">
                <div class="container-fluid">
                    <ul class="nav navbar-nav">
                        <li><a href="register.php"><b>Add Operator</b></a></li>
                        <li><a href="del_operator.php"><b>Delete Operator</b></a></li>
                        <li><a href="car.html"><b>Checkin</b></a></li>
                        <li><a href="checkout.php"><b>Checkout</b></a></li>
                        <li><a href="enquiry"><b>Enquiry<b></a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#" data-toggle="popover" data-placement="bottom" title="Popover Header" data-content="some content inside popover" >Profile</a></li>
                        <li><a href="logout.php"><b>Logout</b></a></li>
                    </ul>
                </div>
           </nav>
         </div>
        <div class="content">

        </div>
      </div>

      <script>
          $(document).ready(function(){
            $('a[data-toggle="popover"]').popover();
          });

      </script>
    </body>
</html>
