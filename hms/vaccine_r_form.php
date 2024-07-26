<html>
<head>
	<title>CO-WIN REGESTRATION</title>
	<link rel="stylesheet" type="text/css" href=".\css/vaccine_r_style.css">
	<link rel="icon" type="image/png" href="img/icon.png">
</head>
<body >
		<a href="vaccin.php" class="home">BACK TO</a><br>
		<center>
		<div class="box"></div>
		<div class="regestration"></div>
		<form method="POST" action="">
			<table class="table">
				<tr><td><h1>Regestration Form</h1></td></tr>
				<tr><td>First Name</td><td>:<input type="text" name="fname" placeholder="first name" class="fname" required/><br></td></tr>
				<tr><td>Last Name</td><td>:<input type="text" name="lname" placeholder="last name" class="lname" required><br></td></tr>
				<tr><td>Date Of Birth</td><td>:<input type="date" name="bdate" class="bdate" ><br></td></tr>
				<tr><td>Age</td><td>:<input type="age" name="age" class="age" placeholder="age" required><br></td></tr>
				<tr><td>Id No</td><td>:<input type="text" name="num" min="10" max="10" placeholder="id No" required></td></tr>
				<tr><td>Gender</td><td>:<input type="radio" name="gender" value="female" class="Rfemale">Female</td><td><input type="radio" name="gender" value="male" class="Rmale">Male</td></tr>
				<tr><td>E-Mail</td><td>:<input type="email" name="email" placeholder="E-Mail" class="email" ></td></tr>
				<tr><td>Phone no</td><td>:<input type="text" name="phone" placeholder="Phone no" class="pno" required=""></td></tr>
				<tr><td>Addres</td><td>:<input type="text" name="addres" placeholder="Addres" required=""></td></tr>
				<tr><td><h1>Medical History:</h1></td></tr>
				<tr><td><p>have you been diagnosed with covid-19!</p></td></tr>
				<tr><td><input type="radio" name="diagnosed" value="yes" class="radio-y">Yes</td><td><input type="radio" name="diagnosed" 
					value="no" class="radio-n">No</td></tr><br>
				<tr><td><p>Please Check All Symptome happne:</p></td></tr>
				<tr><td><input type="Checkbox" value="Loss Ofbtaste/Smell" name="Symptome">Loss Ofbtaste/Smell</td><td><input type="Checkbox" value="Difficulty Breathing" name="Symptome">Difficulty Breathing</td><td><input type="Checkbox" value="Cough" name="Symptome">Cough</td><td><input type="Checkbox" value="Runny Nose" name="Symptome">Runny Nose</td></tr><tr><td><input type="Checkbox" value="Body Aches" name="Symptome">Body Aches</td> <td><input type="Checkbox" value="Sore Throat" name="Symptome">Sore Throat</td></tr>
				<tr><td><select required class="contact-f" name="vaccin">
						<option selected disabled>Select Your vaccin</option>
						<option value="Sputnik-v"> Sputnik-v </option>
						<option value="COVAXIN"> COVAXIN </option>
						<option value="covishield"> covishield </option>
						<option value="pfizer"> pfizer </option>
						</select></td></tr>
						
			</table><br>
		<input type="submit" name="submit" value="submit" class="btn-submit"><input type="reset" name="cancel" value="reset" class="btn-cancel">
	</form>
</body>
</html>
<?php
	if(isset($_POST["submit"]))
	{
		$first_name=$_POST["fname"];
		$last_name=$_POST["lname"];
		$birth_date=$_POST["bdate"];
		$age=$_POST["age"];
		$id_no=$_POST["num"];
		$gender=$_POST["gender"];
		$e_mail=$_POST["email"];
		$phone=$_POST["phone"];
		$addres=$_POST["addres"];
		$diagnosed=$_POST["diagnosed"];
		$symptome=$_POST["Symptome"];
		$vaccin=$_POST["vaccin"]; 
		
		$con=mysqli_connect("localhost","root","","hospital_managment");
		$query=mysqli_query($con,"insert into vaccine_r (`f_name`, `l_name`, `date of birth`, `age`, `id no`, `gender`, `e-mail`, `phone no`, `addres`, `covid diagnosed`, `symptome`, `vaccin`) values ('$first_name','$last_name','$birth_date','$age','$id_no','$gender','$e_mail','$phone','$addres','$diagnosed','$symptome','$vaccin')");

		if($query)
		{
			echo "<script> alert('submit vaccin form') </script>";
		}
		else
		{
			echo "<script> alert('not submit vaccin form') </script>";
		}
	}
?>