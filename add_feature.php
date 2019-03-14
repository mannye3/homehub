<?php
include('core/session.php');
include('core/user_logic.php');
include('core/stat.php');
include('inc/user_header.php');
$property_no=$_SESSION['property_no'];  
?>

<!-- CSS -->
        <link href="drop/style.css" rel="stylesheet" type="text/css">
        <link href="drop/dropzone.css" rel="stylesheet" type="text/css"> 

        <!-- Script -->
        <script src='drop/jquery-3.2.1.min.js'></script>
        <script src="drop/dropzone.js" type="text/javascript"></script> 
<!-- Dashboard start -->
<div class="dashboard submit-property">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-12 col-pad">
                   <?php include('inc/user_nav.php'); ?>
            </div>
            <div class="col-lg-9 col-md-12 col-sm-12 col-pad">
                <div class="content-area5 dashboard-content">
                    <div class="dashboard-header clearfix">
                        <div class="row">
                            <div class="col-sm-12 col-md-6"><h4></h4></div>
                            <div class="col-sm-12 col-md-6">
                                <div class="breadcrumb-nav">
                                    <ul>
                                        <li>
                                            <a href="dashboard.php">Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="submit-property.php">Add Property</a>
                                        </li>
                                        <li class="active">Property Pictures</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="submit-address dashboard-list">
                            <h4>Upload Property Pictures</h4>
                            <div class="row pad-20">
                                <div class="col-lg-12">
                                    <form action="" method="POST">
                                    <div class="comment">
                                   <div class="row">
                                      <?php
                    $sql4 = "SELECT * FROM pro_img WHERE property_no='$property_no' ";
                    $query4 = mysqli_query($con, $sql4);

                              while($row4 =mysqli_fetch_array($query4)){
                                 
                             
                             echo '
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="team-1">
                    <div class="team-photo">
                     <center><p><b>Select Feature Picture</b></p>
                                   
                          <input type="radio" required value="'.$row4['pic'].'" class="inline img-fluid" name="img"></center>
                          <br>
                       
                            <img src="'.$row4['pic'].'"  class="img-fluid">
                           
                                   <br>
                                   <br>
                            <center> <a href="core/delete_pic.php?id='.$row4['id'].'" ><button type="button"  class="btn btn-outline-danger bomd">Delete Picture</button></a></center>
                            <input name="property_no" type="hidden" value="'.$row4['property_no'].'">
                         <br>
                    </div>
                </div>
            </div>';
                            }
                            ?>

  
        </div>
                                 <center>
                                  <div class="col-lg-12">
                                                    <div class="send-btn">
                                                        <button type="submit" name="feat_pic" class="btn btn-md button-theme">Submit</button>
                                                    </div>
                                                </div> </center>

                                            </form>
                                 
                            </div>
                    </div>



                   
<!-- Dashboard end -->
<?php include('inc/user_footer.php'); ?>