<?php
	session_start();
	require_once "googleapi/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("1053384702882-jdp5pn0dn73k53ipoiseupj48fsej442.apps.googleusercontent.com");
	$gClient->setClientSecret("aId1lPdYRZ4Wq1jojBgz90fD");
	$gClient->setApplicationName("HomeHub");
	$gClient->setRedirectUri("http://localhost/neer/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");	
	$con = new mysqli('localhost', 'root','' ,'neer');
    if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}	
?>