<?php
	require("includes/common.php");
	if (!isset($_SESSION['email'])) {
		header('location: index.php');
	}

$value = $_SESSION['value'];


$_SESSION['updcaseid'] = $_POST['updcaseid'];
$updcaseid = $_POST['updcaseid'];

$cases = "SELECT * 
		FROM CASES
		WHERE CASE_ID = '" . $updcaseid . "' ";
$run_cases = mysqli_query($con, $cases);
$cases_r = mysqli_fetch_array($run_cases);



$evi = "SELECT *
			FROM EVIDENCE
			WHERE CASE_ID = '" . $updcaseid . "' ";
$run_evi = mysqli_query($con, $evi);
$evi_r = mysqli_fetch_array($run_evi);



$susp =  "SELECT *
			FROM SUSPECTS
			WHERE CASE_ID = '" . $updcaseid . "' ";
$run_susp = mysqli_query($con, $susp);
$susp_r = mysqli_fetch_array($run_susp);



$fire = "SELECT *
			FROM FIREARMS
			WHERE CASE_ID = '" . $updcaseid . "' ";
$run_fire = mysqli_query($con, $fire);
$fire_r = mysqli_fetch_array($run_fire);


$known = "SELECT *
			FROM KNOWN_FORENSICS
			WHERE CASE_ID = '" . $updcaseid . "' ";
$run_known = mysqli_query($con, $known);
$known_r = mysqli_fetch_array($run_known);



//$rows = mysqli_num_rows($run_cases);

?> 

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title> Update Report </title>
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
                    <img src="img/logo.jpg" alt="">
                </a>
            </div>
            <nav class="left-nav">
                <ul id="nav">
                    <li class="current"><a href="#Cases" style="text-decoration: none;"> Cases </a></li>
                    <li><a href="#Evidences" style="text-decoration: none;"> Evidence </a></li>
                    <li><a href="#Suspects" style="text-decoration: none;"> Suspects </a></li>
                    <li><a href="#Firearms" style="text-decoration: none;"> Firearms </a></li>
                    <li><a href="#Known-Forensics" style="text-decoration: none;"> Known Forensics </a></li>
                </ul>
            </nav>
        </aside>
		
		<div id="main-wrapper">
			
		    <div class="main-content">
				<div class="content-header">
		            <h1> Update Report </h1>
		        </div>
				
				<form action="update.php" method="POST">
					<section id="Cases">  
		            
		            <div class="features">
		                <h2 class="twenty"> Cases </h2>
		                
		                						
							<div class="form-group row">
								<label class="col-sm-2 col-form-label"> Case Id </label>
								<div class="col-sm-3"> 
									<input type="text" class="form-control" name="ccaseid"  placeholder="<?php echo $updcaseid ?>" >
									
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label"> Lead Officer Id </label>
								<div class="col-sm-3">
									<input type="text" class="form-control" name="cofficerid" placeholder="<?php echo $cases_r['OFFICER_ID'] ?>">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label"> Date </label>
								<div class="col-sm-3">
									<input type="text" class="form-control" name="cdate" placeholder="<?php echo $cases_r['DATE'] ?>">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label"> Status </label>
								<div class="col-sm-3">
									<input type="text" class="form-control" name="cstatus" placeholder="<?php echo $cases_r['STATUS'] ?>">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label"> Address </label>
								<div class="col-sm-6">
									<input type="text" class="form-control" name="caddress" placeholder="<?php echo $cases_r['ADDRESS'] ?>">
								</div>
							</div>
						
		            </div>

		        </section>
		        		        		        

		        <section id="Evidences">
		            <h2 class="title"> Evidence </h2>
		            
							
							<div class="form-group row">
								<label class="col-sm-2 col-form-label"> Lab Id </label>
								<div class="col-sm-3">
									<input type="text" class="form-control" name="elabid" placeholder="<?php echo $evi_r['LAB_ID'] ?>">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label"> Photo Date </label>
								<div class="col-sm-3">
									<input type="text" class="form-control" name="ephotodate" placeholder="<?php echo $evi_r['PHOTO_DATE'] ?>">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label"> Processing Method </label>
								<div class="col-sm-3">
									<input type="text" class="form-control" name="eprocessingmethod" placeholder="<?php echo $evi_r['PROCESSING_METHOD'] ?>">
								</div>
							</div>
					
		        </section>
		        
		        <section id="Suspects">
		            <h2 class="title"> Suspect </h2>
		            

							
							<div class="form-group row">
								<label class="col-sm-2 col-form-label"> Name </label>
								<div class="col-sm-3">
									<input type="text" class="form-control" name="sname" placeholder="<?php echo $susp_r['NAME'] ?>">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label"> Address </label>
								<div class="col-sm-6">
									<input type="text" class="form-control" name="saddress" placeholder="<?php echo $susp_r['ADDRESS'] ?>">
								</div>
							</div>
					
		        </section>
		        
		        <section id="Firearms">
		            <h2 class="title"> Firearms </h2>
		            

							<div class="form-group row">
								<label class="col-sm-2 col-form-label"> Seizing Officer Id </label>
								<div class="col-sm-3">
									<input type="text" class="form-control" name="fiseizingofficer" placeholder="<?php echo $fire_r['SEIZING_OFFICER'] ?>">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label"> Make - Model </label>
								<div class="col-sm-3">
									<input type="text" class="form-control" name="fimakemodel" placeholder="<?php echo $fire_r['MAKEMODEL'] ?>">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label"> Location Found </label>
								<div class="col-sm-3">
									<input type="text" class="form-control" name="filocationfound" placeholder="<?php echo $fire_r['LOCATION_FOUND'] ?>">
								</div>
							</div>
					
		        </section>
		        <section id="Known-Forensics">
		            <h2 class="title"> Known Forensics </h2>
		            						
							<div class="form-group row">
								<label class="col-sm-2 col-form-label"> DNA Result </label>
								<div class="col-sm-3">
									<input type="text" class="form-control" name="kdnaresult" placeholder="<?php echo $known_r['DNA_RESULT'] ?>">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label"> Drug Test Result </label>
								<div class="col-sm-3">
									<input type="text" class="form-control" name="kdrugtestresult" placeholder="<?php echo $known_r['DRUG_TEST_RESULT'] ?>">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label"> Baallistics Result </label>
								<div class="col-sm-3">
									<input type="text" class="form-control" name="kballisticsresult" placeholder="<?php echo $known_r['BALLISTICS_RESULT'] ?>">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label"> Blood Group </label>
								<div class="col-sm-3">
									<input type="text" class="form-control" name="kbloodgroup" placeholder="<?php echo $known_r['BLOOD_GROUP'] ?>">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label"> Firearms Result </label>
								<div class="col-sm-3">
									<input type="text" class="form-control" name="kfireresult" placeholder="<?php echo $known_r['FIREARMS_RESULT'] ?>">
								</div>
							</div>
							
							<div class="form-group row">
								<div class="col-sm-10">
									<button type="submit" name="submit" class="btn btn-primary btn-lg"> Update </button>
								</div>
							</div>
					
		        </section>
				
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