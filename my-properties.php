<?php
include('core/session.php');
include('core/user_logic.php');
include('core/stat.php');
include('core/user_select.php');
include('inc/user_header.php');
?>

<!-- Dashboard start -->
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
                                <div class="col-sm-12 col-md-6"><h4>My Properties</h4></div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="breadcrumb-nav">
                                        <ul>
                                            <li>
                                                <a href="index.php">Home</a>
                                            </li>
                                            <li>
                                                <a href="dashboard.php">Dashboard</a>
                                            </li>
                                            <li class="active">My Properties</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-list">
                            <h3>My Properties List</h3>
                            <table class="manage-table">
                               
                              
                                  
                                <tbody>
                                     <?php
                                    while ($rw5 = mysqli_fetch_array($q_u_pro)) {
                                             ?>
                                <tr class="responsive-table">
                                    <td class="listing-photoo">
                                        <div class="property-thumbnail">
                                <a  href="#"  class="property-img">
                                     
                                    <img src="<?php echo $rw5["pic"]; ?>" class="img-fluid">
                                    <div class="listing-badges">
                                        <span class="featured">For <?php echo $rw5["purpose"]; ?></span>
                                    </div>
                                    <div class="price-box"><span>₦<?php  echo number_format($rw5["price"]).""; ?></span></div>
                                </a>
                            </div>
                                    </div>
                                    </td>
                                    <td class="title-container">
                                        <h2> 
                                             
                      <a href="property.php?pro=<?php echo $rw5["property_no"]; ?>" target="_blank" >   <?php echo $rw5["title"]; ?></a></h2>
                                        <h5 class="d-none d-xl-block d-lg-block d-md-block"><i class="flaticon-pin"></i> <?php echo $rw5["address"]; ?> ,<?php echo $rw5["lga"]; ?> <?php echo $rw5["state"]; ?>, </h5>
                                         <h6 class="table-property-price"><?php echo $rw5["type"]; ?> </h6>

                                            <?php

                                                if ($rw5['status'] == 1){
                                                echo '<div class="alert alert-success alert-2" role="alert">
                                    <strong>APPROVED</strong> 
                                    </div>';
                                            }
                                            ?>

                                            <?php

                                                if ($rw5['status'] == 0){
                                                echo '<div class="alert alert-warning alert-2" role="alert">
                                    <strong>UNDER REVIEW</strong> 
                                    </div>';
                                            }
                                            ?>
                                          
                                    
                                     </form>
                                        
                                    </td>
                                    <td class="expire-date"><?php echo $rw5["upload_date"]; ?></td>
                                    <td class="action">
                                       <a href="edit-property.php?id=<?php echo $rw5["id"]; ?>"><i class="fa fa-pencil"></i> Edit</a>

                                       <a href="edit_pictures.php?pro=<?php echo $rw5["property_no"]; ?>"><i class="fa fa-image"></i> Edit Picture</a>
                                        <a href="#"><i class="fa  fa-eye-slash"></i> Hide</a>
                                          <a href="core/delete_pro.php?del_pro=<?php echo $rw5["property_no"]; ?>" class="delete"  onclick="return confirm('Are you sure you want to DELETE PROPERTY ?')"  data-type="confirm"><i class="fa fa-remove"></i> Delete</a>
                                    </td>
                                </tr>
                                 <?php
                                               
                                            }

                                            ?>
                                </tbody>
                            </table>
                             
                          
                        </div>
                    </div>
<!-- 
                     <form id="contactForm" method="post" class="contact-form" action="googl.com">

        <button type="submit" id="submitBtn" style="display:none;" data-validate="contact-form">Hidden Button</button>
        <a href="javascript:;" class="myClass" onclick="$('#submitBtn').click();">Submit</a>

  </form>

    <script type="text/javascript"> 
        function submitform() {   document.myform.submit(); } 
   </script>
             -->        
<!-- Dashboard end -->

<?php include('inc/user_footer.php'); ?>