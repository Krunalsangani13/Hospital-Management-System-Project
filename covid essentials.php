<html>
	<head>
		<title>essentials</title>
	</head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width , initial-scale=1">
		<link rel="stylesheet" href="./css/bootstrap.min.css">
		<link rel="icon" type="image/png" href="img/icon.png">
	<body>
		<section>
			<div class="container-fluid">
			<h1 class="text-body text-center text-capitalize pt-5">covid essentials's </h1>
			<hr class="w-25 mx-auto pt-5">

				<div class="row mb-5 container-fluid">
						<div  class="col">
							<h3>Choicemmed Finger Tip Pulse Oximeter</h3>
							<img src="./img/Oximeter.jpg"><br>
							<h4>₹ 1,575.00 </h4>
							<button class="btn bg-primary text-white" data-toggle="modal" data-target="#myModal">Bay now</button>
						</div>

						<div  class="col">
							<h3>Choicemmed Finger Tip Pulse Oximeter</h3>
							<img src="./img/body_Thermometer.jpg">
							<h4> ₹ 1,575.00</h4>
							<button class="btn bg-primary text-white" data-toggle="modal" data-target="#myModal">Bay now </button>
						</div>
					</div>
					
					<div class="row mb-5 container-fluid">
						<div class="col">
							<h3> Sahyog Wellness Digital Thermometer </h3>
							<img src="./img/Thermometer.jpg">
							<h4>₹ 110.24</h4>
							<button class="btn bg-primary text-white" data-toggle="modal" data-target="#myModal">Bay now </button>
						</div>

						<div class="col">
							<h3> Cura Home Sanitizer 500 ml </h3>
							<img src="./img/Sanitizer.jpg">
							<h4>₹ 250.00</h4>
							<button class="btn bg-primary text-white" data-toggle="modal" data-target="#myModal">Bay now </button>
						</div>
					</div>

						<div class="col text-center mt-5 ">
							<h3> Oxygen Cylinder </h3>
							<img src="./img/Oxygen_cylinder.jpg">
							<h4> ₹ 449.00</h4>
							<button class="btn bg-primary text-white" data-toggle="modal" data-target="#myModal">Bay now </button>
						</div>
					</div>

					<form method="POST">
					<div class="modal fade" id="myModal">
				    <div class="modal-dialog modal-dialog-centered">
				      <div class="modal-content">
				      
				        <!-- Modal Header -->
				        <div class="modal-header">
				          <h4 class="modal-title">Payment</h4>
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				        </div>
				        
				        <!-- Modal body -->
				        <div class="modal-body">
				          <div class="container">
							  <h2>your Payment</h2>
							  <form action="/action_page.php">
								<div class="form-group">
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
				        
				        <!-- Modal footer -->
				        <div class="modal-footer">
				          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				        </div>
						</div>
						</div>

						<script>
							function myFunction()
							{
								alert("Payment success");
							}
						</script>
					</div>
				</div>
	</section>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		
	</body>
</html>


