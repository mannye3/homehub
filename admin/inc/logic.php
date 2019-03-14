<?php 
session_start();
include"connect.php";



//===============================LOGIN SECTION========================//
if (isset($_POST['login'])) {


            $email= $_POST['email'];

            $password= $_POST['password'];

            $password = md5($password);

            


            $sql="SELECT * FROM admin WHERE email='$email' and password='$password'";

            $result=mysqli_query($con,$sql);

            $row=mysqli_fetch_array($result);

                   

            if($row['email']!=$email && $row['password']!=$password){



              $ermsg2 = '<div class="alert alert-danger">
                                <button data-dismiss="alert" class="close">
                                  &times;
                                </button>
                                <center><strong>Invalid login details,Please check your email and password</strong></center> 
                                
                              </div>';

                      }

                              

    

            else{

                

                  $_SESSION['email'] =$row['email'];

  echo "<script language='javascript' type='text/javascript'>

  window.location.href='dashboard.php';

                        </script>";

            }



        }



























 //===============================UPDATE USER PROFILE========================//


                   if (isset($_POST['upt-pro'])) {

                       $name = trim($_POST['name']);
                       $email = trim($_POST['email']);
                       $phone = trim($_POST['phone']);
                       $phone2 = trim($_POST['phone2']);
                       $address = trim($_POST['address']);
                       $name = ucwords($name);

                     $sql = "UPDATE users_google SET name='".$name."', email='".$email."', 
                     phone='".$phone."', phone2='".$phone2."', address='".$address."'  
                     WHERE  email='$user_check' ";
                     $query = mysqli_query($con, $sql);

                  echo "<script>alert('Update Successful!!'); window.location='dashboard.php' </script>";

                  
        }



 //===============================LOGIN SECTION========================//
if (isset($_POST['add-property'])) {


            $title=$_POST['title'];
            $type=$_POST['type'];
            $price=$_POST['price'];
            $rooms=$_POST['rooms'];
            $bathrooms=$_POST['bathrooms'];
            $SqFt=$_POST['SqFt'];
            $details=$_POST['details'];
            $address=$_POST['location'];
            $latitude=$_POST['latitude'];
            $longitude=$_POST['longitude'];
            $state=$_POST['state'];
            $lga=$_POST['lga'];
            $fullname=$_POST['fullname'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            /*$features007=$_POST['features007'];*/
            $features007 = substr($_POST['features007'], 3, 1000);
            $upload_date = date('l jS \of F Y ');
            $reg_date = date('l jS \of F Y ');
            $property_no= rand(100000,999999);
            $user_code = uniqid();
            
           
           
             $title = ucwords($title);
             $fullname = ucwords($fullname);

            
                
             if ($title==!"" and $address==!"") {
              
              
               $sql = "INSERT INTO `property`(`title`, `type`, `price`, `rooms`, `bathrooms`, `SqFt`, `details`, `address`,`latitude`, `longitude`, `state`, `lga`,  `property_no`, `fullname`, `email`, `phone`,`upload_date`, `status`,`rent_status`, `num`, `features007`) VALUES ('".$title."','".$type."','".$price."','".$rooms."','".$bathrooms."','".$SqFt."','".$details."','".$address."','".$latitude."','".$longitude."','".$state."','".$lga."','".$property_no."','".$fullname."','".$email."','".$phone."','".$upload_date."','1','1','1','".$features007."')";
                $query = mysqli_query($con, $sql);


                /* $sql3="SELECT * FROM users WHERE email='$email' ";
                  $result=mysqli_query($con,$sql3);
                   $row=mysqli_fetch_array($result);

                if($row['email']==$email){

            $sql2 = "UPDATE users SET email='".$email."', name='".$fullname."', phone='".$phone."'  WHERE email='".$email."'";  
               }


               else{


               $sql2 = "INSERT INTO `users`(`name`, `email`, `phone`,`num`, `user_code`, `status`, `reg_date`) VALUES ('".$fullname."','".$email."','".$phone."','1','".$user_code."','1','".$reg_date."')";
              
               }*/






                $_SESSION['property_no'] =$property_no;

               echo "<script language='javascript' type='text/javascript'>

                        window.location.href='../add_pictures.php';

                        </script>";
              
            }

          
            else

                 {

                    ?><script>alert('Error Adding truck');window.location='add_property.php'</script><?php

                 } 

        }



                //===============================UPDATE USER PROFILE========================//




                if (isset($_POST['feat_pic'])) {

                       $img = trim($_POST['img']);
                      
                       
                     $sql = "UPDATE property SET pic='$img' where property_no='$property_no' ";
                     $query = mysqli_query($con, $sql);

                  echo "<script>alert('Property Upload Successfully!!'); window.location='properties.php' </script>";

                  
        }

 


      ?>

