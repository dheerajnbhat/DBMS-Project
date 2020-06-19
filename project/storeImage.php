<?php
    
    $img = $_POST['image'];
    $folderPath = "upload/";
	
    $image_parts = explode(";base64,", $img);
    $image_type_aux = explode("image/", $image_parts[0]);
    $image_type = $image_type_aux[1];
  
    $image_base64 = base64_decode($image_parts[1]);
    $fileName = uniqid() . '.jpg';
  
    $file = $folderPath . $fileName;
    file_put_contents($file, $image_base64);
  
    print_r($fileName);
	header('location: insertevidences.php');
?>