<?php 
include('core/select.php');
include('core/user_logic.php');  
include('inc/header.php'); 


$pro = $_GET['pro'];

$sql_pro_d = "SELECT * FROM property WHERE property_no='$pro' ";
            $query8 = mysqli_query($con, $sql_pro_d);
            $row8 = mysqli_fetch_array($query8);
            $user =$row8["user_code"];
            $view =$row8["view"];


        $sql_pro_img = "SELECT * FROM pro_img WHERE property_no='$pro' ";
                $query9 = mysqli_query($con, $sql_pro_img);


            $sql_ag_pic = "SELECT * FROM users WHERE user_code='$user' ";
            $query7 = mysqli_query($con, $sql_ag_pic);
            $row7 = mysqli_fetch_array($query7);



if($pro =="")
{
echo "<script language='javascript' type='text/javascript'>

                        window.location.href='index.php';

                        </script>";
}



        $add_view = $view +1;

    $sql_view = "UPDATE property SET view='$add_view' WHERE property_no='$pro' ";
          $query_stat = mysqli_query($con, $sql_view);
            
?>

 <link rel="stylesheet" type="text/css" href="css/external.css">

<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Property Detail</h1>
            <ul class="breadcrumbs">
                <li><a href="index.php">Home</a></li>
                <li class="active">Property Detail</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Properties details page start -->
<div class="properties-details-page content-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Heading properties 3 start -->
                <div class="heading-properties-3">
                    <h1><?php echo $row8['title'] ?></h1>
                    <div class="mb-30"><span class="property-price">₦<?php  echo number_format($row8["price"]).""; ?></span> <span class="rent">For <?php echo $row8['purpose'] ?></span> <span class="location"><i class="flaticon-pin"></i><?php echo $row8["address"]; ?>. <?php echo $row8["lga"]; ?>, <?php echo $row8["state"]; ?></span></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <!-- main slider carousel items -->
                <div id="propertiesDetailsSlider" class="carousel properties-details-sliders slide mb-40">

    <div id="slideshow">
        <?php   while ($row9 = mysqli_fetch_array($query9)) {
                                             ?>
   <div class="slideitem current">
     <img src="<?php echo $row9["pic"]; ?>" class="img-fluid">
   </div>

    <?php
                }
                ?>
   
  
