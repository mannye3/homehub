<?php 
require_once('connect.php');
/*=============================================
        Eroor Messages
=============================================*/
$scmsg="";
$ermsg ="";
$ermsg2 ="";
$smsermsg ="";
$ermsgphone =""; 

/*=============================================
        FOR TIME & DATE 
=============================================*/
        date_default_timezone_set("Africa/Lagos");
        $reg_time = date('g:i A');        //for time hh:mm ss

if(isset($_POST["register"]))
{


  //Assign varables to our values from register form
   $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $phone = trim($_POST['phone']);
    $type = trim($_POST['type']);
    $reg_date = date('l jS \of F Y ');
    $reg_time = date('g:i A');
    $user_code = uniqid();
    $sms_code= rand(100000,999999);

    $password = md5($password);
    $name = ucwords($name);

    
       
      //Check email and password from database for existing users
            $sql="SELECT * FROM users WHERE email='$email' OR phone='$phone' ";
            $result=mysqli_query($con,$sql);
            $row=mysqli_fetch_array($result); 
      


                //If email and password exist in our database
                if($row['email']==$email){
                  

                   $ermsg   = '<div class="alert alert-danger" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <strong>User already exist, Register with a new email</strong></div>';
                  
                }

                if ($row['phone']==$phone) {
                 $ermsgphone   = '<div class="alert alert-danger" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <strong>User already exist, Register with a new phone number</strong></div>';
                }

      else{

      $sql = "INSERT INTO `users`(`name`, `email`,`phone`, `password`, `num`, `user_code`, `status`, `reg_date`, `reg_time`, `type`, `sms_code`)  VALUES ('".$name."','".$email."','".$phone."','".$password."','1','".$user_code."','1','".$reg_date."','".$reg_time."','".$type."','".$sms_code."')";
          $query = mysqli_query($con, $sql);

          

         
    //==================================Send Mail===================================================
          
        //$to  = strtolower(trim($_POST['email']));
          $to  = $email;
          
          // subject
          $subject = 'Registration successfully';
          
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
                            <center><h1><b>Welcome to HomeHub</b></h1></center>
                          </td>
                        </tr>
                        <tr>
                          <td valign="top" style="padding-bottom:20px; background-color:#ffffff;">
                            <b>Hi '.$name.', </b><br>
                             
                            Thank you for signing up on HomeHub. Please click the button below to manage your account.
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
                                        <a href="https://alightsolutionhr.com/my-profile.php"
                                  style="background-color:red;color:#ffffff;display:inline-block;font-family:sans-serif;font-size:18px;line-height:40px;text-align:center;text-decoration:none;width:200px;-webkit-text-size-adjust:none;">Manage Account</a>
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
          $headers .= 'From: hello@alightsolutionhr.com';
             
          // Mail it
          mail($to, $subject, $message, $headers);
          
          //==================================End Mail===================================================//
 $scmsg= ' <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Registration Successful, <a href="login.php" class="alert-link">Login</a> to manage your account</strong> 
                </div>';





}


      
      }




 //===============================LOGIN SECTION========================//
if (isset($_POST['login'])) {


            $email= $_POST['email'];

            $password= $_POST['password'];

            $password = md5($password);

            


            $sql="SELECT * FROM users WHERE email='$email' and password='$password'";

            $result=mysqli_query($con,$sql);

            $row=mysqli_fetch_array($result);

                   

            if($row['email']!=$email && $row['password']!=$password){



              $ermsg2 = '<div class="alert alert-danger" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <strong> Invalid login details, Please check your email or password</strong></div>';

                      }

                              

    

            else{

                

                  $_SESSION['email'] =$row['email'];

                echo "<script language='javascript' type='text/javascript'>

                        window.location.href='dashboard.php';

                        </script>";

            }



        }


        //===============================PASSWORD RECOVER SECTION========================//



    if (isset($_POST['pass-reset'])) {

            $email=$_POST['email'];

          
            $sql="SELECT *  FROM users WHERE email='$email' ";

            $result=mysqli_query($con,$sql);

            $row=mysqli_fetch_array($result);

            

            $user_code=$row['user_code'];

            

                        

            if($row['email']!=$email){



                echo "<script>alert('No account attached to this email'); window.location='recover-pass.php' </script>";



                      }



    

            else{

               $_SESSION['email'] =$email;

                $to  = $email;

          

          // subject

          $subject = 'Password Reset';

          

          // message

          $message = '

       <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <meta name="viewport" content="width=device-width, initial-scale=1" />

  
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

                    <td valign="top" class="body-cell">



                      <table cellpadding="0" cellspacing="0" width="100%" bgcolor="#ffffff">

                        <tr>

                          <td valign="top" style="padding-bottom:15px; background-color:#ffffff;">

                            <h1>A request was made to reset your  password.</h1>

                          </td>

                        </tr>

                        <tr>

                         

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

                                        <a href="https://alightsolutionhr.com/reset-password.php?uc='.$user_code.'"

                                  style="background-color:red;color:#ffffff;display:inline-block;font-family:sans-serif;font-size:18px;line-height:40px;text-align:center;text-decoration:none;width:200px;-webkit-text-size-adjust:none;">Reset Password</a>

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

                           If this wasnt you, please ignore this email. Your account will remain secure. 

                          </td>

                        </tr>

                      </table>

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

          $headers .= 'From: no-reply@homehube.com.ng';

             

          // Mail it

          mail($to, $subject, $message, $headers);

          

          //==================================End Mail===================================================

          



echo "<script>alert('check your email for the reset link'); window.location='forgot-password.php' </script>";



      

            }



        }




