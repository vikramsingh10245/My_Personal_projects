<?php
    $id = $_POST['id'];
    $fname = $_POST['firname'];
    $lname = $_POST['lasname'];
    $cont = $_POST['con'];
    $mail = $_POST['mail'];
    $add = $_POST['add'];
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    $con = mysqli_connect('localhost','root');
    mysqli_select_db($con,'carparking');


    $query = "UPDATE `operators` SET `firstname`='$fname',`lastname`='$lname',`contact`='$cont',`email`='$mail',`address`='$add',`username`='$uname',`password`='$pass' WHERE id = $id ";
    $res = mysqli_query($con,$query);
    if($res)
    {
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

    }
    else {
        echo "error";
    }


?>
