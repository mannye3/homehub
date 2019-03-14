<?php
include('core/session.php');


    $property_no=$_SESSION['property_no'];     
     $sql4 = "SELECT * FROM pro_img WHERE property_no='$property_no' ";
     $query4 = mysqli_query($con, $sql4);
     // $row_pro = mysqli_fetch_array($query4);

      
?>


<?php


 while ($rw5 = mysqli_fetch_array($query4)) {
                                       
                                         
                                             ?>
      
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="team-1">
                    <div class="team-photo">
                       
                            <img src="<?php  echo $rw5['pic'];  ?>"  class="img-fluid">
                           
                                    <br>
                                      <br>
                            <center><input type="radio" value="<?php  echo $rw5['pic'];  ?>" class="inline img-fluid" name="img"></center>

                            <input name="property_no" value="<?php  echo $rw5['property_no'];  ?>">
                        
                    </div>
                </div>
            </div>
          </div>

              <?php
                                               
                                            }

                                            ?>
