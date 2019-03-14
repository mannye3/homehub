<?php
include('connect.php');

$property_no = $_GET['property_no'];


		
		$sql3 = "SELECT * FROM property WHERE property_no='$property_no' ";
		$query3 = mysqli_query($con, $sql3);
		$row3 = mysqli_fetch_array($query3);


	$sql4 = "SELECT * FROM pro_img  where property_no='$property_no'";
 	$query4 = mysqli_query($con, $sql4);




 	
				$st = "SELECT DISTINCT state FROM statelga";
				$stlg = mysqli_query($con, $st);



 	

?>