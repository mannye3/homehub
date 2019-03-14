<?php
include('inc/header.php');
include('inc/select.php');
include('upload.php');

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
                                    <h4 class="page-title">Starter </h4>
                                    <!-- <ol class="breadcrumb">
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
                        <?php echo $row3['property_no'] ?> 

                         <?php echo $row3['features007'] ?> 

                        <div class="row">
                                            <h4 class="header-title m-t-0">Add Property Pictures</h4>
                                         <div class="form-group col-md-12">
                                        <div action="#" class="dropzone" id="dropzone">
                                        <div class="fallback">
                                            <input name="file" type="file" multiple />
                                        </div>
                                    </div>
                                </div>
                            </div>

                             <div align="right">
                                       <a href="feat_pic.php">  <button type="button"  class="btn btn-custom btn-rounded waves-light waves-effect" name="">Continue</button></a>
                                         </div>
                                        



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

        <!-- Bootstrap fileupload js -->
        <script src="plugins/bootstrap-fileupload/bootstrap-fileupload.js"></script>

        <!-- Dropzone js -->
        <script src="plugins/dropzone/dropzone.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>


          <!--Summernote js-->
        <script src="plugins/summernote/summernote-bs4.min.js"></script>

        <script>
            jQuery(document).ready(function(){
                $('.summernote').summernote({
                    height: 250,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false                 // set focus to editable area after initializing summernote
                });
            });
        </script>


    </body>

<!-- Mirrored from coderthemes.com/highdmin/default/page-starter.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Apr 2018 10:34:59 GMT -->
</html>