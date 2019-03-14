 <?php
require_once('connect.php');
$v_code = $_GET['video'];
		

$sql = "SELECT * FROM  video WHERE v_code='$v_code' ";
$query	= mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

$email = $row['email'];




$sql2 = "SELECT * FROM  video ORDER BY RAND() LIMIT 0,3";
$query2	= mysqli_query($con, $sql2);



/*$sql4 = "SELECT * FROM users ORDER BY RAND() LIMIT 0,3";
$query4  = mysqli_query($con, $sql4);*/

/*if ($row['user_code']="") {
	header("Location: home.php");
}*/


/*if(!isset($user_code))
{
header("Location: index.php");
}*/

?>