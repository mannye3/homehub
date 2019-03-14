<?php
$sql12 ="SELECT SUM(num) AS approve FROM property WHERE user_code='$user' AND status=1 ";
	$query12 =mysqli_query($con, $sql12);
	$rw12 =mysqli_fetch_array($query12);
		$pro_approve = $rw12['approve'];



	$sql13 ="SELECT SUM(num) AS review FROM property WHERE user_code='$user' AND status=0 ";
	$query13 =mysqli_query($con, $sql13);
	$rw13 =mysqli_fetch_array($query13);
		$pro_review = $rw13['review'];


		$sql14 ="SELECT SUM(num) AS t_msg FROM message WHERE email='$user_check' ";
		$query14 =mysqli_query($con, $sql14);
		$rw14 =mysqli_fetch_array($query14);
			$t_msg = $rw14['t_msg'];




		$sql15 ="SELECT SUM(num) AS msg FROM message WHERE email='$user_check' AND status=1 ";
		$query15 =mysqli_query($con, $sql15);
		$rw15 =mysqli_fetch_array($query15);
			$msg = $rw15['msg'];
?>