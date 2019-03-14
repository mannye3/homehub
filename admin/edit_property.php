<?php
include"core/session.php";
include"core/select.php";
include('inc/header.php');

$sql_pro_d = "SELECT * FROM property WHERE property_no=".$_GET['pro'];
            $query8 = mysqli_query($con, $sql_pro_d);
            $row3 = mysqli_fetch_array($query8);
            $user =$row3["user_code"];


            $sql4 = "SELECT * FROM pro_img  WHERE property_no=".$_GET['pro'];
            $query4 = mysqli_query($con, $sql4);


            $sql_us_pic = "SELECT * FROM users WHERE user_code='$user' ";
            $query7 = mysqli_query($con, $sql_us_pic);
            $row7 = mysqli_fetch_array($query7);
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
                            <div class="col-md-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title">Add New Property</h4>
                                    
                                        <form method="POST" action="core/logic-edit.php?id=<?php echo $row3["id"]; ?>">
                                   
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="inputEmail4" class="col-form-label">Property Title</label>
                                                <input type="tex" value="<?php echo $row3["title"]; ?>" name="title" class="form-control">
                                            </div>
                                             <div class="form-group col-md-6">
                                                <label  class="col-form-label">Type</label>
                                                <select class="form-control" name="type" value="<?php echo $row3["type"]; ?>" >
                                                    <option><?php echo $row3["type"]; ?></option>
                                                     <option value="bungalow">Bungalow</option>
                                                 <option value="Duplex">Duplex</option>
                                                <option value="Flat">Flat</option>
                                                <option value="Villa">House/Villa</option>
                                                <option value="Industrial">Industrial Building</option>
                                                 <option value="Office">Office Space</option>
                                                <option value="Land">Plot/Land</option>
                                                <option value="Shop">Shop/Showroom</option>
                                                <option value="Store room">Store Room</option>
                                                <option value="Warehouse">Warehouse/Godown</option>
                                                    
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label  class="col-form-label">Purpose</label>
                                                <select class="form-control" name="purpose" value="<?php echo $row3["type"]; ?>" >
                                                    <option><?php echo $row3["purpose"]; ?></option>
                                                    <option value="rent">Rent</option>
                                                    <option value="sale">Sale</option>
                                                    
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputPassword4" class="col-form-label">Price(₦)</label>
                                                <input  type="input" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57" value="<?php echo $row3["price"]; ?>" name="price" class="form-control">
                                            </div>

                                               
                                            <div class="form-group col-md-4">
                                                <label for="inputPassword4" class="col-form-label">Bedrooms</label>
                                               <select class="form-control" name="rooms" value="<?php echo $row3["rooms"]; ?>">
                                                    <option><?php echo $row3["rooms"]; ?></option>
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
                                                </select>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="inputPassword4" class="col-form-label">Bathrooms</label>
                                                 <select class="form-control" name="bathrooms" value="<?php echo $row3["bathrooms"]; ?>">
                                                    <option><?php echo $row3["bathrooms"]; ?></option>
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
                                                </select>
                                            </div>



                                            <div class="form-group col-md-4">
                                                <label  class="col-form-label">State</label>
                                 <select required="" class="form-control" name="state" id="state1" onchange="change_location();">
                                             <option value="<?php echo $row3['state'] ?>"><?php echo $row3['state'] ?></option>
                                        <?php
                                            while ($re_st = mysqli_fetch_array($stlg)) {
                                            echo '<option value="'.$re_st['state'].'" >
                                            '.$re_st['state'].'</option>';
                                                    }
                                                    ?>
                                                </select>
                                               
                                               
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputPassword4" class="col-form-label">City</label>
                                                <select class="form-control" name="lga" id="city2">
                                                    <option><?php echo $row3["lga"]; ?></option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="inputPassword4" class="col-form-label">Address</label>
                                                 <input type="text" value="<?php echo $row3["address"]; ?>" name="address" onFocus="initializeAutocomplete()" id="locality" class="form-control">
                                                  <input type="hidden" name="city" id="city" placeholder="City" value="" >
                              <input type="hidden" value="<?php echo $row3["latitude"]; ?>" name="latitude" id="latitude" placeholder="Latitude" value="" >
                              <input type="hidden" name="longitude" value="<?php echo $row3["longitude"]; ?>" id="longitude" placeholder="Longitude" value="" >
                                            </div>

                                            </div>
                                        <div class="form-group">
                                            <label for="inputAddress" class="col-form-label">Detailed Information</label>
                                            <textarea type="text" name="details" class="form-control summernote" placeholder="1234 Main St"><?php echo $row3["details"]; ?></textarea>
                                        </div>

                                        

                                        <br>
                                        <br>
                                        
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="inputCity" class="col-form-label">Name</label>
                                                <input type="text" readonly="" value="<?php echo $row3["fullname"]; ?>" name="fullname" class="form-control" id="inputCity">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputState"    class="col-form-label">Email</label>
                                                <input type="text" readonly="" value="<?php echo $row3["email"]; ?>" name="email" class="form-control" id="inputCity">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputZip" class="col-form-label">Phone</label>
                                                <input type="text" readonly="" value="<?php echo $row3["phone"]; ?>" name="phone" class="form-control" id="inputZip">
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        
                                        <div align="right">
                                         <button type="submit"  class="btn btn-custom btn-rounded waves-light waves-effect" name="upt-property">Submit</button>
                                         </div>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!--  end row -->


                        
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


<script type="text/javascript">
  function initializeAutocomplete(){
    var input = document.getElementById('locality');
    // var options = {
    //   types: ['(regions)'],
    //   componentRestrictions: {country: "IN"}
    // };
    var options = {}

    var autocomplete = new google.maps.places.Autocomplete(input, options);

    google.maps.event.addListener(autocomplete, 'place_changed', function() {
      var place = autocomplete.getPlace();
      var lat = place.geometry.location.lat();
      var lng = place.geometry.location.lng();
      var placeId = place.place_id;
      // to set city name, using the locality param
      var componentForm = {
        locality: 'short_name',
      };
      for (var i = 0; i < place.address_components.length; i++) {
        var addressType = place.address_components[i].types[0];
        if (componentForm[addressType]) {
          var val = place.address_components[i][componentForm[addressType]];
          document.getElementById("city").value = val;
        }
      }
      document.getElementById("latitude").value = lat;
      document.getElementById("longitude").value = lng;
      document.getElementById("location_id").value = placeId;
    });
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

        <!-- Bootstrap fileupload js -->
        <script src="plugins/bootstrap-fileupload/bootstrap-fileupload.js"></script>

        <!-- Dropzone js -->
        <script src="plugins/dropzone/dropzone.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>


          <!--Summernote js-->
        <script src="plugins/summernote/summernote-bs4.min.js"></script>

        <script>
            jQuery(document).ready(function(){
                $('.summernote').summernote({
                    height: 250,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false                 // set focus to editable area after initializing summernote
                });
            });
        </script>


        <script>
function change_location()
{
    var state1 = $("#state1").val();
    
       $.ajax({
        type: "POST",
        url: "core/get_city.php",
        data: "state1="+state1,
        cache: false,
        success: function(response)
            {
                    //alert(response);return false;
                $("#city2").html(response);
            }
            });
    
}
</script>




    </body>

<!-- Mirrored from coderthemes.com/highdmin/default/form-uploads.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Apr 2018 10:34:12 GMT -->
</html>