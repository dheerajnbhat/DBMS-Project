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
		<title> Users </title>

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
								Users				
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
									<h5 class="card-title"> Sign Up </h5>
									<p class="card-text"> Sign up new users </p>
									<a href="" class="btn btn-primary" data-toggle="modal" data-target="#myModal" > Go  </a>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4 single-services">
							<div class="card text-center" style="width: 18rem;">
								<img style="height:225px; width:225px" class="card-img-top mx-auto" src="img/view.jpg" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title"> Existing Users </h5>
									<p class="card-text"> View Existing Users </p>
									<a href="usersview.php" class="btn btn-primary"> Go  </a>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4 single-services">
							<div class="card text-center" style="width: 18rem;">
								<img style="height:225px; width:225px" class="card-img-top mx-auto" src="img/write.jpg" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title"> Remove User </h5>
									<p class="card-text"> Remove User Details </p>
									<a href="" class="btn btn-primary" data-toggle="modal" data-target="#myModal2"> Go  </a>
								</div>
							</div>
						</div>
					</div>
					
					<br/>
					<br/>
					<div class="row">
					
						
						<div class="col-lg-4 offset-lg-2 single-services">
							<div class="card text-center" style="width: 18rem;">
								<img style="height:225px; width:225px" class="card-img-top mx-auto" src="img/write.jpg" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title"> Remove Labs </h5>
									<p class="card-text">  Remove Lab Details</p>
									<a href="logs.php" class="btn btn-primary" data-toggle="modal" data-target="#myModal3"> Go  </a>
								</div>
							</div>
						</div>
						
						<div class="col-lg-5 offset-lg-1 single-services">
							<div class="card text-center" style="width: 18rem;">
								<img style="height:225px; width:225px" class="card-img-top mx-auto" src="img/write.jpg" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title"> Remove Lab Techs </h5>
									<p class="card-text"> Remove Lab Technician Details </p>
									<a href="logs.php" class="btn btn-primary" data-toggle="modal" data-target="#myModal4"> Go  </a>
								</div>
							</div>
						</div>
					</div>
					
				</div>	
				
							<!-- Modal -->
							<div class="modal fade" id="myModal" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title"> Sign Up </h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<form action="signup_script.php" method="POST">
												<div class="form-group">
													<label> Name </label>
													<input type="text" class="form-control"  placeholder="Name" name="name" required = "true">
												</div>
												<div class="form-group">
													<label> Id </label>
													<input type="text" class="form-control"  placeholder="id" name="id" required = "true">
												</div>
												<div class="form-group">
													<label> Password </label>
													<input type="password" class="form-control" placeholder="Password" name="password" required = "true">
												</div>
												<div class="form-group">
													<label> Contact </label>
													<input type="text" class="form-control" maxlength="10" size="10" placeholder="Contact" name="contact" required = "true">
												</div>
												<div class="form-group">
													<label> City </label>
													<input type="text" class="form-control"  placeholder="City" name="city" required = "true">
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal"> Close </button>
													<button type="submit" name="submit" class="btn btn-primary"> Submit </button>	
												</div>
											</form>
										</div>										
									</div>
								</div>
							</div>
							<!-- Modal -->
							
							
							<!-- Modal -->
							<div class="modal fade"  style="padding-top:10%;" id="myModal2" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title"> Delete User </h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<form action="usersdelete.php" method="POST">
												<div class="form-group">
													<label> User email </label>
													<input type="email" class="form-control" placeholder="Email" name="deluser" required = "true">
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
							
							
							<!-- Modal -->
							<div class="modal fade"  style="padding-top:10%;" id="myModal3" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title"> Delete Lab </h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<form action="usersdelete.php" method="POST">
												<div class="form-group">
													<label> Lab Id </label>
													<input type="text" class="form-control" placeholder="Lab Id" name="dellab" required = "true">
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
							
							
							
							<!-- Modal -->
							<div class="modal fade"  style="padding-top:10%;" id="myModal4" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title"> Delete Lab Technician </h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<form action="usersdelete.php" method="POST">
												<div class="form-group">
													<label> Lab Technician Id </label>
													<input type="text" class="form-control" placeholder="Lab Technician Id" name="dellabtech" required = "true">
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