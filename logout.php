<?php
	require_once "core/connect.php";
 	session_unset();
  session_destroy();
  header("Location: index.php");
 exit();

 
?>