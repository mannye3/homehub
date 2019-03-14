<?php
require('connect.php');
$user_check=$_SESSION['email'];		
$sql = "SELECT * FROM users WHERE email='$user_check' ";
$query 	= mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);


?>