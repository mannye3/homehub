<?php 
include('core/select.php'); 
include('inc/header.php'); 
?>

<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Agent List</h1>
            <ul class="breadcrumbs">
                <li><a href="index.php">Home</a></li>
                <li class="active">Agent List</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Our team start -->
<div class="our-team content-area">
    <div class="container">
        <div class="row">
             <?php
                while ($row = mysqli_fetch_array($q_user)) {
                                             ?>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="row team-2">
                    <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 col-pad ">
                        <div class="photo">
                           <?php include('core/pro-pic.php');  ?>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6 col-md-12 col-sm-12 col-pad align-self-center bg">
                        <div class="detail">
                            <h4>
                                <a href="agent.php?agent=<?php echo $row["user_code"]; ?>"><?php echo $row["name"]; ?></a>
                            </h4>
                            <h5><?php echo $row["occupation"]; ?></h5>
                            <div class="contact">
                                <ul>
                                    <li>
                                        <i class="flaticon-pin"></i><a><?php echo $row["location"]; ?></a>
                                    </li>
                                    <li>
                                        <i class="flaticon-mail"></i><a href="<?php echo $row["email"]; ?>"><?php echo $row["email"]; ?></a>
                                    </li>
                                    <li>
                                        <i class="flaticon-phone"></i><a href="<?php echo $row["phone"]; ?>"> <?php echo $row["phone"]; ?></a>
                                    </li>
                                </ul>
                            </div>

                            <!-- <ul class="social-list clearfix">
                                <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>
                            </ul> -->
                        </div>
                    </div>
                </div>
            </div>

            <?php
                }
                ?>

               
         
        </div>
          <?php  
                        $sql = "SELECT COUNT(id) FROM users";  
                        $rs_result = mysqli_query($con, $sql);  
                        $row = mysqli_fetch_row($rs_result);  
                        $total_records = $row[0];  
                        $total_pages = ceil($total_records / $limit);  
                        $pagLink = '<div class="pagination-box hidden-mb-45 text-center">
                                 <nav aria-label="Page navigation example">
                        <ul class="pagination">';  
                        for ($i=1; $i<=$total_pages; $i++) {  
                                     $pagLink .= "<li class='page-item'><a class='active' href='agents.php?page=".$i."'>".$i."</a></li>";  
                        };  
                        echo $pagLink . " </ul>
                        </div>";  
                        ?>
    </div>
</div>
<!-- Our team end -->

<?php include('inc/footer.php'); ?>