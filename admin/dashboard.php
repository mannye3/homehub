<?php
include"core/session.php";
include"core/stat.php";
include('inc/header.php');
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
                                    <h4 class="page-title">Dashboard  <?php echo $row["name"]; ?></h4>
                                    <ol class="breadcrumb">
                                        <!-- <li class="breadcrumb-item active">Welcome to Highdmin admin panel !</li> -->
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
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title">Manage Tickets</h4>

                                    <div class="text-center mt-4 mb-4">
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-3">
                                                <div class="card-box widget-flat border-success bg-success text-white">
                                                    <i class="fi-tag"></i>
                                                    <h3 class="m-b-10"><?php echo $approve; ?></h3>
                                                    <p class="text-uppercase m-b-5 font-13 font-600">Approved Properties</p>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-3">
                                                <div class="card-box bg-warning widget-flat border-warning text-white">
                                                    <i class="fi-archive"></i>
                                                    <h3 class="m-b-10"><?php echo $review; ?></h3>
                                                    <p class="text-uppercase m-b-5 font-13 font-600">Pending Properties</p>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-3">
                                                <div class="card-box widget-flat border-primary bg-primary text-white">
                                                    <i class="fi-help"></i>
                                                    <h3 class="m-b-10"><?php echo $total_p; ?></h3>
                                                    <p class="text-uppercase m-b-5 font-13 font-600">Total Properties</p>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-3">
                                                <div class="card-box bg-danger widget-flat border-danger text-white">
                                                    <i class="fi-delete"></i>
                                                    <h3 class="m-b-10"><?php echo $t_users; ?></h3>
                                                    <p class="text-uppercase m-b-5 font-13 font-600">Total Users</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                   <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-lg-12">

                                <div class="card-box">
                                    <div class="row">
                                        
                                        <div class="col-lg-12">
                                            <div id="calendar"></div>
                                        </div> <!-- end col -->
                                    </div>  <!-- end row -->
                                </div>

                             
                            </div>
                            <!-- end col-12 -->
                        </div> <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->
                                </div>
                            </div><!-- end col -->
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

         <!-- Jquery-Ui -->
        <script src="plugins/jquery-ui/jquery-ui.min.js"></script>

        <!-- SCRIPTS -->
        <script src="plugins/moment/moment.js"></script>
        <script src='plugins/fullcalendar/js/fullcalendar.min.js'></script>
        <script src="assets/pages/jquery.calendar.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>

<!-- Mirrored from coderthemes.com/highdmin/default/apps-tickets.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Apr 2018 10:32:38 GMT -->
</html>