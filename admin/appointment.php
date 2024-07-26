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
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section class="text-center" id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">Patients  | Appointment History</h1>
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
												<th>Patient Name</th>
												<th>Contact No</th>
												<th>E-Mail</th>
												<th>Date Of Birth</th>
												<th>Hospital Location</th>
												<th>Department</th>
												<th>Appointment Creation Date  </th>
												<th>Appointment Date / Time </th>
											</tr>
										</thead>
<tbody>
<?php
$con=mysqli_connect("localhost","root","","hospital_managment");
$query=mysqli_query($con,"SELECT * FROM appointment");
while ($row=mysqli_fetch_array($query)) {
?>
		<tr>
			<td><?php echo $row['user_id']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['contact_no']; ?></td>
			<td><?php echo $row['e-mail']; ?></td>
			<td><?php echo $row['borth date']; ?></td>
			<td><?php echo $row['location']; ?></td>
			<td><?php echo $row['department']; ?></td>
			<td><?php echo $row['appointment date']; ?></td>
			<td><?php echo $row['appointment time']; ?></td>
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