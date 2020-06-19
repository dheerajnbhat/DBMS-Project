<?php

require("includes/common.php");


$value = $_SESSION['value'];



//Retrieve the values


$llabid = $_POST['llabid'];
$ltechid = $_POST['ltechid'];
$lspecialistid = $_POST['lspecialistid'];
$laddress = $_POST['laddress']; 

//Queries

$lab_query = "INSERT INTO LAB (LAB_ID, TECH_ID, SPECIALIST, ADDRESS) VALUES('$llabid','$ltechid','$lspecialistid','$laddress')";


$lab_submit = mysqli_query($con, $lab_query) or die(mysqli_error($con));


if (!$lab_submit) {
  header('location: works.php');
} else {  
  header('location: departments.php');
}

?>