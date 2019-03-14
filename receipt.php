<?php 
include('core/logic.php'); 
include('inc/header.php'); 
?>


<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Rent Receipt</h1>
            <ul class="breadcrumbs">
                <li><a href="index.php">Home</a></li>
                <li class="active">Rent Receipt</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Contact 2 start -->
<div class="contact-2 content-area-5">
    <div class="container">
        <!-- Main title -->
        <div class="main-title text-center">
            <h1>Create Rent Receipt</h1>
            <p>We waited until we could do it right. Then we did! Instead of creating a carbon copy.</p>
        </div>
        <!-- Contact info -->
        <!-- <div class="contact-info">
            <div class="row">
                <div class="col-md-3 col-sm-6 mrg-btn-50">
                    <i class="flaticon-pin"></i>
                    <p>Office Address</p>
                    <strong>20/F Green Road, Dhaka</strong>
                </div>
                <div class="col-md-3 col-sm-6 mrg-btn-50">
                    <i class="flaticon-phone"></i>
                    <p>Phone Number</p>
                    <strong>+55 417 634 7071</strong>
                </div>
                <div class="col-md-3 col-sm-6 mrg-btn-50">
                    <i class="flaticon-mail"></i>
                    <p>Email Address</p>
                    <strong>info@themevessel.com</strong>
                </div>
                <div class="col-md-3 col-sm-6 mrg-btn-50">
                    <i class="flaticon-earth"></i>
                    <p>Web</p>
                    <strong>info@themevessel.com</strong>
                </div>
            </div>
        </div> -->
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group name">
                                <label>Tenant Name</label>
                      <input type="text" name="tenant_name" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group email">
                                 <label>Owner Name</label>
                      <input type="text" name="owner_name" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group subject">
                                <label>Tenant Phone</label>
                      <input type="text" name="tenant_phone" class="form-control" placeholder="Phone">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group number">
                                 <label>Owner Phone</label>
                      <input type="text" name="owner_phone" class="form-control" placeholder="Phone">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group number">
                                 <label>Amount</label>
                                <input required="" type="input" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57" class="form-control" name="price" placeholder="300000">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group number">
                                 <label>Rent Month</label>
                                <select required="" class="selectpicker search-fields" name="rent">
                                               <option value="0"></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                  <option value="11">11</option>
                                                    <option value="12">12</option>
                                            </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group message">
                                  <label>Rent Address</label>
                               <textarea type="text" name="rent_address" class="form-control" placeholder="Address of property "></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group message">
                                 <label>Owner Address</label>
                                <textarea  type="text" name="owner_address" class="form-control" placeholder="Current Address of the owner "></textarea>
                            </div>
                        </div>
                         <div class="col-md-6">
                            <div class="form-group number">
                                 <label>Receipt Start Date</label>
                                <input type="date" name="receipt_s_d" class="form-control" placeholder="Number">
                            </div>
                        </div> 
                        <div class="col-md-6">
                            <div class="form-group number">
                                 <label>Receipt End Date</label>
                                <input type="date" name="receipt_e_d" class="form-control" placeholder="Number">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group number">
                                  <label>Email</label>
                      <input type="email" name="email" class="form-control" placeholder="Email to recieve PDF link">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="send-btn text-center">
                                <button type="submit" name="receipt" class="btn btn-md button-theme">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-4">
                    <div class="opening-hours bg-light">
                        <h3>Opening Hours</h3>
                        <ul class="list-style-none">
                            <li><strong>Sunday</strong> <span class="text-red"> closed</span></li>
                            <li><strong>Monday</strong> <span> 10 AM - 8 PM</span></li>
                            <li><strong>Tuesday </strong> <span> 10 AM - 8 PM</span></li>
                            <li><strong>Wednesday </strong> <span> 10 AM - 8 PM</span></li>
                            <li><strong>Thursday </strong> <span> 10 AM - 8 PM</span></li>
                            <li><strong>Friday </strong> <span> 10 AM - 8 PM</span></li>
                            <li><strong>Saturday </strong> <span> 10 AM - 8 PM</span></li>
                        </ul>
                    </div>
                </div> -->
            </div>
        </form>
    </div>
</div>
<!-- Contact 2 end -->
<!-- Google map start -->

<!-- Google map end -->

<!-- Footer start -->
<footer class="footer">
    <div class="container footer-inner">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="footer-item clearfix">
                    <img src="img/logos/logo.png" alt="logo" class="f-logo">
                    <div class="text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item">
                    <h4>Contact Us</h4>
                    <div class="f-border"></div>
                    <ul class="contact-info">
                        <li>
                            <i class="flaticon-pin"></i>20/F Green Road, Dhanmondi, Dhaka
                        </li>
                        <li>
                            <i class="flaticon-mail"></i><a href="mailto:sales@hotelempire.com">info@themevessel.com</a>
                        </li>
                        <li>
                            <i class="flaticon-phone"></i><a href="tel:+55-417-634-7071">+0477 85X6 552</a>
                        </li>
                        <li>
                            <i class="flaticon-fax"></i>+0477 85X6 552
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
                <div class="footer-item">
                    <h4>
                        Useful Links
                    </h4>
                    <div class="f-border"></div>
                    <ul class="links">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="about.html">About Us</a>
                        </li>
                        <li>
                            <a href="services.html">Services</a>
                        </li>
                        <li>
                            <a href="contact.html">Contact Us</a>
                        </li>
                        <li>
                            <a href="dashboard.html">Dashboard</a>
                        </li>
                        <li>
                            <a href="properties-details.html">Properties Details</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
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
            </div>
        </div>
    </div>
</footer>
<!-- Footer end -->

<!-- Sub footer start -->
<div class="sub-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <p class="copy">© 2018 <a href="#">Theme Vessel.</a> Trademarks and brands are the property of their respective owners.</p>
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


</div>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
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

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script  src="js/ie10-viewport-bug-workaround.js"></script>
<!-- Custom javascript -->
<script  src="js/ie10-viewport-bug-workaround.js"></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-89110077-3', 'auto');
    ga('send', 'pageview');
</script>

<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0N5pbJN10Y1oYFRd0MJ_v2g8W2QT74JE"></script>
<script>
    function LoadMap(propertes) {
        var defaultLat = 40.7110411;
        var defaultLng = -74.0110326;
        var mapOptions = {
            center: new google.maps.LatLng(defaultLat, defaultLng),
            zoom: 15,
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

<!-- Mirrored from storage.googleapis.com/themevessel-items/neer/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Dec 2018 11:45:40 GMT -->
</html>
