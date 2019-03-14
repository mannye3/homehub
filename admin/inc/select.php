<?php
include('connect.php');

$property_no =  $_SESSION['property_no'];


		
		$sql3 = "SELECT * FROM property WHERE property_no='$property_no' ";
		$query3 = mysqli_query($con, $sql3);
		$row3 = mysqli_fetch_array($query3);


	$sql4 = "SELECT * FROM pro_img  where property_no='$property_no'";
 	$query4 = mysqli_query($con, $sql4);



 	$sql5 = "SELECT * FROM property ";
 	$query5 = mysqli_query($con, $sql5);



$st = "SELECT DISTINCT state FROM statelga";
$stlg = mysqli_query($con, $st);

$sql_features = "SELECT * FROM property_features";
$query_features = mysqli_query($con, $sql_features);


?>