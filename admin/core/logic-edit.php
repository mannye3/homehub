<?php
require_once('connect.php');
$rowid = $_GET['id'];


/////////////////////////////////// UPDATE STUDENT INFO /////////////////////////////////////////////////


                   if (isset($_POST['upt-user'])) {

                       $name = trim($_POST['name']);
                       $email = trim($_POST['email']);
                       $phone = trim($_POST['phone']);
                       $location = trim($_POST['location']);
                       $password = trim($_POST['password']);
                       $user_code = trim($_POST['user_code']);

                       $name = ucwords($name);
                       $password = md5($password);

                      $sql = "UPDATE users SET name='".$name."', email='".$email."', 
                     phone='".$phone."', password='".$password."' , location='".$location."'
                       WHERE id=$rowid ";
                     $query = mysqli_query($con, $sql);

                     header('Location: ../user.php?user='.$user_code);

                
                      

                    }


/////////////////////////////////// UPDATE CLASS/////////////////////////////////// 


                   if (isset($_POST['upt-property'])) {

                    

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

                           echo "<script>alert('Update Successful!!'); window.location='../properties.php'</script>";

                  


            }




/////////////////////////////////// UPDATE CLASS/////////////////////////////////// 


                   if (isset($_POST['upt-subject'])) {

                       $subject_title = trim($_POST['subject_title']);
                       $level = trim($_POST['level']);
                      
                        $subject_title = strtoupper($subject_title);

                     $sql = "UPDATE subjects SET subject_title='".$subject_title."', level='".$level."'  
                       WHERE id=$rowid";
                     $query = mysqli_query($con, $sql);

                  echo "<script>alert('Update Successful!!'); window.location='../subjects.php' </script>";

                  
        }



    /////////////////////////////////// UPDATE TEACHER/////////////////////////////////// 


                   if (isset($_POST['upt-teacher'])) {

                       $full_name = trim($_POST['full_name']);
                       $email = trim($_POST['email']);
                       $phone = trim($_POST['phone']);
                       $password = trim($_POST['password']);
                       $section = trim($_POST['section']);
                       $class_code = trim($_POST['class_code']);
                      

                        $password = md5($password);
                        $full_name = ucwords($full_name);

                     $sql = "UPDATE teachers SET full_name='".$full_name."', email='".$email."', 
                     phone='".$phone."', password='".$password."' , section='".$section."', class_code='".$class_code."'
                       WHERE id=$rowid";
                     $query = mysqli_query($con, $sql);

                  echo "<script>alert('Update Successful!!'); window.location='../teachers.php' </script>";

                  
        }






/////////////////////////////////// UPDATE STUDENT PROFILE PIC /////////////////////////////////////////////////


                   if (isset($_POST['upt-student-pic'])) {

                       $filename = rand(1000,100000)."-".$_FILES['filename']['name'];
                        $pic_loc = $_FILES['filename']['tmp_name'];
                          $folder="../pictures/";
                         if(move_uploaded_file($pic_loc,$folder.$filename))
                         {

                      
                         $sql = "UPDATE students SET image='".$filename."'  WHERE id=$rowid ";
                                  $query = mysqli_query($con, $sql);

                                echo "<script>alert('Successful!!');</script>";

                         }
                         else
                         {
                            ?><script>alert('error while uploading picture');</script><?php
                         }
                  }





/////////////////////////////////// UPDATE STUDENT INFO /////////////////////////////////////////////////


                   if (isset($_POST['upt-student'])) {

                       $s_full_name = trim($_POST['s_full_name']);
                       $sex = trim($_POST['sex']);
                       $class = trim($_POST['class']);
                       $class_teacher = trim($_POST['class_teacher']);
                       $class_code = trim($_POST['class_code']);
                       $phone = trim($_POST['phone']);
                       $password = trim($_POST['password']);

                       $s_full_name = ucwords($s_full_name);
                       $password = md5($password);

                      $sql = "UPDATE students SET s_full_name='".$s_full_name."', sex='".$sex."', 
                     phone='".$phone."', password='".$password."' , class='".$class."', class_code='".$class_code."', class_teacher='".$class_teacher."'
                       WHERE id=$rowid";
                     $query = mysqli_query($con, $sql);

                  echo "<script>alert('Update Successful!!'); window.location='../students.php' </script>";
                      

                    }





 /////////////////////////////////// UPDATE STUDENT INFO /////////////////////////////////////////////////


                   if (isset($_POST['upt-question'])) {

                        $question = trim($_POST['question']);
                         $option1 = trim($_POST['option1']);
                         $option2 = trim($_POST['option2']);
                         $option3 = trim($_POST['option3']);
                         $option4 = trim($_POST['option4']);
                         $answer = trim($_POST['answer']);
                         $class = trim($_POST['class']);
                         $class_code = trim($_POST['class_code']);
                         $subject_title = trim($_POST['subject_title']);
                         $sub_code = trim($_POST['sub_code']);

                      $sql = "UPDATE questions SET question='".$question."', option1='".$option1."', 
                     option2='".$option2."', option3='".$option3."' , option4='".$option4."' , answer='".$answer."', class_code='".$class_code."', class='".$class."', sub_code='".$sub_code."', subject_title='".$subject_title."'
                       WHERE id=$rowid";
                     $query = mysqli_query($con, $sql);

                  echo "<script>alert('Update Successful!!'); window.location='../questions.php' </script>";
                      

                    }




      ////////////////////////////////// ASSIGN SUBJECT TO TEACHER/////////////////////////////////// 


                   if (isset($_POST['assign-sub'])) {

                        $subjects= $_POST['subjects'];
                        foreach($subjects as $sub)  
                           {  
                              $sub2 .= $sub.",";  
                            
                           $subjects = substr($sub2, 0, -1);
                           }  
                      
                       

                     $sql = "UPDATE teachers SET subjects='".$subjects."'  
                       WHERE id=$rowid";
                     $query = mysqli_query($con, $sql);

                  echo "<script>alert('Successful!!'); window.location='../teachers.php' </script>";

                  
        }


?>