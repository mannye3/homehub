<?php
include('connect.php');

$state1 = $_POST['state1'];
$sql= "select * from statelga where state='$state1'";
$query = mysqli_query($con, $sql);

while($res = $query->fetch_assoc()){
echo '<option value="'.$res['lga'].'">'.$res['lga'].'</option>';
	
}






?>