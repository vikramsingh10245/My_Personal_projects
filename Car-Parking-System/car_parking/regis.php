<?php
    session_start();

    $con = mysqli_connect('localhost','root');
    mysqli_select_db($con,'carparking');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>operators Operator</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
  <style>
      #header
      {
          background-color:#007BFF;
          color: white;
          height:250px;
      }
      h1
      {
          font-size:70px;
          font-family: 'Bree Serif', serif;
      }
      .footer
      {
          color:white;
          background-color:#16191E;
          height:150px;
          margin-top:70px;
      }
  </style>
</head>

    <body>
        <div class="jumbotron text-center" id="header">
          <h1>CAR PARKING SYSTEM</h1>
          <h2>Operator Registration</h2>
          <!--<img src="user.png" height="150px" width="150px">-->
        </div>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="margin-top:-30px;">
            <ul class="navbar-nav">

                <li class="nav-item">
                  <a class="nav-link" href="home3.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="regis.php">Add Operator</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="del_operator.php">Delete Operator</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="car.html">Check In</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="checkout.php">Check Out</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="enquiry">Enquiry</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </nav>
        <div class = "container">
          <form  class="form-horizontal" action = "" method = "post">
            <div class = "row" style="margin-top:25px;">
                <label class="control-label col-sm-2">Firstname</label>
                <div class="col-sm-4">
                    <input type = "text" class="form-control" name="fname" required>
                </div>
                <label class = "control-label col-sm-2">Lastname</label>
                <div class="col-sm-4">
                    <input type = "text" class="form-control" name="lname" required>
                </div>
            </div>
            <div class = "row" style="margin-top:25px;">
                <label class = "control-label col-sm-2">Date Of Birth</label>
                <div class="col-sm-4">
                    <input type = "date" class="form-control" name="dob" required>
                </div>
                <label class = "control-label col-sm-2">Age</label>
                <div class="col-sm-4">
                    <input type = "number" class="form-control" name="age" required>
                </div>
            </div>
            <div class = "row" style="margin-top:25px;">
                <label class = "control-label col-sm-2">Contact</label>
                <div class="col-sm-4">
                    <input type = "text" class="form-control" name="contact" required>
                </div>
                <label class = "control-label col-sm-2">Email</label>
                <div class="col-sm-4">
                    <input type = "email" class="form-control" name="mail" required>
                </div>
            </div>
            <div class = "row" style="margin-top:25px;">
                <label class = "control-label col-sm-2">Username</label>
                <div class="col-sm-4">
                    <input type = "text" class="form-control" name="username" required>
                </div>
                <label class = "control-label col-sm-2">Password</label>
                <div class="col-sm-4">
                    <input type = "password" class="form-control" name="pass" required>
                </div>
            </div>
            <div class = "row" style="margin-top:25px;">
                <label class = "control-label col-sm-2">Address</label>
                <div class="col-sm-4">
                    <input type = "text" class="form-control" name="address" required>
                </div>
                <label class = "control-label col-sm-2">Joining Date</label>
                <div class="col-sm-4">
                    <input type = "date" class="form-control" name="dateofjoin" required>
                </div>
            </div>
            <div class = "row" style="margin-top:25px;">
                <label class = "control-label col-sm-2">Petname</label>
                <div class="col-sm-4">
                    <input type = "text" class="form-control" name="petname" required>
                </div>
            </div>
            <div class="row" style="margin-top:60px;">
                <div class="col-sm-4">
                    <h3>Select Gender :</h3>
                </div>
                <label class="radio-inline col-sm-2"><input type="radio" name="gender" value="male"> Male</label>
                <label class="radio-inline col-sm-2"><input type="radio" name="gender" value="female"> Female</label>
                <label class="radio-inline col-sm-2"><input type="radio" name="gender" value="other"> Other</label>
            </div>
            <div class="row" style="margin-top:60px;">
                  <div class="col-sm-12">
                    <input  class="btn btn-primary" type="submit" name="subm" value="submit" style="margin-left:510px">
                  </div>
            </div>
          </form>
        </div>

        <div class="container-fluid text-center footer">
            Copyright @ CAR PARKS
        </div>



        <?php
            if(isset($_POST['subm']))
            {
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $dob = $_POST['dob'];
                $age = $_POST['age'];
                $address = $_POST['address'];
                $cont = $_POST['contact'];
                $email = $_POST['mail'];
                $usname = $_POST['username'];
                $pwd = $_POST['pass'];
                $gender = $_POST['gender'];
                $dateofjoin = $_POST['dateofjoin'];
                $petname = $_POST['petname'];

                $qu = "select * from operators where username = '$usname'";
                $res = mysqli_query($con,$qu);
                $n = mysqli_num_rows($res);
                if($n==1)
                {
                    echo "username already exists";
                }
                else
                {
                    $que = "insert into operators(firstname,lastname,DOB,age,contact,email,address,username,password,gender,dateofjoin,petname)
                    values('$fname','$lname','$dob','$age','$cont','$email','$address','$usname','$pwd','$gender','$dateofjoin','$petname')";
                    $result = mysqli_query($con,$que);
                    if($result)
                    {
                        //echo "successfully inserted";
                        header('location:home3.php');
                    }
                    else
                    {
                      echo "not inserted";
                    }
                }

            }
         ?>

    </body>
</html>
