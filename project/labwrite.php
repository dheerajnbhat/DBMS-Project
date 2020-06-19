<?php
	require("includes/common.php");
	if (!isset($_SESSION['email'])) {
    header('location: index.php');
}


$value = $_SESSION['value'];


?> 

<!DOCTYPE html>
<html class="no-js"> 
    <head>
        <meta charset="utf-8">
        <title> Lab Details </title>
        <meta name="description" content="">
		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
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
                    <li><a href="#Lab" style="text-decoration: none;"> Lab </a></li>
                </ul>
            </nav>
        </aside>
		
		<div id="main-wrapper">
			
		    <div class="main-content">
				<div class="content-header">
		            <h1> Lab Details </h1>
		        </div>
				
				<form action="lab.php" method="POST">
					
		        <section id="Lab"> 
					<h2 class="title"> Lab </h2>
		        	
										
							<div class="form-group row">
								<label class="col-sm-2 col-form-label"> Lab Id </label>
								<div class="col-sm-3">
									<input type="text" class="form-control" name="llabid" placeholder="" required="true">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label"> Tech Id </label>
								<div class="col-sm-3">
									<input type="text" class="form-control" name="ltechid" placeholder="" required="true">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label"> Specialist Id </label>
								<div class="col-sm-3">
									<input type="text" class="form-control" name="lspecialistid" placeholder="" required="true">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label"> Address </label>
								<div class="col-sm-6">
									<input type="text" class="form-control" name="laddress" placeholder="" required="true">
								</div>
							</div>
						     
							<div class="form-group row">
								<div class="col-sm-10">
									<button type="submit" name="submit" class="btn btn-primary btn-lg"> Submit </button>
								</div>
							</div>
							
		        </section>
						        
				</form>
		    </div>
			
			<div class="container-fluid">
					<div style="background-color:black; margin-top:120px" class="row">
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