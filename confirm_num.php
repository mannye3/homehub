<?php
include('core/session.php');
$sql_ver = "SELECT * FROM users WHERE email='$user_check' ";
$query_ver  = mysqli_query($con, $sql_ver);
$row_ver = mysqli_fetch_array($query_ver);



if($row_ver['user_status']=='confirm')
{
header("Location: dashboard.php");
}
include('core/user_logic.php');
include('core/stat.php');
include('inc/user_header.php');
?>
<!-- SWEET ALERT SCRIPT-->
     <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

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
                        <form method="post">
                            <center><h4>Enter your verification code below</h4></center>
                            <div class="row pad-20">
                                <div class="col-lg-12">
                                    <div class="comment">
                                        <center>
                                       <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <?php echo $smsermsg ?>
                                           <!--  <label>Property Title</label> -->
                                            <input type="input" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57"  name="sms_code" maxlength="7" required="" class="input-text" placeholder="Verication Code">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12 col-sm-12">
                                    <button name="comfirm-agent" type="submit" class="btn btn-md button-theme">Submit</button>
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