//===============================RESET PASSWORD========================//

    if (isset($_POST['reset'])) {

            $user_code=$_POST['user_code'];
            $password=$_POST['password'];
            $password = md5($password);
            
            
            
        
            $sql = "UPDATE users SET password='$password'  WHERE user_code='$user_code' ";
            $query = mysqli_query($con, $sql);
   
                    echo "<script>alert('Update Successful!!'); window.location='login.php' </script>";
        }





//===============================Generate Receipt========================//

                

   if (isset($_POST['receipt'])) {


            $owner_name=$_POST['owner_name'];
            $owner_phone=$_POST['owner_phone'];
            $owner_address=$_POST['owner_address'];
            $rent_address=$_POST['rent_address'];
            $rent=$_POST['rent'];
            $price=$_POST['price'];
            $tenant_name=$_POST['tenant_name'];
            $tenant_phone=$_POST['tenant_phone'];
            $receipt_s_d=$_POST['receipt_s_d'];
            $receipt_e_d=$_POST['receipt_e_d'];
            $email=$_POST['email'];
            $reg_date = date('l jS \of F Y ');
            $receipt_code= rand(100000,999999);
  
           
             $owner_name = ucwords($owner_name);
             $tenant_name = ucwords($tenant_name);

            
                
             if ($owner_name==!"" and $tenant_name==!"") {
              
              
               $sql = "INSERT INTO `receipt`(`owner_name`, `owner_phone`, `owner_address`, `rent_address`, `rent`, `price`, `tenant_name`, `tenant_phone`, `receipt_s_d`, `receipt_e_d`, `email`, `receipt_code`, `reg_date`,`num`) VALUES ('".$owner_name."','".$owner_phone."','".$owner_address."','".$rent_address."','".$rent."','".$price."','".$tenant_name."','".$tenant_phone."','".$receipt_s_d."','".$receipt_e_d."','".$email."','".$receipt_code."','".$reg_date."','1')";
                $query = mysqli_query($con, $sql);




                      //==================================Send Mail===================================================
          
        //$to  = strtolower(trim($_POST['email']));
          $to  = $email;
          
          // subject
          $subject = 'Rent Receipt';
          
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
                            <center><h1><b>Rent Reciept</b></h1></center>
                          </td>
                        </tr>
                        <tr>
                          <td valign="top" style="padding-bottom:20px; background-color:#ffffff;">
                            <b><h1>Hi '.$owner_name.',</h1></b><br>
                             
                           Thanks for using HomeHub for generating rent receipts. Now you know whom to look up to for your properties  for rent, buy or sell.
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
                                        <a href="https://alightsolutionhr.com/rent_receipt.php?receipt_code='.$receipt_code.'"
                                  style="background-color:red;color:#ffffff;display:inline-block;font-family:sans-serif;font-size:18px;line-height:40px;text-align:center;text-decoration:none;width:200px;-webkit-text-size-adjust:none;">Download Rent Receipt</a> 
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
          $headers .= 'From: hello@homehube.com.ng';
             
          // Mail it
          mail($to, $subject, $message, $headers);


          $_SESSION['receipt_code'] =$receipt_code;


     echo "<script language='javascript' type='text/javascript'>

                        window.location.href='confirmation.php';

                        </script>";

         
              
            }

          
            else

                 {

                    ?><script>alert('Error');window.location='index.php'</script><?php

                 } 

        }





        if (isset($_POST['upt-pro'])) {

             $phone = trim($_POST['phone']);
              $password = trim($_POST['password']);
           
                  
               $sql = "UPDATE users SET  phone='".$phone."',  password='".$password."' WHERE email='$user_check' ";
                 $query = mysqli_query($con, $sql);

             echo "<script>alert('Update Successful!!'); window.location='dashboard.php'</script>";

            


            }



            

      ?>

