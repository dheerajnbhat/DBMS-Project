<?php
	require("includes/common.php");
	if (!isset($_SESSION['email'])) {
    header('location: index.php');
}

$value = $_SESSION['value'];

$detailid = $_SESSION['user_id'];
$casedet = "SELECT * 
		FROM CASES 
		WHERE (STATUS = 'REOPENED' OR
			  STATUS = 'OPENED'  OR
			  STATUS = 'PENDING') AND OFFICER_ID = '" . $detailid . "'";
$run_casedet = mysqli_query($con, $casedet) or die(mysqli_error($con));


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
		<title> Case Details </title>

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
								Case Details				
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
						<h2> Cases Assigned to you : </h2>
						<br/>
						<div class="col-lg-6 single-services">
						<table class="table table-hover table-bordered">
						<thead>
						<tr>
							<th style="font-family:verdana; text-align:center" scope="col"> Case Id </th>					
						</tr>
						</thead>
						<tbody>
						<?php
						while($row = mysqli_fetch_array($run_casedet)) { ?>
							<tr>
								<td style="font-family:verdana; text-align:center"> <?php echo $row['CASE_ID']; ?> </td>
							</tr>
						<?php } ?>
						</tbody>
						</table>
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