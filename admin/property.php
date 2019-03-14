<?php
include"core/session.php";
include('inc/header.php');

$sql_pro_d = "SELECT * FROM property WHERE property_no=".$_GET['pro'];
            $query8 = mysqli_query($con, $sql_pro_d);
            $row3 = mysqli_fetch_array($query8);
            $user =$row3["user_code"];


            $sql4 = "SELECT * FROM pro_img  WHERE property_no=".$_GET['pro'];
            $query4 = mysqli_query($con, $sql4);


            $sql_us_pic = "SELECT * FROM users WHERE user_code='$user' ";
            $query7 = mysqli_query($con, $sql_us_pic);
            $row7 = mysqli_fetch_array($query7);
?>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
<?php
include('inc/nav.php');

?>

           <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

            <div class="content-page">

                <!-- Top Bar Start -->
                 <div class="topbar">

                    <nav class="navbar-custom">

                      <?php include"inc/nav2.php"; ?>

                        <ul class="list-inline menu-left mb-0">
                            <li class="float-left">
                                <button class="button-menu-mobile open-left disable-btn">
                                    <i class="dripicons-menu"></i>
                                </button>
                            </li>
                            <li>
                                <div class="page-title-box">
                                    <h4 class="page-title">Properties </h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#">Properties</a></li>
                                        
                                    </ol>
                                </div>
                            </li>

                        </ul>

                    </nav>

                </div>
                <!-- Top Bar End -->



                <!-- Start Page content -->
                <div class="content">
                    <div class="container-fluid">


                        <div class="row">
                            <div class="col-md-6">
                                <!-- Personal-Information -->
                                <div class="card-box">
                                    <h4 class="header-title mt-0 m-b-20"><?php echo $row3["title"]; ?></h4>
                                    <div class="panel-body">
                                        <p class="text-muted font-13">
                                            <?php echo $row3["details"]; ?>
                                        </p>




                                        <hr/>

                                        <div class="row">
                        <div class="col-md-12 ">    
                        <h4>Property Details:</h4>
                    </div>
                </div>
                                            <div class="row">
                                                
                                            <div class="col-md-6 "> 
                                            <ul class="text-muted font-13"> 
                                        <li><?php echo $row3["rooms"]; ?> Bedrooms</li>
                                        <li><?php echo $row3["type"]; ?></li>
                                       
                                        </ul>
                                            </div>

                                            <div class="col-md-6 "> 
                                            <ul class="text-muted font-13">   
                                        <li><?php echo $row3["bathrooms"]; ?> Bathrooms</li>
                                        <li>Area <span>530 sq ft</li>
                                        
                                        </ul>
                                        
                                            </div>
                                        </div>

                                                               
                                                            </div>
                                                        </div>
                                <!-- Personal-Information -->

                            

                            </div>


                            <div class="col-md-6">

                              
                                <!-- end row -->


                                <div class="card-box">
                                    <h4 class="header-title mt-0 mb-3">Pictures</h4>
                                     <div class="port">
                            <div class="portfolioContainer">

                                <?php
                    while ($row4 = mysqli_fetch_array($query4)) {
                                             ?>
                                <div class="col-sm-6 col-md-4 webdesign illustrator">
                                    <a href="../<?php echo $row4["pic"]; ?>" class="image-popup">
                                        <div class="portfolio-masonry-box">
                                            <div class="portfolio-masonry-img">
                                                <img src="../<?php echo $row4["pic"]; ?>" class="thumb-img img-fluid" alt="work-thumbnail">
                                            </div>
                                            
                                        </div>
                                    </a>
                                </div>

                                 <?php
                                }
                                ?>

                                
                            </div>
                        </div> 





                        <!-- End row -->
                                   
                                <div class="card-box">
                                   <!--something-->
                                </div>

                            </div>
                             <div class="card-box ribbon-box">
                                    <div class="ribbon ribbon-primary">Agent</div>
                                    <div class="clearfix"></div>
                                    <div class="inbox-widget">
                                        <a href="user.php?user=<?php echo $row3["user_code"]; ?>">
                                            <div class="inbox-item">
                                                <div class="inbox-item-img">
                                                     <?php include('core/pro-pic3.php');  ?>
                                                    </div>
                                                <p class="inbox-item-author"><?php echo $row3["fullname"]; ?></p>
                                               
                                                <p class="inbox-item-date m-t-10">
                                                    <button type="button" class="btn btn-icon btn-sm waves-effect waves-light btn-success"> View </button>
                                                </p>
                                            </div>
                                        </a>
                                       
                                       
                                    </div>
                                </div>
                            <!-- end col -->

                        </div>
                        <!-- end row -->


                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2018 © Highdmin. - Coderthemes.com
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>

        <!-- Counter Up  -->
        <script src="plugins/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="plugins/counterup/jquery.counterup.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>


         <script type="text/javascript" src="plugins/isotope/js/isotope.pkgd.min.js"></script>
        <script type="text/javascript" src="plugins/magnific-popup/js/jquery.magnific-popup.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            $(window).on('load', function () {
                var $container = $('.portfolioContainer');
                $container.isotope({
                    filter: '*',
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false
                    }
                });

                $('.portfolioFilter a').click(function(){
                    $('.portfolioFilter .current').removeClass('current');
                    $(this).addClass('current');

                    var selector = $(this).attr('data-filter');
                    $container.isotope({
                        filter: selector,
                        animationOptions: {
                            duration: 750,
                            easing: 'linear',
                            queue: false
                        }
                    });
                    return false;
                });
            });
            $(document).ready(function() {
                $('.image-popup').magnificPopup({
                    type: 'image',
                    closeOnContentClick: true,
                    mainClass: 'mfp-fade',
                    gallery: {
                        enabled: true,
                        navigateByImgClick: true,
                        preload: [0,1] // Will preload 0 - before current, and 1 after the current image
                    }
                });
            });
        </script>

    </body>

<!-- Mirrored from coderthemes.com/highdmin/default/extras-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Apr 2018 10:35:01 GMT -->
</html>