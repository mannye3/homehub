<?php
$menu="home";
include('core/select.php'); 

ini_set('display_errors', 1);
  error_reporting(~0);

  $strKeyword = null;
include('inc/header.php'); 

?>


<!-- Banner start -->
<div class="banner" id="banner">
    <div id="bannerCarousole" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item banner-max-height active">
                <img class="d-block w-100" src="img/banner/place.jpg" alt="banner">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                    <div class="carousel-content container">
                        <form method="get" action="search.php">
                        <div class="text-center">
                            <h3 class="text-uppercase">Find your next home</h3>
                            <p>Search properties for sale and for rent in Nigeria</p>
                           
                            <div class="inline-search-area ml-auto mr-auto d-xl-block d-lg-block">
                                <div class="row">
                                    
                                    <div class="col-xl-10 col-lg-12 col-sm-12 col-12 search-col">
                                        <input required="" value="<?php echo $strKeyword;?>" name="query" id="autocomplete" onFocus="geolocate()" placeholder="Where do you want to live?" class="form-control mb-sm-0" name="location">
                                            
                                    </div>
                                    <div class="col-xl-2 col-lg-12 col-sm-12 col-12 search-col">
                                        <button class="btn button-theme btn-search btn-block" type="submit" name="search">
                                            <i class="fa fa-search"></i><strong>Find</strong>
                                        </button>
                                        
                                    </div>
                                </div>
                                 <br>
                                         
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
           
        </div>
       <!--  <a class="carousel-control-prev" href="#bannerCarousole" role="button" data-slide="prev">
            <span class="slider-mover-left" aria-hidden="true">
                <i class="fa fa-angle-left"></i>
            </span>
        </a>
        <a class="carousel-control-next" href="#bannerCarousole" role="button" data-slide="next">
            <span class="slider-mover-right" aria-hidden="true">
                <i class="fa fa-angle-right"></i>
            </span>
        </a> -->
    </div>
    <!-- <div class="container search-options-btn-area">
        <a class="search-options-btn d-lg-none d-xl-none">
            <div class="search-options d-none d-xl-block d-lg-block">Search Options</div>
            <div class="icon"><i class="fa fa-chevron-up"></i></div>
        </a>
    </div> -->
</div>
<!-- Banner end -->



<!-- Featured Properties start -->
<div class="featured-properties content-area">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>Featured Properties</h1>
           <!--  <p>Find your properties in your city</p> -->
        </div>
        <!-- Slick slider area start -->
        <div class="slick-slider-area">
            <div class="row slick-carousel" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>

                 <?php
                while ($row6 = mysqli_fetch_array($query6)) {
                     $sql_pro_img = "SELECT SUM(num) AS t_img FROM pro_img WHERE property_no=".$row6["property_no"]." ";
                    $query14 =mysqli_query($con, $sql_pro_img);
                    $rw14 =mysqli_fetch_array($query14);
                        $t_img = $rw14['t_img'];
                                             ?>
                <div class="slick-slide-item">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="property.php?pro=<?php echo $row6["property_no"]; ?>" class="property-img">
                                <div class="listing-badges">
                                    <span class="featured">For <?php echo $row6["purpose"]; ?></span>
                                </div>
                               <div class="price-box2"> <i class="fa fa-image"></i>
                                    <?php echo  $t_img; ?> 
                                </div>

                                    <div class="price-box"><span>₦<?php  echo number_format($row6["price"]).""; ?></span> </div>
                                <img class="d-block w-100" src="<?php echo $row6["pic"]; ?>" style="height:250px;" width="100%" >
                            </a> 
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="property.php?pro=<?php echo $row6["property_no"]; ?>"><?php echo $row6["title"]; ?></a>
                            </h1>

                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-pin"></i><?php echo $row6["address"]; ?>. <?php echo $row6["lga"]; ?>, <?php echo $row6["state"]; ?>
                                </a>
                            </div>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <span>Purpose</span><?php echo $row6["type"]; ?>
                            </li>
                            <li>
                                <span>Beds</span> <?php echo $row6["rooms"]; ?>
                            </li>
                            <li>
                                <span>Baths</span> <?php echo $row6["bathrooms"]; ?>
                            </li>
                            <!-- <li>
                                <span>Garage</span> 1
                            </li> -->
                        </ul>
                        <div class="footer">
                            <a href="#">
                                <i class="flaticon-people"></i> <?php echo $row6["fullname"]; ?>
                            </a>
                           <span>
                              <i class="fa fa-eye"></i><?php echo $row6["view"]; ?> views
                                    </span>

                            
                        </div>
                    </div>
                </div>

                <?php
                }
                ?>
                
                
            </div>
            <div class="slick-prev slick-arrow-buton">
                <i class="fa fa-angle-left"></i>
            </div>
            <div class="slick-next slick-arrow-buton">
                <i class="fa fa-angle-right"></i>
            </div>
        </div>
    </div>
