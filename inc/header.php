<?php
require_once('core/connect.php');
ini_set('display_errors', '0');         # don't show any errors...
error_reporting(E_ALL | E_STRICT);
$user_check=$_SESSION['email'];     
$sql = "SELECT * FROM users WHERE email='$user_check' ";
$query  = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>


<!DOCTYPE html>
<html lang="zxx">
<head>

   <title>Real Estate and Property in Nigeria for Sale and Rent - HomeHub.com.ng</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-submenu.css">

    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/leaflet.css" type="text/css">
    <link rel="stylesheet" href="css/map.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" type="text/css" href="fonts/linearicons/style.css">
    <link rel="stylesheet" type="text/css"  href="css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css"  href="css/dropzone.css">
    <link rel="stylesheet" type="text/css"  href="css/slick.css">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="css/skins/default.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="img/logos/hb.png" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,300,700">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="css/ie10-viewport-bug-workaround.css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script  src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script  src="js/ie-emulation-modes-warning.js"></script>

   <!-- SWEET ALERT SCRIPT-->
     
  
</head>
<body>


<!-- Main header start -->
<header class="main-header header-transparent sticky-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="index.php">
                <img src="img/logos/house.png" width="100"  alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item  ">
                        <a href="index.php" class="nav-link link-color active">
                            Home
                        </a>
                       
                    </li>

                     <!--  <li class="nav-item ">
                        <a  href="about.php" class="nav-link link-color">
                            About
                        </a>
                       
                    </li> -->

                     <li class="nav-item">
                        <a href="rent.php" class="nav-link link-color">
                            For Rent
                        </a>
                       
                    </li>
                     <li class="nav-item ">
                        <a  href="sale.php" class="nav-link link-color">
                            For Sale
                        </a>
                       
                    </li>

                    <li class="nav-item ">
                        <a  href="agents.php" class="nav-link link-color">
                            Agents
                        </a>
                       
                    </li>
                    <?php
                    if(isset($user_check))
                        {
                        echo '<li class="nav-item ">
                        <a  href="dashboard.php" class="nav-link link-color">
                            Dashboard
                        </a>
                       
                    </li>';
                        }

                        else{
                            echo'<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            My Account
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="login.php">Login</a></li>
                            <li><a class="dropdown-item" href="signup.php">Register</a></li>
                        </ul>
                    </li>';
                        }
               

?>
                   
                     
                   <!--  <li class="nav-item sp">
                        <a href="submit-property.html" class="nav-link link-color"><i class="fa fa-plus"></i> Submit Property</a>
                    </li> -->
                </ul>
            </div>
        </nav>
    </div>
</header>
<!-- Main header end -->