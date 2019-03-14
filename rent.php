<?php 
include('core/select.php'); 
include('inc/header.php'); 
?>

<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Properties For Rent</h1>
            <ul class="breadcrumbs">
                <li><a href="index.php">Home</a></li>
                <li class="active">Properties For Rent</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Properties section body start -->
<div class="properties-section-body content-area">
    <div class="container">
        <div class="row">
            <div class="offset-lg-1 col-lg-10">
                <!-- Option bar start -->
                <!-- <div class="option-bar d-none d-xl-block d-lg-block d-md-block d-sm-block">
                    <div class="row">
                        <div class="col-lg-6 col-md-7 col-sm-7">
                            <div class="sorting-options2">
                                <span class="sort">Sort by:</span>
                                <select class="selectpicker search-fields" name="default-order">
                                    <option>Default Order</option>
                                    <option>Price High to Low</option>
                                    <option>Price: Low to High</option>
                                    <option>Newest Properties</option>
                                    <option>Oldest Properties</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-5 col-sm-5">
                            <div class="sorting-options">
                                <a href="properties-list-fullwidth.html" class="change-view-btn active-view-btn"><i class="fa fa-th-list"></i></a>
                                <a href="properties-grid-fullwidth.html" class="change-view-btn"><i class="fa fa-th-large"></i></a>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- Property box 2 start -->
                 <?php
                while ($row5 = mysqli_fetch_array($query5)) {

                    $sql_pro_img = "SELECT SUM(num) AS t_img FROM pro_img WHERE property_no=".$row5["property_no"]." ";
                    $query14 =mysqli_query($con, $sql_pro_img);
                    $rw14 =mysqli_fetch_array($query14);
                        $t_img = $rw14['t_img'];
                                             ?>
                <div class="property-box-2" >
                    <div class="row">
                        <div class="col-lg-4 col-md-5 col-pad">
                            <div class="property-thumbnail">
                                <a href="property.php?pro=<?php echo $row5["property_no"]; ?>" class="property-img">
                                    <img src="<?php echo $row5["pic"]; ?>" style="height:250px;" width="100%" class="img-fluid">
                                    <div class="listing-badges">
                                        <span class="featured">For <?php echo $row5["purpose"]; ?></span>
                                    </div>

                                <div class="price-box2"> <i class="fa fa-image"></i>
                                    <?php echo  $t_img; ?> 
                                </div>

                                    <div class="price-box"><span>₦<?php  echo number_format($row5["price"]).""; ?></span> </div>
                                </a>

                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7 col-pad">
                            <div class="detail">
                                <div class="hdg">
                                    <h3 class="title">
                                        <a href="property.php?pro=<?php echo $row5["property_no"]; ?>"><?php echo $row5["title"]; ?></a>
                                    </h3>
                                    <h5 class="location">
                                        <a href="properties-details.html">
                                            <i class="flaticon-pin"></i><?php echo $row5["address"]; ?>. <?php echo $row5["lga"]; ?>, <?php echo $row5["state"]; ?>
                                        </a>
                                    </h5>
                                </div>
                                <ul class="facilities-list clearfix">
                                    <li>
                                          <span>Purpose</span><?php echo $row5["type"]; ?>
                                    </li>
                                    <li>
                                        <span>Beds</span> <?php echo $row5["rooms"]; ?>
                                    </li>
                                    <li>
                                        <span>Baths</span> <?php echo $row5["bathrooms"]; ?>
                                    </li>
                                    
                                    <!-- <li>
                                        <span>Garage</span> 1
                                    </li> -->
                                </ul>
                                <div class="footer">
                                    <a href="#" tabindex="0">
                                        <i class="flaticon-people"></i> <?php echo $row5["fullname"]; ?>
                                    </a>
                                    <span>
                                          <i class="fa fa-eye"></i><?php echo $row5["view"]; ?> views
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                  <?php
                }
                ?>

                  <?php  
                        $sql = "SELECT COUNT(id) FROM property WHERE purpose='rent' AND status=1";  
                        $rs_result = mysqli_query($con, $sql);  
                        $row = mysqli_fetch_row($rs_result);  
                        $total_records = $row[0];  
                        $total_pages = ceil($total_records / $limit);  
                        $pagLink = '<div class="pagination-box hidden-mb-45 text-center">
                                 <nav aria-label="Page navigation example">
                        <ul class="pagination">';  
                        for ($i=1; $i<=$total_pages; $i++) {  
                                     $pagLink .= "<li class='page-item'><a class='' href='rent.php?page=".$i."'>".$i."</a></li>";  
                        };  
                        echo $pagLink . " </ul>
                        </div>";  
                        ?>
                               
                <!-- Page navigation start -->
                <!-- <div class="pagination-box hidden-mb-45 text-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#">Prev</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="properties-list-rightside.html">1</a></li>
                            <li class="page-item"><a class="page-link" href="properties-list-leftsidebar.html">2</a></li>
                            <li class="page-item"><a class="page-link active" href="properties-list-fullwidth.html">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="properties-list-rightside.html">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div> -->
            </div>
        </div>
    </div>
</div>
<!-- Properties section body end -->

<?php include('inc/footer.php'); ?>