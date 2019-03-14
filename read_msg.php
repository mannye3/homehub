<?php
include('core/session.php');
include('core/user_logic.php');
include('core/stat.php');
include('inc/user_header.php');


        $sql_msg ="SELECT * FROM message WHERE id=".$_GET['msg']." ";
        $query_msg =mysqli_query($con, $sql_msg);
        $row_msg = mysqli_fetch_array($query_msg);

          $sql_stat = "UPDATE message SET status= 0 WHERE id=".$_GET['msg']." ";
          $query_stat = mysqli_query($con, $sql_stat);
        
        
            
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

                                <div class="col-lg-12">
                                    <div class="comment">
                                        <div class="comment-author">
                                            <a href="#">
                                                <img src="img/user.jpg" alt="comments-user">
                                            </a>
                                        </div>
                                        <div class="comment-content">
                                            <div class="comment-meta">
                                                <div class="comment-meta">
                                                    <?php echo $row_msg['msg_date'] ?>
                                                </div>
                                                <br>
                                                <p>
                                                  Name: <?php echo $row_msg['name'] ?>
                                                </p>
                                                <br>
                                                <h5>
                                                  Email: <?php echo $row_msg['email'] ?>
                                                </h5>
                                                <br>
                                                <h5>
                                                 Phone: <?php echo $row_msg['phone'] ?>
                                                </h5>
                                                
                                            </div>
                                            Message: 
                                            <p> <?php echo $row_msg['msg'] ?></p>
                                        </div>
                                    </div>
                                   
                            </div>



                        </form>
                    </div>
                   
<!-- Dashboard end -->
<?php include('inc/user_footer.php'); ?>