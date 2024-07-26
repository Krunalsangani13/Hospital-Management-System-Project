<html>
	<head>
		<title> Feedback </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width , initial-scale=1">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?famliy=Josefin+Sans&display=swap">
		<link rel="stylesheet" href="./css/bootstrap.min.css">
		<link rel="icon" type="image/png" href="img/icon.png">

		<style>
			.divup
			{
				border:1px solid white;
				border-radius:20px;;
				box-shadow:-10px -10px 15px white;
			}
			.divdown
			{
				border-top:1px solid white;
				border-radius:20px;
				background-color:#dde0d7;
				box-shadow:5px 9px 15px #888888;
				margin-left:-17px ;
				margin-right:-18px;
			}
			.text
			{
				border-color:transparent;
				border-bottom:1px solid black;
				background-color:#dde0d7;
			}
			.forbutton
			{
				border-right:1px solid #dde0d7;
				border-bottom:1px solid #dde0d7;
				box-shadow:5px 5px 5px #888888;
				border-radius:40px;
				width:89%;
			}

			*{
				margin: 0;padding: 0;
				box-sizing: border-box;
				font-family: 'Josefin sans',sans-serif;
			}

			header{
				width: 100%;
				height: 25vh;
				background-image:url('');
				background-repeat: no-repeat;
				background-size: 100% 100%;
			}

			.img1{
					width: 100%;
					height: 200px;
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
					<img class="img1" src=".\img\LOGO.png">
				</div>

				<nav>
					 <a href="home.php">home</a>
					 <a href="Covid-19.php">Covid-19</a>
					 <a href="department.php">Department</a>
					 <a href="contect us.php">Contact us</a>
					 <a href="appointment.php">Appointment</a>
					 <a href="e-pharmacy.php">E-pharmacy</a>
				</nav>
			</div>
		</header>

			<body style="background-color:white;">
		<form method="post">
			<br><br><br>
			<div class="container">
				<div class="row">
			<div class="col-sm-4 offset-4 divup">
				<div height="40px" width="100px" class="divdown">
				<br>
				<h2 class="text-center text-dark font-bold text-capitalize"> Feedback </h2>
				<br><br>
					<div class="container text-center">
						<input type="text" class="form-control text" name="name" placeholder="Your Name">
						<br>
						<input type="text" class="form-control text" name="e-mail" placeholder="E-mail" required>
						<br>
						<input type="number" class="form-control text" name="Phone_num" placeholder="Phone" required>
						<br><br>
						<input type="text" class="form-control text" name="description" placeholder="Description">
						<br>
						<input type="submit" name="submit" value="login" class="btn btn-success bt-lg forbutton">
						<br><br>
					</div>
				</div>
			</div>
		</div>
		
		</form>
		</body>
</html>

<?php
	if (isset($_POST["submit"]))
	 {
		$name=$_POST["name"];
		$email=$_POST["e-mail"];
		$phone=$_POST["Phone_num"];
		$description=$_POST["description"];

		$con=mysqli_connect("localhost","root","","hospital_managment");
		$query=mysqli_query($con,"insert into `feedback`(`name`, `e-mail`, `Phone`, `description`) VALUES('$name','$email','$phone',
			'$description')");

		
		if($query)
		{
			echo "<script> alert('submited feedback') </script>";
		}
		else
		{
			echo "<script> alert('feedback not submit') </script>";
		}
	}

?>