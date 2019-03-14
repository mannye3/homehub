<?php
include('inc/header.php');
include('inc/select.php');
include('inc/logic.php');

?>


    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
<?php
include('inc/nav.php');

?>



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
                                    <h4 class="page-title"></h4>
                                   <!--  <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Highdmin</a></li>
                                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                        <li class="breadcrumb-item active">Starter</li>
                                    </ol> -->
                                </div>
                            </li>

                        </ul>

                    </nav>

                </div>
                <!-- Top Bar End -->



                <!-- Start Page content -->
                <div class="content">

                    <div class="container-fluid">
                       <!--  <?php echo $row3['property_no'] ?> -->
                        <form action="" method="post">

                           <div class="card-box">
                                    <h4 class="header-title mt-0 mb-3">Select Feature Picture</h4>
                                     <div class="port">
                            <div class="portfolioContainer">

                                    <?php

                              while($row4 =mysqli_fetch_array($query4)){
                                 
                             
                             echo '
                                <div class="col-sm-6 col-md-4 webdesign illustrator">
                                  
                                        <div class="portfolio-masonry-box">
                                          

        <input type="radio" class="inline thumb-img img-fluid" name="img" value="'.$row4['pic'].'"><img src="'.$row4['pic'].'" alt="" width="150" height="100">
                                               
                                         
                                            
                                        </div>
                                   
                                </div>';
                            }
                            ?>


                            </div>
                        </div>  


                             <div align="right">
                                        <button type="submit" name="feat_pic"  class="btn btn-custom btn-rounded waves-light waves-effect" >Submit</button></a>
                                         </div>

                                     </form>
                                        



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
     <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>

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

<!-- Mirrored from coderthemes.com/highdmin/default/page-starter.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Apr 2018 10:34:59 GMT -->
</html>