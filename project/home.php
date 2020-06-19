<?php
	require("includes/common.php");
	if (!isset($_SESSION['email'])) {
    header('location: index.php');
}

$value = $_SESSION['value'];


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
		<title>Home</title>

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
			<link rel="stylesheet" href="css/home.css">
			
			<style>
			
			</style>
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
								Home				
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
						<div class="col-lg-4 single-services">
							<div class="card text-center" style="width: 18rem;">
								<img style="height:225px; width:225px" class="card-img-top mx-auto" src="img/write.jpg" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title"> Write </h5>
									<p class="card-text"> Write a case </p>
									<a href="insertcase.php" class="btn btn-primary"> Go  </a>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4 single-services">
							<div class="card text-center" style="width: 18rem;">
								<img style="height:225px; width:225px" class="card-img-top mx-auto" src="img/update.jpg" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title"> Update </h5>
									<p class="card-text"> Update a case </p>
									<a href="#myModal2" class="btn btn-primary" data-toggle="modal" data-target="#myModal2"> Go  </a>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4 single-services">
							<div class="card text-center" style="width: 18rem;">
								<img style="height:225px; width:225px" class="card-img-top mx-auto" src="img/view.jpg" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title"> View </h5>
									<p class="card-text"> View Forensic Details </p>
									<a href="allcases.php" class="btn btn-primary"> Go  </a>
								</div>
							</div>
						</div>
					</div>
					
					
							<!-- Modal -->
							<div class="modal fade"  style="padding-top:10%;" id="myModal2" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title"> Update </h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<form action="caseupdate.php" method="POST">
												<div class="form-group">
													<label> Case Id </label>
													<input type="number" class="form-control" placeholder="Case Id" name="updcaseid" required = "true">
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal"> Close </button>
													<button type="submit" name="submit" class="btn btn-primary"> Enter </button>																								
												</div>
											</form>
										</div>										
									</div>
								</div>
							</div>
							<!-- Modal -->
							
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