<?php
session_start();
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'carparking');

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">

  <style>
      .main
      {
          margin-left:350px;
          margin-top:80px;
          width:400px;
          box-shadow: 0px 0px 5px #646464;
          height:500px;
      }
      .panel-heading
      {
          background-color:#232323;
          height:100px;
          text-align:center;
          padding-bottom:150px;
          color:white;
      }
      button
      {
          margin-left:130px;
      }
      input
      {
          margin-top:20px;
      }
      img
      {
          margin-top:-60px;
      }
      body
      {
          background-color:#f2f2f2;
      }
      button
      {
          width:100px;
          color:white;
      }
      .inp
      {
          margin-top:25px;
      }



  </style>
</head>
    <body>
        <div class="container cont">
            <div class="panel panel-default main">

                <div class="panel-heading" style="background-color:#31B0D5; height:180px; color:white;">
                    <img src="user.png" height="100px" width="100px">
                    <h1 style="font-family: 'Rubik', sans-serif;"><b>CAR PARKING</b></h1>
                    <h2 style="font-family: 'Rubik', sans-serif;">Login</h2>
                </div>
                <div class="panel-body">
                    <form name="Login_form" method="POST">
                        <div class="form-group inp">
                            <input class="form-control" type="text" name="uname" placeholder="Username" required style="font-weight:400px; line-height:1.5;">
                        </div>
                        <div class="form-group inp">
                            <input class="form-control" type="password" name="pass" placeholder="Password" required>
                        </div>
                        <div class="form-group inp" style="margin-top:50px;">
                            <input class="btn btn-info btn-block" type="submit"  name="sub" value="LOGIN" style="width:260px; margin-left:50px;" required>
                        </div>
                        <div class="form-group inp">
                            <a href="forgot.php" style="margin-left:130px;">Forgot Password ?</a>
                        </div>
                    </form>
                </div>
            </div>
      </div>
    </body>
</html>

<?php
    if(isset($_POST['sub']))
    {
        date_default_timezone_set("Asia/Kolkata");
        $user = $_POST['uname'];
        $pwd = $_POST['pass'];
        $indate = date("d/m/Y");
        $intime = date("h.i.sa");
        $q = "select * from operators where username = '$user'&& password = '$pwd'";
        $result = mysqli_query($con,$q);
        $num = mysqli_num_rows($result);
        echo $num;
        if($num==1)
        {
            $quer = "select * from login where username = '$user' && password = '$pwd' && logoutdate = ''";
            $res = mysqli_query($con,$quer);
            $no = mysqli_num_rows($res);
            echo $no;
            if($no == 1)
            {
                $_SESSION['name'] = $user;
                echo "query successful";
                header('location:home4.php');
            }
            else
           {
                $qry  = "insert into login(username,password,logindate,logintime,logoutdate,logouttime)
                        values ('$user','$pwd','$indate','$intime','','')";
                $rsult = mysqli_query($con,$qry);
                if($rsult)
                {
                    echo "login successful";
                    $_SESSION['name'] = $user;
                    header('location:home4.php');
                }
            }
        }
        else
        {
            $que = "select * from admin where username = '$user' && password = '$pwd'";
            $res = mysqli_query($con,$que);
            $numb = mysqli_num_rows($res);
            if($numb)
            {
                echo "admin login successful";
                $_SESSION['admin'] = $user;
                header('location:home3.php');
            }
            else {
                echo "Incorrect username and password";
            }
        }
    }

?>
