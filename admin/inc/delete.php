<?php
require_once('connect.php');
		$sql ="DELETE FROM  property WHERE id=".$_GET['id'];
			$query =mysqli_query($con, $sql);
			header('Location: ../properties.php');


?>