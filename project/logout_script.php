<?php
	
	require("includes/common.php");
	
	session_start();
	if (!isset($_SESSION['email'])) {
		header('location: index.php');
	}
	
	$value = $_SESSION['value'];
	$accesslog = "UPDATE ACCESSLOGS SET LOGGEDOUT=NOW()
					WHERE ID = '$value'";
	$run_accesslog = mysqli_query($con, $accesslog) or die(mysqli_error($con));				
	
	
	session_destroy();
	header('location: index.php');

?>