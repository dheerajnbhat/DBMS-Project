<?php
	require("includes/common.php");
	if (!isset($_SESSION['email'])) {
    header('location: index.php');
}

$value = $_SESSION['value'];



$ccaseid = $_SESSION['ccaseid'];


if(isset($_POST["submit"])) {
$kcaseid = $_POST['kcaseid'];
$kdnaresult = $_POST['kdnaresult'];
$kdrugtestresult = $_POST['kdrugtestresult'];
$kballisticsresult = $_POST['kballisticsresult'];
$kbloodgroup = $_POST['kbloodgroup'];
$kfireresult = $_POST['kfireresult'];
$kf_query = "INSERT INTO KNOWN_FORENSICS (CASE_ID, DNA_RESULT, DRUG_TEST_RESULT, BALLISTICS_RESULT, BLOOD_GROUP, FIREARMs_RESULT) VALUES('$kcaseid','$kdnaresult','$kdrugtestresult','$kballisticsresult','$kbloodgroup', '$kfireresult')";
$kf_submit = mysqli_query($con, $kf_query) or die(mysqli_error($con));
if($kf_submit) {
		$message = "Report Successfully Written!";
		echo "<script>if(confirm('Your Record Sucessfully Inserted!')){document.location.href='home.php'};</script>";

	}
	else {
		$message = "Couldnt insert values! Please Try again!";
		echo "<script>if(confirm('Couldnt insert values! Please Try again!')){document.location.href='insertknownforensics.php'};</script>";
	}
}


?> 

<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title> Write Report </title>
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
                    <img style="height:40px; width:50px" src="img/logo.jpg" alt="">
                </a>
            </div>
            <nav class="left-nav">
                <ul id="nav">
                    <li><a href="#KnownForensics" style="text-decoration: none;"> Known Forensics </a></li>
                </ul>
            </nav>
        </aside>
		
		<div id="main-wrapper">
			
		    <div class="main-content">
				<div class="content-header">
		            <h1> Write Report </h1>
		        </div>
				
				<form method="POST">
					<section id="KnownForensics">
		            <h2 class="title"> Known Forensics </h2>
		            
										
							<div class="form-group row">
								<label class="col-sm-2 col-form-label"> Case Id </label>
								<div class="col-sm-3">
									<input type="text" class="form-control" name="kcaseid" value="<?php echo $ccaseid ?>" required="true">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label"> DNA Test Result </label>
								<select Id="myDropdown1" class="btn btn-outline-secondary dropdown-toggle">
									<option> MATCH FOUND </option>
									<option> MATCH NOT FOUND </option>
								</select>
								<input type="text" class="form-control col-sm-3" name="kdnaresult" id="txtBox1">						
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label"> Drug Test Result </label>
								<select Id="myDropdown2" class="btn btn-outline-secondary dropdown-toggle">
									<option> MATCH FOUND </option>
									<option> MATCH NOT FOUND </option>
								</select>
								<input type="text" class="form-control col-sm-3" name="kdrugtestresult" id="txtBox2">	
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label"> Baallistics Result </label>
								<select Id="myDropdown3" class="btn btn-outline-secondary dropdown-toggle">
									<option> MATCH FOUND </option>
									<option> MATCH NOT FOUND </option>
								</select>
								<input type="text" class="form-control col-sm-3" name="kballisticsresult" id="txtBox3">	
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label"> Blood Group </label>
								<select Id="myDropdown4" class="btn btn-outline-secondary dropdown-toggle">
									<option> A+ </option>
									<option> O+ </option>
									<option> B+ </option>
									<option> AB+ </option>
									<option> A- </option>
									<option> O- </option>
									<option> B- </option>
									<option> AB- </option>									
								</select>
								<input type="text" class="form-control col-sm-3" name="kbloodgroup" id="txtBox4">	
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label"> Firearms Result </label>
								<select Id="myDropdown5" class="btn btn-outline-secondary dropdown-toggle">
									<option> MATCH FOUND </option>
									<option> MATCH NOT FOUND </option>
								</select>
								<input type="text" class="form-control col-sm-3" name="kfireresult" id="txtBox5">	
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
					<div style="background-color:black; margin-top:183px" class="row">
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
		
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		

		<script> $("#myDropdown1").change(function () {
				$("#txtBox1").val(this.value);
				}).change();
				
				$("#myDropdown2").change(function () {
				$("#txtBox2").val(this.value);
				}).change();
				
				$("#myDropdown3").change(function () {
				$("#txtBox3").val(this.value);
				}).change();
				
				$("#myDropdown4").change(function () {
				$("#txtBox4").val(this.value);
				}).change();
				
				$("#myDropdown5").change(function () {
				$("#txtBox5").val(this.value);
				}).change();
				
	</script>	
    </body>
</html>
