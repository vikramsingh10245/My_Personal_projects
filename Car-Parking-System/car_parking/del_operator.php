<!DOCTYPE html>
<html lang="en">
<head>
  <title>Delete Record</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">

  <style>
      #header
      {
          background-color:#007BFF;
          color:white;
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
  <div id="header" class="jumbotron text-center">
      <h1 style="font-family: 'Bree Serif', serif; font-size:70px;">CAR PARKING SYSTEM</h1>
      <h2 style="font-size:40px;">Delete Operator</h2>
  </div>
  <nav class="navbar navbar-inverse" style="background-color:#343A40; margin-bottom:50px; margin-top:-30px;">
      <div class="container-fluid">
          <ul class="nav navbar-nav">
              <li><a href="home3.php">Home</a></li>
              <li><a href="regis.php">Add Operator</a></li>
              <li><a href="del_operator.php">Delete Operator</a></li>
              <li><a href="car.html">Checkin</a></li>
              <li><a href="checkout.php">Checkout</a></li>
              <li><a href="enquiry">Enquiry</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
              <li><a href="#" data-toggle="popover" data-placement="bottom" title="Popover Header" data-content="some content inside popover" >Profile</a></li>
              <li><a href="logout.php">Logout</a></li>
          </ul>
      </div>
   </nav>
  <div class="container-fluid" id="demo">
    <?php
    $con = mysqli_connect('localhost','root');
    mysqli_select_db($con,'carparking');

    $q = "SELECT * FROM `operators` ORDER BY `id` ASC";
    $res = mysqli_query($con,$q);
    $num = mysqli_num_rows($res);
    echo "<table class='table table-bordered'>";
      echo "<thead>";
        echo "<tr class='info'>";
          echo "<th>Sno.</th>";
          echo "<th>Id</th>";
          echo "<th>Firstname</th>";
          echo "<th>Lastname</th>";
          echo "<th>Contact</th>";
          echo "<th>Email</th>";
          echo "<th>Address</th>";
          echo "<th>Username</th>";
          echo "<th>Password</th>";
          echo "<th>Gender</th>";
          echo "<th>DOB</th>";
          echo "<th>Date of Join</th>";
          echo "<th>Petname</th>";
          echo "<th>Delete Action</th>";
          echo "<th>Update Action</th>";
        echo "</tr>";
      echo "</thead>";
      echo "<tbody>";
    $sno = 1;
    for($i=0; $i<$num; $i++)
    {
        $row = mysqli_fetch_assoc($res);
            echo "<tr>";
                echo "<td>".$sno."</td>";
                echo "<td>".$row['id']."</td>";
                $iden = $row['id'];
                echo "<td>".$row['firstname']."</td>";
                echo "<td>".$row['lastname']."</td>";
                echo "<td>".$row['contact']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['address']."</td>";
                echo "<td>".$row['username']."</td>";
                echo "<td>".$row['password']."</td>";
                echo "<td>".$row['gender']."</td>";
                echo "<td>".$row['DOB']."</td>";
                echo "<td>".$row['dateofjoin']."</td>";
                echo "<td>".$row['petname']."</td>";


                $sno = $sno + 1;
                echo "<td><button class='btn btn-danger' onclick='change($iden)'>Delete</button></td>";
                echo "<td><button type='button' name='btn' class='btn btn-warning' data-toggle='modal' data-target='#mymodal' onclick='modify($iden)'>Update</button></td>";
            echo "</tr>";
    }
      echo "</tbody>";
    echo "</table>";
?>



  </div>

  <div id="mymodal" class="modal fade" role="dialog">
      <div class="modal-dialog">
          <!--modal content-->
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h1>Update Operation</h1>
              </div>
              <div class="modal-body">
                  <form action="update1.php" method="POST">
                      <div class="form-group">
                          <label for="ifname">Firstname</label>
                          <input type="text" class="form-control" id="ifname" name="name">
                      </div>
                      <div class="form-group">
                          <label for="ilname">Lastname</label>
                          <input type="text" class="form-control" id="ilname" name="name">
                      </div>
                      <div class="form-group">
                          <label for="icontact">Contact</label>
                          <input type="text" class="form-control" id="icontact" name="contact">
                      </div>
                      <div class="form-group">
                          <label for="imail">Email</label>
                          <input type="email" class="form-control" id="imail" name="mail">
                      </div>
                      <div class="form-group">
                          <label for="iaddress">Address</label>
                          <input type="text" class="form-control" id="iaddress" name="address">
                      </div>
                      <div class="form-group">
                          <label for="iuname">Username</label>
                          <input type="text" class="form-control" id="iuname" name="uname">
                      </div>
                      <div class="form-group">
                          <label for="ipass">Password</label>
                          <input type="text" class="form-control" id="ipass" name="pass">
                      </div>
                  </form>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-info" onclick="up_date(<?php echo $iden ?>);">Save</button>
                  <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
              </div>
          </div>
      </div>
  </div>

  <h1 id="head">
  </h1>
<!--<div style="border:1px solid black;" id="demons">
  how are u
</div>-->
<div id="check_function_readata">
</div>

<div class="container-fluid text-center footer">
    Copyright @ CAR PARKS
</div>

<script>
    function change(a)
    {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function()
        {
            if(this.readyState == 4 && this.status == 200)
            {
                document.getElementById("demo").innerHTML = this.responseText;
            }
        };

        var con;
        con = confirm("Are you sure you want to delete this operator ?");
        if(con == true)
        {
            xhttp.open("GET","del.php?data="+a,true);
            xhttp.send();
        }
    }

    function modify(id)//to set values in the modal
    {
        var xhtp = new XMLHttpRequest();
        xhtp.onreadystatechange = function()
        {
            if(this.readyState == 4 && this.status == 200)
            {

                var user = JSON.parse(this.responseText);//to convert json received from server to object
                document.getElementById("ifname").value = user.firstname;
                document.getElementById("ilname").value = user.lastname;
                document.getElementById("icontact").value = user.contact;
                document.getElementById("imail").value = user.email;
                document.getElementById("iaddress").value = user.address;
                document.getElementById("iuname").value = user.username;
                document.getElementById("ipass").value = user.password;
            }
        };
        xhtp.open("GET","update.php?iden="+id,true);
        xhtp.send();
    }

    function up_date(ident)
    {
        var xtp = new XMLHttpRequest();
        var firname = document.getElementById("ifname").value;
        var lasname = document.getElementById("ilname").value;
        var con = document.getElementById("icontact").value;
        var mail = document.getElementById("imail").value;
        var add = document.getElementById("iaddress").value;
        var uname = document.getElementById("iuname").value;
        var pass = document.getElementById("ipass").value;
        //document.getElementById("head").innerHTML = typeof(con);
        xtp.onreadystatechange = function()
        {
            if(this.readyState == 4 && this.status == 200)
            {
                $('#mymodal').modal("hide");
                document.getElementById("demo").innerHTML = this.responseText;
            }
        };
        xtp.open("POST", "update1.php", true);
        xtp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xtp.send("id="+ident+ "&firname="+firname+ "&lasname="+lasname+ "&con="+con+ "&mail="+mail+ "&add="+add+ "&uname="+uname+ "&pass="+pass);
    }


</script>


</body>
</html>
