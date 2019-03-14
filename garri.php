<?php
include('core/session.php');
include('core/user_logic.php');
include('core/stat.php');
include('inc/user_header.php');
?>

<!-- Dashboard start -->
<div class="dashboard submit-property">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-12 col-pad">
                   <?php include('inc/user_nav.php'); ?>
            </div>
            <div class="col-lg-9 col-md-12 col-sm-12 col-pad">
                <div class="content-area5 dashboard-content">
                    <!-- <div class="dashboard-header clearfix">
                        <div class="row">
                            <div class="col-sm-12 col-md-6"><h4>Bookings</h4></div>
                            <div class="col-sm-12 col-md-6">
                                <div class="breadcrumb-nav">
                                    <ul>
                                        <li>
                                            <a href="index.html">Index</a>
                                        </li>
                                        <li>
                                            <a href="dashboard.html">Dashboard</a>
                                        </li>
                                        <li class="active">Bookings</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="submit-address dashboard-list">
                        <form method="post" action="">
                            <center><h4>Verify your phone number</h4></center>
                            <div class="row pad-20">
                                <div class="col-lg-12">
                                    <div class="comment">
                                        <center>
                                       <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                           <!--  <label>Property Title</label> -->
                                            <input required="" value="<?php echo $row['phone'] ?>" class="input-text" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57"  name="phone" required="" >
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12 col-sm-12">
                                    <button name="upt-phone-sms" type="submit" class="btn btn-md button-theme">Get Verification Code</button>
                                </div>
                                </center>
                                    </div>
                                    
                                </div>
                            </div>
                        </form>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Dashboard end -->

<?php include('inc/user_footer.php'); ?>