</div>

                          


                    <!-- main slider carousel nav controls -->
                    
                    <!-- main slider carousel items -->
                </div>
                <!-- Advanced search start -->
               
                <!-- Properties description start -->
                <div class="properties-description mb-40">
                    <h3 class="heading-2">
                        Description
                    </h3>
                    <p><?php echo $row8["details"]; ?></p>
                </div>
                <!-- Properties amenities start -->
                <!-- <div class="properties-amenities mb-40">
                    <h3 class="heading-2">
                        Features
                    </h3>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <ul class="amenities">
                                <li>
                                    <i class="fa fa-check"></i>Air conditioning
                                </li>
                                <li>
                                    <i class="fa fa-check"></i>Balcony
                                </li>
                                <li>
                                    <i class="fa fa-check"></i>Pool
                                </li>
                                <li>
                                    <i class="fa fa-check"></i>Room service
                                </li>
                                <li>
                                    <i class="fa fa-check"></i>Gym
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <ul class="amenities">
                                <li>
                                    <i class="fa fa-check"></i>Wifi
                                </li>
                                <li>
                                    <i class="fa fa-check"></i>Parking
                                </li>
                                <li>
                                    <i class="fa fa-check"></i>Double Bed
                                </li>
                                <li>
                                    <i class="fa fa-check"></i>Home Theater
                                </li>
                                <li>
                                    <i class="fa fa-check"></i>Electric
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <ul class="amenities">
                                <li>
                                    <i class="fa fa-check"></i>Telephone
                                </li>
                                <li>
                                    <i class="fa fa-check"></i>Jacuzzi
                                </li>
                                <li>
                                    <i class="fa fa-check"></i>Alarm
                                </li>
                                <li>
                                    <i class="fa fa-check"></i>Garage
                                </li>
                                <li>
                                    <i class="fa fa-check"></i>Security
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> -->
                <!-- Floor plans start -->
               
                <!-- Location start -->
                <div class="location mb-50">
                    <div class="map">
                        <h3 class="heading-2">Property Location</h3>
                        <div id="map" class="contact-map"></div>
                    </div>
                </div>
              
               
                <!-- Similar Properties start -->
                <!-- <h3 class="heading-2">Similar Properties</h3>
                <div class="row similar-properties">
                    <div class="col-md-6">
                        <div class="property-box">
                            <div class="property-thumbnail">
                                <a href="properties-details.html" class="property-img">
                                    <div class="listing-badges">
                                        <span class="featured">Featured</span>
                                    </div>
                                    <div class="price-box"><span>$850.00</span> Per Month</div>
                                    <img class="d-block w-100" src="img/properties/properties-5.jpg" alt="properties">
                                </a>
                            </div>
                            <div class="detail">
                                <h1 class="title">
                                    <a href="properties-details.html">Real Luxury Villa</a>
                                </h1>

                                <div class="location">
                                    <a href="properties-details.html">
                                        <i class="flaticon-pin"></i>123 Kathal St. Tampa City,
                                    </a>
                                </div>
                            </div>
                            <ul class="facilities-list clearfix">
                                <li>
                                    <span>Area</span>3600 Sqft
                                </li>
                                <li>
                                    <span>Beds</span> 3
                                </li>
                                <li>
                                    <span>Baths</span> 2
                                </li>
                                <li>
                                    <span>Garage</span> 1
                                </li>
                            </ul>
                            <div class="footer">
                                <a href="#">
                                    <i class="flaticon-people"></i> Jhon Doe
                                </a>
                                <span>
                                <i class="flaticon-calendar"></i>5 Days ago
                            </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="property-box">
                            <div class="property-thumbnail">
                                <a href="properties-details.html" class="property-img">
                                    <div class="listing-badges">
                                        <span class="featured">Featured</span>
                                    </div>
                                    <div class="price-box"><span>$850.00</span> Per Month</div>
                                    <img class="d-block w-100" src="img/properties/properties-1.jpg" alt="properties">
                                </a>
                            </div>
                            <div class="detail">
                                <h1 class="title">
                                    <a href="properties-details.html">Modern Family Home</a>
                                </h1>

                                <div class="location">
                                    <a href="properties-details.html">
                                        <i class="flaticon-pin"></i>123 Kathal St. Tampa City,
                                    </a>
                                </div>
                            </div>
                            <ul class="facilities-list clearfix">
                                <li>
                                    <span>Area</span>3600 Sqft
                                </li>
                                <li>
                                    <span>Beds</span> 3
                                </li>
                                <li>
                                    <span>Baths</span> 2
                                </li>
                                <li>
                                    <span>Garage</span> 1
                                </li>
                            </ul>
                            <div class="footer">
                                <a href="#">
                                    <i class="flaticon-people"></i> Jhon Doe
                                </a>
                                <span>
                                <i class="flaticon-calendar"></i>5 Days ago
                            </span>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="sidebar-right">
                    <!-- Advanced search start -->
                   <div class="our-agent-sidebar">
                        <div class="p-20">
                            <h3 class="sidebar-title">Contact Agent</h3>
                            <div class="s-border"></div>
                        </div>
                        <div id="carouselExampleIndicators5" class="carousel slide text-center" data-ride="carousel">
                            
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="team-1">
                                        <div class="team-photo">
                                            <a href="#">
                                                <?php include('core/pro-pic3.php');  ?>
                                                
                                            </a>
                                           <!--  <ul class="social-list clearfix">
                                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                                <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                            </ul> -->
                                        </div>
                                        <div class="team-details">
                                            <h5><a href="agent.php?agent=<?php echo $row8["user_code"]; ?>"><?php echo $row8["fullname"]; ?></a></h5>
                                            <h6><?php echo $row8["occupation"]; ?></h6>
                                            <h4><?php echo $row8["phone"]; ?></h4> 
                                            <!--  <h4><?php echo $row7["phone"]; ?></h4>  -->
                                            <br>
                                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Send Message</button>
                                     <br>
                                        </div>
                                    </div>
                                    
                                </div>
                               
                               
                            </div>
                        </div>
                    </div>
                    <!-- Recent properties start -->
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Properties details page end -->

<!-- Footer start -->
<footer class="footer">
    <div class="container footer-inner">
         <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="footer-item clearfix">
                    <img src="img/logos/hb.png" width="170" height="130">
                    <div class="text">
                        <p>HomeHub is Nigeria’s number one property website. We are not estate agents aone, but we aim to be the place for property seekers to find details of all properties available to buy or rent. </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item">
                    <h4>Contact Us</h4>
                    <div class="f-border"></div>
                    <ul class="contact-info">
                        <li>
                            <i class="flaticon-pin"></i>Lagos, Nigeria
                        </li>
                        <li>
                            <i class="flaticon-mail"></i><a href="mailto:sales@hotelempire.com">info@homehub.com.ng</a>
                        </li>
                        <li>
                            <i class="flaticon-phone"></i><a href="tel:+55-417-634-7071">+2348062165573</a>
                        </li>
                       <!--  <li>
                            <i class="flaticon-fax"></i>+0477 85X6 552
                        </li> -->
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-lg-2 col-md-6 col-sm-6">
                <div class="footer-item">
                    <h4>
                        Useful Links
                    </h4>
                    <div class="f-border"></div>
                    <ul class="links">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="about.php">About Us</a>
                        </li>
                       
                        <li>
                            <a href="contact.php">Contact Us</a>
                        </li>
                       
                    </ul>
                </div>
            </div>
            <!-- <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item clearfix">
                    <h4>Subscribe</h4>
                    <div class="f-border"></div>
                    <div class="Subscribe-box">
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>
                        <form class="form-inline" action="#" method="GET">
                            <input type="text" class="form-control mb-sm-0" id="inlineFormInputName3" placeholder="Email Address">
                            <button type="submit" class="btn"><i class="fa fa-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</footer>
