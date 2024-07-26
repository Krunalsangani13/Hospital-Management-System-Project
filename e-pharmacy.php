<html>
	<head>
		<title> e-pharmacy </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width , initial-scale=1">
		<link rel="stylesheet" href="./css/bootstrap.min.css">
		<link rel="icon" type="image/png" href="img/icon.png">
		<style type="text/css">
header{
	width: 100%;
	height: 15vh;
	background-image:url('');
	background-repeat: no-repeat;
	background-size: 100% 100%;
}
.mainheader{
	width: 100%;
	height: 100px;
	display: flex;
	font-variant:bold;
	justify-content: space-between;
	align-items: center;
}

.mainheader .logoimg{
	width: 250px;height: 120px;
	padding-left: 60px;
}
.mainheader nav{
	width:1200px;
	display:flex;
	justify-content: space-around;
	align-items:center;
	padding-right: 100px;
}
.mainheader nav a{
	text-decoration: none;
	color: black;
	text-transform: uppercase;

}
		</style>
	</head>
	<body>
		<header>
			<div class="mainheader">
				<div class="logo">
					<img src=".\img\Logo.png">
				</div>
				<nav>
					 <a href="home.php">home</a>
					 <a href="Covid-19.php">Covid-19</a>
					 <a href="department.php">Department</a>
					 <a href="contect us.php">Contact us</a>
					 <a href="appointment.php">Appointment</a>
					 <a href="e-pharmacy.php">e-pharmacy</a>
				</nav>
			</div>
		</header>
		<section>
	<div class="container-fluid">
		<h1 class="text-body text-center text-capitalize pt-5">e-pharmacy</h1>
		<i class="bi bi-cart" style="font-size:36px"></i>
		<hr class="w-25 mx-auto pt-5">
		<div class="row mb-5 container-fluid">
			<div class="col">
				<h1>Covid test kit</h1>
				<img src="img/coviself.jfif" class="img-fluid"><br><br><br>
			
				<button class="btn bg-primary text-white" data-toggle="modal" data-target="#myModal">Bay now</button><br><br>
				<a href="coviself_read.php" class="text-dark">read more</a><br>
			</div>

				<div class="col">
						<h1>covid essentials </h1>
						<img src="./img/essentials.png" ><br>
						<a href="covid essentials.php"><button class="btn bg-primary text-white" >show</button></a>
				</div>
		</div>
<form method="POST">
		<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-header">
          <h4 class="modal-title">Payment</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
          <div class="modal-body">
          <div class="container">
			  <h2>your Payment</h2>
			  <form action="/action_page.php">
				<div class="form-group" name="payment">
				  <input type="radio" value="POD" name="payment">:Pay On Deliver<br>
				  <input type="radio" value="Cradit" name="payment">:Pay On cradit card<br>
				  <input type="radio" value="dabit" name="payment">:Pay On Dabit card<br>
				  <input type="radio" value="online" name="payment">:Pay On bank/online<br>
				</div>
				<div class="form-group form-check">
				  <label class="form-check-label">
					<input class="form-check-input" type="checkbox" name="remember"> Remember me
				  </label>
				</div>
				<button type="submit" name="submit" class="btn btn-primary" onclick="myFunction()">Submit</button>
			  </form>
			</div>
        </div>
         <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
		</div>
		</div>
</form>
<script>
			function myFunction()
			{
				alert("Payment success");
			}
		</script>
	</div>
</section>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>	
	</body>
</html> 2