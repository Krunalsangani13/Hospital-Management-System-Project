<html>
<?php
	include("header.php");
?>
	<head>
		<title>
			patient search
		</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width , initial-scale=1">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?famliy=Josefin+Sans&display=swap">
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="icon" type="image/png" href="img/icon.png">
	</head>
	<body>
		<section id="page-title ">
			<div class="row container-fluid">
			<div class="col-sm-8">
			<h1 class="mainTitle ">Admin | View Patients</h1>
			</div>
			<ol class="breadcrumb ">
			<li>
			<span >Admin</span>
			</li>
			<li class="active">
			<span>View Patients</span>
			</li>
			</ol>
			</div>
		</section>
		<div class="container-fluid container-fullw bg-white">
		<div class="row">
		<div class="col-md-12">
			<form role="form" method="POST" name="search">

				<div class="form-group">
				<label for="doctorname">
				Search by Name/Mobile No.
				</label>
				<input type="text" name="searchdata" id="searchdata" class="form-control" value="<?php if(isset($_POST['searchdata'])){echo $_POST['searchdata'];}?>" required='true'>
				</div>

				<button type="submit" name="Search" class="btn btn-primary">
				Search
				</button>
			</form>
			<?php
				if(isset($_POST['Search']))
				{ 

				$sdata=$_POST['searchdata'];
			  ?>
			  <?php echo $sdata;?>
<div class="col-md-12">
	<div class="card-mt-4">
		<div class="card-body">
			<table class="table table-bordered">
				<thead>
					<tr>		
						<th>ID</th>
						<th>name</th>
						<th>contact no</th>
						<th>location</th>
						<th>department</th>
						<th>appointment date</th>
						<th>appointment time</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$con=mysqli_connect("localhost","root","","hospital_managment");
						$sql=mysqli_query($con,"SELECT * FROM `appointment` WHERE name='$sdata'or contact_no='$sdata'");
						$num=mysqli_num_rows($sql);
							if($num>0){
								$cnt=1;
								while($items=mysqli_fetch_array($sql))
									{
									?>
									<tr>
										<td><?= $items['user_id']; ?></td>
										<td><?= $items['name']; ?></td>
										<td><?= $items['contact_no']; ?></td>
										<td><?= $items['location']; ?></td>
										<td><?= $items['department']; ?></td>
										<td><?= $items['appointment date']; ?></td>
										<td><?= $items['appointment time']; ?></td>
									</tr>
									<a href="view-patient.php?viewid=<?php echo $row['ID'];?>"><i class="fa fa-eye"></i></a>
									<?php 
									$cnt=$cnt+1;
									} } else { ?>
									  <tr>
									    <td colspan="7"> No record found against this search</td>

									  </tr>
								<?php
							}
						}
					?>
					<tr>
						<td></td>
					</tr>

				</tbody>
			</table>
		</div>
	</div>
</div>
</div>
	</div>
</div>
<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	</body>
</html>