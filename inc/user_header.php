<!DOCTYPE php>
<php lang="zxx">

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

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>

    <!-- php5 shim and Respond.js for IE8 support of php5 elements and media queries -->
    <!--[if lt IE 9]>
    <script  src="js/php5shiv.min.js"></script>
    <script  src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- Main header start -->
<header class="main-header header-2 fixed-header">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand  pad-0" href="index.php">
             <img src="img/logos/house.png" style="width: 120px; height: 100px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto d-lg-none d-xl-none">
                    <li class="nav-item dropdown active">
                        <a href="dashboard.php" class="nav-link">Datfttttshboard</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="messages.php" class="nav-link">Messages</a>
                    </li>
                   
                    <li class="nav-item dropdown">
                        <a href="my-properties.php" class="nav-link">My Properties</a>
                    </li>
                   
                    <li class="nav-item dropdown">
                        <a href="submit-property.php" class="nav-link">Submit Property</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="my-profile.php" class="nav-link">My Profile</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="core/logout.php" class="nav-link">Logout</a>
                    </li>
                </ul>
                <div class="navbar-buttons ml-auto d-none d-xl-block d-lg-block">
                    <ul>
                        <li>
                            <div class="dropdown btns">
                                <a class="dropdown-toggle" data-toggle="dropdown">
                                    <?php
                                    include('core/pro-pic.php');
                                    ?>
                                    My Account
                                </a>
                                <div class="dropdown-menu">
                                    
                                    <a class="dropdown-item" href="my-profile.php">My profile</a>
                                    <a class="dropdown-item" href="core/logout.php">Logout</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a class="btn btn-theme btn-md" href="submit-property.php">Submit property</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!-- Main header end -->