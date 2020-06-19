<?php
	require("includes/common.php");
	if (!isset($_SESSION['email'])) {
    header('location: index.php');
}


$value = $_SESSION['value'];


?>

<!DOCTYPE html>
<html>
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
		<title> Contact </title>

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
			<link rel="stylesheet" href="css/contact.css">
</head>
<body>

			<!-- #header -->
			<?php
				require 'includes/header.php';	
			?>
			<!-- #header -->
			
			

	<?php 
		if(isset($_POST['sendmail'])) {
			require 'PHPMailerAutoload.php';
			require 'credential.php';

			$mail = new PHPMailer;

			//$mail->SMTPDebug = 4;                               // Enable verbose debug output

			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = EMAIL;                 // SMTP username
			$mail->Password = PASS;                           // SMTP password
			$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 587;                                    // TCP port to connect to

			$mail->setFrom(EMAIL, 'Forensic Department');
			$mail->addAddress($_POST['contemail']);     // Add a recipient

			$mail->addReplyTo(EMAIL);
			// print_r($_FILES['file']); exit;
			for ($i=0; $i < count($_FILES['file']['tmp_name']) ; $i++) { 
				$mail->addAttachment($_FILES['file']['tmp_name'][$i], $_FILES['file']['name'][$i]);    // Optional name
			}
			$mail->isHTML(true);                                  // Set email format to HTML

			$mail->Subject = $_POST['subject'];
			$mail->Body    = $_POST['message'];
			
			
			if(!$mail->send()) {
				$message = "Message could not be sent! Mailer Error: ' . $mail->ErrorInfo";
				echo "<script type='text/javascript'>alert('$message');</script>";
			}
			else {
				$message = "Message Sent Successfully";
				echo "<script type='text/javascript'>alert('$message');</script>";

			}
		}
			?>

			
	

		<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Contact
							</h1>	
							<p class="text-white link-nav">  <?php
				if($_SESSION['email']=='admin@fds.com') { ?>
					<a href="adminhome.php">
				
				<?php }
				else if($_SESSION['email']=='officer@fds.com') { ?>
					<a href="officerhome.php">
				
				<?php }
				else { ?>
					<a href="home.php">	
				<?php } ?>
				Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="contact.php"> Contact </a></p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
			
			
			<!-- Start contact-page Area -->
			<section class="contact-page-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 d-flex flex-column address-wrap">
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-home"></span>
								</div>
								<div class="contact-details">
									<h5> Bangalore, India</h5>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-phone-handset"></span>
								</div>
								<div class="contact-details">
									<h5>00 (880) 9865 562</h5>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-envelope"></span>
								</div>
								<div class="contact-details">
									<h5>support@fds.com</h5>
									<p>Contact for any support!</p>
								</div>
							</div>														
						</div>
						<div class="col-lg-8">
							<form role="form" method="post" enctype="multipart/form-data">
								<div class="row">
									<div class="col-sm-9 form-group">
										<label for="email">To Email:</label>
										<input type="email" class="form-control" id="contemail" name="contemail" placeholder="Enter email" maxlength="50">
									</div>
								</div>

								<div class="row">
									<div class="col-sm-9 form-group">
										<label for="subject">Subject:</label>
										<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" maxlength="50">
									</div>
								</div>
            
								<div class="row">
									<div class="col-sm-9 form-group">
										<label for="name">Message:</label>
										<textarea class="form-control" type="textarea" id="message" name="message"  maxlength="6000" rows="4"> Enter the Message </textarea>
									</div>
								</div>
								
								<div class="row">
									<div class="col-sm-9 form-group">
										<label for="name">File:</label>
										<input name="file[]" multiple="multiple" class="form-control" type="file" id="file">
									</div>
								</div>
								
								<div class="row">
									<div class="col-sm-9 form-group">
									<button type="submit" name="sendmail" class="primary-btn mt-30 text-white"> Send Message </button>
								</div>
							</div>
						</form>
					</div>
				</div>
			  </div>
			</section>


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