<?php session_start(); ?>
<!DOCTYPE html>
<html>
      <head>

        <style>
            #test5
            {
                display:block;
                border:2px solid red;
                border-radius:1%;
                padding:20px;
                background-color:#FFF3CD;
                margin-top:20px;
            }
            #test1
            {
                display:none;
                border:2px solid red;
                border-radius:1%;
                padding:20px;
                background-color:#FFF3CD;
                margin-top:20px;
            }
        </style>
      </head>
    <body>
<?php
    $date = $_GET['data'];
    //echo $date;
    $con = mysqli_connect('localhost','root');
    mysqli_select_db($con,'carparking');

    $q = "select * from operators where dateofjoin = '$date' ";
    $res = mysqli_query($con,$q);
    $num = mysqli_num_rows($res);

    if($num > 0)
    {
         $resdisp = "<form method='POST' action='forgot.php'>
         <table class='table' style='width:400px; margin-left:550px;'>
         <tr><td><label>New Password</label></td>
         <td><input type = 'text' name='npass'></td></tr>
         <tr><td><label>Confirm Password</label></td>
         <td><input type = 'text' name='cpass'></td></tr>
         <tr><td colspan='2'><center><input class='btn btn-primary text-center' name='btn2' type='submit' value='submit' onclick='setpassword(npass, cpass)'></center></td></tr>
         </table>
         </form>";

        echo $resdisp;
    }
    else {
        $resdisp = '<span id="test5">! Incorrect Date Of Joining </span>
        <div class="container-fluid" id="contain" style="height:600px;">
        <h1><center>Answer some security questions</center></h1>
        <h4 style="padding-bottom:100px;"><center>This Will Help Us To Reset Your Password</center></h4>
        <form class="form-horizontal">
            <div class="form-group main" style="margin-left:450px;">
                <label class=" col-sm-2 control-label">Please enter you date of joining</label>
                <div class="col-sm-4">
                    <input  class="form-control" type="date" name="doj" required></br><span id="test"><b>! Please fill out field above</b></span>
                    <span id="test1">password and confirm password are not same</span>
            </div>
            <div class="form-group text-center">
                <button type="button" class="btn btn-info" onclick="forgt(doj)">submit</button>
            </div>
            <div class="form-group text-center">
                <a href="forgot11.php">Try another way</a>
            </div>
        </form>

      </div>';

      echo $resdisp;
    }
?>
    </body>
</html>
