<?php 
$ermsg2="";
$smsermsg ="";

date_default_timezone_set("Africa/Lagos");


            //////////////////////////////////////// SUBMIT PROPERTY////////////////////////////////////

    if (isset($_POST['sub-pro'])) {

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
            $fullname=$_POST['fullname'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $user_code=$_POST['user_code'];
            $occupation=$_POST['occupation'];
            $upload_date = date('jS \ F Y h:i:s A');
            $property_no= rand(100000,999999);
          
            
           
           
             $title = ucwords($title);
             $state = ucwords($state);
             $lga = ucwords($lga);


            
                
             if ($title==!"" and $address==!"") {
              
              
               $sql = "INSERT INTO `property`(`title`, `type`, `purpose`,`price`, `rooms`, `bathrooms`, `details`, `address`,`latitude`, `longitude`, `state`, `lga`,  `property_no`, `fullname`, `email`, `phone`, `occupation`, `user_code`,`upload_date`, `status`,`rent_status`, `num`) VALUES ('".$title."','".$type."','".$purpose."','".$price."','".$rooms."','".$bathrooms."','".$details."','".$address."','".$latitude."','".$longitude."','".$state."','".$lga."','".$property_no."','".$fullname."','".$email."','".$phone."','".$occupation."','".$user_code."','".$upload_date."','0','1','1')";
                $query = mysqli_query($con, $sql);


                 //==================================Send Mail===================================================
          
        //$to  = strtolower(trim($_POST['email']));
          $to  = $email;
          
          // subject
          $subject = 'Listing successfuly';
          
          // message
          $message = '
       <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Zen Flat Welcome Email</title>
  <style type="text/css" media="screen">

    /* Force Hotmail to display emails at full width */
    .ExternalClass {
      display: block !important;
      width: 100%;
    }

    /* Force Hotmail to display normal line spacing */
    .ExternalClass,
    .ExternalClass p,
    .ExternalClass span,
    .ExternalClass font,
    .ExternalClass td,
    .ExternalClass div {
      line-height: 100%;
    }

    body,
    p,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      margin: 0;
      padding: 0;
    }

    body,
    p,
    td {
      font-family: Arial, Helvetica, sans-serif;
      font-size: 15px;
      color: #333333;
      line-height: 1.5em;
    }

    h1 {
      font-size: 24px;
      font-weight: normal;
      line-height: 24px;
    }

    body,
    p {
      margin-bottom: 0;
      -webkit-text-size-adjust: none;
      -ms-text-size-adjust: none;
    }

    img {
      outline: none;
      text-decoration: none;
      -ms-interpolation-mode: bicubic;
    }

    a img {
      border: none;
    }

    .background {
      background-color: #333333;
    }

    table.background {
      margin: 0;
      padding: 0;
      width: 100% !important;
    }

    .block-img {
      display: block;
      line-height: 0;
    }

    a {
      color: white;
      text-decoration: none;
    }

    a,
    a:link {
      color: #2A5DB0;
      text-decoration: underline;
    }

    table td {
      border-collapse: collapse;
    }

    td {
      vertical-align: top;
      text-align: left;
    }

    .wrap {
      width: 600px;
    }

    .wrap-cell {
      padding-top: 30px;
      padding-bottom: 30px;
    }

    .header-cell,
    .body-cell,
    .footer-cell {
      padding-left: 20px;
      padding-right: 20px;
    }

    .header-cell {
      background-color: #eeeeee;
      font-size: 24px;
      color: #ffffff;
    }

    .body-cell {
      background-color: #ffffff;
      padding-top: 30px;
      padding-bottom: 34px;
    }

    .footer-cell {
      background-color: #eeeeee;
      text-align: center;
      font-size: 13px;
      padding-top: 30px;
      padding-bottom: 30px;
    }

    .card {
      width: 400px;
      margin: 0 auto;
    }

    .data-heading {
      text-align: right;
      padding: 10px;
      background-color: #ffffff;
      font-weight: bold;
    }

    .data-value {
      text-align: left;
      padding: 10px;
      background-color: #ffffff;
    }

    .force-full-width {
      width: 100% !important;
    }

  </style>
  <style type="text/css" media="only screen and (max-width: 600px)">
    @media only screen and (max-width: 600px) {
      body[class*="background"],
      table[class*="background"],
      td[class*="background"] {
        background: #eeeeee !important;
      }

      table[class="card"] {
        width: auto !important;
      }

      td[class="data-heading"],
      td[class="data-value"] {
        display: block !important;
      }

      td[class="data-heading"] {
        text-align: left !important;
        padding: 10px 10px 0;
      }

      table[class="wrap"] {
        width: 100% !important;
      }

      td[class="wrap-cell"] {
        padding-top: 0 !important;
        padding-bottom: 0 !important;
      }
    }
  </style>
</head>

<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0" bgcolor="" class="background">
  <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" class="background">
    <tr>
      <td align="center" valign="top" width="100%" class="background">
        <center>
          <table cellpadding="0" cellspacing="0" width="600" class="wrap">
            <tr>
              <td valign="top" class="wrap-cell" style="padding-top:30px; padding-bottom:30px;">
                <table cellpadding="0" cellspacing="0" class="force-full-width">
                  <tr>
                   <td height="60" valign="top" class="header-cell">
                      <img width="196" height="140" src="https://alightsolutionhr.com/img/logos/hub.png" alt="img">
                    </td>
                  </tr>
                  <tr>
                    <td valign="top" class="body-cell">

                      <table cellpadding="0" cellspacing="0" width="100%" bgcolor="#ffffff">
                        <tr>
                          <td valign="top" style="padding-bottom:15px; background-color:#ffffff;">
                            <center><h1><b>Listing successfuly</b></h1></center>
                          </td>
                        </tr>
                        <tr>
                          <td valign="top" style="padding-bottom:20px; background-color:#ffffff;">
                            <b><h1>Hi  '.$fullname.',</h1></b><br>
                             
                           Your property as been posted successfuly, and await approval from our administrator.
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <table cellspacing="0" cellpadding="0" width="100%" bgcolor="#ffffff">
                              <tr>
                                <td style="width:200px;background:#008000;">
                                  <div><!--[if mso]>
                                    <v:rect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="#" style="height:40px;v-text-anchor:middle;width:200px;" stroke="f" fillcolor="#008000">
                                      <w:anchorlock/>
                                      <center>
                                    <![endif]-->
                                        <a href="https://alightsolutionhr.com/property.php?pro='.$property_no.'"
                                  style="background-color:red;color:#ffffff;display:inline-block;font-family:sans-serif;font-size:18px;line-height:40px;text-align:center;text-decoration:none;width:200px;-webkit-text-size-adjust:none;">View Property</a> 
                                    <!--[if mso]>
                                      </center>
                                    </v:rect>
                                  <![endif]--></div>
                                </td>
                                <td width="360" style="background-color:#ffffff; font-size:0; line-height:0;">&nbsp;</td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                        <tr>
                          <td style="padding-top:20px;background-color:#ffffff;">
                            Thank you so much.<br>
                            Team <b>HomeHub</b>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td valign="top" class="footer-cell">
                     HomeHub<br>
                      an <a href="https://alightsolutionhr.com"  target="_blank" > HomeHub</a>, INC company
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </center>
      </td>
    </tr>
  </table>

</body>
</html>


          ';
          
          // To send HTML mail, the Content-type header must be set
          $headers  = 'MIME-Version: 1.0' . "\r\n";
          $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
          
          // Additional headers
          $headers .= 'To: '.strtolower(trim($_POST['email'])). "\r\n";
          //$headers .= 'To: '.$email;. "\r\n";
          $headers .= 'From: HomeHub';
             
          // Mail it
          mail($to, $subject, $message, $headers);
          
          //==================================End Mail===================================================//


            
                $_SESSION['property_no'] =$property_no;

               echo "<script language='javascript' type='text/javascript'>

                        window.location.href='add_pictures.php';

                        </script>";
              
            }

          
            else

                 {



                    ?><script>alert('Error Adding Property');window.location='submit-property.php'</script><?php

                 } 

        }



                //===============================UPDATE USER PROFILE========================//




                if (isset($_POST['feat_pic'])) {

                  // ini_set('display_errors', '0');         # don't show any errors...
                  // error_reporting(E_ALL | E_STRICT); 

                   $img = trim($_POST['img']);
                   $property_no = trim($_POST['property_no']);

                    if ($img =="") {

                     echo "<script>window.location='my-properties.php' </script>";
                    }
                      
                      else{
                       
                     $sql = "UPDATE property SET pic='$img' where property_no='$property_no' ";
                     $query = mysqli_query($con, $sql);

                     echo "<script>window.location='my-properties.php' </script>";
                      }

                  

                  
        }

 



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


            
                
             
              
              
                $sql = "UPDATE property SET  title='".$title."',  type='".$type."',  purpose='".$purpose."',  price='".$price."',  rooms='".$rooms."', bathrooms='".$bathrooms."', details='".$details."', address='".$address."', latitude='".$latitude."', longitude='".$longitude."', state='".$state."', lga='".$lga."' WHERE email='$user_check' ";
                  $query = mysqli_query($con, $sql);

                     echo "<script>alert('Update Successful!!'); window.location='my-properties.php'</script>";

            


            }





    if (isset($_POST['pro-pic'])) {

     $filename = rand(1000,100000)."-".$_FILES['filename']['name'];
      $pic_loc = $_FILES['filename']['tmp_name'];
        $folder="upload/profile/";
       if(move_uploaded_file($pic_loc,$folder.$filename))
       {

    
       $sql = "UPDATE users SET image='".$filename."' WHERE email='$user_check' ";
                $query = mysqli_query($con, $sql);

              echo "<script>alert('Successful!!'); window.location='my-profile.php'</script>";

       }
       else
       {
          ?><script>alert('error while uploading file');</script><?php
       }
}




