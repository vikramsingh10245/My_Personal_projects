<?php
session_start();

$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'carparking');

$outdate = date("d/m/Y");
$outtime = date("h.i.sa");
$user = $_SESSION['name'];

$q = "update login set logoutdate = '$outdate' where username = '$user'";
$que = "update login set logouttime = '$outtime' where username = '$user'";

$result = mysqli_query($con,$q);
$res = mysqli_query($con,$que);
session_unset();
if($result)
{
    if($res)
    {
        header('location:logg.php');
    }
}

?>
