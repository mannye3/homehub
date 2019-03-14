<?php
include('core/session.php');
include('core/user_logic.php');
include('core/stat.php');
include('inc/user_header.php');


        $sql_msg ="SELECT * FROM message WHERE email='$user_check' ORDER BY id DESC  ";
        $query_msg =mysqli_query($con, $sql_msg);
        
            
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
                    <div class="dashboard-header clearfix">
                        <div class="row">
                            <div class="col-sm-12 col-md-6"><h4>Messages</h4></div>
                            <div class="col-sm-12 col-md-6">
                                <div class="breadcrumb-nav">
                                    <ul>
                                        <li>
                                            <a href="index.php">Home</a>
                                        </li>
                                        <li>
                                            <a href="dashboard.php">Dashboard</a>
                                        </li>
                                        <li class="active">Messages</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="submit-address dashboard-list">
                        <form method="GET">
                            <h4>Messages List</h4>
                            <div class="row pad-20">

                                <?php
                while ($row_msg = mysqli_fetch_array($query_msg)) {
                                             ?>

                                <div class="col-lg-12">
                                    <div class="comment">
                                        <div class="comment-author">
                                            <a href="#">
                                                <img src="img/user.jpg" alt="comments-user">
                                            </a>
                                        </div>
                                        <div class="comment-content">
                                            <div class="comment-meta">
                                                <h5>
                                                   <a href="read_msg.php?msg=<?php echo $row_msg["id"]; ?>"> <?php echo $row_msg['name'] ?></a>
                                                </h5>
                                                <div class="comment-meta">
                                                   <?php echo $row_msg['msg_date'] ?><a href="#">
                                                        <?php

                                                if ($row_msg['status'] == 1){
                                                echo 'New';
                                            }
                                            ?>
                                                   
                                                </a>
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                   
                            </div>

                              <?php
                }
                ?>




                        </form>
                    </div>
                   
<!-- Dashboard end -->
<?php include('inc/user_footer.php'); ?>