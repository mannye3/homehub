<?php
include('core/session.php');
include('core/user_logic.php');
include('core/stat.php');
include('inc/user_header.php');


$property_no=$_SESSION['property_no'];     
$sql_pro = "SELECT * FROM property WHERE property_no='$property_no' ";
$query_pro  = mysqli_query($con, $sql_pro);
$row_pro = mysqli_fetch_array($query_pro);

?>

<!-- CSS -->
        <link href="drop/style.css" rel="stylesheet" type="text/css">
        <link href="drop/dropzone.css" rel="stylesheet" type="text/css"> 
<script src="http://code.jquery.com/jquery-2.1.0.min.js" type="text/javascript"></script>
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
                  <!--   <?php echo $row_pro['property_no'] ?> -->
                    <div class="submit-address dashboard-list">
                            <center><h4><b>Upload Property Pictures</b></h4></center>
                            <div class="row pad-20">
                                <div class="col-lg-12">
                                    <div class="comment">
                                    <form action="upload.php"> 
                                         <div id="myDropZone" class="dropzone dropzone-design">
                                        <div class="dz-default dz-message"><span>Drop files here to upload</span></div>
                                    </div>
                                 </form> 
                                 <center>
                                  <div class="col-lg-12">
                                                    <div class="send-btn">
                                                       <a href="add_feature.php"> <button type="submit" class="btn btn-md button-theme">Continue</button></a>
                                                    </div>
                                                </div> </center>
                                 
                            </div>
                    </div>
                </div>
            </div>


           <!--   <div class="submit-address dashboard-list">
                            <h4>Upload Property Pictures</h4>
                            <div class="row pad-20">
                                <div class="col-lg-12">
                                    <form action="" method="POST">
                                    <div class="comment">
                                   <div class="row" id="responsecontainer">
                                      <?php
                    $sql4 = "SELECT * FROM pro_img WHERE property_no='$property_no' ";
                    $query4 = mysqli_query($con, $sql4);

                              while($row4 =mysqli_fetch_array($query4)){
                                 
                             
                             echo '
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="team-1">
                    <div class="team-photo">
                       
                            <img src="'.$row4['pic'].'"  class="img-fluid">
                           
                                    <br>
                                      <br>
                            <center><input type="radio" value="'.$row4['pic'].'" class="inline img-fluid" name="img"></center>

                            <input name="property_no" value="'.$row4['property_no'].'">
                        
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
                    </div> -->






<!-- Dashboard end -->
<?php include('inc/user_footer.php'); ?>


