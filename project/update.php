<?php

require("includes/common.php");


$value = $_SESSION['value'];


$updcaseid = $_SESSION['updcaseid'];
$username = $_SESSION['email'];

foreach($_POST as $key => $val) {
	
	if(!empty($val)) { 
		if($key==$_POST['cofficerid']) {
			$cofficerid = $_POST['cofficerid'];
			$query = "UPDATE CASES SET OFFICER_ID = '$cofficerid' WHERE CASE_ID = '" . $updcaseid . "' ";
			$update = mysqli_query($con, $query) or die(mysqli_error($con));
			echo "<script>if(confirm('Value updated')){document.location.href='home.php'};</script>";  
		}
	
		if($key=$_POST['cstatus']) {
			$cstatus = $_POST['cstatus'];
			$query = "UPDATE CASES SET STATUS='$cstatus' WHERE CASE_ID='" . $updcaseid . "' ";
			$update = mysqli_query($con, $query) or die(mysqli_error($con));
			echo "<script>if(confirm('Value updated')){document.location.href='home.php'};</script>";  
		}
	
		if($key=$_POST['cdate']) {
			$cdate = $_POST['cdate'];
			$query = "UPDATE CASES SET DATE='$cdate' WHERE CASE_ID='" . $updcaseid . "' ";
			$update = mysqli_query($con, $query) or die(mysqli_error($con));
			echo "<script>if(confirm('Value updated')){document.location.href='home.php'};</script>";  
		}
		
		if($key=$_POST['caddress']) {
			$caddress = $_POST['caddress'];
			$query = "UPDATE CASES SET ADDRESS='$caddress' WHERE CASE_ID='" . $updcaseid . "' ";
			$update = mysqli_query($con, $query) or die(mysqli_error($con));
			echo "<script>if(confirm('Value updated')){document.location.href='home.php'};</script>";  
		}
				
		
				
		if($key=$_POST['elabid']) {
			$elabid = $_POST['elabid'];
			$query = "UPDATE EVIDENCE SET LAB_ID='$elabid' WHERE CASE_ID='" . $updcaseid . "' ";
			$update = mysqli_query($con, $query) or die(mysqli_error($con));
			echo "<script>if(confirm('Value updated')){document.location.href='home.php'};</script>";  
		}
		
		
		if($key=$_POST['ephotodate']) {
			$ephotodate = $_POST['ephotodate'];
			$query = "UPDATE EVIDENCE SET PHOTO_DATE='$ephotodate' WHERE CASE_ID='" . $updcaseid . "' ";
			$update = mysqli_query($con, $query) or die(mysqli_error($con));
			echo "<script>if(confirm('Value updated')){document.location.href='home.php'};</script>";  
		}
		
		if($key=$_POST['eprocessingmethod']) {
			$eprocessingmethod = $_POST['eprocessingmethod'];
			$query = "UPDATE EVIDENCE SET PROCESSING_METHOD='$eprocessingmethod' WHERE CASE_ID='" . $updcaseid . "' ";
			$update = mysqli_query($con, $query) or die(mysqli_error($con));
			echo "<script>if(confirm('Value updated')){document.location.href='home.php'};</script>";  
		}
		
	
		
		if($key=$_POST['sname']) {
			$sname = $_POST['sname'];
			$query = "UPDATE SUSPECTS SET NAME='$sname' WHERE CASE_ID='" . $updcaseid . "' ";
			$update = mysqli_query($con, $query) or die(mysqli_error($con));
			echo "<script>if(confirm('Value updated')){document.location.href='home.php'};</script>";  
		}
		
		if($key=$_POST['saddress']) {
			$saddress = $_POST['saddress'];
			$query = "UPDATE SUSPECTS SET ADDRESS='$saddress' WHERE CASE_ID='" . $updcaseid . "' ";
			$update = mysqli_query($con, $query) or die(mysqli_error($con));
			echo "<script>if(confirm('Value updated')){document.location.href='home.php'};</script>";  
		}
		
		
		if($key=$_POST['fiseizingofficer']) {
			$fiseizingofficer = $_POST['fiseizingofficer'];
			$query = "UPDATE FIREARMS SET SEIZING_OFFICER='$fiseizingofficer' WHERE CASE_ID='" . $updcaseid . "' ";
			$update = mysqli_query($con, $query) or die(mysqli_error($con));
			echo "<script>if(confirm('Value updated')){document.location.href='home.php'};</script>";  
		}
		
		if($key=$_POST['fimakemodel']) {
			$fimakemodel = $_POST['fimakemodel'];
			$query = "UPDATE FIREARMS SET MAKE='$fimake' WHERE CASE_ID='" . $updcaseid . "' ";
			$update = mysqli_query($con, $query) or die(mysqli_error($con));
			echo "<script>if(confirm('Value updated')){document.location.href='home.php'};</script>";  
		}
		
		
		if($key=$_POST['filocationfound']) {
			$filocationfound = $_POST['filocationfound'];
			$query = "UPDATE FIREARMS SET LOCATION_FOUND='$filocationfound' WHERE CASE_ID='" . $updcaseid . "' ";
			$update = mysqli_query($con, $query) or die(mysqli_error($con));
			echo "<script>if(confirm('Value updated')){document.location.href='home.php'};</script>";  
		}
		
		
		if($key=$_POST['kdnaresult']) {
			$kdnaresult = $_POST['kdnaresult'];
			$query = "UPDATE KNOWN_FORENSICS SET DNA_RESULT='$kdnaresult' WHERE CASE_ID='" . $updcaseid . "' ";
			$update = mysqli_query($con, $query) or die(mysqli_error($con));
			echo "<script>if(confirm('Value updated')){document.location.href='home.php'};</script>";  
		}	
		
		if($key=$_POST['kdrugtestresult']) {
			$kdrugtestresult = $_POST['kdrugtestresult'];
			$query = "UPDATE KNOWN_FORENSICS SET DRUG_TEST_RESULT='$kdrugtestresult' WHERE CASE_ID='" . $updcaseid . "' ";
			$update = mysqli_query($con, $query) or die(mysqli_error($con));
			echo "<script>if(confirm('Value updated')){document.location.href='home.php'};</script>";  
		}	
		
		if($key=$_POST['kballisticsresult']) {
			$kballisticsresult = $_POST['kballisticsresult'];
			$query = "UPDATE KNOWN_FORENSICS SET BALLISTICS_RESULT='$kballisticsresult' WHERE CASE_ID='" . $updcaseid . "' ";
			$update = mysqli_query($con, $query) or die(mysqli_error($con));
			echo "<script>if(confirm('Value updated')){document.location.href='home.php'};</script>";  
		}	
		
		if($key=$_POST['kbloodgroup']) {
			$kbloodgroup = $_POST['kbloodgroup'];
			$query = "UPDATE KNOWN_FORENSICS SET BLOOD_GROUP='$kbloodgroup' WHERE CASE_ID='" . $updcaseid . "' ";
			$update = mysqli_query($con, $query) or die(mysqli_error($con));
			echo "<script>if(confirm('Value updated')){document.location.href='home.php'};</script>";  
		}	
		
		if($key=$_POST['kfireresult']) {
			$kfireresult = $_POST['kfireresult'];
			$query = "UPDATE KNOWN_FORENSICS SET FIREARMS_RESULT='$kfireresult' WHERE CASE_ID='" . $updcaseid . "' ";
			$update = mysqli_query($con, $query) or die(mysqli_error($con));
			echo "<script>if(confirm('Value updated')){document.location.href='home.php'};</script>";  
		}	
	}
		
}

$updatelog = "INSERT INTO UPDATELOGS VALUES(null, '$updcaseid', '$username', NOW())";
$run_updatelog = mysqli_query($con, $updatelog) or die(mysqli_error($con));


?>