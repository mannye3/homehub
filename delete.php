<?php
include('core/connect.php');
if(isset($_POST['id'])){
    $id = $_POST['id'];
    	$sql ="DELETE FROM  pro_img  WHERE id='$id'";
		$query =mysqli_query($con, $sql);

}
?>