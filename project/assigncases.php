<?php
	require("includes/common.php");
	if (!isset($_SESSION['email'])) {
    header('location: index.php');
}

$value = $_SESSION['value'];


$asgn_query = "SELECT * 
		FROM CASES 
		WHERE (STATUS = 'REOPENED' OR
			  STATUS = 'OPENED'  OR
			  STATUS = 'PENDING') AND OFFICER_ID IS NULL";
$run_asgn = mysqli_query($con, $asgn_query) or die(mysqli_error($con));



if(isset($_POST["submit"])) {
	$caseid = $_POST['caseid'];
	$officerid = $_POST['officerid'];
	$asgn_officer = "UPDATE CASES SET OFFICER_ID= '" . $officerid . "' WHERE CASE_ID = '" . $caseid . "' ";
	$assign = mysqli_query($con, $asgn_officer) or die(mysqli_error($con));
	if($assign) {
		$message = "Report Successfully Written!";
		echo "<script>if(confirm('Officer Assigned to the Case!')){document.location.href='assigncases.php'};</script>";

	}
	else {
		$message = "Couldnt insert values! Please Try again!";
		echo "<script>if(confirm('Couldnt Assign the Officer! Please Try again!')){document.location.href='assigncases.php'};</script>";
	}
}



?>

<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title> Assign Cases </title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">					
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>

			<!-- #header -->
			<?php
				require 'includes/header.php';	
			?>
			<!-- #header -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Assign Cases				
							</h1>	
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->
			
			<!-- Start simple-services Area -->
			<section class="simple-services-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 single-services">
						<table class="table table-hover table-bordered">
						<thead>
						<tr>
							<th style="font-family:verdana; text-align:center" scope="col"> Case Id </th>
							<th style="font-family:verdana; text-align:center" scope="col"> Date </th>
							<th style="font-family:verdana; text-align:center" scope="col"> Status </th>	
							<th style="font-family:verdana; text-align:center" scope="col"> Address </th>												
						</tr>
						</thead>
						<tbody>
						<?php
						while($asgn_r = mysqli_fetch_array($run_asgn)) { ?>
							<tr>
								<th style="font-family:verdana; text-align:center" scope="row"> <?php echo $asgn_r['CASE_ID']; ?> </th>
								<td style="font-family:verdana; text-align:center"> <?php echo $asgn_r['DATE']; ?> </td>
								<td style="font-family:verdana; text-align:center"> <?php echo $asgn_r['STATUS']; ?> </td>
								<td style="font-family:verdana; text-align:center"> <?php echo $asgn_r['ADDRESS']; ?> </td>
							</tr>
						<?php } ?>
						</tbody>
						</table>
						</div>
						<div class="col-lg-4 single-services">
							<form method="POST" enctype="multipart/form-data">	
								<div class="form-group row">
									<label style="font-family:verdana;" class="col-sm-6 col-form-label"> Enter Case Id </label>
									<div class="col-sm-6">
										<input type="text" class="form-control" name="caseid" placeholder="caseid" required="true">
									</div>
								</div>
							
								<div class="form-group row">
									<label style="font-family:verdana;" class="col-sm-6 col-form-label"> Enter Officer Id </label>
									<div class="col-sm-6">
										<input type="text" class="form-control" name="officerid" placeholder="officerid" required="true">
									</div>
								</div>
							
								<div class="form-group row">
									<div class="col-sm-10">
										<button type="submit" name="submit" class="btn btn-primary btn-md"> Assign </button>
									</div>
								</div>					
							</form>
						</div>
					</div>
				</div>		
			</section>
			<!-- End simple-services Area -->
			


			<!-- start footer Area -->		
			<?php
				require 'includes/footer.php';
			?>
			<!-- End footer Area -->		

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>	
			<script src="js/waypoints.min.js"></script>
			<script src="js/jquery.counterup.min.js"></script>					
			<script src="js/parallax.min.js"></script>		
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
	</body>
</html>