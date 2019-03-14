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




            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

            <div class="content-page">

                <!-- Top Bar Start -->
                <div class="topbar">

                    <nav class="navbar-custom">

                        <ul class="list-unstyled topbar-right-menu float-right mb-0">

                            <li class="hide-phone app-search">
                                <form>
                                    <input type="text" placeholder="Search..." class="form-control">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <i class="fi-bell noti-icon"></i>
                                    <span class="badge badge-danger badge-pill noti-icon-badge">4</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">

                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5 class="m-0"><span class="float-right"><a href="#" class="text-dark"><small>Clear All</small></a> </span>Notification</h5>
                                    </div>

                                    <div class="slimscroll" style="max-height: 230px;">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-success"><i class="mdi mdi-comment-account-outline"></i></div>
                                            <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">1 min ago</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-info"><i class="mdi mdi-account-plus"></i></div>
                                            <p class="notify-details">New user registered.<small class="text-muted">5 hours ago</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-danger"><i class="mdi mdi-heart"></i></div>
                                            <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">3 days ago</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-warning"><i class="mdi mdi-comment-account-outline"></i></div>
                                            <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">4 days ago</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-purple"><i class="mdi mdi-account-plus"></i></div>
                                            <p class="notify-details">New user registered.<small class="text-muted">7 days ago</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-custom"><i class="mdi mdi-heart"></i></div>
                                            <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">13 days ago</small></p>
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
                                    <span class="badge badge-custom badge-pill noti-icon-badge">6</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">

                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5 class="m-0"><span class="float-right"><a href="#" class="text-dark"><small>Clear All</small></a> </span>Chat</h5>
                                    </div>

                                    <div class="slimscroll" style="max-height: 230px;">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon"><img src="assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                            <p class="notify-details">Cristina Pride</p>
                                            <p class="text-muted font-13 mb-0 user-msg">Hi, How are you? What about our next meeting</p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon"><img src="assets/images/users/avatar-3.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                            <p class="notify-details">Sam Garret</p>
                                            <p class="text-muted font-13 mb-0 user-msg">Yeah everything is fine</p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon"><img src="assets/images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                            <p class="notify-details">Karen Robinson</p>
                                            <p class="text-muted font-13 mb-0 user-msg">Wow that's great</p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon"><img src="assets/images/users/avatar-5.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                            <p class="notify-details">Sherry Marshall</p>
                                            <p class="text-muted font-13 mb-0 user-msg">Hi, How are you? What about our next meeting</p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon"><img src="assets/images/users/avatar-6.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                            <p class="notify-details">Shawn Millard</p>
                                            <p class="text-muted font-13 mb-0 user-msg">Yeah everything is fine</p>
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
                                    <img src="assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle"> <span class="ml-1">Maxine K <i class="mdi mdi-chevron-down"></i> </span>
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
                                    <h4 class="page-title">File Uploads </h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Highdmin</a></li>
                                        <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                        <li class="breadcrumb-item active">File Uploads</li>
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
                            <div class="col-md-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title">Form row</h4>
                                    <p class="text-muted m-b-30 font-13">
                                        You may also swap <code class="highlighter-rouge">.row</code> for <code class="highlighter-rouge">.form-row</code>, a variation of our standard grid row that overrides the default column gutters for tighter and more compact layouts.
                                    </p>

                                    <form>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="inputEmail4" class="col-form-label">Property Title</label>
                                                <input type="tex" class="form-control">
                                            </div>
                                             <div class="form-group col-md-6">
                                                <label  class="col-form-label">Type</label>
                                                <select class="form-control">
                                                    <option>Select type</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputPassword4" class="col-form-label">Price(₦)</label>
                                                <input type="text" class="form-control">
                                            </div>

                                              <div class="form-group col-md-4">
                                                <label  class="col-form-label">Area/Location</label>
                                                <input type="text" class="form-control" placeholder="SqFt">
                                               
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputPassword4" class="col-form-label">Bedrooms</label>
                                               <select class="form-control">
                                                    <option>Select</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="inputPassword4" class="col-form-label">Bathrooms</label>
                                                 <select class="form-control">
                                                    <option>Select</option>
                                                </select>
                                            </div>



                                            <div class="form-group col-md-4">
                                                <label  class="col-form-label">State</label>
                                                 <select class="form-control">
                                                    <option>Select</option>
                                                </select>
                                               
                                               
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputPassword4" class="col-form-label">City</label>
                                                <select class="form-control">
                                                    <option>Select</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="inputPassword4" class="col-form-label">Address</label>
                                                 <input type="text" class="form-control">
                                            </div>

                                            </div>
                                        <div class="form-group">
                                            <label for="inputAddress" class="col-form-label">Detailed Information</label>
                                            <textarea type="text" class="form-control summernote" placeholder="1234 Main St"></textarea>
                                        </div>
                                        
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="inputCity" class="col-form-label">Name</label>
                                                <input type="text" class="form-control" id="inputCity">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputState" class="col-form-label">Email</label>
                                                <input type="text" class="form-control" id="inputCity">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputZip" class="col-form-label">Phone</label>
                                                <input type="text" class="form-control" id="inputZip">
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="row">
                                            <h4 class="header-title m-t-0">Pictures</h4>
                                         <div class="form-group col-md-12">
                                        <div action="#" class="dropzone" id="dropzone">
                                        <div class="fallback">
                                            <input name="file" type="file" multiple />
                                        </div>
                                    </div>
                                </div>
                            </div>


                                        
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!--  end row -->


                        
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

        <!-- Bootstrap fileupload js -->
        <script src="../plugins/bootstrap-fileupload/bootstrap-fileupload.js"></script>

        <!-- Dropzone js -->
        <script src="../plugins/dropzone/dropzone.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>


          <!--Summernote js-->
        <script src="../plugins/summernote/summernote-bs4.min.js"></script>

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

<!-- Mirrored from coderthemes.com/highdmin/default/form-uploads.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Apr 2018 10:34:12 GMT -->
</html>