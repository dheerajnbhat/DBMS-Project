<?php
	require("includes/common.php");
	if (!isset($_SESSION['email'])) {
		header('location: index.php');
	}

$value = $_SESSION['value'];


$name = "SELECT NAME
		FROM USERS
		WHERE EMAIL = '" .$_SESSION['email'] . "' ";
$run_name = mysqli_query($con, $name);
$name_r = mysqli_fetch_array($run_name);

$viewcase = $_POST['viewcase']; 
if(!$viewcase) {
	header('location: allcases.php');
}

$cases = "SELECT * 
		FROM CASES
		WHERE CASE_ID = '" . $viewcase . "' ";
$run_cases = mysqli_query($con, $cases);
$cases_r = mysqli_fetch_array($run_cases);


if($cases_r==0) {
	if($_SESSION['email']=='admin@fds.com') {
		echo "<script>if(confirm('Case Is Not Available!')){document.location.href='adminhome.php'};</script>";
	}
	else {
		echo "<script>if(confirm('Case Is Not Available!')){document.location.href='home.php'};</script>";
	}
}	


$evi = "SELECT *
			FROM EVIDENCE
			WHERE CASE_ID = '" . $viewcase . "' ";
$run_evi = mysqli_query($con, $evi);
$evi_r = mysqli_fetch_array($run_evi);



$susp =  "SELECT *
			FROM SUSPECTS
			WHERE CASE_ID = '" . $viewcase . "' ";
$run_susp = mysqli_query($con, $susp);
$susp_r = mysqli_fetch_array($run_susp);



$fire = "SELECT *
			FROM FIREARMS
			WHERE CASE_ID = '" . $viewcase . "' ";
$run_fire = mysqli_query($con, $fire);
$fire_r = mysqli_fetch_array($run_fire);

$known = "SELECT *
			FROM KNOWN_FORENSICS
			WHERE CASE_ID = '" . $viewcase . "' ";
$run_known = mysqli_query($con, $known);
$known_r = mysqli_fetch_array($run_known);


?> 