<!-- Footer end -->

<!-- Sub footer start -->
<div class="sub-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <p class="copy">© 2018  Designed by <a href="http://e3tech.com.ng/" target="_blank">E3 Technologies</a> 
                </p>
            </div>
            <div class="col-lg-4 col-md-4">
                <ul class="social-list clearfix">
                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" class="rss"><i class="fa fa-rss"></i></a></li>
                    <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Sub footer end -->

<!-- Full Page Search -->
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
         
          <center><h4>Send Message</h4></center>
        </div>
        <div class="modal-body">
          <div class="submit-address dashboard-list">
                        <form method="POST" action="">
                            
                            <div class="search-contents-sidebar">
                                <div class="row pad-20">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input required="" type="text" class="input-text" name="name" placeholder="Full Name">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" class="input-text" name="s_email" placeholder="Email">
                                        </div>

                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input required="" type="text" class="input-text" name="phone" placeholder="Phone">
                                            <input value="<?php echo $row8["user_code"]; ?>" class="input-text" name="user_code" type="hidden">
                                            <input value="<?php echo $row8["email"]; ?>"  class="input-text" name="email" type="hidden" >

                                        </div>
                                    </div>
                                   <div class="col-lg-12">
                                      <label>Message</label>
                                    <textarea class="input-text" name="msg" placeholder="Message Information"></textarea>
                                </div>
                                    
                                </div>
                            </div>
                           
                           
                          <div class="col-lg-4 col-md-12 col-sm-12">
                                    <button name="message" type="submit" class="btn btn-md button-theme">Send Message</button>
                                </div>
                           
                        </form>
                    </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

<script src="js/jquery-2.2.0.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script  src="js/bootstrap-submenu.js"></script>
<script  src="js/rangeslider.js"></script>
<script  src="js/jquery.mb.YTPlayer.js"></script>
<script  src="js/bootstrap-select.min.js"></script>
<script  src="js/jquery.easing.1.3.js"></script>
<script  src="js/jquery.scrollUp.js"></script>
<script  src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script  src="js/leaflet.js"></script>
<script  src="js/leaflet-providers.js"></script>
<script  src="js/leaflet.markercluster.js"></script>
<script  src="js/dropzone.js"></script>
<script  src="js/slick.min.js"></script>
<script  src="js/jquery.filterizr.js"></script>
<script  src="js/jquery.magnific-popup.min.js"></script>
<script  src="js/jquery.countdown.js"></script>
<script  src="js/maps.js"></script>
<script  src="js/app.js"></script>
<script  src="js/external.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script  src="js/ie10-viewport-bug-workaround.js"></script>
<!-- Custom javascript -->
<script  src="js/ie10-viewport-bug-workaround.js"></script>


<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxkyVw9JMI0N6HBsjIKelYK337j81RNec"></script>
<script>
    function LoadMap(propertes) {
        var defaultLat = <?php echo $row8["latitude"]; ?>;
        var defaultLng = <?php echo $row8["longitude"]; ?>;
        var mapOptions = {
            center: new google.maps.LatLng(defaultLat, defaultLng),
            zoom: 17,
            scrollwheel: false,
            styles: [
                {
                    featureType: "administrative",
                    elementType: "labels",
                    stylers: [
                        {visibility: "off"}
                    ]
                },
                {
                    featureType: "water",
                    elementType: "labels",
                    stylers: [
                        {visibility: "off"}
                    ]
                },
                {
                    featureType: 'poi.business',
                    stylers: [{visibility: 'off'}]
                },
                {
                    featureType: 'transit',
                    elementType: 'labels.icon',
                    stylers: [{visibility: 'off'}]
                },
            ]
        };
        var map = new google.maps.Map(document.getElementById("map"), mapOptions);
        var infoWindow = new google.maps.InfoWindow();
        var myLatlng = new google.maps.LatLng(40.7110411, -74.0110326);

        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map
        });
        (function (marker) {
            google.maps.event.addListener(marker, "click", function (e) {
                infoWindow.setContent("" +
                    "<div class='map-properties contact-map-content'>" +
                    "<div class='map-content'>" +
                    "<p class='address'>20-21 Kathal St. Tampa City, FL</p>" +
                    "<ul class='map-properties-list'> " +
                    "<li><i class='flaticon-phone'></i>  +0477 8556 552</li> " +
                    "<li><i class='flaticon-phone'></i>  info@themevessel.com</li> " +
                    "<li><a href='index.html'><i class='fa fa-globe'></i>  http://www.example.com</li></a> " +
                    "</ul>" +
                    "</div>" +
                    "</div>");
                infoWindow.open(map, marker);
            });
        })(marker);
    }
    LoadMap();
</script>


</body>

<!-- Mirrored from storage.googleapis.com/themevessel-items/neer/properties-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Dec 2018 11:45:16 GMT -->
</html>



