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
									<h1 class="mainTitle">Patients  | Feedback</h1>
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
												<th>Name</th>
												<th>E-Mail</th>
												<th>Phone No</th>
												<th>Messag</th>
												
											</tr>
										</thead>
<tbody>
<?php
$con=mysqli_connect("localhost","root","","hospital_managment");
$query=mysqli_query($con,"SELECT * FROM feedback");
while ($row=mysqli_fetch_array($query)) {

?>
		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['e-mail']; ?></td>
			<td><?php echo $row['phone']; ?></td>
			<td><?php echo $row['description']; ?></td>
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