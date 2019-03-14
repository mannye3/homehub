<?php 
include('connect.php');
$rowid = $_GET['id'];


 if (isset($_POST['upt-pro'])) {

            $title=$_POST['title'];
            $type=$_POST['type'];
            $purpose=$_POST['purpose'];
            $price=$_POST['price'];
            $rooms=$_POST['rooms'];
            $bathrooms=$_POST['bathrooms'];
            $details=$_POST['details'];
            $address=$_POST['address'];
            $latitude=$_POST['latitude'];
            $longitude=$_POST['longitude'];
            $state=$_POST['state'];
            $lga=$_POST['lga'];
           
          
            
           
           
             $title = ucwords($title);
             $state = ucwords($state);
              $lga = ucwords($lga);


            
                
             
              
              
                $sql = "UPDATE property SET  title='".$title."',  type='".$type."',  purpose='".$purpose."',  price='".$price."',  rooms='".$rooms."', bathrooms='".$bathrooms."', details='".$details."', address='".$address."', latitude='".$latitude."', longitude='".$longitude."', state='".$state."', lga='".$lga."' WHERE id=$rowid";
                  $query = mysqli_query($con, $sql);

                     echo "<script>alert('Update Successful!!'); window.location='../my-properties.php'</script>";

            


            }














      ?>

