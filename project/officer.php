<?php

require("includes/common.php");


$value = $_SESSION['value'];



//Retrieve the values

$oofficerid = $_POST['oofficerid'];
$oname = $_POST['oname'];
$odesignation = $_POST['odesignation'];
$a=1;

//Queries

if($a==2) {
	$officer_query = "CALL insertOfficer('".$oofficerid."','".$oname."','".$odesignation."')";
}
else {
$officer_query = "INSERT INTO OFFICER (OFFICER_ID, NAME, DESIGNATION) VALUES('$oofficerid','$oname','$odesignation')";
}
	

$officer_submit = mysqli_query($con, $officer_query) or die(mysqli_error($con));


if (!$officer_submit) {
  header('location: works.php');
} else {  
  header('location: departments.php');
}

?>