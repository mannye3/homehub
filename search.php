<?php 
include('core/search.php'); 
include('inc/header.php'); 
?>


<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Search Result</h1>
            <ul class="breadcrumbs">
                <li><a href="index.php">Home</a></li>
                <li class="active">Properties Listing</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Properties section start -->
<div class="properties-section content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <!-- Option bar start -->
                <div class="option-bar d-none d-xl-block d-lg-block d-md-block d-sm-block">
                    <div class="row">
                        <div class="col-lg-6 col-md-7 col-sm-7">
                            <div class="sorting-options2">
                                <center><span class="sort"><?php echo $num_rows;?></span>Properties found for <?php echo $strKeyword ?></center>
                                <!-- <select class="selectpicker search-fields" name="default-order">
                                    <option>Default Order</option>
                                    <option>Price High to Low</option>
                                    <option>Price: Low to High</option>
                                    <option>Newest Properties</option>
                                    <option>Oldest Properties</option>
                                </select> -->
                            </div>
                        </div>
                        <!-- <div class="col-lg-6 col-md-5 col-sm-5">
                            <div class="sorting-options">
                                <a href="properties-list-rightside.html" class="change-view-btn active-view-btn"><i class="fa fa-th-list"></i></a>
                                <a href="properties-grid-rightside.html" class="change-view-btn"><i class="fa fa-th-large"></i></a>
                            </div>
                        </div> -->
                    </div>
                </div>
                <!-- Property box 2 start -->

                 <?php
              while($row=mysqli_fetch_array($query,MYSQLI_ASSOC))
              {
                 $sql_pro_img = "SELECT SUM(num) AS t_img FROM pro_img WHERE property_no=".$row["property_no"]." ";
                    $query14 =mysqli_query($con, $sql_pro_img);
                    $rw14 =mysqli_fetch_array($query14);
                        $t_img = $rw14['t_img'];
              ?>
                <div class="property-box-2" >
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-pad">
                            <div class="property-thumbnail">
                               <a href="property.php?pro=<?php echo $row["property_no"]; ?>" class="property-img">
                                    <img src="<?php echo $row["pic"]; ?>" style="height:250px;" width="100%" class="img-fluid">
                                    <div class="listing-badges">
                                        <span class="featured">For <?php echo $row["purpose"]; ?></span>
                                    </div>
                                    <div class="price-box2"> <i class="fa fa-image"></i>
                                    <?php echo  $t_img; ?> 
                                </div>

                                    <div class="price-box"><span>₦<?php  echo number_format($row["price"]).""; ?></span> </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-pad">
                            <div class="detail">
                                <div class="hdg">
                                    <h3 class="title">
                                         <a href="property.php?pro=<?php echo $row["property_no"]; ?>"><?php echo $row["title"]; ?></a>
                                    </h3>
                                    <h5 class="location">
                                        <a href="property.php?pro=<?php echo $row["property_no"]; ?>">
                                            <i class="flaticon-pin"></i><?php echo $row["address"]; ?>. <?php echo $row["lga"]; ?>, <?php echo $row["state"]; ?>
                                        </a>
                                    </h5>
                                </div>
                                 <ul class="facilities-list clearfix">
                                    <li>
                                          <span>Purpose</span><?php echo $row["type"]; ?>
                                    </li>
                                    <li>
                                        <span>Beds</span> <?php echo $row["rooms"]; ?>
                                    </li>
                                    <li>
                                        <span>Baths</span> <?php echo $row["bathrooms"]; ?>
                                    </li>
                                    <!-- <li>
                                        <span>Garage</span> 1
                                    </li> -->
                                </ul>
                                 <div class="footer">
                                    <a href="#" tabindex="0">
                                        <i class="flaticon-people"></i> <?php echo $row["fullname"]; ?>
                                    </a>
                                    <span>
                                          <i class="fa fa-eye"></i><?php echo $row["view"]; ?> views
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


     <?php
}
?>
        

               
                <!-- Page navigation start -->
                <div class="pagination-box hidden-mb-45 text-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                             <li class="page-item">
                            <?php
          if($prev_page)
          {
            echo " 


            <a href='$_SERVER[SCRIPT_NAME]?Page=$prev_page&query=$strKeyword' class=''>Prev</a> ";
          }

          for($i=1; $i<=$num_pages; $i++){
            if($i != $page)
            {
              echo "<a href='$_SERVER[SCRIPT_NAME]?Page=$i&query=$strKeyword' class=''>$i</a>";
            }
            else 
            {
              echo "<span class='active'><b> $i </b></span>";
            }
          }
          if($page!=$num_pages)
          {
            echo " <a href ='$_SERVER[SCRIPT_NAME]?Page=$next_page&query=$strKeyword' class=''> Next</a> ";
          }
          $conn = null;
          ?>
                       
                       </li>
                   </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="sidebar-right">
                    <!-- Advanced search start -->
                    <div class="widget advanced-search">
                        <h3 class="sidebar-title">Change Your Search</h3>
                        <div class="s-border"></div>
                        <form method="GET" action="">
                            <div class="form-group">
                                <input required="" value="<?php echo $strKeyword;?>" name="query" id="autocomplete" onFocus="geolocate()" placeholder="Where do you want to live?" class="form-control mb-sm-0" name="location">
                            </div>
                           </div>
                            <div class="form-group mb-0">
                                <button class="search-button" type="submit" name="search">Search</button>
                            </div>
                        </form>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Properties section end -->

<?php include('inc/footer.php'); ?>