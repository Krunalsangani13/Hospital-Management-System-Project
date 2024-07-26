<html>
	<head>
		<title> ragistration </title>
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
			
		</style>
	</head>
	
		<body >
		<form method="post">
			<br><br><br>
			<div class="container">
				<div class="row">
			<div class="col-sm-4 offset-4 divup">
				<div height="40px" width="100px" class="divdown">
				<br>
				<h2 class="text-center text-dark font-bold text-capitalize"> ragistration </h2>
				<br><br>
						<div class="container text-center">
							<input type="text" name="fname" class="form-control text-capitalize text" placeholder="first name">
							<br><br>
							<input type="text" name="lname" class="form-control text-capitalize text" placeholder="last name">
							<br><br>
							<input type="text" name="e_mail" class="form-control text-capitalize text" placeholder="e-mail" required>
							<br><br>
							<input type="password" name="password" class="form-control text-capitalize text" placeholder="password" required>
							<br><br><br>
							<input type="submit" class="btn btn-success bt-lg text-capitalize forbutton" name="submit">
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
		$fname=$_POST["fname"];
		$lname=$_POST["lname"];
		$email=$_POST["e_mail"];
		$password=$_POST["password"];
		$con=mysqli_connect("localhost","root","","hospital_managment");
		$query=mysqli_query($con,"insert into admin_registration(`a_f_name`, `a_l_name`, `a_e_mail`, `a_password`) 
			values('$fname','$lname','$email','$password')");

		print_r($query);
		if($query)
		{
			echo "<script> alert('registration submit') </script>";
		}
		else
		{
			echo "<script> alert('registration not submit') </script>";
		}
	}
?>