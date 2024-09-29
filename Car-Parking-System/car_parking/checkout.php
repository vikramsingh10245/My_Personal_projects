<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Checkout</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">

  <style>
  .jumbotron {
    background-color: #007BFF;
    color: #fff;
    padding: 50px 25px;
	height:auto;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo-small {
    color: #f4511e;
    font-size: 50px;
  }
  .logo {
    color: #f4511e;
    font-size: 200px;
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
  }
  </style>
</head>
<body>

<div class="jumbotron text-center">
  <h1 style="font-family: 'Bree Serif', serif; font-size:80px;">CAR PARKING</h1>
  <h2>Easily Manages You Parking</h2>
  <h2>Check Out Entry</h2>

</div>

<!-- Container (About Section) -->
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-8">


		<fieldset>
			<legend>Check Out</legend>
			<label>Car No. </legend>
			<input type="text" id="txtcarno" class="form-control" />
			<br/>
			<button type="buttton" class="btn btn-danger" onclick="show_checkin_details('checkin_details');">Done</button>

		</fieldset>

    </div>
    <div class="col-sm-4">
      <img src="car1.jpg" class="img-thumbnail" />
    </div>
  </div>
</div>

<div class="container-fluid bg-grey" id="checkin_details" style="display:none">
  <div class="row">
    <div class="col-sm-4">
      <img src="car2.png" class="img-rounded" />
    </div>
    <div class="col-sm-8" id="car_detail">

    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div class="container-fluid text-center" style="border-top:1px outset grey;height:auto; background-color:#2E2E2E;">
  <h4 style="color:white;">Copyright @ Car Parks</h4>
  <h4></h4>
</div>


<script>
function show_checkin_details(a)
{
	document.getElementById(a).style.display="block";
	window.scrollBy(0,1000);
	var carno = document.getElementById('txtcarno').value;
	var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function()
		{
			if (this.readyState == 4 && this.status == 200)
			{
				document.getElementById('car_detail').innerHTML =
				this.responseText;
			}
		};
		xhttp.open("GET", "show_checkin_details.php?car="+carno, true);
		xhttp.send();

}

function update_status()
{

		var carno = document.getElementById('carno').value;
		var date_t = document.getElementById('date').value;
		var intime=document.getElementById('intime').value;
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function()
		{
			if (this.readyState == 4 && this.status == 200)
			{
				document.getElementById('car_detail').innerHTML =
				this.responseText;
			}
		};
		xhttp.open("GET", "update_checkout.php?car="+carno+"&date="+date_t+"&intime="+intime, true);
		xhttp.send();

}

</script>
</body>
</html>
