<html>
	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width , initial-scale=1">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?famliy=Josefin+Sans&display=swap">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="icon" type="image/png" href="img/icon.png">
		<style>
		  .carousel-inner img {
				width: 100%;
				height: 100%;
			}
	  </style>

		<style type="text/css">
			*{
	margin: 0;padding: 0;
	box-sizing: border-box;
	font-family: 'Josefin sans',sans-serif;
}

.img1{
	width: 90%;
	height: 210px;
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
					 <a href="#">home</a>
					 <a href="Covid-19.php">Covid-19</a>
					 <a href="department.php">Department</a>
					 <a href="contect us.php">Contact us</a>
					 <a href="appointment.php">Appointment</a>
					 <a href="e-pharmacy.php">e-pharmacy</a>
					 
				</nav>
			</div>

		<div id="demo" class="carousel slide pt-5 " data-ride="carousel">
		  <ul class="carousel-indicators">
		    <li data-target="#demo" data-slide-to="0" class="active"></li>
		    <li data-target="#demo" data-slide-to="1"></li>
		  </ul>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src="img/slider-image1.jpg" alt="Los Angeles" width="1000" height="500">
		      <div class="carousel-caption text-black">
		        <h3 class="text-dark">We Are Here For Your Care</h3>
				<p class="text-dark">Best Digital Madcare Service</p>
				<a href="feedback.php"><button class="btn bg-primary text-white"> Feedback</button></a>
		      </div>   
		    </div>
		    
		    <div class="carousel-item">
		      <img src="img/slider-image2.jpg" alt="Chicago" width="1000" height="500">
		      <div class="carousel-caption">
		      </div>   
		    </div>
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#demo" data-slide="prev">
		    <span class="carousel-control-prev-icon"></span>
		  </a>
		  <a class="carousel-control-next" href="#demo" data-slide="next">
		    <span class="carousel-control-next-icon"></span>
		  </a>
		</div>
	</header>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		
	</body>
</html>