<?php

require("includes/common.php");


$value = $_SESSION['value'];


  // Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.
  $id = $_POST['id'];
  $id = mysqli_real_escape_string($con, $id);
  
  $name = $_POST['name'];
  $name = mysqli_real_escape_string($con, $name);

  $name = strtolower($name);
  $email = preg_replace('/\s+/', '', "$name$id@fds.com");

  $password = $_POST['password'];
  $password = mysqli_real_escape_string($con, $password);
  $password = MD5($password);

  $contact = $_POST['contact'];
  $contact = mysqli_real_escape_string($con, $contact);

  $city = $_POST['city'];
  $city = mysqli_real_escape_string($con, $city);

  $regex_num = "/^[789][0-9]{9}$/";

  $query = "SELECT * FROM USERS WHERE ID='$id'";
  $result = mysqli_query($con, $query)or die($mysqli_error($con));
  $num = mysqli_num_rows($result);
  
  if ($num != 0) {
	echo "<script>if(confirm('Id Already Exists!Try Again')){document.location.href='users.php'};</script>";  
  }  
   else if (!preg_match($regex_num, $contact)) {
	echo "<script>if(confirm('Not a valid phone number!Try Again')){document.location.href='users.php'};</script>";    
  } else {   
    $query = "INSERT INTO USERS VALUES('" . $id . "','" . $name . "','" . $email . "','" . $password . "','" . $contact . "','" . $city . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));   
    echo "<script>if(confirm('User Successfully Inserted!')){document.location.href='users.php'};</script>";  
  }
?>