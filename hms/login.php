<html>
	<head>
		<title> login </title>
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
	
		<body style="background-color:#dde0d7;">
		<form method="post">
			<br><br><br>
			<div class="container">
				<div class="row">
			<div class="col-sm-4 offset-4 divup">
				<div height="40px" width="100px" class="divdown">
				<br>
				<h2 class="text-center text-dark font-bold text-capitalize"> welcome </h2>
				<br><br>
					<div class="container text-center">
						<input type="text" class="form-control text" name="e_mail" placeholder="E-MAIL" required>
						<br><br>
						<input type="password" class="form-control text" name="password" placeholder="PASSWORD" required>
						<br><br><br>
						<input type="submit" name="submit" value="login" class="btn btn-success bt-lg forbutton">
						<br><br><br>
						<p>Don't Have an Account? &nbsp;<a href="ragistration.php" class="text-dark font-weight-bold">Sing Up</a></p>
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
		$email=$_POST["e_mail"];
		$password=$_POST["password"];
		$con=mysqli_connect("localhost","root","","hospital_managment");
		$query=mysqli_query($con,"select * from registration where e_mail='$email' AND password='$password'");
		$n=mysqli_num_rows($query);
		if($n>0)
		{
			$row=mysqli_fetch_array($query);
			$id=$row["id"];
			session_start();
			$_SESSION["id"]=$id;
			header("location:home.php");
			
		}
	}
?>