<?php
include('core/session.php');
include('core/user_logic.php');
include('core/stat.php');
include('inc/user_header.php');
?>

<!-- Dashbord start -->
<div class="dashboard">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-12 col-pad">
               <?php include('inc/user_nav.php'); ?>
            </div>
            <div class="col-lg-9 col-md-12 col-sm-12 col-pad">
                <div class="content-area5">
                    <div class="dashboard-content">
                        <div class="dashboard-header clearfix">
                            <div class="row">
                                <div class="col-sm-12 col-md-6"><h4>Hello , <?php echo $row['name'] ?></h4></div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="breadcrumb-nav">
                                        <ul>
                                            <li>
                                                <a href="index.php">Home</a>
                                            </li>
                                            <li>
                                                <a href="#" class="active">Dashboard</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="alert alert-success alert-2" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>Your listing</strong> YOUR LISTING HAS BEEN APPROVED!
                        </div> -->
                                         <?php
   if($row['type']=='Agent'){
    echo '
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="ui-item bg-success">
                                    <div class="left">
                                        <h4><?php echo $pro_approve  ?></h4>
                                        <p>Active Properties</p>
                                    </div>
                                    <div class="right">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="ui-item bg-warning">
                                    <div class="left">
                                        <h4><?php echo $pro_review  ?></h4>
                                        <p>Under Review</p>
                                    </div>
                                    <div class="right">
                                        <i class="fa fa-eye"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="ui-item bg-active">
                                    <div class="left">
                                        <h4><?php echo $t_msg  ?></h4>
                                        <p>Messages</p>
                                    </div>
                                    <div class="right">
                                        <i class="fa fa-comments-o"></i>
                                    </div>
                                </div>
                            </div>
                            
                        </div>';

                    }

                    ?>



 <?php
   if($row['type']=='User'){
    echo '
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="ui-item bg-success">
                                    <div class="left">
                                        <h4><?php echo $pro_approve  ?></h4>
                                        <p>Save Search</p>
                                    </div>
                                    <div class="right">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                </div>
                            </div>
                           
                            
                            
                        </div>';

                    }

                    ?>




                            

                    </div>
                    


<?php include('inc/user_footer.php'); ?>