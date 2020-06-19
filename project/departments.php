<?php
	require("includes/common.php");
	if (!isset($_SESSION['email'])) {
    header('location: index.php');
}

$value = $_SESSION['value'];


$cquery = "SELECT COUNT(CASE_ID)
			FROM CASES
			WHERE STATUS='CLOSED' " ;
$run_cquery = mysqli_query($con, $cquery) or die(mysqli_error($con));
$c = mysqli_fetch_array($run_cquery);

$oquery = "SELECT COUNT(ID)
			FROM USERS WHERE ID>=1000" ;
$run_oquery = mysqli_query($con, $oquery) or die(mysqli_error($con));
$o = mysqli_fetch_array($run_oquery);

$lquery = "SELECT COUNT(LAB_ID)
			FROM LAB" ;
$run_lquery = mysqli_query($con, $lquery) or die(mysqli_error($con));
$l = mysqli_fetch_array($run_lquery);
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
		<title>Departments</title>

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
			<link rel="stylesheet" href="css/departments.css">
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
								Departments		
							</h1>	
							<p class="text-white link-nav"> <?php
				if($_SESSION['email']=='admin@fds.com') { ?>
					<a href="adminhome.php">
				
				<?php }
				else if($_SESSION['email']=='officer@fds.com') { ?>
					<a href="officerhome.php">
				
				<?php }			
				else { ?>
					<a href="home.php">	
				<?php } ?>
				Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="departments.php"> Departments</a></p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
	
			<!-- Start simple-services Area -->
			<section class="simple-services-area section-gap">
				<div class="container">
					<div class="row">						
						<div class="col-lg-6 single-services">
							<div class="card text-center" style="width: 18rem;">
								<img style="height:225px; width:225px" class="card-img-top mx-auto" src="img/lab.jpg" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title"> Labs </h5>
									<p class="card-text"> Enter Lab Details </p>
									<a href="labwrite.php" class="btn btn-primary"> Go  </a>
								</div>
							</div>
						</div>
						
						<div class="col-lg-6 single-services">
							<div class="card text-center" style="width: 18rem;">
								<img style="height:225px; width:225px" class="card-img-top mx-auto" src="img/labtech.jpg" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title"> Lab Technicians </h5>
									<p class="card-text"> Enter Lab Technician Details </p>
									<a href="labtechwrite.php" class="btn btn-primary"> Go  </a>
								</div>
							</div>
						</div>
						
						
																	
					</div>
				</div>	
			</section>
			<!-- End simple-services Area -->					

			<!-- Start fact Area -->
			<section class="facts-area section-gap" id="facts-area">
				<div class="container">
					<div class="row">
						<div class="col single-fact">
							<h1 class="counter"> <?php echo $c['0'] ?> </h1>
							<p> Cases Completed </p>
						</div>
						<div class="col single-fact">
							<h1 class="counter"> <?php echo $o['0'] ?> </h1>
							<p> Officers </p>
						</div>
						<div class="col single-fact">
							<h1 class="counter"> <?php echo $l['0'] ?> </h1>
							<p> Labs </p>
						</div>													
					</div>
				</div>	
			</section>
			<!-- end fact Area -->										

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