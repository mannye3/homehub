<?php
include('inc/header.php');
include('inc/select.php');

?>


    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
<?php
include('inc/nav.php');

?>


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
                                    <h4 class="page-title">Add Property </h4>
                                    <ol class="breadcrumb">
                                        <!-- <li class="breadcrumb-item active">Welcome to Highdmin admin panel !</li> -->
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
                                    

                                    <form method="post" action="inc/logic.php">
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="inputEmail4" class="col-form-label">Property Title</label>
                                                <input type="tex" name="title" class="form-control">
                                            </div>
                                             <div class="form-group col-md-6">
                                                <label  class="col-form-label">Type</label>
                                                <select class="form-control" name="type" >
                                                    <option>Select type</option>
                                                    <option value="Apartment">Apartment</option>
                                                    <option value="Commercial">Commercial</option> 
                                                    <option value="Office Space">Office Space</option>
                                                    
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputPassword4" class="col-form-label">Price(₦)</label>
                                                <input type="text" name="price" class="form-control">
                                            </div>

                                              <div class="form-group col-md-4">
                                                <label  class="col-form-label">Area/Location</label>
                                                <input type="text"  name="SqFt" class="form-control" placeholder="SqFt">
                                               
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputPassword4" class="col-form-label">Bedrooms</label>
                                               <select class="form-control" name="rooms">
                                                    <option>Select</option>
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
                                                 <select class="form-control" name="bathrooms">
                                                    <option>Select</option>
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
                                <select class="form-control" name="state" id="state1" onchange="change_location();">
                                                    <option>Select</option>
                                                    <?php
                                            while ($re_st = mysqli_fetch_array($stlg)) {
                                            echo '<option value="'.$re_st['state'].'" >
                                            '.$re_st['state'].'</option>';
                                                    }
                                                    ?>
                                                    ?>
                                                </select>
                                               
                                               
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputPassword4" class="col-form-label">City</label>
                                                <select class="form-control" name="lga" id="city2">
                                                    <option>Select</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="inputPassword4" class="col-form-label">Address</label>
                                                 <input type="text" name="location" onFocus="initializeAutocomplete()" id="locality" class="form-control">
                                                  <input type="hidden" name="city" id="city" placeholder="City" value="" >
                              <input type="" name="latitude" id="latitude" placeholder="Latitude" value="" >
                              <input type="" name="longitude" id="longitude" placeholder="Longitude" value="" >
                                            </div>

                                            </div>
                                        <div class="form-group">
                                            <label for="inputAddress" class="col-form-label">Detailed Information</label>
                                            <textarea type="text" name="details" class="form-control summernote" placeholder="1234 Main St"></textarea>
                                        </div>

                                         <label for="inputAddress" class="col-form-label">Features(optinal)</label>
                                         <br>



                                        <div class="form-row">
                                            <?php

                                                $count1 = 1;

                                                while ($row_features = mysqli_fetch_array($query_features)) {
                                                    $output1[] = '<div class="form-group col-md-4">
                                                                <div class="checkbox checkbox-success form-check-inline">
                                                                  <input type="checkbox" name="fea_'. $count1 .'" value="' . $row_features['property_features'] . '" id="inlineCheckbox2" />
                                                                  <label for="inlineCheckbox2">' . $row_features['property_features'] . '</label>
                                                                    </div>
                                                                </div>';  

                                                    $count1++;
                                                }

                                                echo join('',$output1);

                                            ?>
                                            <!-- <span id="spanPropertyFeaturesValues"></span> -->
                                            <input type="hidden" name="features007" id="property_features" />
                                            <!-- <div class="form-group col-md-4">
                                                 <div class="checkbox checkbox-success form-check-inline">
                                                    <input type="checkbox" name="fea1" id="inlineCheckbox2" value="Ample parking" >
                                                    <label for="inlineCheckbox2"> Ample parking </label>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                 <div class="checkbox checkbox-success form-check-inline">
                                                    <input type="checkbox" name="fea2" id="inlineCheckbox2" value="UPS" >
                                                    <label for="inlineCheckbox2"> UPS </label>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                 <div class="checkbox checkbox-success form-check-inline">
                                                    <input type="checkbox" name="fea3" id="inlineCheckbox2" value="24hrs standby generators" >
                                                    <label for="inlineCheckbox2"> 24hrs standby generators </label>
                                                </div>
                                            </div>

                                            <div class="form-group col-md-4">
                                                 <div class="checkbox checkbox-success form-check-inline">
                                                    <input type="checkbox" name="fea4" id="inlineCheckbox2" value="Lift" >
                                                    <label for="inlineCheckbox2"> Lift </label>
                                                </div>
                                            </div>


                                            <div class="form-group col-md-4">
                                                 <div class="checkbox checkbox-success form-check-inline">
                                                    <input type="checkbox" name="fea5" id="inlineCheckbox2" value="Dedicated Transformer" >
                                                    <label for="inlineCheckbox2"> Dedicated Transformer </label>
                                                </div>
                                            </div>

                                            <div class="form-group col-md-4">
                                                 <div class="checkbox checkbox-success form-check-inline">
                                                    <input type="checkbox" name="fea6" id="inlineCheckbox2" value="DSTV Connection" >
                                                    <label for="inlineCheckbox2"> DSTV Connection </label>
                                                </div>
                                            </div>

                                            <div class="form-group col-md-4">
                                                 <div class="checkbox checkbox-success form-check-inline">
                                                    <input type="checkbox" name="fea7" id="inlineCheckbox2" value="Gym" >
                                                    <label for="inlineCheckbox2"> Gym </label>
                                                </div>
                                            </div>

                                            <div class="form-group col-md-4">
                                                 <div class="checkbox checkbox-success form-check-inline">
                                                    <input type="checkbox" name="fea8" id="inlineCheckbox2" value="WIFI" >
                                                    <label for="inlineCheckbox2"> WIFI </label>
                                                </div>
                                            </div>

                                            <div class="form-group col-md-4">
                                                 <div class="checkbox checkbox-success form-check-inline">
                                                    <input type="checkbox" name="fea9" id="inlineCheckbox2" value="Air conditioning" >
                                                    <label for="inlineCheckbox2"> Air conditioning</label>
                                                </div>
                                            </div>


                                            <div class="form-group col-md-4">
                                                 <div class="checkbox checkbox-success form-check-inline">
                                                    <input type="checkbox" name="fea10" id="inlineCheckbox2" value="Security" >
                                                        <label for="inlineCheckbox2"> Security  </label>
                                                    </div>
                                            </div>

                                            <div class="form-group col-md-4">
                                                 <div class="checkbox checkbox-success form-check-inline">
                                                    <input type="checkbox" name="fea11" id="inlineCheckbox2" value="Swimming Pool" >
                                                    <label for="inlineCheckbox2">  Swimming Pool </label>
                                                </div>
                                            </div>

                                            <div class="form-group col-md-4">
                                                 <div class="checkbox checkbox-success form-check-inline">
                                                    <input type="checkbox" name="fea12" id="inlineCheckbox2" value="Borehole and Water treatment plant" >
                                                    <label for="inlineCheckbox2"> Borehole and Water treatment plant </label>
                                                </div>
                                            </div> -->
                                        </div>

                                        <br>
                                        <br>
                                        
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="inputCity" class="col-form-label">Name</label>
                                                <input type="text" name="fullname" class="form-control" id="inputCity">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputState"   class="col-form-label">Email</label>
                                                <input type="text" name="email" class="form-control" id="inputCity">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputZip" class="col-form-label">Phone</label>
                                                <input type="text" name="phone" class="form-control" id="inputZip">
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        
                                        <div align="right">
                                         <button type="submit"  class="btn btn-custom btn-rounded waves-light waves-effect" name="add-property">Submit</button>
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
 <script src="http://maps.googleapis.com/maps/api/js?v=3&amp;libraries=weather,geometry,visualization,places,drawing&amp;&amp;key=AIzaSyAqLlMqwv4wpy6cfSBGJddPpyoZ_eP14Kc" type="text/javascript"></script>
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
        url: "inc/get_city.php",
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

<script type="text/javascript">

$(document).ready(function () {
 
    var countCheckedBoxes = 0;
    var valuesArray = "";

    $('input[type="checkbox"]').on("change", function () {
        
        if (!$(this).is(':checked')) {
            //alert(this.id);
            countCheckedBoxes = $('input[type="checkbox"]:checked').length;

            if (countCheckedBoxes == 0){
                //$("#spanPropertyFeaturesValues").text("");
                $("#property_features").val("");
            }
            else{

                valuesArray = $('input:checkbox:checked').map( function() {
                    return this.value;
                }).get().join(",");

                //$("#spanPropertyFeaturesValues").text(valuesArray);
                $("#property_features").val(valuesArray);
            }
            
        }
        else{

            $('input[type="checkbox"]:checked').each(function () {
                //alert($(this).val());
                valuesArray = $('input:checkbox:checked').map( function() {
                    return this.value;
                }).get().join(",");

                //$("#spanPropertyFeaturesValues").text(valuesArray);
                $("#property_features").val(valuesArray);

            });
        }        

        
    });

});

</script>



    </body>

<!-- Mirrored from coderthemes.com/highdmin/default/form-uploads.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Apr 2018 10:34:12 GMT -->
</html>