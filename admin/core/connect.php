<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "neer";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

/*ini_set('display_errors', '0');         # don't show any errors...
error_reporting(E_ALL | E_STRICT);  */

?>




