<?php
    session_start();
    $newpass = $_POST['data'];
    $date = $_POST['date'];
    $con = mysqli_connect('localhost','root');
    mysqli_select_db($con,'carparking');

    $q = "update operators set password = '$newpass' where dateofjoin = '$date'";
    $res = mysqli_query($con,$q);
    if($res)
    {
        echo "<center>Password successfully changed</center>";

    }
    else {
        echo "<center>Password cannot be changed</center>";
    }

?>
