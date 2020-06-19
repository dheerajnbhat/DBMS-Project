<?php

require("includes/common.php");


$value = $_SESSION['value'];


//Retrieve the values


$lttechid = $_POST['lttechid'];
$ltname = $_POST['ltname'];
$ltdesignation = $_POST['ltdesignation'];
$ltdepartment = $_POST['ltdepartment'];


//Queries

$lt_query = "INSERT INTO LAB_TECHS (TECH_ID, NAME, DESIGNATION, DEPARTMENT) VALUES('$lttechid','$ltname','$ltdesignation','$ltdepartment')";


$lt_submit = mysqli_query($con, $lt_query) or die(mysqli_error($con));


if (!$lt_submit) {
  header('location: works.php');
} else {  
  header('location: departments.php');
}



?>