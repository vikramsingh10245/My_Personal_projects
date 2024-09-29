<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Forgot Password</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    </head>
    <style>
        #test
        {
            border:2px solid red;
            display:none;
            border-radius:5%;
            padding:20px;
            background-color:#FFF3CD;
            margin-top:20px;
        }
        #test2
        {
            border:2px solid red;
            display:none;
            border-radius:5%;
            padding:20px;
            background-color:#FFF3CD;
            margin-top:20px;
        }

    </style>
    <body>

        <div class="container-fluid" id="contain" style="height:250px;">
            <h1><center>Answer some security questions</center></h1>
            <h4 style="padding-bottom:100px;"><center>This Will Help Us To Reset Your Password</center></h4>
            <form  class="form-horizontal" action="forgot11.php" method="POST">
                <div class="form-group" style="margin-left:450px;">
                    <label class="control-label col-sm-2" for="pname">Enter your petname</label>
                    <div class="col-sm-4">
                        <input  type="text" class="form-control"  name="pname" id="pet" required><span id="test"><b>! Please fill out field above</b></span>
                        <span id='test2'>! Incorrect Petname</span><span id='test1'></span>
                    </div>
                </div>
                <div class="form-group text-center">
                    <button type="button" class="btn btn-info" onclick="forget(pname)">Submit</button>
                </div>
            </form>
         </div>








      <script>
          var petname;
          function forget(pname)
          {

             petname = pname.value;
             if(petname)
             {
              //document.getElementById("demo").innerHTML = petname;
              var xp = new XMLHttpRequest();
              xp.onreadystatechange = function()
              {
                  if(this.readyState == 4 && this.status == 200)
                  {

                    //  document.getElementById("dispinfo").innerHTML = obj[0];
                      if(this.responseText != ["karan"])
                      {
                          document.getElementById("contain").innerHTML = this.responseText;
                      }
                  }
              };
              xp.open("POST", "forgot3.php", true);
              xp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
              xp.send("pname="+petname);
            }
            else{

                      document.getElementById("test").style.display = 'inline-block';
            }
          }

          function setpassword1(npass, cpass, but)
          {
              var newpass = npass.value;
              var conpass = cpass.value;
              var buton = but.value;
              //document.getElementById("demo").innerHTML = buton;
              //var a = document.getElementById("pass").value;
              //document.getElementById("demo").innerHTML = a;

              if(newpass == conpass)
              {
              var xtp = new XMLHttpRequest();
              xtp.onreadystatechange = function()
              {
                  if(this.readyState == 4 && this.status == 200)
                  {

                          //document.getElementById("dispinfo").innerHTML = this.responseText;
                          <?php
                          if(isset($_POST['btn1'], $_POST['npass'], $_POST['cpass']))
                          {
                            ?>

                              document.getElementById("contain").innerHTML= <?php header('location:redir.html');?>

                          <?php

                        }
                           ?>
                  }
              };
              xtp.open("POST", "forgot4.php", true);
              xtp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
              xtp.send("new="+newpass+"&pname="+petname+"&con="+conpass);
            }
            
          }

          function findpetname()
          {

          }
      </script>
    </body>
</html>
