<?php
include('core/connect.php');
date_default_timezone_set("Africa/Lagos");
$uploadDir = "upload"; // Upload directory

$property_no=$_SESSION['property_no']; 
$upload_date = date('jS \ F Y h:i:s A');



$tmpFile = $_FILES['file']['tmp_name'];
 $filename = $uploadDir.'/'.time().'-'. $_FILES['file']['name'];
 move_uploaded_file($tmpFile,$filename);
 
  $sql = "INSERT INTO `pro_img`(`pic`, `property_no`,`num`, `status`, `upload_date`) VALUES ('".$filename."','".$property_no."','1','1','".$upload_date."')";
          $query = mysqli_query($con, $sql);


          echo $query;

           // // echo "<script language='javascript' type='text/javascript'>

           // //              window.location.href='dashboard.php';

           // //              </script>";

           // header('Location: add_pictures.php');


?>


 
