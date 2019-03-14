<?php
require_once('connect.php');
		$sql ="DELETE FROM  property WHERE property_no=".$_GET['del_pro'];
			$query =mysqli_query($con, $sql);
			

		$sql ="DELETE FROM  pro_img WHERE property_no=".$_GET['del_pro'];
			$query =mysqli_query($con, $sql);
			header('Location: ../my-properties.php');


?>