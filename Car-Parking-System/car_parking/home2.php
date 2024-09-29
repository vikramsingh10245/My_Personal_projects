<?php
    session_start();
    if($_SESSION['admin'])
    {

    }

    else {
        header('location:testlog.php');
    }

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
      #header
      {
        /*  background-color:#0FEB97; */
      }
      #header h1
      {
          /*color:white;*/
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
      .content
      {
          background-color:#1ABC9C;
          height:500px;
          width:100%;
          /*background-image:url('park1.jpg');*/
          background-size: cover;
          background-repeat: no-repeat;

      }
      .navbar
      {
          margin-bottom:0;
      }
      #head
      {
          font-size:80px;
          color:white;
      }
      .footer
      {
          background-color:#16191E;
          height:200px;
      }
      .sec_content
      {
          background-color:#F3F4F5;
          height:400px;
      }

  </style>
</head>
    <body style="height:1500px;">


      <div class="container-fluid">
         <div>
            <div id="header" class="jumbotron text-center" style="margin-bottom:0px;">
                <h1>CAR PARKING SYSTEM</h1>
                <h2>Easily Manages You Car Parking</h2>
            </div>
            <nav class="navbar navbar-inverse" style="background-color:; margin-bottom:0; margin-top:0; border:2px solid white;">
                <div class="container-fluid">
                    <ul class="nav navbar-nav">
                        <li><a href="regis.php">Add Operator</a></li>
                        <li><a href="del_operator.php">Delete Operator</a></li>
                        <li><a href="car.html">Checkin</a></li>
                        <li><a href="checkout.php">Checkout</a></li>
                        <li><a href="enquiry">Enquiry</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#" data-toggle="popover" data-placement="bottom" title=" " data-content="some content inside popover" >Profile</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
           </nav>
         </div>

           <div id="myCarousel" class="carousel slide" data-ride="carousel" >
 <!-- Indicators -->
     <ol class="carousel-indicators">
       <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
       <li data-target="#myCarousel" data-slide-to="1"></li>
       <li data-target="#myCarousel" data-slide-to="2"></li>
       <li data-target="#myCarousel" data-slide-to="3"></li>
     </ol>

 <!-- Wrapper for slides -->
     <div class="carousel-inner" style="height:500px;">
       <div class="item active">
         <img src="prk2.png" alt="Los Angeles" style="width:100%;">
       </div>

       <div class="item">
         <img src="park3.jpg" alt="Chicago" style="width:100%;">
       </div>

       <div class="item">
         <img src="park6.jpg" alt="New york" style="width:100%;">
       </div>

       <div class="item">
         <img src="park1.jpg" alt="New york" style="width:100%;">
       </div>
     </div>

     <!-- Left and right controls -->
     <a class="left carousel-control" href="#myCarousel" data-slide="prev">
       <span class="glyphicon glyphicon-chevron-left"></span>
       <span class="sr-only">Previous</span>
     </a>
     <a class="right carousel-control" href="#myCarousel" data-slide="next">
       <span class="glyphicon glyphicon-chevron-right"></span>
       <span class="sr-only">Next</span>
     </a>
    </div>

        <div class="sec_content">

        </div>

         <div class="footer text-center">
              <p style="color:white;">Copyright @ Car Parks</p>
         </div>

      </div>

      <script>
          $(document).ready(function(){
            $('a[data-toggle="popover"]').popover();
          });

      </script>
    </body>
</html>
