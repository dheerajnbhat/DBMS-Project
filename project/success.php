<?php
	require("includes/common.php");
	if (!isset($_SESSION['email'])) {
    header('location: index.php');
}

$value = $_SESSION['value'];


?>


<!DOCTYPE html>
	<audio style="display:none;" controls autoplay>
		<source src="accessgranted.wav" type="audio/wav" autostart="true"> 
	</audio>
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
		<title> Success </title>

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
			<link rel="stylesheet" href="css/success.css">
			
			
			<style>

			
			</style>
		</head>
		<body>

			  

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay"></div>	
				<div class="container">
					
					<div class="row fullscreen d-flex align-items-center justify-content-start">
						<h3 style="color: white; text-shadow: 1px 1px 2px black, 0 0 45px green, 0 0 45px darkgreen;font-family: Comic Sans MS; font-style:italic; font-size:100px;" class="text-white">
				<?php echo "WELCOME "; echo $_SESSION['name']; ?> </h3>
						<div class="banner-content col-lg-10 text-center">

								<br/>
								<br/>
								<br/>
								<br/>
								<br/>
								<br/>
								<br/>
								<br/>
								<br/>
								<br/>
								<br/>
								<br/>
								<br/>
								<br/>
								<?php
								if($_SESSION['user_id']>=1 && $_SESSION['user_id']<=99) { ?>
									<a class="btn btn-danger btn-lg" href="adminhome.php" role="button"> Enter </a>
				
								<?php }
								else if($_SESSION['user_id']>=100 && $_SESSION['user_id']<=999) { ?>
									<a class="btn btn-danger btn-lg" href="home.php" role="button"> Enter </a>								
								<?php }
								else { ?>
									<a class="btn btn-danger btn-lg" href="officerhome.php" role="button"> Enter </a>
								<?php } ?>
								
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