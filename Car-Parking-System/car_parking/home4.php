<?php
    session_start();
    if($_SESSION['name'])
    {

    }
    else {
        header('location:logg.php');
    }
    $con = mysqli_connect('localhost','root');
    mysqli_select_db($con,'carparking');
    $name = $_SESSION['name'];
    $q = "select * from operators where username = '$name' ";
    $res = mysqli_query($con,$q);
    $row = mysqli_fetch_assoc($res);
    $fname = $row['firstname'];
    $lname = $row['lastname'];

 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
      <title>Homepage</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
      <style>
          .imgcontain
          {
              background-image: url("carback.jpg");
              background-attachment: fixed;
              height:850px;
              opacity:0.9;
              background-size: cover;
          }
          #head
          {
              height:400px;
              width:100%;
          }
          #mid
          {
              background-color:#EEEEEE;
              height:200px;
              width:100%;
          }
          #foot
          {
              background-color:#EEEEEE;
              height:230px;
              width:100%;
          }
          .navbar
          {
              margin-top:0px;
              opacity:1;
          }
          #head h1
          {
              color:white;
              padding-top:80px;
          }
          .footer
          {
              color:white;
              background-color:#16191E;
              height:150px;
          }
          .footcircle
          {
              border:2px solid white;
              height:220px;
              width:220px;
              border-radius: 50%;
              float: left;
              margin-left:200px;
              opacity:1;
              background-color:#070803;
              padding-top: 40px;
          }
          .footcircle:hover
          {
              background-color:blue;
          }
          li
          {
              font-size: 17px;
          }
          li:hover
          {
              background-color:blue;
              color:black;
          }
          #middle
          {
              text-align:justify;
              padding-top:100px;
              height:600px;
          }
          .popover
          {
              width:200px;
              height:300px;
          }
          .popover-title
          {
              background-image:url('Profile.png');
              background-size:contain;
              background-position:center;
              background-repeat: no-repeat;
              height:100px;
          }
      </style>
    </head>
    <body>

        <div class="imgcontain jumbotron text-center">
          <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color:black; margin-bottom:0;">
              <div class="container-fluid">
                  <ul class="nav navbar-nav">
                      <li><a href="home3.php">Home</a></li>
                      <li><a href="car.html">Checkin</a></li>
                      <li><a href="checkout.php">Checkout</a></li>
                      <li><a href="enquiry.html">Enquiry</a></li>
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                      <li><a href="#" data-toggle="popover" data-placement="bottom" title=" " data-content=" <?php echo $fname.' '.$lname;?>" >Profile</a></li>
                      <li><a href="logout.php">Logout</a></li>
                  </ul>
              </div>
           </nav>
            <div id = "head">
                <h1><b>CAR PARKING SYSTEM</b></h1>
                <h2 style="color:white;">Easily Manages You Parking</h2>
            </div>
            <div id = "mid">
                <h2 style="text-align:left; padding-left:170px; padding-top:60px; font-size:45px;"><b>Main features</b></h2>
            </div>
            <div id = "foot">
                <div class="footcircle">
                    <h2 style="color:white;">Easy Record</h2>
                    <h2 style="color:white;">Management</h2>
                </div>
                <div class="footcircle">
                    <h2 style="color:white;">Operator</h2>
                    <h2 style="color:white;">Friendly</h2>
                </div>
                <div class="footcircle">
                    <h2 style="color:white;">24x7</h2>
                    <h2 style="color:white;">Support</h2>
                </div>
            </div>
        </div>
        <div class="container" id="middle">
            <h1><b>ABOUT US</b></h1></br>
            <h4>This software is intended to automate the current manual system. Main feature of this automated system is that it
              takes over the system with greater efficiency and accuracy.
              The main goal of this software is make it operator friendly. Using this software operator can easily maintain the large
              volume of data for future prospects. They are able to insert data save to database.
</h4>
<h4> At present the information regarding car parking, parking details and searching of the parking records are done manually. Thus
   there is inconsistency in  record keeping and data management which can be easily avoided by the usage of computerised system of
   the manual work. This particular project deals with the problems on managing and generating the reports and avoids the problems
   which occur when carried manually.
   Identification of the drawbacks of the existing system leads to the designing of computerized system that will be better in
   performance as compared to with the existing system, it is more users friendly and GUI oriented. We can improve the efficiency
   of the system, thus overcome the drawbacks of the existing system.
</h4>

        </div>
        <div class="container-fluid text-center footer">
            Copyright @ CAR PARKS
        </div>

        <script>
            $(document).ready(function(){
              $('a[data-toggle="popover"]').popover();
            });

        </script>
    </body>
</html>
