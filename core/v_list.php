<?php
$sql = "SELECT * FROM video WHERE email='$user_check' ";
$v_list= mysqli_query($con, $sql);


$sql2 = "SELECT * FROM video";
$list= mysqli_query($con, $sql2);


?>