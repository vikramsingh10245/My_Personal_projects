<!DOCTYPE html>
<html language="en">
    <head>
        <title>Enquiry</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body>
      <div class="container">
<?php
    date_default_timezone_set("Asia/Kolkata");
    $datee = date("Y-m-d");
    $data = $_GET['data'];
    $con = mysqli_connect('localhost','root');
    mysqli_select_db($con,'carparking');
    if($data=='check1')
    {
        $q = "select * from checkinout where status = 'checkedin'";
        $res = mysqli_query($con,$q);
        $num = mysqli_num_rows($res);
        echo "<table class='table table-bordered'>";
          echo "<thead>";
            echo "<tr class='table-primary'>";
              echo "<th>Sno.</th>";
              echo "<th>Car Number</th>";
              echo "<th>Date</th>";
              echo "<th>Slot</th>";
              echo "<th>Floor</th>";
            echo "</tr>";
          echo "</thead>";
          echo "<tbody>";
        $sno = 1;
        for($i=0; $i<$num; $i++)
        {
            $row = mysqli_fetch_assoc($res);
            echo "<tr>";
            echo "<td>".$sno."</td>";
            echo "<td>".$row['carno']."</td>";
            echo "<td>".$row['date']."</td>";
            echo "<td>".$row['slotid']."</td>";
            echo "<td>".$row['floorid']."</td>";
            $sno = $sno + 1;
            echo "</tr>";
        }
        echo "</tbody>";
      echo "</table>";

    }
    if($data=='check2')
    {
          $qu = "select * from checkinout where date = '$datee'";
          $resul = mysqli_query($con,$qu);
          $n = mysqli_num_rows($resul);
          if($n>0)
          {
              echo "<table class='table table-bordered'>";
                echo "<thead>";
                  echo "<tr class='table-primary'>";
                    echo "<th>Sno.</th>";
                    echo "<th>Car Number</th>";
                    echo "<th>Date</th>";
                    echo "<th>Slot</th>";
                    echo "<th>Floor</th>";
                  echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
              $sno = 1;
              for($i=0; $i<$n; $i++)
              {
                  $row = mysqli_fetch_assoc($resul);
                  echo "<tr>";
                  echo "<td>".$sno."</td>";
                  echo "<td>".$row['carno']."</td>";
                  echo "<td>".$row['date']."</td>";
                  echo "<td>".$row['slotid']."</td>";
                  echo "<td>".$row['floorid']."</td>";
                  $sno = $sno + 1;
                  echo "</tr>";
              }
              echo "</tbody>";
            echo "</table>";

        }
        else {
              echo "<h2><center>"."No cars parked today"."</center></h2>";
        }
    }
?>
</div>
</body>
</html>
