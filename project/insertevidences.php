<?php
	require("includes/common.php");
	if (!isset($_SESSION['email'])) {
    header('location: index.php');
}

$value = $_SESSION['value'];



$ccaseid = $_SESSION['ccaseid'];


if(isset($_POST["insert"]))  
 {  
$ecaseid = $_POST['ecaseid'];
$elabid = $_POST['elabid'];
$ephotodate = $_POST['ephotodate'];
$eprocessingmethod = $_POST['eprocessingmethod'];

      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"])); 
	  $file2 = addslashes(file_get_contents($_FILES["image2"]["tmp_name"]));
      $query = "INSERT INTO EVIDENCE (CASE_ID, LAB_ID, PHOTO, FINGERPRINT, PHOTO_DATE, PROCESSING_METHOD) VALUES('$ecaseid','$elabid','$file','$file2','$ephotodate','$eprocessingmethod')";  
      if(mysqli_query($con, $query))  
      {  
			echo "<script>if(confirm('Insertion Successful! Proceed Next -->')){document.location.href='insertfirearms.php'};</script>";
           //echo '<script>alert("Image Inserted into Database")</script>';  
      }  
	  else {
		$message = "Couldnt insert values! Please Try again!";
		echo "<script>if(confirm('Couldnt insert values! Please Try again!')){document.location.href='insertevidences.php'};</script>";
	}
 }  


$officer = "CALL `viewOfficer`()";
$run_officer = mysqli_query($con, $officer);


$lab = "CALL `viewLab`()";
$run_lab = mysqli_query($con, $lab);

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
                    <li><a href="#Evidences" style="text-decoration: none;"> Evidences </a></li>
			    </ul>
            </nav>
        </aside>
		
		
							<!-- Modal -->
							<div class="modal fade"  style="padding-top:10%;" id="myModal" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title"> Officer Details </h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<table class="table table-hover table-bordered">
												<thead>
												<tr>
													<th style="font-family:verdana; text-align:center" scope="col"> Officer Id </th>
													<th style="font-family:verdana; text-align:center" scope="col"> Name </th>
													<th style="font-family:verdana; text-align:center" scope="col"> Designation </th>						
												</tr>
												</thead>
												<tbody>
												<?php
												while($officer_r = mysqli_fetch_array($run_officer)) { ?>
												<tr>
												<th style="font-family:verdana; text-align:center" scope="row"> <?php echo $officer_r['OFFICER_ID']; ?> </th>
												<td style="font-family:verdana; text-align:center"> <?php echo $officer_r['NAME']; ?> </td>
												<td style="font-family:verdana; text-align:center"> <?php echo $officer_r['DESIGNATION']; ?> </td>
												</tr>
												<?php } ?>
												</tbody>
												</table>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal"> Close </button>
																								
												</div>
											
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
											<h5 class="modal-title"> Lab Details </h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<table class="table table-hover table-bordered">
											<thead>
											<tr>
												<th style="font-family:verdana; text-align:center" scope="col"> Lab Id </th>
												<th style="font-family:verdana; text-align:center" scope="col"> Technician Id </th>
												<th style="font-family:verdana; text-align:center" scope="col"> Lab Domain </th>	
												<th style="font-family:verdana; text-align:center" scope="col"> Address </th>												
											</tr>
											</thead>
											<tbody>
											<?php
											while($lab_r = mysqli_fetch_array($run_lab)) { ?>
											<tr>
												<th style="font-family:verdana; text-align:center" scope="row"> <?php echo $lab_r['LAB_ID']; ?> </th>
												<td style="font-family:verdana; text-align:center"> <?php echo $lab_r['TECH_ID']; ?> </td>
												<td style="font-family:verdana; text-align:center"> <?php echo $lab_r['SPECIALIST']; ?> </td>
												<td style="font-family:verdana; text-align:center"> <?php echo $lab_r['ADDRESS']; ?> </td>
											</tr>
											<?php } ?>
											</tbody>
											</table>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal"> Close </button>
																								
												</div>
											
										</div>										
									</div>
								</div>
							</div>
							<!-- Modal -->
		
		
		
		
		<div id="main-wrapper">
			
		    <div class="main-content">
				<div class="content-header">
		            <h1> Write Report </h1>
		        </div>
				
				<form action="capture.php" method="POST" enctype="multipart/form-data">	
					<section id="Evidences">
		            <h2 class="title"> Evidences </h2>
		            
							<div class="form-group row">
								<label class="col-sm-2 col-form-label"> Photo </label>
								
								<div class="col-sm-3">
									<input type="submit" name="ecapture"  value="Capture Image to Upload" class="btn btn-info"/>  
								</div>
				</form>				
								&nbsp OR &nbsp
								
				<form method="POST" enctype="multipart/form-data">					
								<div class="col-sm-3">
									<input type="file" name="image" id="image" />  
								</div>
																									
							</div>		
				
							<div class="form-group row">
								<label class="col-sm-2 col-form-label"> Fingerprint </label>
								<div class="col-sm-3">
									<input type="file" name="image2" id="image2" />  
								</div>																									
							</div>
						
							<div class="form-group row">
								<label class="col-sm-2 col-form-label"> Case Id </label>
								<div class="col-sm-3">
									<input type="text" class="form-control" name="ecaseid" value="<?php echo $ccaseid ?>" required="true">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label"> Lab Id </label>
								<div class="col-sm-3">
									<input type="text" class="form-control" name="elabid" placeholder="" required="true">
								</div>
							</div>
																											
														
							
							<div class="form-group row">
								<label class="col-sm-2 col-form-label"> Photo Date </label>
								<div class="col-sm-3">
									<input type="date" class="form-control" name="ephotodate" placeholder="" required="true">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label"> Processing Method </label>
								<div class="col-sm-3">
									<input type="text" class="form-control" name="eprocessingmethod" placeholder="" required="true">
								</div>
							</div>
							
							<div class="form-group row">
								<div class="col-sm-10">
									<button type="submit" name="insert" class="btn btn-primary btn-lg"> Proceed </button>
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
		
		
		<!-- Configure a few settings and attach camera -->
<script language="JavaScript">
    Webcam.set({
        width: 490,
        height: 390,
        image_format: 'jpeg',
        jpeg_quality: 90
    });
  
    Webcam.attach( '#my_camera' );
  
    function take_snapshot() {
        Webcam.snap( function(data_uri) {
            $(".image-tag").val(data_uri);
            document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
        } );
    }
</script>
<!-- Configure a few settings and attach camera -->
 
 
 <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  
 
    </body>
</html>