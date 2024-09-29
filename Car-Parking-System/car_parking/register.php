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

  <style>
      #header
      {
          background-color:#0FEB97;
          color: white;
          height:250px;
      }
      h1
      {
          font-size:60px;
      }
  </style>
</head>

    <body>
        <div class="jumbotron text-center" id="header">
          <h1>CAR PARKING SYSTEM</h1>
          <h2>Operator Registration</h2>
          <!--<img src="user.png" height="150px" width="150px">-->
        </div>
        <div class = "container">
          <form  class="form-horizontal" action = "" method = "post">
            <div class = "row" style="margin-top:25px;">
                <label class = "control-label col-sm-2">Name</label>
                <div class="col-sm-4">
                    <input type = "text" class="form-control" name="name" required>
                </div>
                <label class = "control-label col-sm-2">Address</label>
                <div class="col-sm-4">
                    <input type = "text" class="form-control" name="address" required>
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
            <div class="row" style="margin-top:60px;">
                  <div class="col-sm-12">
                    <input  class="btn btn-primary" type="submit" name="subm" value="operators" style="margin-left:510px">
                  </div>
            </div>
          </form>
        </div>

        <?php
            if(isset($_POST['subm']))
            {
                $name = $_POST['name'];
                $addr = $_POST['address'];
                $cont = $_POST['contact'];
                $email = $_POST['mail'];
                $usname = $_POST['username'];
                $pwd = $_POST['pass'];

                $qu = "select * from operators1 where username = '$usname'";
                $res = mysqli_query($con,$qu);
                $n = mysqli_num_rows($res);
                if($n==1)
                {
                    echo "username already exists";
                }
                else
                {
                    $que = "insert into operators1(name,contact,email,address,username,password) values('$name','$cont','$email','$addr','$usname','$pwd')";
                    $result = mysqli_query($con,$que);
                    if($result)
                    {
                        echo "successfully inserted";
                        header('location:testlog.php');
                        echo $result;
                    }
                    else
                    {
                      echo "not inserted";
                    }
                }

            }
         ?>

    </body>
