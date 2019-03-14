 <?php
 $user_code = $_GET['user'];
		

$sql = "SELECT * FROM  users WHERE user_code='$user_code' ";
$query	= mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);


/*$sql4 = "SELECT * FROM users ORDER BY RAND() LIMIT 0,3";
$query4  = mysqli_query($con, $sql4);*/

if ($row['user_code']="") {
	header("Location: home.php");
}


/*if(!isset($user_code))
{
header("Location: index.php");
}*/

?>