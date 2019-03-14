<?php

$uploadDir = 'upload';

$property_no = $row3['property_no'];
$upload_date = date('l jS \of F Y ');


if (!empty($_FILES)) {
 $tmpFile = $_FILES['file']['tmp_name'];
 $filename = $uploadDir.'/'.time().'-'. $_FILES['file']['name'];
 move_uploaded_file($tmpFile,$filename);
 



          $sql = "INSERT INTO `pro_img`(`pic`, `property_no`,`num`, `status`, `upload_date`) VALUES ('".$filename."','".$property_no."','1','1','".$upload_date."')";
          $query = mysqli_query($con, $sql);


}

?>