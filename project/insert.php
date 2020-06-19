<?php

require("includes/common.php");


$value = $_SESSION['value'];


$_SESSION['ccaseid'] = $_POST['ccaseid'];
$ccaseid = $_SESSION['ccaseid'];


//Retrieve the values

if(!empty($_POST['ccaseid'])) {
	$ccaseid = $_POST['ccaseid'];
	//$cofficerid = $_POST['cofficerid'];
	$cdate = $_POST['cdate'];
	$cstatus = $_POST['cstatus'];
	$caddress = $_POST['caddress'];
	$cases_query = "INSERT INTO CASES (CASE_ID, DATE, STATUS, ADDRESS) VALUES('$ccaseid','$cdate','$cstatus','$caddress')";
	$cases_submit = mysqli_query($con, $cases_query) or die(mysqli_error($con));
	if($cases_submit) {
		echo "<script>if(confirm('Insertion Successful! Proceed Next -->')){document.location.href='insertevidences.php'};</script>";
	}
	else {
		$message = "Couldnt insert values! Please Try again!";
		echo "<script>if(confirm('Couldnt insert values! Please Try again!')){document.location.href='insertcase.php'};</script>";
	}
}

?>
