<?php 
include('core/connect.php');
include('core/user_logic.php');
include('inc/header.php');

$agent = $_GET['agent'];

$sql = "SELECT * FROM users WHERE user_code='$agent'";
$query  = mysqli_query($con, $sql);
$row =  mysqli_fetch_assoc($query);


$ag_pro = "SELECT * FROM property  WHERE user_code='$agent'";
            $query9 = mysqli_query($con, $ag_pro);


if($agent =="")
{
echo "<script language='javascript' type='text/javascript'>

                        window.location.href='agents.php';

                        </script>";
}


?>

<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Agent Detail</h1>
            <ul class="breadcrumbs">
                <li><a href="index.html">Home</a></li>
                <li class="active">Agent Detail</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Agent page start -->
<div class="agent-page content-area">
    <div class="container">
        <!-- Heading -->
        <h1 class="heading-2">Agent Details</h1>
        <div class="row">
            <div class="col-lg-8">
                <div class="row team-2">
                    <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 col-pad ">
                        <div class="photo">
                            <?php include('core/pro-pic.php');  ?>
                           <!--  <img src="img/avatar/avatar-9.jpg" alt="avatar-9" class="img-fluid"> -->
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6 col-md-12 col-sm-12 col-pad align-self-center bg">
                        <div class="detail">
                            <h4>
                                <a href="agent-detail.html"><?php echo $row['name'] ?></a>
                            </h4>
                            <h5><?php echo $row['occupation'] ?></h5>
                            <div class="contact">
                                <ul>
                                    <li>
                                        <i class="flaticon-pin"></i><a><?php echo $row['location'] ?></a>
                                    </li>
                                    <li>
                                        <i class="flaticon-mail"></i><a href="<?php echo $row['email'] ?>"><?php echo $row['email'] ?></a>
                                    </li>
                                    <li>
                                        <i class="flaticon-phone"></i><a href="tel:<?php echo $row['phone'] ?>"> <?php echo $row['phone'] ?></a>
                                    </li>
                                    <!-- <li>
                                        <i class="flaticon-fax"></i><a href="#"> +0477 85X6 552</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-skype"></i><a href="tel:+554XX-634-7071"> john.antony</a>
                                    </li> -->
                                </ul>
                            </div>

                            <ul class="social-list clearfix">
                                <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="agent-biography">
                    <h3 class="heading-2">Biography</h3>
                    <?php echo $row['about'] ?>
                    <br>
                     <br>
                      <br>
                </div>
                <h3 class="heading-2">Agent Property</h3>
                <div class="row">
                    <?php
                while ($row9 = mysqli_fetch_array($query9)) {
                       $sql_pro_img = "SELECT SUM(num) AS t_img FROM pro_img WHERE property_no=".$row9["property_no"]." ";
                    $query14 =mysqli_query($con, $sql_pro_img);
                    $rw14 =mysqli_fetch_array($query14);
                        $t_img = $rw14['t_img'];
                                             ?>
                    <div class="col-lg-6 col-md-6">
                        <div class="property-box">
                            <div class="property-thumbnail">
                                <a href="properties-details.html" class="property-img">
                                    <div class="listing-badges">
                                        <span class="featured">For <?php echo $row9["purpose"]; ?></span>
                                    </div>
                                    <div class="price-box2"> <i class="fa fa-image"></i>
                                    <?php echo  $t_img; ?> 
                                </div>

                                    <div class="price-box"><span>₦<?php  echo number_format($row9["price"]).""; ?></span> </div>
                                    <img class="d-block w-100" src="<?php echo $row9["pic"]; ?>"style="height:250px;" width="100%" class="img-fluid">
                                </a>
                            </div>
                            <div class="detail">
                                <h1 class="title">
                                   <a href="property.php?pro=<?php echo $row9["property_no"]; ?>"><?php echo $row9["title"]; ?></a>
                                </h1>

                                <div class="location">
                                    <a href="property.php?pro=<?php echo $row9["property_no"]; ?>">
                                       <i class="flaticon-pin"></i><?php echo $row9["address"]; ?>. <?php echo $row9["lga"]; ?>, <?php echo $row9["state"]; ?>
                                    </a>
                                </div>
                            </div>
                            <ul class="facilities-list clearfix">
                                <li>
                                    <span>Purpose</span><?php echo $row9["type"]; ?>
                                </li>
                                <li>
                                    <span>Beds</span> <?php echo $row9["rooms"]; ?>
                                </li>
                                <li>
                                    <span>Baths</span> <?php echo $row9["bathrooms"]; ?>
                                </li>
                                <!-- <li>
                                    <span>Garage</span> 1
                                </li> -->
                            </ul>
                            <div class="footer">
                                <a href="#">
                                    <i class="flaticon-people"></i> <?php echo $row9["fullname"]; ?>
                                </a>
                               <span>
                                          <i class="fa fa-eye"></i><?php echo $row9["view"]; ?> views
                                    </span>
                            </div>
                        </div>
                    </div>

                    <?php
                }
                ?>

                  
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar-right">
                    <!-- Contact 2 start -->
                    <div class="contact-2 widget">
                        <h3 class="sidebar-title">Contact Agent</h3>
                        <div class="s-border"></div>
                        <form action="#" method="POST" enctype="multipart/form-data">
                            <div class="rowo">
                                <div class="form-group name">
                                    <input type="text" name="name" class="form-control" placeholder="Name">
                                </div>
                                <div class="form-group email">
                                    <input type="email" name="s_email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group number">
                                    <input type="text" name="phone" class="form-control" placeholder="Phone">

                                    <input type="hidden" name="user_code" value="<?php echo $row["user_code"]; ?>" class="form-control" placeholder="Phone">
                                     <input type="hidden" name="email" value="<?php echo $row["email"]; ?>" class="form-control" placeholder="Phone">
                                </div>
                                <div class="form-group message">
                                    <!-- <textarea class="input-text" name="msg" placeholder="Detailed Information"></textarea> -->
                                    <textarea class="form-control" name="msg" placeholder="Write message"></textarea>
                                </div>
                                <div class="send-btn">
                                    <button type="submit" name="message" class="btn btn-md button-theme btn-block">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Agent page end -->

<?php include('inc/footer.php'); ?>