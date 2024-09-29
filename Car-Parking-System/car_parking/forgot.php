<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Forgot Password</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

        <style>
            .main
            {
                margin-left:200px;
            }
            #test
            {
                border:2px solid red;
                display:none;
                border-radius:5%;
                padding:20px;
                background-color:#FFF3CD;
                margin-top:20px;
            }
        </style>
    </head>
    <body>

        <div class="container-fluid" id="contain" style="height:250px;">
        <h1><center>Answer some security questions</center></h1>
        <h4 style="padding-bottom:100px;"><center>This Will Help Us To Reset Your Password</center></h4>
        <form class="form-horizontal">
            <div class="form-group main" style="margin-left:450px;">
                <label class=" col-sm-2 control-label">Please enter you date of joining</label>
                <div class="col-sm-4">
                    <input  class="form-control" type="date" name="doj" required><span id="test"><b>! Please fill out field above</b></span>
                </div>
            </div>
            <div class="form-group text-center">
                <button type="button" class="btn btn-info"onclick="forgt(doj)">submit</button>
            </div>
            <div class="form-group text-center">
                <a href="forgot11.php">Try another way</a>
            </div>
        </form>

      </div>





      <script>
        var day;
        function forgt(date)
        {
            var datte = date.value;
            if(datte)
            {

                var datee = new Date(datte);
                var d = datee.getDate();
                var count = d/10;
                if(count<1)
                {
                    d = '0'+d;
                }
                //
                var m = datee.getMonth();
                var m = m+1;
                var coun = m/10;
                if(coun<1)
                {
                    m = '0'+m;
                }
                //document.getElementById("demo").innerHTML = m;
                var y = datee.getFullYear();
                //document.getElementById("demo").innerHTML= y+'-'+m+'-'+d;
                day =  y+'-'+m+'-'+d;
                var xtp = new XMLHttpRequest();
                xtp.onreadystatechange = function()
                {
                    if(this.readyState == 4 && this.status == 200)
                    {
                        document.getElementById("contain").innerHTML = this.responseText;
                    }
                };
              xtp.open("GET", "forgot1.php?data=" +day, true);
              xtp.send();
        }
        else{
            document.getElementById("test").style.display = 'inline-block';
        }
        }

        function setpassword(npass, cpass)
        {
          var xtp = new XMLHttpRequest();
          var newpass = npass.value;
          var conpass = cpass.value;
          xtp.onreadystatechange = function()
          {
              if(this.readyState == 4 && this.status == 200)
              {

                  document.getElementById("contain").innerHTML = this.responseText;
                  <?php
                  if(isset($_POST['btn2']))
                  {
                    ?>
                    //  document.getElementById("contain").innerHTML= <?php header('location:redir.html');?>
                  <?php
                  }
                   ?>

              }
          };
          xtp.open("POST", "forgot2.php", true);
          xtp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xtp.send("data="+newpass+"&date="+day);
        }
      </script>



    </body>
</html>