</div>
<!-- Featured Properties end -->

<!-- Services start -->
<div class="services content-area bg-grea-3">
    <div class="container">
        <!-- Main title -->
        <div class="main-title text-center">
            <h1>Other Services</h1>
            <!-- <p>Who you work with matters</p> -->
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                 <a href="receipt.php"><div class="service-info">
                    <div class="icon">
                        <i class="fa fa-print"></i>
                    </div>
                   <h3>Rent Reciept</h3>
                   <!--  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p> -->
                </div></a>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="service-info">
                    <div class="icon">
                        <i class="fa fa-money"></i>
                    </div>
                    <h3>Need a home loan?</h3>
                  <!--   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p> -->
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 ">
                <div class="service-info">
                    <div class="icon">
                        <i class="fa fa-truck"></i>
                    </div>
                    <h3>Movers & Packers</h3>
                   <!--  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services end -->



<!-- Services start -->

<!-- Services end -->

<!-- Categories strat -->
<div class="categories content-area-7">
    <div class="container">
        <!-- Main title -->
        <div class="main-title text-center">
            <h1>Our Partners</h1>
           <!--  <p>Find Your Properties In Your City</p> -->
        </div>
       <!--  <div class="row">
            <div class="col-lg-5 col-md-12 col-sm-12 col-pad">
                <div class="category">
                    <div class="category_bg_box category_long_bg cat-4-bg">
                        <div class="category-overlay">
                            <div class="category-content">
                                <h3 class="category-title">
                                    <a href="#">Apartment</a>
                                </h3>
                                <h4 class="category-subtitle">12 Properties</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-sm-6 col-pad">
                        <div class="category">
                            <div class="category_bg_box cat-1-bg">
                                <div class="category-overlay">
                                    <div class="category-content">
                                        <h3 class="category-title">
                                            <a href="properties-list-rightside.html">Form</a>
                                        </h3>
                                        <h4 class="category-subtitle">27 Properties</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-pad">
                        <div class="category">
                            <div class="category_bg_box cat-2-bg">
                                <div class="category-overlay">
                                    <div class="category-content">
                                        <h3 class="category-title">
                                            <a href="#">House</a>
                                        </h3>
                                        <h4 class="category-subtitle">98 Properties</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-pad">
                        <div class="category">
                            <div class="category_bg_box cat-3-bg">
                                <div class="category-overlay">
                                    <div class="category-content">
                                        <h3 class="category-title">
                                            <a href="#">Villa</a>
                                        </h3>
                                        <h4 class="category-subtitle">98 Properties</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-pad">
                        <div class="category">
                            <div class="category_bg_box cat-5-bg">
                                <div class="category-overlay">
                                    <div class="category-content">
                                        <h3 class="category-title">
                                            <a href="#">Restaurant</a>
                                        </h3>
                                        <h4 class="category-subtitle">98 Properties</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</div>
<!-- Categories end -->

<!-- Counters strat -->
<!-- <div class="counters overview-bgi">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter-box">
                    <i class="flaticon-sale"></i>
                    <h1 class="counter">967</h1>
                    <p>Listings For Sale</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter-box">
                    <i class="flaticon-rent"></i>
                    <h1 class="counter">1276</h1>
                    <p>Listings For Rent</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter-box">
                    <i class="flaticon-user"></i>
                    <h1 class="counter">396</h1>
                    <p>Agents</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter-box">
                    <i class="flaticon-work"></i>
                    <h1 class="counter">177</h1>
                    <p>Brokers</p>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Counters end -->



<!-- Partners strat -->
<div class="partners">
    <div class="container">
        <div class="slick-slider-area">
            <div class="row slick-carousel" data-slick='{"slidesToShow": 5, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 3}}, {"breakpoint": 768,"settings":{"slidesToShow": 2}}]}'>
                <div class="slick-slide-item"><img src="img/brand/list2.jpg" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="img/brand/list3.png" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="img/brand/list4.jpg" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="img/brand/list.png" alt="brand" class="img-fluid"></div>
               
            </div>
        </div>
    </div>
</div>

<?php include('inc/footer.php'); ?>