if(isset($_POST["message"])) {

   
    $s_email=$_POST["s_email"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $msg=$_POST["msg"];
    $name=$_POST["name"];
    $user_code=$_POST["user_code"];
    $msg_date=  date('jS \ F Y h:i:s A');
    $msg_code= rand(100000,999999);

    







    $sql = "INSERT INTO `message`(`name`, `s_email`,`phone`, `msg`, `user_code`, `email`, `msg_date`,`status`, `num`, `msg_code`) VALUES ('".$name."','".$s_email."','".$phone."','".$msg."','".$user_code."','".$email."','".$msg_date."','1','1','".$msg_code."')";
                $query = mysqli_query($con, $sql);
  

    //$to  = strtolower(trim($_POST['email']));
          $to  = $email;
          
          // subject
          $subject = 'Message Notification';
          
          // message
          $message = '
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Zen Flat Welcome Email</title>
  <style type="text/css" media="screen">

    /* Force Hotmail to display emails at full width */
    .ExternalClass {
      display: block !important;
      width: 100%;
    }

    /* Force Hotmail to display normal line spacing */
    .ExternalClass,
    .ExternalClass p,
    .ExternalClass span,
    .ExternalClass font,
    .ExternalClass td,
    .ExternalClass div {
      line-height: 100%;
    }

    body,
    p,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      margin: 0;
      padding: 0;
    }

    body,
    p,
    td {
      font-family: Arial, Helvetica, sans-serif;
      font-size: 15px;
      color: #333333;
      line-height: 1.5em;
    }

    h1 {
      font-size: 24px;
      font-weight: normal;
      line-height: 24px;
    }

    body,
    p {
      margin-bottom: 0;
      -webkit-text-size-adjust: none;
      -ms-text-size-adjust: none;
    }

    img {
      outline: none;
      text-decoration: none;
      -ms-interpolation-mode: bicubic;
    }

    a img {
      border: none;
    }

    .background {
      background-color: #333333;
    }

    table.background {
      margin: 0;
      padding: 0;
      width: 100% !important;
    }

    .block-img {
      display: block;
      line-height: 0;
    }

    a {
      color: white;
      text-decoration: none;
    }

    a,
    a:link {
      color: #2A5DB0;
      text-decoration: underline;
    }

    table td {
      border-collapse: collapse;
    }

    td {
      vertical-align: top;
      text-align: left;
    }

    .wrap {
      width: 600px;
    }

    .wrap-cell {
      padding-top: 30px;
      padding-bottom: 30px;
    }

    .header-cell,
    .body-cell,
    .footer-cell {
      padding-left: 20px;
      padding-right: 20px;
    }

    .header-cell {
      background-color: #eeeeee;
      font-size: 24px;
      color: #ffffff;
    }

    .body-cell {
      background-color: #ffffff;
      padding-top: 30px;
      padding-bottom: 34px;
    }

    .footer-cell {
      background-color: #eeeeee;
      text-align: center;
      font-size: 13px;
      padding-top: 30px;
      padding-bottom: 30px;
    }

    .card {
      width: 400px;
      margin: 0 auto;
    }

    .data-heading {
      text-align: right;
      padding: 10px;
      background-color: #ffffff;
      font-weight: bold;
    }

    .data-value {
      text-align: left;
      padding: 10px;
      background-color: #ffffff;
    }

    .force-full-width {
      width: 100% !important;
    }

  </style>
  <style type="text/css" media="only screen and (max-width: 600px)">
    @media only screen and (max-width: 600px) {
      body[class*="background"],
      table[class*="background"],
      td[class*="background"] {
        background: #eeeeee !important;
      }

      table[class="card"] {
        width: auto !important;
      }

      td[class="data-heading"],
      td[class="data-value"] {
        display: block !important;
      }

      td[class="data-heading"] {
        text-align: left !important;
        padding: 10px 10px 0;
      }

      table[class="wrap"] {
        width: 100% !important;
      }

      td[class="wrap-cell"] {
        padding-top: 0 !important;
        padding-bottom: 0 !important;
      }
    }
  </style>
</head>

<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0" bgcolor="" class="background">
  <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" class="background">
    <tr>
      <td align="center" valign="top" width="100%" class="background">
        <center>
          <table cellpadding="0" cellspacing="0" width="600" class="wrap">
            <tr>
              <td valign="top" class="wrap-cell" style="padding-top:30px; padding-bottom:30px;">
                <table cellpadding="0" cellspacing="0" class="force-full-width">
                  <tr>
                   <td height="60" valign="top" class="header-cell">
                      <img width="196" height="140" src="https://alightsolutionhr.com/img/logos/hub.png" alt="img">
                    </td>
                  </tr>
                  <tr>
                    <td valign="top" class="body-cell">

                      <table cellpadding="0" cellspacing="0" width="100%" bgcolor="#ffffff">
                        <tr>
                          <td valign="top" style="padding-bottom:15px; background-color:#ffffff;">
                            <center><h1><b>Message Notification</b></h1></center>
                          </td>
                        </tr>
                        <tr>
                          <td valign="top" style="padding-bottom:20px; background-color:#ffffff;">
                            </b>
                           <b>From</b> : '.$name.'
                                       <br>
                                       <b>Phone</b>: '.$phone.'
                                       <br>
                                       <b>Email</b>: '.$s_email.'
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <table cellspacing="0" cellpadding="0" width="100%" bgcolor="#ffffff">
                              <tr>
                                <td style="width:200px;background:#008000;">
                                  <div><!--[if mso]>
                                    <v:rect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="#" style="height:40px;v-text-anchor:middle;width:200px;" stroke="f" fillcolor="#008000">
                                      <w:anchorlock/>
                                      <center>
                                    <![endif]-->
                                        <a href="https://alightsolutionhr.com/login.php"
                                  style="background-color:red;color:#ffffff;display:inline-block;font-family:sans-serif;font-size:18px;line-height:40px;text-align:center;text-decoration:none;width:300px;-webkit-text-size-adjust:none;">Login to read your message</a> 
                                    <!--[if mso]>
                                      </center>
                                    </v:rect>
                                  <![endif]--></div>
                                </td>
                                <td width="360" style="background-color:#ffffff; font-size:0; line-height:0;">&nbsp;</td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                        <tr>
                          <td style="padding-top:20px;background-color:#ffffff;">
                           
                            Team <b>HomeHub</b>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td valign="top" class="footer-cell">
                     HomeHub<br>
                      an <a href="https://alightsolutionhr.com"  target="_blank" > HomeHub</a>, INC company
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </center>
      </td>
    </tr>
  </table>

</body>
</html>
          ';
          
          // To send HTML mail, the Content-type header must be set
          $headers  = 'MIME-Version: 1.0' . "\r\n";
          $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
          
          // Additional headers
          $headers .= 'To: '.strtolower(trim($_POST['email'])). "\r\n";
          //$headers .= 'To: '.$email;. "\r\n";
          $headers .= 'From: HomeHub';
             
          // Mail it
          mail($to, $subject, $message, $headers);
          
          //==================================End Mail===================================================//

           $_SESSION['msg_code'] =$msg_code;

     echo "<script>alert('Your Message As Been Sent '); </script>";


   }


   /////////////////////////////////// UPDATE USER PASSWORD/////////////////////////////////////////////////



        if (isset($_POST['change-pass'])) {

               $newpassword = trim($_POST['newpassword']);
               $password = trim($_POST['password']);
               $password = md5($password);
               $newpassword = md5($newpassword);



        $sql="SELECT * FROM users WHERE password='$password'";

            $result=mysqli_query($con,$sql);

            $row=mysqli_fetch_array($result);


            if($row['password']!=$password){

              // $ermsg2 = '<div class="alert alert-danger">
              //                   <button data-dismiss="alert" class="close">
              //                     &times;
              //                   </button>
              //                   <center><strong>Password not correct</strong></center> 
                                
              //                 </div>';

                               echo "<script>alert('Password not correct'); window.location='my-profile.php' </script>";

                      }

                      else{

          $sql = "UPDATE users SET password='".$newpassword."' WHERE email='$user_check' ";
          $query = mysqli_query($con, $sql);

          echo "<script>alert('Update Successful!'); window.location='my-profile.php' </script>";
                      }

                    }







 

