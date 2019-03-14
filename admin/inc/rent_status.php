<?php

require_once('connect.php');

		$sql ="SELECT rent_status FROM property WHERE id='".$_GET['id']."'";

			$query = mysqli_query($con, $sql);

			$rw= mysqli_fetch_array($query);


if($rw['rent_status'] == 0){

	$sql = "UPDATE property SET rent_status = 1 WHERE id=".$_GET['id'];
	$query = mysqli_query($con, $sql);
	header('Location: ../properties.php');


	}

else{

	$sql= "UPDATE property SET rent_status = 0 WHERE id=".$_GET['id'];

	$query= mysqli_query($con, $sql);



	header('Location: ../properties.php');

}





?>