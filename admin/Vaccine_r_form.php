<html>
<?php include("header.php"); ?>
	<head>
		<title>
			show appointment db
		</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width , initial-scale=1">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?famliy=Josefin+Sans&display=swap">
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="icon" type="image/png" href="img/icon.png">
	</head>
	<body>
		<div class="main-content" >
					<div class="wrap-content container-fluid" id="container">
						<!-- start: PAGE TITLE -->
						<section class="text-center" id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">Patients  | Vaccine_ragestration_form</h1>
								</div>
							</div>
						</section>
					<div class="container-fluid container-fullw bg-white">
						<div class="card-header">
								<div class="card-body">
									<table class="table table-bordered" id="sample-table-1">
										<thead>
											<tr>
												<th>ID</th>
												<th>First Name</th>
												<th>Last Name</th>
												<th>Date Of Birth</th>
												<th>Age</th>
												<th>Id No</th>
												<th>Gender</th>
												<th>E-Mail  </th>
												<th>Phone no </th>
												<th>Addres</th>
												<th>diagnosed with covid-19!</th>
												<th>Symptome </th>
												<th>Your vaccin</th>
											</tr>
										</thead>
<tbody>
<?php
$con=mysqli_connect("localhost","root","","hospital_managment");
$query=mysqli_query($con,"SELECT * FROM vaccine_r");
while ($row=mysqli_fetch_array($query)) {
?>
		<tr>
			<td><?php echo $row['user-id']; ?></td>
			<td><?php echo $row['f_name']; ?></td>
			<td><?php echo $row['l_name']; ?></td>
			<td><?php echo $row['date of birth']; ?></td>
			<td><?php echo $row['age']; ?></td>
			<td><?php echo $row['id no']; ?></td>
			<td><?php echo $row['gender']; ?></td>
			<td><?php echo $row['e-mail']; ?></td>
			<td><?php echo $row['phone no']; ?></td>
			<td><?php echo $row['addres']; ?></td>
			<td><?php echo $row['covid diagnosed']; ?></td>
			<td><?php echo $row['symptome']; ?></td>
			<td><?php echo $row['vaccin']; ?></td>
		</tr>
		<?php
	}
?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<?php mysqli_close($con); ?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	</body>
</html>