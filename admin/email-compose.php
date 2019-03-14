<?php
$user = $_GET['user'];
include"core/session.php";
include('core/logic.php');
include('core/select.php');
include('inc/header.php');

$sql = "SELECT * FROM users WHERE user_code='$user'";
$query  = mysqli_query($con, $sql);
$row4 =  mysqli_fetch_assoc($query);
?>


    <body>

        <!-- Begin page -->
        <div id="wrapper">
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

                        <ul class="list-unstyled topbar-right-menu float-right mb-0">

                            <!-- <li class="hide-phone app-search">
                                <form>
                                    <input type="text" placeholder="Search..." class="form-control">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </li> -->

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <i class="fi-bell noti-icon"></i>
                                    <span class="badge badge-danger badge-pill noti-icon-badge">1</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">

                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                       <!--  <h5 class="m-0"><span class="float-right"><a href="#" class="text-dark"><small>Clear All</small></a> </span>Notification</h5> -->
                                    </div>

                                    <div class="slimscroll" style="max-height: 230px;">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-success"><i class="mdi mdi-comment-account-outline"></i></div>
                                            <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">1 min ago</small></p>
                                        </a>

                                      
                                    </div>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                        View all <i class="fi-arrow-right"></i>
                                    </a>

                                </div>
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <i class="fi-speech-bubble noti-icon"></i>
                                    <span class="badge badge-custom badge-pill noti-icon-badge">1</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">

                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                       <!--  <h5 class="m-0"><span class="float-right"><a href="#" class="text-dark"><small>Clear All</small></a> </span>Chat</h5> -->
                                    </div>

                                    <div class="slimscroll" style="max-height: 230px;">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon"><img src="assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                            <p class="notify-details">Cristina Pride</p>
                                            <p class="text-muted font-13 mb-0 user-msg">Hi, How are you? What about our next meeting</p>
                                        </a>

                                       
                                    </div>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                        View all <i class="fi-arrow-right"></i>
                                    </a>

                                </div>
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <img src="assets/images/photo.jpg" alt="user" class="rounded-circle"> <span class="ml-1">Emmanuel John <i class="mdi mdi-chevron-down"></i> </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fi-head"></i> <span>My Account</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fi-cog"></i> <span>Settings</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fi-help"></i> <span>Support</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fi-lock"></i> <span>Lock Screen</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fi-power"></i> <span>Logout</span>
                                    </a>

                                </div>
                            </li>

                        </ul>

                        <ul class="list-inline menu-left mb-0">
                            <li class="float-left">
                                <button class="button-menu-mobile open-left disable-btn">
                                    <i class="dripicons-menu"></i>
                                </button>
                            </li>
                            <li>
                                <div class="page-title-box">
                                    <h4 class="page-title">Inbox </h4>
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

                            <!-- Right Sidebar -->
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <!-- Left sidebar -->
                                    <div class="inbox-leftbar">

                                        <a href="email-compose.php" class="btn btn-danger btn-block waves-effect waves-light">Compose</a>

                                        <div class="mail-list mt-4">
                                            <a href="#" class="list-group-item border-0 text-danger"><i class="mdi mdi-inbox font-18 align-middle mr-2"></i>Inbox<span class="badge badge-danger float-right ml-2 mt-1">8</span></a>
                                           
                                            <a href="#" class="list-group-item border-0"><i class="mdi mdi-send font-18 align-middle mr-2"></i>Sent Mail</a>
                                           
                                        </div>

                                      

                                    </div>
                                    <!-- End Left sidebar -->

                                    <div class="inbox-rightbar">

                                        

                                        <div class="mt-4">

                                            <form role="form" method="post" action="">
                                                <div class="form-group">
                                                    <input type="text" readonly="" name="name" value="<?php echo $row4["name"]; ?>" class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <input type="email" readonly="" value="<?php echo $row4["email"]; ?>" name="email" class="form-control" placeholder="To">
                                                </div>

                                                <div class="form-group">
                                                    <input type="hidden" readonly="" value="<?php echo $row4["user_code"]; ?>" name="user_code" class="form-control" placeholder="To">
                                                </div>


                                                <div class="form-group">
                                                    <input type="text" name="subject" class="form-control" placeholder="Subject">
                                                </div>
                                                <div class="form-group">
                                                    <textarea class="summernote" name="msg"></textarea>
                                                  
                                                </div>

                                                <div class="form-group m-b-0">
                                                    <div class="text-right">
                                                       <!--  <button type="button" class="btn btn-success waves-effect waves-light m-r-5"><i class="fa fa-floppy-o"></i></button>
                                                        <button type="button" class="btn btn-success waves-effect waves-light m-r-5"><i class="fa fa-trash-o"></i></button> -->
                                                        <button type="submit" name="message" class="btn btn-purple waves-effect waves-light"> <span>Send</span> <i class="fa fa-send m-l-10"></i> </button>
                                                    </div>
                                                </div>

                                            </form>
                                        </div> <!-- end card-->

                                    </div>

                                    <div class="clearfix"></div>
                                </div>

                            </div> <!-- end Col -->

                        </div><!-- End row -->

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

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>

<!-- Mirrored from coderthemes.com/highdmin/default/email-compose.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Apr 2018 10:32:58 GMT -->
</html>