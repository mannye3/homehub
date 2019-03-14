<?php
include('connect.php');

            $property_no= $_POST['property_no'];

            $sql="SELECT * FROM property WHERE property_no='$property_no' ";

            $result=mysqli_query($con,$sql);

            $row=mysqli_fetch_array($result);


                  $_SESSION['property_no'] =$row['property_no'];

                echo "<script language='javascript' type='text/javascript'>

                        window.location.href='../property_preview.php';

                        </script>";

?>