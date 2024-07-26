<!DOCTYPE html>
<html>
<head>
	<title>appointment</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width , initial-scale=1">
	<link rel="icon" type="image/png" href="img/icon.png">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?famliy=Josefin+Sans&display=swap">
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<style type="text/css">
*{
	margin: 0;padding: 0;
	box-sizing: border-box;
	font-family: 'Josefin sans',sans-serif;
}
.img1{
	width: 100%;
	height: 200px;
}
header{
	width: 100%;
	height: 10vh;
	background-image:url('');
	background-repeat: no-repeat;
	background-size: 100% 100%;
}
.mainheader{
	width: 100%;
	height: 10px;
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
body{
	background: url('');
	background-repeat: no-repeat fixed;
	background-size: cover;
	margin-top: 50px;
	background-size:100%;
}
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

	</style>
</head>
<body >
	<header>
			<div class="mainheader">
				<div class="logo">
					<img class="img1"src=".\img\LOGO.png">
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
				<h2 class="text-center text-dark font-bold text-capitalize"> BOOK APPOINTMENT </h2>
				<br>
						<div class="container text-center " >
							<input type="text" name="name" class="form-control text-capitalize text" placeholder="Patient Name" required>
							<br>
							<input type="text" name="number" class="form-control text-capitalize text" placeholder="Contact No" required>
							<br>
							<input type="email" name="e_mail" class="form-control text-capitalize text" placeholder="E-Mail" required>
							<br>
							<input type="date" name="bdate" class="form-control text-capitalize text" placeholder="Date Of Birth" required>
							<br>
							<select required class="form-control text-capitalize text" name="location">
								<option selected="selected" disabled="disabled">Select hospital Location</option>
								<option value="nashik" >Nashik</option>
								<option value="South Mumbai-Mumbai Central">South Mumbai-Mumbai Central</option>
								<option value="North mumbai">North mumbai</option>
								<option value="rajkot">Rajkot</option>
								<option value="nagpur">Nagpur</option>
							</select>
							<br>
							<select required class="form-control text-capitalize text" name="department" >
								<option selected="selected" disabled="disabled">Select Department</option>
								<option value="Cardiology">Cardiology(heart Care)</option>
								<option value="Critical">Critical care</option>
								<option value="Hematology">Hematology</option>
								<option value="Urology">Urology</option>
								<option value="Orthopaedics">Orthopaedics(Bone And Spine Injury</option>
							</select>
							<br>
							<input type="date" name="appointd" class="form-control text-capitalize text" placeholder="Appointmant Date" required>
							<br>
							<input type="time" name="apptime" class="form-control text-capitalize text" placeholder="Appointmant Time" required>
							<br><br>
							<input type="submit" name="submit"class="btn btn-success bt-lg text-capitalize forbutton" value="submit">
							<br><br><br>
							<input type="reset" class="btn btn-danger bt-lg text-capitalize forbutton" value="reset">
							<br><br><br>
							
						</div>
				</div>
			</div>
		</div>
		
		</form>
</body>
</html>

<?php
	if(isset($_POST["submit"]))
	{
		$pastion_name=$_POST["name"];
		$contact_no=$_POST["number"];
		$email=$_POST["e_mail"];
		$birth_date=$_POST["bdate"];
		$hospital=$_POST["location"];
		$department=$_POST["department"];
		$appointmant_d=$_POST["appointd"];
		$appointmant_time=$_POST["apptime"];

		$con=mysqli_connect("localhost","root","","hospital_managment");
		$query=mysqli_query($con,"insert into appointment (`name`, `contact_no`, `e-mail`, `borth date`, `location`, `department`, `appointment date`, `appointment time`) values('$pastion_name','$contact_no','$email','$birth_date','$hospital','$department',
			'$appointmant_d','$appointmant_time')");

	 if($query)
		{
			echo "<script> alert('appointment submit') </script>"; 
		}
		else
		{
			echo "<script> alert('appointment not submit') </script>";
		}
	}
?>