/////////////////////////////////// UPDATE USER PROFILE/////////////////////////////////////////////////


if ((isset($_POST["profileupdate"]))) {
 
   
     $name = trim($_POST['name']);
     $email = trim($_POST['email']);
     $occupation = trim($_POST['occupation']);
     $location = trim($_POST['location']);
     $phone = trim($_POST['phone']);
     $about = trim($_POST['about']);
    
     $name = ucwords($name);
     $occupation = ucwords($occupation);
     

        $sql = "UPDATE users SET  name='".$name."',  email='".$email."',  occupation='".$occupation."',  location='".$location."',  phone='".$phone."', about='".$about."' WHERE email='$user_check' ";
            $query = mysqli_query($con, $sql);

          echo "<script>alert('Update Successful!'); window.location='my-profile.php'</script>";

         
   }




   /////////////////////////////////// UPDATE PROFILE PIC /////////////////////////////////////////////////


 if (isset($_POST['pro-pic'])) {

     $filename = rand(1000,100000)."-".$_FILES['filename']['name'];
      $pic_loc = $_FILES['filename']['tmp_name'];
        $folder="admin/upload/";
       if(move_uploaded_file($pic_loc,$folder.$filename))
       {

    
       $sql = "UPDATE users SET image='".$filename."' WHERE email='$user_check' ";
                $query = mysqli_query($con, $sql);

              echo "<script>alert('Successful!!'); window.location='dashboard.php'</script>";

       }
       else
       {
          ?><script>alert('error while uploading file');</script><?php
       }
}



 
 /////////////////////////////// CREATE SESSION TO ADD MORE PICTURES  //////////////////////////////////
      
            

                   if (isset($_POST['add_more_pic'])) {

                        
                        
                         $property_no = trim($_POST['property_no']);
                      
                        
                       
                           $_SESSION['property_no'] =$property_no;

                echo "<script language='javascript' type='text/javascript'>

                        window.location.href='add_pictures.php';

                        </script>";

           


                  
        }






      if (isset($_POST['upt-phone-sms'])) {

            $phone=$_POST['phone'];
            $sms_code= rand(100000,999999);
            

              
          $sql = "UPDATE users SET  phone='".$phone."', sms_code='".$sms_code."' WHERE email='$user_check' ";
          $query = mysqli_query($con, $sql);


           $sql2="SELECT * FROM users WHERE email='$user_check' ";
              $result2=mysqli_query($con,$sql2);
              $row2=mysqli_fetch_array($result2); 

                $sms_phone = $row2['phone'];

                $sms_code = $row2['sms_code'];

                 if($row2['type']=='Agent'){

                   header("Access-Control-Allow-Origin: *");
                  //rebuild form data
                  $postdata = http_build_query(
                      array(
                    'username' => 'aboajahemmanuel@gmail.com',
                    'password' => 'goodboy',
                    'message' => 'VerificationCode:'.$sms_code.' ',
                    'mobiles' => $sms_phone,
                    'sender' => 'HomeHub',
                      )
                  );
                  //prepare a http post request
                  $opts = array('http' =>
                      array(
                          'method'  => 'POST',
                          'header'  => 'Content-type: application/x-www-form-urlencoded',
                          'content' => $postdata
                      )
                  );
                  //craete a stream to communicate with betasms api
                  $context  = stream_context_create($opts);
                  //get result from communication
                  $result = file_get_contents('http://login.betasms.com/api/', false, $context);
                  //return result to client, this will return the appropriate respond code
                  
                  
                 
                   echo "<script>window.location='confirm_num.php'</script>";
                  
                }
    


            }



          if (isset($_POST['comfirm-agent'])) {

              
              $sms_code = trim($_POST['sms_code']);

               $sql="SELECT * FROM users  WHERE email='$user_check' ";
              $result=mysqli_query($con,$sql);
              $row=mysqli_fetch_array($result); 



                  if($row['sms_code']!==$sms_code){
                  

                   $smsermsg = '<div class="alert alert-danger" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <strong>Invalid Verification Code</strong></div>';
                  
                }

              
           else{

            $sql = "UPDATE users SET  user_status='confirm'  WHERE email='$user_check' ";
                 $query = mysqli_query($con, $sql);

                 
                echo "<script language='javascript' type='text/javascript'>

                        window.location.href='submit-property.php';

                        </script>";

           }
    
               

            


            }


      ?>

