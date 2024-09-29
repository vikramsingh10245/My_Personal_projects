<?php
    $id = $_GET['iden'];
    $con = mysqli_connect('localhost','root');
    mysqli_select_db($con,'carparking');

    $q = "select * from operators where id = $id ";
    $result = mysqli_query($con,$q);
    $num = mysqli_num_rows($result);
    if($num)
    {
        $row = mysqli_fetch_assoc($result);
        echo json_encode($row);
      //  echo $row['contact'];
      //  echo $row['email'];
      //  echo $row['address'];
      //  echo $row['username'];
      //  echo $row['password'];
    }
?>
