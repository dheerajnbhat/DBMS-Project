<?php


$value = $_SESSION['value'];


// This page updates the user password
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}

$old_pass = $_POST['oldpassword'];
$old_pass = mysqli_real_escape_string($con, $old_pass);
$old_pass = md5($old_pass);

$new_pass = $_POST['password'];
$new_pass = mysqli_real_escape_string($con, $new_pass);
$new_pass = md5($new_pass);

$new_pass1 = $_POST['password1'];
$new_pass1 = mysqli_real_escape_string($con, $new_pass1);
$new_pass1 = md5($new_pass1);

$query = "SELECT EMAIL, PASSWORD FROM USERS WHERE EMAIL ='" . $_SESSION['email'] . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$row = mysqli_fetch_array($result);
$orig_pass = $row['PASSWORD'];


if ($new_pass != $new_pass1) {
    echo "<script>if(confirm('The two passwords dont match!')){document.location.href='settings.php'};</script>";
} 
else {
    if ($old_pass == $orig_pass) {
        $upquery = "UPDATE USERS SET PASSWORD = '" . $new_pass . "' WHERE EMAIL = '" . $_SESSION['email'] . "' ";
        mysqli_query($con, $upquery) or die(mysqli_error($con));
        echo "<script>if(confirm('Password Updated!')){document.location.href='home.php'};</script>";
    } else {
        echo "<script>if(confirm('Wrong Old Password!')){document.location.href='settings.php'};</script>";
	}
}
?>