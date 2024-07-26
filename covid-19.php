<html>
<head>
	<title>Covid-19</title>
	<link>
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

body{
	background: url('');
	background-repeat: no-repeat fixed;
	background-size: cover;
	margin-top: 15px;
	background-size:100%;
}

main{
	width: 100%;
	height: 100vh;
	display: flex;
	justify-content: space-between;
	align-items: center;
}

main.left-img .left-btn{
	padding-left: 100px;
}
main.right-btn{
	padding-right: 150px;
}

.left-btn{
	margin-left: 10px;
	display: inline-block;
	padding: 15px 25px;
	font-size: 25px;
	cursor: pointer;
	text-align: justify;
	outline: none;
	color: green;
	background-color: #FFF;
	border: none;
	border-radius: 15px;
	box-shadow: 0 5px #999;
}

.right-btn{
	margin-right: 50px;
	display: inline-block;
	padding: 15px 25px;
	font-size: 25px;
	cursor: pointer;
	text-align: justify;
	outline: none;
	color: green;
	background-color: #FFF;
	border: none;
	border-radius: 15px;
	box-shadow: 0 5px #999;
}

.left-btn:hover{
	background-color: #0012A6;
	color: white;
}

.right-btn:hover{
	background-color: #0012A6;
	color: white;
}

.left-btn:active{
	background-color: #0012A6;
	box-shadow: 0 5px #666;
	transform: translateY(4px);
}

.right-btn:active{
	background-color: #0012A6;
	box-shadow: 10 50px #666;
	transform: translateY(4px);
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
	<main>
	<img src=".\img\coronavirus.png" class="left-img">
	<h1>Covid-19</h1><a href="covid.php"><input type="submit" value="click" class="left-btn"></a><br><br>
	<img src=".\img\co-win1.png" class="right-img">
	<h1>Covid-19 vaccine</h1><br><a href="vaccin.php"><input type="submit" value="registration" class="right-btn">
</main>
</body>
</html>