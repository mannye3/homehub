<?php
$user = $_GET['user'];
include"core/session.php";
include"core/user_stat.php";
include('inc/header.php');



$sql = "SELECT * FROM users WHERE user_code='$user'";
$query  = mysqli_query($con, $sql);
$row4 =  mysqli_fetch_assoc($query);


$ag_pro = "SELECT * FROM property  WHERE user_code='$user'";
            $query9 = mysqli_query($con, $ag_pro);
?>


    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
<?php
include('inc/nav.php');

?>

           <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

            <div class="content-page">

                <!-- Top Bar Start -->
                 <div class="topbar">

                    <nav class="navbar-custom">

                      <?php include"inc/nav2.php"; ?>

                        <ul class="list-inline menu-left mb-0">
                            <li class="float-left">
                                <button class="button-menu-mobile open-left disable-btn">
                                    <i class="dripicons-menu"></i>
                                </button>
                            </li>
                            <li>
                                <div class="page-title-box">
                                    <h4 class="page-title">Properties </h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#">Properties</a></li>
                                        
                                    </ol>
                                </div>
                            </li>

                        </ul>

                    </nav>

                </div>
                <!-- Top Bar End -->



                <!-- Start Page content -->
                <div class="content">
                    <div class="container-fluid">


                        <div class="row">
                            <div class="col-md-4">
                                <!-- Personal-Information -->
                                <div class="card-box">
                                  
                                    <div class="panel-body">
                                       <center>
                                         <?php include('core/pro-pic.php');  ?></center>

                                        <hr/>

                                        <div class="text-left">
                                            <p class="text-muted font-13"><strong>Full Name :</strong> <span class="m-l-15"><?php echo $row4["name"]; ?></span></p>

                                            <p class="text-muted font-13"><strong>Mobile :</strong><span class="m-l-15"><?php echo $row4["phone"]; ?></span></p>

                                            <p class="text-muted font-13"><strong>Email :</strong> <span class="m-l-15"><?php echo $row4["email"]; ?></span></p>

                                            <p class="text-muted font-13"><strong>Location :</strong> <span class="m-l-15"><?php echo $row4["location"]; ?></span></p>

                                        </div>

                                      
                                    </div>
                                </div>
                               
                            </div>


                            <div class="col-md-8">

                                <div class="row">

                                    <div class="col-sm-4">
                                        <div class="card-box tilebox-one">
                                            <i class="icon-layers float-right text-muted"></i>
                                            <h6 class="text-muted text-uppercase mt-0">Pending Properties</h6>
                                            <h2 class="m-b-20" data-plugin="counterup"><?php echo $review; ?></h2>
                                           
                                        </div>
                                    </div><!-- end col -->

                                    <div class="col-sm-4">
                                        <div class="card-box tilebox-one">
                                            <i class="icon-paypal float-right text-muted"></i>
                                            <h6 class="text-muted text-uppercase mt-0">Active Properties</h6>
                                            <h2 class="m-b-20"><span data-plugin="counterup"><?php echo $approve; ?></span></h2>
                                            
                                        </div>
                                    </div><!-- end col -->

                                    <div class="col-sm-4">
                                        <div class="card-box tilebox-one">
                                            <i class="icon-rocket float-right text-muted"></i>
                                            <h6 class="text-muted text-uppercase mt-0">Total Properties</h6>
                                            <h2 class="m-b-20" data-plugin="counterup"><?php echo $total_p; ?></h2>
                                            
                                        </div>
                                    </div><!-- end col -->

                                </div>
                                <!-- end row -->


                                <div class="card-box">
                                    <h4 class="header-title mt-0 mb-3">Edit Profile </h4>
                                    <div class="">
                                        <div class="">
                                        <form  action="core/logic-edit.php?action=update&id=<?php echo $row4["id"]; ?>" method="POST" >
                                        <div class="form-group">
                                            <label for="userName">Full Name<span class="text-danger">*</span></label>
                                            <input type="text" name="name" parsley-trigger="change" required
                                                   value="<?php echo $row4["name"]; ?>" class="form-control" >

                                                    <input type="hidden" name="user_code" parsley-trigger="change" required
                                                   value="<?php echo $row4["user_code"]; ?>" class="form-control" >
                                        </div>

                                         
                                        <div class="form-group">
                                           <label for="emailAddress">Email address<span class="text-danger">*</span></label>
                                            <input type="email" name="email" parsley-trigger="change" required
                                                  required value="<?php echo $row4["email"]; ?>" class="form-control" >
                                        </div>



                                         <div class="form-group">
                                            <label for="emailAddress">Phone Number<span class="text-danger">*</span></label>
                                            <input type="text" name="phone" parsley-trigger="change" required
                                                  required value="<?php echo $row4["phone"]; ?>" class="form-control" >
                                        </div>

                                        <div class="form-group">
                                            <label for="userName">Location<span class="text-danger">*</span></label>
                                            <input id="autocomplete" onFocus="geolocate()" parsley-trigger="change" required
                                                   value="<?php echo $row4["location"]; ?>" class="form-control" name="location">
                                        </div>

                                        <div class="form-group">
                                            <label for="pass1">Password<span class="text-danger">*</span></label>
                                            <input name="password" type="password" placeholder="Password" required
                                                   class="form-control">
                                        </div>
                                        
                                    

                                        <div class="form-group text-right m-b-0">
                                            <button class="btn btn-custom waves-effect waves-light" type="submit" name="upt-user">
                                                Submit
                                            </button>
                                           
                                        </div>

                                    </form>
                                        </div>

                                        

                                    </div>
                                </div>

                                <div class="card-box">
                                    <h4 class="header-title mb-3">Properties</h4>

                                    <div class="table-responsive">
                                        <table class="table m-b-0">
                                            <thead>
                                            <tr>
                                                <th></th>
                                                <th>Property Name</th>
                                                <th>Upload Date</th>
                                               
                                                <th>Status</th>
                                            
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                       while ($rw5 = mysqli_fetch_array($query9)) {
                                       
                                         
                                             ?>
                                            <tr>
                                                <td> <img src="../<?php echo $rw5["pic"]; ?>" width="50" height="50" /></td>
                                                <td> <a href="property.php?pro=<?php echo $rw5["property_no"]; ?>">  <?php echo $rw5["title"]; ?></a></td>
                                               
                                                <td><?php echo $rw5["upload_date"]; ?></td>
                                                 <td>
                                                <?php

                                                if ($rw5['status'] == 1){
                                                echo '
                                                 <a href="inc/status.php?id='.$rw5['id'].'">
                                                <span class="badge badge-success">Active</span>
                                                </a>';
                                            }
                                            ?>


                                             <?php

                                                if ($rw5['status'] == 0){
                                                echo '
                                                 <a href="inc/status.php?id='.$rw5['id'].'">
                                                <span class="badge badge-danger">Not Active</span>
                                                </a>';
                                            }
                                            ?>

                                            </td>
                                                
                                            </tr>
                                            <?php
                                               
                                           }

                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                            <!-- end col -->

                        </div>
                        <!-- end row -->


                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2018 © Highdmin. - Coderthemes.com
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

 <script>
      

      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxkyVw9JMI0N6HBsjIKelYK337j81RNec&libraries=places&callback=initAutocomplete"
        async defer></script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>

        <!-- Counter Up  -->
        <script src="../plugins/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="../plugins/counterup/jquery.counterup.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>

</html>