// loaddata.php

<?php

if( isset( $_POST['user_name'] ) )
{

$name = $_POST['user_name'];

$host = 'localhost';
$user = 'root';
$pass = '';

mysqli_connect($host, $user, $pass);

mysqli_select_db('neer');

$selectdata = " SELECT * FROM users WHERE name LIKE '$name%' ";

$query = mysqli_query($selectdata);

while($row = mysqli_fetch_array($query))
{
 echo "<p>".$row['name']."</p>";
 echo "<p>".$row['email']."</p>";
}

}
?>