<html>
	<head>
	<title>contact us</title>
	<link rel="icon" type="image/png" href="img/icon.png">
	<style type="text/css">
header{
	width: 100%;
	height: 15vh;
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
	<body >
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
	<form method="POST">
	<center>
	<div class="contact form">
	<table class="contact">
	<tr><td><h1>Contact us</h1></td></tr>
	<tr><td>Hospital Location:-
	<select required class="contact-f" name="city">
	<option selected="selected" disabled="disabled" name="city">select location </option>
	<option value="nashik">Nashik</option>
	<option value="south-mumbai">South Mumbai-Mumbai Central</option>
	<option value="north-mumbai">North mumbai-Mira Road</option>
	<option value="rajkot">Rajkot</option>
	<option value="nagpur-super">Nagpur-Super Speciality</option>
	<option value="nagpur-heart">Nagpur-Heart Speciality</option>
	</select></td></tr>
	</table>
	<input type="submit" name="submit" value="click">
	</center>
	</form>
	</body>
</html>
<?php
	if(isset($_POST["submit"]))
	{
	if(isset($_POST["city"]))
	{
		$city=$_POST["city"];
		//echo$city;
		if($city=="nashik")
		{
			?>
			<H1><center>
			<?php
			echo"nashik";
			echo "Wani House, Near Wadala Naka,Mumbai-Agra Road,Nashik-422001<br/>";
			echo "Telephone:= 0253-6624444 <br/>";
			echo "Telephone:= 0253-6624100";
			?>
			</center>
			</H1>
			<?php
		}
		else if($city=="south-mumbai")
		{
			?>
			<h1><center>
			<?php
			
			echo" mumbai<br/>";
			echo "wockhardt Hospital,South Mumbai A New Age Hospital 1877,Dr.Anand Rao Nair
			 Road,Near Agripada police Station,Mumbai Central(E),Mumbai-400 011 <br/>";
			echo "Telephone:= 022-61784444 <br/>";
			?>
			</center>
			</h1>
			<?php
			
		}
		else if($city=="north-mumbai")
		{
			?>
			<h1><center>
			<?php
			
			echo" north-mumbai<br/>";
			echo "The Umrao IMSR Near Railway Station, Mira Road(E) 
			Dist. Thane,Mumbai Maharashtra,India-401107<br/>";
			echo "Telephone:= 022-28556000 <br/>";
			echo "8108181081";
			?>
			</center>
			</h1>
			<?php
			
		}
		else if($city=="rajkot")
		{
			?>
			<h1><center>
			<?php
			
			echo" Rajkot<br/>";
			echo "Kalawad Road ,Rajkot-360 007<br/>";
			echo "Telephone- 0281-6694444 <br/>";
			echo "Phone No- 7405174051";
			?>
			</center></h1>
			<?php
		}
		else if($city=="nagpur-super")
		{
			?>
			<h1><center>
			<?php
			
			echo" nagpur-super<br/>";
			echo "1643,North Ambazari Road,Nagpur-440033<br/>";
			echo "Telephone- 0712-6624100 <br/>";
			?>
			</center>
			</h1>
			<?php
			
		}
		else if($city=="nagpur-heart")
		{
			?>
			<h1><center>
			<?php
			
			echo" nagpur-heart <br/>";
			echo "27,Corporation Colony,North Ambazari Road,Nagpur-440033<br/>";
			echo "Telephone- 0712-6655131 <br/>";
			echo "Telephone- 0712-6624400 ";
			?>
			</center>
			</h1>
			<?php
		}
	}
	}
?>