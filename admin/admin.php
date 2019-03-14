<?php
include('inc/header.php');

?>


    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
<?php
include('inc/nav.php');

?>






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
                                    <h4 class="page-title">Dashboard </h4>
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
                            <div class="col-md-4">
                                <!-- Personal-Information -->
                                <div class="card-box">
                                  
                                    <div class="panel-body">
                                       <center><img src="assets/images/photo.jpg" width="150" height="150" ></center>

                                        <hr/>

                                        <div class="text-left">
                                            <p class="text-muted font-13"><strong>Full Name :</strong> <span class="m-l-15">Emmanuel John</span></p>


                                            <p class="text-muted font-13"><strong>Admin Type :</strong> <span class="m-l-15">Super Admin</span></p>

                                            <p class="text-muted font-13"><strong>Mobile :</strong><span class="m-l-15">08062165573</span></p>

                                            <p class="text-muted font-13"><strong>Email :</strong> <span class="m-l-15">emmanuel@me.com</span></p>

                                            <p class="text-muted font-13"><strong>State :</strong> <span class="m-l-15">Lagos</span></p>

                                             <p class="text-muted font-13"><strong>City :</strong> <span class="m-l-15">Surulere</span></p>

                                           

                                        </div>

                                       <!--  <ul class="social-links list-inline m-t-20 m-b-0">
                                            <li class="list-inline-item">
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="Skype"><i class="fa fa-skype"></i></a>
                                            </li>
                                        </ul> -->
                                    </div>
                                </div>
                                <!-- Personal-Information -->

                              

                            </div>


                            <div class="col-md-8">

                               <!--  <div class="row">

                                    <div class="col-sm-4">
                                        <div class="card-box tilebox-one">
                                            <i class="icon-layers float-right text-muted"></i>
                                            <h6 class="text-muted text-uppercase mt-0">Pending Properties</h6>
                                            <h2 class="m-b-20" data-plugin="counterup">5</h2>
                                           
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="card-box tilebox-one">
                                            <i class="icon-paypal float-right text-muted"></i>
                                            <h6 class="text-muted text-uppercase mt-0">Active Properties</h6>
                                            <h2 class="m-b-20"><span data-plugin="counterup">5</span></h2>
                                            
                                        </div>
                                    </div><

                                    <div class="col-sm-4">
                                        <div class="card-box tilebox-one">
                                            <i class="icon-rocket float-right text-muted"></i>
                                            <h6 class="text-muted text-uppercase mt-0">Total Properties</h6>
                                            <h2 class="m-b-20" data-plugin="counterup">10</h2>
                                            
                                        </div>
                                    </div>

                                </div> -->
                                <!-- end row -->


                                <div class="card-box">
                                    <h4 class="header-title mt-0 mb-3">Edit Profile </h4>
                                    <div class="">
                                        <div class="">
                                            <form action="#">
                                        <div class="form-group">
                                            <label for="userName">First Name<span class="text-danger">*</span></label>
                                            <input type="text" name="nick" parsley-trigger="change" required
                                                   value="Emmanuel" class="form-control" id="userName">
                                        </div>

                                         <div class="form-group">
                                            <label for="userName">Last Name<span class="text-danger">*</span></label>
                                            <input type="text" name="nick" parsley-trigger="change" required
                                                   value="John" class="form-control" id="userName">
                                        </div>

                                        <div class="form-group">
                                           <label for="emailAddress">Email address<span class="text-danger">*</span></label>
                                            <input type="text" name="nick" parsley-trigger="change" required
                                                  required value="Emmanuel@me.com" class="form-control" id="userName">
                                        </div>



                                         <div class="form-group">
                                            <label for="emailAddress">Phone Number<span class="text-danger">*</span></label>
                                            <input type="text" name="nick" parsley-trigger="change" required
                                                  required value="08062165573" class="form-control" id="userName">
                                        </div>

                                        <div class="form-group">
                                            <label for="pass1">Password<span class="text-danger">*</span></label>
                                            <input id="pass1" type="password" placeholder="Password" required
                                                   class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="passWord2">Confirm Password <span class="text-danger">*</span></label>
                                            <input data-parsley-equalto="#pass1" type="password" required
                                                   placeholder="Password" class="form-control" id="passWord2">
                                        </div>
                                    

                                        <div class="form-group text-right m-b-0">
                                            <button class="btn btn-custom waves-effect waves-light" type="submit">
                                                Submit
                                            </button>
                                           
                                        </div>

                                    </form>
                                        </div>

                                        

                                    </div>
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
        <script src="../plugins/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="../plugins/counterup/jquery.counterup.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>

<!-- Mirrored from coderthemes.com/highdmin/default/extras-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Apr 2018 10:35:01 GMT -->
</html>