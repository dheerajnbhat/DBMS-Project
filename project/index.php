<?php
	require("includes/common.php");

	// Redirects the user to home page if he/she is logged in.
	if (isset($_SESSION['forensicid'])) {
	header('location: home.php');
	}

?>
<style>
.banner-area {
  background: url(../img/header-bg.jpg) center;
  background-size: cover;
}
</style>
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
		<title> Forensic Database System </title>

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

			

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay "></div>	
				<div class="container">
				
					<div class="row fullscreen d-flex align-items-center justify-content-start">
					
						<div class="banner-content col-lg-12 text-center">

							<b><i><p style="color: white; text-shadow: 1px 1px 2px black, 0 0 45px green, 0 0 45px darkgreen;font-family: times, serif; font-size:75px;" class="text-white">
								Forensic Evidence Management and Investigation System
							</p></i></b>
							<button type="button"  class="primary-btn text-uppercase btn-center" data-toggle="modal" data-target="#myModal"> Experts Login </button>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>			
							<br/>
							<br/>
							<button type="button" class="primary-btn text-uppercase float-right" data-toggle="modal" data-target="#myModal"> Officer Login </button>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
							<button type="button" class="primary-btn text-uppercase float-right" data-toggle="modal" data-target="#myModal"> Admin Login </button>							
						
							<!-- Modal -->
							<div class="modal fade" id="myModal" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title"> Login </h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<form action="login_submit.php" method="POST">
												<div class="form-group">
													<label> Email </label>
													<input type="email" class="form-control"  placeholder="Email" name="e-mail" required = "true">
												</div>
												<div class="form-group">
													<label> Password </label>
													<input type="password" class="form-control" placeholder="Password" name="password" required = "true">
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal"> Close </button>
													<button type="submit" name="submit" class="btn btn-primary" data-toggle="modal" data-target="#access"> Access </button>	
												</div>
											</form>
										</div>										
									</div>
								</div>
							</div>
							<!-- Modal -->
							
							
						</div>							
					</div>
					
				</div>					
			</section>
			<!-- End banner Area -->	

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
			
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>

			
	</body>
</html>