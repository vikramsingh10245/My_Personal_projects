<?php
    //session_start();
    $newpass = $_POST['new'];
    $petname = $_POST['pname'];
    $conpass = $_POST['con'];
    if($newpass === $conpass)
    {

        $con = mysqli_connect('localhost','root');
        mysqli_select_db($con,'carparking');

        $q = "update operators set password = '$newpass' where petname = '$petname'";
        $res = mysqli_query($con,$q);
        if($res)
        {
            echo "<center>Password successfully changed</center>";

        }
        else {
            echo "<center>Password change failed</center>";
          }

           mysqli_close($con);
    }
    else {

    }

?>
