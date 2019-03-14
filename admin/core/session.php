<?php
include"connect.php";
$admin_check=$_SESSION['email'];
		
$sql = "SELECT * FROM admin WHERE email='$admin_check' ";
$query 	= mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);


if(!isset($admin_check))
{
header("Location: index.php");
}


?>