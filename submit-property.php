<?php
include('core/session.php');
$sql_ver = "SELECT * FROM users WHERE email='$user_check' ";
$query_ver  = mysqli_query($con, $sql_ver);
$row_ver = mysqli_fetch_array($query_ver);



if($row_ver['user_status']=='')
{
header("Location: verify.php");
}
include('core/user_logic.php');
include('core/stat.php');
include('core/user_select.php');
include('inc/user_header.php');



?>

<!-- Dashboard start -->
<div class="dashboard submit-property">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-12 col-pad">
                  <?php include('inc/user_nav.php'); ?>
            </div>
            <div class="col-lg-9 col-md-12 col-sm-12 col-pad">
                <div class="content-area5 dashboard-content">
                    <div class="dashboard-header clearfix">
                        <div class="row">
                            <div class="col-sm-12 col-md-6"><h4>Submit Property</h4></div>
                            <div class="col-sm-12 col-md-6">
                                <div class="breadcrumb-nav">
                                    <ul>
                                        <li>
                                            <a href="index.php">Home</a>
                                        </li>
                                        <li>
                                            <a href="dashboard.php">Dashboard</a>
                                        </li>
                                        <li class="active">Submit Property</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="submit-address dashboard-list">
                        <form method="POST" action="">
                            <h4 class="bg-grea-3">Basic Information</h4>
                           <!-- <?php
                            echo number_format("100000")."";

                            ?> -->
                            <div class="search-contents-sidebar">
                                <div class="row pad-20">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label>Property Title</label>
                                            <input required="" type="text" class="input-text" name="title" placeholder="Property Title">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Property type</label>
                                            <select required="" class="selectpicker search-fields" name="type">
                                                <option></option>
                                                <option value="Bungalow">Bungalow</option>
                                                 <option value="Duplex">Duplex</option>
                                                <option value="Flat">Flat</option>
                                                <option value="Villa">House/Villa</option>
                                                <option value="Industrial">Industrial Building</option>
                                                 <option value="Office">Office Space</option>
                                                <option value="Land">Plot/Land</option>
                                                <option value="Shop">Shop/Showroom</option>
                                                <option value="Store Room">Store Room</option>
                                                <option value="Warehouse">Warehouse/Godown</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Property purpose</label>
                                              <select required="" class="selectpicker search-fields" name="purpose">
                                                <option></option>
                                             <option value="Rent">Rent</option>
                                              <option value="Sale">Sale</option>
                                          </select>
                                        </div>
                                    </div>
                                    <!-- <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input type="text" class="input-text" name="your name" placeholder="USD">
                                        </div>
                                    </div> -->
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input required="" type="input" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57" class="input-text" name="price" placeholder="300000">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Rooms</label>
                                            <select required="" class="selectpicker search-fields" name="rooms">
                                                <option></option>
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
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Bathroom</label>
                                            <select required="" class="selectpicker search-fields" name="bathrooms">
                                                <option></option>
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
                                    </div>
                                </div>
                            </div>
                            <h4 class="bg-grea-3">Location</h4>
                            <div class="row pad-20">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label>State</label>
                                        <select required="" class="form-control" name="state" id="state1" onchange="change_location();">
                                             <option></option>
                                        <?php
                                            while ($re_st = mysqli_fetch_array($stlg)) {
                                            echo '<option value="'.$re_st['state'].'" >
                                            '.$re_st['state'].'</option>';
                                                    }
                                                    ?>
                                                </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label>City</label>
                                        <select required=""  name="lga" id="city2" class="form-control" name="choose-state">
                                            <option></option>
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input required="" type="text" class="input-text" onFocus="initializeAutocomplete()" id="locality"  name="address" >
                                         <input type="hidden" name="latitude" id="latitude" placeholder="Latitude" value="" >
                              <input type="hidden" name="longitude" id="longitude" placeholder="Longitude" value="" >
                              <input type="hidden" name="city" id="city" placeholder="City" value="" >
                                    </div>
                                </div>
                            </div>
                            <!-- <h4 class="bg-grea-3">Property Gallery</h4>
                            <div class="row pad-20">
                                <div class="col-lg-12">
                                    <div id="myDropzone" class="dropzone dropzone-design">
                                        <div class="dz-default dz-message"><span>Drop files here to upload</span></div>
                                    </div>
                                </div>
                            </div> -->
                            <h4 class="bg-grea-3">Detailed Information</h4>
                            <div class="row pad-20">
                                <div class="col-lg-12">
                                    <textarea class="input-text" name="details" placeholder="Detailed Information"></textarea>
                                </div>
                            </div>
                            <!-- <h4 class="bg-grea-3">Features (optional)</h4>
                            <div class="row pad-20">
                                 <?php
                                            while ($re_cl = mysqli_fetch_array($q_class)) {
                                            echo '
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="checkbox checkbox-theme checkbox-circle">
                                        <input id="checkbox1" value="'.$re_cl['section'].'" type="checkbox">
                                        <label for="checkbox1">
                                           '.$re_cl['section'].'
                                        </label>
                                    </div>
                                </div>';
                                                    }
                                                    ?>
                      
                            </div> -->
                            <!-- <h4 class="bg-grea-3">Contact Details</h4> -->
                            <div class="row pad-20">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" readonly="" value="<?php echo $row['name'] ?>" class="input-text" name="fullname" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" readonly=""  value="<?php echo $row['email'] ?>" class="input-text" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" readonly="" value="<?php echo $row['phone'] ?>"  class="input-text" name="phone"  placeholder="Phone">

                                        <input type="hidden"  value="<?php echo $row['occupation'] ?>"  class="input-text" name="occupation"  placeholder="Phone">

                                        <input type="hidden"  value="<?php echo $row['user_code'] ?>"  class="input-text" name="user_code"  placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <button name="sub-pro" type="submit" class="btn btn-md button-theme">Submit Property</button>
                                </div>
                            </div>
                        </form>
                    </div>


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
                    
<!-- Dashboard end -->

<?php include('inc/user_footer.php'); ?>