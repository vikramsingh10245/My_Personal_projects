<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <style>
          #test1
          {
              display:none;
              border:2px solid red;
              border-radius:1%;
              padding:20px;
              background-color:#FFF3CD;
              margin-top:20px;
          }
          #test4
          {
              display:block;
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
    $petname = $_POST['pname'];
    $con = mysqli_connect('localhost','root');
    mysqli_select_db($con,'carparking');

    $q = "select * from operators where petname = '$petname' ";
    $res = mysqli_query($con,$q);
    $num = mysqli_num_rows($res);

    if($num > 0)
    {
         $resdis = "<form method='POST' action='forgot11.php'>
          <span id='test1'>! New password and Confirm Password are not same</span>
         <table class='table' style='width:400px; margin-left:550px;'>
         <tr><td><label>New Password</label></td>
         <td><input type = 'text' name='npass' required></td></tr>
         <tr><td><label>Confirm Password</label></td>
         <td><input type = 'text' name='cpass' required></td></tr>
         <tr><td colspan='2'><center><input class='btn btn-primary text-center'  name='btn1' type='submit' value='submit' onclick='setpassword1(npass, cpass, btn1)'></center></td></tr>
         </table>

         </form>";

        echo $resdis;
    }
   else {
         $resdis = '<div class="container-fluid" id="contain" style="height:250px;">
             <span id="test4">! Incorrect Petname</span>
             <h1><center>Answer some security questions</center></h1>
             <h4 style="padding-bottom:100px;"><center>This Will Help Us To Reset Your Password</center></h4>
             <form  class="form-horizontal" action="forgot11.php" method="POST">
                 <div class="form-group" style="margin-left:450px;">
                     <label class="control-label col-sm-2" for="pname">Enter your petname</label>
                     <div class="col-sm-4">
                         <input  type="text" class="form-control"  name="pname" id="pet" required><span id="test"><b>! Please fill out field above</b></span>
                         <span id="test1">password and confirm password are not same</span>
                     </div>
                 </div>
                 <div class="form-group text-center">
                     <button type="button" class="btn btn-info" onclick="forget(pname)">Submit</button>
                 </div>
             </form>
          </div>';
         echo $resdis;
    }

?>
    </body>
</html>
