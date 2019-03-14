<?php
include('core/session.php');
include('core/user_logic.php');
include('core/stat.php');
include('inc/user_header.php');
$property_no=$_GET['pro'];  
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
                            <center><h4><b>Update Property Pictures</b></h4></center>
                            <div class="row pad-20">
                                <div class="col-lg-12">
                                    <form action="" method="POST">
                                    <div class="comment">
                                   <div class="row">
                                      <?php
                    $sql4 = "SELECT * FROM pro_img WHERE property_no='$property_no' ";
                    $query4 = mysqli_query($con, $sql4);

                              while($row4 =mysqli_fetch_array($query4)){
                                ?>
                                 
                             
                             
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="team-1">
                    <div class="team-photo">
                     <center><p><b>Select Feature Picture</b></p>
                                   
                          <input type="radio" value="<?php echo $row4['pic'] ?>" class="inline img-fluid" name="img"></center>
                          <br>
                       
                            <img src=" <?php echo $row4['pic'] ?>"  class="img-fluid">
                           
                                   <br>
                                   <br>
                            <center> <a href="core/delete_edit_pic.php?pro=<?php echo $_GET['pro'] ?>&id=<?php echo $row4['id'] ?>" onclick="return confirm('Are you sure you want to DELETE PICTURE ?')"  data-type="confirm"><button type="button"  class="btn btn-outline-danger bomd">Delete Picture</button></a></center> 
                            <input name="property_no" type="hidden" value="<?php echo $row4['property_no'] ?>">
                         <br>
                    </div>
                </div>
            </div>
            <?php
                            }
                            ?>

  
        </div>
                                 <center>
                                  <div class="col-lg-6">
                                        
                                                    <div class="send-btn">
                                                        <button type="submit" name="feat_pic" class="btn btn-md button-theme">Submit</button>
                                                    </div>
                                                </div>
                                                 </form>
                                                <br>
                                                <div class="col-lg-6">
                                        
                                                     <div class="send-btn">
                                                        <form method="post" action="add_pictures.php">
                                                           <input type="hidden" value="<?php echo $property_no ?>" name="property_no"> 
                                                       
                                                        <button type="submit" name="add_more_pic" class="btn btn-md button-theme">Add more pictures</button>
                                                         </form>
                                                    </div>
                                                </div> </center>

                                           
                                 
                            </div>
                    </div>



                   
<!-- Dashboard end -->
<?php include('inc/user_footer.php'); ?>