<!DOCTYPE html>
<html class="no-js"> 
    <head>
        <meta charset="utf-8">
        <title> CASE </title>
        <meta name="description" content="">
		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- <link rel="shortcut icon" href="img/favicon.png"> -->
        
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet'>
        
        <!-- Syntax Highlighter -->
        <link rel="stylesheet" type="text/css" href="syntax-highlighter2/styles/shCore.css" media="all">
        <link rel="stylesheet" type="text/css" href="syntax-highlighter2/styles/shThemeDefault.css" media="all">
		
		<!-- Font Awesome CSS-->
        <link rel="stylesheet" href="css2/font-awesome.min.css">
        <!-- Normalize/Reset CSS-->
		<link rel="stylesheet" href="css2/normalize.min.css">
		<!-- Main CSS-->
        <link rel="stylesheet" href="css2/main.css">
		
    </head>
	
    <body id="welcome">
    
        <aside class="left-sidebar">
            <div class="logo">
                <a href="#welcome">
                    <img style="height:40px; width:50px" src="img/logo.jpg" alt="">
                </a>
            </div>
            <nav class="left-nav">
                <ul id="nav">
                    <li class="current"><a href="#Cases" style="text-decoration: none;"> Cases </a></li>
                    <li><a href="#Evidence" style="text-decoration: none;"> Evidence </a></li>
                    <li><a href="#Suspects" style="text-decoration: none;"> Suspects </a></li>
                    <li><a href="#Firearms" style="text-decoration: none;"> Firearms </a></li>
                    <li><a href="#Known-Forensics" style="text-decoration: none;"> Known Forensics </a></li>
                </ul>
            </nav>
        </aside>
		
		<div id="main-wrapper">
			
		    <div class="main-content">
				<div class="content-header">
		            <h1> CASE <?php echo $viewcase ?> </h1>
		        </div>
				
				<form>
					<section id="Cases">  
		            
		            <div class="features">
		                <h3 class="twenty"> Cases </h3>
		                
		                						
							<div class="form-group row">
								<label class="col-form-label tab"> Case Id : <?php echo $viewcase ?></label>																
							</div>
							<div class="form-group row">
								<label class="col-form-label tab"> Officer Id : <?php echo $cases_r[1] ?> </label>							
							</div>
							<div class="form-group row">
								<label class="col-form-label tab"> Status : <?php echo $cases_r[2] ?></label>
							</div>
							<div class="form-group row">
								<label class="col-form-label tab"> Address : <?php echo $cases_r[3] ?> </label>
						</div>
						
		            </div>

		        </section>


		       <section id="Evidence">
		            <h3 class="title"> Photo Evidence </h3>
		            
										
							<div class="form-group row">
								<label class="col-form-label tab"> Photo Id : <?php echo $evi_r[0] ?></label>
							</div>
							<div class="form-group row">
								<label class="col-form-label tab"> Photo : 
								<table class="offset-lg-2 table table-center table-bordered tab">  
									<?php echo '  
									<tr>  
									<td>  
										<img src="data:image/jpeg;base64,'.base64_encode($evi_r['PHOTO'] ).'" height="200" width="200" class="img-thumnail" />  
									</td>  
									</tr>  
									';   ?>
								</table> 
								</label>
							</div>
							<div class="form-group row">
								<label class="col-form-label tab"> Fingerprint : 
								<table class="offset-lg-2 table table-center table-bordered tab"> 
									<?php echo '  
									<tr>  
									<td>  
										<img src="data:image/jpeg;base64,'.base64_encode($evi_r['FINGERPRINT'] ).'" height="200" width="200" class="img-thumnail" />  
									</td>  
									</tr>  
									';   ?>
								</table> 
								</label>
							</div>
							<div class="form-group row">
								<label class="col-form-label tab"> Lab Id : <?php echo $evi_r[3] ?></label>
							</div>
							<div class="form-group row">
								<label class="col-form-label tab"> Case Id : <?php echo $evi_r[4] ?></label>
							</div>
							<div class="form-group row">
								<label class="col-form-label tab"> Photo Date : <?php echo $evi_r[5] ?></label>
							</div>
							<div class="form-group row">
								<label class="col-form-label tab"> Processing Method : <?php echo $evi_r[6] ?></label>
							</div>
					
		        </section> 
		        
		        <section id="Suspects">
		            <h3 class="title"> Suspects </h3>
		            
		           						
							<div class="form-group row">
								<label class="col-form-label tab"> Suspect Id : <?php echo $susp_r[0] ?></label>
							</div>
							<div class="form-group row">
								<label class="col-form-label tab"> Case Id : <?php echo $susp_r[1] ?></label>
							</div>
							<div class="form-group row"> 
								<label class="col-form-label tab"> Fingerprint : 
								<table class="offset-lg-2 table table-center table-bordered tab"> 
									<?php echo '  
									<tr>  
									<td>  
										<img src="data:image/jpeg;base64,'.base64_encode($susp_r['FINGERPRINT'] ).'" height="200" width="200" class="img-thumnail" />  
									</td>  
									</tr>  
									';   ?>
								</table> 
								</label>
								</label>
							</div>
							<div class="form-group row">
								<label class="col-form-label tab"> Name : <?php echo $susp_r[3] ?></label>
							</div>
							<div class="form-group row">
								<label class="col-form-label tab"> Address : <?php echo $susp_r[4] ?></label>
							</div>
					
		        </section>
		        
		        <section id="Firearms">
		            <h3 class="title"> Firearms </h3>
		            
											
							<div class="form-group row">
								<label class="col-form-label tab"> Firearm Id : <?php echo $fire_r[0] ?></label>
							</div>
							<div class="form-group row">
								<label class="col-form-label tab"> Lab Id : <?php echo $fire_r[1] ?></label>
							</div>
							<div class="form-group row">
								<label class="col-form-label tab"> Case Id : <?php echo $fire_r[2] ?></label>
							</div>
							<div class="form-group row">
								<label class="col-form-label tab"> Seizing Officer : <?php echo $fire_r[3] ?></label>
							</div>
							<div class="form-group row">
								<label class="col-form-label tab"> Make : <?php echo $fire_r[4] ?></label>
							</div>					
		        </section>
		        <section id="Known-Forensics">
		            <h3 class="title"> Known Forensics </h3>
		            
										
							<div class="form-group row">
								<label class="col-form-label tab"> Known Id : <?php echo $known_r[0] ?></label>
							</div>
							<div class="form-group row">
								<label class="col-form-label tab"> Case Id : <?php echo $known_r[1] ?></label>
							</div>
							<div class="form-group row">
								<label class="col-form-label tab"> DNA Result : <?php echo $known_r[2] ?> </label>
							</div>
							<div class="form-group row">
								<label class="col-form-label tab"> Drug Test Result : <?php echo $known_r[3] ?></label>
							</div>
							<div class="form-group row">
								<label class="col-form-label tab"> Baallistics Result : <?php echo $known_r[4] ?></label>
								</div>
							<div class="form-group row">
								<label class="col-form-label tab"> Blood Group : <?php echo $known_r[5] ?></label>
							</div>
					
		        </section>
		        
				<p style="margin-left:800px"> Signature </p>
				<p style="margin-left:810px"> <?php echo "(" . $name_r[0] . ")" ?> </p>

				<button onclick="myFunction()" type="print" name="print" class="btn btn-primary btn-sm"> Print </button>
				
				<script>
					function myFunction() {
					window.print();
					}
				</script>
				
				<style>
					.tab {position:relative;left:50px; }
					}
				</style>
				
				<style type="text/css" media="print">
					@page {
					size: auto;  
					margin: 0;	
					}
				</style>

				</form>
		    </div>
			
			<div class="container-fluid">
					<div style="background-color:black" class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 text-center">
							<div class="single-footer-widget">
								<h6 class="text-white"> Forensic Department | India </h6>
								<p class="text-muted footer-text">
									Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |
								</p>								
							</div>
						</div>
					</div>
				</div>
		</div>
		
		
		
		<!-- Essential JavaScript Libraries
		==============================================-->
        <script type="text/javascript" src="js2/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="js2/jquery.nav.js"></script>
        <script type="text/javascript" src="syntax-highlighter2/scripts/shCore.js"></script> 
        <script type="text/javascript" src="syntax-highlighter2/scripts/shBrushXml.js"></script> 
        <script type="text/javascript" src="syntax-highlighter2/scripts/shBrushCss.js"></script> 
        <script type="text/javascript" src="syntax-highlighter2/scripts/shBrushJScript.js"></script> 
        <script type="text/javascript" src="syntax-highlighter2/scripts/shBrushPhp.js"></script> 
        <script type="text/javascript">
            SyntaxHighlighter.all()
        </script>
        <script type="text/javascript" src="js2/custom.js"></script>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
		
    </body>
</html>